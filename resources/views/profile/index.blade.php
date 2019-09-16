@extends('layouts.profile')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>名前・・・{{ str_limit($headline->name, 70) }}</h1>
                                </div>
                                <div class="title p-2">
                                    <h1>性別・・・{{ str_limit($headline->gender, 70) }}</h1>
                                </div>
                                <div class="title p-2">
                                    <h1>趣味・・・{{ str_limit($headline->hobby, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">自己紹介⇒{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
    </div>
    </div>
@endsection