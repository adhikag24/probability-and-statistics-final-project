<?php
session_start(); 
require_once('calculate.php');
if (empty($_POST['select'])){
    if ($_SESSION['select'] == 'bayes'){
        $_SESSION['select'] = 'bayes';
    }
    elseif ($_SESSION['select'] == 'test'){
    
    }
    elseif ($_SESSION['select'] == 'test2'){
    
    }
}
else{
    $_SESSION['select'] = $_POST['select'];
    
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <title>Statistics Calculator</title>
</head>
<body>
    <?php if($_SESSION['select'] == "bayes"): ?>
        <h2>Bayes Calculator</h2>
        <form action="" method="GET">
            <label for="">P(A)</label>
                <input type="number" name="pa" id="pa" step="any" required> <br><br>
            <label for="">P(B)</label>
                <input type="number" name="pb" id="pb" step="any" required> <br><br>
            <label for="">P(B | A)</label>
                <input type="number" name="pba" id="pba" step="any" required><br><br>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </form>

        <label for="">Answer: </label><br>
        <?php 
        if (isset($_GET['submit'])){
            $pa = $_GET['pa'];
            $pb = $_GET['pb'];
            $pba = $_GET['pba'];

            $pab = bayes($pa, $pb, $pba);

            echo round($pab, 2);
        }
        ?>

    <?php elseif($_SESSION['select'] == "intro"): ?>
        <h2>Intro to Probability</h2>
        <form action="" method="GET">
            <label for="">Way it happen?</label><br>
                <input type="number" name="way_it_happen" id="way_it_happen" step="any" required> <br><br>
            <label for="">Total</label><br>
                 <input type="number" name="total" id="total" step="any" required> <br><br>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </form>

        <label for="">Answer: </label><br>
        <?php 
        if (isset($_GET['submit'])){
            $way_it_happen = $_GET['way_it_happen'];
            $total = $_GET['total'];

            $answer = intro($way_it_happen, $total);

            echo round($answer, 2);
        }
        ?>
    <?php elseif($_SESSION['select'] == "conditional"): ?>
        <h2>Conditional Probability</h2> 
            <form action="" method="GET">
            <label for="">P(A and B)</label><br>
                <input type="number" name="paandb" id="paandb" step="any" required> <br><br>
            <label for="">P(A)</label><br>
                 <input type="number" name="pa" id="pa" step="any" required> <br><br>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </form>

        <label for="">Answer: </label><br>
        <?php 
        if (isset($_GET['submit'])){
            $paandb = $_GET['paandb'];
            $pa = $_GET['pa'];

            $answer = conditional($paandb, $pa);

            echo round($answer, 2);
        }
        ?>

    <?php else: ?>
    <p>Page not found</p>

    <?php endif; ?>
        <br><br>
    <a href="index.php">Back</a>

</body>
</html>

