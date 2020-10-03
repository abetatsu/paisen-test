@extends('layouts.app')

@section('content')
<div class="text-center my-5">
     <a href="{{ route('seniors.create') }}" class="btn btn-primary d-inline-block">高齢者プロフィールを作成する</a>
</div>
@foreach($seniors as $senior)
<div class="card d-inline-block">
     <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#868e96" /><text x="10%" y="50%" fill="#dee2e6" dy=".3em">編集ページで顔写真を登録してください</text>
     </svg>
     <div class="card-body">
          <h5 class="card-title">{{ $senior->name }}({{ $senior->age }})</h5>
          <p class="card-text">趣味：{{ $senior->hobby }}</p>
          <p class="card-text">一言：{{ $senior->message }}</p>
          <a href="{{ route('seniors.show', $senior->id) }}" class="btn btn-primary">もっと詳しく</a>
          <toaster-component></toaster-component>
     </div>
</div>
@endforeach
@endsection