<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit event</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container col-md-3"></div>
	<div class="container col-md-6">
		<br> <br>
		<form action="{{ route('events.update',$id) }}" method="POST" class="" role="form">
			@csrf
			{{method_field('put')}}
				<div class="form-group">
					<legend>Edit event</legend>
				</div>
				<div class="form-group">
					<label class="control-label" for="title">Title:</label>
					<input name="title" type="text" class="form-control" id="title" value="{{$event->title}}">
				</div>
				<div class="form-group">
					<label class="control-label" for="content">Content:</label>
					<input name="content" type="text" class="form-control" id="content" value="{{$event->content}}">
				</div>
				<div class="form-group">
					<label class="control-label" for="time">Time:</label>
					<input name="time" type="date" class="form-control" id="time" value="{{$event->time}}">
					<span>{{$event->time}}</span>
				</div>
				<div class="form-group">
					<label class="control-label" for="location">Location:</label>
					<input name="location" type="text" class="form-control" id="location" value="{{$event->location}}">
				</div>
				<div class="form-group">
					<div class="">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
		</form>
	</div>
	<div class="container col-md-3"></div>
</body>
	<!-- Latest compiled and minified CSS & JS -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>