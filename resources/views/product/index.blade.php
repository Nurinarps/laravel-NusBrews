@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row m-4">
  @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-4 product-item">
      <div class="card border-1 shadow">
        <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card" style="object-fit: cover; max-height: 200px;">
        <div class="card-body text-center">
          <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn btn-product bg-primary text-white">{{ $product->getName() }}</a>
        </div>
      </div>
    </div>
  @endforeach
</div>

<style>
.product-item {
  border: 1px solid #ccc;
  padding: 10px;
}
</style>
<div class="row bg-primary m-0 p-0 py-4 mt-4">
    <div class="d-flex flex-col justify-content-center">
      <div class="col-md-2">
        <div class="card bg-transparent border-0 text-white text-center">
          <div class="card-body">
            <p class="card-text">NusBrews Support @NusantaraBrews</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
