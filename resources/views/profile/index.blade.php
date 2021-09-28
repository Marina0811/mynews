@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="post">
                <div class="headline col-md-8 mx-auto mt-3">
                    <div class="post">
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="名前">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="性別">
                                    {{ str_limit($post->gender, 150) }}
                                </div>
                                <div class="趣味">
                                    {{ str_limit($post->hobby, 150) }}
                                </div>
                                <div class="自己紹介">
                                    {{ str_limit($post->introduction, 150) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection