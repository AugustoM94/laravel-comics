@extends('layouts.app')

@section('title', 'Laravel-Comics')



@section('content')

<main id="main">
  <section class="bg-main">
    <div class="container">
      <span>Current series</span>
      <div class="container p-3 mt-3 flex-wrap d-flex justify-content-between" >
        @foreach ($comics as $comic)
    <div class="col-lg-2 p-2 ">
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top">
            <h5 class="mt-2">{{ $comic['title'] }}</h5>
     </div>
        @endforeach
      </div>
      <div class="d-flex justify-content-center align-items-center mt-3">
        <button id="loadMoreButton">Load More</button>
      </div>
    </div>
  </section>
<section id="icon" class="bg-header">
    <div class=" container py-5">
               <ul class="d-flex justify-content-around align-item-center">
                    <li>
                        <img src="{{Vite::asset('/resources/img/buy-comics-digital-comics.png')}}" alt="logo-Digital-comics">
                        <span class="px-1">Digital comics</span>
                    </li>
                    <li>
                        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="logo-merchandise">
                        <span class="px-1">Dc Merchandise</span>
                    </li>
                    <li >
                        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="logo-shop-locator">
                        <span class="px-1">Subscription</span>
                    </li>
                    <li >
                        <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="logo-buy">
                        <span class="px-1">Comic shop locator</span>
                    </li>
                    <li >
                        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="logo-power-visa">
                        <span class="px-1">Dc power visa</span>
                    </li>

               </ul>
    </div>
</section>
</main>





@endsection
