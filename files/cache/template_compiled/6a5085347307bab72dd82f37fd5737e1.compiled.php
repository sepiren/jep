<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/socialxeserver/tpl/filter','update_service.xml');$__xmlFilter->compile(); ?>
<form class="x_form-horizontal" action="./" method="post" onsubmit="return procFilter(this, update_service)" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="x_control-group">
		<label class="x_control-label" for="service_id"><?php echo $__Context->lang->mid ?></label>
		<div class="x_controls">
			<input type="text" name="service_id" id="service_id" value="<?php echo $__Context->service_module_info->mid ?>" />
			<p class="x_help-block"><?php echo $__Context->lang->about_mid ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
		<div class="x_controls">
			<select name="module_category_srl" id="module_category_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->service_module_info->module_category_srl == $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
			<p class="x_help-block"><?php echo $__Context->lang->about_module_category ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_browser_title"><?php echo $__Context->lang->browser_title ?></label>
		<div class="x_controls">
			<input type="text" name="browser_title" id="browser_title" value="<?php echo htmlspecialchars($__Context->service_module_info->browser_title) ?>" class="lang_code" />
			<p class="x_help-block"><?php echo $__Context->lang->about_browser_title ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
		<div class="x_controls">
			<select name="layout_srl" id="layout_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->service_module_info->layout_srl == $__Context->key->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
			</select>
			<p class="x_help-block"><?php echo $__Context->lang->about_layout ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
		<div class="x_controls">
			<select name="skin" id="skin">
				<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->service_module_info->skin==$__Context->key ||(!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
			</select>
			<p class="x_help-block"><?php echo $__Context->lang->about_layout ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<div class="x_control-label"><?php echo $__Context->lang->mobile_view ?></div>
		<div class="x_controls">
			<label for="use_mobile" class="x_inline">
				<input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->service_module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> />
				<?php echo $__Context->lang->about_mobile_view ?>
			</label>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
		<div class="x_controls">
			<select name="mlayout_srl" id="mlayout_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->service_module_info->mlayout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
			</select>
			<p class="x_help-block"><?php echo $__Context->lang->about_layout ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
		<div class="x_controls">
			<select name="mskin" id="mskin">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->service_module_info->mskin==$__Context->key || (!$__Context->service_module_info->mskin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
			<p class="x_help-block"><?php echo $__Context->lang->about_skin ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="description"><?php echo $__Context->lang->description ?></label>
		<div class="x_controls">
			<textarea name="description" id="description"><?php echo htmlspecialchars($__Context->service_module_info->description) ?></textarea>
			<p class="x_help-block"><?php echo $__Context->lang->about_description ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_header_text"><?php echo $__Context->lang->header_text ?></label>
		<div class="x_controls">
			<textarea name="header_text" id="header_text" class="lang_code"><?php echo htmlspecialchars($__Context->service_module_info->header_text) ?></textarea>
			<p class="x_help-block"><?php echo $__Context->lang->about_header_text ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_footer_text"><?php echo $__Context->lang->footer_text ?></label>
		<div class="x_controls">
			<textarea name="footer_text" id="footer_text" class="lang_code"><?php echo htmlspecialchars($__Context->service_module_info->footer_text) ?></textarea>
			<p class="x_help-block"><?php echo $__Context->lang->about_footer_text ?></p>
		</div>
	</div>
	<div class="btnArea">
		<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_registration ?></button>
	</div>
</form>
