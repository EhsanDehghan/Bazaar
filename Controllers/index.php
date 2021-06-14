<?php
class index extends mainController{


  function __construct(){
    // echo 'We are in index controller!';
  }


  function sayHello(){

  }


  function index(){
    $this -> viewUrl('index/index');
  }
}




$object = new index;



 ?>
