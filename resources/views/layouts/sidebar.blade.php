<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- Brand -->
  <div class="app-brand demo">
    <a href="{{ route('dashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="{{ asset('images/Official_Seal_of_Southern_Leyte.svg.webp') }}"
             alt="Official Seal of Southern Leyte"
             style="width:30px;height:30px;object-fit:contain;">
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2" style="font-size:1.30rem;">CRMS</span>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
      <a href="{{ route('dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>

    <!-- Handwriting OCR -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Handwriting OCR</span>
    </li>

    <li class="menu-item {{ request()->routeIs('recognitions.create') ? 'active' : '' }}">
      <a href="{{ route('recognitions.create') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-upload"></i>
        <div>New Recognition</div>
      </a>
    </li>

    <li class="menu-item {{ request()->routeIs('recognitions.index', 'recognitions.show', 'recognitions.verify') ? 'active' : '' }}">
      <a href="{{ route('recognitions.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-images"></i>
        <div>Recognition History</div>
      </a>
    </li>

    <li class="menu-item {{ request()->routeIs('inference') ? 'active' : '' }}">
      <a href="{{ route('inference') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-brain"></i>
        <div>Inference</div>
      </a>
    </li>

    <!-- ACCOUNT -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">ACCOUNT</span>
    </li>

    <li class="menu-item {{ request()->routeIs('profile.*') ? 'active' : '' }}">
      <a href="{{ route('profile.edit') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div>Profile Settings</div>
      </a>
    </li>

  </ul>
</aside>