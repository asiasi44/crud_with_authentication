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
<div class = "container pt-5">
<h2>New Category</h2>
</div>
<form method= "POST" action="/crud_store">
        @csrf
    <label>Name:</label>
    <input type="text" name = 'name' class= 'form-control'/>
    <label>Roll:</label>
    <input type='text' name = 'roll' class= 'form-control'>
    <label>Stream:</label><br>
    <input type="radio" id="BSc" name="stream" value="BSc Csit">
    <label for="BSc Csit">BSc Csit</label><br>
    <input type="radio" id="BCA" name="stream" value="BCA">
    <label for="BCA">BCA</label><br>
    <button class="btn btn-info mt-4" type="submit">Create</button>
</form>


</body>
</html>
