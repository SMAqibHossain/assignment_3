

<?php
$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$email = $_POST['eMail'];
$numberHolder = $_POST['Number'];
$messageHolder = $_POST['message'];


echo $firstName . "<br>";
echo $lastName . "<br>";
echo $email . "<br>";
echo $numberHolder . "<br>";
echo $messageHolder . "<br>";


$db = new mysqli('localhost', 'root', '', 'contact_us');


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$sql = "INSERT INTO contactinfo (firstName, lastName, email, telNumber, userMessage) VALUES ('$firstName', '$lastName', '$email', '$numberHolder', '$messageHolder')";

if ($db->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $db->error;
}

$db->close();
?>
