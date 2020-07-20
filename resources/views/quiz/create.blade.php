@extends('layouts.app')

@section('content')
<h2 class="text-center">Add Quiz</h2>
<a href="{{ route('index') }}" class="btn btn-primary btn-sm mb-4">Back to Home</a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('quiz.store') }}" method="post" class="border-bottom pb-3">
@csrf
<div id="questionForm">
  <div class="row border-top border-bottom pt-4 pb-2">
    <div class="col-6">
      <div class="form-group">
        <label for="question">Question</label>
        <textarea class="form-control" id="question" rows="5" name="question[]"></textarea>
      </div>
      <div class="form-group">
        <label for="correct">Correct Answer</label>
        <select class="form-control" id="correct" name="correct[]">
          <option value="" hidden>Choose correct answer</option>
          <option value="option_1">Option 1</option>
          <option value="option_2">Option 2</option>
          <option value="option_3">Option 3</option>
          <option value="option_4">Option 4</option>
          <option value="option_5">Option 5</option>
        </select>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="option_1">Option 1</label>
        <input type="text" class="form-control" id="option_1" name="option_1[]">
      </div>
      <div class="form-group">
        <label for="option_2">Option 2</label>
        <input type="text" class="form-control" id="option_2" name="option_2[]">
      </div>
      <div class="form-group">
        <label for="option_3">Option 3</label>
        <input type="text" class="form-control" id="option_3" name="option_3[]">
      </div>
      <div class="form-group">
        <label for="option_4">Option 4</label>
        <input type="text" class="form-control" id="option_4" name="option_4[]">
      </div>
      <div class="form-group">
        <label for="option_5">Option 5</label>
        <input type="text" class="form-control" id="option_5" name="option_5[]">
      </div>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
<div class="clearfix"></div>
</form>
<div class="float-right mt-4">
  <span class="text-muted mr-2" id="questionTotal">Total Question: 1</span>
  <button class="btn btn-primary" id="addMoreQuestion">Add More Question</button>
</div>


<!-- Question Template -->
<div class="d-none" id="questionTemplate">
  <div class="row border-top border-bottom pt-4 pb-2 position-relative">
    <div class="col-6">
      <div class="form-group">
        <label for="question">Question</label>
        <textarea class="form-control" id="question" rows="5" name="question[]"></textarea>
      </div>
      <div class="form-group">
        <label for="correct">Correct Answer</label>
        <select class="form-control" id="correct" name="correct[]">
          <option value="" hidden>Choose correct answer</option>
          <option value="option_1">Option 1</option>
          <option value="option_2">Option 2</option>
          <option value="option_3">Option 3</option>
          <option value="option_4">Option 4</option>
          <option value="option_5">Option 5</option>
        </select>
      </div>
    </div>
      <a class="position-absolute close" href="#" onclick="decreaseIndex();return this.parentNode.remove();this.preventDefault();" id="removeElement" style="top:10px;right:10px;">&times;</a>
    <div class="col-6">
      <div class="form-group">
        <label for="option_1">Option 1</label>
        <input type="text" class="form-control" id="option_1" name="option_1[]">
      </div>
      <div class="form-group">
        <label for="option_2">Option 2</label>
        <input type="text" class="form-control" id="option_2" name="option_2[]">
      </div>
      <div class="form-group">
        <label for="option_3">Option 3</label>
        <input type="text" class="form-control" id="option_3" name="option_3[]">
      </div>
      <div class="form-group">
        <label for="option_4">Option 4</label>
        <input type="text" class="form-control" id="option_4" name="option_4[]">
      </div>
      <div class="form-group">
        <label for="option_5">Option 5</label>
        <input type="text" class="form-control" id="option_5" name="option_5[]">
      </div>
    </div>
  </div>
</div>
@endsection