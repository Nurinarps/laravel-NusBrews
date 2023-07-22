@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 p-0 mt-4 me-auto text-center">
      <p class="lead text-uppercase"><strong><span style="font-size: 24px;">{{ $viewData["author"] }}</span></strong></p>
    </div>
  </div>
</div>

<div class="col-md-12 p-0 mt-4">
      <img src="{{ asset('/img/bar1.jpg') }}" class="img-fluid rounded mt-2">
    </div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 p-0 mt-4 me-auto text-center">
      <p class="lead my-0" style="font-family: 'Agdasima', sans-serif;"><strong>{{ $viewData["description"] }}</strong></p>
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
      </div>s
    </div>
  </div>
@endsection
