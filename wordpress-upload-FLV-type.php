<?php
/*
Plugin Name: WordPress Upload FLV type
Plugin URI: http://www.phranakornsoft.com/
Description: Upload FLV type to WordPress media file
Version: 1.0
Author: KapongPnag
Author URI: http://www.phranakornsoft.com/
*/

add_filter("ext2type", "FLV_TYPE_ext2type", 10, 1);
add_filter("upload_mimes", "FLV_TYPE_upload_mimes", 10, 1);

function FLV_TYPE_ext2type($filters)
{
$filters["video"][] = "flv";

return $filters;
}

function FLV_TYPE_upload_mimes($mimes)
{
$mimes["flv"] = "video/x-flv";

return $mimes;
}
?>
