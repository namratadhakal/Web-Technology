<?php
function addCookie()
{
    setcookie("key","value", time()+20,"/");
}
function readCookie(){
    if(isset($_COOKIE["key"]))
        {
            echo $_COOKIE["key"];
        }
}

function deleteCookie(){
    setcookie("username","",time()-1,"/");
}
//addCookie();
//readCookie();
deleteCookie();

?>