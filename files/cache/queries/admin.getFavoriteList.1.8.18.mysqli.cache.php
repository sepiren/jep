<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl13_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl13_argument'}->createConditionValue();
if(!${'site_srl13_argument'}->isValid()) return ${'site_srl13_argument'}->getErrorMessage();
} else
${'site_srl13_argument'} = NULL;if(${'site_srl13_argument'} !== null) ${'site_srl13_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module14_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module14_argument'}->createConditionValue();
if(!${'module14_argument'}->isValid()) return ${'module14_argument'}->getErrorMessage();
} else
${'module14_argument'} = NULL;if(${'module14_argument'} !== null) ${'module14_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl13_argument,"equal")
,new ConditionWithArgument('`module`',$module14_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>