@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="d-flex flex-column ">
  <!-- Image Thumbnail -->
  <div class="row">
    <div class="col-md-12 p-0 ">
      <div style="position: relative;">
        <img src="/img/kopi5.png" class="img-fluid" alt="Background Image">
        <a href="{{ route('product.index') }}" class="btn btn-light" style="position: absolute; top: 70%; left: 15%; transform: translate(-50%, -50%);">
          <storng>SHOP NOW</storng>
        </a>
      </div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-4 mb-5">
      <img src="{{ asset('/img/indo.jpg') }}" class="img-fluid rounded" style="margin-top: 80px;">
    </div>
    <div class="col-lg-8 p-4">
      <h2 class="col-lg-12 p-0 me-auto text-center">Our Story</h2>
      <p class="lead" style="font-family: 'Agdasima', sans-serif;">Nusantara Brews refers to the online platform or website dedicated to selling and promoting Nusantara coffee products. Nusantara coffee, also known as Indonesian coffee, encompasses a wide variety of coffee beans grown across the Indonesian archipelago, including famous regions like Sumatra, Java, Bali, Sulawesi, and more. as a virtual marketplace where coffee enthusiasts and consumers can browse through a diverse selection of Nusantara coffee products, such as whole beans, ground coffee, single-origin varieties, blends, and specialty coffee offerings. The platform showcases the unique flavors, aromas, and characteristics of Indonesian coffee, highlighting its cultural significance and rich heritage.</p>
      <a href="{{ route('home.about') }}" class="btn btn-dark" style="background-color: black;">Read More</a>
    </div>
  </div>
</div>

  <style>
  .inner-frame {
    border: 1px solid #ccc;
    padding: 10px;
    background-color: #fff;
  }

  .image-container {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .image-container img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .title-line {
    border-top: 2px solid #ccc;
    padding-top: 20px;
  }
</style>

<div class="container">
  <div class="outer-frame">
    <h2 class="text-center mb-4 title-line">SPECIAL PRODUCTS JUST FOR YOU</h2>
    <div class="row m-0 p-0 py-4 mt-4">
  @foreach ($viewData["latest_products"] as $product)
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
  </div>
</div>

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
</div>
</div>
@endsection