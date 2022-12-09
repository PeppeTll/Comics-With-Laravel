@extends('layouts.default')

@section('content')
  <div class="jumboWrapper">
    <img src="/img/jumbotron.jpg" alt="">
  </div>
  <section class="sectionCard">
    <div class="container cardWrapper">
      @foreach ($comics as $item)
        <div class="card">
          <figure>
            <img src="{{ $item['thumb'] }}" alt="">
          </figure>
          <h4>
            {{ $item['title'] }}
          </h4>
        </div>
      @endforeach
      <button class="button">
        <h3>
          <a href="/">load more</a>
        </h3>
      </button>
      <div class="seriesTag">
        <h2>
          current series
        </h2>
      </div>
    </div>
  </section>
  <section class="linkShop">
    <div class="linkWrapper container">
      @foreach ($links as $item)
        <div class="cardLink">
          <img src="{{ $item['img'] }}" alt="">
          <p>
            {{ $item['name'] }}
          </p>
        </div>
      @endforeach
    </div>
  </section>
@endsection
