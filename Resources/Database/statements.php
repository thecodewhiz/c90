<?php

$database_name = "CatSysDatabase";
$user_credentials_table = "login_credentials";
$invoices_table = "invoices";
//create db
$create_database_statement = "create database ".$database_name;

// create login credentials table
// later hash password with md5 encryption
$create_login_credentials_table = "create table ".$user_credentials_table. " (id int primary key auto_increment, username varchar(255) unique, password varchar(255))";

// create default user
$create_default_user = "insert into ".$user_credentials_table." values(id,\"admin123\",\"admin123\")";

// create invoices table
$create_invoices_table = "create table $invoices_table (id int primary key auto_increment, supplier varchar(255) not null, item varchar(255) not null, idate date not null, unit_price int not null, quantity int not null, total int not null, deleted int default 0)";

// select invoices
$select_invoices = "select * from $invoices_table";


?>