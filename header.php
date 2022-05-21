<!--This is the header section it is on another php page so the it can be included dynamically into any page without having to hard code it to each individual page-->


<!--This include statements include the database and functions from the files-->
<?php include 'includes/db.php'; ?>
<?php include 'includes/functions.php';?>
 <?php 
  session_start();
  if(!isset($_SESSION['shopping_cart'])){
  $_SESSION['shopping_cart'] = [];
    
  }
  
  $title = '';
  $path = explode( '/',$_SERVER['REQUEST_URI']);
  $link= $path[count($path) -1];
  foreach(getNavbar() as $key => $value){
    
    if ($link === $value['link']){
      $title = $value['page'];
      
    }
  }
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Latzo Beatz | <?php echo $title;?></title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="main.css">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="true">
  <script async src="https://whatsform.com/launcher.js"></script>
<script> 
window.whatsformId = '-asJ9c';
window.whatsformMessage = 'Message Direct WhatsApp';
</script>
</head>
<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
<!-- This Inlcudes the Navbar which is in another file       -->
  <?php include 'includes/navbar.php'; ?>