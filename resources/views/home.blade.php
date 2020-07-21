@extends('layouts.app')

@section('content')
<a href="{{ route('quiz.create') }}" class="btn btn-primary float-right d-inline-block">Add Quiz</a>
<a href="{{ route('text.create') }}" class="btn btn-primary float-right d-inline-block mr-2">Add Text</a>

<ul class="nav nav-pills mb-2">
	<li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#quiz">Quiz</a></li>
	<li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#text">Text</a></li>
</ul>
<div class="clearfix"></div>

<div class="tab-content">
	<div id="quiz" class="tab-pane active" role="tabpanel">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Question</th>
						<th>Option 1</th>
						<th>Option 2</th>
						<th>Option 3</th>
						<th>Option 4</th>
						<th>Option 5</th>
						<th>Correct</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@php $i = 1; @endphp
				@foreach($quiz as $q)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{!! \Illuminate\Support\Str::limit($q->question, $limit = 50, $end = '...') !!}</td>
						<td>{!! \Illuminate\Support\Str::limit($q->option_1, $limit = 50, $end = '...') !!}</td>
						<td>{!! \Illuminate\Support\Str::limit($q->option_2, $limit = 50, $end = '...') !!}</td>
						<td>{!! \Illuminate\Support\Str::limit($q->option_3, $limit = 50, $end = '...') !!}</td>
						<td>{!! \Illuminate\Support\Str::limit($q->option_4, $limit = 50, $end = '...') !!}</td>
						<td>{!! \Illuminate\Support\Str::limit($q->option_5, $limit = 50, $end = '...') !!}</td>
						<td>{{ $q->correct }}</td>
						<td>
							<a href="{{ route('quiz.show', $q->id) }}" class="btn btn-success btn-sm">Show</a>
							<a href="{{ route('quiz.edit', $q->id) }}" class="btn btn-warning btn-sm" >Edit</a>
							<form action="{{ route('quiz.destroy', $q->id) }}" method="post" class="d-inline-block">
							@csrf
							@method('DELETE')
								<button class="btn btn-danger btn-sm" >Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div id="text" class="tab-pane fade" role="tabpanel">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Content</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@php $x = 1; @endphp
				@foreach($text as $t)
					<tr>
						<td>{{ $x++ }}</td>
						<td>{!! \Illuminate\Support\Str::limit(strip_tags($t->content), $limit = 120, $end = '...') !!}</td>
						<td>
							<a href="{{ route('text.show', $t->id) }}" class="btn btn-success btn-sm">Show</a>
							<a href="{{ route('text.edit', $t->id) }}" class="btn btn-warning btn-sm">Edit</a>
							<form action="{{ route('text.destroy', $t->id) }}" method="post" class="d-inline-block">
							@csrf
							@method('DELETE')
								<button class="btn btn-danger btn-sm" >Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection