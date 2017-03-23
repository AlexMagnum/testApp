<?php
include "db.php";

$id = $_GET['id'];
$url = "";
$date = array(0,0,0,0,0,0,0);
$codeArray = array();
$arr = array();

//Получение текущего url
$sql = "SELECT * FROM statistic WHERE id = '$id'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        $url = $row['url'];
}

//Получение кодов ответа текущего url
$sqlCode = $conn->query("SELECT * FROM statistic WHERE url = '$url'");

while($row = $sqlCode->fetch_assoc()){
    array_push($codeArray, $row['code']);
}

$codeArray = array_unique($codeArray);

//формирование массива с типом ответа и количеством запросов по дням
$count = 0;
foreach ($codeArray as $ca) {
    $sqlCountDay = $conn->query("SELECT * FROM statistic WHERE url = '$url' AND code = '$ca' ");
    while ($row = $sqlCountDay->fetch_assoc()) {
        if (strftime("%a", strtotime($row['query_date'])) == "Sun") {
            $date[0] += 1;
        } else if (strftime("%a", strtotime($row['query_date'])) == "Mon") {
            $date[1] += 1;
        } else if (strftime("%a", strtotime($row['query_date'])) == "Tue") {
            $date[2] += 1;
        } else if (strftime("%a", strtotime($row['query_date'])) == "Wed") {
            $date[3] += 1;
        } else if (strftime("%a", strtotime($row['query_date'])) == "Thu") {
            $date[4] += 1;
        } else if (strftime("%a", strtotime($row['query_date'])) == "Fri") {
            $date[5] += 1;
        } else if (strftime("%a", strtotime($row['query_date'])) == "Sat") {
            $date[6] += 1;
        }
    }

    $arr += array($count => array('name' => $ca, 'data' => $date));
    $count++;
    $date = array(0,0,0,0,0,0,0);
}

$datearray = json_encode($arr); 

