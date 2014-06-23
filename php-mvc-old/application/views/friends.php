<?php require './application/views/layout/header.php'; ?>

<table class="table">
		<thead>
			<tr>
			<th>Names</th>
			<th>Phone Number</th>
			<th>Tax</th>
		</tr>
		</thead>
	<tbody>
		<?php foreach ($friends as $friend): ?>
		<tr>
				<td><?= $friend->name; ?></td>
				<td><?= $friend->phone; ?></td>
				<td><?= $tax->vat(); ?></td>
		<tr>
		<?php endforeach ?>
	</tbody>
</table>

<?php require './application/views/layout/footer.php'; ?>
