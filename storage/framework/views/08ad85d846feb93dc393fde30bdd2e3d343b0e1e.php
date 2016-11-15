<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="<?php echo e(url('/upload')); ?>" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<input type="file" name="pic[]">
	<input type="file" name="pic[]">
	<input type="file" name="pic[]">
	<button type="submit">upload</button>
</form>
</body>
</html>