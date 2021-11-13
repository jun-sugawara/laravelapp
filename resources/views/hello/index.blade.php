<!-- <html>
<head>
  <title>Hello/Index</title>
  <style>
  body { font-size:16px; color:#999 }
  h1 { font-size:50px; text-align:right; color:#f6f6f6; margin:-20px 0px -30px 0px; }
  </style>
</head>
  <body>
    <h1>Blade/Index</h1>
    <p>&#064;whileディレクティブの例</p>
    <ol>
      @php 
      $counter = 0;
      @endphp
      @while($counter < count($data))
      <li>{{$data[$counter]}}</li>
      @php
      $counter++;
      @endphp
      @endwhile
    </ol>
</html> -->
@extends('layouts.helloapp')
@section('title', 'Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです</p>
  <p>必要なだけ記述できます</p>
@endsection

@section('footer')
copyright 2021 jun-sugawara
@endsection
