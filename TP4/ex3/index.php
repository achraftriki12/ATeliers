<?php 
session_start();
?>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

    <title>Title</title>
</head>
<body class = "main">
    <?php
    if(isset($_SESSION["notes"])) {
    foreach($_SESSION["notes"] as $index=>$note) {
        ?>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <?= $note ?>
    </div>
    </div>
        <?php }}?>

    <div>
        <form action="add.html">
            <button type = "submit" class = "btn btn-primary">
                Add Note
            </button>
        </form>
    </div>
    <div>
        <form action="supprimer.html">
            <button type = "reset" class = "btn btn-primary">
                supprimer note
            </button>
        </form>
    </div>
</body>
</html>