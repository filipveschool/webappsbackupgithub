/**
 * Created by filipve on 18/04/2016.
 */

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

            $('#chat').html(html);
            //$('#chat').append(html);

            console.log(data);
            setTimeout(ajax2(),1000);
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


