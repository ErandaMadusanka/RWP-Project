@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')
 <!--=========================================================================-->
 <link rel="stylesheet" type="text/css" href="{{url('css/admin_beaches.css')}}">
 <!--=========================================================================-->
 {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
 {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
   
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


<div class="row">

<div class="col-md-12">

<div class="rightside d-flex justify-content-center align-items-center "> 

<div class="wrapper">

<div class="card">

<div class="card-header text-center">
    Add Beache Activity
    </div>

    <div class="card-body">
    
        <form>
            @csrf

            <div class="container">

                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                  </ul>
                </div>
              </div>
        
        <div class="form-group">
            <label>Description</label>
            <textarea style="resize: none;"  class="form-control" type="text" name="textarea" rows="10"></textarea>
        </div>
        
        <div class="form-group">
            <table style="width:100%">
                <tr>
                    <td style="width:50%"> Date:</td>
                    <td>
                        <input id="datepicker" width="276" />
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                        </td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td> </td>    
                    </tr>
                    <tr>
                        <td>Time:</td>
                        <td>
                            <input id="timepicker" width="276" />
                            <script>
                                $('#timepicker').timepicker();
                            </script>
                        </td>    
                    </tr>
            </table>
        </div>

        <div>
            <table>
                
            </table>
        </div>

        <button type="button" class="btn btn-primary float-right">Insert</button>

        </form>

    </div>
    {{-- card-body --}}

</div>
{{-- card --}}

</div>
{{-- wrapper --}}

</div>
{{-- right --}}

</div>
{{-- col --}}

</div>
{{-- row --}}
        
        