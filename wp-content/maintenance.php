<?php
$logoUrl = "https://www.davask.com/wp-content/uploads/2018/08/logo-dwl-official-e1533083834693.png";
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>En maintenance</title>
  <meta name="description" content="Momentanément indisponible pour des raisons de maintenance. Merci de revenir dans une minute.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">h1 {text-align:center;} img {max-width:150px;display: block; margin: 150px auto 50px;}</style>
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">Vous utilisez un navigateur <strong>obsolète</strong>. Veuillez <a href="https://browsehappy.com/">mettre à niveau votre navigateur</a> pour améliorer votre expérience et votre sécurité.</p>
  <![endif]-->
<img src="<?php echo $logoUrl; ?>" alt="Logo">
<h1>Momentanément indisponible pour des raisons de maintenance.<br/>Merci de revenir dans une minute.</h1>
</body>

</html>
<?php
die();
