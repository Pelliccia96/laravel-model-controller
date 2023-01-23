<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel-model-controller</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">
    <div class="contaier">
        <div class="text-center my-5">
            <h1 class="text-white">Laravel Model Controller</h1>
        </div>
        <div class="row g-5">
            @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <img src="https://www.gaetanews24.it/news/wp-content/uploads/2018/10/video11.jpg" class="img-fluid" alt="">
                    <h3 class="text-info pt-3 text-center">Titolo: {{$movie->title}}</h3>
                    <h5 class="text-center text-danger fw-semibold">Movie-ID: {{$movie->id}}</h5>
                    <p class="text-center fw-semibold">Nationality: {{$movie->nationality}}</p>
                    <p class="text-center fw-semibold">Date: {{$movie->date}}</p>
                    <p class="text-center fw-semibold">Original_title: {{$movie->original_title}}</p>
                    <p class="text-center fw-semibold">Vote: {{$movie->vote}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
