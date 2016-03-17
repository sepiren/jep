<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->socialxe ?> <a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_socialxe ?></p>
<?php if($__Context->module=='admin' && $__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispSocialxeAdminSettingApi'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispSocialxeAdminSettingApi') ?>"><?php echo $__Context->lang->api_setting ?></a></li>
	<li<?php if($__Context->act=='dispSocialxeAdminSetting'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispSocialxeAdminSetting') ?>"><?php echo $__Context->lang->cmd_environment_setting ?></a></li>
	<li<?php if($__Context->act=='dispSocialxeAdminLogRecord'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispSocialxeAdminLogRecord') ?>"><?php echo $__Context->lang->cmd_log_record ?></a></li>
	<li<?php if($__Context->act=='dispSocialxeAdminSnsList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispSocialxeAdminSnsList') ?>"><?php echo $__Context->lang->sns_list ?></a></li>
</ul><?php } ?>	
<?php if(!$__Context->module_info){ ?><div class="message error"><p><?php echo $__Context->lang->msg_not_install_module ?></p></div><?php } ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/socialxe/tpl/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>