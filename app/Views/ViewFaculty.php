<?php 
$this->layout('Layout', ['mainContent' => $this->fetch('Layout')]);
$this->start('mainContent');
$this->insert('Errors/Toasts');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Faculty List</h2>

    <?php if (!empty($faculties)): ?>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>ID Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faculties as $faculty): ?>
                    <tr>
                        <td><?= htmlspecialchars($faculty['id']) ?></td>
                        <td><?= htmlspecialchars($faculty['id_number']) ?></td>
                        <td><?= htmlspecialchars($faculty['first_name']) ?></td>
                        <td><?= htmlspecialchars($faculty['last_name']) ?></td>
                        <td><?= htmlspecialchars($faculty['gender']) ?></td>
                        <td><?= htmlspecialchars($faculty['email']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            No faculty records found.
        </div>
    <?php endif; ?>
</div>

<?php
$this->stop();
?>
