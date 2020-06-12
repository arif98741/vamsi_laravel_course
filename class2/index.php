<?php
   function makeFile($dir,$file){

        if(file_exists($dir)){ //check folder existance
            $file = fopen($dir."/".$file, "w");
        }else{
            echo 'Path is not exist';
        }
    }

    makeFile('test1','def.mp3');
    

    function getFiles($dir){

        if(!file_exists($dir)){ //check folder existance
            echo 'Path is not exist';
        }else{
            $files = scandir($dir);
            return $files;
        }

    }

    $files = getFiles('test1');
    for($i=0; $i< count($files); $i++)
    {
        //echo $files[$i];
        $file_explode = explode('.',$files[$i]);
        $file_type = end($file_explode);
        $file_types = [
            'jpg','JPG','jpeg','JPEG','PNG','png','GIF','gif'
        ];
        if(in_array($file_type,$file_types))
        {
            echo '<img src="test1/'.$files[$i].'">';
        }
    }


    
?>
