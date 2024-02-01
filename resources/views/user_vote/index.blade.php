
@extends('layouts.app')

@section('title')
หัวข้อโครงการ
@endsection

@section('content')
    <div class="w-5/6 mx-auto my-4">
    <div class="grid grid-cols-4 gap-4">
        @foreach ($suggestions as $item)
        <a href="{{ route('result', $item->id) }}">
        <div class="border-4 shaddow-inner p-4 rounded-lg drop-shadow-lg w-full">
            <div class="">
            <h1>{{ $item->topic_name }}</h1>
            <p>{{ $item->s_detail }}</p>
        </div>
        </div>
    </a>
        @endforeach
    </div>
</div>
@endsection
   