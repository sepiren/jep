<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => 'jangin.cu921m7vemgt.ap-northeast-2.rds.amazonaws.com',
    'db_userid' => 'jangin',
    'db_password' => 'jang3083',
    'db_database' => 'Jangin_EP',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => 'jangin.cu921m7vemgt.ap-northeast-2.rds.amazonaws.com',
      'db_userid' => 'jangin',
      'db_password' => 'jang3083',
      'db_database' => 'Jangin_EP',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://ep.jangin.com/',
  'lang_type' => 'ko',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'N',
  'time_zone' => '+0900',
);