<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="<?=url('/')?>">
      <img
        src="<?= asset('asset/img/StadiumStream.png')?>"
        height="30"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="<?=url('/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=url('Team')?>">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=url('/')?>">Home</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
          Login
        </button>
        <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
          Sign up for free
        </button>
        <a
          data-mdb-ripple-init
          class="btn btn-dark px-3"
          href=""
          role="button"
          ><i class="fab fa-github"></i
        ></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<script>
    // Initialization for ES Users
import { Collapse, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Collapse, Ripple });
</script>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo url('/') ?>">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('post') ?>">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->