<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard'); ?>">
		<div class="sidebar-brand-icon rotate-n-13">
			<i class="fas fa-utensils"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Tomcim Noodle</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('product'); ?>">
			<i class="fas fa-archive"></i>
			<span>Menu</span></a>
	</li>

	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('order'); ?>">
			<i class="fas fa-cart-plus"></i>
			<span>Order</span></a>
	</li>
	

	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('history'); ?>">
			<i class="fas fa-history"></i>
			<span>History</span></a>
	</li>

	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('store'); ?>">
			<i class="fas fa-building"></i>
			<span>About</span></a>
	</li>


	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>