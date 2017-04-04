<?php
  $company = 'Movie Time';
  $title = 'Arrays';
  $topic = 'Music Groups';
  $group = 'Massive Attack';

  // Let's create a simple array
  $albums = array(
    'Blue Lines',
    'Protection',
    'No Protection',
    'Mezzanine',
    '100th Window',
    'Danny the Dog',
    'Collected',
    'Heligoland',
    'Ritual Spirit',
  );

  // Let's create an associative array
  $albumYears = array(
    'Blue Lines' => 1991,
    'Protection' => 1994,
    'No Protection' => 1995,
    'Mezzanine' => 1998,
    '100th Window' => 2003,
    'Danny the Dog' => 2004,
    'Collected' => 2006,
    'Heligoland' => 2010,
    'Ritual Spirit' => 2016
  );

  // Count how many items are stored in the array $movies
  $albumsLength = count($albums);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $group; ?></em></h1>
      <p>There are <?php echo $albumsLength; ?> movies in the <em><?php echo $group; ?></em> franchise.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($albums as $album) {
              echo '<li class="list-group-item">'.$album.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($album);
        ?>
      </ul>
      <p>The best <em><?php echo $group; ?></em> album is <em><?php echo $albums[4]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $group; ?></em> movies were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($albumYears as $album => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$album.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($album);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>