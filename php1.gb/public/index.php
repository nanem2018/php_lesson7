<?php
session_start();
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

//include ENGINE_DIR.'lesson7_controler.php';
include ENGINE_DIR . 'goods_table_controller.php';

include TEMPLATES_DIR . 'header.php';
include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR . 'search.php';
include TEMPLATES_DIR . 'goods_table.php';
include TEMPLATES_DIR . 'modalWindow.php';
include TEMPLATES_DIR . 'footer.php';

session_write_close();
