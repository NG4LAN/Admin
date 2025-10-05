<?php 
$this->layout('Layout', ['mainContent' => $this->fetch('Layout')]);
$this->start('mainContent');
$this->insert('Errors/Toasts');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Faculty</title>
    <link rel="stylesheet" href="styles.css"> <!-- optional -->
</head>
<body>
    <h2>Add Faculty</h2>
    <form action="/AddFacultySubmit" method="POST">
        <label>First Name:</label>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="">-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        
        </select><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>ID Number:</label>
        <input type="text" name="id_number" placeholder="c25-4033" required><br><br>

        <button type="submit">Add Faculty</button>
    </form>
</body>
</html>

</body>
</html>

<?php
$this->stop();
?>