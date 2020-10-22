<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<div>
		<form action="{{ route('categoryadminupdate') }}" method="POST">
			@csrf
			<input type="hidden" name="id" value="{{$data->id}}">
			<label>title:</label>		
			<input type="text" name="category" value="{{$data->category_name}}">
			
			<button >save</button>
		</form>
	</div>

</body>
</html>
