<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "sandbox";
$apiKey     = "f997a941ec7cfc5c65b9b97654922c8159f12480dbb8909ab0658988e75332f8";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+254705412563, +254704766626,+254729812270";

// Set your message
$message    = "Hello there,You are kindly requested to bring your child for Polio (IPV) vaccine  as soon as possible since you missed the vaccination appointment Schedled on 30 June 2020.If you cannot manage visit Kakamega County General Hospita,please visit the nearest health facility to have your child immunized.Your child ID is CHG345qtW20";

// Set your shortCode or senderId
$from       = "KakamegaCGH";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
    ]);

    print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
