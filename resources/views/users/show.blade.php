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
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">趣味：{{ $user->hobby }}</p>
                    <p class="card-text">職業：{{ $user->job }}</p>
                    <p class="card-text">一言：{{ $user->message }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
               </div>
          </div>
     </div>
</div>
@endsection