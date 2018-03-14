<heml>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
  <div class="col-lg-4"></div>
  <div class="col-lg-4 well">
    <form class="form-inline" action="insert" method="post">
      <table class="table" style="text-align:center">
        <tr>
          <td colspan="3">
            <input class="form-control" type="text" name="name" placeholder=" Please input name">
            <input class="btn" type="submit" value="Create">
          </td>
        </tr>
        @foreach($user as $row)
        <tr>
          <td>{{$row->name}}</td>
          <td><a href="/update?name={{$row->name}}">UPDATE</a></td>
          <td><a href="/del?name={{$row->name}}" onclick="return confirm('are you sure ?')">DELETE</a></td>
        </tr>
        @endforeach
      </table>
    </form>
  </div>
  <div class="col-lg-4"></div>
</body>
</html>
