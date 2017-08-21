@extends('layouts.app')

@section('hero')
  <section class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          {{ $market->name }}
        </h1>
        <h2 class="subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
        </h2>
      </div>
    </div>
  </section>
@endsection

@section('content')
  <div class="card">
    <div class="card-image">
      <figure class="image is-4by3">
        <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
      </figure>
    </div>
    <div class="card-content">
      <div class="content">
        #Location City: {{ $market->city }} <br>
        #Website: <a target="_blank" href="http://{{ $market->website }}"> {{ $market->website }} </a>
      </div>
    </div>
  </div>
@endsection