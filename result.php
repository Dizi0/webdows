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
<div class="resultat" style="
    background: lightgrey;
    padding: 20px;">
        <?php
            // on stock le resultat du formulaire dans des variables
            $reel = $_POST['reel'];
            $imaginaire = $_POST['imaginaire'];

            // Remplace null par 0, et -0 par 0
            if ($reel == "" || $reel == "-0")
                $reel = 0;
            if ($imaginaire == "" || $imaginaire == "-0") 
                $imaginaire = 0;
            // si le nombre contient une virgule, on la transforme par un point
            $reel = str_replace(",", ".", $reel);
            $imaginaire = str_replace(",", ".", $imaginaire);

            // on efface les + inutile devant un positif
            $reel = str_replace("+", "", $reel);
            $imaginaire = str_replace("+", "", $imaginaire);

            // on importe nos fonctions php
            require_once("function.php");
            require_once("function_bis.php");

            // on check l'imput
            if (check($reel) == true && check ($imaginaire) == true)
            {
                // suppression 0 inutile devant nombre
                $reel = (int)$reel;
                $imaginaire = (int)$imaginaire;

                // on peux alors executer asap nos fonctions
                aff_complex($reel, $imaginaire);
                ?>
                <br>
                <?php
                aff_re_im($reel, $imaginaire);
                ?>
                <br>
                <?php
                aff_conjug($reel, $imaginaire);
                ?>
                <br>
                <?php
                aff_invers($reel, $imaginaire);
                ?>
                <br>
                <?php
                aff_module($reel, $imaginaire);
                ?>
                <br>
                <?php
                aff_arg($reel, $imaginaire);
                ?>
                <br>
                <?php
                aff_trigo($reel, $imaginaire);

                // On include le script pour notre canvas
                require_once("canvas.php");
                ?>
                <br><br>

                <!-- On cree le canvas -->
                <canvas id="myCanvas" width="600" height="600" style="border: 1px solid black;"></canvas>
                <?php
            }

            // Never trust user input
            elseif (check($reel) == false || check($imaginaire) == false)
            {
                ?>
                <img src="image/warn.png">
                <?php
                echo "not a complex number";
                ?>
                
                <audio src="error.mp3" preload="auto" autoplay ></audio> 
                <?php
            }
         ?>
  </div>
</html>