@extends('layout')

@section('content')
<button class="button is-info is-outlined">
  <a href="{{ route('create') }}">
    <i class="far fa-edit"></i>
  </a>
</button>

<!-- <div class="tile is-ancestor is-vertical"> -->
  @foreach($memos as $memo)
  
  @endforeach


  @foreach($memos as $memo)
  <!-- <div class="tile is-parent is-6">
    <div class="tile is-child"> -->
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            {{ $memo->created_at }}
          </p>
        </header>
        <div class="card-content">
          <div class="content">
            {{ $memo->content }}
          </div>
        </div>
        <footer class="card-footer">
          <a href="{{ route('edit', ['id'=>$memo->id]) }}" class="card-footer-item has-background-info	has-text-white">
            <span class="icon">
              <i class="fas fa-screwdriver"></i>
            </span>
          </a>
          <a href="{{ route('delete', ['id'=>$memo->id]) }}" class="card-footer-item has-background-light">
          <span class="icon">
            <i class="fa fa-times" aria-hidden="true"></i>
            </span>
          </a>
        </footer>
      </div>
      <br>
    <!-- </div>
  </div> -->
  @endforeach
  <!-- </div> -->
@endsection