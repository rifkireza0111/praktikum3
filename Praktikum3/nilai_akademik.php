<?php

function kelulusan($total)
{
    if ($total > 64) 
    {
        return 'LULUS';
    } 
    elseif ($total >= 58) 
    {
        return 'MENGULANG';
    } 
    else 
    {
        return 'TIDAK LULUS';
    }
    
}


function grade($total)
{
    if ($total > 84) 
    {
        return 'A';
    } 
    elseif ($total >= 84) 
    {
        return 'A-';
    } 
    elseif ($total >= 79) 
    {
        return 'B+';
    } 
    elseif ($total >= 74) 
    {
        return 'B';
    }
    elseif ($total >= 69) 
    {
        return 'B-';
    }
    elseif ($total >= 64) 
    {
        return 'C+';
    }
    elseif ($total >= 59) 
    {
        return 'C';
    }
    elseif ($total >= 54) 
    {
        return 'C-';
    } 
    elseif ($total >= 50) 
    {
        return 'D';
    }     
    else 
    {
        return 'E';
    }
}





?>