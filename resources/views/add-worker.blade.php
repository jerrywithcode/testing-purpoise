<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Worker</title>
    <link rel="stylesheet" href="styles/style.css"> 
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 2rem auto;
    padding: 1rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 1.5rem;
}

/* Form Styling */
form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

form div {
    display: flex;
    flex-direction: column;
}

form label {
    font-weight: bold;
    margin-bottom: 0.5rem;
}

form input,
form select {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

form button {
    grid-column: span 2;
    padding: 0.75rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    form {
        grid-template-columns: 1fr;
    }

    form button {
        grid-column: span 1;
    }
}

/* table */

/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 2rem auto;
    padding: 1rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 1.5rem;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1.5rem;
}

thead th {
    background-color: #007bff;
    color: white;
    text-align: left;
    padding: 0.75rem;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #f8f9fa;
}

tbody td {
    padding: 0.75rem;
    border: 1px solid #ddd;
}

/* Responsive Design */
@media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }

    thead tr {
        display: none;
    }

    tbody tr {
        margin-bottom: 1rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 0.5rem;
    }

    tbody td {
        display: flex;
        justify-content: space-between;
        padding: 0.75rem;
    }

    tbody td:before {
        content: attr(data-label);
        font-weight: bold;
        margin-right: 1rem;
        text-align: left;
    }
}


    </style>
</head>
<body>
    <section class="container">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @if (Session::has('success'))
           <div class="alert alert-info">{{ Session::get('success') }}</div>
        @endif
        <h1>Add New Worker</h1>
        <form action="{{ route('add-workers') }}" method="POST" class="grid">
            @csrf
            <!-- CSRF Token (for frameworks like Laravel) -->
            <!-- Uncomment the line below if using Laravel -->
            <!-- @csrf -->

            <!-- Full Name -->
            <div>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter worker's name" required>
            </div>

            <!-- Position -->
            <div>
                <label for="position">Position</label>
                <input type="text" id="position" name="position" placeholder="Enter worker's position" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter worker's email" required>
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter worker's phone number" required>
            </div>

            <!-- Department -->
            <div>
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">IT</option>
                    <option value="finance">Finance</option>
                    <option value="operations">Operations</option>
                </select>
            </div>

           

            <!-- Submit Button -->
            <button type="submit">Add Worker</button>


            
        </form>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML CSS Table</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <section class="container">
        <h1>Employee Table</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Join</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <th>{{ $data->id}}</th> <br>
                    <th>{{ $data->name}}</th> <br>
                    <th>{{ $data->position}}</th> <br>
                    <th>{{ $data->email}}</th>
                    <th>{{ $data->phone}}</th>
                    <th>{{ $data->department}}</th>
                    <th>{{ $data->created_at}}</th>
                </tr> 
               @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>

    </section>
</body>
</html> 
