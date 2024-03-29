@extends('layouts.app')

@section('content')


<div class="container">


  <form action="{{ route('ajaxImageUpload') }}" enctype="multipart/form-data" method="POST">


  	<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <a href="/options" class="previous">&laquo; Previous</a>
</br>
</br>
</br>
</br>
	<div class="form-group">

      <label>Image:</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
      <button class="btn btn-success upload-image" type="submit">Upload Image</button>
    </div>


  </form>


</div>


<script type="text/javascript">
  $("body").on("click",".upload-image",function(e){
    $(this).parents("form").ajaxForm(options);
  });


  var options = {
    complete: function(response)
    {
    	if($.isEmptyObject(response.responseJSON.error)){
    		$("input[name='title']").val('');
    		alert('Image Upload Successfully.');
    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };


  function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }
</script>
@endsection
