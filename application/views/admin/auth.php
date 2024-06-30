<!-- Form -->
<div class="form">
	<div class="form-container">
		<h1>Авторизация</h1>

		<form method="post" action="<?php echo site_url('Admin/Index/login'); ?>">
			<?php if($this->session->flashdata('error')): ?>
				<div class="form-error">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
			<?php endif; ?>

			<div class="form-item">
				<label for="password">Пароль:</label>
				<input type="password" id="password" name="password" required>
			</div>

			<button type="submit" class="form-submit">Войти</button>
		</form>

	</div>
</div>
