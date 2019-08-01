<?php

  // Create database connection

  $db = mysqli_connect("localhost", "root", "", "company");

  $result1 = mysqli_query($db, "SELECT * FROM  table_employees");

  $result = mysqli_query($db, "SELECT * FROM ajax_images");


?>

@extends('layouts.app')


@section('content')


<div class="w3-container">

      <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

              <div class="w3-center">

              </br>

            </br>

          </br>

<?php


//predefined values




//fetch values from POST array


$userEmail = trim($_POST['uemail']);


//using IF - ELSE with the help of comparison and Logical operators

while ($row= mysqli_fetch_array($result1,MYSQLI_ASSOC)){

   if($userEmail == $row['emp_email'] ) {

     $rows= mysqli_fetch_array($result);

     echo "<img src='images/".$rows['image']."' >";

     echo "<div class='centered'>" .$row['emp_name']." ";


   
     "</div>";

 }



}

?>

</br>

</br>

</br>

</div>

</div>

</div>

</div>

</div>


@endsection('content')
