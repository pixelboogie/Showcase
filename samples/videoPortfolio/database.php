<?php


// ---------------------------   CONNECTION STUFF
// use this one for local machine during development
//$conn = mysql_connect ("pixelboogie.globatmysql.com", "root", "blue88");
/*

*/
//$conn = mysql_connect ("127.0.0.1.movieclips", "myUser", "888");
//$db = mysql_select_db("movieclips");


// ---------------------------  Fatcow (works)
//$servername = "pixelboogiecom.fatcowmysql.com";
//$username = "user_pixelboogie";
//$password = "vato88_blue";
//$dbname = "dbpixelboogie";

// ---------------------------  localhost Mac

$username = "root";
$password = "";
$servername = "localhost";   
$dbname = "dbpixelboogie";



// this use is for the server
//$conn = mysql_connect ("pixelboogie.globatmysql.com", "userPixelboogie", "blue88");
//$db = mysql_select_db("DBpixelBoogie");

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = new mysqli($servername, $username, $dbname);
//$db = mysql_select_db("movieclips");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully"."<br>"."<br>";










/*

$sql = "SELECT * FROM movieclips";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Clip id: " . $row["ClipID"]. " - Name: " . $row["ClipName"]. " " . $row["ClipTopic"]. " " . $row["ClipURL"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
*/
?>




