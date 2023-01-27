<?php
 require_once __DIR__.'/vendor/autoload.php';
    
 $channelName = 'news';
 $recipient= ['ExponentPushToken[Aak41dPb_OImfGxGCelRfz]','ExponentPushToken[XS_qc1AcdpKNmV_fukD-kY]','ExponentPushToken[wcFi9XPagiMl8Uu_a1KF__]' ];
 
 // You can quickly bootup an expo instance
 $expo = \ExponentPhpSDK\Expo::normalSetup();
 
 // Subscribe the recipient to the server
 foreach($recipient as $valor){

     $expo->subscribe($channelName, $valor);
    }
    // Build the notification data
    $notification = ['title' => 'teste','body' => 'Hello World!'];
    
    // Notify an interest with a notification
    $expo->notify([$channelName], $notification);
 