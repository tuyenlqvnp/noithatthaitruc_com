<?php /* Smarty version 2.6.20, created on 2012-03-12 11:11:43
         compiled from /home/thaitruc/public_html/themes/prestashop/./breadcrumb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/thaitruc/public_html/themes/prestashop/./breadcrumb.tpl', 4, false),array('modifier', 'escape', '/home/thaitruc/public_html/themes/prestashop/./breadcrumb.tpl', 4, false),)), $this); ?>
<!-- Breadcrumb -->
<?php if (isset ( $this->_smarty_vars['capture']['path'] )): ?><?php $this->assign('path', $this->_smarty_vars['capture']['path']); ?><?php endif; ?>
<div class="breadcrumb">
	<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'return to'), $this);?>
 <?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a><?php if ($this->_tpl_vars['path']): ?><span class="navigation-pipe"><?php echo ((is_array($_tmp=$this->_tpl_vars['navigationPipe'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span><?php echo $this->_tpl_vars['path']; ?>
<?php endif; ?>
</div>
<!-- /Breadcrumb -->