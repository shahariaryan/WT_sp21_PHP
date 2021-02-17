<?php
      
	 $area=0;
	 $parimeter=0;
	 $length=5;
	 $width=5;
	 
	echo " Area of rectangle is: ".($length * $width)."<br/>";
	echo " Perimeter of rectrangle is: ".(2*($length+$width))."<br/>";
	if ($length==$width) {
            echo 'the shape is a square';
        } 
		else { 
            echo 'the shape is not square';
        }
?>