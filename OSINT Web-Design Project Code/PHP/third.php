<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Results</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="icon" type="image/x-icon" href="../Images/favicon.ico">
  <link rel="stylesheet" href="https://openlayers.org/en/v6.5.0/css/ol.css" type="text/css">
  <script src="https://openlayers.org/en/v6.5.0/build/ol.js"></script>
</head>
<body>
</head>
<body>
<?php
  // Set variables for API key, query, and facets
  $query = $_GET['query'];
  $facets = $_GET['facets'];
  $api = $_GET['api'];
  $url = "https://api.shodan.io/shodan/host/search?key={$api}&query={$query}&facets={$facets}";

  // Get response from URL
  $response = file_get_contents($url);
  $json = json_decode($response, true);

  // This code is comented to out but can be useful when
  // debugging the tool when the data isn't working
  // Save response to a text file
  $file = '../Logs/shodan_response.json';
  file_put_contents($file, json_encode($response, JSON_PRETTY_PRINT));

  // Extract longitude and latitude data from the JSON response
  $coordinates = array();
  if (!is_null($json) && isset($json['matches'])) {
    foreach ($json['matches'] as $match) {
      if (isset($match['location'])) {
        $coordinates[] = array($match['location']['latitude'], $match['location']['longitude']);
      }
    }
  }
  // Debugging code to check values of variables
  // var_dump($query);
  // var_dump($facets);
  // var_dump($api);
  // var_dump($url);
  // var_dump($json);
  // var_dump($coordinates);

?>
  <header>
    <img src="../Images/Shodan_logo.webp.png" alt="Shodan logo">
    <h1>
      Search Results
    </h1>
  </header>
  <section class="section-third">
    <article>
    <pre><b>Your query was: </b><?php echo $query; ?></pre>
    <pre><b>Your facets was: </b><?php echo $facets; ?></pre>
     <div id="map" style="width: 100%; height: 250px;"></div>
     <?php
    // require a file
     require('openlayers.php');
     ?>
    <table>
      <thread>
        <tr>
          <th>Vulnerability</th>
          <th>Description</th>
          <th>CVSS</th>
          <th>IP Address</th>
          <th>Longitude</th>
          <th>Latitude</th>
        </tr>
      </thread>
    <?php
    // Loop through each match and display the required fields in the table
    if (isset($json['matches'])) {
      foreach ($json['matches'] as $match) {
        if (isset($match['vulns'])) {
          foreach ($match['vulns'] as $vuln => $details) {
            $cvss = isset($details['cvss']) ? $details['cvss'] : "";
            $description = isset($details['summary']) ? $details['summary'] : "";
            echo "<tr>";
            echo "<td>" . $vuln . "</td>";
            echo "<td class='description'>" . $description . "</td>";
            echo "<td>" . $cvss . "</td>";
            echo "<td>" . $match['ip_str'] . "</td>";
            if (isset($match['location'])) {
              echo "<td>" . $match['location']['longitude'] . "</td>";
              echo "<td>" . $match['location']['latitude'] . "</td>";
            } else {
              echo "<td></td>";
              echo "<td></td>";
            }
            echo "</tr>";
          }
        }
      }
    }
  ?>
</table>
    </article>
  </section>
</body>
</html>
