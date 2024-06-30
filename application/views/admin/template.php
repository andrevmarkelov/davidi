<!doctype html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="robots" content="noindex, nofollow">
		<title><?php echo $title ?? 'Администрирование - DaviDi'; ?></title>
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/datatables.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">
	</head>
	<body>

	<header class="header">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center py-3">
				<a href="<?php echo base_url(); ?>">
					<img src="<?php echo base_url('assets/img/logo-white.svg'); ?>" width="120" alt="DaviDi логотип">
				</a>

				<a href="<?php echo site_url('Admin/Index/logout'); ?>">Выход</a>
			</div>
		</div>
	</header>

	<main class="main">
		<?php $this->load->view($page); ?>
	</main>


	<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/datatables.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.rowReorder.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/rowReorder.dataTables.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.responsive.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/responsive.dataTables.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/phone_format.js'); ?>"></script>
	<script>
		$(document).ready(function() {
			const table = $('#clients_table').DataTable({
				language: {
					url: '//cdn.datatables.net/plug-ins/2.0.8/i18n/ru.json',
				},
				responsive: true
			});

			$('#clients_table tbody').on('click', '.edit-client', function() {
				const id = $(this).data('id');
				$.ajax({
					url: '<?php echo site_url('Admin/Clients/edit/'); ?>' + id,
					method: 'GET',
					success: function(data) {
						const client = JSON.parse(data);
						$('#editClientModal #name').val(client.name);
						$('#editClientModal #phone').val(client.phone);
						$('#editClientModal #points').val(client.points);
						$('#editClientModal form').attr('action', '<?php echo site_url('Admin/Clients/update/'); ?>' + client.id);
						$('#editClientModal').modal('show');
					}
				});
			});
		});
	</script>
	</body>
</html>
