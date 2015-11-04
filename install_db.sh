#!/bin/bash
touch .env.php
echo "Please write the user of mysql:"
read user_db
echo "Please write the pass of mysql:"
read -s password_mysql
echo
mysql -u $user_db -p$password_mysql -e "create database survey"
mysql -u $user_db -p$password_mysql survey < survey.sql
cat < .env.php <<EOF
<?php
return array(
    'DBhost' => 'localhost',
    'DBname' => 'survey',
    'DBuser' => $user_db,
    'DBpass' => $password_mysql,
);
?>
EOF
exit

