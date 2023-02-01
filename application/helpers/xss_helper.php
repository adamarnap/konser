<?php

function esc($str){
    echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}
