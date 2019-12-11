<?php
function getBookName($name) {
    if($name === "lotr") {
        return "Властелин колец";
    } else if($name === "metro") {
        return "Метро 2033";
    } else if($name === "chairs") {
        return "12 стульев";
    }
    return "Властелин колец";
}

function getBookRowByName($name, $csv) {
    $csvLineCount = sizeof($csv);
    for ($i = 0; $i < $csvLineCount; $i++) {
        if ( $csv[$i][0] === $name ) {
            return $csv[$i];
        }
    }
}

function getName($name, $csv) {
    return getBookRowByName($name, $csv)[0];
}

function getTime($name, $csv) {
    return getBookRowByName($name, $csv)[1];
}

function getAuthor($name, $csv) {
    return getBookRowByName($name, $csv)[2];
}

function getGengre($name, $csv) {
    return getBookRowByName($name, $csv)[3];
}

function getDescription($name, $csv) {
    return getBookRowByName($name, $csv)[4];
}