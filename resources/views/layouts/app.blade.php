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

    <style>
    body {
      font-family: 'Kanit', sans-serif;
    }
    </style>
  </head>

  <body>
    <nav class="w-5/6 border-4 mx-auto ">
      <ul class="flex gap-4 justify-center border-4">
        <li class="hover:text-red-700">
          หน้าหลัก
        </li>
        <li class="hover:text-red-700">
          หน้าโครงการ
        </li>
        <li class="hover:text-red-700">
          รายงานปัญหา
        </li>
      </ul>
    </nav>

    <div>
      <img src="https://hocothailand.co.th/wp-content/uploads/2019/06/bg-na7-1400x560.png" alt="">
    </div>
    @yield('content')

  </body>
</html>
