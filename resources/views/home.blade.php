<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <title>HomePage</title>
</head>
<body class="bg-blend-lighten md:bg-blend-darken">
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
        <div class="mt-8">
            <h1 class="text-center text-4xl">
                ประชาสัมพันธ์
            </h1>
        </div>
        <div  class="snap-x mt-8">
          <div class="h-2/4 w-2/4 mx-auto" >
            <div class="snap-center">
                <img src="https://www.antifakenewscenter.com/wp-content/uploads/2023/05/Website-6-scaled.webp" alt="">
            </div>
            <div class="snap-center ">
                <img src="https://img.pptvhd36.com/thumbor/2024/01/05/news-e76e062.jpg" alt="">
            </div>
            <div class="snap-center ">
                <img src="https://www.tqm.co.th/gallery/7212.jpg" alt="">
            </div>
            <div class="snap-center ">
                <img src="https://www.tcc.or.th/wp-content/uploads/2022/05/%E0%B9%80%E0%B8%95%E0%B8%B7%E0%B8%AD%E0%B8%99%E0%B8%A0%E0%B8%B1%E0%B8%A2-template-01.png" alt="">
            </div>
          </div>
        </div>
</body>
</html>