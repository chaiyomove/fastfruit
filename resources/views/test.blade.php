<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="{{ url('/upload') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="file" name="pic1">
	<input type="file" name="pic2">
	<input type="file" name="pic3">
	<button type="submit">upload</button>
</form>
</body>
</html>