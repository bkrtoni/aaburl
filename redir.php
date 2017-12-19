<?php
/**
 * baker alharoun
 * this page redirect the shorted URL to the origin one
 * 
 */
include './connect.php';
$cd= htmlspecialchars($_GET['code']);

//if the code is there , go to the origin URL
//print not found page
$cd=checkCode($cd);
if($cd!==false){
    if(!preg_match("/^https?:\/\//i",$cd)
       $cd="http://".$cd;
    header("Location: $cd");
}else ?>
    
<html>
    <title>Error 404</title>
    <head>
        <link rel="stylesheet" href="w3.css">
    </head>
    <body>
        <div class="w3-container w3-display-middle">
            <h1 class="w3-text-red" style="font-size: 20em">
                404
            </h1>
            <p>
                <a class="w3-text-blue w3-xlarge" href="index.php">return to home.</a>
            </p>
        </div>
    </body>
</html>
   
