<?php
class Helpers {
    public static function get_thumbnail($delivery_id){

        if(file_exists(public_path().Config::get('ks.thumb_path').'th_'.$delivery_id.'.jpg')){
            $thumbnail = URL::to('/').Config::get('ks.thumb_path').'th_'.$delivery_id.'.jpg';
            //$thumbnail = sprintf('<img style="cursor:pointer;" class="thumb" alt="'.$delivery_id.'" src="%s?'.time().'" />',$thumbnail);
        }else{
            $thumbnail = 'nopic';
        }

        $thumbnail = URL::to('/').'/storage/receiver_thumb/th_'.$delivery_id.'.jpg';

        return $thumbnail;
    }
}
