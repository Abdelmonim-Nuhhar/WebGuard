{{-- Extend the base layout --}}
@extends('layouts.new-app')

{{-- Start the section for the login content --}}
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Security News</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .news-article {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            background-color: #333;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        .news-article::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            z-index: 1;
            transition: background 0.2s ease-in-out;
        }
        .news-article:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .news-article:hover::before {
            background: rgba(0, 0, 0, 0.7);
        }
        .news-article h2, .news-article p, .news-article a {
            position: relative;
            z-index: 2;
            color: white;
        }
        .news-article a {
            color: #adff2f;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }
        .news-article a:hover {
            color: #fff;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Website Security and Vulnerabilities News</h1>
    <div class="news-container">
        @foreach($news as $article)
            @php
                $imageUrl = $article['image']['thumbnail']['contentUrl'] ?? null;
            @endphp
            <div class="news-article" style="background-image: url('{{ $imageUrl }}');">
                <h2>{{ $article['name'] }}</h2>
                <p>{{ $article['description'] }}</p>
                <a href="{{ $article['url'] }}" target="_blank">Read more</a>
            </div>
        @endforeach
    </div>
</body>
</html>

{{-- End the section for the login content --}}
@endsection
