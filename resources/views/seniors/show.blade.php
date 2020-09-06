@extends('layouts.app')

@section('content')
<div class="card mb-3 mx-auto" style="max-width: 540px;">
     <div class="row no-gutters">
          <div class="col-md-4">
               <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
               </svg>
          </div>
          <div class="col-md-8">
               <div class="card-body">
                    <h5 class="card-title">{{ $senior->name }}({{ $senior->age }})</h5>
                    <p class="card-text">趣味：{{ $senior->hobby }}</p>
                    <p class="card-text">話したい人：{{ $senior->need_person }}</p>
                    <p class="card-text">一言：{{ $senior->message }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
               </div>
          </div>
     </div>
</div>
<div class="text-center">
     <a href="{{ route('seniors.index') }}" class="btn btn-primary d-inline-block">一覧に戻る</a>
     <a href="{{ route('seniors.edit', $senior->id) }}" class="btn btn-primary">編集する</a>
</div>
<div class="row justify-content-center">
     <div class="col-md-8">
          <form action="{{ route('comments.store') }}" method="POST">
               @csrf
               <input type="hidden" name="senior_id" value="{{ $senior->id }}">
               <div class="form-group">
                    <label>コメント</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
               </div>
               <button type="submit" class="btn btn-primary">コメントする</button>
          </form>
     </div>
</div>
<div class="row justify-content-center">
     <div class="col-md-8">
          @foreach ($senior->comments as $comment)
          <div class="card mt-3">
               <h5 class="card-header">投稿者：<a href="{{ route('users.show', $comment->user->id) }}">{{ $comment->user->name }}</a></h5>
               <div class="card-body">
                    <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                    <p class="card-text">内容：{{ $comment->body }}</p>
               </div>
          </div>
          @endforeach
     </div>
</div>
@endsection