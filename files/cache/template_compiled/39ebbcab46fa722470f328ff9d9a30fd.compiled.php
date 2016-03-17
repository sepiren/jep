<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxe/tpl','_header.html') ?>
<!--#Meta:modules/module/tpl/js/module_list.js--><?php $__tmp=array('modules/module/tpl/js/module_list.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="socialxe" />
	<input type="hidden" name="act" value="procSocialxeAdminSetting" />
	<input type="hidden" name="xe_validator_id" value="modules/socialxe/tpl/1" />
	<section class="section">
		<h1><?php echo $__Context->lang->is_default ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="delete_auto_log_record"><?php echo $__Context->lang->delete_auto_log_record ?></label>
			<div class="x_controls">
				<input type="number" min="0" name="delete_auto_log_record" id="delete_auto_log_record" value="<?php echo $__Context->config->delete_auto_log_record?$__Context->config->delete_auto_log_record:0 ?>" style="width:50px" /> <?php echo $__Context->lang->unit_day ?>
				<p class="x_help-inline"><?php echo $__Context->lang->about_delete_auto_log_record ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_services"><?php echo $__Context->lang->sns_services ?></label>
			<div class="x_controls">
				<?php if($__Context->default_services&&count($__Context->default_services))foreach($__Context->default_services as $__Context->key=>$__Context->val){ ?><label class="x_inline" for="sns_services_<?php echo $__Context->key ?>">
					<input type="checkbox" name="sns_services[]" id="sns_services_<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>"<?php if(in_array($__Context->val,$__Context->config->sns_services)){ ?> checked="checked"<?php } ?> /> <?php echo ucwords($__Context->val) ?>
				</label><?php } ?>
				<a href="#sns_services_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="sns_services_help" class="x_help-block" hidden><?php echo $__Context->lang->about_sns_services ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_profile"><?php echo $__Context->lang->sns_profile ?></label>
			<div class="x_controls">
				<label class="x_inline" for="sns_profile">
					<input type="checkbox" name="sns_profile" id="sns_profile" value="Y"<?php if($__Context->config->sns_profile=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_sns_profile ?>
				</label>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->cmd_set_design_info ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="layout"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select id="layout" name="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->val->layout_srl == $__Context->config->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select id="skin" name="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->key ?>)</option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select id="mlayout" name="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->val->layout_srl == $__Context->config->mlayout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select id="mskin" name="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->mskin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->key ?>)</option><?php } ?>
				</select>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->sns_login ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_login"><?php echo $__Context->lang->sns_login ?></label>
			<div class="x_controls">
				<label class="x_inline" for="sns_login">
					<input type="checkbox" name="sns_login" id="sns_login" value="Y"<?php if($__Context->config->sns_login=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_sns_login ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="default_login"><?php echo $__Context->lang->sns_default_login ?></label>
			<div class="x_controls">
				<label class="x_inline" for="default_login">
					<input type="checkbox" name="default_login" id="default_login" value="Y"<?php if($__Context->config->default_login=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_sns_default_login ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="default_signup"><?php echo $__Context->lang->cmd_signup ?></label>
			<div class="x_controls">
				<label class="x_inline" for="default_signup">
					<input type="checkbox" name="default_signup" id="default_signup" value="Y"<?php if($__Context->config->default_signup=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_sns_default_signup ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="delete_member_forbid"><?php echo $__Context->lang->delete_member_forbid ?></label>
			<div class="x_controls">
				<label class="x_inline" for="delete_member_forbid">
					<input type="checkbox" name="delete_member_forbid" id="delete_member_forbid" value="Y"<?php if($__Context->config->delete_member_forbid=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_delete_member_forbid ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_follower_count"><?php echo $__Context->lang->sns_follower_count ?></label>
			<div class="x_controls">
				<input type="number" min="0" name="sns_follower_count" id="sns_follower_count" value="<?php echo $__Context->config->sns_follower_count?$__Context->config->sns_follower_count:0 ?>" style="width:60px" />
				<a href="#sns_follower_count_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="sns_follower_count_help" class="x_help-block" hidden><?php echo $__Context->lang->about_sns_follower_count ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mail_auth_valid_hour"><?php echo $__Context->lang->mail_auth_valid_hour ?></label>
			<div class="x_controls">
				<input type="number" min="0" name="mail_auth_valid_hour" id="mail_auth_valid_hour" value="<?php echo $__Context->config->mail_auth_valid_hour?$__Context->config->mail_auth_valid_hour:0 ?>" style="width:60px" />
				<a href="#mail_auth_valid_hour_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mail_auth_valid_hour_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mail_auth_valid_hour ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_suspended_account"><?php echo $__Context->lang->sns_suspended_account ?></label>
			<div class="x_controls">
				<label class="x_inline" for="sns_suspended_account">
					<input type="checkbox" name="sns_suspended_account" id="sns_suspended_account" value="Y"<?php if($__Context->config->sns_suspended_account=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_sns_suspended_account ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_keep_signed"><?php echo $__Context->lang->keep_signed ?></label>
			<div class="x_controls">
				<label class="x_inline" for="sns_keep_signed">
					<input type="checkbox" name="sns_keep_signed" id="sns_keep_signed" value="Y"<?php if($__Context->config->sns_keep_signed=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_sns_keep_signed ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_input_add_info"><?php echo $__Context->lang->sns_input_add_info ?></label>
			<div class="x_controls">
				<?php if($__Context->input_add_info&&count($__Context->input_add_info))foreach($__Context->input_add_info as $__Context->key=>$__Context->val){ ?><label class="x_inline" for="sns_input_add_info_<?php echo $__Context->key ?>">
					<input type="checkbox" name="sns_input_add_info[]" id="sns_input_add_info_<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>"<?php if(in_array($__Context->val,$__Context->config->sns_input_add_info)){ ?> checked="checked"<?php } ?> /> <?php echo Context::getLang($__Context->val) ?>
				</label><?php } ?>
				<a href="#sns_input_add_info_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="sns_input_add_info_help" class="x_help-block" hidden><?php echo $__Context->lang->about_sns_input_add_info ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->sns_linkage ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="sns_linkage_module"><?php echo $__Context->lang->sns_linkage_module ?></label>
			<div class="x_controls">
				<select name="linkage_module_target">
					<option value="include"><?php echo $__Context->lang->include_linkage_module ?></option>
					<option value="exclude"<?php if($__Context->config->linkage_module_target=='exclude'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->exclude_linkage_module ?></option>
				</select>
				
				<input type="hidden" name="linkage_module_srl" id="linkage_module_srl" value="<?php echo $__Context->config->linkage_module_srl ?>" />
				<select class="modulelist_selected" size="8" multiple="multiple" style="display:block;vertical-align:top;margin:5px 0"></select>
				<a href="#" id="__module_srl_list_target_module_srl" class="x_btn moduleTrigger" data-multiple="true" style="margin:0 -5px 0 0;border-radius:2px 0 0 0px"><?php echo $__Context->lang->cmd_add ?></a>
				<button type="button" class="x_btn modulelist_del" style="border-radius:0 2px 2px 0"><?php echo $__Context->lang->cmd_delete ?></button>
				<script>
					xe.registerApp(new xe.ModuleListManager('linkage_module_srl'));
				</script>
			</div>
		</div>
	</section>
	
	<div class="x_clearfix btnArea">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>