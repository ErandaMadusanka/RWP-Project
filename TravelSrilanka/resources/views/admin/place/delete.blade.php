@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 <!--=========================================================================-->

 <!--=========================================================================-->

<body>

    <div class="container">
        <h1> Delete </h1>
        <div>
              <h4>Are you sure you want to delete this?
                      Place</h4>
              <hr />
        <dl class="row">
                @foreach($places as $place)
                <dt class = "col-sm-2"> ID</dt>
                <dd class = "col-sm-10">{{$place->id }}</dd>

                <dt class = "col-sm-2">Name</dt>
                <dd class = "col-sm-10">{{$place->name }} </dd>

                <dt class = "col-sm-2">Description </dt>
                <dd class = "col-sm-10"> {{$place->description }}</dd>

                <dt class = "col-sm-2"> Latitude</dt>
                <dd class = "col-sm-10"> {{$place->latitude }} </dd>

                <dt class = "col-sm-2"> Longitude</dt>
                <dd class = "col-sm-10">{{$place->longitude }}</dd>

                <dt class = "col-sm-2"> Image</dt>
                <dd class = "col-sm-10">{{$place->image }}</dd>

                <dt class = "col-sm-2"> User</dt>
                <dd class = "col-sm-10">{{$place->user_name }}</dd>

                <dt class = "col-sm-2"> City</dt>
                <dd class = "col-sm-10">{{$place->city_name }}</dd>
              
        </dl>
  </div>
  <form action="{{ route("admin.place.delete", $place->id) }}">
    <input type="submit" value="Delete" class="btn btn-danger" /> |
    <a href="{{ action('PlacesController@index') }}">Back to List</a>
</form>
@endforeach

  @include('includes.adminFooter')
