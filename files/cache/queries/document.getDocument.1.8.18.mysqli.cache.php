<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocument");
$query->setAction("select");
$query->setPriority("");

${'document_srl21_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl21_argument'}->checkFilter('number');
${'document_srl21_argument'}->checkNotNull();
${'document_srl21_argument'}->createConditionValue();
if(!${'document_srl21_argument'}->isValid()) return ${'document_srl21_argument'}->getErrorMessage();
if(${'document_srl21_argument'} !== null) ${'document_srl21_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl21_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>