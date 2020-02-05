@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')




<body>
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
  <h1> Admins </h1>
  <a href="" class="button text-info float-right">Register New Admin</a>
 
 
  <table class="table">
      <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email_verified</th>
            <th>Ban/Revoke</th>
            <th>is_Ban</th>
            <th>Delete</th>
          </tr>
      </thead>
      @foreach($admins as $admin)
      <tr>
      <td> {{$admin->id }}</td>
      <td> {{$admin->user_name }}  </td>
      <td> {{$admin->email }} </td>
      <td> {{$admin->email_verified_at }} </td>
      <td>  
          @if($admin->isBanned())
          <a href="{{ route('users.revokeuser',$admin->id) }}" class="btn btn-success btn-sm"> Revoke</a>
          @else
          <a class="btn btn-warning ban btn-sm" data-id="{{ $admin->id }}" data-action="{{ URL::route('users.ban') }}"> Ban</a>
          @endif
      </td>
      <td>
          @if($admin->isBanned())
          <label class="badge badge-danger">Yes</label>
          @else
          <label class="badge badge-success">No</label>
          @endif
      </td>
      <td>
          <a class="btn btn-danger  btn-sm" href="{{ route("admin.dashboard.delete", $admin->id) }}">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
</body>

<script type="text/javascript">
  $("body").on("click",".ban",function(){
      

    var current_object = $(this);


    bootbox.dialog({
    closeOnEscape: false,
    message: "<form class='form-inline add-to-ban' method='POST'><div class='form-group'><textarea class='form-control reason' rows='4' style='width:467px' placeholder='Add Reason for Ban this user.'></textarea></div></form>",
    title: "<h5 class='float-right'>Add To Black List</h5>",
    buttons: {
      success: {
        label: "Submit",
        className: "btn-success",
        callback: function() {
              var baninfo = $('.reason').val();
              var token = $("input[name='_token']").val();
              var action = current_object.attr('data-action');
              var id = current_object.attr('data-id');


              if(baninfo == ''){
                  $('.reason').css('border-color','red');
                  return false;
              }else{
                  $('.add-to-ban').attr('action',action);
                  $('.add-to-ban').append('<input name="_token" type="hidden" value="'+ token +'">')
                  $('.add-to-ban').append('<input name="id" type="hidden" value="'+ id +'">')


                  $('.add-to-ban').append('<input name="baninfo" type="hidden" value="'+ baninfo +'">')
                  $('.add-to-ban').submit();
              }


        }
      },
      danger: {
        label: "Cancel",
        className: "btn-danger",
        callback: function() {
          // remove
        }
      },
    }
  });
});
</script>
  @include('includes.adminFooter')
  
