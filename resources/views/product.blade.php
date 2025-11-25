<!DOCTYPE html>
<html>

<head>
    <title>{{ __('product.title') }}</title>
</head>

<body>
    <h1>{{ __('product.title') }}</h1>
    <p>{{ __('product.description') }}</p>

    <p><strong>{{ __('product.price') }}</strong>: Rp 50.000</p>

    <hr>
    <p>Pilih Bahasa:</p>
    <a href="{{ route('product', ['lang' => 'id']) }}">🇮🇩 Bahasa Indonesia</a> |
    <a href="{{ route('product', ['lang' => 'en']) }}">🇬🇧 English</a>
</body>

</html>