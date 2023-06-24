<?php
$counterFile = 'counter.txt';

// Читаем текущее значение счетчика из файла
$counter = file_get_contents($counterFile);

if ($counter === false) {
    die('Ошибка при чтении файла');
}

// Увеличиваем значение счетчика на 1
$counter++;

// Записываем измененное значение обратно в файл
$result = file_put_contents($counterFile, $counter);

if ($result === false) {
    die('Ошибка при записи файла');
}

// Возвращаем новое значение счетчика в ответе
echo $counter;
?>
