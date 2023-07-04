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
                  <a class="navbar-brand" href="#"><img src="{{ Vite::asset('resources/img/logo.svg') }}" alt=""> To Do List</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Add</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
    </header>

    <div class="container">
        <section>
            <table class="table my-5">
                <thead>
                  <tr>
                    <th scope="col">Urgente</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Data di creazione</th>
                    <th scope="col">Data di Scadenza</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">&#10060;</th>
                    <td>Andare a scuola</td>
                    <td>2023-07-01</td>
                    <td>2023-07-01</td>
                  </tr>
                  <tr>
                    <th scope="row">&#9989;</th>
                    <td>Fare la spesa per il pranzo con i parenti</td>
                    <td>2023-06-25</td>
                    <td>2023-07-03</td>
                  </tr>
                  <tr>
                    <th scope="row">&#9989;</th>
                    <td>Partita di tennis con colleghi</td>
                    <td>2023-06-30</td>
                    <td>2023-06-30</td>
                  </tr>
                  <tr>
                    <th scope="row">&#9989;</th>
                    <td>Cena da Marco</td>
                    <td>2023-07-05</td>
                    <td>2023-07-11</td>
                  </tr>
                </tbody>
            </table>
        </section>
        
        <main>
            @yield('contents')
        </main>
        
    </div>
</body>

</html>
