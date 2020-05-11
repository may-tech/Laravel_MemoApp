@extends('layout')

@section('content')
  <a href="{{ route('create') }}">メモする</a>
  <div class="tile is-ancestor">
    <div class="tile is-parent">
  @foreach($memos as $memo)
      <div class="tile is-child box">

        <div class="container">
          <header>
            <p class="card-header-title">{{ $memo->created_at }}</p>
          </header>
          <div class="content">
              <span>{{ $memo->content }}</span>
          </div>
          <footer>
            <!-- <a href="#" class="card-footer-item">Save</a>
            <a href="#" class="card-footer-item">Edit</a> -->
            <div class="buttons">
               <button class="button is-link is-light"><a href="{{ route('edit', ['id'=>$memo->id]) }}">書きなおす</a></button>
               <button class="button is-danger is-light"><a href="{{ route('delete', ['id'=>$memo->id]) }}">消す</a></button>
            </div>
          </footer>
       </div>
      </div>
  @endforeach
    </div>
  </div>  

@endsection