<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">← 商品一覧に戻る</a>
        
        <div class="card">
            <div class="card-body">
                <h3>{{ $product->name }}</h3>
                <p class="h4 text-primary">¥{{ number_format($product->price) }}</p>
                @if($product->description)
                    <p class="mt-3">{{ $product->description }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection