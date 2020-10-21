<link rel="stylesheet" href="index.css">
<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "blood_donation_website_db";
$con = mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("Connection to this DB failed due to ".mysqli_connect_error());
}
// echo "DB Connected";
if(isset($_POST['submit']))
{
    $id = mt_rand(10000,99999); 
    $name = $_POST["fname"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $blood = $_POST["blood"];
    $rh = $_POST["rh"];
    $address = $_POST["address"];
    // echo $address;
    $sql = "INSERT INTO `donors` (`donor_id`, `name`, `city`, `phone`, `blood`, `rh`, `address`) VALUES ($id, '$name', '$city', '$phone', '$blood', '$rh', '$address');";
    echo $sql;
    if($con->query($sql) == true){
        
        echo "<header>";
        echo "<div class=\"wrapper\">";
        echo "<div class=\"logo\">";
        echo "<a href=\"./homepage.html\">Donation Website</a>";
        echo "</div>";
        echo "<nav>";
        echo "<a href=\"./login.html\">Home</a>";
        echo "<a href=\"./donate.html\">Create Donor</a>";
        echo "<a href=\"./searchdonor.html\">Search Donor</a>";
        echo "</nav>";
        echo "</div>";
        echo "</header>";
        echo "<div id='out'>";
        echo "<h1 id='first'>Hi, There!!</h1>";
        echo "<h1>Welcome, Donor has been Successfully Created!!</h1><br><br>";
        echo "<a href=\"./homepage.html\" id=\"backbutton\">Go Back to homepage</a>";
        echo "</div>";
    }
    else{
        echo "HERE PROB";
    }
    $con->close();
}
?>
