<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-amber-100 navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-[80%]">
        <li class="nav-item">
            <a id="navbarDropdown" class="nav-link text-[20px] uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
        </li>
        <li class="nav-item content-center pl-4">
             
            <a class="dropdown-item content-center" href="{{ route('logout') }}"
            
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                Salir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->