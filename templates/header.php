<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="/css/diagrams.css" rel="stylesheet"/>
<link href="/css/image.css" rel="stylesheet"/>
        <?php if (isset($title)): ?>
            <title>Restaurant: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Restaurant</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
            <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/restaurant.php">restaurant</a></li>
         <li><a href="/menue.php">menue</a></li>
        <li><a href="/reservation.php">reservation</a></li>
         <li><a href="/login.php">login</a></li>
          <?php if (isset($control)): ?>
            <li><a href= "<?= htmlspecialchars($control) ?>">control</a> </li>
              <?php endif ?>
          <li><a href="/logout.php">logout</a></li>
           
        </ul>
            </div>

            <div id="middle">
