<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <label>お名前</label>
    {{ $inputs['name'] }}
    <input
        name="name"
        value="{{ $inputs['name'] }}"
        type="hidden">

    <label>メールアドレス</label>
    {{ $inputs['email'] }}
    <input
        name="email"
        value="{{ $inputs['email'] }}"
        type="hidden">

    <label>電話番号</label>
    {{ $inputs['tell'] }}
    <input
        name="tell"
        value="{{ $inputs['tell'] }}"
        type="hidden">

    <label>お問い合わせ内容</label>
    {!! nl2br(e($inputs['message'])) !!}
    <input
        name="message"
        value="{{ $inputs['message'] }}"
        type="hidden">

    <button type="submit" name="action" value="back">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit">
        送信する
    </button>
</form>