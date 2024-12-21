<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
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
    max-width: 600px;
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

/* Form Styles */
form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

form label {
    font-weight: bold;
    margin-bottom: 0.5rem;
}

form input[type="file"],
form textarea {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

form button {
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

    </style>
</head>
<body>
    <section class="container">
        <h1>Upload Your File</h1>
        <form action="/upload" method="POST" enctype="multipart/form-data">
            <!-- CSRF Token (for frameworks like Laravel) -->
            <!-- Uncomment the line below if using Laravel -->
            @csrf 

            <!-- File Input -->
            <div>
                <label for="file">Choose File</label>
                <input type="file" id="file" name="file" required>
            </div>

         

            <!-- Submit Button -->
            <button type="submit">Upload</button>
        </form>
    </section>
</body>
</html>

</div>
