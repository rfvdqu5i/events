<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Event</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>
	<br> <br>
	<div class="container">

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Content</th>
						<th>Time</th>
						<th>Location</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 0;
					?>
					@foreach ($events as $event)
					<?php
						$i++;
					?>
					<tr>
						<td>{{$i}}</td>
						<td>{{$event->title}}</td>
						<td>{{$event->content}}</td>
						<td>{{$event->time}}</td>
						<td>{{$event->location}}</td>
						<td>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit" data-title="{{$event->title}} data-id="{{$event->id}}"><i class="fas fa-edit"></i></button>
							<a style="display: inline-block;" href="{{ route('events.edit',$event->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
							<form style="display: inline-block;" action="{{ route('events.destroy',$event->id) }}" method="post" accept-charset="utf-8">
								@csrf
								{{method_field('delete')}}
								<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="container">
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add</button>

		<!-- Modal -->
	  	<div class="modal fade" id="myModal" role="dialog">
	    	<div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
			    	<div class="modal-header">
			       		<button type="button" class="close" data-dismiss="modal">&times;</button>
			       		<h4 class="modal-title">Add event</h4>
			     	</div>
			     	<div class="modal-body">
				       	<form action="{{ route('events.store') }}" method="POST" class="" role="form">
						@csrf
							<div class="form-group">
								<label class="control-label" for="event">Event:</label>
								<input name="title" type="text" class="form-control" id="title" placeholder="Add title">
								<input name="content" type="text" class="form-control" id="content" placeholder="Add content">
								<input name="time" type="date" class="form-control" id="time" placeholder="Time">
								<input name="location" type="text" class="form-control" id="location" placeholder="Add location">
							</div>
							
							<div class="form-group">
								<div class="">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div>
						</form>
				    </div>
			    </div>
	      	</div>
  		</div>
  	</div>

  	<div class="container">

		<!-- Modal -->
	  	<div class="modal fade edit" id="myModal2" role="dialog">
	    	<div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
			    	<div class="modal-header">
			       		<button type="button" class="close" data-dismiss="modal">&times;</button>
			       		<h4 class="modal-title">Edit event</h4>
			     	</div>
			     	<div class="modal-body">
				       	<form action="" method="POST" class="" role="form">
						@csrf
							<div class="form-group">
								<label class="control-label" for="event">Event:</label>
								<input name="title" type="text" class="form-control" id="edit_title">
								<input name="content" type="text" class="form-control" id="edit_content">
								<input name="time" type="date" class="form-control" id="edit_time">
								<input name="location" type="text" class="form-control" id="edit_location">
							</div>
							
							<div class="form-group">
								<div class="">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div>
						</form>
				    </div>
			    </div>
	      	</div>
  		</div>
  	</div>

  	<script type="text/javascript">
        $('#myModal2').on('show.bs.modal',function(event) {
        	console.log('ahbsdjha');
        	var button = $(event.relatedTarget);
        	var title = button.data('title');

        	var modal = $(this);

        	modal.find('.modal-body #edit_title').val(title);

        });

    </script>
</body>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>