<?php
  // Process a JSON response containing a base64-encoded PDF field: 'pdf'
  if (isset($_POST['pdf'])) {
    $pdf = $_POST['pdf'];
	  
    // Send POST request to external 'url' server
    /*
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    
    // Convert result to json
    $data = json_decode($result);
    */

    // Convert POST 'pdf' parameter to json
    $data = json_decode($pdf);

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
