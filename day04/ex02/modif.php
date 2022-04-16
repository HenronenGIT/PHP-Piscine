<?php
// curl -d login=x -d passwd=21 -d submit=OK 'http://localhost:8080/d04/ex01/create.php'
// curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8080/d04/ex02/modif.php'
// more /goinfre/hmaronen/mamp/apache2/htdocs/d04/private/passwd
if ($_POST["submit"] == "OK")
{
    if ($_POST["newpw"] == "")
        panic();
    $saved_pw = user_exist();
    if ($saved_pw) 
        modify_password();
     else
        panic();

    echo "OK\n";
}
else
    panic();

function user_exist()
{
    $input_login = $_POST["login"];
    $input_oldpw = encrypt_password($_POST["oldpw"]);
    $unseril_arr = get_unserialized_arr();

    foreach ($unseril_arr as $i)
    {
        if ($i["login"] == $input_login && $i["passwd"] == $input_oldpw)
        {
            $saved_pw = $i["passwd"];
            return ($saved_pw);
        }
    }
    return (NULL);
}

function    modify_password()
{
    $unseril_arr = get_unserialized_arr();
    $i = 0;
    while ($unseril_arr[$i]["login"] != $_POST["login"] && $unseril_arr[$i])
        $i++;
    $unseril_arr[$i]["passwd"] = encrypt_password($_POST["newpw"]);
    file_put_contents("../private/passwd", serialize($unseril_arr));
    return ;
}

function    get_unserialized_arr()
{
    $unserialized_arr = unserialize(file_get_contents("../private/passwd"). "\n");
    return ($unserialized_arr);
}

function    encrypt_password($plain_pw)
{
    $crypted_pw = hash('whirlpool', $plain_pw);
    return ($crypted_pw);
}

function panic()
{
    echo "ERROR\n";
    exit;
}
?>
