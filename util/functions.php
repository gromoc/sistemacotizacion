<?php

function add_js($js){
    if(isset($js)){
        $url= base_url."public/pages/".$js;
        $ruta="<script type='text/javascript' src=".$url."></script>";
        return $ruta;
    }
}

?>