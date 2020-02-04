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
                    Session::forget('success');
                    @endphp
                </span>  
            </ul>
        @endif 
    </div>

  <div class="container">
  <h1> Activity </h1>
  <a href="{{ action('ActivitiesController@createView') }}">Create New</a>
 
  <table class="table">
      <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Discription</th>
            <th>Date</th>
            <th>Time</th>
            <th>Duration</th>
            <th>Important Info</th>
            <th>Guid Info</th>
            <th>User</th>
            <th>City</th>
            <th></th>
          </tr>
      </thead>
    </tbody>

    @foreach($activities as $activity)
    <tr>
    <td> {{$activity->id }}</td>
    <td> {{$activity->activity_name }}  </td>
    <td> {{$activity->description }} </td>
    <td> {{$activity->date }} </td>
    <td> {{$activity->time }} </td>
    <td> {{$activity->duration }} </td>
    <td> {{$activity->important_info }} </td>
    <td> {{$activity->guid_info }}</td>
    <td> {{$activity->user_name }}</td>
    <td> {{$activity->city_name }}</td>
    <td class="float-right">
        <a href ="{{ action('ActivitiesController@editView',$activity->id ) }}" >Edit</a> |
        <a href ="{{ action('ActivitiesController@detailsView',$activity->id ) }}">Details</a> |
        <a href ="{{ action('ActivitiesController@deleteView',$activity->id ) }}">Delete</a>
    </td>
  </tr>

  @endforeach
</table>
</div>
{{-- container --}}


@include('includes.adminFooter')
