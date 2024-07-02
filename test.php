 <?php
  // 1. Autoload the SDK Package. This will include all the files and classes to your autoloader
  // Used for composer based installation
  // require __DIR__  . '//autoload.php';
  // Use below for direct download installation
  require __DIR__  . '/PayPal-PHP-SDK/autoload.php';


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
  $amount->setTotal('1.00');
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

    echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
  } catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
  }
