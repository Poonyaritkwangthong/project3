<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
    body {
      font-family: 'Kanit', sans-serif;
    }
    </style>
  </head>

  <body>
    <div>
        <nav class="w-5/6  mx-auto p-4 ">
            <ul class="flex gap-4 justify-center ">
              <li class="hover:text-red-700">
                <a href="{{url('/customer')}}">Customer</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{url('/news')}}">News</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{ url('/problem') }}">Problem</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{url('/suggestion')}}">Suggestion</a>
              </li>
              <li class="hover:text-red-700 gap-4">
                <a href="{{url('/vote')}}">Vote</a>
              </li>
              <li class="hover:text-red-700 gap-4">
                <a href="{{url('/user_vote')}}">User Vote</a>
              </li>
            </ul>
        </nav>
    </div>
    @yield('title_img')
    @yield('title_content')
    @yield('content')

  </body>
</html>
