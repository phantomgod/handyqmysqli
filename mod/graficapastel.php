<?php
function matchset($xx)
{
    $arrx = array_values($xx);
    $i = 0;
    while (list ($key, $val) = each ($arrx))
    {
        $xy[$i] = $val;
        $i++;
    }
    $cnt = $i;
    return $xy;
}
$sliced = matchset($slice);
$countqw = count($sliced);

$ItemNames = matchset($itemName);


$sum = 0;
$degrees = Array();
$diameter = 200;
$radius = $diameter/2;


for ($x=0; $x<$countqw ; $x++)
{
    $sum += $sliced[$x];
}


$degCount = 0;
for ($y=0; $y<$countqw; $y++)
{
    if((($sliced[$y]/$sum) * 360) > '0')
    {
        $degrees[$degCount] = ($sliced[$y]/$sum) * 360;
        $degCount++;
    }    
}


Header("Content-Type: image/png");
$im = ImageCreate(550, 300);

$black = ImageColorAllocate($im, 0, 0, 0);
$black = ImageColorAllocate($im, 255, 255, 255);
$hexCode = array("255,153,0","0,204,153","204,255,102","255,102,102","102,204,255","204,153,255","255,0,0","51,0,255","255,51,153","204,0,255","255,255,51","51,255,51","255,102,0","238,215,232","218,227,235","252,255,218","173,173,90");

ImageFill($im, 0, 0, $black);


ImageLine($im, 150,150, 225, 150, $black);

for ($z=0; $z<$countqw; $z++)
{
    
    ImageArc($im, 150, 150, $diameter, $diameter, $last_angle,
    ($last_angle+$degrees[$z]), $black);
    $last_angle = $last_angle+$degrees[$z];

    
    $end_x = round(150 + ($radius * cos($last_angle*pi()/180)));
    $end_y = round(150 + ($radius * sin($last_angle*pi()/180)));

    
    ImageLine($im, 150, 150, $end_x, $end_y, $black);
}


$prev_angle = 0;
$pointer = 0;

for ($z=0; $z<$countqw; $z++)
{
    
    $pointer = $prev_angle + $degrees[$z];
    $this_angle = ($prev_angle + $pointer) / 2;
    $prev_angle = $pointer;

    
    $end_x = round(150 + ($radius * cos($this_angle*pi()/180)));
    $end_y = round(150 + ($radius * sin($this_angle*pi()/180)));

    
    $mid_x = round((150+($end_x))/2);
    $mid_y = round((150+($end_y))/2);
        
    
    $hexCodeSplit = explode(',',$hexCode[$z]);
    $WedgeColor = ImageColorAllocate($im, $hexCodeSplit[0],$hexCodeSplit[1],$hexCodeSplit[2]);
    
    ImageFillToBorder($im, $mid_x, $mid_y, $black, $WedgeColor);        
}


ImageString($im,3, 10, 10, "$title", $black);

$red = ImageColorAllocate($im, 255, 153, 153);
$blue = ImageColorAllocate($im, 0, 0, 255);


$adjPosition = 20;

for ($z=0; $z<$degCount; $z++)
{
    $percent = ($degrees[$z]/360)*100;
    $percent = round($percent,2);
    $adjPosition = $adjPosition + 15;
    $hexCodeSplit = explode(',',$hexCode[$z]);
    $percentLen = strlen($percent);
    if($percentLen == '4'){$percent = " "."$percent";}
    if($percentLen == '3'){$percent = "  "."$percent";}
    if($percentLen == '2'){$percent = "   "."$percent";}
    if($percentLen == '1'){$percent = "    "."$percent";}
    ImageString($im,1, 270, ($adjPosition+1), "$percent%", $black);

    $WedgeColor = ImageColorAllocate($im, $hexCodeSplit[0],$hexCodeSplit[1],$hexCodeSplit[2]);

    ImageFilledRectangle($im, 310, $adjPosition, 320, ($adjPosition+10), $black);
    ImageFilledRectangle($im, 311, ($adjPosition+1), 319, ($adjPosition+9), $WedgeColor);
    if($sliced[$z] >= "1000" && $sliced[$z] < "1000000")
    {
        $sliced[$z] = $sliced[$z]/1000;
        $sliced[$z] = "$sliced[$z]"."k";
    }
    $sliceLen = strlen($sliced[$z]);
    if($sliceLen == '4'){$sliced[$z] = " "."$sliced[$z]";}
    if($sliceLen == '3'){$sliced[$z] = "  "."$sliced[$z]";}
    if($sliceLen == '2'){$sliced[$z] = "   "."$sliced[$z]";}
    if($sliceLen == '1'){$sliced[$z] = "    "."$sliced[$z]";}

    ImageString($im,1, 325, ($adjPosition+1), "$sliced[$z]", $black);
    ImageString($im,1, 360, ($adjPosition+1), "$ItemNames[$z]", $black);
}

ImagePNG($im);
?>
