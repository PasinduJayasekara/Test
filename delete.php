<?php


echo ($_COOKIE["A"]);

if(!isset($_COOKIE["A"])){

    echo ("Cookies are not available");

}else if(isset($_COOKIE["A"])){
    
    setcookie("A","Hello World!",time() + (60*60*24));
}


?>