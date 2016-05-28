<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login formulier</title>

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
</head>
<body>
<div class="container-fluid">
    <div class="container" style="background-color: #ecf0f1; text-align: center;">
        <h1>Hier staan alle formulieren voor alle labo's voor webapps behalve labo2 omdat sockets in java gedaan
            is.</h1>
        <?php
        // load configuration file
        require_once('error_handler.php');
        ?>

    </div>

    <div class="container">

        <h2>Login formulier voor labo 1 webshop voor WebApps</h2>

        <div class="row">

            <div class="col-xs-6 col-md-6 col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <div class="panel-title">Als je hier op login klikt, ga je als "admin" inloggen.</div>
                        <!--<h2>Als je hier op login klikt, ga je als "admin" inloggen.</h2>-->
                    </div> <!-- einde panel heading -->

                    <div class="panel-body">
                        <form id='login' action='labo1LoginToDB.php' method='POST' accept-charset='UTF-8'>
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div class="form-group">
                                <label for="UserName">UserName Admin*:</label>
                                <input type="text" class="form-control" name='user_name' id="user_name"
                                       placeholder="user_name" value="admin" maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="password">Password Admin</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Password" value="password" maxlength="50">
                            </div>

                            <button type="submit" class="btn btn-default">login als admin</button>
                        </form>
                    </div> <!-- einde panel-body -->
                </div>
            </div> <!-- einde col-verdeling -->

            <div class="col-xs-6 col-md-6 col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <div class="panel-title">Als je hier op login klikt, ga je als "user" inloggen.</div>
                        <!--<h2>Als je hier op login klikt, ga je als "user" inloggen.</h2>-->
                    </div> <!-- einde panel heading -->

                    <div class="panel-body">

                        <form id='login2' action='labo1LoginToDB.php' method='POST' accept-charset='UTF-8'>
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div class="form-group">
                                <label for="UserName">UserName user*:</label>
                                <input type="text" class="form-control" name='user_name' id="user_name"
                                       placeholder="user_name" value="user" maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="password">Password user</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Password" value="password" maxlength="50">
                            </div>

                            <button type="submit" class="btn btn-default">login als user</button>
                        </form>
                    </div> <!-- einde panel-body -->
                </div> <!-- eninde col-verdeling -->
            </div> <!-- einde row -->
        </div>


    </div> <!-- einde container login 1 -->

    <div class="container">

        <h2>Login formulier voor labo 3 webshop voor WebApps</h2>

        <div class="row">

            <div class="col-xs-6 col-md-6 col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <div class="panel-title">Als je hier op login klikt, ga je als "admin" inloggen.</div>
                        <!--<h2>Als je hier op login klikt, ga je als "admin" inloggen.</h2>-->
                    </div> <!-- einde panel heading -->

                    <div class="panel-body">
                        <form id='login' action='labo3/labo3LoginToDB.php' method='POST' accept-charset='UTF-8'>
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div class="form-group">
                                <label for="UserName">UserName Admin*:</label>
                                <input type="text" class="form-control" name='user_name' id="user_name"
                                       placeholder="user_name" value="admin" maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="password">Password Admin</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Password" value="password" maxlength="50">
                            </div>

                            <button type="submit" class="btn btn-default">login als admin</button>
                        </form>
                    </div> <!-- einde panel-body -->
                </div>
            </div> <!-- einde col-verdeling -->

            <div class="col-xs-6 col-md-6 col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <div class="panel-title">Als je hier op login klikt, ga je als "user" inloggen.</div>
                        <!--<h2>Als je hier op login klikt, ga je als "user" inloggen.</h2>-->
                    </div> <!-- einde panel heading -->

                    <div class="panel-body">

                        <form id='login2' action='labo3/labo3LoginToDB.php' method='POST' accept-charset='UTF-8'>
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div class="form-group">
                                <label for="UserName">UserName user*:</label>
                                <input type="text" class="form-control" name='user_name' id="user_name"
                                       placeholder="user_name" value="user" maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="password">Password user</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Password" value="password" maxlength="50">
                            </div>

                            <button type="submit" class="btn btn-default">login als user</button>
                        </form>
                    </div> <!-- einde panel-body -->
                </div> <!-- eninde col-verdeling -->
            </div> <!-- einde row -->
        </div>


    </div> <!-- einde container login 3 -->
</div> <!-- einde container-fluid -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>