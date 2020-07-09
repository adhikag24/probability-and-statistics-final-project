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
    <title>Statistics Calculator</title>
</head>
<body>
    <?php if($_SESSION['select'] == "bayes"): ?>
        <label for="">Bayes Calculator</label>
        <form action="" method="GET">
            <label for="">P(A)</label>
            <input type="number" name="pa" id="pa" step="any" required> <br>
            <label for="">P(B)</label>
            <input type="number" name="pb" id="pb" step="any" required> <br>
            <label for="">P(B|A)</label>
            <input type="number" name="pba" id="pba" step="any" required>
            <button type="submit" name="submit" id="submit">Calculate</button>
        </form>

        <label for="">Answer: </label><br>
        <?php 
        if (isset($_GET['submit'])){
            $pa = $_GET['pa'];
            $pb = $_GET['pb'];
            $pba = $_GET['pba'];

            $pab = bayes($pa, $pb, $pba);

            echo $pab;
        }
        ?>

    <?php elseif($_SESSION['select'] == " "): ?>

    <?php elseif($_SESSION['select'] == " "): ?>

    <?php else: ?>
    <p>Page not found</p>

    <?php endif; ?>

    <a href="index.php">Back</a>

</body>
</html>

