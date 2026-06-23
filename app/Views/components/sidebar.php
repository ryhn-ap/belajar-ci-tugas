<aside id="sidebar" class="sidebar">
	<ul class="sidebar-nav" id="sidebar-nav">
    	<li class="nav-item">
			<a class="nav-link <?= (uri_string() == '') ? "" : "collapsed" ?>" href="/">
				<i class="bx bx-dish"></i>
				<span>Menu</span>
			</a>
      	</li>
		<?php
			if (session()->get('role') == 'admin') {
		?>
        <!-- Start Product Nav -->
		<li class="nav-item">
			<a class="nav-link <?= (uri_string() == 'produk') ? "" : "collapsed" ?>" href="/produk">
				<i class="bx bx-food-menu"></i>
				<span>Produk</span>
			</a>
      	</li>
		<?php
			}
		?>
		<?php if (session()->get('role') != 'admin' && session()->get('role') != 'user') : ?>
		<li class="nav-item">
			<a class="nav-link collapsed" href="signin">
			<i class="bi bi-card-list"></i>
			<span>Register</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="login">
			<i class="bi bi-box-arrow-in-right"></i>
			<span>Login</span>
			</a>
		</li>
		<?php endif; ?>
    </ul>
</aside>
