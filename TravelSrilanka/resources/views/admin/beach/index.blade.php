@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')

  <div class="alert d-flex justify-content-center align-items-center">
        @if(Session::has('message'))   
            <ul class="alert alert-success message">
                <span> {{ Session::get('message') }} 
                    @php
                    Session::forget('success');
                    @endphp
                </span>  
            </ul>
        @endif 
    </div>

  <div class="container">
  <h1> Beaches </h1>
  <a href="{{ action('BeachesController@createView') }}">Create New</a>
  <a href="{{ action('BeachActivityController@index') }}" class="button text-info float-right">Beach Activities</a>
 
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
    </tbody>
      @foreach($beach as $beach)
      
      <tr>
      <td> {{$beach->id }}</td>
      <td> {{$beach->name }}  </td>
      <td> {{$beach->description }} </td>
      <td> {{$beach->latitude }} </td>
      <td> {{$beach->longitude }} </td>
      <td> {{$beach->user_name }} </td>
      <td> {{$beach->city_name }} </td>
      <td class="float-right">
          <a href ="{{ action('BeachesController@editView',$beach->id ) }}" >Edit</a> |
          <a href ="{{ action('BeachesController@detailsView',$beach->id ) }}">Details</a> |
          <a href ="{{ action('BeachesController@deleteView',$beach->id ) }}">Delete</a>
      </td>
    </tr>
 
    @endforeach
  </table>
</div>
{{-- container --}}


  @include('includes.adminFooter')
