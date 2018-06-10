<head>
    <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
        <title>Result</title>
    </head>
    <div class="window">
    <div class="bluebar">
   <p class="title">Resultat</p>
   <a href="index.php"><button class="close">X</button></a>
</div>
<div class="resultat">
<div class="insider">
        <img src="./image/progressbar.gif"  style="
    position: inherit;
">
        <img src="mandelbrot.php?iteration=<?php echo $_POST['iteration'] ?>&degre=<?php echo $_POST['degre'] ?>" style="    position: relative;    margin-top: -115px;">
  </div>
  </div>
</html>
