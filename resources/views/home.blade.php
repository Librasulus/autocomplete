<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styling -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="main m-b-md">
                  <h2>Search for a user:</h2>
                  <form method="POST" action="/result">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="firstname">First name:</label>
                      <input type="text" class="form-control" id="firstname" name="firstname"  placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                      <label for="lastname">Last name:</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <input type="hidden" name="id">
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
                </div>
                @include('errors')
            </div>
        </div>
    </body>
</html>
