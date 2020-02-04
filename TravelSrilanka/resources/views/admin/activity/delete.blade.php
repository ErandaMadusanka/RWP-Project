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
                      Activity</h4>
              <hr />
              <dl class="row">
                @foreach($activities as $activity)
                <dt class = "col-sm-2"> ID</dt>
                <dd class = "col-sm-10">{{$activity->id }}</dd>

                <dt class = "col-sm-2">Name</dt>
                <dd class = "col-sm-10">{{$activity->activity_name }} </dd>

                <dt class = "col-sm-2">Description </dt>
                <dd class = "col-sm-10"> {{$activity->description }}</dd>

                <dt class = "col-sm-2"> Date</dt>
                <dd class = "col-sm-10"> {{$activity->date }} </dd>

                <dt class = "col-sm-2"> Time</dt>
                <dd class = "col-sm-10">{{$activity->time }}</dd>

                <dt class = "col-sm-2"> Duration</dt>
                <dd class = "col-sm-10">{{$activity->duration }}</dd>

                <dt class = "col-sm-2"> Important Info</dt>
                <dd class = "col-sm-10">{{$activity->important_info }}</dd>

                <dt class = "col-sm-2"> Guid Info</dt>
                <dd class = "col-sm-10">{{$activity->guid_info }}</dd>

                <dt class = "col-sm-2"> User</dt>
                <dd class = "col-sm-10">{{$activity->user_name }}</dd>

                <dt class = "col-sm-2"> City</dt>
                <dd class = "col-sm-10">{{$activity->city_name }}</dd>
             
        </dl>
  </div>
  <form action="{{ route("admin.activity.delete", $activity->id) }}">
    <input type="submit" value="Delete" class="btn btn-danger" /> |
    <a href="{{ action('ActivitiesController@index') }}">Back to List</a>
</form>
@endforeach

  @include('includes.adminFooter')
