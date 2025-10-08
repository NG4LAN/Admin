<?php
$this->layout('Layout', ['mainContent' => $this->fetch('Layout')]);
$this->start('mainContent');
$this->insert('Errors/Toasts');
?>

<!-- Add your content here to be displayed in the browser -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Subject - CKC Information Technology</title>
    <link rel="icon" href="logo.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
      <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

   
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-blur fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <i class="bi bi-journal-text"></i>
                Christ the King College
            </a>
            <div class="ms-auto d-flex align-items-center gap-3">
                <span class="navbar-text d-none d-md-block">jatis@ckcgingoog.edu.ph</span>
                <div class="dropdown">
                    <a href="#" class="text-light position-relative" id="notifDropdown" data-bs-toggle="dropdown">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                    </a>
                </div>
                <img src="/img/juswa.jpg" class="rounded-circle" width="36" height="36" alt="Prof. Atis">
            </div>
        </div>
    </nav>

    <nav class="sidebar d-none d-lg-flex flex-column">
        <li class="nav-item mb-2">
            <a href="/DashboardView" class="nav-link text-white">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#facultyMenu">
                <span><i class="bi bi-person-badge me-2"></i>Faculty</span>
                <i class="bi bi-caret-down-fill small"></i>
            </a>
            <div class="collapse ps-3" id="facultyMenu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/AddFacultyView" class="nav-link text-white-50">
                            <i class="bi bi-person-plus me-2"></i> Add Faculty
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ViewFaculty" class="nav-link text-white-50">
                            <i class="bi bi-people me-2"></i> Manage Faculty
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item mb-2">
            <a class="nav-link active d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#subjectMenu">
                <span><i class="bi bi-journal-text me-2"></i> Subject</span>
                <i class="bi bi-caret-down-fill small"></i>
            </a>
            <div class="collapse show ps-3" id="subjectMenu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/AddSubjectView" class="nav-link text-white-50">
                            <i class="bi bi-plus-circle me-2"></i> Add Subject
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ViewSubjects" class="nav-link text-white">
                            <i class="bi bi-list-check me-2"></i> Manage Subject
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item mt-3">
            <a href="logout.php" class="nav-link text-danger">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </li>
    </nav>

    <main class="main-content">
        <div class="container">
            <h2>Manage Subject</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active text-light">Dashboard / Manage Subject</li>
                </ol>
            </nav>

            <div class="table-container mt-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                
                                <th>Subject Code</th>
                                <th>Subject Name</th>
                                <th>Year Level</th>
                                <th>Semester</th>
                                <th>Units</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($subjects as $s): ?>
                                <tr>
                                    
                                    <td><?= htmlspecialchars($s['subject_code']); ?></td>
                                    <td><?= htmlspecialchars($s['subject_name']); ?></td>
                                    <td><?= htmlspecialchars($s['year_level']); ?></td>
                                    <td><?= htmlspecialchars($s['semester']); ?></td>
                                    <td><?= htmlspecialchars($s['credit_units']); ?></td>
                                    <td><a href="/ViewSubjects/UpdateSubjectView/<?= htmlspecialchars($s['id']) ?>"><button class="btn btn-edit">Edit</button></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="mt-4">
                <p>© 2025 <span>Christ the King College</span>. All rights reserved.</p>
            </footer>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
$this->stop();
?>