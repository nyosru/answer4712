<?php

class Сalc
{

    static public $kolvo = 0;
    static public $e = [];

    public static function kombinatorikaSearch($itog, $nn = 1)
    {

		// при первом запросе обнуляем базовые переменные
        if ($nn == 1) {
            self::$kolvo = 0;
            self::$e = [];
        }

		// и начинаем перебирать варианты
        for (self::$e[$nn] = 1; self::$e[$nn] <= 3; self::$e[$nn]++) {
        	// если сумма сходится, то +1 к количеству и без продолжения по этой ветке
            if (array_sum(self::$e) == $itog) {
                self::$kolvo++;
                // комент, смотрим что за массив по сумме подходит
                //echo '<br/>'.self::$kolvo.' // '.implode(self::$e,' | ');
            }
			// если суммы не хватает то идём дальше и добавляем ещё один перебор
            else if ($itog > $nn) {
                self::round($itog, $nn + 1);
            }
        }

        self::$e[$nn] = 0;
    }
}

Сalc::kombinatorikaSearch(5);
echo '<br/>';
echo 'step 5 = kolvo:' . Сalc::$kolvo;
Сalc::kombinatorikaSearch(8);
echo '<br/>';
echo 'step 8 = kolvo:' . Сalc::$kolvo;
Сalc::kombinatorikaSearch(9);
echo '<br/>';
echo 'step 9 = kolvo:' . Сalc::$kolvo;
