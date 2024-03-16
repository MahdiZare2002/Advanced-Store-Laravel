<?php

use Morilog\Jalali\Jalalian;


function jalaliDate($date, $format = '%A, %d %B %Y')
{
    return Jalalian::forge($date)->format($format);
}
