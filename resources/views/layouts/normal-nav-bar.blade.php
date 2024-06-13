
<nav id="navbar" class="navbar  order-last order-lg-0">
    <ul >
      <li><a class="nav-link scrollto active" href="/#hero">Início</a></li>
      @if (!Auth::check())
        <li><a class="nav-link scrollto" href="{{route('admin.login')}}">Entrar</a></li>
      @else
      <li><a class="nav-link scrollto" href="{{route('home.logout')}}">logout</a></li>
      @endif
      <li><a class="nav-link scrollto" href="{{route('user.appointment')}}">Minhas Marcações</a></li>
      {{-- <li><a class="nav-link scrollto" href="{{route('admin.dashboard')}}">Dashboard</a></li> --}}

      {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="#">Drop Down 1</a></li>
          <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">Deep Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 2</a></li>
              <li><a href="#">Deep Drop Down 3</a></li>
              <li><a href="#">Deep Drop Down 4</a></li>
              <li><a href="#">Deep Drop Down 5</a></li>
            </ul>
          </li> --}}
          {{-- <li><a href="#">Drop Down 2</a></li>
          <li><a href="#">Drop Down 3</a></li>
          <li><a href="#">Drop Down 4</a></li>
        </ul> --}}
      {{-- </li> --}}
      <li><a class="nav-link scrollto" href="#contact">Contacte-nos</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
