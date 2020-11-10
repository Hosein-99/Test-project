<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-09 08:45:05
  from 'C:\Users\Hosein\Desktop\smarty\template\CU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa9019135e482_26731877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eb331fe65f5ad52e505a6c8a16b5c6c8f4470cc' => 
    array (
      0 => 'C:\\Users\\Hosein\\Desktop\\smarty\\template\\CU.tpl',
      1 => 1604911499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tablighvasat.tpl' => 1,
    'file:section16.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa9019135e482_26731877 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap_rtl.css">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CU.css">
    <?php echo '<script'; ?>
 src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/CU.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/54b7eb4c14.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <title>صفحه نخست</title>


</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="container">
            <section class="row CU-main-body">
                <div class="col-xs-36 col-sm-23 cm-right">
                    <div class="cmr-header">
                        <span>تماس با ما</span>
                    </div>
                    <div class="col-xs-36 cmr-form">
                        <div class="cmrf-about">
                            مدنیوز اولین و جامع ترین پایگاه خبری تخصصی تجهیزات پزشکی در ایران
                            <br>
                            info@mednews.ir
                        </div>
                        <div class="col-xs-36 text-center " id="sucess-pm" style="background: #3c763d; font:18px iransans;font-weight: bold; color: #232323; display: none;width: 100%">
                            پیام شما با موفقیت ثبت شد.
                        </div>
                        <div class="crmf-margin">
                            <div class="col-xs-6 cmrf-lable">
                                <span>نام:</span>
                            </div>
                            <div class="col-xs-24 cmrf-lable">
                                <input type="text" id="_name">
                            </div>
                            <div class="wrapper"></div>
                        </div>
                        <div class="crmf-margin">
                            <div class="col-xs-6 cmrf-lable">
                                <span>* ایمیل:</span>
                            </div>
                            <div class="col-xs-24 cmrf-lable">
                                <input type="text" id="_mail">
                            </div>
                            <div class="wrapper"></div>
                        </div>
                        <div class="crmf-margin">
                            <div class="col-xs-6 cmrf-lable">
                                <span>* گیرنده:</span>
                            </div>
                            <div class="col-xs-24 cmrf-lable">
                                <select name="cmrf-select" id="cmfrs">
                                    <option value="1">روابط عمومی</option>
                                    <option value="2">سردبیری</option>
                                </select>
                            </div>
                            <div class="wrapper"></div>
                        </div>
                        <div class="crmf-margin">
                            <div class="col-xs-6 cmrf-lable">
                                <span>* پیغام:</span>
                            </div>
                            <div class="col-xs-24 cmrf-lable">
                                <textarea name="" id="tozih"  rows="14"></textarea>
                            </div>
                            <div class="wrapper"></div>
                        </div>
                        <div class="crmf-margin">
                            <div class="col-xs-offset-6 col-xs-30">
                                <input type="submit" value="ارسال" class="btn cmrf-btn" id="_submit" onclick="send(this)" ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-36 col-sm-13 col-md-9 cm-left">
                    <?php $_smarty_tpl->_subTemplateRender("file:tablighvasat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:section16.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </section>
        </section>
    <footer class="container-fluid main-Footer" >
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>

</body>
</html><?php }
}
