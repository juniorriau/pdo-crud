<?php
// pdo-crud 20130516 (C) Mark Constable (AGPLv3)
// https://github.com/markc/pdo-crud

define('DBG', 0);
if (DBG > 1) error_log(var_export($_REQUEST, true));
if (DBG > 2) error_log(var_export($_SERVER, true));
return [
  'htitle' => 'PDO-CRUD',
  'btitle' => 'PDO-CRUD Notes',
  'dbhost' => 'localhost',
  'dbpath' => '.htdb/test.db',
  'dbname' => 'test',
  'dtable' => 'pdo_crud',
  'dbuser' => 'root',
  'dbpass' => '',
  'dbtype' => 'sqlite',
  'dbport' => '3306',
  'sefurl' => true,
  'paglen' => 4,
  'orderby' => 'updated',
  'ascdesc' => 'DESC',
];

?>
