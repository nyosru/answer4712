<?php

class calc
{

    static public $kolvo = 0;
    static public $e = [];

    public static function  round($itog, $nn)
    {

        if ($nn == 1) {
            calc::$kolvo = 0;
            calc::$e = [];
        }

        for (self::$e[$nn] = 1; self::$e[$nn] <= 3; self::$e[$nn]++) {
            if (array_sum(self::$e) == $itog) {
                self::$kolvo++;
                // комент, смотрим что за массив по сумме подходит 
                //echo '<br/>'.self::$kolvo.' // '.implode(self::$e,' | ');
            } else if ($itog > $nn) {

                self::round($itog, $nn + 1);
            }
        }
        self::$e[$nn] = 0;
    }
}

calc::round(5, 1);
echo '<br/>';
echo 'step 5 = kolvo:' . calc::$kolvo;
calc::round(8, 1);
echo '<br/>';
echo 'step 8 = kolvo:' . calc::$kolvo;
calc::round(9, 1);
echo '<br/>';
echo 'step 9 = kolvo:' . calc::$kolvo;
