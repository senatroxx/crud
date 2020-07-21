@extends('layouts.app')

@section('content')
<h2 class="text-center">Edit Text</h2>
<a href="{{ route('index') }}" class="btn btn-primary btn-sm mb-3">Back To Home</a>
<form action="{{ route('text.update', $text->id) }}" method="post">
@csrf
@method('PUT')
  <textarea name="content" id="editor" class="editor" cols="30" rows="10">{!! $text->content !!}</textarea>
  <button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
</form>
@endsection