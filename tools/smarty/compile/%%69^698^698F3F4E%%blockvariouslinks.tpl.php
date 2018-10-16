<?php /* Smarty version 2.6.20, created on 2010-04-24 05:21:40
         compiled from C:%5CAppServ1%5Cwww%5Cnoithat%5Cmodules%5Cblockvariouslinks/blockvariouslinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'C:\\AppServ1\\www\\noithat\\modules\\blockvariouslinks/blockvariouslinks.tpl', 4, false),array('modifier', 'addslashes', 'C:\\AppServ1\\www\\noithat\\modules\\blockvariouslinks/blockvariouslinks.tpl', 10, false),array('modifier', 'escape', 'C:\\AppServ1\\www\\noithat\\modules\\blockvariouslinks/blockvariouslinks.tpl', 10, false),)), $this); ?>
<!-- MODULE Block various links -->
<div style="width:100%;text-align:center">
<ul class="block_various_links" id="block_various_links_footer">
	<!--<li class="first_item"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title=""><?php echo smartyTranslate(array('s' => 'Specials','mod' => 'blockvariouslinks'), $this);?>
</a></li>-->
  <li class="first_item"><a href="noithatthaitruc.com">Nội Thất Thái Trúc</a></li>
	<!--<li class="item"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title=""><?php echo smartyTranslate(array('s' => 'New products','mod' => 'blockvariouslinks'), $this);?>
</a></li>-->
	<!--<li class="item"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php" title=""><?php echo smartyTranslate(array('s' => 'Top sellers','mod' => 'blockvariouslinks'), $this);?>
</a></li>-->
	<!--<li class="item"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php" title=""><?php echo smartyTranslate(array('s' => 'Contact us','mod' => 'blockvariouslinks'), $this);?>
</a></li>-->
	<?php $_from = $this->_tpl_vars['cmslinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cmslink']):
?>
		<li class="item"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['link'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
	<li class="last_item"><?php echo smartyTranslate(array('s' => 'Powered by','mod' => 'blockvariouslinks'), $this);?>
 <a href="http://www.prestashop.com">PrestaShop</a>&trade;</li>
</ul>
</div>
<!-- /MODULE Block various links -->