@extends('layouts.app')

@section('content')
<div class="border-bottom mb-3">
  <h2 class="text-center">Show Text</h2>
  <a href="{{ route('index') }}" class="btn btn-primary btn-sm mb-3">Back to home</a>
</div>
{!! $text->content !!}
@endsection