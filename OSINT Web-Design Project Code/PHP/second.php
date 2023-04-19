<!DOCTYPE html>
<html lang="en">
<head>
<title>Search Form</title>
<meta charset="UTF-8">
<meta name="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
  <header>
    <img src="../Images/Shodan_logo.webp.png" alt="Shodan logo">
    <link rel="icon" type="image/x-icon" href="../Images/favicon.ico">
    <h1>
      Search Form
    </h1>
  </header>
  <section class="section-second">
    <h2>Please enter search query for lookup?</h2>
    <article>
      <form method="POST" action="setsearch.php">
        <input id="query" name="query" type="text" placeholder="Enter your search query..." required><br>
        <input id="facets" name="facets" type="text" placeholder="Enter your facet (e.g. os, port)..." required><br>
        <div class="button-container">
          <button type="submit" class="button">Search</button>
        </div>
      </form>
    </article>
    <p>
    Shodan is a search engine for internet-connected devices that allows users to search for information on various internet-connected devices such as webcams, routers, servers, and more. The Shodan API is a tool that allows developers to access the Shodan search engine's data and integrate it into their own applications.
To use the Shodan API, developers must first create an account and obtain an API key. Once they have an API key, they can send a search query to the Shodan API using the API endpoint URL and the query parameters. The search query can be customized using a variety of filters, such as the device's IP address, port number, operating system, or specific keywords.
Once the search query is constructed, it is appended to the Shodan API endpoint URL, and the resulting URL is sent as an HTTP request to the Shodan API server. The server processes the request and returns the results in JSON format, which can be parsed by the developer's application.
The Shodan API also allows users to build URLs that specify the search query and other parameters, which can be used to access the data directly from a web browser or through a programmatic interface. By building custom URLs, developers can easily access and analyze the data from the Shodan search engine, and use it to develop their own custom applications and services.
    </p>
    <p>
    Once the search query is constructed, it is appended to the Shodan API endpoint URL, and the resulting URL is sent as an HTTP request to the Shodan API server. The server processes the request and returns the results in JSON format, which can be parsed by the developer's application.
The Shodan API also allows users to build URLs that specify the search query and other parameters, which can be used to access the data directly from a web browser or through a programmatic interface. By building custom URLs, developers can easily access and analyze the data from the Shodan search engine, and use it to develop their own custom applications and services.
    </p>
  </section>
</body>
</html>