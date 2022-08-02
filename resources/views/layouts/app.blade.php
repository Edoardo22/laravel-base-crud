<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <script src="{{ asset('./js/app.js') }}"></script>
</head>

<body>
    <div class="main-container">
        @include('partials.sidebar')

        <main class="p-3">
           
            <hr class="mt-2">

            <div class="main-scroll-container">
                @yield('page_content')
            </div>
        </main>
    </div>

</body>

</html>