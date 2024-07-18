<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management App</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <x-sidebar/>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>