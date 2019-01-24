<?php
function concatenate($transform, ...$strings) {
        $string = '';
        foreach($strings as $piece) {
            $string .= $piece;
        }
        return($transform($string));
    }

    echo concatenate("strtoupper", "I'd ", "like ",
        4 + 2, " apples");
?>