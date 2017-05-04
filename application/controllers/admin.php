<?php
session_start();
$ad = new Admin();
$ad->Post_admin();
require_once __DIR__ . '/../models/model.php';
if($ad->Post_data()) {
  $db->edit_line($_POST['text_edit'], $ad->Status_edit(), $_SESSION['id']);
}
if($ad->Ses_admin()) {
  $m = $db->read_all_admin();
  $a = $ad->Edit();
  if($a) {
    $t = $db->line_exists($a);
    if (0 != $t) {
      $b = $db->line_retrieval($a);
      require_once __DIR__ . '/../views/admin_edit.php';
      exit;
    }
  }
  require_once __DIR__ . '/../views/admin_panel.php';
} else {
  require_once __DIR__ . '/../views/admin_view.php';
}

