<!DOCTYPE html>
<html lang="en">
<head>
<title>API Key</title>
<meta charset="UTF-8">
<meta name="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../CSS/style.css">
<link rel="icon" type="image/x-icon" href="../Images/favicon.ico">
</head>
<body>
  <header>
    <img src="../Images/Shodan_logo.webp.png" alt="Shodan logo">
    <h1>
      API Key
    </h1>
  </header>
  <section class="section-index">
    <h2>Please enter your API key?</h2>
    <article>
      <form action="setcookie.php" method="POST">
        <input id="api-key" name="api-key" type="text" placeholder="Enter your API key..." required>
        <div class="button-container">
          <button type="submit" class="button">Submit</button>
        </div>
      </form>
      <br>
    </article>
    <p><u>Information about the Shodan API key:</u></p>
    <p>The Shodan API key is a unique authentication key that is required to use the Shodan API.
        Shodan is a search engine for interent-connected devices that scans and indexes the devices'
        IP addresses, ports, and other metadata. The Shodan API provides access to this data, 
        allowing developers to buid applications that leverage this information for various purposes such as
        cybersecurity research, network monitoring, and asset management.</p> 
    <p>The Shodan API key is used to authenticate API requests and identify the user who is making
        the request. Without an API key, you will not be able to access the Shodan API. The API key
        is typically provided to users upon registration and must be kept confidential to prevent
        unauthorised access to the Shodan API. Here is a link to the Shodan website where you can get your
        API key after registration: <a href="https://www.shodan.io/dashboard">https://www.shodan.io/dashboard</a></p>
  </section>
</body>
</html>