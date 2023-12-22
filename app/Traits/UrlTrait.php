<?php

namespace App\Traits;
use Embed\Embed;


trait UrlTrait
{
    public function embedUrl($url)
    {
    
        $embed = new Embed();
        $info = $embed->get($url);
        $str=explode(' ',$info->code->html);
        $str[3]="width='300'";
        $str[4]="height='200'";
        $str1=implode(' ',$str);
        return  $str1;
    }

}