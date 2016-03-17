<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'point3_argument'} = new Argument('point', $args->{'point'});
${'point3_argument'}->checkFilter('number');
${'point3_argument'}->ensureDefaultValue('0');
${'point3_argument'}->checkNotNull();
if(!${'point3_argument'}->isValid()) return ${'point3_argument'}->getErrorMessage();
if(${'point3_argument'} !== null) ${'point3_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`point`', ${'point3_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>