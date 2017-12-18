<?php
/**
 * baker alharoun
 * DATABASE connection and URL adding and validation 
 */

$host="localhost";
$user="root";
$password="12345";
$database="aaburl";

$con = mysqli_connect($host, $user, $password, $database) or die("NULL");

/**
 * 
 * @global type $con
 * @param type $str
 * @return string|boolean
 * 
 * check if the URL is inside the database
 * return the hash string if true else return false
 */
function checkURL($str){
    global $con;
    $sql="SELECT code"
        . " FROM url_code"
            . " WHERE url='$str';";
    $result= mysqli_query($con, $sql);
    if($result){
        $result= mysqli_fetch_assoc($result);
        return $result['code'];
    }
    
    return false;
}

/**
 * 
 * @global type $con
 * @param type $str
 * @return string|boolean
 * 
 * check if the hashstring is inside the database
 * return the URL if true else return false
 */
function checkCode($str){
    global $con;
    $str= htmlspecialchars($str);
    $sql="SELECT url"
        . " FROM url_code"
            . " WHERE code='$str';";
    $result= mysqli_query($con, $sql);
    if($result){
        $row= mysqli_fetch_assoc($result);
        return $row['url'];
    }
    
    return false;
}


/**
 * 
 * @global type $con
 * @param type $url
 * @param type $code
 * @return boolean
 * 
 * add the new values inside the database
 * if some error happened return false else true
 */
function add($url,$code){
    global $con;
    $url= htmlspecialchars($url);
    $sql="INSERT INTO url_code (url,code,date) VALUES('$url','$code','".date("Y-m-d H:i:s")."')";
    if(mysqli_query($con, $sql))return true;
    return false;
}