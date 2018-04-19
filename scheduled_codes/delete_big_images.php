<!DOCTYPE html>
<html>


<head>

    <meta name="robots" content="noindex">

</head>


<body>


        <?php

            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.jpg"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.Jpg"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.JPG"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.jpeg"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.Jpeg"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.JPEG"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.png"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.Png"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.PNG"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.gif"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.Gif"));
            array_map('unlink', glob("../kuvat/poistettavat_kuvat/*.GIF"));

        ?>


</body>
</html>




