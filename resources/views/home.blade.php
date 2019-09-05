<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "company");
  $result = mysqli_query($db, "SELECT * FROM ajax_images");
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">
              </div>
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <form class="form-horizontal" method="POST"
                action="{{route('register')}}">
                {{ csrf_field() }}
                <div class="form-group">

                    <center>
                       <?php
                        while ($row = mysqli_fetch_array($result)) {
                          echo "<div id='img_div'>";
                          	echo "<img src='images/".$row['image']."' >";
                           echo "</div>";
                        }
                      ?>
                    </center>
                    </div>
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th> </th>
                          <th>ID</th>
                          <th>Username</th>
                          <th>email</th>
                          <th>mobile</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($users)>0)
                        @foreach($users->all() as $user)

                      </tr>
                      <td><input type="checkbox" name="" class="checkbox" value=""/></td>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->mobile}}</td>
</tr>
                        @endforeach
                        @endif

</tbody>
</table>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    send Message
                  </button>
                </div>
            </div>
          </form>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
