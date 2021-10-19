@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp

<div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Toko Madia
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item {{checkRouteActive('beranda')}}">
            <a class="nav-link" href="{{url('beranda')}}">
              <i class="fa fa-tachometer"></i>
              <p>Beranda</p>
            </a>
          </li>

          <li class="nav-item {{checkRouteActive('produk')}}">
            <a class="nav-link" href="{{url('produk')}}">
              <i class="fa fa-archive" aria-hidden="true"></i>
              <p>Produk</p>
            </a>
          </li>

          <li class="nav-item {{checkRouteActive('kategori')}}">
            <a class="nav-link" href="{{url('kategori')}}">
              <i class="fa fa-star" aria-hidden="true"></i>
              <p>Kategori</p>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-user"></i>
                <span>Profil</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link {{checkRouteActive('profil')}}" href="{{url('profil')}}">Edit Profil</a></li>
                <li><a class="nav-link" href="{{url('login')}}">Login</a></li>
                <li><a class="nav-link" href="{{url('register')}}">Sign Up</a></li>

            </ul>
        </li>
            <!-- your sidebar here -->
        </ul>
      </div>