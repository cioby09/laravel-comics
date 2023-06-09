@extends('layouts.app')

@section('content')
    <div class="containere py-4">
        <div class="container">
            <div class="row row-cols-6 g-3">
                @foreach ($comics as $single_comics)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $single_comics['thumb'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $single_comics['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
