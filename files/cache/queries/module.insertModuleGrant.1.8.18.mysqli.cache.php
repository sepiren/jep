<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleGrant");
$query->setAction("insert");
$query->setPriority("");

${'module_srl8_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl8_argument'}->checkFilter('number');
${'module_srl8_argument'}->checkNotNull();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');

${'name9_argument'} = new Argument('name', $args->{'name'});
${'name9_argument'}->checkNotNull();
if(!${'name9_argument'}->isValid()) return ${'name9_argument'}->getErrorMessage();
if(${'name9_argument'} !== null) ${'name9_argument'}->setColumnType('varchar');

${'group_srl10_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl10_argument'}->checkNotNull();
if(!${'group_srl10_argument'}->isValid()) return ${'group_srl10_argument'}->getErrorMessage();
if(${'group_srl10_argument'} !== null) ${'group_srl10_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl8_argument'})
,new InsertExpression('`name`', ${'name9_argument'})
,new InsertExpression('`group_srl`', ${'group_srl10_argument'})
));
$query->setTables(array(
new Table('`xe_module_grants`', '`module_grants`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>