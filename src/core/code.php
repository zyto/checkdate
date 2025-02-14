<?php
if (!empty($_POST['date'])) {
    checkMyDate($_POST['date']);
}

function checkMyDate($date): void
{

    $err = [];

    $pattern = '~^(?<day>\d{2})\.(?<month>\d{2})\.(?<year>\d{4})$~';
    $res = preg_match($pattern, $date, $matches);

    if ($res === 1) {
        //Не проверяем что переменные это числа, т.к. мы это уже проверили регуляркой
        $year = (int)$matches['year'];
        $month = (int)$matches['month'];
        $day = (int)$matches['day'];

        if ($year < 1) {
            $err[] = 'Год должен быть больше нуля!';
        }

        //проверяем месяц, он должен быть в диапазоне от 1 до 12
        if ($month < 1 || $month > 12) {
            $err[] = 'Номер месяца должен быть в диапазоне от 01 до 12';
        }
        //проверяем день, с учётом месяца, он должен быть в диапазоне от 1 до 28-31 в зависимости от месяца
        $lastDayOfMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
        if ($day < 1 || $day > $lastDayOfMonth) {
            $err[] = "День должен быть в диапазоне от 01 до $lastDayOfMonth";
        }
    }

    if ($err || $res !== 1) {
        echo '<div class="p-3 mt-3 text-bg-danger rounded-3">Вы ввели некорректную дату!';
        foreach ($err as $e) {
            echo '<br>' . $e;
        }
        echo '</div>';

    } else {
        echo '<div class="p-3 mt-3 text-bg-success rounded-3">Дата корректная</div>';
    }
}