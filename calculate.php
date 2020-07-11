<?php

    function bayes($pa, $pb, $pba){
        $pab = ($pa * $pba) / $pb;
        return $pab;
    }

    function intro($way_it_happen, $total){
        $answer = $way_it_happen / $total;
        return $answer;
    }

    function conditional($paandb, $pa){
        $answer = $paandb / $pa;
        return $answer;
    }
?>