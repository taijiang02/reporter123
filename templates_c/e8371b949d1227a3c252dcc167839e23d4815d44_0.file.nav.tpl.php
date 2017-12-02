<?php
/* Smarty version 3.1.30, created on 2017-12-02 00:48:58
  from "F:\@kcy6013_1061\UniServerZ\www\reporter\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a21f87a19b0c4_35971045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8371b949d1227a3c252dcc167839e23d4815d44' => 
    array (
      0 => 'F:\\@kcy6013_1061\\UniServerZ\\www\\reporter\\templates\\nav.tpl',
      1 => 1511009138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a21f87a19b0c4_35971045 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark p-0 ">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="images/logo.png" class="img-fluid">
    </a>

    <div class="collapse navbar-collapse" id="menu">
        <div class="navbar-nav mr-auto">
            <a href="index.php" class="text-white nav-link">首頁</a>
            <a href="index.php" class="text-white nav-link">編輯精選</a>
            <a href="index.php" class="nav-link text-white">街巷故事</a>
            <a href="index.php" class="nav-link text-white">市井觀點</a>
            <a href="index.php" class="nav-link text-white">私房知識塾</a>
        </div>
        <!--判斷有登入者  -->
        <div class="navbar-nav">
            <?php if (isset($_SESSION['username'])) {?>
            <a href="admin.php?op=article_form" class="text-white nav-link">發佈</a>
            <a href="logout.php" class="text-white nav-link">登出_歡迎<?php echo $_SESSION['username'];?>
</a>
            <!-- 否則無登入者 -->
            <?php } else { ?>
            <a href="signup.php" class="text-white nav-link">註冊</a>
            <a href="main_login.php" class="text-white nav-link">登入</a> <?php }?>
        </div>
    </div>
</nav><?php }
}
