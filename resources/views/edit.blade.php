<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>編集ページ</title>
    <link rel="stylesheet" href="{{ asset('css/app.scss') }}">
</head>
    <body>
        <form action="{{ route('list.update', ['id' => $items->id ]) }}" method="post">
            @csrf
            @method('PUT')
            <label for="name">商品名</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $items->product_name }}" />
            @if ($errors->has('name'))
            <p class="error-message">{{ $errors->first('name') }}</p>
            @endif
            <label for="arrival">入荷元</label>
            <input type="text" class="form-control" name="arr" id="arrival"  value="{{ $items->arrival_source }}"/>
            @if ($errors->has('arr'))
            <p class="error-message">{{ $errors->first('arr') }}</p>
            @endif
            <label for="manufacturer">製造元</label>
            <input type="text" class="form-control" name="manufacturer" id="manufacturer"value="{{ $items->manufacturer}}" />
            @if ($errors->has('manufacturer'))
            <p class="error-message">{{ $errors->first('manufacturer') }}</p>
            @endif
            <label for="price">値段</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ $items->price }}"/>
            @if ($errors->has('price'))
            <p class="error-message">{{ $errors->first('price') }}</p>
            @endif
            <button type="submit" class="submit-button">更新</button>
        </form>
    </body>
</html>