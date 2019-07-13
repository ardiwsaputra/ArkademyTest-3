<?php

    function mrBruno($jenisOperasi, $nilai, $digit)
    {
        if(($nilai <= 1000) && (($jenisOperasi == "SUM") || ($jenisOperasi == "MUL") || ($jenisOperasi == "SUB") || ($jenisOperasi == "DIV")))
        {
            $hasil = 0;
                
            if ($jenisOperasi == "SUM")
            {
                foreach($digit as $deret)
                {
                    $hasil = $deret + $hasil;
                }
            }
            else if ($jenisOperasi == "MUL")
            {
                $hasil = 1;
                foreach($digit as $deret)
                {
                    $hasil = $hasil * $deret;
                }
            }
            else if ($jenisOperasi == "SUB")
            {
                foreach($digit as $deret)
                {
                    $hasil = $deret - $hasil;
                }
            }
            else if ($jenisOperasi == "DIV")
            {
                $hasil = 1;
                foreach($digit as $deret)
                {
                    $hasil = floor($deret / $hasil);
                }
            }
            
            echo $hasil;
        }
        else 
        {
            echo "Format Salah";
        }
    }

    mrBruno('DIV',1000,[11,13,15]);

?>