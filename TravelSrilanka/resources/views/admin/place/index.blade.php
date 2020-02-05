@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 <!--=========================================================================-->
 <link rel="stylesheet" type="text/css" href="{{url('css/admin_beaches.css')}}">
 <!--=========================================================================-->
  <div class="alert d-flex justify-content-center align-items-center">
        @if(Session::has('message'))   
            <ul class="alert alert-success message">
                <span> {{ Session::get('message') }} 
                    @php
                    Session::forget('message');
                    @endphp
                </span>  
            </ul>
        @endif 
    </div>

  <div class="container">
  <h1> Places </h1>
  <a href="{{ action('PlacesController@createView') }}">Create New</a>
 
 
  <table class="table">
      <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Discription</th>
            <th>Latitude</th>
            <th>Logitude</th>
            <th>User</th>
            <th>City</th>
            <th></th>
          </tr>
      </thead>
    @foreach($places as $place)
    <tr>
    <td> {{$place->id }}</td>
    <td> {{$place->name }}  </td>
    <td> {{$place->description }} </td>
    <td> {{$place->latitude }} </td>
    <td> {{$place->longitude }} </td>
    <td> {{$place->user_name }} </td>
    <td> {{$place->city_name }} </td>
    <td class="float-right">
        <a href ="{{ action('PlacesController@editView',$place->id ) }}" >Edit</a> |
        <a href ="{{ action('PlacesController@detailsView',$place->id ) }}">Details</a> |
        <a href ="{{ action('PlacesController@deleteView',$place->id ) }}">Delete</a>
    </td>
  </tr>

  @endforeach
</table>
</div>
{{-- container --}}


@include('includes.adminFooter')
