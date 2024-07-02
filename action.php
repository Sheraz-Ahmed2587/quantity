<?php
session_start();
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/PayPal-PHP-SDK/autoload.php";

require "./invoicr/invlib/invoicr.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('src/PHPMailer.php');
require 'src/Exception.php';
require 'src/SMTP.php';


// require 'src/PHPMailer.php';
// use PhpOffice\PhpWord\Writer\ODText\Part\Mimetype;
// use PHPMailer\PHPMailer\SMTP;

require_once("admin/database.php");
$db = db::open();
$datee = date("d-m-Y");


//add_register, Sign Up

if (isset($_POST['register'])) {
  $firstname = $db->real_escape_string($_POST['firstname']);
  $lastname = $db->real_escape_string($_POST['lastname']);
  $email = $db->real_escape_string($_POST['email']);
  $password = $db->real_escape_string($_POST['password']);
  // $referralCode = 'REF_' . uniqid();
  $referralCode = uniqid();


  $check_email = "SELECT * FROM `user` WHERE `email` = '$email'";
  $result_check_email = db::getRecord($check_email);
  if ($result_check_email) {
    echo "<script>alert('Email already exists in the database. Please use a different email.');</script>";
    echo "<script>location='register.php'</script>";
  } else {
    $insert = "INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`, `referal`) VALUES ('$firstname', '$lastname', '$email', '$password' , '$referralCode')";
    $result = db::query($insert);
    echo "<script>location='login.php'</script>";
    if ($result) {
      echo "<script>alert('account created successfully !')</script>";
      echo "<script>location='login.php'</script>";
      exit();
    }
  }
}


// log-In 


