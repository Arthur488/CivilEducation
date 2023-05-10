<? 

    $dir = "resources/static/assets/js/";

    if(is_dir($dir)){
        if($dh = opendir($dir)){
            while(($file = readdir($dh)) !== false){
                if(substr($file, -3) == '.js'){
                    echo '<script src="' . $dir . $file . '"></script>';
                }
            }
            closedir($dh);
        }
    }

?>