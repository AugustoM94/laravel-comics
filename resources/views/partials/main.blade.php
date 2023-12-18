<main id="main">
  <section class="bg-main">
    <div class="container">
      <span>Current series</span>
      <div class="container p-3 mt-3 flex-wrap d-flex justify-content-between" id="comicsContainer">
        @foreach ($comics as $comic)
    <div class="col-lg-2 p-2 ">
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top">
            <h5>{{ $comic['title'] }}</h5>
     </div>
        @endforeach
      </div>
      <div class="d-flex justify-content-center align-items-center mt-3">
        <button id="loadMoreButton">Load More</button>
      </div>
    </div>
  </section>
</main>
