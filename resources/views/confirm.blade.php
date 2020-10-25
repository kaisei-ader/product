<form method="POST" action="{{ route('product.add.new') }}">
    @csrf

    <label>商品名</label>
    {{ $inputs['name'] }}
    <input
        name="name"
        value="{{ $inputs['name'] }}"
        type="hidden">

    <label>入荷元</label>
    {{ $inputs['arr'] }}
    <input
        name="arr"
        value="{{ $inputs['arr'] }}"
        type="hidden">
    <label>製造元</label>
    {{ $inputs['manufacturer'] }}
    <input
        name="manufacturer"
        value="{{ $inputs['manufacturer'] }}"
        type="hidden">
    <label>タイトル</label>
    {{ $inputs['price'] }}
    <input
        name="price"
        value="{{ $inputs['price'] }}"
        type="hidden">
    <button type="submit" name="back" value="true">
        入力内容修正
    </button>
    <button type="submit" name="submit" value="true">
        送信する
    </button>
</form>