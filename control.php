<?php
session_start(); 
require_once('calculate.php');
if (!empty($_POST['select'])){
    $_SESSION['select'] = $_POST['select'];
}



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <title>Statistics Calculator</title>
</head>
<body>
    
    <?php if($_SESSION['select'] == "bayes"): ?>
        <h1>Bayes Theorem</h1>
        
        <div class="div1">
        <form action="" method="GET">
            <label for="">P(A)</label>
                <input type="number" name="pa" id="pa" step="any" required> <br><br>
            <label for="">P(B)</label>
                <input type="number" name="pb" id="pb" step="any" required> <br><br>
            <label for="">P(B | A)</label>
                <input type="number" name="pba" id="pba" step="any" required><br><br>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </form>
        
        
        <?php 
        if (isset($_GET['submit'])){
            $pa = $_GET['pa'];
            $pb = $_GET['pb'];
            $pba = $_GET['pba'];

            if ($pb == 0){
                echo "Cannot divide 0, will result infinite.";
            }
            else{
                $pab = bayes($pa, $pb, $pba);
                echo "<label>Answer: </label><br>";
                echo round($pab, 2);
            }
        }
        ?>
        </div>
    
    <?php elseif($_SESSION['select'] == "intro"): ?>
        <h1>Intro to Probability </h1>
        <div class="div1">
        <form action="" method="GET">
            <label for="">Way it happen?</label><br>
                <input type="number" name="way_it_happen" id="way_it_happen" step="any" required> <br><br>
            <label for="">Total</label><br>
                 <input type="number" name="total" id="total" step="any" required> <br><br>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </form>
        
        <?php 
        if (isset($_GET['submit'])){
            $way_it_happen = $_GET['way_it_happen'];
            $total = $_GET['total'];

            if ($total == 0){
                echo "Cannot divide 0, will result infinite.";
            }
            else{
            $answer = intro($way_it_happen, $total);
            echo "<label>Answer: </label><br>";
            echo round($answer, 2);
            }
        }
        ?>
        </div>

    <?php elseif($_SESSION['select'] == "conditional"): ?>
        <h1>Conditional Probability</h1> 
        <div class="div1">
            <form action="" method="GET">
            <label for="">P(A ∩ B)</label><br>
                <input type="number" name="paandb" id="paandb" step="any" required> <br><br>
            <label for="">P(A)</label><br>
                 <input type="number" name="pa" id="pa" step="any" required> <br><br>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </form>

        <?php 
        if (isset($_GET['submit'])){
            $paandb = $_GET['paandb'];
            $pa = $_GET['pa'];

            if ($pa == 0){
                echo "Cannot divide 0, will result infinite.";
            }
            else{
                $answer = conditional($paandb, $pa);
                echo "<label>Answer: </label><br>";
                echo round($answer, 2);
            }  
        }
        ?>
    <?php else: ?>
    <p>Page not found</p>

    <?php endif; ?>
        <br><br>
        </div>
        
    <a href="index.php" nam="back" id="back">Back</a>
        
</body>
</html>

