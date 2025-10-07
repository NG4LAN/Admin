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


    <h2>Update Faculty</h2>

    <form action="/ViewFaculty/UpdateFaculty/<?= htmlspecialchars($faculty['id']); ?>/Update" method="POST">

        <label>First Name:</label>
        <input type="text" name="first_name" value="<?= htmlspecialchars($faculty['first_name']); ?>" required><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?= htmlspecialchars($faculty['last_name']); ?>" required><br>
<!-- 
        <label>Password (leave blank to keep current):</label>
        <input type="password" name="password"><br> -->

        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male" <?= $faculty['gender'] === 'Male' ? 'selected' : ''; ?>>Male</option>
            <option value="Female" <?= $faculty['gender'] === 'Female' ? 'selected' : ''; ?>>Female</option>
        </select><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($faculty['email']); ?>" required><br>

        <label>ID Number:</label>
        <input type="text" name="id_number" value="<?= htmlspecialchars($faculty['id_number']); ?>" required><br>

        <button type="submit">Update Faculty</button>
    </form>


</body>

</html>


<?php
$this->stop();
?>