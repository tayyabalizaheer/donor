<?php
namespace App\Traits;

trait ImageCompress {

    public function uploadImage($file) {
        ini_set('memory_limit', '-1');
        $imagesname = md5(rand(1000,10000));
        $ext = "webp";
        $image_full_name =$imagesname.'.'.$ext;
        $upload_path = 'uploads/';
        $image_url= $upload_path.$image_full_name;
        $thumbnail_path = $upload_path.'thumbnail/'.$image_full_name;
        $normal_path = $upload_path.'normal/'.$image_full_name;
        $info = getimagesize($file);
        if ($info['mime'] == 'image/jpeg')
          $image = imagecreatefromjpeg($file);
        elseif ($info['mime'] == 'image/gif')
          $image = imagecreatefromgif($file);
        elseif ($info['mime'] == 'image/png')
          $image = imagecreatefrompng($file);
        elseif ($info['mime'] == 'image/webp')
          $image = imagecreatefromwebp($file);


        if($info[0] > 1000 && $info[0] < 2000){
            imagewebp($image, $thumbnail_path, 40);
            imagewebp($image, $normal_path, 60);
        }
        else if($info[0] >= 2000 && $info[0] < 3000){
            imagewebp($image, $thumbnail_path, 30);
            imagewebp($image, $normal_path, 50);
        }
        else if($info[0] >= 3000 ){
            imagewebp($image, $thumbnail_path, 20);
            imagewebp($image, $normal_path, 40);
        }else{
            imagewebp($image, $thumbnail_path, 80);
            imagewebp($image, $normal_path, 90);
        }
        $file->move($upload_path,$image_full_name);
        return $image_full_name;
  }

  public function saveOrginalImage($file,$upload_path='')
  {
    ini_set('memory_limit', '-1');
    $imagesname = md5(rand(1000,10000));
    $image_full_name =$imagesname.'.webp';
    $upload_path??'uploads/';
    $image_url= $upload_path.$image_full_name;
    $info = getimagesize($file);
    if ($info['mime'] == 'image/jpeg')
      $image = imagecreatefromjpeg($file);
    elseif ($info['mime'] == 'image/gif')
      $image = imagecreatefromgif($file);
    elseif ($info['mime'] == 'image/png')
      $image = imagecreatefrompng($file);
    elseif ($info['mime'] == 'image/webp')
      $image = imagecreatefromwebp($file);

    imagewebp($image, $image_url, 90);
    return $image_full_name;
  }


}
