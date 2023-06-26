@extends('layouts.app')

@section('content')
    <div class="container-fluid comics-container">
        <div class="container">
            <div class="top-button">
                <a href="">CURRENT SERIES</a>
            </div>
            <div class="row row-cols-6 g-3 cards">
                @foreach ($comics as $single_comic)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $single_comic['thumb'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $single_comic['series'] }}</h5>
                                <h5 class="card-title">{{ $single_comic['price'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="load-button">
                    <a href="">LOAD MORE</a>
                </div>
            </div>
        </div>
    </div>
@endsection
