@extends('layouts.default')
@section('content')
<h2>商品登録</h2>

<form action="products/register" method="POST">
@csrf
<h5>商品名</h5>
<input type="text" name="name">
<h5>価格</h5>
<input type="text" name="price">
<h5>商品説明</h5>
<textarea name="description" rows="4" cols="40"></textarea>
<br><br>
<input type="submit" value="登録">
<input type="submit" value="戻る" formaction="/products">
</form>
@endsection

         