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


$release_year = $_POST['release_year'] or die('release_year is missing');
$rating = $_POST['rating'] or die('rating is missing');
$runtime = $_POST['runtime'] or die('runbtime is missing');
$score=$_POST['score'] or die('score is missing');
$box_office=$_POST['box_office'] or die('box_office is missing');
$availability=$_POST['availability'] or die('availability is missing');
$movie_id = $_POST['movie_id'] or die('movie id is missing');
$title = $_POST['title'] or die('title is missing ');


$sqlCheck = "SELECT * FROM Movies where movie_id='{$movie_id}';";
$resultCheck = $conn->query($sqlCheck);

$sql = "INSERT INTO Movies values ('$movie_id', '$title', '$release_year', '$rating', '$runtime', '$score', '$box_office','availability');";

if($resultCheck->num_rows > 0){

  echo "This movie id already exist, please enter another movie id";

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