<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertClient");
$query->setAction("insert");
$query->setPriority("");

${'client_srl3_argument'} = new Argument('client_srl', $args->{'client_srl'});
${'client_srl3_argument'}->checkFilter('number');
${'client_srl3_argument'}->checkNotNull();
if(!${'client_srl3_argument'}->isValid()) return ${'client_srl3_argument'}->getErrorMessage();
if(${'client_srl3_argument'} !== null) ${'client_srl3_argument'}->setColumnType('number');

${'client_token4_argument'} = new Argument('client_token', $args->{'client_token'});
${'client_token4_argument'}->checkNotNull();
if(!${'client_token4_argument'}->isValid()) return ${'client_token4_argument'}->getErrorMessage();
if(${'client_token4_argument'} !== null) ${'client_token4_argument'}->setColumnType('varchar');
if(isset($args->domain)) {
${'domain5_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain5_argument'}->isValid()) return ${'domain5_argument'}->getErrorMessage();
} else
${'domain5_argument'} = NULL;if(${'domain5_argument'} !== null) ${'domain5_argument'}->setColumnType('text');
if(isset($args->member_srl)) {
${'member_srl6_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
} else
${'member_srl6_argument'} = NULL;if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`client_srl`', ${'client_srl3_argument'})
,new InsertExpression('`client_token`', ${'client_token4_argument'})
,new InsertExpression('`domain`', ${'domain5_argument'})
,new InsertExpression('`member_srl`', ${'member_srl6_argument'})
));
$query->setTables(array(
new Table('`xe_socialxeserver_member`', '`socialxeserver_member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>