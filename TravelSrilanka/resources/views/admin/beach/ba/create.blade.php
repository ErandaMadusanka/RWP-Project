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


<div class="row">

<div class="col-md-12">

<div class="rightside d-flex justify-content-center align-items-center "> 

<div class="wrapper">

<div class="card">

<div class="card-header text-center">
    Add Beache Activity
    </div>

    <div class="card-body">
    
    <form method="post" action="{{route("admin.beachActivity.create")}}">
            @csrf

            <div class="container">

            <div class="form-group">
                    <label for="">Beach <span class="required text-danger">*</span></label>
                    <select  name="select" class="custom-select dynamic" required>
                        <option value="" > --SELECT--</option>
                        @foreach($beaches as $beach)
                        <option value="{{$beach->id}}">{{$beach->name}} </option>
                        @endforeach
                    </select>
                </div>

        <div class="form-group">
            <label>Description</label>
            <textarea style="resize: none;"  class="form-control" type="text" name="body" rows="10"> </textarea>
        </div>
        
        <div class="form-group">
            <table style="width:100%">
                <tr>
                    <td style="width:50%"> Date:</td>
                    <td>
                        <input id="datepicker" width="276" name="date" required/>
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
                            <input id="timepicker" width="276" name="time" required />
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

        <button type="submit" class="btn btn-primary float-right">Insert</button>

        </form>

    </div>
    {{-- card-body --}}

</div>
{{-- card --}}


</div>
{{-- wrapper --}}
<a href="{{ action('BeachActivityController@index') }}">Back to List</a>

</div>
{{-- right --}}

</div>
{{-- col --}}

</div>
{{-- row --}}
        
        