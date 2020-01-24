@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 <!--=========================================================================-->
 <link rel="stylesheet" type="text/css" href="{{url('css/admin_beaches.css')}}">
 <!--=========================================================================-->

<body>
    <div class="container-fluid">
      <div class="wrapper">
        <div class="card">
          <div class="card-header">
            Add Beache
            </div>

            <div class ="card-body">
              <form>
                  @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control" type="text">
                </div>
                <div class="form-group">
                  <label>Discription</label>
                  <textarea  class="form-control" type="text" name="textarea" rows="10">
                    </textarea>
                </div>
                <div class="form-group">
                  <label>Latitude</label>
                  <input class="form-control" type="text">
                </div>
                <div class="form-group">
                  <label>Logitude</label>
                  <input class="form-control" type="text">
                </div>
                <button type="button" class="btn btn-outline-primary float-right">Insert</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->

</div>
  <!-- /#wrapper -->

  @include('includes.adminFooter')