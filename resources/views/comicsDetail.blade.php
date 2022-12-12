@extends('layouts.default')

@section('content')
  <section class="sectionDetail">
    <div class="container detailWrapper">
      <div class="title">
        <h1>{{ $detail['title'] }}</h1>
      </div>
      <figure class="imgWrapper">
        <img src="{{ $detail['thumb'] }}" alt="">
      </figure>
      <div class="textWrapper">
        <h1>{{ $detail['series'] }}</h1>
        <h3>{{ $detail['type'] }}</h3>
        <h3>{{ $detail['description'] }}</h3>
        <h1>Price: {{ $detail['price'] }}</h1>
      </div>
    </div>
  </section>
@endsection
