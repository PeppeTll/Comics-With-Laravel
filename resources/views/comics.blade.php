@extends('layouts.default')

@section('content')
  <div class="jumboWrapper">
    <img src="/img/jumbotron.jpg" alt="">
  </div>
  <section class="sectionCard">
    <div class="container cardWrapper">
      @foreach ($comics as $index => $value)
        <div class="card">
          <a href="{{ route('comics.show', ['id' => $index]) }}">
            <figure>
            <img src="{{ $value['thumb'] }}" alt="">
          </figure>
          <h4>
            {{ $value['title'] }}
          </h4>
          </a>
        </div>
      @endforeach
      <div class="seriesTag">
        <h2>
          current series
        </h2>
      </div>
    </div>
    <button class="button">
        <h3>
          <a href="/">load more</a>
        </h3>
      </button>
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