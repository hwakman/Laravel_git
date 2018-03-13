<heml>
<head>
</head>
<body>
  <form action="insert" method="post">
    <label>
      <input type="text" name="name" placeholder=" please input name">
    </label>
    <input type="submit" value="commit">
  </form>
  @foreach($user as $row)
  {{$row->name}} <a href="/del?name={{$row->name}}">delete</a><br>
  @endforeach
</body>
</html>
