@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h2>商品新規登録</h2>
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="product_name">
                    商品名
                </label>
                <input 
                    id="product_name"
                    name="product_name"
                    class="form-control"
                    value="{{ old('product_name') }}"
                    type="text">
                @if ($errors->has('product_name'))
                    <div class="text-danger">
                        {{ $errors->first('product_name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="manufacturer">
                    メーカー名
                </label>
                <select name="manufacturer_name" id="manufacturer_name" >
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                    <option value="">D</option>
                    <option value="">E</option>
                </select>
                @if ($errors->has('product_name'))
                    <div class="text-danger">
                        {{ $errors->first('product_name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="price">
                    価格
                </label>
                <input type="text">
                @if ($errors->has('price'))
                    <div class="text-danger">
                        {{ $errors->first('price') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="stock">
                    在庫数
                </label>
                <input type="text">
                @if ($errors->has('stock'))
                    <div class="text-danger">
                        {{ $errors->first('stock') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="comment">
                    コメント
                </label>
                <textarea name="" id="" cols="30" rows="10">

                </textarea>
                @if ($errors->has('comment'))
                    <div class="text-danger">
                        {{ $errors->first('comment') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="picture">
                    商品画像
                </label>
                <input type="file" class="form-control-fole" name="picture" id="picture">
                @if ($errors->has('picture'))
                    <div class="text-danger">
                        {{ $errors->first('picture') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
                <a class="btn btn-secondary" href="{{ route('items') }}">
                    戻る
                </a>
            </div>
        </form>
        
    </div>
</div>
@endsection
