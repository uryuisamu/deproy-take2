@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                         
                                </div>
                                <div class="title p-2">
                                    <h1>名前・・・{{ str_limit($profile->name, 70) }}</h1>
                                </div>
                                <div class="title p-2">
                                    <h1>性別・・・{{ str_limit($profile->gender, 70) }}</h1>
                                </div>
                                <div class="title p-2">
                                    <h1>趣味・・・ str_limit($profile->hobby, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                                    </div>
                    </div>
        <hr color="#c0c0c0">
    </div>
    </div>
@endsection