<?php
class Post_treatment {
  public $data = [];
  public function test_post () {
    $this->data[0] = $_POST['namep'];
    $this->data[1] = $_POST['adrp'];
    $this->data[2] = $_POST['text'];
    $this->data[3] = $this->test_img();
  }
  public function post_bool() {
    if(isset($_POST['namep']) && (isset($_POST['adrp'])) && (isset($_POST['text']))) {
      if(!empty($_POST['namep']) && !empty($_POST['adrp']) && !empty($_POST['text'])) {
        return true;
      }
    }
  }
  private function test_img () {
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $p2 = $_FILES['image']['name'];
      $p = __DIR__ . '/../../images/' . $p2;
      $a = $this->wh_img();
      move_uploaded_file($a, $p);
      return $p2;
    }
  }
  private function wh_img () {
    $file_name = $_FILES['image']['tmp_name'];
    switch($_FILES['image']['type']) {  // Узнаем тип картинки;
      case "image/gif": $im = imagecreatefromgif($file_name);
      break;
      case "image/jpeg": $im = imagecreatefromjpeg($file_name);
      break;
      case "image/png": $im = imagecreatefrompng($file_name);
      break;
      case "image/pjpeg": $im = imagecreatefromjpeg($file_name);
      break;
    }
    list($w,$h) = getimagesize($file_name); // Берем высоту и ширину;
    $koe = $w / 320;  // Вычисляем коэффициент 320 это ширина которая должна быть;
    $new_h = 240; // с помощью коэффициента вычисляем высоту; /*ceil($h/$koe)*/
    $im1 = imagecreatetruecolor(320, $new_h); // Создаем картинку
    imagecopyresampled($im1,$im,0,0,0,0,320,$new_h,imagesx($im),imagesy($im));
    imagejpeg($im1, $file_name, 100); // Переводим в jpg
    imagedestroy($im);
    imagedestroy($im1);
    return $file_name;
  }
}