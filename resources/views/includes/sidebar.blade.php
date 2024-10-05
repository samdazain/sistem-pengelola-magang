<ul class="list-unstyled accordion-menu">
    <li class="sidebar-title">
      Main
    </li>
    <li class="{{ request()->is('dashboard') ? 'active-page' : '' }}">
      <a href="{{ route('dashboard.index') }}"><i data-feather="home"></i>Dashboard</a>
    </li>
    <li class="sidebar-title">
      Apps
    </li>

    <li class="{{ request()->is('job-position') ? 'active-page' : '' }}">
      <a href="{{ route('job-position.index') }}"><i data-feather="calendar"></i>Daftar Posisi</a>
    </li>
    <li class="{{ request()->is('evaluation') ? 'active-page' : '' }}">
      <a href="{{ route('evaluation.index') }}"><i data-feather="user"></i>Daftar Penilaian</a>
    </li>
    <li class="{{ request()->is('admin') ? 'active-page' : '' }}">
      <a href="{{ route('admin.index') }}"><i data-feather="message-circle"></i>Daftar Admin</a>
    </li>
</ul>
