<?php
  // Fetch a JSON response containing a base64-encoded field 'FileContents' from 'url'
  if (isset($_POST['url'])) {
    $url = $_POST['url'];
    $params = $_POST['params'];

    // Send POST request to external 'url' server
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);

    // Set the POST request payload required by the external 'url' server
    $postFields = json_decode($params);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postFields));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    curl_close($curl);
    
    // Convert result to json
    $data = json_decode($result);

    // Echo the fetched base64 string
    // echo $data->FileContents;
    
    // Decode pdf content
    $decoded = base64_decode($data->FileContents);
    
    // Write to pdf file to PHP server disk
    $file = 'test.pdf';
    file_put_contents($file, $decoded);
    
    // Send the PDF file as response
    if (file_exists($file)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="download.pdf"');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      readfile($file);
        
      // Delete pdf file from PHP server disk
      unlink($file);
      exit;
    }
  }
?>
