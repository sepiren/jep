<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl30_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl30_argument'}->checkFilter('number');
${'menu_item_srl30_argument'}->checkNotNull();
if(!${'menu_item_srl30_argument'}->isValid()) return ${'menu_item_srl30_argument'}->getErrorMessage();
if(${'menu_item_srl30_argument'} !== null) ${'menu_item_srl30_argument'}->setColumnType('number');

${'parent_srl31_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl31_argument'}->checkFilter('number');
${'parent_srl31_argument'}->ensureDefaultValue('0');
if(!${'parent_srl31_argument'}->isValid()) return ${'parent_srl31_argument'}->getErrorMessage();
if(${'parent_srl31_argument'} !== null) ${'parent_srl31_argument'}->setColumnType('number');

${'menu_srl32_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl32_argument'}->checkFilter('number');
${'menu_srl32_argument'}->checkNotNull();
if(!${'menu_srl32_argument'}->isValid()) return ${'menu_srl32_argument'}->getErrorMessage();
if(${'menu_srl32_argument'} !== null) ${'menu_srl32_argument'}->setColumnType('number');

${'name33_argument'} = new Argument('name', $args->{'name'});
${'name33_argument'}->checkNotNull();
if(!${'name33_argument'}->isValid()) return ${'name33_argument'}->getErrorMessage();
if(${'name33_argument'} !== null) ${'name33_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc34_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc34_argument'}->isValid()) return ${'desc34_argument'}->getErrorMessage();
} else
${'desc34_argument'} = NULL;if(${'desc34_argument'} !== null) ${'desc34_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url35_argument'} = new Argument('url', $args->{'url'});
if(!${'url35_argument'}->isValid()) return ${'url35_argument'}->getErrorMessage();
} else
${'url35_argument'} = NULL;if(${'url35_argument'} !== null) ${'url35_argument'}->setColumnType('varchar');

${'is_shortcut36_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut36_argument'}->ensureDefaultValue('N');
${'is_shortcut36_argument'}->checkNotNull();
if(!${'is_shortcut36_argument'}->isValid()) return ${'is_shortcut36_argument'}->getErrorMessage();
if(${'is_shortcut36_argument'} !== null) ${'is_shortcut36_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window37_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window37_argument'}->isValid()) return ${'open_window37_argument'}->getErrorMessage();
} else
${'open_window37_argument'} = NULL;if(${'open_window37_argument'} !== null) ${'open_window37_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand38_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand38_argument'}->isValid()) return ${'expand38_argument'}->getErrorMessage();
} else
${'expand38_argument'} = NULL;if(${'expand38_argument'} !== null) ${'expand38_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn39_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn39_argument'}->isValid()) return ${'normal_btn39_argument'}->getErrorMessage();
} else
${'normal_btn39_argument'} = NULL;if(${'normal_btn39_argument'} !== null) ${'normal_btn39_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn40_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn40_argument'}->isValid()) return ${'hover_btn40_argument'}->getErrorMessage();
} else
${'hover_btn40_argument'} = NULL;if(${'hover_btn40_argument'} !== null) ${'hover_btn40_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn41_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn41_argument'}->isValid()) return ${'active_btn41_argument'}->getErrorMessage();
} else
${'active_btn41_argument'} = NULL;if(${'active_btn41_argument'} !== null) ${'active_btn41_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls42_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls42_argument'}->isValid()) return ${'group_srls42_argument'}->getErrorMessage();
} else
${'group_srls42_argument'} = NULL;if(${'group_srls42_argument'} !== null) ${'group_srls42_argument'}->setColumnType('text');

${'listorder43_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder43_argument'}->checkNotNull();
if(!${'listorder43_argument'}->isValid()) return ${'listorder43_argument'}->getErrorMessage();
if(${'listorder43_argument'} !== null) ${'listorder43_argument'}->setColumnType('number');

${'regdate44_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate44_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate44_argument'}->isValid()) return ${'regdate44_argument'}->getErrorMessage();
if(${'regdate44_argument'} !== null) ${'regdate44_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl30_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl31_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl32_argument'})
,new InsertExpression('`name`', ${'name33_argument'})
,new InsertExpression('`desc`', ${'desc34_argument'})
,new InsertExpression('`url`', ${'url35_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut36_argument'})
,new InsertExpression('`open_window`', ${'open_window37_argument'})
,new InsertExpression('`expand`', ${'expand38_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn39_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn40_argument'})
,new InsertExpression('`active_btn`', ${'active_btn41_argument'})
,new InsertExpression('`group_srls`', ${'group_srls42_argument'})
,new InsertExpression('`listorder`', ${'listorder43_argument'})
,new InsertExpression('`regdate`', ${'regdate44_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>