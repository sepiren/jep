<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/skins/default','header.html') ?>
<p class="empty"><?php echo $__Context->lang->empty_client ?></p>
<div style="text-align: center;"><a href="<?php echo getUrl('act', 'dispSocialxeserverInsertClient') ?>" class="button green large"><span><?php echo $__Context->lang->cmd_create_client ?></span></a></div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/skins/default','footer.html') ?>