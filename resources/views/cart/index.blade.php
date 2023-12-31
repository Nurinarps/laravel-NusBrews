@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card m-4 shadow border-none">
  <div class="card-header text-center bg-white text-dark">
    <strong>Products in Cart</strong>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped text-center">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["products"] as $product)
        <tr>
          <td>{{ $product->getId() }}</td>
          <td><img src="{{ asset('/storage/'.$product->getImage()) }}" alt="Product Image" style="max-height: 100px;"></td>
          <td>{{ $product->getName() }}</td>
          <td>Rp {{ number_format($product->getPrice(), 0, ",", ".") }}</td>
          <td>{{ session('products')[$product->getId()] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="text-end">
        <a class="btn btn-outline-secondary mb-2"><b>Total :</b> Rp {{ number_format($viewData["total"], 0, ",", ".") }}</a>
        @if (count($viewData["products"]) > 0)
        <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Purchase</a>
        <a href="{{ route('cart.delete') }}">
          <button class="btn btn-danger mb-2">
            Remove all products cart
          </button>
        </a>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
