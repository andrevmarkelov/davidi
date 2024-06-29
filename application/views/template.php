<!doctype html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo $title ?? 'DaviDi'; ?></title>
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/swiper.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/fancybox.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
	</head>
	<body>
		<?php $this->load->view('header'); ?>
		<?php $this->load->view($page); ?>
		<?php $this->load->view('footer'); ?>

		<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/swiper.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/fancybox.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	</body>
</html>
