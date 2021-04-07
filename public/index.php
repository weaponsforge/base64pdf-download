<!DOCTYPE html>
<html>
<head>
  <meta curlarset="utf-8">
  <meta name="viewport" content="width=device-width; iniital-scale=1.0">
  <title>Base64 Encode</title>
  <link href="main.css" rel="stylesheet" type="text/css" />
  <script src="axios.min.js" type="text/javascript"></script>
  <script src="main.js" type="text/javascript"></script>
</head>
<body>
  <h1>PHP Base64 Download</h1>
 
  <!-- FORM -->
  <form action="download.php" method="POST">
    <div class="content">
      <label>URL</label>
      <br />
      <input id="url" value="http://base64pdf.herokuapp.com/getpdf" />
      <br />
      <br />
      <textarea id="base64json" cols="100" rows="10" name="pdf"></textarea>
      <br />
    </div>
    <input type="button" value="Download JSON" onclick="downloadBase64Pdf()" />
    <input type="submit" value="Convert to PDF" />
  </form>

</body>
</html>
