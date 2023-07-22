@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
  <div class="card-header">
    Purchase Completed
  </div>
  <div class="card-body">
    <div class="alert alert-success" role="alert">
      Congratulations, purchase completed. Order number is <b>#{{ $viewData["order"]->getId() }}</b>
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
