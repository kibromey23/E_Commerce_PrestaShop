<?php
/* Smarty version 4.3.4, created on 2025-05-22 21:36:23
  from 'C:\xampp\htdocs\E_Commerce_PrestaShop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f6ea7bb90b9_15222708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e387e239487e7f6851265bc33e6ee6cc3c0112' => 
    array (
      0 => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\themes\\classic\\templates\\page.tpl',
      1 => 1747320830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f6ea7bb90b9_15222708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_311535583682f6ea7b46321_79077602', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1762279522682f6ea7b46f38_63676449 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header text-center mb-4">
          <h1 class="display-5 fw-bold text-primary"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1754962671682f6ea7b46931_39992250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1762279522682f6ea7b46f38_63676449', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_27203425682f6ea7bb6772_91214820 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_297741493682f6ea7bb6f55_21754726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Dynamic Page Content (from child templates like index.tpl) -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_674214149682f6ea7bb62a5_70522205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card shadow-sm p-4 border-0">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27203425682f6ea7bb6772_91214820', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_297741493682f6ea7bb6f55_21754726', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_341223717682f6ea7bb7dc3_63948166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <hr>
          <p style="margin-top:20px;">&copy; <?php echo htmlspecialchars((string) date('Y'), ENT_QUOTES, 'UTF-8');?>
 <strong>KB Electronics</strong>. All rights reserved.</p>
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1554805596682f6ea7bb79c6_18999931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer mt-5 text-center text-muted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_341223717682f6ea7bb7dc3_63948166', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_311535583682f6ea7b46321_79077602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_311535583682f6ea7b46321_79077602',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1754962671682f6ea7b46931_39992250',
  ),
  'page_title' => 
  array (
    0 => 'Block_1762279522682f6ea7b46f38_63676449',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_674214149682f6ea7bb62a5_70522205',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_27203425682f6ea7bb6772_91214820',
  ),
  'page_content' => 
  array (
    0 => 'Block_297741493682f6ea7bb6f55_21754726',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1554805596682f6ea7bb79c6_18999931',
  ),
  'page_footer' => 
  array (
    0 => 'Block_341223717682f6ea7bb7dc3_63948166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" class="container my-5">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1754962671682f6ea7b46931_39992250', 'page_header_container', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_674214149682f6ea7bb62a5_70522205', 'page_content_container', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1554805596682f6ea7bb79c6_18999931', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
