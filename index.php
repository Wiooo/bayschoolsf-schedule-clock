<!DOCTYPE html>
<html lang="en">
<head>
	<title>Schedule - Clock</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Copyright -->
    <!-- Website componets and structure copyrighted by John Finberg -->

</head>
<body>

<div class="container" >

	<div class="clock-container" id="main">
		<div id="currentclock"></div>
	</div>

	<!-- Trigger the modal with a button -->
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Report a Bug</button>

	</div>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Report a bug</h4>
	      </div>
	      <div class="modal-body">
	        <p>Some text in the modal.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
</body>
</html>
	
<script type="text/javascript">
	// This is run when the document is ready, you could also run setInterval elsewhere if needed
	$(document).ready(function (e) {
	   	setInterval ( RunUpdate, 1000 ); // Runs real fast am I right?


	});

	function RunUpdate() {
	   $("#currentclock").load('assets/php/functions-new.php');
	}
</script>