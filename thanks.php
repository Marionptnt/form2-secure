<!DOCTYPE HTML>  
<html>
<head>
  <title></title>
</head>
<body>  

<?php 

$errors = [];

if($_POST['name'] == '') {
  $errors['name'] = "Name is required.<br>";
  echo $errors['name'];
}
if($_POST['email'] == '') {
  $errors['email'] = "Email is required.<br>";
  echo $errors['email'];
}
elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = "Invalid email format.<br>";
  echo $errors['email']; 
}

if($_POST['phone'] == '') {
  $errors['phone'] = "Phone is required.<br>";
  echo $errors['phone'];
}
if($_POST['object'] == '') {
  $errors['object'] = "Object is required.<br>";
  echo $errors['object'];
}
if($_POST['message'] == '') {
  $errors['message'] = "Message is required.<br>";
  echo $errors['message'];
}

else {
  echo 'Merci '.$_POST['name'].' de nous avoir contacté à propos de '. $_POST['object'].'.'.

  " Un de nos conseiller vous contactera soit à l’adresse ".$_POST['mail'].' ou par téléphone au '.$_POST['phone_number'].' dans les plus brefs délais pour traiter votre demande : ' 
  
  .$_POST['message'];
}

?>

</body>
</html>