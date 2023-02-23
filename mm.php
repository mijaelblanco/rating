<?php
// rsync -av root@157.245.90.18:/mnt/volume_nyc1_01/media_upload/mm/2023/02/22/ /Users/mijael/Documents/Development/rating/videos/mm/02/22/
// ffmpeg -i /Users/mijael/Documents/Development/rating/videos/tva/02/22/050000.mp4 -r 1 -s 178x100 -f image2 /Users/mijael/Documents/Development/rating/thumbs/tva/02/22/050000/thumb-%d.jpg

$dirToScan      =   'thumbs/tva/02/22/050000/';
$filePrefix     =   'thumb-';
$fileSuffix     =   '.jpg';
$thumbWidth     =   178;
$thumbHeight    =   100;
$imageFiles     =   array();
$spriteFile     =   'thumbs/tva/02/22/050000/050000.png';
$imageLine      =   20;
$vttFile        =   'thumbs/tva/02/22/050000/050000.vtt';
$dst_x          =   0;
$dst_y          =   0;


# read the directory with thumbnails, file name in array
foreach (glob($dirToScan.$filePrefix.'*'.$fileSuffix) as $filename) {
    array_push($imageFiles,$filename);
}

natsort($imageFiles);
#calculate dimension for the sprite 
        $spriteWidth =  $thumbWidth*$imageLine;
        $spriteHeight   =   $thumbHeight*(floor(count($imageFiles)/$imageLine)+1);

        # create png file for sprite
        $png = imagecreatetruecolor($spriteWidth,$spriteHeight);

        # open vtt file
            $handle =   fopen($vttFile,'wb+');
            fwrite($handle,'WEBVTT'."\n");

        # insert thumbs in sprite and write the vtt file
            foreach($imageFiles AS $file)   {
                $counter        =   str_replace($filePrefix,'',str_replace($fileSuffix,'',str_replace($dirToScan,'',$file)));
                $imageSrc = imagecreatefromjpeg($file);
                imagecopyresized ($png, $imageSrc, $dst_x , $dst_y , 0, 0, $thumbWidth, $thumbHeight, $thumbWidth,$thumbHeight);

                $varTCstart =   gmdate("H:i:s", $counter-1).'.000';
                $varTCend   =   gmdate("H:i:s", $counter).'.000';

                $varSprite  =   $spriteFile.'#xywh='.$dst_x.','.$dst_y.','.$thumbWidth.','.$thumbHeight;

                fwrite($handle,$counter."\n".$varTCstart.' --> '.$varTCend."\n".$varSprite."\n\n");

                if ($counter % $imageLine == 0) {
                    $dst_x=0;
                    $dst_y+=$thumbHeight;
                }
                else    {
                    $dst_x+=$thumbWidth;
                }

            }
            imagepng($png,$spriteFile);
            fclose($handle);

    ?>