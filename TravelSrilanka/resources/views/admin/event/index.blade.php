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
  <h1> Events </h1>
  <a href="{{ action('EventsController@createView') }}">Create New</a>
 
 
  <table class="table">
      <thead>
          <tr>
            <th>ID</th>
            <th>name</th>
            <th>Discription</th>
            <th>Date</th>
            <th>Time</th>
            <th>Venue</th>
            <th>OrganizedBy</th>
            <th>Website</th>
            <th>ContactInfo</th>
            <th>User</th>
            <th>City</th>
            <th></th>
           
            
           
          </tr>
      </thead>
    </tbody>
    
    @foreach($events as $event)
      
    <tr>
    <td> {{$event->id }}</td>
    <td> {{$event->name }}  </td>
    <td> {{$event->description }} </td>
    <td> {{$event->date }} </td>
    <td> {{$event->time }} </td>
    <td> {{$event->venue }} </td>
    <td> {{$event->organized_by }} </td>
    <td> {{$event->website }} </td>
    <td> {{$event->contact_info }} </td>
    <td> {{$event->user_name }} </td>
    <td> {{$event->city_name }} </td>
    
    <td class="float-right">
        <a href ="{{ action('EventsController@editView',$event->id ) }}" >Edit</a> |
        <a href ="{{ action('EventsController@detailsView',$event->id ) }}">Details</a> |
        <a href ="{{ action('EventsController@deleteView',$event->id ) }}">Delete</a>
    </td>
  </tr>

  @endforeach
</table>
</div>
{{-- container --}}


@include('includes.adminFooter')
