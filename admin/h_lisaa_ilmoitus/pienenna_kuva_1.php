        <?php

            // Function for resizing jpg, gif, or png image files

            function ak_img_resize_1111($target_1111, $newcopy_1111, $w_1111, $h_1111, $ext_1111) {
                
                list($w_orig_1111, $h_orig_1111) = getimagesize($target_1111);
               
                $scale_ratio_1111 = $w_orig_1111 / $h_orig_1111;
                
                if (($w_1111 / $h_1111) > $scale_ratio_1111) {
                    $w_1111 = $h_1111 * $scale_ratio_1111;
                }
                else {
                    $h_1111 = $w_1111 / $scale_ratio_1111; 
                }

                $img_1111 = "";
                $ext_1111 = strtolower($ext_1111);
                
                if ($ext_1111 == "gif") { 
                    $img_1111 = imagecreatefromgif($target_1111);
                } 
                else if($ext_1111 =="png") { 
                    $img_1111 = imagecreatefrompng($target_1111);
                } 
                else { 
                    $img_1111 = imagecreatefromjpeg($target_1111);
                }
                $tci_1111 = imagecreatetruecolor($w_1111, $h_1111);
              
                // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
                imagecopyresampled($tci_1111, $img_1111, 0, 0, 0, 0, $w_1111, $h_1111, $w_orig_1111, $h_orig_1111);
                imagejpeg($tci_1111, $newcopy_1111, 100);
            }
       


function ak_img_thumb_1111($target_1111, $newcopy_1111, $w_1111, $h_1111, $ext_1111) {
    list($w_orig_1111, $h_orig_1111) = getimagesize($target_1111);
    $src_x_1111 = ($w_orig_1111 / 2) - ($w_1111 / 2);
    $src_y_1111 = ($h_orig_1111 / 2) - ($h_1111 / 2);
    $ext_1111 = strtolower($ext_1111);
    $img_1111 = "";
    if ($ext_1111 == "gif"){ 
    $img_1111 = imagecreatefromgif($target_1111);
    } else if($ext_1111 =="png"){ 
    $img_1111 = imagecreatefrompng($target_1111);
    } else { 
    $img_1111 = imagecreatefromjpeg($target_1111);
    }
    $tci_1111 = imagecreatetruecolor($w_1111, $h_1111);
    imagecopyresampled($tci_1111, $img_1111, 0, 0, $src_x_1111, $src_y_1111, $w_1111, $h_1111, $w_1111, $h_1111);
    if ($ext_1111 == "gif"){ 
        imagegif($tci_1111, $newcopy_1111);
    } else if($ext_1111 =="png"){ 
        imagepng($tci_1111, $newcopy_1111);
    } else { 
        imagejpeg($tci_1111, $newcopy_1111, 84);
    }
}
?>
