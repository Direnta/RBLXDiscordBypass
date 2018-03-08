<?php
   $inputJSON = file_get_contents('php://input');
   $input = json_decode($inputJSON, TRUE); 

   $data = array("content" => $input["content"]);                                                                    
   $data_string = json_encode($data);                                                                                  
                                                                                                                       
   $ch = curl_init($input["webhook"]);                                                                      
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                    
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
       'Content-Type: application/json',                                                                                
       'Content-Length: ' . strlen($data_string))                                                                      
   );                                                                                                                  
                                                                                                                       
   $result = curl_exec($ch);
