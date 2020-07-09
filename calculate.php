<?php

    function bayes($pa, $pb, $pba){
        $pab = ($pa * $pba) / $pb;
        return $pab;
    }
