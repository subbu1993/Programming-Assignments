<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
'	<style>
	  body 
	  {
		background-color: lightblue;
	  }
	</style>
</head>
<body>
	<form action='/story/store' method="post">
	<div class="form-group">
	<label> Title: </label>
	<input  type="text" class = "form-control" name="title"/>
	</div>
	<br/> <br/>
	<div class="form-group"> 
	<label> Location: </label>
	<select name="location_id">
	@foreach ($locations as $location)
		<option value="{{ $location->id }}">{{$location->value }}</option>
	@endforeach
	</select>
	</div>
	<br/> <br/> 
	<div class="form-group">
	<label> Story: </label>
	<input class = "form-control" type="text" name="story"/>
	</div>
	<div class="form-group">
	<label> Published: </label>
	<select name="published">
w		<option value="1">True</option>
		<option value="0">False</option>
	</select>
	</div>
	<input type="submit" name="Submit" class="btn btn-success"/> </center>
	</form>
</body>
</html>

