<?php
function check($string)
{
    if (is_numeric($string))
        return (true);
    else
        return(false);
}

function aff_complex($reel, $imaginaire)
{
    if ($imaginaire < 0)
    {
        $imaginaire = str_replace("-", " - ", $imaginaire);
        echo "Nombre complexe: z = " . $reel . $imaginaire . "i";
    }
    else
        echo "Nombre complexe: z = " . $reel . " + " . $imaginaire . "i";
}

function aff_re_im($reel, $imaginaire)
{
    echo "Partie reelle du nombre: Re(z) = " . $reel . "\n";
    ?>
    <br>
    <?php
    echo "Partie imaginaire du nombre: Im(z) = " . $imaginaire . "\n";
}

function aff_conjug($reel, $imaginaire)
{
    $oppose_imaginaire = str_replace("-", "+", $imaginaire);
    if ($oppose_imaginaire[0] == "+")
    {
        $oppose_imaginaire = str_replace("+", " + ", $oppose_imaginaire);
        echo "Conjugue: z(barre) = " . $reel . $oppose_imaginaire . "i";
    }
    else
        echo "Conjugue: z(barre) = " . $reel . " - " . $oppose_imaginaire . "i";
}

function aff_invers($reel, $imaginaire) // (RAPPEL: inverse = 1/z = conjugue/a²+b²)
{
    $denominateur = $reel * $reel + $imaginaire * $imaginaire;
    $oppose_imaginaire = str_replace("-", "+", $imaginaire);
    if ($oppose_imaginaire[0] == "+")
    {
        $oppose_imaginaire = str_replace("+", " + ", $oppose_imaginaire);
        echo "Inverse: 1/z = ( " . $reel . $oppose_imaginaire . "i" . " )  /  " . $denominateur;
    }
    elseif ($denominateur != 0)
        echo "Inverse: 1/z = ( " . $reel . " - " . $oppose_imaginaire . "i" . " )  /  " . $denominateur;
    else
        echo "Inverse: 1/z = 0";
}
?>
