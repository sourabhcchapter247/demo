
<?php 

//floodfill the outside area with red; change non-red to black, change red to white, clean up small dots using morphology close:

convert cow_bw.gif -fill red -fuzz 5% -draw "color 0,0 floodfill" -fill black +opaque red -fill white -opaque red -alpha off -morphology close diamond cow_bw_mask.gif
//For 5 pixel stroke:
convert cow_bw_mask.gif -negate -blur 5x65000 -threshold 0 -negate -fill red -opaque black cow_bw_mask2.gif

//composite together:
convert cow_bw_mask2.gif cow_bw.gif \( cow_bw_mask.gif -negate -fill red \) -compose over -composite cow_bw_redborder.gif

convert cow_bw_mask2.gif cow_bw.gif -compose over -composite cow_bw_redborder.gif


//floodfill the outside area with red; change non-red to black, change red to white, clean up small dots using morphology close:
convert cow_bw.gif -fill red -fuzz 5% -draw "color 0,0 floodfill" -fill black +opaque red -fill white -opaque red -alpha off -morphology close diamond cow_bw_mask.gif

//For 5 pixel stroke:
convert cow_bw_mask.gif -negate -blur 5x65000 -threshold 0 -negate -fill red -opaque black cow_bw_mask2.gif

//composite together:
convert cow_bw_mask2.gif cow_bw.gif ( cow_bw_mask2.gif -negate \) -compose over -composite cow_bw_redborder.gif



convert file500.png ( -clone 0 -alpha extract -threshold 0 \) ( -clone 1 -blur 10x65000 -threshold 0 \) ( -clone 2 -fill red -opaque white \) ( -clone 3 -clone 0 -clone 1 -alpha off -compose over -composite \)(-delete 0,1,3 +swap -alpha off -compose copy_opacity -composite \) file500_redborder.png 

//floodfill the outside area with red; change non-red to black, change red to white, clean up small dots using morphology close:

convert file500.gif -fill red -fuzz 5% -draw "color 0,0 floodfill" -fill black +opaque red -fill white -opaque red -alpha off -morphology close diamond file500_mask.gifphology close diamond file500_mask.gif


//For 5 pixel stroke:
convert file500_mask.gif -negate -blur 5x65000 -threshold 0 -negate -fill red -opaque black file500_mask2.gif

//composite together:
convert file500_mask2.gif file500.gif \( file500_mask.gif -negate \) -compose over -composite file500_redborder.gif


convert "oYMU1_Out.png" "oYMU1_Out.gif"

convert logo: -fuzz 15%% -transparent White file500.png

convert ^
  qqq.png ^
  ( ^
    +clone -fill red ^
    -fill black -colorize 100%% ^
    -background black -flatten ^
    -morphology Dilate Disk:1 ^
    -blur 0x1 ^
    -alpha Copy ^
    -fill Red -colorize 100%% ^
  ) ^
  +swap ^
  -composite ^
 qqq_Out.png

  
convert file500.png -alpha extract -threshold 0 -clone 0 

\( -clone 1 -blur 10x65000 -threshold 0 \) \( -clone 2 -fill red -opaque white \) \( -clone 3 -clone 0 -clone 1 -alpha off -compose over -composite \) \ -delete 0,1,3 +swap -alpha off -compose copy_opacity -composite \ file500_redborder.png 

123