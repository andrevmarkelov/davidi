<div class="block">
	<div class="block-header">
		<p>Список клиентов</p>

		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createClientModal">
			Создать
		</button>
	</div>

	<div class="block-body">

		<?php if($this->session->flashdata('error')): ?>
			<div class="alert alert-danger mt-3" role="alert">
				<?php echo $this->session->flashdata('error'); ?>
			</div>
		<?php endif; ?>

		<table id="clients_table" class="display compact cell-border">
			<thead>
			<tr>
				<th>ФИО</th>
				<th>Номер телефона</th>
				<th>Баллы</th>
				<th>Действие</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($clients as $client): ?>
				<tr>
					<td><?php echo $client->name; ?></td>
					<td><?php echo $client->phone; ?></td>
					<td><?php echo $client->points; ?></td>
					<td class="table-action">
						<button type="button" class="edit-client me-2" data-id="<?php echo $client->id; ?>">
							<img src="<?php echo base_url('assets/img/edit.svg'); ?>" alt="Редактировать">
						</button>
						<a href="<?php echo site_url('Admin/Clients/delete/'.$client->id); ?>" onclick="return confirm('Вы уверены, что хотите удалить этого клиента?');">
							<img src="<?php echo base_url('assets/img/delete.svg'); ?>" alt="Удалить">
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="createClientModal" tabindex="-1" aria-labelledby="createClientModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Создать клиента</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo site_url('admin/clients/create'); ?>">
					<div class="form-group">
						<label for="name">ФИО:</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>

					<div class="form-group">
						<label for="phone">Номер телефона:</label>
						<input type="text" class="form-control" id="phone" maxlength="13" oninput="formatPhone(this)" name="phone" required>
					</div>

					<div class="form-group">
						<label for="points">Баллы:</label>
						<input type="number" class="form-control" id="points" min="0" value="0" name="points" required>
					</div>

					<button type="submit" class="btn btn-primary d-block m-auto mt-3">Создать</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editClientModal" tabindex="-1" aria-labelledby="editClientModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Редактировать клиента</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post">
					<?php if($this->session->flashdata('error')): ?>
						<div class="alert alert-danger" role="alert">
							<?php echo $this->session->flashdata('error'); ?>
						</div>
					<?php endif; ?>

					<div class="form-group">
						<label for="name">ФИО:</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>

					<div class="form-group">
						<label for="phone">Номер телефона:</label>
						<input type="text" class="form-control" id="phone" maxlength="13" oninput="formatPhone(this)" name="phone" required>
					</div>

					<div class="form-group">
						<label for="points">Баллы:</label>
						<input type="number" class="form-control" id="points" min="0" name="points" required>
					</div>

					<button type="submit" class="btn btn-primary d-block m-auto mt-3">Сохранить изменения</button>
				</form>
			</div>
		</div>
	</div>
</div>
