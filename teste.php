<?php
function GET($value){
    if(isset($_GET[$value])){
        return $_GET[$value];
    }   
}
function POST($value){
    if(isset($_POST[$value])){
        return $_POST[$value];
    }   
}

function GET_TRUE($value){
    if(isset($_GET[$value]) and $_GET[$value] != ""){
        return true;
    }else{
        return false;
    }
}
function POST_TRUE($value){
    if(isset($_POST[$value]) and $_POST[$value] != ""){
        return true;
    }else{
        return false;
    }
}

echo GET('site');
?>
               
           
       
