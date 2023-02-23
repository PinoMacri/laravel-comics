@extends('layouts.template')

@section("title","Home")

@section("main")
<div class="jumbotron">
    <div class="container">
        <button class="type-1">CURRENT SERIES</button>
    </div>
</div>
<main>
    <div class="container">
        <ul class="row">
            @foreach ($comics as $comic)
            <li class="col">
                <img src="{{$comic["thumb"]}}" alt="title">
                <h5>{{$comic["series"]}}</h5>
            </li>
            @endforeach
        </ul>
        <div class="buttons">
            <button class="basic-style" :class="type">
                LOAD MORE
            </button>
        </div>
    </div>
    <div id="listMain">
        <nav class="container">
            <ul>
                @foreach($images as $image)
                <li class="col">
                    <div class="containerList">
                        <div class="imgList">
                            <img src="{{Vite::asset("../../public/images/$image[img]")}}" alt="">
                        </div>
                        <div class="textList">
                            <p>{{ $image["text"] }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</main>
@endsection

