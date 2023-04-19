<?php
  // Redirect to page 3 with query and facet
  if (isset($_POST['query']) && isset($_POST['facets'])) {
    $query = urlencode($_POST['query']);
    $facets = urlencode($_POST['facets']);
    $api = $_COOKIE['api-key'];
    header("Location: third.php?query=$query&facets=$facets&api=$api");
    exit();
  }
?>