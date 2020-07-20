<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				
        @yield('content')

			</div>
		</div>
	</div>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script>

	function decreaseIndex() {
		let index = $("#questionTotal").text().split(" ").pop();
		let cek = $("#questionTotal").text('Total Question: ' + (parseInt(index)-1));
		console.log(cek);
	}

		$(document).ready(function() { 
			
			$("#addMoreQuestion").click(function(event) { 
				event.preventDefault();
				$("#questionTemplate").children().clone().appendTo("#questionForm");
				let index = $("#questionTotal").text().split(" ").pop();
				$("#questionTotal").text('Total Question: ' + (parseInt(index)+1));
			});
		});
	</script>
</body>
</html>