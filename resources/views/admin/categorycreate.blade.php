<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form action="{{ route('categoryadminstore') }}" method="POST">
		@csrf
		<label for="category">category</label>
		<input type="text" name="category" id="category">
		<button>save</button>
	</form>

</body>
</html>