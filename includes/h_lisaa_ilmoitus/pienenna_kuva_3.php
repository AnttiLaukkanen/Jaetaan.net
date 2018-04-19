        <?php

            // Function for resizing jpg, gif, or png image files

            function ak_img_resize_3333($target_3333, $newcopy_3333, $w_3333, $h_3333, $ext_3333) {
   
                list($w_orig_3333, $h_orig_3333) = getimagesize($target_3333);
             
                $scale_ratio_3333 = $w_orig_3333 / $h_orig_3333;
            
                if (($w_3333 / $h_3333) > $scale_ratio_3333) {
                    $w_3333 = $h_3333 * $scale_ratio_3333;
                } 
                else {
                    $h_3333 = $w_3333 / $scale_ratio_3333;
                }

                $img_3333 = "";
                $ext_3333 = strtolower($ext_3333);
  
                if ($ext_3333 == "gif") { 
                   $img_3333 = imagecreatefromgif($target_3333);
                }
                else if($ext_3333 =="png") { 
                    $img_3333 = imagecreatefrompng($target_3333);
                } 
                else { 
                    $img_3333 = imagecreatefromjpeg($target_3333);
                }
  
                $tci_3333 = imagecreatetruecolor($w_3333, $h_3333);
    
                // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
                imagecopyresampled($tci_3333, $img_3333, 0, 0, 0, 0, $w_3333, $h_3333, $w_orig_3333, $h_orig_3333);
                imagejpeg($tci_3333, $newcopy_3333, 100);
            }  




function ak_img_thumb_3333($target_3333, $newcopy_3333, $w_3333, $h_3333, $ext_3333) {
    list($w_orig_3333, $h_orig_3333) = getimagesize($target_3333);
    $src_x_3333 = ($w_orig_3333 / 2) - ($w_3333 / 2);
    $src_y_3333 = ($h_orig_3333 / 2) - ($h_3333 / 2);
    $ext_3333 = strtolower($ext_3333);
    $img_3333 = "";
    if ($ext_3333 == "gif"){ 
    $img_3333 = imagecreatefromgif($target_3333);
    } else if($ext_3333 =="png"){ 
    $img_3333 = imagecreatefrompng($target_3333);
    } else { 
    $img_3333 = imagecreatefromjpeg($target_3333);
    }
    $tci_3333 = imagecreatetruecolor($w_3333, $h_3333);
    imagecopyresampled($tci_3333, $img_3333, 0, 0, $src_x_3333, $src_y_3333, $w_3333, $h_3333, $w_3333, $h_3333);
    if ($ext_3333 == "gif"){ 
        imagegif($tci_3333, $newcopy_3333);
    } else if($ext_3333 =="png"){ 
        imagepng($tci_3333, $newcopy_3333);
    } else { 
        imagejpeg($tci_3333, $newcopy_3333, 84);
    }
}
?>
  
