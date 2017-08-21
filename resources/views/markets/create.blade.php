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
  <form action="{{ route('markets.store') }}" method="post">
    <div class="field">
      <label for="name" class="label">MARKET NAME</label>
      <div class="control">
        <input class="input" type="text" name="name" placeholder="Enter Market" required>
      </div>
    </div>
    <div class="field">
      <label for="city" class="label">CITY</label>
      <div class="control">
        <input class="input" type="text" name="city" placeholder="Enter City" required>
      </div>
    </div>
    <div class="field">
      <label for="website" class="label">WEBSITE</label>
      <div class="control">
        <input class="input" type="text" name="website" placeholder="Enter Website" required>
      </div>
    </div>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-primary">Submit</button>
      </div>
      <div class="control">
        <button type="reset" class="button is-link">Cancel</button>
      </div>
    </div>
  </form>
@endsection