@extends('master')
@section('content')
<h2 class="my-5 font-bold text-xl text-center">Home Page for {{$name}}</h2>
<img src="{{ asset('images/imgs.jpg') }}" alt="">
    <div class="grid grid-cols-2 gap-6 mx-36">
        <div class="bg-green-300 p-4 rounded-lg">
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
        </div>

        <div class="bg-green-300 p-4 rounded-lg">
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
        </div>

        <div class="bg-green-300 p-4 rounded-lg">
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
        </div>

        <div class="bg-green-300 p-4 rounded-lg">
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
        </div>
    </div>
@endsection