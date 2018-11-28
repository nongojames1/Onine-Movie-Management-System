<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<?php
require_once('setup.php');
$sql = "USE span11;";
if ($conn->query($sql) === TRUE) {
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$transaction_id = $_POST['transaction_id'] or die('transaction id is missing');
$customer_id = $_POST['customer_id'] or die('customer_id is missing ');
$movie_id = $_POST['movie_id'] or die('movie_id is missing');
$date = $_POST['date'] or die('date is missing');


$sqlCheck = "SELECT * FROM Transaction where transaction_id='{$transaction_id}';";
$resultCheck = $conn->query($sqlCheck);

$sql = "INSERT INTO Transaction values ('$transaction_id', '$customer_id', '$movie_id', '$date');";

if($resultCheck->num_rows > 0){

  echo "This transaction_id already exist, please enter another transaction_id";

}else{

  $result = $conn->query($sql);

  if ($result === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}

?>

<?php
$conn->close();
?>  

</body>
</html>