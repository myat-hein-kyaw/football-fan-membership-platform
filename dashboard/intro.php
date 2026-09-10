<?php
    $bgColor = "tomato";
    $color = "white";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1{
            background-color: <?php echo $bgColor?>;
            color : <?php echo $color ?>;
            text-align: center;
        }
    </style>

</head>
<body>
    
    <h1>Header 1</h1>

    <?php echo "<h2> Header 2 </h2>" ?>

    <h3>Header 3</h3>

    <?php echo "<h4> Header 4 </h4>"?>

    <h5 id="h5">Header 5</h5>

    <?php echo "<h6> Header 6 </h6>" ?>

    <p>background color is  <?php echo $bgColor ?>.</p>
    <P>color is  <?php echo $color ?>.</P>

    <script>

        document.getElementById('h5').style.backgroundColor = "<?php echo $bgColor?>";
        document.getElementById('h5').style.color ="<?php echo $color ?>";

    </script>

</body>
</html>