<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackageSqlByPath");
$query->setAction("select");
$query->setPriority("");

${'path15_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path15_argument'}->checkNotNull();
${'path15_argument'}->createConditionValue();
if(!${'path15_argument'}->isValid()) return ${'path15_argument'}->getErrorMessage();
if(${'path15_argument'} !== null) ${'path15_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`package_srl`')
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path15_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>