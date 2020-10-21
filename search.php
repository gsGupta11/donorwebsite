<link rel="stylesheet" href="search.css">
<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "blood_donation_website_db";
$con = mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("Connection to this DB failed due to ".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $city = $_POST["city"];
    $blood = $_POST["blood"];
    $rh = $_POST["rh"];
    
    $sql = "SELECT name, phone,address FROM donors WHERE city='$city' AND blood='$blood' AND rh='$rh'";
    $result = $con->query($sql);
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
    echo "<div id='fin'>";
    echo "<h1>Donors in $city having Blood Group=$blood with rh=$rh are enlisted below: </h1>";
    echo "<table id='findata'>";
    echo "<tr>";
    echo "<th>Donor Name</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Address</th>";
    echo "</tr>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo $row["name"];
            echo "</td>";
            echo "<td>";
            echo $row["phone"];
            echo "</td>";
            echo "<td>";
            echo $row["address"];
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "<a href=\"./searchdonor.html\" id=\"backbutton\">Go Back</a>";
      } else {
        echo "0 results";
      }
    $con->close();
}


?>
