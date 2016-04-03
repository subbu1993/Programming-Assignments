<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
	<form action='/story/store' method="post">
	Title:<br/>
	<input  type="text" name="title"/>
	Location: <br/>
	<select name="location_id">
	@foreach ($locations as $location)
		<option value="{{ $location->id }}">{{$location->value }}</option>
	@endforeach
	</select>
	Story:<br/>
	<input type="text" name="story"/>
	<select name="published">
		<option value="1">True</option>
		<option value="0">False</option>
	</select>
	<input type="submit" name="Submit"/>
	</form>
</body>
</html>

