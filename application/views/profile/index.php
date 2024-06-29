<!-- profile -->
<div class="profile">
	<div class="profile-container">
		<h1>Здравствуйте, <?php echo $client->name; ?></h1>

		<div class="profile-content">
			<p>Ваши баллы: <span><?php echo $client->points; ?></span></p>
			<p>Номер вашего телефона: <span><?php echo $client->phone; ?></span></p>
		</div>

		<div class="profile-footer">
			<a href="<?php echo site_url('logout'); ?>">Выйти</a>
		</div>
	</div>
</div>
