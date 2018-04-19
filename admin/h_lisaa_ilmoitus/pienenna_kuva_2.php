        <?php

            // Function for resizing jpg, gif, or png image files

            function ak_img_resize_2222($target_2222, $newcopy_2222, $w_2222, $h_2222, $ext_2222) {
                
                list($w_orig_2222, $h_orig_2222) = getimagesize($target_2222);
                
                $scale_ratio_2222 = $w_orig_2222 / $h_orig_2222;
                
                if (($w_2222 / $h_2222) > $scale_ratio_2222) {
                    $w_2222 = $h_2222 * $scale_ratio_2222;
                }
                else {
                    $h_2222 = $w_2222 / $scale_ratio_2222;
                }
   
                $img_2222 = "";
                $ext_2222 = strtolower($ext_2222);    
                
                if ($ext_2222 == "gif") { 
                    $img_2222 = imagecreatefromgif($target_2222);
                } 
                else if($ext_2222 =="png") { 
                    $img_2222 = imagecreatefrompng($target_2222);
                } 
                else { 
                    $img_2222 = imagecreatefromjpeg($target_2222);    
                }
                
                $tci_2222 = imagecreatetruecolor($w_2222, $h_2222);
    
                // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
                imagecopyresampled($tci_2222, $img_2222, 0, 0, 0, 0, $w_2222, $h_2222, $w_orig_2222, $h_orig_2222);
                imagejpeg($tci_2222, $newcopy_2222, 100);
            }


function ak_img_thumb_2222($target_2222, $newcopy_2222, $w_2222, $h_2222, $ext_2222) {
    list($w_orig_2222, $h_orig_2222) = getimagesize($target_2222);
    $src_x_2222 = ($w_orig_2222 / 2) - ($w_2222 / 2);
    $src_y_2222 = ($h_orig_2222 / 2) - ($h_2222 / 2);
    $ext_2222 = strtolower($ext_2222);
    $img_2222 = "";
    if ($ext_2222 == "gif"){ 
    $img_2222 = imagecreatefromgif($target_2222);
    } else if($ext_2222 =="png"){ 
    $img_2222 = imagecreatefrompng($target_2222);
    } else { 
    $img_2222 = imagecreatefromjpeg($target_2222);
    }
    $tci_2222 = imagecreatetruecolor($w_2222, $h_2222);
    imagecopyresampled($tci_2222, $img_2222, 0, 0, $src_x_2222, $src_y_2222, $w_2222, $h_2222, $w_2222, $h_2222);
    if ($ext_2222 == "gif"){ 
        imagegif($tci_2222, $newcopy_2222);
    } else if($ext_2222 =="png"){ 
        imagepng($tci_2222, $newcopy_2222);
    } else { 
        imagejpeg($tci_2222, $newcopy_2222, 84);
    }
}
?>
