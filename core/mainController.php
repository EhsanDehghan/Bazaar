<?php
class mainController{
  function __construct(){

  }

  function viewUrl($viewUrl){
    require('views/' . $viewUrl . '.php');



  }
}





 ?>
