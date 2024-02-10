@extends('layouts.user')

@section('title')
Sugges Page
@endsection

@section('content')
<div class="w-full h-screen bg-[url('https://scontent.fbkk5-8.fna.fbcdn.net/v/t39.30808-6/247395801_2133515363470821_3085529991713268643_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeHPye27FAA1lA94SRYDcB7naJ-XHUGa2x9on5cdQZrbH_lOY2NPZhE-HuI9etrLSiytWiD6-DyhhCU47gP9vW7C&_nc_ohc=9ri-VrdA8KsAX99bbrU&_nc_ht=scontent.fbkk5-8.fna&oh=00_AfDsxgI47Zo3vEzIu-lZ5nUlmLFltymbtrPcEa0C8FP66A&oe=65CC91A3')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
    <div class="my-4 mx-auto bg-[#7c7d7d]/90 p-4">
        <h1 class="text-[40px] font-heading font-bold ml-4">เสนอความต้องการออนไลน์ภายในหมู่บ้าน</h1>
        <div class="bg-[#e6a502] w-8/12 h-76 ml-4 p-2 rounded mt-4">
            <div>
                <h1 class="text-[30px] font-bold">กติกาในการเสนอ !</h1>
            </div>
            <div>
                <h2 class="text-[20px] font-bold mt-2">
                    1.ลงทะเบียนผู้ใช้</br>
                    2.เข้าสู่ระบบ</br>
                    3.เสนอหัวข้อ</br>
                    4.ทำการโหวด</br>
                    5.รอผลสรุปการโหวด</br>
                    6.ดำเนินโครงการตามผลโหวดที่ลูกบ้านทำการโหวด
                </h2>
            </div>
        </div>
        <a href="{{ route('sugges.create') }}">
        <div class="bg-[#e69100] flex items-center gap-4 p-2 my-4 ml-4 w-52 h-12 hover:bg-[#dd5f22] rounded drop-shadow-xl">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-[20px] font-bold">เเจ้งปัญหาออนไลน์</h2>
            </div>
        </div>
        </a>
        @if ($message = Session::get('success'))
            <div class="bg-[#3abd55]/90 p-2 text-[14px] rounded font-bold">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
</div>
</div>
@endsection
