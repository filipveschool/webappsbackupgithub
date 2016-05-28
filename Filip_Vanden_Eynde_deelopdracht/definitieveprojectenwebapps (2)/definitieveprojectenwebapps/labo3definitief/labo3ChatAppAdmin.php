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
    <!--<script src="../js/bootstrap.min.js"></script>-->
    <!--<script src="labo3ChatAdmin.js"></script>-->

    <script>

        function ajax2() {
            $.ajax({
                url: 'chat.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var html="";
                    $.each(data, function (k,v) {

                        html += "<div id='chat_data'>";
                        html += "<span class='spanname'>" + data[k].namechat + ": </span>";
                        html += "<span class='spanmessage'>" + data[k].message + "</span>";
                        html += "<span class='spandate'>"+ data[k].date + "</span>";
                        html += "</div>";
                        /*

                         console.log("key = " + k);
                         //console.log("value = " + v);
                         console.log("data[k] = " + data[k]);
                         console.log("data[k].id = " + data[k].id);
                         console.log("data[k].namechat = " + data[k].namechat);
                         console.log("data[k].message = " + data[k].message);
                         console.log("data[k].date = " + data[k].date);
                         */
                    });

                    $('#chat').html(html);
                    //$('#chat').append(html);

                    console.log(data);
                    //setTimeout(ajax2(),1000);
                    setTimeout(function () {
                        ajax2()
                    }, 1000);
                } //end function success
            }); // end ajax
        }

        setTimeout(function () {
            ajax2()
        }, 1000);

    </script>

    <script>
        $(document).ready(function(){
            $("#maakwindowlanger").click(function(){
                $("#chatbox").animate({height: "800px"});
            });
            $("#maakwindowkleiner").click(function(){
                $("#chatbox").animate({height: "400px"});
            });
        });

    </script>
</head>
<body>

<div class="container">
    <h2><a href="../logout.php">Sign Out</a></h2>

    <h3>Chat voor de Admin</h3>

    <button class="btn btn-default" id="maakwindowkleiner">Reset height chatwindow</button>
    <button class="btn btn-default" id="maakwindowlanger">Maak chatwindow langer</button>
</div>

<div class="container" id="container">
    <div id="chatbox" style="height:400px;">

        <div id="chat"></div>

    </div> <!-- einde id="chat_box" -->

    <form id='login' action='labo3ChatAppAddAdmin.php' method='POST' accept-charset='UTF-8'>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <div class="form-group">
            <input type="text" class="form-control" name='namechat' id="namechat"
                   placeholder="enter name" maxlength="50" value="Admin">
        </div>

        <div class="form-group">
            <textarea name="message" placeholder="enter your message"></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-default" value="Send it"/>
    </form>

</div>
</body>
</html>