if (isset($_POST['signin'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $rec = db::getRecord($query);

  if ($rec != NULL) {
    $_SESSION['email'] = $_POST['email']; // Store the email in the session
    header('Location: index.php');
    exit();
  } else {
    echo "<script>alert('Invalid Username or Password!')</script>";
    echo "<script>location='login.php'</script>";
    exit();
  }
}



//  ..... Check User



if (isset($_POST['proceed'])) {
  $email = $_POST['email'];
  $total = $_POST['total_amount'];
  $payment_method = $_POST['payment'];

  $check_query = "SELECT * FROM user WHERE email = '$email'";
  $result = db::getRecord($check_query);

  if ($result) {
    $user_id = $result['id'];

    // if user comes from reference code then store in database through session 
    if (isset($_SESSION['reference'])) {
      $reference = $_SESSION['reference'];
    } else {
      $reference = "null";
    }

    $session_id = session_id();
    $cart_data = "SELECT * FROM cart WHERE session_id='$session_id'";
    $carts = db::getRecords($cart_data);

    $total_price = 0;

    $products = [];
    foreach ($carts as $cart) {
      $product_id = $cart['product_id'];
      $quantity = $cart['quantity'];
      $product_query = "SELECT * FROM product WHERE id='$product_id'";
      $product = db::getRecord($product_query);
      $price = $product['price'] * $cart['quantity'];
      if ($product) {
        $products[] = $product;
        $total_price += $price;
      }
    }

    // echo "Total Price: " . $total_price;

    $unique_num = uniqid();
    $date = date('Y-m-d');
    $status = 'pending';

    $query = "SELECT * FROM ref_discount";
    $ref_discount = db::getRecord($query);

    if ($ref_discount && isset($_SESSION['reference'])) {
      $discount = $ref_discount['discount'];
    } else {
      $discount = 0;
    }


    $insert_query = "INSERT INTO `order` (`unique_num`, `date`, `status`, `total_price`, `user_id` , `ref`, `discount` ,  `payment`) VALUES ('$unique_num', '$date', '$status', '$total', '$user_id' , '$reference', '$discount' , '$payment_method')";

    $insert_order = db::insertRecord($insert_query);

    $query = "SELECT MAX(id) AS max_id FROM `order`";
    $result = db::getRecord($query);

    if ($result && isset($result['max_id'])) {
      $order_id = $result['max_id'];
      // echo $order_id;
    } else {
      echo "Error retrieving order ID.";
    }

    $invoicr->set("company", [
      "Quality PLR",
      "",
      "",
      "https://qualityplr.com",
      "admin@qualityplr.com"
    ]);

    // (B2) INVOICE HEADER
    $invoicr->set("head", [
      ["Invoice #", $order_id],
    ]);



    if ($insert_order) {

      foreach ($carts as $cart) {
        $product_id = $cart['product_id'];
        $quantity = $cart['quantity'];
        $product_query = "SELECT * FROM product WHERE id='$product_id'";
        $product = db::getRecord($product_query);
        $price = $product['price'];
        // * $cart['quantity'];
        $insert_query = "INSERT INTO `order-sumary` (`unique_num`, `order_id`, `product_id`, `quantity`, `price`) VALUES ('$unique_num', '$order_id', '$product_id', '$quantity', '$price')";

        $insert_order = db::insertRecord($insert_query);


        // foreach ($items as $product) {
        $invoicr->add("items", [$product['heading'], "", $cart['quantity'], $product['price'], $product['price'] * $cart['quantity']]);
        // }

      }
    }

    $session_id = session_id();
    $delete_cart_query = "DELETE FROM cart WHERE session_id='$session_id'";
    db::query($delete_cart_query);

    // $ship = $total + 10;
    // $ship = $total;
    $discountedPrice = ($total * (100 - $discount)) / 100;


    if ($_POST['payment'] == 0) {



      // PayPal Payment Integeration

      // step 1
      $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
          'ATaB9g6VkVFohU-e9nfHhB1OlkiaTRja4WZ9CFaIoKOGQ5065n3jOGh5E5Spumo-mzikJpfKaBhNcxTr', // ClientID
          'ECfiSy42LqACIO5Q26FACXNCulOHT6gyI8Hz7s1o3cC54Mk0Nec-flwNKtixeAEVsmIFZJA8LkpTR6mm' // ClientSecret
        )
      );
      // After Step 2
      $payer = new \PayPal\Api\Payer();
      $payer->setPaymentMethod('paypal');

      $amount = new \PayPal\Api\Amount();
      $amount->setTotal("$discountedPrice");
      $amount->setCurrency('USD');

      $transaction = new \PayPal\Api\Transaction();
      $transaction->setAmount($amount);

      $redirectUrls = new \PayPal\Api\RedirectUrls();
      $redirectUrls->setReturnUrl("https://localhost/quantity/index.php")
        ->setCancelUrl("https://localhost/quantity/checkout.php");

      $payment = new \PayPal\Api\Payment();
      $payment->setIntent('sale')
        ->setPayer($payer)
        ->setTransactions(array($transaction))
        ->setRedirectUrls($redirectUrls);

      // After Step 3
      try {
        $payment->create($apiContext);
        echo $payment;

        // echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
      } catch (\PayPal\Exception\PayPalConnectionException $ex) {
        // This will print the detailed information on the exception.
        //REALLY HELPFUL FOR DEBUGGING
        echo $ex->getData();
      }

      header("Location: " . $payment->getApprovalLink());
    } else if ($_POST['payment'] == 1) {



      // Stripe Payment Intgeration
      $stripe_secret_key = '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';
      \Stripe\Stripe::setApiKey($stripe_secret_key);

      $checkoutSession = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://localhost/quantity/index.php",
        "line_items" => [[
          "quantity" => 1,
          "price_data" => [
            "currency" => "usd",
            "unit_amount" =>  $discountedPrice * 100,
            "product_data" => [
              "name" => "Quality PLR"
            ]
          ]
        ]],
      ]);
      header("Location: " . $checkoutSession->url);
    }


    // (B) SET INVOICE DATA
    // (B1) COMPANY INFORMATION
    //  RECOMMENDED TO JUST PERMANENTLY CODE INTO INVLIB/INVOICR.PHP > (C1)

    try {
      // (B6) ITEMS - OR SET ALL AT ONCE
      // $invoicr->set("items", $items);
      // (B7) TOTALS
      $invoicr->set("totals", [
        ["SUB-TOTAL", "$" . $total_price],
        ["DISCOUNT", "$discount%"],
        ["SHIPPING", "$10"],
        ["TOTAL", "$" . $total],
        ["DISCOUNTED PRICE", "$" . $discountedPrice]
      ]);

      // (B8) NOTES, IF ANY
      // $invoicr->set("notes", [
      // 	"Cheques should be made payable to Code Boxx",
      // 	"Get a 10% off with the next purchase with discount code DOGE1234!"
      // ]);

      // (C) OUTPUT
      // (C1) CHOOSE A TEMPLATE
      $invoicr->template("apple");
      $invoicr->outputHTML(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.html");
      $invoicr->outputPDF(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice$order_id.pdf");
      echo __DIR__ . DIRECTORY_SEPARATOR . "invoice$order_id.pdf";
      // (D) USE RESET() IF YOU WANT TO CREATE ANOTHER ONE AFFTER THIS
      $invoicr->reset();


      $mail = new PHPMailer(true);
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'ahmedsheraz920@gmail.com';
      $mail->Password = 'wudc virl jmgq qweo';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;


      // Email content
      $mail->setFrom('ahmedsheraz920@gmail.com', 'Quality PLR');
      $mail->addAddress($email, 'Recipient Name');
      $mail->Subject = 'Order Confirmation';
      $mail->isHTML(true);
      $body = 'Congrats, your order with ID ' . $unique_num . ' has been confirmed!<br><br>' .
        'Date: ' . $date . '<br>' .
        'Thank you for shopping with us!';
      $mail->Body = $body;

      // Attach invoice PDF file
      $pdfFilePath = __DIR__ . DIRECTORY_SEPARATOR . "invoice$order_id.pdf";
      $mail->addAttachment($pdfFilePath);

      // Send email

      $mail->send();
      echo "Message sent!";
      // exit();
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      exit();
    }


    echo "<script>location='index.php'</script>";
  } else {
    $password = generateRandomPassword(8);
    $insert_query = "INSERT INTO user (email, firstname, lastname, password) VALUES ('$email', '', '', '$password')";
    $insert = db::query($insert_query);
    if ($insert) {
      $check_query = "SELECT * FROM user WHERE email = '$email'";
      $result = db::getRecord($check_query);

      $user_id = $result['id'];

      $reference = "null";
    }
  }
}


function generateRandomPassword($length)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $password = '';
  $chars_length = strlen($characters);
  for ($i = 0; $i < $length; $i++) {
    $index = rand(0, $chars_length - 1);
    $password .= $characters[$index];
  }
  return $password;
}

?>


<html>

<head>
  <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
  <script>
    var stripe = Stripe('pk_live_51PNYwBP2qH0Av6dm4XZEdBBSmWvFFkOyOpoXPdzjxu80rfqq9b65nGsrPZRVLEUh9UZ4Ad900RFpcKOiPHGg1w8N00B5K8KviW');
    stripe.redirectToCheckout({
      sessionId: "<?php echo $session->id; ?>"
    });
  </script>
</body>

</html>