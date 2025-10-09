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
    <link rel="stylesheet" href="/css/style.css">
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
            <a href="Index.php" class="nav-link text-white">
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
                        <a href="AddFacultyView.php" class="nav-link text-white-50">
                            <i class="bi bi-person-plus me-2"></i> Add Faculty
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ViewFaculty.php" class="nav-link text-white-50">
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
                        <a href="addSubject.php" class="nav-link text-white-50">
                            <i class="bi bi-plus-circle me-2"></i> Add Subject
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Manage_Subject.php" class="nav-link text-white">
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

    <main class="main-content d-flex justify-content-center align-items-center vh-100">
        <div class="card-glass-form p-5 mt-5">
            <h3 class="mb-4 text-center fw-bold text-light">Update Subject</h3>

            <form action="/ViewSubjects/UpdateSubjectView/<?= htmlspecialchars($subjects['id']); ?>/Update" method="POST">

                <div class="mb-3">
                    <label class="form-label text-light">Subject Code</label>
                    <input type="text" name="subject_code" class="form-control input-glass"
                        value="<?= htmlspecialchars($subjects['subject_code']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Subject Name</label>
                    <input type="text" name="subject_name" class="form-control input-glass"
                        value="<?= htmlspecialchars($subjects['subject_name']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Year Level</label>
                    <select name="year_level" class="form-select input-glass" required>
                        <option value="1st Year" <?= $subjects['year_level'] === '1st Year' ? 'selected' : ''; ?>>1st Year</option>
                        <option value="2nd Year" <?= $subjects['year_level'] === '2nd Year' ? 'selected' : ''; ?>>2nd Year</option>
                        <option value="3rd Year" <?= $subjects['year_level'] === '3rd Year' ? 'selected' : ''; ?>>3rd Year</option>
                        <option value="4th Year" <?= $subjects['year_level'] === '4th Year' ? 'selected' : ''; ?>>4th Year</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Semester</label>
                    <select name="semester" class="form-select input-glass" required>
                        <option value="1st Semester" <?= $subjects['semester'] === '1st Semester' ? 'selected' : ''; ?>>1st Semester</option>
                        <option value="2nd Semester" <?= $subjects['semester'] === '2nd Semester' ? 'selected' : ''; ?>>2nd Semester</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Credit Units</label>
                    <input type="number" name="credit_units" class="form-control input-glass"
                        value="<?= htmlspecialchars($subjects['credit_units']); ?>" min="0" step="0.5" required>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-info text-white px-4 me-2">
                        <i class="bi bi-arrow-repeat me-1"></i> Update
                    </button>
                    <a href="/ViewSubjects" class="btn btn-outline-light px-4">Cancel</a>
                </div>
            </form>
        </div>


    </main>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$this->stop();
?>