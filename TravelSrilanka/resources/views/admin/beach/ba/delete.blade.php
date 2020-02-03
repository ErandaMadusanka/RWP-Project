@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')

  <div class="container">
    <h1> Delete </h1>
  

    <div>
          <h4>Are you sure you want to delete this?
                  Beach activity</h4>
          <hr />
        <dl class="row">
            @foreach($BActivity as $BActivity)
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
           
        </dl>
  </div>
  <form method="post" action="{{ route("admin.beachActivity.delete", $BActivity->id) }}">
    @CSRF
    <input type="submit" value="Delete" class="btn btn-danger" /> |
    <a href="{{ action('BeachActivityController@index') }}">Back to List</a>
</form>
@endforeach
{{-- container --}}


  @include('includes.adminFooter')
