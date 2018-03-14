<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="col-lg-4"></div>
  <div class="col-lg-4 well">
    <form method="post" action="updateCommit">
      <table class="table" style="text-align:center">
        <tr>
          <td>Old name</td>
          <td><input style="pointer-events:none" type="text" name="old_name" value="{{$name}}"></td>
        </tr>
        <tr>
          <td>New name</td>
          <td><input type="text" name="new_name"></td>
        </tr>
        <tr>
          <td><a href="/member"><input class="btn" type="button" value="Back"></a></td>
          <td><input class="btn" type="submit"></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="col-lg-4"></div>
</body>
</html>
