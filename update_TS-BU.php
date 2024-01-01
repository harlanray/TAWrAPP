
<?php

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOLEAN);
$temp = intval($terms);
echo gettype($temp);
echo "All=" . $terms . $fullname . $email . $phone;
if ( ! $terms) {
    die("Terms must be accepted");
} 

$host = "localhost";
$dbname = "wrapp_connect";
$username = "root";
$password = "";
        
$conn = mysqli_connect(hostname: $host,
                    username: $username,
                    password: $password,
                    database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           

echo "No Connection " ;  
   
$sql = "INSERT INTO registration (fullname, email, phone, terms)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}

echo "Good Connection! ";

mysqli_stmt_bind_param($stmt, "ssii",
                    $fullname,
                    $email,
                    $phone,
                    $temp);

mysqli_stmt_execute($stmt);

echo "Registration saved, thanks! . $name . $email ;";

?>

