<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

    
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo($page=='dashboard'?'active':'') ?>">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Manage Services
      </div>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo($page=='service'?'active':'') ?>">
        <a class="nav-link" href="/admin/Service">
          <i class="fas fa-fw fa-list"></i>
          <span>Service</span></a>
      </li>
      <?php /*?><li class="nav-item <?php echo($page=='subservice'?'active':'') ?>">
        <a class="nav-link" href="/admin/subservice">
        <i class="fas fa-fw fa-cogs"></i>
          <span>Sub Service</span></a>
      </li><?php*/ ?>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Manage User And Orders
      </div>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo($page=='users'?'active':'') ?>">
        <a class="nav-link" href="/admin/users">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span></a>
      </li>
      <li class="nav-item <?php echo($page=='orders'?'active':'') ?>">
        <a class="nav-link" href="/admin/orders">
        <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Orders</span></a>
      </li>
      <li class="nav-item <?php echo($page=='feedback'?'active':'') ?>">
        <a class="nav-link" href="/admin/feedback">
          <i class="fas fa-fw fa-comment"></i>
          <span>FeedBack</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
