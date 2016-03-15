<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModulePartConfig");
$query->setAction("insert");
$query->setPriority("");

${'module26_argument'} = new Argument('module', $args->{'module'});
${'module26_argument'}->checkNotNull();
if(!${'module26_argument'}->isValid()) return ${'module26_argument'}->getErrorMessage();
if(${'module26_argument'} !== null) ${'module26_argument'}->setColumnType('varchar');

${'module_srl27_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl27_argument'}->checkNotNull();
if(!${'module_srl27_argument'}->isValid()) return ${'module_srl27_argument'}->getErrorMessage();
if(${'module_srl27_argument'} !== null) ${'module_srl27_argument'}->setColumnType('number');
if(isset($args->config)) {
${'config28_argument'} = new Argument('config', $args->{'config'});
if(!${'config28_argument'}->isValid()) return ${'config28_argument'}->getErrorMessage();
} else
${'config28_argument'} = NULL;if(${'config28_argument'} !== null) ${'config28_argument'}->setColumnType('text');

${'regdate29_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate29_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate29_argument'}->isValid()) return ${'regdate29_argument'}->getErrorMessage();
if(${'regdate29_argument'} !== null) ${'regdate29_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module26_argument'})
,new InsertExpression('`module_srl`', ${'module_srl27_argument'})
,new InsertExpression('`config`', ${'config28_argument'})
,new InsertExpression('`regdate`', ${'regdate29_argument'})
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>