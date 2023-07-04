<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-Proj</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/tasks"><img src="{{ Vite::asset('resources/img/logo.svg') }}" alt=""> To Do List</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="tasks/create">Add</a>
                        </li>
                      </ul>
                  </div>
                </div>
              </nav>
    </header>

    <div class="container">     
        <main>
            @yield('contents')
        </main>
    </div>
</body>

</html>
