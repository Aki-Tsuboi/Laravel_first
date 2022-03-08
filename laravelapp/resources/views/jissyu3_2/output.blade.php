<html>
<head>
   <title>Jissyu/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <ol>
    @foreach($data as $item)
    @for($loop = 1 ; $loop < 4; $loop++)
    <p>データ一覧</p>
    <p>if($loop->first)</p>
    <li>No,{{$loop->iteration}}.{{$item}}</li>
    <p>if($loop->last)</p>
    <p>ここまで出力</p>
    @endif
    @endfor
    @endforeach
 </body>
</html>

