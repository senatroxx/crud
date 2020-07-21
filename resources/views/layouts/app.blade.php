<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<style>
	.ck-editor__editable{
		min-height: 400px;
	}
	</style>
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
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		ClassicEditor
			.create( document.querySelector( '.editor' ), {
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'underline',
						'link',
						'bulletedList',
						'numberedList',
						'alignment',
						'blockQuote',
						'insertTable',
						'undo',
						'redo',
						'fontColor',
						'fontBackgroundColor'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
				licenseKey: '',
				
			} )
			.then( editor => {
				window.editor = editor;
			} )
			.catch( error => {
				console.error( 'Oops, something gone wrong!' );
				console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
				console.warn( 'Build id: axcts2l0qtiy-391um74d4qwh' );
				console.error( error );
			} );
	
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