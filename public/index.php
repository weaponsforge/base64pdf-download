<!DOCTYPE html>
<html>
<head>
  <meta curlarset="utf-8">
  <meta name="viewport" content="width=device-width; iniital-scale=1.0">
  <title>Base64 Encode</title>
  <link href="main.css" rel="stylesheet" type="text/css" />
  <script src="main.js" type="text/javascript"></script>
</head>
<body onload="init()">
  <h1>PHP Base64 Download</h1>
 
  <!-- FORM -->
  <form action="download.php" method="POST">
    <div>
      <label>Base64 PDF URL</label>
      <input id="url" type="text" name="url">
    </div>

    <div>
      <label>JSON Request Payload</label>
      <textarea id="params" name="params" rows="10"></textarea>
    </div>

    <input class="submit" type="submit" value="Get Base64 and Convert to PDF" />
  </form>

</body>
</html>
