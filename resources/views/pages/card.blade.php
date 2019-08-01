<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "company");
  $result = mysqli_query($db, "SELECT * FROM ajax_images");
  $result1 = mysqli_query($db, "SELECT * FROM  table_employees");

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
<form action="{{'/ch'}}" method=POST>
  {{csrf_field()}}

  Email: <input type=text name=uemail size=25> <br>
</br>
</br>
</br>

  <input type=submit value='Enter'>
</br>
</br>
</br>
</br>

</form>

</div>
</div>
</div>
</div>
</div>


@endsection('content')
