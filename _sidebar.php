<ul class="sidebar navbar-nav">
	<li class="nav-item <?php echo $active == 'dashboard' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo base_url('dashboard.php') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active == 'penulis' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo base_url('penulis/index.php') ?>">
			<i class="fas fa-fw fa-pen-alt"></i>
			<span>Manajemen Penulis</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active == 'penerbit' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo base_url('penerbit/index.php') ?>">
			<i class="fas fa-fw fa-book"></i>
			<span>Manajemen Penerbit</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active == 'kategori' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo base_url('kategori/index.php') ?>">
			<i class="fas fa-fw fa-list"></i>
			<span>Manajemen Kategori</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active == 'buku' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo base_url('buku/index.php') ?>">
			<i class="fas fa-fw fa-book-open"></i>
			<span>Manajemen Buku</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active == 'akun' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo base_url('akun/index.php') ?>">
			<i class="fas fa-fw fa-user"></i>
			<span>Manajemen Akun</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('logout.php') ?>" onclick="return confirm('apakah anda yakin?')">
			<i class="fas fa-fw fa-sign-out-alt"></i>
			<span>Logout</span>
		</a>
	</li>
</ul>