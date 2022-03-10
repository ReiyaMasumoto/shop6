@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h2>商品一覧</h2>
        <table>
            <tr>
                <th>id</th>
                <th>商品画像</th>
                <th>商品名</th>
                <th>価格</th>
                <th>在庫数</th>
                <th>メーカー名</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->picture }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->manufacturer }}</td>
            </tr>
            <tr>
                <td>詳細表示</td>
                <td>削除</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
