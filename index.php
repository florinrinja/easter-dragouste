<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>My test page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link style="stylesheet" href="easter.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
$word = $_POST['Nom'].$_POST['Nom1'].$_POST['Nom2'].$_POST['Nom3'].$_POST['Nom4'].$_POST['Nom5'].$_POST['Nom6'].$_POST['Nom7'].$_POST['Nom8'];
if (isset( $word )) {
    $word = htmlspecialchars ( $word ); // On rend inoffensives les balises HTML que le visiteur a pu entrer
    if (preg_match ( '#^[easteregg]$#i' , $word )) {
        echo ' ' . $word . '  <strong>Félicitations</strong> !';
    } else {
        echo ' ' . $word . '     ';
    }
}
?>
<form>
    <div class="row">
        <form method="post">
            <div class="container">
                <div class="row mt-4">
                    <div class="form-group col-1"> <label for="Nom">Nom</label> <input type="text" class="form-control" id="Nom" name="Nom" maxlength="1">  </div>
                    <div class="form-group col-1"> <label for="Nom1">Nom1 </label> <input type="text" class="form-control" id="Nom1" name="Nom1" maxlength="1"> </div>
                    <div class="form-group col-1"> <label for="Nom2">Nom2 </label> <input type="text" class="form-control" id="Nom2" name="Nom2" maxlength="1"> </div>
                    <div class="form-group col-1"> <label for="Nom3">Nom3</label> <input type="text" class="form-control" id="Nom3" name="Nom3" maxlength="1"> </div>
                    <div class="form-group col-1"> <label for="Nom4">Nom4</label> <input type="text" class="form-control" id="Nom4" name="Nom4" maxlength="1"> </div>
                    <div class="form-group col-1"> <label for="Nom5">Nom5</label> <input type="text" class="form-control" id="Nom5" name="Nom5" maxlength="1"> </div>
                    <div class="form-group col-1"> <label for="Nom6">Nom6</label> <input type="text" class="form-control" id="Nom6" name="Nom6" maxlength="1"> </div>
                    <div class="form-group col-1"> <label for="Nom7">Nom7</label> <input type="text" class="form-control" id="Nom7" name="Nom7" maxlength="1"> </div>
                    <div class="form-group col-1"> <label for="Nom8">Nom8</label> <input type="text" class="form-control" id="Nom8" name="Nom8" maxlength="1"> </div>
                </div>
            </div>
    </div>
</form>

<div class="container">
    <button id="myBtn" type="submit" value="Vérifier le code secret" class="btn btn-success">Success></button>
</div>
<!-- Trigger/Open The Modal -->



<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="img">
            <img src="https://image.noelshack.com/fichiers/2019/16/5/1555662644-7-6.gif" alt="blabla">
        </div>
    </div>
</div>

<script src="boom.js">
</script>

</body>
