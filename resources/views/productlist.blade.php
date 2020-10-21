<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Product List</title>
    </head>
    <body>
        <h1>product list　です</h1>

        <h1>{{ $msg }}</h1>
 
    
        <table>
        <tr>
          <th>商品名</th>
          <th>入荷元</th>
          <th>製造元</th>
          <th>金額</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->arrival_source }}</td>
            <td>{{ $product->manufacturer }}</td>
            <td>{{ $product->price }}</td>
        </tr>
        @endforeach
      </table>
    </body>
</html>