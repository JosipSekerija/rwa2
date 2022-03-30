<?php

$con= mysqli_connect('studenti.sum.ba/phpmyadmin','rwa152022','csdigital2022','rwa152022');

function escape ($string){

  global $con;
  return mysqli_real_escape_string($con,$string);

}

function query($query){
  global $con;
  return mysqli_query($con , $query);

}

functioncon confirm($result){
  global $con;
  if(!result){
    die('query failed' .mysqli_error($con));
  }
}