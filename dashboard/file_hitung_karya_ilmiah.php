         <?php 
                      $doku = $row['dokumen1'];
                      if(!empty ($row['dokumen1'] )) {
                        $dokumen1 = '1';
                      }else{
                        $dokumen1 = '0';
                      }
                         $doku = $row['dokumen2'];
                      if(!empty ($row['dokumen2'] )) {
                        $dokumen2 = '1';
                      }else{
                        $dokumen2 = '0';
                      }
                         $doku = $row['dokumen3'];
                      if(!empty ($row['dokumen3'] )) {
                        $dokumen3 = '1';
                      }else{
                        $dokumen3 = '0';
                      }
                         $doku = $row['dokumen4'];
                      if(!empty ($row['dokumen4'] )) {
                        $dokumen4 = '1';
                      }else{
                        $dokumen4 = '0';
                      }
                         $doku = $row['dokumen5'];
                      if(!empty ($row['dokumen5'] )) {
                        $dokumen5 = '1';
                      }else{
                        $dokumen5 = '0';
                      }
                         $doku = $row['dokumen6'];
                      if(!empty ($row['dokumen6'] )) {
                        $dokumen6 = '1';
                      }else{
                        $dokumen6 = '0';
                      }
                         $doku = $row['dokumen7'];
                      if(!empty ($row['dokumen7'] )) {
                        $dokumen7 = '1';
                      }else{
                        $dokumen7 = '0';
                      }
                         $doku = $row['dokumen8'];
                      if(!empty ($row['dokumen8'] )) {
                        $dokumen8 = '1';
                      }else{
                        $dokumen8 = '0';
                      }
                         $doku = $row['dokumen9'];
                      if(!empty ($row['dokumen9'] )) {
                        $dokumen9 = '1';
                      }else{
                        $dokumen9 = '0';
                      }
                         $doku = $row['dokumen10'];
                      if(!empty ($row['dokumen10'] )) {
                        $dokumen10 = '1';
                      }else{
                        $dokumen10 = '0';
                      }




                      $totalnya = $dokumen1 + $dokumen2 + $dokumen3 + $dokumen4 + $dokumen5 + $dokumen6 +$dokumen7 + $dokumen8+ $dokumen9 + $dokumen10 ;

                      
                               ?>

         <?php 
         //hitung status enkripsi
                        
                          
                      if($row['status_dokumen1'] == '2' ) {
                        $total_status1 = '1';
                      }else{
                        $total_status1 = '0';
                     } 
                        
                      if($row['status_dokumen2'] =='2') {
                        $total_status2 = '1';
                      }else{
                        $total_status2 = '0';
                      }
                        
                      if($row['status_dokumen3'] =='2' ) {
                        $total_status3 = '1';
                      }else{
                        $total_status3 = '0';
                      }
                         
                    if($row['status_dokumen4'] =='2' ) {
                        $total_status4 = '1';
                      }else{
                        $total_status4 = '0';
                      }
                         
                      if($row['status_dokumen5'] =='2' ) {
                        $total_status5 = '1';
                      }else{
                        $total_status5 = '0';
                      }
                        
                      if($row['status_dokumen6'] =='2') {
                        $total_status6 = '1';
                      }else{
                        $total_status6 = '0';
                      }
                        
                      if($row['status_dokumen7'] =='2' ) {
                        $total_status7 = '1';
                      }else{
                        $total_status7 = '0';
                      }
                         
                      if($row['status_dokumen8'] =='2') {
                        $total_status8 = '1';
                      }else{
                        $total_status8 = '0';
                      }
                        
                      if($row['status_dokumen9'] =='2' ) {
                        $total_status9 = '1';
                      }else{
                        $total_status9 = '0';
                      }
                         
                      if($row['status_dokumen10'] =='2' ) {
                        $total_status10 = '1';
                      }else{
                        $total_status10 = '0';
                      }




                      $total_statusnya = $total_status1 + $total_status2 + $total_status3 + $total_status4 + $total_status5 + $total_status6 +$total_status7 + $total_status8+ $total_status9 + $total_status10 ;

                      
                               ?>

                                 <?php 
         //hitung status enkripsi
                        
                          
                      if($row['status_dokumen1'] == '3' ) {
                        $total1 = '1';
                      }else{
                        $total1 = '0';
                     } 
                        
                      if($row['status_dokumen2'] =='3') {
                        $total2 = '1';
                      }else{
                        $total2 = '0';
                      }
                        
                      if($row['status_dokumen3'] =='3' ) {
                        $total3 = '1';
                      }else{
                        $total3 = '0';
                      }
                         
                       if($row['status_dokumen4'] =='3' ) {
                        $total4 = '1';
                      }else{
                        $total4 = '0';
                      }
                         
                      if($row['status_dokumen5'] =='3' ) {
                        $total5 = '1';
                      }else{
                        $total5 = '0';
                      }
                        
                      if($row['status_dokumen6'] =='3') {
                        $total6 = '1';
                      }else{
                        $total6 = '0';
                      }
                        
                      if($row['status_dokumen7'] =='3' ) {
                        $total7 = '1';
                      }else{
                        $total7 = '0';
                      }
                         
                      if($row['status_dokumen8'] =='3') {
                        $total8 = '1';
                      }else{
                        $total8 = '0';
                      }
                        
                      if($row['status_dokumen9'] =='3' ) {
                        $total9 = '1';
                      }else{
                        $total9 = '0';
                      }
                         
                      if($row['status_dokumen10'] =='3' ) {
                        $total10 = '1';
                      }else{
                        $total10 = '0';
                      }




                      $totalstatus33 = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 +$total7 + $total8+ $total9 + $total10 ;

                      
                               ?>

