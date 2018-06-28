<?php
session_start();
if(empty($_SESSION['i'])){$_SESSION['i'] =0;}
$_SESSION['i'] ++;
?>
<!-- You should not do that... ( ͡° ͜ʖ ͡°) -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Paradigm</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body> 

        <div id="screen">

            <input onchange="if($('#message').val() == 'follow me'){document.location.href='start.php';}" id="message" type="text" name="message" value="">

        </div>

            <script>




var cpt=0;
var level=0;
$( document ).ready(function() {


    $('#screen').click(function()
    {    
        $('div').hide();
        $('#screen').show();


    });




});




setTimeout(fonctionAExecuter, 100); 

function fonctionAExecuter()
{
    $('div').hide();
    $('#screen').show();
}










            </script>
    </body>
</html>

