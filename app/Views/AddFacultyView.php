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
    

    
</head>

<body>

    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-blur fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <i class="bi bi-building"></i>
                Christ the King College
            </a>

            <!-- Toggle Button for Offcanvas -->
            <button class="btn btn-outline-light d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                <i class="bi bi-list fs-4"></i>
            </button>

            <div class="ms-auto d-flex align-items-center gap-3">
                <span class="navbar-text d-none d-md-block">jatis@ckcgingoog.edu.ph</span>

                <!-- Notifications Dropdown -->
                <div class="dropdown">
                    <a href="#" class="text-light position-relative" id="notifDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="notifBadge">2</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg p-2" aria-labelledby="notifDropdown" style="min-width: 320px;">
                        <li class="dropdown-item d-flex justify-content-between align-items-start">
                            <div>
                                <small class="fw-bold">Student Application</small><br>
                                <span>A student wants to join your subject.</span>
                            </div>
                            <div class="ms-2 d-flex gap-1">
                                <button class="btn btn-sm btn-success btn-confirm">Confirm</button>
                                <button class="btn btn-sm btn-danger btn-delete">Delete</button>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-item d-flex justify-content-between align-items-start">
                            <div>
                                <small class="fw-bold">Admin Update</small><br>
                                <span>Admin confirmed you in the subject.</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <img src="/img/juswa.jpg" class="profile-pic" alt="Prof. Atis" />
            </div>
        </div>
    </nav>

    <!-- Sidebar (Desktop) -->
      <nav class="sidebar d-none d-lg-flex flex-column">
    <li class="nav-item mb-2">
      <a href="/DashboardView" class="nav-link text-white">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#teacherMenu" role="button" aria-expanded="false" aria-controls="teacherMenu">
        <span><i class="bi bi-person-badge me-2"></i>Faculty</span>
        <i class="bi bi-caret-down-fill small"></i>
      </a>

      <!-- Dropdown Items -->
      <div class="collapse ps-3" id="teacherMenu">
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
      <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#subjectMenu" role="button" aria-expanded="false" aria-controls="subjectMenu">
        <span><i class="bi bi-journal-text me-2"></i> Subject</span>
        <i class="bi bi-caret-down-fill small"></i>
      </a>

      <div class="collapse ps-3" id="subjectMenu">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="/AddSubjectView" class="nav-link text-white-50">
              <i class="bi bi-plus-circle me-2"></i> Add Subject
            </a>
          </li>
          <li class="nav-item">
            <a href="/ViewSubjects" class="nav-link text-white-50">
              <i class="bi bi-list-check me-2"></i> Manage Subject
            </a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Logout -->
    <li class="nav-item mt-3">
      <a href="logout.php" class="nav-link text-danger">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
      </a>
    </li>
  </nav>


    </div>

    <!-- Main Content -->
    <div class="header">
        <h4>Admin</h4>
    </div>

    <div class="main-content d-flex justify-content-center align-items-center">
        <div class="card-glass-form p-5 shadow-lg">
            <h3 class="mb-4 text-center fw-bold text-white">Add Faculty</h3>

            <form action="/AddFacultySubmit" method="POST">
                <div class="mb-3">
                    <label class="form-label text-light">First Name:</label>
                    <input type="text" name="first_name" class="form-control input-glass" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Last Name</label>
                    <input type="text" name="last_name" class="form-control input-glass" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Password</label>
                    <input type="password" name="password" class="form-control input-glass" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Email</label>
                    <input type="email" name="email" class="form-control input-glass" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Mobile Number</label>
                    <input type="mobile number" name="email" class="form-control input-glass" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Gender</label>
                    <select name="gender" class="form-select input-glass" required>
                        <option value="">-- Select Gender --</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">ID Number</label>
                    <input type="text" name="id_number" class="form-control input-glass" placeholder="c25-4033" required>
                </div>

                <!-- Optional Photo Upload
      <div class="mb-3">
        <label class="form-label text-light">Upload Faculty Photo (150x150)</label>
        <input type="file" name="photo" class="form-control input-glass">
      </div>
      -->

                <div class="text-center mt-4">
                    <button type="submit" name="save" class="btn btn-info text-white px-4 me-2">Save</button>
                    <button type="reset" class="btn btn-outline-light px-4">Reset</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Logic -->
    <script>
        const DB = {
            mySubjects: [{
                code: 'CS101',
                title: 'Intro to CS',
                units: 3
            }],
            pending: [{
                code: 'MATH200',
                title: 'Calculus II',
                units: 4,
                applicants: 2
            }],
            notifications: 2,
            activity: [
                'You approved 2 students for CS101',
                'New application for MATH200'
            ]
        };

        function renderDashboard() {
            document.getElementById('countMySubjects').textContent = DB.mySubjects.length;
            document.getElementById('countPending').textContent = DB.pending.length;
            document.getElementById('countNotifs').textContent = DB.notifications;

            const activityList = document.getElementById('activityList');
            activityList.innerHTML = '';
            DB.activity.forEach(item => {
                const li = document.createElement('li');
                li.className = 'list-group-item';
                li.textContent = item;
                activityList.appendChild(li);
            });
        }

        renderDashboard();

        // Handle notification actions
        document.querySelectorAll(".btn-confirm").forEach(btn => {
            btn.addEventListener("click", () => {
                alert("Student confirmed!");
            });
        });

        document.querySelectorAll(".btn-delete").forEach(btn => {
            btn.addEventListener("click", () => {
                alert("Request deleted!");
            });
        });
    </script>

</body>

</html>

<?php
$this->stop();
?>