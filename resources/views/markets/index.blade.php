@extends('layouts.app')

@section('hero')
  <section class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          {{ $title }}
        </h1>
        <h2 class="subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
        </h2>
      </div>
    </div>
  </section>
@endsection

@section('content')
  <div class="columns is-multiline">
    @foreach($markets as $market)
      <div class="column is-4">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-left">
                <figure class="image is-48x48">
                  <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-4">{{ $market->name }}</p>
                <p class="subtitle is-6">
                  <a href="{{ route('markets.show', $market) }}">&commat;{{ $market->name }} </a>
                </p>
              </div>
            </div>
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Phasellus nec iaculis mauris.
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  
  <nav class="pagination" role="navigation" aria-label="pagination">
    {{ $markets->links() }}
  </nav>
@endsection