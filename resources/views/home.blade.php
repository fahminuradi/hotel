@extends('layouts.index')
@section('content')

<div class="col-md-12">
<h2><i class="fa fa-bank"></i> Selamat Datang di MYhotel</h2>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="col-lg-3 col-xs-10">    
          <div class="small-box bg-aqua">
              <div class="inner">
                <span>Fasilitas Dalam Kamar:</span>
                <p><i class="fa fa-chevron-right"></i> Free wifi 24 jam</p>
                <p><i class="fa fa-chevron-right"></i> Kamar mandi air panas</p>
                <p><i class="fa fa-chevron-right"></i> Soffa</p>
                <p><i class="fa fa-chevron-right"></i> Makanan ringan (Cemilan) </p>
                <p><i class="fa fa-chevron-right"></i> Televisi </p>
                <p><i class="fa fa-chevron-right"></i> AC </p>
              </div>
          </div>
      </div>
        <!-- ./col -->
        <div class="col-lg-5 col-xs-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="hotel 4.jpg" style="width: 500px; height= 500px; margin-right: 10px;">
    </div>

    <div class="item">
      <img src="hotel 6.jpg" style="width: 500px; height= 500px; margin-right: 10px;">
    </div>

    <div class="item">
      <img src="hotel 11.jpg" style="width: 500px; height= 500px; margin-right: 10px;">
    </div>

    <div class="item">
      <img src="hotel 1.jpg" style="width: 500px; height= 500px; margin-right: 10px;">
    </div>

    <div class="item">
      <img src="hotel 2.jpg" style="width: 500px; height= 500px; margin-right: 10px;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">sebelumnya</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">selanjutnya</span>
  </a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-10">    
          <div class="small-box bg-yellow">
              <div class="inner">
                <span>Fasilitas Luar Ruangan:</span>
                <p><i class="fa fa-chevron-right"></i> kolam renang</p>
                <p><i class="fa fa-chevron-right"></i> Fitnes Center</p>
                <p><i class="fa fa-chevron-right"></i> Lapang Futsal</p>
                <p><i class="fa fa-chevron-right"></i> Musik Studio </p>
                <p><i class="fa fa-chevron-right"></i> Lapangan Basket </p>
                <p><i class="fa fa-chevron-right"></i> Lapangan Golf </p>
              </div>
          </div>
      </div>
</div> 
</div>     

@endsection