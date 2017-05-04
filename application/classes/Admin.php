<?php
class Admin {
  public function Ses_admin() {
    if(isset($_SESSION['status_admin'])) {
      if(true == $_SESSION['status_admin']) {
        return true;
      }
    } else {
      return false;
    }
  }
  public function Post_admin() {
    if(isset($_POST['user']) && isset($_POST['pas'])) {
      if(('admin' == $_POST['user']) && ('123' == $_POST['pas'])) {
        $_SESSION['status_admin'] = true;
        return true;
      }
    } else {
      return false;
    }
  }
  public function Edit() {
    $st = explode('/', $_SERVER['REQUEST_URI']);
    $a = array_pop($st);
    if('' == $a) {
      return false;
    } else {
      return $a;
    }
  }
  public function Post_data() {
    if(isset($_POST['text_edit'])) {
      return true;
    } else {
      return false;
    }
  }
  public function Status_edit() {
    if(isset($_POST['status_edit'])) {
      return true;
    } else {
      return false;
    }
  }
}