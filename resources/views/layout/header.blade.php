<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand ml-5" href="{{ route('page.home') }}">Portfolio</a>
    <div class="navbar-nav mr-5">
        <a class="nav-item nav-link" href="{{ route('page.portfolio') }}">Project</a>
        <a class="nav-item nav-link" href="{{ route('page.about') }}">About</a>
        <a class="nav-item nav-link" href="{{ route('page.contact') }}">Contact</a>
    </div>
</nav>

<!-- Header -->
<header class="text-center bg-teal p-5">
    <img src="{{ url('storage/images/Avatar.png')}}">
    <h1> Munna Hasan </h1>
    <p>Junior Web Developer • Web Designer • Full-Stack Developer(Junior)</p>
</header>
