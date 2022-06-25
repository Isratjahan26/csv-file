<?php

    $csv=fopen('table.csv','r');
    $read_data=fgetcsv($csv,5000,',');

    while(($read_data=fgetcsv($csv,5000,',')) !== false)
    {   
        $r_data[]=$read_data;    
    }  
?>
<!-- header file -->
 <?php 
include("header.php"); 
?>
<!-- table show -->
    
<table class="table table-dark table-striped">
  
                        <tr  class="table-info">
                            <th>SERIAL  NO.</th>
                            <th>USER NAME</th>
                            <th>EMAIL</th>
                            <th> PASSWORD</th>
                            
                            <th>CONTACT</th>
                            <th>MASSAGE</th>
                           <th>DEPT</th>
                          <th>GENDER</th>
                       
                            
                        </tr>
                 
                    
                       <?php foreach($r_data as $x){?>
                       <tr  >
                      
                        <td><?=$x[0]?></td>
                       <td><?=$x[1]?></td>
                       <td><?=$x[2]?></td>
                       <td><?=$x[3]?></td>
                       <td><?=$x[4]?></td>
                       <td><?=$x[5]?></td>
                      <td><?=$x[6]?></td>
                      <td><?=$x[7]?></td>
                      
                       
                    </tr>
                        <?php } ?>
                   
                </table>
            </div>
        </div>
    </div>
<!-- footer file -->
   <?php 
include("footer.php"); 
    ?>