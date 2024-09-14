<ul class="list-unstyled accordion-menu">
    <li class="sidebar-title">
      Main
    </li>
    <li class="{{ request()->is('/') ? 'active-page' : '' }}">
      <a href="{{route('dashboard.index')}}"><i data-feather="home"></i>Dashboard</a>
    </li>
    <li class="sidebar-title">
      Apps
    </li>
    <li class="{{ request()->is('pelamar') ? 'active-page' : '' }}">
      <a href="{{route('pelamar.index')}}"><i data-feather="inbox"></i>Daftar Pelamar</a>
    </li>
    <li class="{{ request()->is('posisi') ? 'active-page' : '' }}">
      <a href="{{route('posisi.index')}}"><i data-feather="calendar"></i>Daftar Posisi</a>
    </li>
    <li class="{{ request()->is('penilaian') ? 'active-page' : '' }}">
      <a href="{{route('penilaian.index')}}"><i data-feather="user"></i>Daftar Penilaian</a>
    </li>
    <li class="{{ request()->is('admin') ? 'active-page' : '' }}">
      <a href="{{route('admin.index')}}"><i data-feather="message-circle"></i>Daftar Admin</a>
    </li>


  </ul>
