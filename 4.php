<?php

function buyEgg($tanggal, $uang)
{
    $bonusTelur = 0;
    $jmlBeli = $uang / 2000;
    $jmlBeli = floor($jmlBeli);
    
    for ($i = 2; $i <= $tanggal-1; $i++)
    {
        if ($tanggal % $i != 0) 
        {
            $jmlLusin = $jmlBeli / 12;
            $bonusTelur = floor($jmlLusin);
            if ($tanggal % 2 != 0) 
            {
                $jmlKodi = $jmlBeli / 20;
                $bonusTelur = $bonusTelur + floor($jmlKodi);
            }

            if ($tanggal % 5 == 0) 
            {
                if ($bonusTelur % 2 == 0) 
                {
                    $bonusTelur = $bonusTelur * 10;
                }
                else
                {
                    $bonusTelur = $bonusTelur * 5;
                }
            }
            echo $jmlBeli + $bonusTelur;
            die();
        }
    }
     
    if ($tanggal % 2 != 0) 
    {
        $jmlKodi = $jmlBeli / 20;
        $bonusTelur = $bonusTelur + floor($jmlKodi);
    }
    
    if ($tanggal % 5 == 0) 
    {
        if ($bonusTelur % 2 == 0) 
        {
            $bonusTelur = $bonusTelur * 10;
        }
        else
        {
            $bonusTelur = $bonusTelur * 5;
        }
    }
    
    echo $jmlBeli + $bonusTelur;
    
}

buyEgg(10, 54000);

?>