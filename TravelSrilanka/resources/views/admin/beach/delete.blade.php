@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 
  <div class="container">
  <h1> Delete </h1>
  <div>
        <h4>Are you sure you want to delete this?
                Beach</h4>
        <hr />
        <dl class="row">
                @foreach($beach as $beach)
                <dt class = "col-sm-2"> ID</dt>
                <dd class = "col-sm-10">{{$beach->id }}</dd>

                <dt class = "col-sm-2">Name</dt>
                <dd class = "col-sm-10">{{$beach->name }} </dd>

                <dt class = "col-sm-2">Discription </dt>
                <dd class = "col-sm-10"> {{$beach->description }}</dd>

                <dt class = "col-sm-2"> Latitude</dt>
                <dd class = "col-sm-10"> {{$beach->latitude }} </dd>

                <dt class = "col-sm-2"> Longitude</dt>
                <dd class = "col-sm-10">{{$beach->longitude }}</dd>

                <dt class = "col-sm-2"> Image</dt>
                <dd class = "col-sm-10">{{$beach->image }}</dd>

                <dt class = "col-sm-2"> User</dt>
                <dd class = "col-sm-10">{{$beach->user_name }}</dd>

                <dt class = "col-sm-2"> City</dt>
                <dd class = "col-sm-10">{{$beach->city_name }}</dd>
               
        </dl>
  </div>
<form action="{{ route("admin.beach.delete", $beach->id) }}">
        <input type="submit" value="Delete" class="btn btn-danger" /> |
        <a href="{{ action('BeachesController@index') }}">Back to List</a>
</form>
@endforeach
 
{{-- container --}}

@include('includes.adminFooter')

    
   

