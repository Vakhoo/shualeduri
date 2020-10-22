<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
		table, tr, td, th{
			border: solid 2px black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>title</th>
			<th>action</th>
		</tr>
		<tr>
			@foreach ($coocks as $coock)
				<tr>
					<td>{{++$loop->index}}</td>
					<td>{{$coock->category_name}}</td>
					<td>
						<a href="{{ route('categoryadminshow', ["id"=>$coock->id]) }}">დათვალიერება</a>
						<form method="POST" action="{{ route('categoryadmindelete') }}">
							@csrf
							<input type="hidden" name="id" value="{{$coock->id}}">
							<button>წაშლა</button>
						</form>

					</td>
				</tr>
			@endforeach
		</tr>
	</table>

</body>
</html>
