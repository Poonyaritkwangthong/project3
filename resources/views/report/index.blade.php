@extends('layouts.app')

@section('title')
Report Page
@endsection

@section('content')
<div class="w-full h-screen bg-[url('https://scontent.fbkk5-8.fna.fbcdn.net/v/t39.30808-6/247395801_2133515363470821_3085529991713268643_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeHPye27FAA1lA94SRYDcB7naJ-XHUGa2x9on5cdQZrbH_lOY2NPZhE-HuI9etrLSiytWiD6-DyhhCU47gP9vW7C&_nc_ohc=9ri-VrdA8KsAX99bbrU&_nc_ht=scontent.fbkk5-8.fna&oh=00_AfDsxgI47Zo3vEzIu-lZ5nUlmLFltymbtrPcEa0C8FP66A&oe=65CC91A3')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
@if ($message = Session::get('success'))
<div class="bg-[#3abd55]/90 p-2 text-[14px] rounded font-bold">
    <p>{{ $message }}</p>
</div>
@endif
  <div class="my-4 mx-10 ">
        <h1 class="text-[60px] font-heading font-bold ml-10">เเจ้งปัญหาออนไลน์ในหมู่บ้าน</h1>
        <a href="{{ route('report.create') }}">
        <div class="bg-[#e69100] flex items-center gap-4 p-4 my-4 ml-4 w-1/4 hover:bg-[#dd5f22] rounded drop-shadow-xl">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-[30px] font-bold">เเจ้งปัญหาออนไลน์</h2>
            </div>
        </div>
        </a>
        <div class="bg-[#31ad82] flex items-center gap-4 p-4 my-4 ml-4 w-1/4 rounded drop-shadow-xl">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="w-10 h-10" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                  </svg>
            </div>
                 <div>
                    <h2 class="text-[30px] font-bold">โทร 089-250-4424</h2>
                </div>
            </div>
    </div>
  </div>
</div>
</div>


@endsection
