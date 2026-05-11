<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 17: Required Attribute</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin: auto; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        
        input:required { border-left: 5px solid #d9534f; }
        input:valid { border-left: 5px solid #5cb85c; }
        
        button { margin-top: 20px; padding: 10px 15px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        .note { font-size: 0.9em; color: #666; margin-top: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Client-Side Validation</h2>
    <p class="note">Try clicking "Submit" without filling in the fields.</p>

    <form action="#" method="POST">
        <!-- The 'required' attribute triggers browser validation -->
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Submit Form</button>
    </form>
</div>

</body>
</html>