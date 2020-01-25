@extends('layouts.app')

@section('content')
<br>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
    <a href="/" class="list-group-item list-group-item-action bg-light">Dashboard</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">About Us</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Contact Us</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Services</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->


<div class="jumbotron">
<div class="row container mx-auto">
<img src="{{asset('img_4.jpg')}}" class="img-fluid mb-4" alt="" style="width:94%; margin-left:3%;">
<div class="col-12">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#00A9A5;color:white;">
                    <h3 class="text-center p-3">150</h3>
                    <h5 class="pl-2">Total Owners</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#6969B3;color:white;">
                    <h3 class="text-center p-3">15</h3>
                    <h5 class="pl-2">States Covered</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#62466B;color:white;">
                    <h3 class="text-center p-3">10,000</h3>
                    <h5 class="pl-2">Records</h5>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

@endsection