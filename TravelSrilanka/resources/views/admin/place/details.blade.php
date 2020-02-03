@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 <!--=========================================================================-->

 <!--=========================================================================-->

<body>

  <div class="container">
  <h1> Places Details </h1>
  

  <div>
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
                @endforeach
        </dl>
  </div>
  <a href ="{{ action('PlacesController@editView',$place->id ) }}" method="POST" >Edit</a> |
  <a href="{{ action('PlacesController@index') }}">Back to List</a>
{{-- container --}}


  @include('includes.adminFooter')
