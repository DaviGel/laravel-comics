<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('layouts._partials.header')
    <main>
        <div class="jumbotron">
            <img class="img-fluid" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron-img">
            <div class="container">
                <span class="current-series">
                    Current series
                </span>
            </div>
        </div>
        <div class="bg-black-like text-center">
            <div class="container pt-5 ">
                <ul class="d-flex flex-wrap">
                    @foreach ($fumetti_db as $fumetto)
                        <li>
                            <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['type'] }}">
                            <p class="series text-white">{{ $fumetto['series'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <span class="load-more">
                Load more
            </span>
        </div>
        <div class="banner">
            <div class="container">
                <ul class="d-flex justify-content-around align-items-center">
                    @foreach ($banner_db as $element)
                        <li>
                            <img src="{{ Vite::asset($element['path']) }}" alt="{{ $element['alt'] }}">
                            <span class="text-uppercase text-white">{{ $element['caption'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
    @include('layouts._partials.footer')
</body>

</html>
