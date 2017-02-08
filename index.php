<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <title>Blog</title>
  </head>

    <body>
      <!--*************************************HEADER********************************-->
      <div id="bloc_page">
        <header>
          <div id="logo">
            <img src="images/logo.png" alt="photo logo simplon">
            <h1> Olivia's Blog:  </h1>
          </div>
            <h2> a daily update on my work </h2>
        </header>
      </div>
      <!--*************************************HEADER********************************-->
      <main id="container">
          <article class="element1">
            <ul id="nav">
              <li class="inline">
                <a href="#" target="_blank">
                  <i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i>
                </a>
              </li>
              <li class="inline">
                <h3 > Date </h3>
              </li>
              <li class="inline">
                <a href="#" target="_blank">
                  <i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i>
                </a>
              </li >
            </ul>
                <p>  <?php include "billets/$_GET[content]"; ?> </p>
            </article>
        <!-- ********************PHP************************** -->
            <aside class="element2">
              <ul>
                <?php
                  $entries= scandir("billets", SCANDIR_SORT_DESCENDING);
                    foreach($entries as $entry){
                      if($entry !="."&& $entry !=".."){
                        echo "<li><a href='index.php?content=$entry'>$entry</a><li>\n";
                                                }
                                                      }
              ?>
            </ul>
          </aside>
      </main>

      <footer>
      </footer>

    </body>
</html>
