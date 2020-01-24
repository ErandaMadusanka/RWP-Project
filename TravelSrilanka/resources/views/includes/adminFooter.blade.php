 <!-- Bootstrap core JavaScript -->
  <script src="{{url('https://code.jquery.com/jquery-3.4.1.slim.min.js')}}"></script>
  <script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" ></script>
  <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" ></script>
  {{-- <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}

 <!-- Menu Toggle Script -->
 <script>
   $("#menu-toggle").click(function(e) {
     e.preventDefault();
     $("#wrapper").toggleClass("toggled");
   });
 </script>



