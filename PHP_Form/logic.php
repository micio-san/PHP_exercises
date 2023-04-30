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
$regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
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
    if (!is_numeric($_POST["phone"]) || empty($_POST["phone"]) || ctype_space($_POST["phone"]) === true || strlen($_POST["phone"]) != 10) {
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
        $GLOBALS["mail"] = $_POST["email"];
    }
}

checkMail();

function checkPassword()
{
    global $err;
    global $regex;
    global $pass;
    global $c_pass;
    if (10 > strlen($_POST["password"])) {
        array_push($err, "Your password should at least be 10 characters long");
    } elseif (!preg_match($regex, $_POST["password"])) {
        array_push($err, "Your password should contain both uppercase letters,lowercase letters, numbers and special charachters");
    } else {
        $pass = $_POST["password"];
    };
    $pass === $_POST["con_password"] ? $c_pass = $_POST["con_password"] : array_push($err, "Your passwords don't match!");
};

checkPassword();

function checkTerm()
{
    global $err;
    if (!isset($_POST["terms"])) {
        array_push($err, "Please Agree to the terms and coditions.");
    } else {
        $GLOBALS["terms"] = true;
    }
}

checkTerm();

var_dump($err);
