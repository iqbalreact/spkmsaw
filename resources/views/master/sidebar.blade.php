
@php
          
$user = Auth::user()->username;
$role = Auth::user()->getRoleNames()->first();
@endphp


<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="/admin/dashboard" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-header">Menu</li>

      {{-- @if ($role == 'admin') --}}
      
      @if ($role == 'admin')
      <li class="nav-item">
        <a href="/admin/pengguna" class="nav-link">
          <i class="nav-icon far fa-user"></i>
          <p>
            Data Pengguna
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/admin/kriteria" class="nav-link">
          <i class="nav-icon fa fa-tag"></i>
          <p>
            Data Kriteria
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/admin/sub-kriteria" class="nav-link">
          <i class="nav-icon fas fa-tags"></i>
          <p>
            Data Sub Kriteria
          </p>
        </a>
      </li>       
      @endif

      
      <li class="nav-item">
        <a href="/admin/alternatif" class="nav-link">
          <i class="nav-icon fas fa-mobile"></i>
          <p>
            Data Alternatif
          </p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="/admin/nilai-alternatif" class="nav-link">
          <i class="nav-icon fas fa-tasks"></i>
          <p>
            Nilai Alternatif
          </p>
        </a>
      </li>

      
    </ul>
  </nav>