<?php

error_reporting( E_ERROR );
$sequence = [1,11,21,31,41,61];
$mis_number = get_missed_number($sequence);
echo '<br>'.'mis_num='.$mis_number;

function get_missed_number($sequence){
    if (count($sequence) < 3) return false;
    //найдем разность
    $diff = ($sequence[count($sequence)-1] - $sequence[0])/count($sequence);
    //найдем пропавший элемент
    for ($i = 0; $i < count($sequence); $i++){
        if (($sequence[$i]+$diff) !== $sequence[$i+1]){
            return $sequence[$i]+$diff;

        }
    }

}
