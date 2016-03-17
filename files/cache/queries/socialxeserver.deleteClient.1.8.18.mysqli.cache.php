<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteClient");
$query->setAction("delete");
$query->setPriority("");

${'client_srls1_argument'} = new ConditionArgument('client_srls', $args->client_srls, 'in');
${'client_srls1_argument'}->checkNotNull();
${'client_srls1_argument'}->createConditionValue();
if(!${'client_srls1_argument'}->isValid()) return ${'client_srls1_argument'}->getErrorMessage();
if(${'client_srls1_argument'} !== null) ${'client_srls1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_socialxeserver_member`', '`socialxeserver_member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`client_srl`',$client_srls1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>