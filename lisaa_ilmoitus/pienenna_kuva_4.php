        <?php

            // Function for resizing jpg, gif, or png image files

            function ak_img_resize_4444($target_4444, $newcopy_4444, $w_4444, $h_4444, $ext_4444) {
    
                list($w_orig_4444, $h_orig_4444) = getimagesize($target_4444);
    
                $scale_ratio_4444 = $w_orig_4444 / $h_orig_4444;
               
                if (($w_4444 / $h_4444) > $scale_ratio_4444) {
                    $w_4444 = $h_4444 * $scale_ratio_4444;
                } 
                else {
                    $h_4444 = $w_4444 / $scale_ratio_4444;
                }

                $img_4444 = "";
                $ext_4444 = strtolower($ext_4444);
   
                if ($ext_4444 == "gif") { 
                    $img_4444 = imagecreatefromgif($target_4444);
                } 
                else if($ext_4444 =="png") { 
                    $img_4444 = imagecreatefrompng($target_4444);
                } 
                else { 
                    $img_4444 = imagecreatefromjpeg($target_4444);
                }

                $tci_4444 = imagecreatetruecolor($w_4444, $h_4444);
              
                // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
                imagecopyresampled($tci_4444, $img_4444, 0, 0, 0, 0, $w_4444, $h_4444, $w_orig_4444, $h_orig_4444);
                imagejpeg($tci_4444, $newcopy_4444, 100);
            }


function ak_img_thumb_4444($target_4444, $newcopy_4444, $w_4444, $h_4444, $ext_4444) {
    list($w_orig_4444, $h_orig_4444) = getimagesize($target_4444);
    $src_x_4444 = ($w_orig_4444 / 2) - ($w_4444 / 2);
    $src_y_4444 = ($h_orig_4444 / 2) - ($h_4444 / 2);
    $ext_4444 = strtolower($ext_4444);
    $img_4444 = "";
    if ($ext_4444 == "gif"){ 
    $img_4444 = imagecreatefromgif($target_4444);
    } else if($ext_4444 =="png"){ 
    $img_4444 = imagecreatefrompng($target_4444);
    } else { 
    $img_4444 = imagecreatefromjpeg($target_4444);
    }
    $tci_4444 = imagecreatetruecolor($w_4444, $h_4444);
    imagecopyresampled($tci_4444, $img_4444, 0, 0, $src_x_4444, $src_y_4444, $w_4444, $h_4444, $w_4444, $h_4444);
    if ($ext_4444 == "gif"){ 
        imagegif($tci_4444, $newcopy_4444);
    } else if($ext_4444 =="png"){ 
        imagepng($tci_4444, $newcopy_4444);
    } else { 
        imagejpeg($tci_4444, $newcopy_4444, 84);
    }
}
?>
