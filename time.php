<?php
$currentDateUnixtime = time();
echo "Текущее время в unix time: $currentDateUnixtime";
echo "<br>";
$firstDayOfSummer = '2023-06-01 00:00:00';
echo "Начало лета: $firstDayOfSummer";
// До лета осталось Х дней
$firstDayOfSummerUnixtime = strtotime($firstDayOfSummer);
echo "<br>";
echo "Начало лета в unix time: $firstDayOfSummerUnixtime";
echo "<br>";
$secondsLeftToSummer = $firstDayOfSummerUnixtime - $currentDateUnixtime;
echo "До лета осталось секунд: " . $secondsLeftToSummer;
$minutesLeftToSummer = $secondsLeftToSummer / 60;
echo "<br>";
echo "До лета осталось минут: " . $minutesLeftToSummer;
$daysToSummer = $secondsLeftToSummer / 60 / 60 / 24;
echo "<br>";
echo "До лета осталось дней: " . round($daysToSummer);
