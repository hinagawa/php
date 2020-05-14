<?php
if (isset($_REQUEST['choose'])) {
    $month = $_REQUEST['choose'];
    if ($month == 0) {
        $date = new DateTime();
        $month = $date->format('n');
    }
    $begin = new DateTime();
    $month1 = $begin->format('n');
    $year = $begin->format('Y');
    $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
    $current_day = $begin->format('j');
    $first = date('N', mktime(0, 0, 0, $month, 1, $year));

    $calendar = '<table>';
    $calendar .= '<tr>';
    $name = array('Mon', 'Tue', 'Wed', 'Tue', 'Fri', 'Sat', 'Sun');
    for ($i = 0; $i < 7; $i++) {
        $calendar .= '<th>' . '<strong>' . $name[$i] . '</strong>' . '</th>';
    }
    $calendar .= '</tr>';
    $days = 1;
    $counter = 1;
    $calendar .= '<tr>';
    while ($counter != $first) {
        $calendar .= '<th>' . " " . '</th>';
        $counter++;
    }
    for ($i = 0; $i < $days_in_month; $i++) {

        if (date('N', mktime(0, 0, 0, $month, $days, $year)) == 1) {
            $calendar .= '<tr>';
            $calendar .= '<th >' . $days . '</th>';

        } else
            if (date('N', mktime(0, 0, 0, $month, $days, $year)) == 6) {
                $calendar .= '<th style="color: red">' . $days . '</th>';
            } else
                if (date('N', mktime(0, 0, 0, $month, $days, $year)) == 7) {
                    $calendar .= '<th style="color: red">' . $days . '</th>';
                    $calendar .= '</tr>';
                } else
                    if ($month == $month1 && $days == $current_day) {
                        $calendar .= '<th style="color: green">' . '<strong>' . $days . '</strong>' . '</th>';
                    } else {
                        $calendar .= '<th>' . $days . '</th>';
                    }
        $days++;
    }
    $calendar .= '</table>';

    echo $calendar;

} else
    include "index.html";

?>