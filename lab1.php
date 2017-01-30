<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teams</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

<?php

$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006jessecannondatabase', 'bf3c946f4d66ff', '1d953141');

$sql ="SELECT city, nickname, division FROM teams";

$cmd = $conn->prepare($sql);
$cmd->execute();
$teams = $cmd->fetchALL(); 

echo '<table class="table table-striped table-hover"><tr><th>City</th><th>Nickname</th><th>Division</th></tr>';

foreach ($teams as $team) {
  
    echo '<tr><td>' . $team['city'] . '</td>
        <td>' . $team['nickname'] . '</td>
        <td>' . $team['division'] . '</td></tr>';
}

$conn = null; 
?>

<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>