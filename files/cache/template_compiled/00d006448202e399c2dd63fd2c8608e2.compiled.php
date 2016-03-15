<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/m.skins/default','header.html') ?>
<div class="socialxeserver">
	<p class="empty"><?php echo $__Context->lang->empty_client ?></p>
	<div style="text-align: center;"><a href="<?php echo getUrl('act', 'dispSocialxeserverInsertClient') ?>" class="bn"><span><?php echo $__Context->lang->cmd_create_client ?></span></a></div>
</div>