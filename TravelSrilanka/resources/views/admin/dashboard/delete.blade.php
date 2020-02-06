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
                      User</h4>
              <hr />
        <dl class="row">
                @foreach($user as $user)
                <dt class = "col-sm-2"> ID</dt>
                <dd class = "col-sm-10">{{$user->id }}</dd>

                <dt class = "col-sm-2">Name</dt>
                <dd class = "col-sm-10">{{$user->user_name }} </dd>

                <dt class = "col-sm-2">Email </dt>
                <dd class = "col-sm-10"> {{$user->email }}</dd>

                <dt class = "col-sm-2"> Add as admin</dt>
                <dd class = "col-sm-10">{{$user->created_at }}</dd>

                <dt class = "col-sm-2"> Email verified at</dt>
                <dd class = "col-sm-10"> {{$user->email_verified_at }} </dd>

                <dt class = "col-sm-2"> Banned at</dt>
                <dd class = "col-sm-10">{{$user->banne_at }}</dd>

               
        </dl>
  </div>
  <form action="{{ route("admin.dashboard.delete", $user->id) }}">
    <input type="submit" value="Delete" class="btn btn-danger" /> |
    <a href="{{ action('DashboardController@index') }}">Back to List</a>
</form>
@endforeach

  @include('includes.adminFooter')