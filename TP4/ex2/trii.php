<?php
@$reponse=@$_POST['reponse'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>treat</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<?php
if (isset($_COOKIE['reponse'])){
?>
    <div class='alert alert-danger'> <h1> Vous avez deja voté et votre réponse était : <?=$_COOKIE['reponse'] ?> </div>
<?php
}else{
?>
    <div class="alert alert-success"> <h1>Votre réponse a été  enregistrée </div>
<?php

    setcookie('reponse',$reponse,time()+2*60);
}
?>

</body>
</html>