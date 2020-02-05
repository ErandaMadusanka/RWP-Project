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

    <div class="leftside d-flex justify-content-center align-items-center "> 

    <div class="wrapper">
        
    <div class="card">

        <div class="card-header text-center">
            Update Events
        </div>

            <div class ="card-body">
                
                @foreach($events as $event)
               
            <form method="post" action="{{ route("admin.event.edit",$event->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="">City <span class="required text-danger">*</span></label>
                        <select  name="select" class="custom-select dynamic" required>
                            <option value="" > --SELECT--</option>
                            @foreach($cities as $city)
                                <option value={{$city->id }}> {{$city->city_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" value="{{$event->name}}" required>  
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea style="resize: none;" name="body" class="form-control" type="text" name="textarea" rows="2" required>{{$event->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <table style="width:100%">
                            <tr>
                                <td style="width:50%"> Date:</td>
                                <td>
                                    <input id="datepicker" width="276" name="date"  value="{{$event->date}}" required/>
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
                                        <input id="timepicker" width="276" name="time" value="{{$event->time}}" required />
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
                    <label>Venue</label>
                    <input class="form-control" name="venue" type="text" value="{{$event->venue}}" required>
                    </div>

                    <div class="form-group">
                    <label>Organized By</label>
                    <input class="form-control" type="text" name="organizedby" value="{{$event->organized_by}}" required >
                    </div>

                    <div class="form-group">
                    <label> Website</label>
                    <input class="form-control" type="text" name="website" value="{{$event->website}}" required >
                    </div>

                    <div class="form-group">
                    <label>Contact info</label>
                    <input class="form-control" value="{{$event->contact_info}}" type='tel' pattern='\d{4}[\-]\d{6}' name="contactinfo" title='Phone Number (Format: 0112-123123 )' required >
                    {{-- <input class="form-control" type="tel" pattern="(07)[0-9]{10}" name="contactinfo" value={{$event->contact_info}} required > --}}
                    </div>

                    <button type="submit" class="btn btn-primary float-right">update</button>

                </form>
                @endforeach

            </div>

    </div>
    {{-- card --}}
    <a href="{{ action('EventsController@index') }}">Back to List</a>

    </div>
    {{-- wrapper --}}

    </div>
    {{-- left --}}
    
</div>
{{-- col --}}
</div>
{{-- row --}}

 @include('includes.adminFooter')