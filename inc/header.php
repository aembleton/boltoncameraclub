<?
    $about_us_active = "";
    $syllabus_active = "";
    $competition_results_active = "";
    switch($page) {
        case "about-us" : $about_us_active = "active"; break;
        case "syllabus" : $syllabus_active = "active"; break;
        case "competition-results" : $competition_results_active = "active"; break;
    }
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41472909-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-41472909-1');
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title><? echo $title ?></title>
    </head>
    <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="http://www.boltoncameraclub.co.uk/templates/shape5_vertex/images/s5_logo.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item <? echo $about_us_active ?>">
        <a class="nav-link" href="/">About Us</a>
      </li>
      <li class="nav-item <? echo $syllabus_active ?>">
        <a class="nav-link" href="/syllabus">Syllabus</a>
      </li>
      <li class="nav-item <? echo $competition_results_active ?>">
        <a class="nav-link" href="/competition-results">Competition Results</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container bg-white shadow-lg mt-5 p-3">