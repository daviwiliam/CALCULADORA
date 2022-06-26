<?php

    $num1 = filter_input(INPUT_POST, "num1");
    $num2 = filter_input(INPUT_POST, "num2");
    $opera = filter_input(INPUT_POST, "opera");
    $result = "";

    if ($num1 && $num2):
        switch ($opera):
            case ("+"):
                $result = $num1 + $num2;
            break;

            case ("-"):
                $result = $num1 - $num2;
            break;

            case ("*"):
                $result = $num1 * $num2;
            break;

            case ("/"):
                $result = $num1 / $num2;
            
            endswitch;
    endif;

?>