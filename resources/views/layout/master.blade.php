<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Akademik | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
              <li class="nav-item"><a href="{{route('home.index')}}"
                class="nav-link {{ ($title === "Home") ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{route('lecturer.index')}}"
                class="nav-link {{ ($title === "Dosen") ? 'active' : '' }}">Dosen</a></li>
                <li class="nav-item"><a href="{{route('student.index')}}"
                class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}">Mahasiswa</a></li>
                <li class="nav-item"><a href="{{route('matakuliah.index')}}"
                class="nav-link {{ ($title === "Mata Kuliah") ? 'active' : '' }}">Mata Kuliah</a></li>
            </ul>
        </div>
    </nav>

    @yield('container')
 
</body>
</html>