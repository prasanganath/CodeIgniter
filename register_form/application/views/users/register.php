<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="form_group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" placeholder="Name">
	</div>
<?php echo form_close(); ?>
