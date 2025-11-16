<!-- resources/views/products/index.blade.php -->
@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>商品一覧</h2>

        <form action="/products/register" method="GET" style="display: inline;">
            @csrf
            <button type="submit" class="add-product-btn">+ 商品を追加</button>
        </form>

        <table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>image</th>
    <th>description</th>
  </tr>
  @foreach ($products as $product)
  <tr>
    <td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->image}}</td>
    <td>{{$product->description}}</td>
  </tr>
  @endforeach
</table>
@endsection
      

       