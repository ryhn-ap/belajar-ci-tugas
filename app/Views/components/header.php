<header id="header" class="header fixed-top d-flex align-items-center">
    <!-- Start Logo -->
    <div class="d-flex align-items-center justify-content-between">
		<i class="bi bi-list toggle-sidebar-btn"></i>
		<a href="/" class="logo d-flex align-items-end">
			<img src="<?= base_url()?>img/logo_burjo.png" alt="">
			<span class="d-none d-lg-block">Burjo Nusantara</span>
		</a>
    </div>
    <!-- End Logo -->
    <!-- Start Search Bar -->
    <div class="search-bar">
		<form class="search-form d-flex align-items-center" method="POST" action="#">
			<input type="text" name="query" placeholder="Search" title="Enter search keyword">
			<button type="submit" title="Search">
				<i class="bi bi-search"></i>
			</button>
		</form>
    </div>
    <!-- End Search Bar -->
    <!-- Start Navbar -->
    <nav class="header-nav ms-auto">
      	<ul class="d-flex align-items-center">
            <!-- Start Search Icon -->
			<li class="nav-item d-block d-lg-none">
				<a class="nav-link nav-icon search-bar-toggle " href="#">
					<i class="bi bi-search"></i>
				</a>
			</li>
            <!-- End Search Icon-->
			<?php if (session()->get('role') == 'admin' || session()->get('role') == 'user') : ?>
			<li class="nav-item dropdown pe-3">
				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
					<img src="<?= base_url()?>NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
					<span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</span>
				</a>
                <!-- End Profile Iamge Icon -->
				<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
					<li>
						<a class="dropdown-item d-flex align-items-center" href="users-profile.html">
							<i class="bi bi-person"></i>
							<span>My Profile</span>
						</a>
					</li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li>
						<a class="dropdown-item d-flex align-items-center" href="users-profile.html">
							<i class="bi bi-gear"></i>
							<span>Account Settings</span>
						</a>
					</li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li>
						<a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
							<i class="bi bi-question-circle"></i>
							<span>Need Help?</span>
						</a>
					</li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li>
						<a class="dropdown-item d-flex align-items-center" href="logout">
							<i class="bi bi-box-arrow-right"></i>
							<span>Sign Out</span>
						</a>
					</li>
				</ul>
                <!-- End Profile Dropdown Items -->
			</li>
            <!-- End Profile Nav -->
			<?php endif; ?>
		</ul>
    </nav>
    <!-- End Icons Navigation -->
</header>
