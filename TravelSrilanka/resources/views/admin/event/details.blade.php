@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 <!--=========================================================================-->

 <!--=========================================================================-->

<body>

  <div class="container">
  <h1> Events Details </h1>
  

  <div>
        <hr />
        <dl class="row">
          
                @foreach($events as $event)

                <dt class = "col-sm-2"> ID</dt>
                <dd class = "col-sm-10">{{$event->id }}</dd>

                <dt class = "col-sm-2">Name</dt>
                <dd class = "col-sm-10">{{$event->name }} </dd>

                <dt class = "col-sm-2">Description </dt>
                <dd class = "col-sm-10"> {{$event->description }}</dd>

                <dt class = "col-sm-2"> Date</dt>
                <dd class = "col-sm-10"> {{$event->date }} </dd>

                <dt class = "col-sm-2"> Time</dt>
                <dd class = "col-sm-10">{{$event->time }}</dd>

                <dt class = "col-sm-2"> Venue</dt>
                <dd class = "col-sm-10">{{$event->venue }}</dd>

                <dt class = "col-sm-2"> Organized By</dt>
                <dd class = "col-sm-10">{{$event->organized_by }}</dd>

                <dt class = "col-sm-2"> Website</dt>
                <dd class = "col-sm-10">{{$event->website }}</dd>

                <dt class = "col-sm-2"> Contact Info</dt>
                <dd class = "col-sm-10">{{$event->Contact_info }}</dd>

                <dt class = "col-sm-2"> User </dt>
                <dd class = "col-sm-10">{{$event->user_name }}</dd>

                <dt class = "col-sm-2"> City </dt>
                <dd class = "col-sm-10">{{$event->city_name }}</dd>
                @endforeach
        </dl>
  </div>
  <a href ="{{ action('EventsController@editView',$event->id ) }}" method="POST" >Edit</a> |
  <a href="{{ action('EventsController@index') }}">Back to List</a>
{{-- container --}}


  @include('includes.adminFooter')
