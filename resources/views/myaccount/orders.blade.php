@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="card mb-4">
  <div class="card-header">
    Order #{{ $order->getId() }}
  </div>
  <div class="card-body">
    <b>Date:</b> {{ $order->getCreatedAt() }}<br />
    <b>Total:</b> ${{ $order->getTotal() }}<br />
    <table class="table table-bordered table-striped text-center mt-3">
      <thead>
        <tr>
          <th scope="col">Item ID</th>
          <th scope="col">Image</th>
          <th scope="col">Product Name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($order->getItems() as $item)
        <tr>
          <td>{{ $item->getId() }}</td>
          <td><img src="{{ asset('/storage/'.$item->getProduct()->getImage()) }}" alt="Product Image" style="max-height: 100px;"></td>
          <td>
            <a class="link-success" href="{{ route('product.show', ['id'=> $item->getProduct()->getId()]) }}">
              {{ $item->getProduct()->getName() }}
            </a>
          </td>
          <td>${{ $item->getPrice() }}</td>
          <td>{{ $item->getQuantity() }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@empty
<div class="alert alert-danger" role="alert">
  Seems to be that you have not purchased anything in our store =(.
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
@endforelse
@endsection
