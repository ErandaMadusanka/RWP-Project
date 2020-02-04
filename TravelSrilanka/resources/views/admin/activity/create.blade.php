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

    <div class="leftside d-flex justify-content-center align-items-center "> 

    <div class="wrapper">
        
    <div class="card">

        <div class="card-header text-center">
            Create Activity
        </div>

            <div class ="card-body">

            <form method="post" action="{{ route("admin.activity.create") }}">
                    @csrf
                    <div class="form-group">
                        <label for="">City <span class="required text-danger">*</span></label>
                        <select  name="select" class="custom-select dynamic" required>
                            <option value="" > --SELECT--</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id }}"> {{$city->city_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" required>  
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea style="resize: none;" name="body" class="form-control" type="text" name="textarea" rows="2" required></textarea>
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
            
                    <div class="form-group">
                    <label>Duration</label>
                    <input class="form-control" name="duration" type="text" required>
                    </div>

                    <div class="form-group">
                    <label>Important info</label>
                    <input class="form-control" type="text" name="importantinfo"required >
                    </div>

                    <div class="form-group">
                    <label>Guid info</label>
                    <input class="form-control" type="text" name="guidinfo" required>
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Create</button>

                </form>

            </div>

    </div>
    {{-- card --}}
    <a href="{{ action('ActivitiesController@index') }}">Back to List</a>

    </div>
    {{-- wrapper --}}

    </div>
    {{-- left --}}
    
</div>
{{-- col --}}
</div>
{{-- row --}}

 @include('includes.adminFooter')