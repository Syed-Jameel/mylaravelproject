@extends('index')
@section('content')

<div class="container-fluid row text-center d-flex justify-content-center align-items-center">
  @foreach($products as $item)
  <div class="col-lg-3 col-md-3 card p-2 m-4"  style="box-shadow: -2px 2px 2px 2px rgb(192, 186, 186);">
    <img src={{$item['gallery']}} class="card-img-top" alt="img" height="300" >
    <div class="card-body p-2" style="height:200px">
      <h6 >{{$item['name']}}</h6>
      <h3 class="btn btn-warning">{{$item['price']}}</h3>
      <p>{{$item['description']}}</p>
    </div>
    <div class="card-footer p-2" style="height:50px">
       <button class="btn btn-primary">Add to cart</button>
    </div>
  </div>
  @endforeach
</div>
@endsection