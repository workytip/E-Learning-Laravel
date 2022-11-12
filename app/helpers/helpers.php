<?php
function is_active(string $routeName)
{
    return null !== request()->segment(2) && request()->segment(2) == $routeName ? 'active' :'';
}

function getYoutubeId($url)
{
     preg_match("/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/",$url,$match);
     return isset($match[1] )? $match[1] :null;
}
