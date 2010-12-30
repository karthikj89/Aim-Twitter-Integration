<html>
<head></head>
<body>

 <?php
echo "hi";
$status = $_POST["status"];

function updateTwitter($the_status) {
  $username = karthikj89;
  $password = kar123aksh123;
  
  $url = 'http://twitter.com/statuses/update.xml';
  $postargs = 'status='.$the_status;
  $reponseInfo=array();

  $ch = curl_init($url);

  curl_setopt ($ch, CURLOPT_POST, true);
  curl_setopt ($ch, CURLOPT_POSTFIELDS, $postargs);

  curl_setopt($ch, $CURLOPT_USERPWD, $username.':'.$password);

  curl_setopt($ch, CURLOPT_VERBOSE, 1); 
  curl_setopt($ch, CURLOPT_NOBODY, 0); 
  curl_setopt($ch, CURLOPT_HEADER, 0); 
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  // execute the CURL call 
  $response = curl_exec($ch); 
  // Get information about the response 
  $responseInfo=curl_getinfo($ch); 
  // Close the CURL connection curl_close($ch);

  if (intval($responseInfo['http_code'])==200) {
    echo $response;
  }else{
    echo "Error: " . $responseInfo['http_code'];

  }
}

updateTwitter($status)
  
?>



</body>
</html>