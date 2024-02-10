
@extends('layouts.Admin')

@section('title')
หัวข้อโครงการ
@endsection

@section('title_content')
<div>
    <h1 class="mt-10 text-center font-bold text-[25px]">หัวข้อโครงการ</h1>
</div>
@endsection

@section('content')
    <div class="w-5/6 mx-auto mt-20">
    <div class="grid grid-cols-4 gap-4">
        @foreach ($suggestions as $item)
        <a href="{{ route('result', $item->id) }}">
        <div class="border-4 shaddow-inner p-4 rounded-lg drop-shadow-lg w-full">
            <div class="font-bold text-[20px]">
                <h1>S.no : {{ $item->id }}</h1>
            <h2>Topic Name : {{ $item->topic_name }}</h2>
            <p>Detail : {{ $item->s_detail }}</p>
        </div>
        </div>
    </a>
        @endforeach
    </div>
</div>
@endsection
