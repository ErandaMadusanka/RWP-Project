<!DOCTYPE html>
<html lang="en">
<head>
	<title>National Park</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 {{-- <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}"> --}}

</head>
<body>
@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
@include('includes.adminFooter')

<div class="container">
	<form action="/saveNationalParkData" method="POST" class="needs-validation" novalidate>
		{{csrf_field()}}
		<br>
		<div class="form-row">
			<div class="col-md-8">
				<div class="form-row">
				    <div class="col-sm-4">
				    	<label for="name">National Park Name:</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Enter national park name" required>
						<div class="valid-feedback">Valid.</div>
		      			<div class="invalid-feedback">Please fill out this field.</div>
		      		</div>
		      	</div>
		      	<br>
				<div class="form-row">
				    <div class="col-sm-8">
						<label for="desc">Description:</label>
						<textarea name="desc" id="desc" class="form-control" placeholder="Enter description" required></textarea>
						<div class="valid-feedback">Valid.</div>
		      			<div class="invalid-feedback">Please fill out this field.</div>
		      		</div>
		      	</div>
		      	<br>
				<div class="form-row">
				    <div class="col-sm-4">
						<label for="">Province <span class="required text-danger">*</span></label>
						<select id="province" class="custom-select dynamic" data-dependent="distict">
							<option value=""> --SELECT--</option>
							@foreach($province_list as $province)
								<option value="{{$province->id}}">{{$province->name}}</option>
							@endforeach
						</select>
				    </div>
				    <div class="col-sm-4">
						<label for="">District <span class="required text-danger">*</span></label>
						<select id="district" class="custom-select dynamic" data-dependent="city" >
							<option value=""> --SELECT--</option>
							<option value="">Colombo</option>		
						</select>
				    </div>
				    <div class="col-sm-4">
						<label for="">City <span class="required text-danger">*</span></label>
						<select id="city" class="custom-select" >
							<option value=""> --SELECT--</option>
							<option value="">Moratuwa</option>	
						</select>
				    </div>
				</div>
				<br>
				<div class="form-row">
				    <div class="col-sm-4">
						<label for="lat">Latitude:</label>
						<input type="text" name="lat" id="lat" class="form-control" placeholder="Enter latitude" required>
						<div class="valid-feedback">Valid.</div>
		      			<div class="invalid-feedback">Please fill out this field.</div>
		      		</div>
		      	</div>
		      	<br>
				<div class="form-row">
				    <div class="col-sm-4">
						<label for="long">Longitude:</label>
						<input type="text" name="long" id="long" class="form-control" placeholder="Enter longitude" required>
			      		
			      		<div class="valid-feedback">Valid.</div>
		      			<div class="invalid-feedback">Please fill out this field.</div>
		      		</div>
		      	</div>
		      	<br>
				<div class="form-row">
				    <div class="col-sm-4">
						<label for="cont">Contact Info:</label>
						<input type="text" name="cont" id="cont" class="form-control" placeholder="Enter contact info" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>
				<br>
				<div class="form-row">
				    <div class="col-sm-4">
						<label for="website">Website:</label>
						<input type="text" name="website" id="website" class="form-control" placeholder="Enter website" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">SAVE</button>
				<button type="button" class="btn btn-warning">CLEAR</button>
				<br><br>
			</div>
			<div class="col-md-4">
				<div class="d-flex justify-content-end">
					<table class="table table-bordered table-hover">
					    <thead>
					      <tr>
					        <th>Day</th>
					        <th>Open Time</th>
					        <th>Close Time</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>Monday</td>
					        <td><input type="time" name="mot"></td>
					        <td><input type="time" name="mct"></td>
					      </tr>
					      <tr>
					        <td>Tuesday</td>
					        <td><input type="time" name="tot"></td>
					        <td><input type="time" name="tct"></td>
					      </tr>
					      <tr>
					        <td>Wendsday</td>
					        <td><input type="time" name="wot"></td>
					        <td><input type="time" name="wct"></td>
					      </tr>
					      <tr>
					        <td>Thursday</td>
					        <td><input type="time" name="thot"></td>
					        <td><input type="time" name="thct"></td>
					      </tr>
					      <tr>
					        <td>Friday</td>
					        <td><input type="time" name="fot"></td>
					        <td><input type="time" name="fct"></td>
					      </tr>
					      <tr>
					        <td>Saturday </td>
					        <td><input type="time" name="stot"></td>
					        <td><input type="time" name="stct"></td>
					      </tr>
					      <tr>
					        <td>Sunday</td>
					        <td><input type="time" name="sot"></td>
					        <td><input type="time" name="sct"></td>
					      </tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>

	</form>
</div>

<!--Bootstrap js-->


<!--page level custom js-->
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<script>
	$(document).ready(function(){

	 $('.dynamic').change(function(){
	  if($(this).val() != '')
	  {

	   var select = $(this).attr("id");
	   var value = $(this).val();
	   var dependent = $(this).data('dependent');
	   var _token = $('input[name="_token"]').val();

		$.ajax
		({
		    url:"{{ route('dynamicdependent.fetch') }}",
		    method:"POST",
		    data:{select:select, value:value, _token:_token, dependent:dependent},
		    success:function(result)
		    {
		     $('#'+dependent).html(result);
		    }
		})
	  }
	 });

	 $('#province').change(function(){
	  $('#district').val('');
	  $('#city').val('');
	 });

	 $('#district').change(function(){
	  $('#city').val('');
	 });
	 

	});
</script>
</body>
</html>

