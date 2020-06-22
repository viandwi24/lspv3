<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('settings.judul') }}</title>
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app"></div>
    @php
        $config = [
            'lembaga' => config('settings.lembaga'),
            'judul' => config('settings.judul'),
            'baseurl' => url(''),
            'version' => (new \PragmaRX\Version\Package\Version)->format('compact'),
        ];
    @endphp
    <script>const config = @JSON($config);</script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>