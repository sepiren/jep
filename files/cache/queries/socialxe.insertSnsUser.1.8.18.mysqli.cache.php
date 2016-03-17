<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSnsUser");
$query->setAction("insert");
$query->setPriority("");

${'id51_argument'} = new Argument('id', $args->{'id'});
${'id51_argument'}->checkNotNull();
if(!${'id51_argument'}->isValid()) return ${'id51_argument'}->getErrorMessage();
if(${'id51_argument'} !== null) ${'id51_argument'}->setColumnType('varchar');

${'service52_argument'} = new Argument('service', $args->{'service'});
${'service52_argument'}->checkNotNull();
if(!${'service52_argument'}->isValid()) return ${'service52_argument'}->getErrorMessage();
if(${'service52_argument'} !== null) ${'service52_argument'}->setColumnType('varchar');

${'regdate53_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate53_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate53_argument'}->isValid()) return ${'regdate53_argument'}->getErrorMessage();
if(${'regdate53_argument'} !== null) ${'regdate53_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`id`', ${'id51_argument'})
,new InsertExpression('`service`', ${'service52_argument'})
,new InsertExpression('`regdate`', ${'regdate53_argument'})
));
$query->setTables(array(
new Table('`xe_socialxe_user`', '`socialxe_user`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>