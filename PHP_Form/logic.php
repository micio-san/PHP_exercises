<?php
$succ = "";
$err = [];
$name = "";
$l_name = "";
$phone = "";
$mail = "";
$pass = "";
$c_pass = "";
$terms = "";
$news = "";
//check names et lastnames
function checkingsStrs($which, $x, $var)
{
    if (is_numeric($which) || empty($which) || ctype_space($which) === true) {
        global $err;
        array_push($err, "Please insert a valid {$x}");
    } else {
        trim($which);
        $GLOBALS[$var] = $which;
    }
};

checkingsStrs($_POST["first_name"], "First Name", "name");
checkingsStrs($_POST["second_name"], "Last Name", "l_name");

//phone 

function checkPhone()
{
    if (!is_numeric($_POST["phone"]) || empty($_POST["phone"]) || ctype_space($_POST["phone"]) === true) {
        global $err;
        array_push($err, "Please insert a valid Phone Number");
    } else {
        $GLOBALS["phone"] = $_POST["phone"];
    }
}

checkPhone();

//mail

function checkMail()
{
    if (!str_contains($_POST["email"], "@") || !str_ends_with($_POST["email"], ".com") || empty($_POST["email"]) || ctype_space($_POST["email"]) === true) {
        global $err;
        array_push($err, "Please insert a valid Email");
    } else {
        $GLOBALS["email"] = $_POST["email"];
    }
}

checkMail();

function checkPassword()
{
    global $err;
    if (10 > strlen($_POST["password"])) {
        $err = "Your password should at least be 10 characters long";
    } elseif (!ctype_alnum($_POST["password"])) {
        $err = "Your password shoul contain letters, number and special charachters";
    }
};

checkPassword();
echo "<pre>";
var_dump($err);
echo "</pre>";
