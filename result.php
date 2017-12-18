<?php
/*
 * 
 * baker alharoun.
 * 
 * when the http request called
 * the result of this page will be returned as JSON object
 * 
 */

include './connect.php';
include './generater.php';

$error = "";
$new_url="";

$url=$_POST['url'];
$reg="/([a-z]+:\/\/)*([a-z]+\.)+([a-z]+)(\/.*)*/i";

if(strlen($url)==0)//check if the URL is empty
    $error='Please enter an URL.';
else if(!preg_match($reg,$url)) //check if the URL is right
    $error="This is not an URL.";
else if(strlen($url)>25){
    //when every thing all right 
    //check if the URL is already shorted
    $new_url= checkURL($url);

    //if is not shorted
    //try to create new hash string
    //then try to add it to the database
    if($new_url===NULL){
        $genCode= nextHash(8);
        while(checkCode($genCode)!=NULL){
           echo $genCode;
            $genCode= nextHash(8);
        }
        $new_url=$genCode;
        if(!add($url, $genCode)){
             $error="Can't add more.";
             $new_url="";
        }
    }
}else{
    $error = "A short URL.";
}

//print the result
echo '{"error":"'.$error.'","result":"http://'.gethostname().'/aaburl/'.$new_url.'"}';