<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->socialxe ?></h1>
</div>
<?php 
	$__Context->validator_ids = array(
		'modules/socialxe/tpl/index/1' => 1,
	);
 ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && isset($__Context->validator_ids[$__Context->XE_VALIDATOR_ID])){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispSocialxeAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act', 'dispSocialxeAdminConfig') ?>"><?php echo $__Context->lang->cmd_setting ?></a></li>
	<li<?php if($__Context->act == 'dispSocialxeAdminBitly'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act', 'dispSocialxeAdminBitly') ?>"><?php echo $__Context->lang->cmd_bitly ?></a></li>
</ul>
