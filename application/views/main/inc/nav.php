<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" id="header">Hey <?php echo $_SESSION['username']; ?></a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" id="list">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('main') ?>">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('resume_con/add_emp'); ?>">Add new</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('login/logout'); ?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>