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
</div>
@endsection