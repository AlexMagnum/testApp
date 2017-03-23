<?php
include "db.php";

$arrayURL = explode("\n", $_POST['text']); // построчная разбивка содержимого textarea

$str = "<table><tr><th>URL</th><th>Title</th><th>Status code</th></tr>";

foreach ($arrayURL as $arr) {
    $str .= "<tr>";

    // получить код страницы
    $c = curl_init($arr);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $content = curl_exec($c);

    //найти в коде страницы тег <title>
    preg_match_all("#<title>.+</title>#", $content, $titles);

    //Убрать из названия тег <title>
    $title = preg_replace('#(<title>|</title>)#', '', $titles[0][0]);

    //Получение массива с заголовками ответа на HTTP-запрос
    $headers = get_headers($arr);

    //Изъятие из массива кода ответа
    $httpcode = substr($headers[0], 9, 3);

    $str .= "<td>" . $arr . "</td><td>" . $title . "</td><td>" . $httpcode . "</td>";
    $str .= "</tr>";

    //запись данных о запросах в базу данных
    $query_date = date("Y-m-d");
    $sql = "INSERT INTO statistic (url, title, code, query_date)
            VALUES ('$arr', '$title', '$httpcode', '$query_date')";
    $conn->query($sql);
}

$str .= "</table>"; // строка формирующая возвращаемую таблицу с данными

echo $str;
