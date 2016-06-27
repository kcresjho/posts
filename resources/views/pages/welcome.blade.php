@extends('main')

@section('title','| Homepage')

@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my Blog</h1>
            <p class="lead">Thank you so much for visiting my blog. Esto es una prueba con laravel y bootstrap. Please reed my popular post</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-md-8">
              <div class="post">
                <h1>Post Title</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>

              <hr>

              <div class="post">
                <h1>Post Title</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>

              <hr>

              <div class="post">
                <h1>Post Title</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>
          </div>

            <div class="col-md-3 col-md-offset-1">
              <h2>Sidebar</h2>
            </div>
        </div>

    

  @endsection
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>