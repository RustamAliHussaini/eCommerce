@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
            <div class="carousel-inner">


                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id']==12?'active':'' }}">
                        <img class="slider-img" src="{{ $item['gallery'] }}" class="d-block w-100" alt="rustam not found">
                        <div class="carousel-caption d-none slider-text d-md-block">
                            <h5>{{ $item['name'] }}</h5>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>


    <div class="row">
        <div class="trending-wrapper">

            <h1>Trending</h1>
            @foreach ($products as $item)
             <a href="detail/{{ $item['id'] }}">
                <div class="trending-content">
                    <img class="trending-img" src="{{ $item['gallery'] }}" class=" " alt="rustam not found">

                    <h5>{{ $item['name'] }}</h5>
                   </div>


             </a>
            @endforeach

         </div>
    </div>

</div>



@endsection
