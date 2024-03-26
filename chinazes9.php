<?php

function customSort(array $strings, callable $callback) {
    usort($strings, $callback);
    return $strings;
}

// Пример использования функции с анонимной функцией для сортировки строк по длине
$strings = ["apple", "banana", "orange", "grape", "kiwi"];
$sortedStrings = customSort($strings, function($a, $b) {
    return strlen($a) <=> strlen($b);
});

print_r($sortedStrings);
