<?php
$db = mysql_connect("","","");
if (!$db) {
  die("Database connection failed miserably: " . mysql_error());
}

$db_select = mysql_select_db("ukubot",$db);
if (!$db_select) {
  die("Database selection also failed miserably: " . mysql_error());
}
?>


<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="javascript.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <title>Scrolling Site</title>
</head>
<body>

  <div class="content">
    <section id="title">
      <h1>CloudWord</h1>
    </section>

    <section id="cloud-container">
      <div id="cloud-text">

        <?php
        $result = mysql_query("SELECT word FROM Cloudword WHERE `id` in (1)", $db);
        if (!$result) {
          die("Database query failed: " . mysql_error());
        }
        while ($row = mysql_fetch_array($result)) {
          echo "<h2>";
          echo $row['word']."";
          echo "</h2>";
        }
        ?>

      </div>
      <div class="cloud">
      </div>
    </section>

    <section id="input-section">
      <div class="input-info">
        <p>Enter your word here</p>
      </div>
      <form method="post" action="insert.php" autocomplete="off">
        <input name="input-word" id="input-word" type="text" pattern="[a-zA-ü]+" oninvalid="setCustomValidity('cloud WORDS only, please')" maxlength="10" placeholder="_"><br>
      </form>
    </section>
  </div>
</body>
</html>
