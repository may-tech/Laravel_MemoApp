@extends('layout')

@section('content')
  @if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
    </div>
  @endif
  <form action="{{ route('store') }}" method="post">
    @csrf
    <textarea name="content" rows="４"></textarea>
    <button type="submit">メモ</button>
    <a href="{{ route('index') }}">やめる</a>
  </form>
@endsection