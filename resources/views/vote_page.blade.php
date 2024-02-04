<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

</head>
<body>
    <h1>vote</h1>
    <div>
        <nav class="w-5/6 border-4 mx-auto ">
            <ul class="flex gap-4 justify-center border-4">
              <li class="hover:text-red-700">
                <a href="{{url('/home')}}">หน้าหลัก</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{url('/sugges')}}">หน้าเสนอเเนะ</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{url('/report')}}">รายงานปัญหา</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{url('/vote_page')}}">หน้าโครงการ</a>
              </li>
              <li class="hover:text-red-700 gap-4">
                <a href="{{url('/sign_in')}}">เข้าสู่ระบบ</a>
              </li>
            </ul>
        </nav>
    </div>
</body>
</html>