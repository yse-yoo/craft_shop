<?php
session_start();
session_regenerate_id(true);

const BASE_DIR = __DIR__ . '/';
const COMPONENT_DIR = BASE_DIR . 'components/';

require_once 'env.php';
require_once BASE_DIR . 'lib/DB.php';
require_once BASE_DIR . 'app/models/Product.php';