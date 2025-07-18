<?php

declare(strict_types=1);


function is_input_empty(object $pdo, string $pwd)
{
    if (empty($name) || empty($pwd)) {

        return true;
    } else {
        return false;
    }
}



function is_name_wrong(bool|array $result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(object $pdo, string $hashedPwd)
{
    if (!password_verify($_POST['$pwd'], $hashedPwd)) {
        return true;
    } else {
        return false;
    }
}
