@extends('layouts.app')

@section('content')

  <div class="container">
  <a href="/options" class="previous">« Previous</a>
</br>
</br>
</br>
</br>

   @if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

<div class="row">

       @foreach($employees as $row)

<?php
echo "<div class='col-md-4'>";?>
<img src="{{ asset('images/' . $data [0]->image) }}" />
<?= "<div class='centered'>" .$row->empName ?>

</div>
</div>

         @endforeach
</div>

  @endsection('content')
