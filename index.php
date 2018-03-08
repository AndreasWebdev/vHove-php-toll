<?php
  error_reporting(E_ALL ^  E_NOTICE);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Du bist toll!</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      Du bist toll!
    </header>

    <?php
      // Überprüfen, ob Formular ausgefüllt wurde
      $name = $_GET['name'];

      if($name) {
        // Ja wurde ausgefüllt
        ?>
          <div class="content-box">
            <h3><?php echo $name; ?></h3>
            <p>ist toll!</p>
            <a href="index.php">Versuch auch du es!</a>
          </div>
        <?php
      } else {
        // Nein, wurde nicht ausgefüllt, zeige Formular
        ?>
          <div class="content-box">
            <h3>Wen findest du toll?</h3>
            <form action="" method="get">
              <input name="name" type="text" placeholder="Mathilde" />
            </form>
            <span>Enter drücken zum absenden</span>
          </div>
        <?php
      }
    ?>
    <footer>
      &copy; <?php echo date('Y'); ?> Andreas &amp; Laura
    </footer>
  </body>
</html>
