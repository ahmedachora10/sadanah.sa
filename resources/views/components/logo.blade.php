@props(['width' => '75', 'height' => 'auto'])
<img src="{{ session('theme') === 'dark' ? asset(setting('white_logo')) : asset(setting('logo')) }}" alt="logo"
    width="{{ $width }}" height="{{ $height }}">
