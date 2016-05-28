<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Webshop overzicht user</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- flat version of bootstrap -->
    <link href="css/bootstrap.flatly.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="labo1user.js"></script>
</head>
<body onload="process()">
<div class="container">
    <h1>Welcome <?php echo $login_session; ?></h1>
    <h2><a href="logout.php">Sign Out</a></h2>

    <h3>Productenlijst voor de gebruiker</h3>

    <div class="row">
        <div id="divMessage"></div>
    </div>

    <div class="row">

        <h4>Data met json</h4>

        <table class="table table-bordered">

            <thead>
            <tr>
                <th>productnaam</th>
                <th>prijs</th>
            </tr>
            </thead>
            <tbody id="addproducttotable">

            </tbody>
        </table>

    </div>

    <div class="row">

        <h4>Data van Database zonder json</h4>

        <table class="table table-bordered">

            <thead>
            <tr>
                <th>productnaam</th>
                <th>prijs</th>
            </tr>
            </thead>
            <tbody id="addproducttotable">
            <?php

            $db = mysqli_connect('localhost', 'root', '', 'webappsallelabos');
            $sql = "SELECT productname, price from products";
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['productname']; ?></td>
                    <td><?php echo $row['price'] ?></td>
                </tr>

                <?php
            }//while afsluiten
            //} //if afsluiten
            ?>
            </tbody>
        </table>

        <?php

        $result->close();
        $db->close();

        ?>

    </div>

</div>
</body>
</html>