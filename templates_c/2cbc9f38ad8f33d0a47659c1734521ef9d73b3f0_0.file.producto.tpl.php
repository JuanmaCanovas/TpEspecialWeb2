<?php
/* Smarty version 3.1.40, created on 2021-11-29 21:07:56
  from 'C:\xampp\htdocs\TPespecial\TpEspecialWeb2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a5331c5184d0_24583869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cbc9f38ad8f33d0a47659c1734521ef9d73b3f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPespecial\\TpEspecialWeb2\\templates\\producto.tpl',
      1 => 1638202202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a5331c5184d0_24583869 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <div class="col-3">
        <div class="card mt-5" style="width: 18rem;">
            <img src="images/default_image.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['marca'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['modelo'];?>
</h5>
                    <h5 class="card-title">$<?php echo $_smarty_tpl->tpl_vars['product']->value['precio'];?>
</h5>
                    <h6 class="card-title text-info">Categoria: <?php echo $_smarty_tpl->tpl_vars['product']->value['id_categoria'];?>
</h6>
                    <h6 class="card-title text-info">Puntuación: <?php echo $_smarty_tpl->tpl_vars['product']->value['puntuacion'];?>
</h6>
                    <a href="showProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="btn btn-primary">Ver Detalle</a>
                    <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                    <a href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="btn btn-danger">Borrar</a>         
                    <a href="editProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="btn btn-warning text-white">Editar</a>    
                    <?php }?>
                </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        

                      <?php }
}
