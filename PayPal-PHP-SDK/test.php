<?php

require __DIR__ . '/autoload.php';

use Sample\CaptureIntentExamples\CreateOrder;
use Sample\CaptureIntentExamples\CaptureOrder;
use Sample\RefundOrder;

$order = CreateOrder::createOrder();

print "Creating Order...\n";
$orderId = "";
if ($order->statusCode == 201) {
  $orderId = $order->result->id;
  print "Links:\n";
  for ($i = 0; $i < count($order->result->links); ++$i) {
    $link = $order->result->links[$i];
    print "\t{$link->rel}: {$link->href}\tCall Type: {$link->method}\n";
  }
  print "Created Successfully\n";
  print "Copy approve link and paste it in browser. Login with buyer account and follow the instructions.\nOnce approved hit enter...\n";
} else {
  exit(1);
}
