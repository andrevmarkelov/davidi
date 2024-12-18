<!doctype html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo $title ?? 'DaviDi'; ?></title>
		<meta name="description" content="DaviDi Дом красивых волос в Молодечно предлагает услуги по выпрямлению и восстановлению волос с использованием лучших и трендовых технологий. Уникальный подход к уходу за волосами и кожей головы." />
		<meta name="keywords" content="выпрямление волос Молодечно, восстановление волос Молодечно, уход за волосами, салон красоты Молодечно, DaviDi Дом красивых волос" />
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/icons/favicon.png'); ?>">
		<script src="<?php echo base_url('assets/js/schema.js'); ?>"></script>
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
