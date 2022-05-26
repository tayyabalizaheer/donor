<?php
namespace App\Traits;
use App\Models\Notification;

trait CreateNotification {

  public function adminNotification($title,$description,$url)
  {
    $Notification = new Notification();
    $Notification->title       = $title;
    $Notification->description = $description;
    $Notification->route       = $url[0]??'';
    $Notification->prams       = $url[1]??'';
    $Notification->request     = $url[2]??'';
    $Notification->is_read     = "0";
    $Notification->user_id     = NULL;
    $Notification->for_admin   = "1";
    $Notification->broadcast   = "0";
    return $Notification->save();

  }

  public function userNotification($title,$description,$user_id,$url)
  {
    $Notification = new Notification();
    $Notification->title       = $title;
    $Notification->description = $description;
    $Notification->route       = $url[0]??'';
    $Notification->prams       = $url[1]??'';
    $Notification->request     = $url[2]??'';
    $Notification->is_read     = "0";
    $Notification->user_id     = $user_id;
    $Notification->for_admin   = "0";
    $Notification->broadcast   = "0";
    return $Notification->save();

  }

  public function broadcastNotification($title,$description,$url)
  {
    $Notification = new Notification();
    $Notification->title       = $title;
    $Notification->description = $description;
    $Notification->route       = $url[0]??'';
    $Notification->prams       = $url[1]??'';
    $Notification->request     = $url[2]??'';
    $Notification->is_read     = "0";
    $Notification->user_id     = NULL;
    $Notification->for_admin   = "0";
    $Notification->broadcast   = "1";
    return $Notification->save();

  }


}