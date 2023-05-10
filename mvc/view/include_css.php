<? 

    $dir = "resources/static/assets/css/";

    if(is_dir($dir)){
        if($dh = opendir($dir)){
            while(($file = readdir($dh)) !== false){
                if(substr($file, -4) == '.css'){
                    echo '<link rel="stylesheet" href="' . $dir . $file . '">';
                }
            }
            closedir($dh);
        }
    }

?>