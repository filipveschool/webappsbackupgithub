/**
 * Created by filip on 5/27/2016.
 */

// stores the reference to the XMLHttpRequest object
var xmlHttp = createXmlHttpRequestObject();
// retrieves the XMLHttpRequest object
function createXmlHttpRequestObject() {
// stores the reference to the XMLHttpRequest object
    var xmlHttp;
// if running Internet Explorer 6 or older
    if (window.ActiveXObject) {
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (e) {
            xmlHttp = false;
        }
    }
// if running Mozilla or other browsers
    else {
        try {
            xmlHttp = new XMLHttpRequest();
        }
        catch (e) {
            xmlHttp = false;
        }
    }
// return the created object or display an error message
    if (!xmlHttp)
        alert("Error creating the XMLHttpRequest object.");
    else
        return xmlHttp;
}

// make asynchronous HTTP request using the XMLHttpRequest object
function process() {
// proceed only if the xmlHttp object isn't busy
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
// retrieve the name typed by the user on the form
        //name = encodeURIComponent(document.getElementById("myName").value);
// execute the quickstart.php page from the server
        xmlHttp.open("GET", "labo1GetDataDBAdmin.php", true);
        //als je true in false verandert, zal alles synchronous ipv asynchronous werken

// define the method to handle server responses
        xmlHttp.onreadystatechange = handleServerResponse;
// make the server request
        xmlHttp.send(null);
    }
    else
// if the connection is busy, try again after one second
        setTimeout('process()', 1000);
}

// callback function executed when a message is received from the
//server
function handleServerResponse() {
// move forward only if the transaction has completed
    if (xmlHttp.readyState == 4) {
// status of 200 indicates the transaction completed
//successfully
        if (xmlHttp.status == 200) {
// extract the XML retrieved from the server
            responseJson = JSON.parse(xmlHttp.responseText);

            //generate HTML output
            var html = "";
            //<console.log(responseJson);
            //iterate through the arrays and create an html structure
            /*
             for (var i = 0; i < responseJson.length; i++) {
             html += responseJson[i].productname + "," + responseJson.price + "<br/>";
             }
             */
            console.log(xmlHttp.responseText);
            var temp = "";
            for (var i = 0; i < responseJson.length; i++) {
                temp +="<tr>";
                temp += "<td>" + responseJson[i].productname + "</td>";
                temp += "<td>" + responseJson[i].price  + "</td>";
                temp += "<td>" + responseJson[i].stockstatus + "</td>";
                temp += "</tr>";
                html += "test : " + responseJson[i].productname + "<br/>";
            }

            var myDiv = document.getElementById("divMessage");
            var tr = document.getElementById("addproducttotable");

            tr.innerHTML=temp;

            //display the html output

            myDiv.innerHTML = "<p>Server says : </p>" + html;

            // restart sequence
            setTimeout('process()', 1000);
        }
// a HTTP status different than 200 signals an error
        else {
            alert("There was a problem accessing the server: " +
                xmlHttp.statusText);
        }
    }
}