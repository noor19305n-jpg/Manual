<!DOCTYPE html>
<html lang="en">
<head>
  <title>AJAX CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
  <h2 class="mb-3">AJAX CRUD Operations</h2>

  <input type="hidden" id="id">

  <input type="text" id="name" class="form-control mb-2" placeholder="Name">
  <input type="email" id="email" class="form-control mb-2" placeholder="Email">

  <button class="btn btn-primary" onclick="insertData()">Save</button>
  <button class="btn btn-warning" onclick="updateData()">Update</button>

  <table class="table mt-4">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="tableData"></tbody>
  </table>
</div>

<script src="script.js"></script>
</body>
</html>