<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- Brand -->
  <div class="app-brand demo">
    <a href="{{ Auth::check() && Auth::user()->hasAdminPrivileges() ? route('admin.dashboard') : route('dashboard') }}" class="app-brand-link">
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
    @if(Auth::check() && Auth::user()->hasAdminPrivileges())
      <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div>Dashboard</div>
        </a>
      </li>
    @else
      <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div>Dashboard</div>
        </a>
      </li>
    @endif

    <!-- Admin Section (for Admin and Super Admin) -->
    @if(Auth::check() && Auth::user()->hasAdminPrivileges())
      <!-- Reports & Analytics -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Reports & Analytics</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-bar-chart"></i>
          <div>Analytics</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.reports.statistics') }}" class="menu-link">
              <div>Processing Statistics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.reports.accuracy') }}" class="menu-link">
              <div>Recognition Accuracy</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.reports.activity') }}" class="menu-link">
              <div>Activity Reports</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Records Management -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Records Management</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-folder"></i>
          <div>All Records</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.records.index') }}" class="menu-link">
              <div>View All</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.records.search') }}" class="menu-link">
              <div>Search Records</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.records.advanced') }}" class="menu-link">
              <div>Advanced Filters</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- User Management -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">User Management</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div>Users</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.users.index') }}" class="menu-link">
              <div>Manage Users</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.users.permissions') }}" class="menu-link">
              <div>Assign Permissions</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.users.activity') }}" class="menu-link">
              <div>User Activity</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Audit Log -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Audit Log</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-history"></i>
          <div>Logs</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.audit.index') }}" class="menu-link">
              <div>Activity History</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.audit.processing') }}" class="menu-link">
              <div>Processing Log</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.audit.user-actions') }}" class="menu-link">
              <div>User Actions</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Digitalized Documents -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Digitalized Documents</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-archive"></i>
          <div>Scanned Documents</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Birth Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Marriage Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Death Certificate</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Tools & Resources -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Tools & Resources</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-download"></i>
          <div>Export & Download</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Export as PDF</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Export as Excel</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Bulk Download</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-file-blank"></i>
          <div>Document Templates</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Birth Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Marriage Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Death Certificate</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Archive -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Archive</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-archive-in"></i>
          <div>Archive</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Archived Documents</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Deleted Documents</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Recovery</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Notifications & Settings -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Notifications & Settings</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-bell"></i>
          <div>Notifications</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Processing Alerts</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>System Notifications</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Pending Approvals</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div>System Settings</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Preferences</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Notification Settings</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Upload Settings</div>
            </a>
          </li>
        </ul>
      </li>
    @else
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

      <!-- Digitalized Documents -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Digitalized Documents</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-archive"></i>
          <div>Scanned Documents</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Birth Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Marriage Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Death Certificate</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Tools & Resources -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Tools & Resources</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-download"></i>
          <div>Export & Download</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Export as PDF</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Export as Excel</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Bulk Download</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-file-blank"></i>
          <div>Document Templates</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Birth Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Marriage Certificate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Death Certificate</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-archive-in"></i>
          <div>Archive</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Archived Documents</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Deleted Documents</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Recovery</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Notifications & Settings -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Notifications & Settings</span>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-bell"></i>
          <div>Notifications</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Processing Alerts</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>System Notifications</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Pending Approvals</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div>System Settings</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Preferences</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Notification Settings</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Upload Settings</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Help & Support -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-help-circle"></i>
          <div>Help & Support</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>FAQs</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Documentation</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
              <div>Contact Support</div>
            </a>
          </li>
        </ul>
      </li>
    @endif

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