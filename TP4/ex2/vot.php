<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vote</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="container" style="padding: 50px 30%">
<div class="card border-primary mb-3" style="max-width: 50rem;">
    <div class="card-header">Votez
    <div class="card-body text-primary">
        <form action="trii.php" method="post">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="reponse" id="inlineRadio1" value="bon" >
            <label class="form-check-label" for="inlineRadio1">Bon</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="reponse" id="inlineRadio2" value="moyen">
            <label class="form-check-label" for="inlineRadio2">Moyen</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="reponse" id="inlineRadio3" value="mauvais" >
            <label class="form-check-label" for="inlineRadio3">Mauvais</label>
        </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">sumbit</button>
        </form>
    </div>
    </div>
</div>
</div>
</body>
</html>