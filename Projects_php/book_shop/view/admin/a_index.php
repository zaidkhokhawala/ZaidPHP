<?php include_once('a_header.php'); ?>
<style>
	:root {
		--accent-color: #C5A992;
		--secondary-color: #C5A992;
		--dark-color: #2f2f2f;
		--light-color: #F3F2EC;
		--body-text-color: #757575;
		--light-text-color: #afafaf;
		--dark-text-color: #2f2f2f;
	}

	.dashboard-card {
		background-color: var(--light-color);
		border: none;
		border-radius: 1rem;
		box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
		/* 3D effect from all sides */
		color: var(--dark-text-color);
		transition: 0.3s;
	}

	.dashboard-card:hover {
		transform: translateY(-5px);
		box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
	}

	.card-title {
		font-size: 1rem;
		color: var(--accent-color);
		text-transform: uppercase;
		margin-bottom: 5px;
		font-weight: 600;
	}

	.card-value {
		font-size: 2rem;
		font-weight: bold;
		color: var(--dark-text-color);
	}

	.card-label {
		font-size: 0.85rem;
		color: var(--body-text-color);
	}

	.sales-box {
		background-color: var(--light-color);
		border-radius: 1rem;
		box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
		padding: 2rem;
	}
</style>

<div class="container-fluid px-4 py-5">
	<div class="row mb-4">
		<div class="col-12">
			<h2 class="fw-bold text-dark">Admin Dashboard</h2>
		</div>
	</div>

	<!-- Stats Cards -->
	<div class="row g-4 mb-5">
		<div class="col-md-3">
			<div class="card dashboard-card shadow rounded-4 p-4 h-100">
				<div class="card-title">Total Products</div>
				<div class="card-value">120</div>
				<div class="card-label">In Inventory</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card dashboard-card shadow rounded-4 p-4 h-100">
				<div class="card-title">Total Services</div>
				<div class="card-value">45</div>
				<div class="card-label">Active Services</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card dashboard-card shadow rounded-4 p-4 h-100">
				<div class="card-title">Total Orders</div>
				<div class="card-value">98</div>
				<div class="card-label">Pending + Completed</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card dashboard-card shadow rounded-4 p-4 h-100">
				<div class="card-title">Total Users</div>
				<div class="card-value">340</div>
				<div class="card-label">Registered</div>
			</div>
		</div>
	</div>

	<!-- Sales Overview -->
	<div class="row">
		<div class="col-md-12">
			<div class="card sales-box shadow rounded-4 p-5">
				<h4 class="fw-bold text-dark border-bottom pb-3 mb-3">Sales Overview <small class="text-muted">(Coming Soon)</small></h4>
				<div class="text-center py-5 text-muted fst-italic">
					Sales chart and analytics will appear here soon...
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('a_footer.php'); ?>