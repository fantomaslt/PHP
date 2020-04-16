<!--Paklauskite vartotojo vardo naudodamiesi forma. Padarykite žymės langelį: jei jis pažymėtas, tada pasveikinkite vartotoją,-->
<!--jei nepažymėtas, atsisveikinkite su vartotoju.-->
<?php
require('functions.php');

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Namu darbai</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="container">
    <div class="form-group mb-2">
        <span class="error">* <?php echo $nameErr; ?></span>
    </div>
    <form class="form-inline" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Įveskite savo vardą ">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="name" class="form-control" id="inputPassword2" placeholder="Jūsų vardas">
        </div>
        <div class="form-check" style="margin-right: 20px">
            <input class="form-check-input" type="checkbox" value="yes" id="defaultCheck1" name="check">
            <label class="form-check-label" for="defaultCheck1">
                Pažymėkite
            </label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mb-2">Paspausti</button>
    </form>
    <div class="card-header text-center">
        <?php
        echo $message;
        ?>
    </div>
</div>

<!--< Optional JavaScript-->
<!--< jQuery first, then Popper.js, then Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
