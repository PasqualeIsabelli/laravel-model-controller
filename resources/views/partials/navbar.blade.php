<?php
$navlinks = ['HOME', 'FILM', 'SERIE TV', 'TV', 'CHI SIAMO', 'CONTATTI'];
?>

<main class="main-navbar">
  <div class="container d-flex justify-content-between">
    <img class="logo" src="/img/logo.svg">
    <ul class="nav d-flex align-items-center gap-3">
      @foreach ($navlinks as $link)
        <li><a href="#0" class="fw-bold gap-3 text-decoration-none navbar-links">{{ $link }}</a></li>
      @endforeach
    </ul>
    <div class="d-flex align-items-center">
      <input style="max-width: 250px" type="text" class="form-control" placeholder="Search">
      <button class="btn btn-outline-light" type="button"><i class="fa-solid fa-magnifying-glass" style="color: #currentColor;"></i></button>
    </div>
  </div>
</main>
