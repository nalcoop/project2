<?php
    function sanitize($str,$length=50){
        $str=trim($str);

        //turning any html enetities into their character types so that the code won't execute if/when printed back onto screen
        $str=htmlentities($str,ENT_QUOTES);

        //truncars
        return substr($str,0,$length);
    }