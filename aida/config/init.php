<?php
function __autoload($ObjectCollection) {
  require_once 'includes/classes/'.$ObjectCollection . '.php';
}
?>