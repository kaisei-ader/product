<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
    </head>
    <body>
    <form method="POST" action="{{ route('contact.confirm') }}">
        @csrf

        <label>お名前</label>
        <input
            name="name"
            value="{{ old('name') }}"
            type="text">
        @if ($errors->has('name'))
            <p class="error-message">{{ $errors->first('name') }}</p>
        @endif

        <label>メールアドレス</label>
        <input
            name="email"
            value="{{ old('email') }}"
            type="text">
        @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
 
        <label>電話番号</label>
        <input
             name="tell"
             value="{{ old('tell') }}"
             type="tel">
        @if ($errors->has('tell'))
            <p class="error-message">{{ $errors->first('tell') }}</p>
        @endif
 
 
        <label>お問い合わせ内容</label>
        <textarea name="message">{{ old('message') }}</textarea>
        @if ($errors->has('message'))
        <p class="error-message">{{ $errors->first('message') }}</p>
        @endif
 
        <button type="submit">
            送信
        </button>
    </form>
    </body>
</html>