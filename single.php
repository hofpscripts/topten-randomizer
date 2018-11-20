<?php
shuffle($classEntries);
		
echo "[b]" .stripslashes($className). "[/b]" .$entries. "\n";
		   $place = 1; // Start the place counter.
		   for($i=0;$i < $numEntries; $i++) {
        $entry = $classEntries[$i];
if($tenonly == TRUE){
        if($place <= 12){
            if($place == 1) {
                $pl = '[b]CH[/b] ';
            }elseif($place == 2) {
                $pl = '[b]RCH[/b] ';
            }else {
                $pl = '';
            }
            
echo $pl.trim($entry);
}

echo "\n";
}
					
		$place++;
		}//end class
		echo "\n";
		?>