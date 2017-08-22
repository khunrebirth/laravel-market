<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Our's Markets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Fontss Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.css">
    </head>
    <body>

      <nav class="navbar ">
        <div class="navbar-brand">
          <a class="navbar-item" href="http://bulma.io">
            <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
          </a>

          <div class="navbar-burger burger" data-target="navMenubd-example">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navMenubd-example" class="navbar-menu">   
          <div class="navbar-end">
            <a class="navbar-item  is-active" href="{{ route('markets.create') }}">
              NEW MARKET
            </a>
          </div>
        </div>
      </nav>

      @yield('hero')

      <section class="section">
        <div class="container">
        
          @if(count($errors) > 0)
            @foreach($errors->all() as $error)
              <article class="message message is-danger">
                <div class="message-header">
                  <p>Error :(</p>
                  <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                  {{ $error }}
                </div>
              </article>      
            @endforeach
          @endif

          @yield('content')
        </div>
      </section>

      <footer class="footer">
        <div class="container">
          <div class="content has-text-centered">
            <p>
              <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
              <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
              is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
            </p>
            <p>
              <a class="icon" href="https://github.com/jgthms/bulma">
                <i class="fa fa-github"></i>
              </a>
            </p>
          </div>
        </div>
      </footer>

    </body>
</html>
