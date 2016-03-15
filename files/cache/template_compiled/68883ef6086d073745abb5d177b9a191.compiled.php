<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/socialxeserver/tpl/js/admin.js--><?php $__tmp=array('modules/socialxeserver/tpl/js/admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->socialxeserver ?></h1>
</div>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispSocialxeserverAdminClient'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act', 'dispSocialxeserverAdminClient') ?>"><?php echo $__Context->lang->cmd_client_list ?></a></li>
	<?php if($__Context->act == 'dispSocialxeserverAdminModifyClient'){ ?><li class="x_active"><a href="#"><?php echo $__Context->lang->cmd_modify_client ?></a></li><?php } ?>
	<li<?php if($__Context->act == 'dispSocialxeserverAdminServiceConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act', 'dispSocialxeserverAdminServiceConfig') ?>"><?php echo $__Context->lang->cmd_service_config ?></a></li>
	<?php if($__Context->service_module_info){ ?><li<?php if($__Context->act == 'dispSocialxeserverAdminServiceGrant'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act', 'dispSocialxeserverAdminServiceGrant') ?>"><?php echo $__Context->lang->cmd_manage_grant ?></a></li><?php } ?>
	<li<?php if($__Context->act == 'dispSocialxeserverAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act', 'dispSocialxeserverAdminConfig') ?>"><?php echo $__Context->lang->cmd_setting ?></a></li>
</ul>
