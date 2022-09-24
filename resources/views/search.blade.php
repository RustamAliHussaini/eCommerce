@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <h1>Search Result:</h1>
            @foreach ($product as $item)
            <a href="detail/{{ $item['id'] }}">
                <div class="item">
                    <img class="search-img" src="{{ $item['gallery'] }}" alt="">
                    <h3>Name: {{ $item['name'] }}</h3>
                    <h6>Description: {{ $item['description'] }}</h6>
                </div>
            </a>

            @endforeach
        </div>
    </div>
</div>


@endsection
