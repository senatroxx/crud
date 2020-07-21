@extends('layouts.app')

@section('content')
<h2 class="text-center">Create Text</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{ route('index') }}" class="btn btn-primary btn-sm mb-3">Back To Home</a>
<form action="{{ route('text.store') }}" method="post">
@csrf
  <textarea name="content" id="editor" class="editor" cols="30" rows="10"></textarea>
  <button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
</form>
@endsection