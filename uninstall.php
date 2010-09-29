<?php

if (!defined ('WP_UNINSTALL_PLUGIN')) {
    exit ();
}

$options = array ("rolo_enu_images_only", "rolo_enu_permission_required",
    "rolo_enu-images_only", "rolo_enu-premission_required");
$upload_dir =  WP_CONTENT_DIR . '/upload/';

foreach ($options as $i)
    delete_option ($i);

// Remove insrolo_enure files left over from old versions
if (file_exists ($upload_dir . 'upload.php'))
	unlink ($upload_dir . 'upload.php');

?>
