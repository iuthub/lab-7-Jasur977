<?php
//mysqli_coonect;
 $connect = mysqli_connect('localhost','mysql', 'mysql','users');
 if (!$connect){
     die('Eror connect to dataBase');
 }
