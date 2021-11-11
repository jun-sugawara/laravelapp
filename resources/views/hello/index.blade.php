<html>
<head>
  <title>Hello/Index</title>
  <style>
  body { font-size:16px; color:#999 }
  h1 { font-size:50px; text-align:right; color:#f6f6f6; margin:-20px 0px -30px 0px; }
  </style>
</head>
  <body>
    <h1>Blade/Index</h1>
    <p>&#064;forディレクティブの部分</p>
    @foreach($data as $item)
    @if($loop->first)
    <p>※データ一覧</p>
    <ul>
    @endif
    <li>No,{{$loop->iteration}} . {{$item}}</li>
    @if($loop->last)
    </ul
    ><p>ーーーーーーーここまで</p>
    @endif
    @endforeach
      <form method="POST" action="/hello">
      @csrf
        <input type="text" name="msg">
        <input type="submit">
      </form>  
  </body>
</html>