@extends('layout')

@section('content')
  <a href="{{ route('create') }}">メモする</a>
  @foreach($memos as $memo)
  <div>
    <span>{{ $memo->content }}</span>
    <a href="{{ route('edit', ['id'=>$memo->id]) }}">書きなおす</a>
    <a href="{{ route('delete', ['id'=>$memo->id]) }}">消す</a>
  </div>
  @endforeach

@endsection