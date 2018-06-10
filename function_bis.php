<?php
function aff_module($reel, $imaginaire)
{
    $module_carre = $reel * $reel + $imaginaire * $imaginaire;
    $module = sqrt($module_carre);
    echo "Module: r = " . "√" . $module_carre . " = " . sprintf("%.1e", $module);
}

function aff_arg($reel, $imaginaire)
{
    if ($reel != 0)
        $quotient = $imaginaire / $reel;
    else
        $quotient = 0;
    if ($reel[0] < 0)
    {
        if ($imaginaire < 0)
        {
            echo "Argument: θ = -π + atan( " . $quotient . " ) = ";
            $arg = (-1) * pi() + atan($quotient);
        }
        else
        {
            echo "Argument: θ = π + atan( " . $quotient . " ) = ";
            $arg = pi() + atan($quotient);
        }
    }
    else
    {
        echo "Argument: θ = atan( " . $quotient . " ) = ";
        $arg = atan($quotient);
    }
    echo sprintf("%.1e", $arg);
}

function aff_trigo($reel, $imaginaire)
{
    $module = sqrt($reel * $reel + $imaginaire * $imaginaire);
    if ($module != 0)
    {
        $cos = $reel / $module;
        $sin = $imaginaire / $module;
    }
    else
    {
        $cos = 0;
        $sin = 0;
    }

    if ($sin < 0)
    {
        $sin = str_replace("-", "", $sin);
        echo "Ecriture Trigonometrique: z = " . sprintf("%.1e", $module) . " ( " . sprintf("%.1e", $cos) . " - " . "i " . sprintf("%.1e", $sin) . " ) ";
    }
    else
        echo "Ecriture Trigonometrique: z = " . sprintf("%.1e", $module) . " ( " . sprintf("%.1e", $cos) . " + " . "i " . sprintf("%.1e", $sin) . " )";
}
?>
