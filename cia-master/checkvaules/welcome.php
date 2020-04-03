<html>
<body>

<?php

// Variables
// 1. Define variables
// 2. Set variables to empty values
$name = "";


$name = $email = $telephone = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $telephone = test_input($_POST["telephone"]);
  $website = test_input($_POST["website"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// Request Method
// 1. Check POST or GET
// 2. Set variable with Checked Value


$name = inputChecked($_POST["name"]);
function inputChecked($var) {

}


?>

    Welkom <?php echo $_GET["name"]; ?><br><br>
    E-mail: <?php echo $_GET["email"]; ?><br><br>
    Telefoon <?php echo $_GET["telephone"]; ?><br><br>
    Website <?php echo $_GET["website"]; ?><br><br>

</body>
</html>