@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 <!--=========================================================================-->

 <!--=========================================================================-->

<body>

  <div class="container">
  <h1> Beach Activity Details </h1>
  

  <div>
        <hr />
        <dl class="row">
                @foreach($BActivity as $BActivity)
                {{-- {{$BActivity}} --}}
                <dt class = "col-sm-2"> ID</dt>
                <dd class = "col-sm-10">{{$BActivity->id }}</dd>

                <dt class = "col-sm-2">Description </dt>
                <dd class = "col-sm-10"> {{$BActivity->description }}</dd>

                <dt class = "col-sm-2"> Date</dt>
                <dd class = "col-sm-10"> {{$BActivity->date }} </dd>

                <dt class = "col-sm-2"> Time</dt>
                <dd class = "col-sm-10">{{$BActivity->time }}</dd>

                <dt class = "col-sm-2"> Image</dt>
                <dd class = "col-sm-10">{{$BActivity->image }}</dd>

                <dt class = "col-sm-2"> Beach Name</dt>
                <dd class = "col-sm-10">{{$BActivity->name }}</dd>
                @endforeach
        </dl>
  </div>
  <a href ="{{ action('BeachActivityController@editView',$BActivity->id ) }}" method="POST" >Edit</a> |
  <a href="http://127.0.0.1:8000/admin/beach/ba">Back to List</a>
{{-- container --}}


  @include('includes.adminFooter')
