<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="{{ url('/upload') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="file" name="pic[]">
	<input type="file" name="pic[]">
	<input type="file" name="pic[]">
	<button type="submit">upload</button>
</form>
</body>
</html>