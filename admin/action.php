<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('../src/PHPMailer.php');
require '../src/Exception.php';
require '../src/SMTP.php';

require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $rec = db::getRecord($query);
    if ($rec != NULL) {
        $_SESSION['email'] = $_POST['email'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
    }
}
//update admin
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($_FILES['doc_file']['name'] == "") {
        $sql2 = "UPDATE admin SET name='$name',password='$password'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['doc_file']['name'];
        $file_loc = $_FILES['doc_file']['tmp_name'];
        $file_size = $_FILES['doc_file']['size'];
        $file_type = $_FILES['doc_file']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql2 = "UPDATE admin SET name='$name',password='$password',image='$final_file'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";
    }
}

//logout
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    echo "<script>location='index.php'</script>";
}

// update_logo
if (isset($_POST['update_logo'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE logo SET dcp='$dcp'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE logo SET dcp='$dcp',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='logo.php'</script>";
}

// update_banner
if (isset($_POST['update_banner'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE banner SET dcp='$dcp',heading='$heading'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE banner SET dcp='$dcp',heading='$heading',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='banner.php'</script>";
}



// update_about
if (isset($_POST['update_about'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE about SET dcp='$dcp',heading='$heading'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE about SET dcp='$dcp',heading='$heading',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='about.php'</script>";
}


// update_ref_discount
if (isset($_POST['update_ref_discount'])) {
    echo $email = $_SESSION['email'];
    $query = "SELECT referal from user where email = '$email' ";
    $referal = db::getCell($query);
    $discount = $db->real_escape_string($_POST['discount']);
    $id = $db->real_escape_string($_POST['id']);

    $sql = "UPDATE ref_discount SET  discount='$discount'";
    db::query($sql);

    echo "<script>location='ref_discount.php'</script>";
}
//add_categories
if (isset($_POST['add_categories'])) {
    $name = $db->real_escape_string($_POST['name']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `categories` (`name`,`image`) VALUES ('$name','$final_file')";
    db::query($query_insert);
    echo "<script>location='categories.php'</script>";
}

//update_categories
if (isset($_POST['update_categories'])) {
    $name = $db->real_escape_string($_POST['name']);

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE categories SET name='$name' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE categories SET name='$name',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='categories.php'</script>";
}
//del_categories
if (isset($_GET['del_categories'])) {
    $id = $_GET['del_categories'];
    $sql = "DELETE FROM categories WHERE id='$id'";
    db::query($sql);
    echo "<script>location='categories.php'</script>";
}

//add_product
if (isset($_POST['add_product'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);
    $cat_id = $_POST['cat_id'];

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `product` (`heading`,`image`,`dcp`,`price`,`cat_id`) VALUES ('$heading','$final_file','$dcp','$price','$cat_id')";
    db::query($query_insert);
    echo "<script>location='product.php'</script>";
}

//update_product
if (isset($_POST['update_product'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);
    $cat_id = $_POST['cat_id'];

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE product SET heading='$heading',dcp='$dcp',price='$price',cat_id='$cat_id' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE product SET heading='$heading',dcp='$dcp',price='$price',image='$final_file',cat_id='$cat_id' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='product.php'</script>";
}
//del_product
if (isset($_GET['del_product'])) {
    $id = $_GET['del_product'];
    $sql = "DELETE FROM product WHERE id='$id'";
    db::query($sql);
    echo "<script>location='product.php'</script>";
}

//add_testimonials
if (isset($_POST['add_testimonials'])) {
    $name = $db->real_escape_string($_POST['name']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $designation = $db->real_escape_string($_POST['designation']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `testimonials` (`name`,`image`,`dcp`,`designation`) VALUES ('$name','$final_file','$dcp','$designation')";
    db::query($query_insert);
    echo "<script>location='testimonials.php'</script>";
}

//update_testimonials
if (isset($_POST['update_testimonials'])) {
    $name = $db->real_escape_string($_POST['name']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $designation = $db->real_escape_string($_POST['designation']);

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE testimonials SET name='$name',dcp='$dcp',designation='$designation' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE testimonials SET name='$name',dcp='$dcp',designation='$designation',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='testimonials.php'</script>";
}
//del_testimonials
if (isset($_GET['del_testimonials'])) {
    $id = $_GET['del_testimonials'];
    $sql = "DELETE FROM testimonials WHERE id='$id'";
    db::query($sql);
    echo "<script>location='testimonials.php'</script>";
}

//add_blog
if (isset($_POST['add_blog'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $date = $db->real_escape_string($_POST['date']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `blog` (`heading`,`image`,`dcp`,`date`) VALUES ('$heading','$final_file','$dcp','$date')";
    db::query($query_insert);
    echo "<script>location='blog.php'</script>";
}

//update_blog
if (isset($_POST['update_blog'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $date = $db->real_escape_string($_POST['date']);

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE blog SET heading='$heading',dcp='$dcp',date='$date' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE blog SET heading='$heading',dcp='$dcp',image='$final_file',date='$date' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='blog.php'</script>";
}
//del_blog
if (isset($_GET['del_blog'])) {
    $id = $_GET['del_blog'];
    $sql = "DELETE FROM blog WHERE id='$id'";
    db::query($sql);
    echo "<script>location='blog.php'</script>";
}

//add_faq
if (isset($_POST['add_faq'])) {
    $question = $db->real_escape_string($_POST['question']);
    $answer = $db->real_escape_string($_POST['answer']);
    $query_insert = "INSERT INTO `faq` (`question`,`answer`) VALUES ('$question','$answer')";
    db::query($query_insert);
    echo "<script>location='faq.php'</script>";
}

//update_faq
if (isset($_POST['update_faq'])) {
    $question = $db->real_escape_string($_POST['question']);
    $answer = $db->real_escape_string($_POST['answer']);

    $id = $_POST['id'];
    $sql = "UPDATE faq SET question='$question',answer='$answer' WHERE id='$id'";
    db::query($sql);
    echo "<script>location='faq.php'</script>";
}
//del_faq
if (isset($_GET['del_faq'])) {
    $id = $_GET['del_faq'];
    $sql = "DELETE FROM faq WHERE id='$id'";
    db::query($sql);
    echo "<script>location='faq.php'</script>";
}

// update_terms
if (isset($_POST['update_terms'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    $sql = "UPDATE terms SET dcp='$dcp',heading='$heading'";
    db::query($sql);

    echo "<script>location='terms.php'</script>";
}

// update_privacy
if (isset($_POST['update_privacy'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    $sql = "UPDATE privacy SET dcp='$dcp',heading='$heading'";
    db::query($sql);

    echo "<script>location='privacy.php'</script>";
}

//add_contact
if (isset($_POST['add_contact'])) {
    $name = $db->real_escape_string($_POST['name']);
    $email = $db->real_escape_string($_POST['email']);
    $message = $db->real_escape_string($_POST['message']);

    $query_insert = "INSERT INTO `contact` (`name`,`email`,`message`) VALUES ('$name','$email','$message')";
    db::query($query_insert);
    echo "<script>location='../contact.php'</script>";
}
//del_contact
if (isset($_GET['del_contact'])) {
    $id = $_GET['del_contact'];
    $sql = "DELETE FROM contact WHERE id='$id'";
    db::query($sql);
    echo "<script>location='contact.php'</script>";
}
// update_contact_detail
if (isset($_POST['update_contact_detail'])) {
    $phone = $db->real_escape_string($_POST['phone']);
    $email = $db->real_escape_string($_POST['email']);
    $location = $db->real_escape_string($_POST['location']);

    $id = $db->real_escape_string($_POST['id']);
    $sql = "UPDATE contact_detail SET phone='$phone',email='$email',location='$location'";
    db::query($sql);

    echo "<script>location='contact_detail.php'</script>";
}
//add_newslatter
if (isset($_POST['add_newslatter'])) {
    $email = $db->real_escape_string($_POST['email']);

    $query_insert = "INSERT INTO `newslatter` (`email`) VALUES ('$email')";
    db::query($query_insert);
    echo "<script>location='../index.php'</script>";
}
//del_newslatter
if (isset($_GET['del_newslatter'])) {
    $id = $_GET['del_newslatter'];
    $sql = "DELETE FROM newslatter WHERE id='$id'";
    db::query($sql);
    echo "<script>location='newslatter.php'</script>";
}

//add_easiest
if (isset($_POST['add_easiest'])) {
    $heading = $db->real_escape_string($_POST['heading']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `easiest` (`heading`,`image`) VALUES ('$heading','$final_file')";
    db::query($query_insert);
    echo "<script>location='easiest.php'</script>";
}

//update_easiest
if (isset($_POST['update_easiest'])) {
    $heading = $db->real_escape_string($_POST['heading']);

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE easiest SET heading='$heading' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE easiest SET heading='$heading',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='easiest.php'</script>";
}
//del_easiest
if (isset($_GET['del_easiest'])) {
    $id = $_GET['del_easiest'];
    $sql = "DELETE FROM easiest WHERE id='$id'";
    db::query($sql);
    echo "<script>location='easiest.php'</script>";
}

//add_cart
if (isset($_POST['add_cart'])) {
    $product_id = $db->real_escape_string($_POST['product_id']);
    $session_id = $db->real_escape_string($_POST['session_id']);
    $quantity = 1; // when click on add to cart then in the database the quantity will be by default 1

    $query_insert = "INSERT INTO `cart` (`product_id`, `session_id`, `quantity`) VALUES ('$product_id', '$session_id', '$quantity')";
    db::query($query_insert);
    echo "<script>location='../cart.php'</script>";
}

// Cart quantity
if (isset($_POST['update_cart'])) {
    if (isset($_POST['product_id']) && isset($_POST['new_quantity'])) {
        $currentSessionID = session_id();
        $product_id = $_POST['product_id'];
        $new_quantity = $_POST['new_quantity'];


        // Update the quantity in the cart table
        $update_query = "UPDATE cart SET quantity='$new_quantity' WHERE product_id='$product_id' AND session_id='$currentSessionID'";
        db::query($update_query);
    }
}


// Change Status and Send mail to user about order delivered

if (isset($_POST['save_changes'])) {
    $id = $_POST['order_id'];
    $status = $_POST['status'];

    $update_status = "UPDATE `order` SET status='$status' WHERE id = '$id'";
    db::query($update_status);

    if ($status == 'completed') {
        // Fetch order details
        $order_query = "SELECT * FROM `order` WHERE id = '$id'";
        $order_details = db::getRecord($order_query);

        if ($order_details) {
            $user_id = $order_details['user_id'];

            // Fetch user email using user_id
            $user_query = "SELECT email FROM user WHERE id = '$user_id'";
            $user_email = db::getRecord($user_query)['email'];

            // Send email to user
            $mail = new PHPMailer(true);
            try {
                // SMTP configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Your SMTP host
                $mail->SMTPAuth = true;
                $mail->Username = 'ahmedsheraz920@gmail.com';
                $mail->Password = 'wudc virl jmgq qweo';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Email content
                $mail->setFrom('ahmedsheraz920@gmail.com', 'Quality PLR');
                $mail->addAddress($user_email, 'Recipient Name'); //
                $mail->Subject = 'Order Delivered'; // 
                $mail->isHTML(true);
                $body = 'Congrats! Your order has been delivered Successfully! <br>' .
                    'Thank you for shopping with us!';
                $mail->Body = $body;

                // Send email
                $mail->send();
                // echo "Message sent!";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error: Order details not found!";
        }
    }

    header("Location: order.php");
}
