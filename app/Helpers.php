<?php

use App\Models\Settings;
use Illuminate\Support\Str;
use App\Models\MissionAndVision;
use Illuminate\Support\Facades\Cache;

if (! function_exists('setting')) {
    function setting($key)
    {

        $settings = Cache::rememberForever('settings', function () {
            return Settings::all();
        });

        return $settings->where('key', $key)->first()?->value;
    }
}


if (! function_exists('my_mission_vision')) {
    function my_mission_vision($type)
    {

        $mission_vision = Cache::rememberForever('mission_and_vision', function () {
            return MissionAndVision::get();
        });

        return $mission_vision->where('type', $type);
    }
}


if (! function_exists('iframe_link')) {
    function iframe_link()
    {
        $url = setting('home_page_video_link');

        return embedCode($url);

    }
}


if(!function_exists('embedCode')){
    function embedCode($url){
        if(Str::startsWith($url,['https://facebook.com','https://www.facebook.com'])){
            return "https://www.facebook.com/plugins/video.php?href=".$url;
        }elseif(Str::startsWith($url,['https://youtube.com','https://www.youtube.com','https://youtu.be'])){
            $video_id =  parse_url($url,PHP_URL_PATH);
            return "https://www.youtube.com/embed".$video_id;
        }elseif(Str::startsWith($url,['https://vimeo.com','https://www.vimeo.com'])){
            $video_id = parse_url($url,PHP_URL_PATH);
            return "https://player.vimeo.com/video".$video_id."?h=0a7f520d09&title=0&byline=0&portrait=0";
        }
    }

}
