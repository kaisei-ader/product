<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Product List</title>
        <script ser="{{ asset('js/app.js')}}"></script>
        <script src="/js/app.js"></script>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.scss/">
    </head>
    <body>
    <div class="wrap">
        <div class="product_title">
            <h1>商品一覧</h1>
        </div>
        <table>
            <tr>
                <th>商品名</th>
                <th>入荷元</th>
                <th>製造元</th>
                <th>金額</th>
                <th>削除</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->arrival_source }}</td>
                <td>{{ $product->manufacturer }}</td>
                <td>{{ $product->price }}</td>
                <form method="post" action="/list/{{$product->id}}">
                    {{ csrf_field() }}
                    <td> 
                       <input type="submit" value="削除" class="btn btn-danger btn-sm"
                        onclick='return confirm("本当に削除しますか？");'>
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
            {{ $products->links('vendor.pagination.bootstrap-4')}}
    </div>
    </body>
</html>