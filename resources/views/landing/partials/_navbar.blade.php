<!-- resources/views/landing/partials/_navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Logo di sisi kiri -->
    <a class="navbar-brand fw-bold" href="{{ route('landing') }}">
      SportEase
    </a>

    <!-- Tombol toggle (responsive) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu di sisi kanan -->
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('landing') ? 'active' : '' }}" 
             href="{{ route('landing') }}">
            Home
          </a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('events.index') ? 'active' : '' }}" 
             href="#upcoming-events">
            Events
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('events.create') ? 'active' : '' }}" 
             href="#Sports">
            Sports
          </a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" 
             href="{{ route('about') }}">
            About
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" 
             href="{{ route('contact') }}">
            Contact
          </a>
        </li>

        <li class="nav-item">
          <a class="btn btn-primary text-light px-3 ms-2 {{ request()->routeIs('login') ? 'active' : '' }}" 
             href="{{ route('login') }}">
            Login
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

   