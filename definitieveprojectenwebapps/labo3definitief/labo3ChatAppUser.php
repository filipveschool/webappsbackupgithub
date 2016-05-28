<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ChatApp overzicht user</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- flat version of bootstrap -->
    <link href="../css/bootstrap.flatly.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="labo3UserChat.js"></script>
</head>
<body>
<div class="container">
    <h2><a href="../logout.php">Sign Out</a></h2>

    <h3>Chat voor de gebruiker</h3>
</div>

<div class="container" id="container">
    <div id="chat_box">

        <div id="chat"></div>

    </div> <!-- einde id="chat_box" -->

    <form id='login' action='labo3ChatAppAdd.php' method='POST' accept-charset='UTF-8'>
        <input type='hidden' name='submitted' id='submitted' value='2'/>
        <div class="form-group">
            <input type="text" class="form-control" name='namechat' id="namechat"
                   placeholder="enter name" maxlength="50" value="<?php echo $login_session; ?>">
        </div>

        <div class="form-group">
            <textarea name="message" placeholder="enter your message"></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-default" value="Send it"/>
    </form>
    
</div>
</body>
</html>