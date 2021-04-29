<?php
$navlinks = ["home", "about", "docs", "contact"];
$currenct_page = basename($_SERVER['SCRIPT_NAME'], ".php");
function outputNav($navlinks, $currenct_page) {
  $output = '';
  foreach ($navlinks as $link) {
    ## swith home to index for href
    if ($link == "home") {
      $href = "index";
    } else {
      $href = $link;
    }
    ## set active class if navlink == currenct_page
    $class = '';
    if ($href == $currenct_page) {
      $class = "active";
    }
    $output .= "<li><a href='{$href}' class='nav-link {$class}'>". ucfirst($link) ."</a> </li>";
  }
  echo $output;
}
 ?>


<!doctype html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="twitter:" content="19709452298">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Selfy Site</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="nav">
      <ul>
        <?php outputNav($navlinks, $currenct_page) ?>
      </ul>
    </nav>
  </header>
