<?php
include "db.php";

$sql = "SELECT * FROM statistic";
$result = $conn->query($sql);

echo "<table><tr><th>Query date</th><th>URL</th><th>Title</th><th>Status code</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["query_date"] . "</td><td><a href='graph.php?id=".$row["id"]."'>" . $row["url"] . "</a></td>
    <td>" . $row["title"] . "</td><td>" . $row["code"] . "</td></tr>";
}

echo "</table>";