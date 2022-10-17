@extends('index')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.png" class="d-block w-100" alt="img1">
    </div>
    <div class="carousel-item">
      <img src="img2.png" class="d-block w-100" alt="img2">
    </div>
    <div class="carousel-item">
      <img src="img3.png" class="d-block w-100" alt="img3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="conatainer-fluid text-center d-flex justify-content-between align-items-center">
  @foreach($products as $item)
  <div class="card p-2 m-2" style="width:250px;">
    <img src={{$item['gallery']}} class="card-img-top" alt="img" height="160" >
    <div class="card-body p-2" style="height:10px">
      <h3 class="btn btn-warning">{{$item['price']}}</h3>
    </div>
  </div>
  @endforeach
</div>
@endsection