<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with Table and Search</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f9f9f9;
    }

    .container {
      max-width: 900px;
      margin: auto;
    }

    .form-container, .table-container {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="file"] {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    .form-group button:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #f4f4f4;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .search-container input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .action-buttons button {
      padding: 5px 10px;
      margin-right: 5px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .view-btn { background-color: #28a745; color: #fff; }
    .edit-btn { background-color: #ffc107; color: #fff; }
    .delete-btn { background-color: #dc3545; color: #fff; }
  </style>
</head>
<body>

<div class="container">
  <!-- Form Section -->
  <div class="form-container">
    <h2>Submit Your Details</h2>
      <!-- Form submited message -->
      @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif

    <form id="userForm" action="add/public" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" required>
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" placeholder="Enter your city" required>
      </div>

      <button type="submit">Add User</button>
    </form>
  </div>

  <!-- Table Section -->
  <div class="table-container">
    <h2>Users Table</h2>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search..." onkeyup="searchTable()">
    </div>
    <table id="usersTable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>City</th>
          <th>View</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
       
        <tr>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td><a href="https://www.w3schools.com">view</a></td>
          <td><a href="https://www.w3schools.com">edit</a></td>
          <td><a href="https://www.w3schools.com">delete</a></td>
        </tr>
      </tbody>

    </table>
  </div>
</div>

</body>
</html>
