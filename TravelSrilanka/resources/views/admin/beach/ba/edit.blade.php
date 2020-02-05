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
                    Session::forget('message');
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
    Update Beache Activity
    </div>

    <div class="card-body">
      @foreach($BActivity as $BActivity)
      <form  method="post" action="{{ route("admin.beachActivity.edit",$BActivity->id)  }}">
            @csrf
           
            <div class="form-group">
                    <label for="">Beach <span class="required text-danger">*</span></label>
                    <select  name="select" class="custom-select dynamic" required>
                        <option value="" >--SELECT--</option>
                        @foreach($beaches as $beaches)
                        <option value={{$beaches->id}}>{{$beaches->name}} </option>
                        @endforeach
                    </select>
                </div>
        <div class="form-group">
            <label>Description</label>
            <textarea style="resize: none;"  class="form-control" type="text" name="body" rows="10" required >{{$BActivity->description}}</textarea>
        </div>
        
        <div class="form-group">
            <table style="width:100%">
                <tr>
                    <td style="width:50%"> Date:</td>
                    <td>
                        <input id="datepicker" width="276" name="date" value="{{$BActivity->date}}" required/>
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
                            <input id="timepicker" width="276" name="time" value="{{$BActivity->time}}" required />
                            <script>
                                $('#timepicker').timepicker();
                            </script>
                        </td>    
                    </tr>
            </table>
   

        <div>
            <table>
                
            </table>
        </div>

        <button type="submit" class="btn btn-primary float-right">Update</button>

        </form>
        @endforeach

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
        
        