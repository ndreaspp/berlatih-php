<?php
function ubah_huruf($string){

$length = strlen($string);
        $result = '';
        for ($i = 0; $i < $length; $i++) {
            $alpha = $string[$i];
            $result .= ++$alpha;
        }
        return $result;
    }

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu
?>