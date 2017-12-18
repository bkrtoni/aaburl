/**
 * 
 * baker alharoun
 */

// http object
var xmlhttp=new XMLHttpRequest();

// If the object is ready
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        copmplete(myArr);
    }
};

/*
 * 
 * @param {type} arr
 * @return Nothing
 * 
 * when the result of of xmlhttp is ready
 * we this will show the result
 */
function copmplete(arr){
    var error = document.getElementById('error');
    var result=document.getElementById('result');
    
    error.innerHTML=arr.error;
    if(arr.error=="")
        result.innerHTML="The shorted URL : "+"<a href="+arr.result+">"+arr.result+"</a>";
}

/**
 * 
 * @return Nothing
 * 
 * when submit butten clicked by the user
 * this funtion will be called
 * 
 * this function do the http request
 */
function getResult(){
    'use strict';
    
    var url=document.getElementById('url');
    xmlhttp.open("POST","result.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("url="+url.value);
}