<?php
$this->layout('Layout', ['mainContent' => $this->fetch('Layout')]);
$this->start('mainContent');
$this->insert('Errors/Toasts');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS and Icons -->
     <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0d2a4e;
            color: #e0f0ff;
            overflow-x: hidden;
            position: relative;
            min-height: 100vh;
            z-index: 0;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/img/bg.jpg') no-repeat center center/cover;
            filter: blur(10px) brightness(0.6);
            z-index: -1;
        }

        .navbar-blur {
            background: rgba(0, 44, 89, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(74, 200, 224, 0.15);
        }

        .navbar-blur .navbar-brand {
            color: #4ac8e0;
            font-weight: 600;
        }

        .navbar-blur .nav-link,
        .navbar-blur .navbar-text {
            color: #cde9fb;
        }

        .sidebar {
            background: rgba(4, 66, 121, 0.75);
            backdrop-filter: blur(12px);
            height: 100vh;
            width: 240px;
            position: fixed;
            top: 56px;
            left: 0;
            padding-top: 1rem;
            border-right: 1px solid rgba(74, 200, 224, 0.15);
            z-index: 1020;
            display: none;
            flex-direction: column;
        }

        .sidebar a {
            color: #a6d1f7;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-weight: 500;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: rgba(74, 200, 224, 0.25);
            border-left: 4px solid #4ac8e0;
            padding-left: 16px;
            color: #d1f0ff;
        }

        .main-content {
            margin-left: 240px;
            padding: 90px 30px 30px;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                display: none !important;
            }

            .main-content {
                margin-left: 0;
                padding: 90px 15px 20px;
            }
        }

        .profile-pic {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #4ac8e0;
        }

        .card-glass {
            background: rgba(74, 200, 224, 0.15);
            border: 1px solid rgba(74, 200, 224, 0.3);
            backdrop-filter: blur(14px);
            border-radius: 20px;
            padding: 20px;
            color: #e0f0ff;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: transform 0.2s ease-in-out;
        }

        .card-glass:hover {
            transform: translateY(-4px);
        }

        .metric-icon {
            font-size: 2.8rem;
            flex-shrink: 0;
            color: #4ac8e0;
        }

        .card-title {
            font-weight: 500;
            font-size: 1rem;
            color: #b2d4ec;
        }

        .card-value {
            font-size: 2rem;
            font-weight: bold;
            color: #ffffff;
        }

        .activity-list li {
            background: transparent;
            border-color: rgba(74, 200, 224, 0.25);
            color: #a7cce5;
        }

        #mobileSidebar a {
            color: #a6d1f7;
            text-decoration: none;
        }

        a {
            color: #a6d1f7;
            text-decoration: none;
        }

        #mobileSidebar a:hover,
        #mobileSidebar a:focus {
            color: #d1f0ff;
            text-decoration: none;
        }

        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-content {
            min-height: 100vh;
            margin-left: 240px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .card {
            width: 70%;
            max-width: 850px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card h4 {
            font-weight: 600;
            color: #333;
        }

        label {
            font-weight: 500;
        }

        .btn-warning {
            background-color: #ffb700;
            border: none;
        }

        .btn-warning:hover {
            background-color: #f0a500;
        }

        @media (max-width: 992px) {
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>




    <!-- Main Content -->
    <div class="main-content d-flex justify-content-center align-items-center">
        <div class="card p-5 bg-white w-50 shadow-lg">
            <h4 class="mb-4 text-center fw-bold text-dark">Add Subject</h4>

            <form action="/AddSubjectSubmit" method="POST">

                <div class="mb-3">
                    <label class="form-label">Subject Code</label>
                    <input type="text" name="subject_code" class="form-control" placeholder="e.g. IT101" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Subject Name</label>
                    <input type="text" name="subject_name" class="form-control" placeholder="e.g. Introduction to IT" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <select name="semester" class="form-select" required>
                        <option value="">Select Semester</option>
                        <option>1st Semester</option>
                        <option>2nd Semester</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Year Level</label>
                    <select name="year_level" class="form-select" required>
                        <option value="">Select Year Level</option>
                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                        <option>4th Year</option>
                    </select>
                </div>

                <!-- ✅ FIXED: Changed name="units" to name="credit_units" -->
                <div class="mb-3">
                    <label class="form-label">Credit Units</label>
                    <input type="number" name="credit_units" class="form-control" placeholder="e.g. 3">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" name="save" class="btn btn-warning text-white px-4 me-2">Save</button>
                    <button type="reset" class="btn btn-secondary px-4">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$this->stop();
?>