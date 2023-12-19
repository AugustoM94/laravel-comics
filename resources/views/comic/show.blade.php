@extends('layouts.app')

@section('title', 'comics')

@section('content')
<main id="show" class="p-5">
    <section class="container">
        <div class="row gy-4">
            <div class="col-md-6">
                <h1 >{{$comic['title']}}</h1>
                    <div class="mt-4 bg-green d-flex justify-content-between">
                      <span>U.S. Price:{{$comic['price']}}</span>
                     <span><span class="txt-green">AVAILABLE</span> | <span class="txt-white"> Check Availability</span> </span>
                    </div>
                <p class="mt-4">{!! $comic['description'] !!}</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="img-fluid">
            </div>
        </div>
    </section>
</main>
<section class="container">

</section>
@endsection
