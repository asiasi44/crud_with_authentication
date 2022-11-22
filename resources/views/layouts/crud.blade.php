<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <a href = '/home'><img height = '50' src= "/home.png"></a>
<div class="container">
  <h2>Crud</h2>    
    <h2>
        <a class = "btn btn-info" href="/crud_creater">New Data</a>
    </h2>
  <table class="table">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Roll<th>
        <th>Stream</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cruds as $crud)
        <tr>
            <td>{{ $loop -> index + 1}}</td>
            <td>{{ $crud -> Name}}</td>
            <td>{{ $crud -> Roll}}</td>
            <td></td>
            <td>{{ $crud -> Stream}}</td>
            <td>
                <a href= "/crud_edit/{{$crud->id}}" class ="btn btn-sm btn-info">Edit</a>
                <a href="/crud_delete/{{$crud->id}}" class ='btn btn-sm btn-danger'>Delete</a>
            <td>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
