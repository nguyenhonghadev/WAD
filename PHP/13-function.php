<?php
    function display_image_list($imageList)
    {
        foreach ($imageList as $item) {
            echo "img src='image/$item'
            width = 50px height = 50px alt='$item'>";
        }
    }
    
?>