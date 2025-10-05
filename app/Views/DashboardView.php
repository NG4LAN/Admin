<?php 
$this->layout('Layout', ['mainContent' => $this->fetch('Layout')]);
$this->start('mainContent');
$this->insert('Errors/Toasts');
?>

<!-- Add your content here to be displayed in the browser -->
<a href="/AddFacultyView">Go to Add Faculty Page</a>
<a href="/AddSubjectView">Go to Add Subject Page</a>
<a href="/ViewFaculty">Go to Add Subject Page</a>
<a href="/UpdateFacultyView">Go to UPDATE Subject Page</a>



<?php
$this->stop();
?>