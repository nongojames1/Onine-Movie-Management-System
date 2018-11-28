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
$manager_id = $_POST['manager_id'] or die('manager id is missing');
$email = $_POST['email'] or die('email is missing ');
$password = $_POST['password'] or die('password is missing');


$sqlCheck = "SELECT * FROM Manager where manager_id='{$manager_id}';";
$resultCheck = $conn->query($sqlCheck);

$sql = "INSERT INTO Manager values ('$manager_id', '$email', '$password');";

if($resultCheck->num_rows > 0){

  echo "This manager_id already exist, please enter another manager_id";

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