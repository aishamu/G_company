<?php

  // Create database connection

  $db = mysqli_connect("localhost", "root", "", "company");

  $result = mysqli_query($db, "SELECT * FROM ajax_images");

  $result1 = mysqli_query($db, "SELECT emp_name FROM  table_employees");


?>

@extends('layouts.app')


@section('content')

<a href="/options" class="previous">&laquo; Previous</a>
</br>
</br>
</br>
</br>

<?php


$rows=mysqli_fetch_array ($result,MYSQLI_ASSOC);
$i=1;
$j=1;
$k=1;

while($row = mysqli_fetch_array ($result1,MYSQLI_ASSOC)) {
  if($j==$i){
    echo"<div class='row'>";
$j=$i+4;
  }


                          echo "<div class='col-md-3'>";
                           echo "<img src='images/".$rows['image']."' >";
                           echo"<div class='centered'>" .$row['emp_name'];
                           echo "</div>";
                           echo "</div>";




                        }


if($k==$i){
  echo"</div>";
$k=$k=4;
}
  $i++;                    ?>





  @endsection
