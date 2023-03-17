<!DOCTYPE html>
<?php
  $server = "https://script.google.com/macros/s/AKfycbyGz6I7CHQPpSFUO6vzlGnFyubqV3KlD5cf5AiN0N3Sa8JxbxTOE5U0haLao5aleDwR/exec";
?>
<html>
  <head>
    <title>Submit</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  </head>  
  <body>
    <h1>Your form was submitted</h1>
    <?php
        //The data you want to send via POST
        $fields = [
            'btnSubmit'         => 'Submit',
            'name'              => $_POST['name'],
            'email'             => $_POST['email'],
            'message'           => $_POST['message']
        ];

        //url-ify the data for the POST
        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $server);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

        //execute post
        //$result = curl_exec($ch);
        //echo $result;
          
    ?>
    Thank you, <?php echo $_POST['name']  ?><br>
    <p>You'll be return to the main page in a few moments<br>
    Or click <a href="../index.php">here</a></p>
    <script>
        setTimeout(function() { location.href = "../index.php"; }, 4000);
    </script>
  </body>
</html>
