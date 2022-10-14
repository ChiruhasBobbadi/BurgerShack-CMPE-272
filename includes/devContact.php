<section class="business-talking fullsize" id="devContact">
	<div class="container fullsize" >
        <h2 style="letter-spacing: 5px;">Contact  &nbsp; the &nbsp; Developer </h2>
    <section class="main-section contact" id="contact">
	
        	<div>
            	<?php 
                $devContact = fopen("data/contacts.txt", "r");
                while(($line=fgets($devContact))!==false){
                    echo '<p class="lead" style="color:#ffffff;font-weight:lighter">'. $line .'</p>';
                    echo "<br/>";
                }
                fclose($devContact)
                ?>
            </div>
        	
        
</section>
</div>