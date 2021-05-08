<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}"
    dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __("test") }}</title>
</head>
<body>
    <div class="content">
        <div class="title m-b-md">
            <h1>{{ __('hellow') }}</h1>
        </div>
        <div>
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>


