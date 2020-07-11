<?php
    if(isset($_GET['back'])){
        session_destroy();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project Statistics</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    
</head>
<body>
<h1>Probability and Statistics Calculator</h1>
    <h4>Which Method ?</h4>
    <form action="control.php" method="POST">
        <select name="select" id="select" name="select">
            <option value="intro">Intro to Probability</option>
            <option value="conditional">Conditional Probability</option>
            <option value="bayes">Bayes Theorem</option>
        </select><br><br>
    <button type="submit">Apply</button>
    </form>
    
</body>
</html>