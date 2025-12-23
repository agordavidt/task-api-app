@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">

       @foreach($posts as $post)
        <div class="card shadow-sm mb-4">
            <div class="card-body">

                <!-- User Info -->
                <div class="d-flex align-items-center mb-2">
                    <!-- Avatar -->
                    <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-3"
                         style="width:45px; height:45px; font-weight:bold;">
                        {{ strtoupper(substr($post['user'], 0, 1)) }}
                    </div>

                    <div>
                        <h6 class="mb-0">{{ $post->user?->name ?? 'Anonymous' }}</h6>
                        <small class="text-muted">
                            {{ \Carbon\Carbon::parse($post['created_at'])->diffForHumans() }}
                        </small>
                    </div>
                </div>

                <!-- Post Title -->
                <h5 class="fw-bold mt-3">
                    {{ $post['title'] }}
                </h5>

                <!-- Post Content -->
                <p class="mt-2">
                    {{ $post['content'] }}
                </p>

                <hr>

                <!-- Facebook-like Actions -->
                <div class="d-flex justify-content-around text-muted fw-semibold">
                    <span>👍 Like</span>
                    <span>💬 Comment</span>
                    <span>↪️ Share</span>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
