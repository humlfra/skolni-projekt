<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabulka navstev</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">Tabulka navstev</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID navštěvy</th>
        <th>Popis</th>
        <th>Vytvořeno</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($navstevy as $navsteva)
      <tr>
      <td>{{ $navsteva->id_navstevy }}</td>
      <td>{{ $navsteva->popis }}</td>
      <td>{{ $navsteva->created_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>