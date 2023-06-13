<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT THE DICE || DYD</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../rsc/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../rsc/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../rsc/favicon_io/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/dydTablero.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        input:focus {
            box-shadow: none !important;
            border-color: red !important;
        }

        input:checked {
            background-color: red !important;
            border-color: red !important;
        }
    </style>
</head>

<body style="background-image:url(../rsc/wp2227193-dungeons-dragons-wallpapers.jpg); background-position:center; background-size:cover; background-repeat:no-repeat;">

    <div class="container margin-top_48 margin-bottom_48 border border-2" style="background-color: #353535;">

        <div class="row justify-content-center">

            <div class="col-7 d-flex justify-content-center"><img src="../rsc/whited20.png" alt="logoD20" style="max-width: 5em;"></div>

            <div class="col-7 d-flex justify-content-center"><img class="img-fluid col-5" src="../rsc/DnD-Logo.png" alt="logoDYD"></div>

            <div class="align-items-center col-9">

                <div class="row align-items-center justify-content-center">
                    <div class="col-4 stat" style="background-image: url(../rsc/pgIcon.png);">
                        <div>PG</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="text" value="" id="actualHP"> / <span id="hp" class="statNumber"></span>
                        </div>
                    </div>
                    <div class="col-4 stat" style="background-image: url(../rsc/inspiIcon.png);">
                        <div>INS</div>
                        <div id="insp">1</div>
                    </div>
                    <div class="col-4 stat" style="background-image: url(../rsc/caIcon.png);">
                        <div>CA</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span id="ca" class="statNumber"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../scripts/controlDYD.js"></script>

</body>

</html>