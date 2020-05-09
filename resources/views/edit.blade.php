@extends('layout')

@section('content')
  @if($errors->any())
  <div>
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
    </div>
  @endif
  <form action="{{ route('updata', ['id'=>$memo->id]) }}" method="post">
    @csrf
    <textarea name="content" rows="４">{{ $memo->content }}</textarea>
    <!-- <textarea name="content" cols="30" rows="10"></textarea> -->
    <button type="submit">書きなおす</button>
    <a href="{{ route('index') }}">やめる</a>
  </form>
@endsection