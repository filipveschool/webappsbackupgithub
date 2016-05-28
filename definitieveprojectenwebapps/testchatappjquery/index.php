<?php
include 'db.php';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Chat Box</title>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- flat version of bootstrap -->
        <link href="../css/bootstrap.flatly.css" rel="stylesheet">

        <link href="style.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script>
            function ajax() {
                var req = new XMLHttpRequest();

                req.onreadystatechange = function () {
                    if (req.readyState == 4 && req.status == 200) {
                        //document.getElementById('chat').innerHTML = req.responseText;
                    }
                }

                req.open('GET', 'chat.php', true);
                req.send();
            }

            /*
             setInterval(function () {
             ajax()
             }, 1000);
             */

            function ajax2() {
                $.ajax({
                    url: 'chat.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        var html="";
                        $.each(data, function (k,v) {
/*
                            <div id="chat_data">
                                <span style="color:green;"><?= $row['namechat']; ?>:</span>
                            <span style="color:brown;"><?= $row['message']; ?></span>
                                <span style="float: right;"><?= formatDate($row['date']); ?></span>
                                </div> <!-- einde id="chat_data" */

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

                        //$('#chat').html(html);
                        $('#chat').append(html);

                        console.log(data);
                    } //end function success
                }); // end ajax
            }

            /*
            setInterval(function () {
                ajax2()
            }, 10000);
            */

            setTimeout(function () {
                ajax2()
            }, 1000);


        </script>
    </head>
    <!--<body onload="ajax()">-->
    <body>

    <div class="container" id="container">
        <div id="chat_box">

            <div id="chat"></div>

        </div> <!-- einde id="chat_box" -->

        <form id='login' action='index.php' method='POST' accept-charset='UTF-8'>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <div class="form-group">
                <input type="text" class="form-control" name='namechat' id="namechat"
                       placeholder="enter name" maxlength="50">
            </div>

            <div class="form-group">
                <textarea name="message" placeholder="enter your message"></textarea>
            </div>
            <input type="submit" name="submit" class="btn btn-default" value="Send it"/>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['namechat'];
            $message = $_POST['message'];

            $query = "INSERT INTO chat1 (namechat, message) VALUES ('$name','$message')";
            $run = $db->query($query);
            if ($run) {
                //echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
                debug_to_console("gelukt");
            }
        }
        ?>
    </div>


    </body>
    </html>
<?php
function debug_to_console($data)
{
    if (is_array($data) || is_object($data)) {
        echo("<script>console.log('PHP: " . json_encode($data) . "');</script>");
    } else {
        echo("<script>console.log('PHP: " . $data . "');</script>");
    }
}

?>