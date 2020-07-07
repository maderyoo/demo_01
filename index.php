<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Matthew Desailly (1872055)">
    <title>Demo PHP</title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>
    <script>
        function callAlert(){
            alert('Hello World');
        }
    </script>
</head>
<body>
<div class="page">
    <h1>Heading 1</h1>
    <p></p>
    <img src="" alt="Alternate Text">
    <table id="myTable" class="display">
        <thead>
        <tr>
            <th>Head 1</th>
            <th>Head 2</th>
            <th>Head 3</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Data 1-1</td>
            <td>Data 1-2</td>
            <td>Data 1-3</td>
        </tr>
        <tr>
            <td>Data 2-1</td>
            <td>Data 2-2</td>
            <td>Data 2-3</td>
        </tr>
        <tr>
            <td>Data 3-1</td>
            <td>Data 3-2</td>
            <td>Data 3-3</td>
        </tr>
        </tbody>
    </table>
    <button class="button" onclick="callAlert()">Click Me</button>
    <button id="btnSubmit" class="button">Click Me 2</button>
    <?php
    echo "Hello from PHP";
    echo "Good Morning!" . "Matthew" . "<br>";
    $firstName = "Matthew";
    $lastName = "Desailly";
    $bloodType = "O";
    $age = 20;
    echo $firstName . " " . $lastName . "<br>";

    $nilaiAkhir = 80;
    if ($nilaiAkhir = 80){
        echo "Nilai Mutu adalah A" . "<br>";
    }
    $nilaiMutu = "A";
    switch ($nilaiMutu){
        case "A":
            // TODO
            break;
        default:
    }
    for ($i = 1; $i <=10; $i++){
        echo $i . " ";
    }
    echo "<br>";

    $days = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    echo $days[0] . "<br>";
    for ($i = 0; $i<count($days); $i++){
        echo $days[$i] . " ";
    }
    echo "<br>";
    foreach($days as $day){
        echo $day . " ";
    }
    echo "<br>";
    ?>
</div>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();

        $('#btnSubmit').click(function (){
            alert("hello World 2");
        });
    });
</script>
</body>
</html>

