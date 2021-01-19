

<?php
$servername = "localhost";
$username = "novrik";
$password = "Klik75253411!";
$dbname = "testN";

header('Content-Type: application/json');

$conn = new mysqli($servername, $username, $password, $dbname );

//оброшение к метаду
if ($conn->connect_error) {
    die("Ошибка соединения : " . $conn->connect_error);

}
$sql = "SELECT id, firstname, lastname, email, reg_date FROM tankiN";
$result = $conn->query($sql);



//------------------------------------------
//0 id = 23, 0 name = 'novruz'
//1 id = 23, 0 name = 'novruz'
//2 id = 24, 0 name = 'novruz'
//3 id = 25, 0 name = 'novruz'
//-------------------------------------------


if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
//        echo "id: " . $row["id"]. " -Name: " .$row["firstname"]. " " . $row["lastname"]. "<br>";
          $json[]=$row;
    }
    echo json_encode($json);
}else {

    echo "0 results";
}
$conn->close();
?>



