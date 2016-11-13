<html>

<head>
    <title>Businesso - Your business travels organized.</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/loginStyles.css">
-->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>
<?php

if(isset($_SESSION['username'])) {

?>
<body>

    <div class="col-lg-12">
        <h1>CONFIRMATION PAGE</h1>
    </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- scripts -->
    <script src="js/script.js"></script>

</body>
<?php
  } else {
      header("location:login.html");
  }
?>
</html>
