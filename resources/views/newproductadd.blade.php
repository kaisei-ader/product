<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> New Product Add </title>
    </head>
    <body>
    <header>
    <nav class="my-navbar">
      <a class="my-navbar-brand" href="/add">product new add</a>
    </nav>
  </header>
  <main>
    <div class="container">
            <div class="panel-heading">新規商品を追加する</div>
              <form action="{{ route('product.add.confirm')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">商品名</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old ('name') }}" />
                  @if ($errors->has('name'))
                  <p class="error-message">{{ $errors->first('name') }}</p>
                  @endif
                  <label for="arrival">入荷元</label>
                  <input type="text" class="form-control" name="arr" id="arrival"  value="{{ old ('arr') }}"/>
                  @if ($errors->has('arr'))
                  <p class="error-message">{{ $errors->first('arr') }}</p>
                  @endif
                  <label for="manufacturer">製造元</label>
                  <input type="text" class="form-control" name="manufacturer" id="manufacturer"value="{{ old ('manufacturer') }}" />
                  @if ($errors->has('manufacturer'))
                  <p class="error-message">{{ $errors->first('manufacturer') }}</p>
                  @endif
                  <label for="price">値段</label>
                  <input type="text" class="form-control" name="price" id="price" value="{{ old ('price') }}"/>
                  @if ($errors->has('price'))
                  <p class="error-message">{{ $errors->first('price') }}</p>
                  @endif
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">送信</button>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </main>
    </body>
</html>