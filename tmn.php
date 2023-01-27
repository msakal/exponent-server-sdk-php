<?php
 require_once __DIR__.'/vendor/autoload.php';

 if(isset($_POST["enviar"])){
$titulo = $_POST["titulo"];
$mensagem = $_POST["mensagem"];

 $channelName = 'news';
 /* Tokens: 1)Guilherme - 2)Marcello   */
 $recipient= ['ExponentPushToken[Aak41dPb_OImfGxGCelRfz]','ExponentPushToken[XS_qc1AcdpKNmV_fukD-kY]' ];
 
 // You can quickly bootup an expo instance
 $expo = \ExponentPhpSDK\Expo::normalSetup();
 
 // Subscribe the recipient to the server
 foreach($recipient as $valor){

     $expo->subscribe($channelName, $valor);
    }
    // Build the notification data
    $notification = ['title' => $titulo,'body' => $mensagem];
    
    // Notify an interest with a notification
    $expo->notify([$channelName], $notification);
}
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Teste</h1>
        <form method="post">
            <label for="">Titulo</label>
            <input type="text" name="titulo">
            <label for="">mensagem</label>
            <input type="text" name="mensagem">
            <Button name="enviar" > enviar</Button>

        </form>
    </body>
    </html>
 