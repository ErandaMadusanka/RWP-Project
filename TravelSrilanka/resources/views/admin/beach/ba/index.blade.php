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

    <div class="container">
    <h1> Beach Activity </h1>
    <a href="http://127.0.0.1:8000/admin/beach/ba/create">Create New</a>
    <a href="http://127.0.0.1:8000/admin/beach" class="button text-info float-right">Beaches</a>

    <table class="table">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Discription</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Images</th>
                  <th>Beach</th>
                  <th></th>
                </tr>
            </thead>
          </tbody>
            @foreach($BActivity as $BActivity)
            <tr>
            <td> {{$BActivity->id }}</td>
            <td> {{$BActivity->description }} </td>
            <td> {{$BActivity->date }} </td>
            <td> {{$BActivity->time }} </td>
            <td> {{$BActivity->image }} </td>
            <td> {{$BActivity->name }} </td>
            <td class="float-right">
                <a href ="{{ action('BeachActivityController@editView',$BActivity->id ) }}" >Edit</a> |
                <a href ="{{ action('BeachActivityController@detailsView',$BActivity->id ) }}">Details</a> |
                <a href ="{{ action('BeachActivityController@deleteView',$BActivity->id ) }}">Delete</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      {{-- container --}}
      
      
@include('includes.adminFooter')
      

