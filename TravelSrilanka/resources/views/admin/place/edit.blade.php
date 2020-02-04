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
            Update Place
        </div>

            <div class ="card-body">
                @foreach($places as $place)
                <form  method="post" action="{{ route("admin.place.edit",$place->id)  }}">
                    
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
                        <input class="form-control" name="name" type="text" value={{$place->name}} required>   
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea style="resize: none;" name="body" class="form-control" type="text" name="textarea" rows="10" required>{{$place->description}}</textarea>
                    </div>
                
                    <div class="form-group">
                    <label>Latitude</label>
                    <input class="form-control" name="latitude" type="text" value={{$place->latitude}} required>
                    </div>

                    <div class="form-group">
                    <label>Logitude</label>
                    <input class="form-control" name="longitude" type="text" value={{$place->longitude}} required>
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Update</button>

                </form>
                @endforeach
            </div>

    </div>
    {{-- card --}}
    <a href="{{ action('PlacesController@index') }}">Back to List</a>

    </div>
    {{-- wrapper --}}

    </div>
    {{-- left --}}
    
</div>
{{-- col --}}
</div>
{{-- row --}}

 @include('includes.adminFooter')