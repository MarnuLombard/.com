<?php

include_once('phpconsole/phpconsole.php');

global $phpconsole;
$phpconsole = new Phpconsole();
$phpconsole->set_backtrace_depth(1);

/*
==============================================
USER'S SETTINGS
==============================================
*/

phpconsole_cookie('marnu');

$phpconsole->enable_auto_recognition('marnulombard.com.com'); // see https://app.phpconsole.com/docs/auto-recognition for details

$phpconsole->add_user('marnu', 'lbL8R2fGmMlVSkLSBwIKTUwbvKd8IHTZDH5bEQLYeeLOvScwcd9RPmeeF9SmLUhn'); // you can add more developers, just execute another add_user()




function phpconsole($data_sent, $user = false) {
    global $phpconsole;
    return $phpconsole->send($data_sent, $user);
}

function phpconsole_cookie($user) {
    global $phpconsole;
    $phpconsole->set_user_cookie($user);
}

function phpconsole_unset_cookie($user) {
    global $phpconsole;
    $phpconsole->unset_user_cookie($user);
}

/*
Shorthand function for lazy developers (author included)
*/

function p($data_sent, $user = false) {
    global $phpconsole;
    return $phpconsole->send($data_sent, $user);
}
