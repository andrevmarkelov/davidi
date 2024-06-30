<!-- Form -->
<div class="form">
	<div class="form-container">
		<h1>Вход в личный кабинет</h1>

		<form method="post" action="<?php echo site_url('Auth/do_login'); ?>">
			<?php if($this->session->flashdata('error')): ?>
				<div class="form-error">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
			<?php endif; ?>

			<div class="form-item">
				<label for="phone">Введите номер вашего мобильного телефона:</label>
				<input type="tel" id="phone" minlength="11" maxlength="13" name="phone" placeholder="375" oninput="formatPhone(this)" required>
			</div>

			<button type="submit" class="form-submit">Войти</button>
		</form>

	</div>
</div>

<script>
	function formatPhone(input) {
		input.value = input.value.replace(/[^0-9]/g, '');
	}
</script>
