@extends('layouts.app')

@section('title', 'Products')

@section('content')
<main>
       <section class="container">
        <h1>Comics</h1>
        <div class="row gy-4">
          @foreach ($comics as $key => $product)
            <div class="col-12 col-md-4 col-lg-3">
             <div class="card h-100">
                    <a href="{{route('comic.show', $key)}}" class="btn">
                            <img src="{{$product['thumb']}}" alt="{{$product['title']}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$product['title']}}</h5>
                         </a>
                    </div>
                </div>
            </div>

          @endforeach
        </div>

    </section>

</main>

@endsection




