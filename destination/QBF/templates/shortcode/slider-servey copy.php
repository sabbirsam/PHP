<?php

  $access = $values['access'] ?? null;
  $className = $values['className'] ?? null;
  $description = $values['description'] ?? null;
  $inline = $values['inline'] ?? null;
  $label = $values['label'] ?? null;
  $max = $values['max'] ?? null;
  $maxlength = $values['maxlength'] ?? null;
  $min = $values['min'] ?? null;
  $multiple = $values['multiple'] ?? null;
  $name = $values['name'] ?? null;
  $options = $values['options'] ?? null;
  $other = $values['other'] ?? null;
  $placeholder = $values['placeholder'] ?? null;
  $required = $values['required'] ?? null;
  $rows = $values['rows'] ?? null;
  $step = $values['step'] ?? null;
  $style = $values['style'] ?? null;
  $subtype = $values['subtype'] ?? null;
  $toggle = $values['toggle'] ?? null;
  $value = $values['value'] ?? null;
  $_text = $values['type'] ?? null;
  $_toogle = $toggle;

  $drag_posts = $dragData;
  

            foreach($drag_posts as $key => $arr_values ) {
                foreach( $arr_values as $v_key => $values){

                }
  
            }

            

?>
    <div class="container">

    <?php 
    
    if($drag_posts){ 

    }
    ?>

        <!-- multistep form -->
        <form  id="msform">
            <!-- progressbar -->
            <div class="row">

                <ul id="progressbar">
                        <li class="active">
                            <?php   
                            
                                foreach($drag_posts as $key => $arr_values ) {
                                    $flag = false;
                                    foreach( $arr_values as $v_key => $values){

                                        if(!$flag){
                                            echo  $arr_values[0]['placeholder']." <li>";
                                            $flag = true;
                                        }
                                        // var_dump($values);      
                                    }   
                                }
                            ?>
                            </li>
                        </li>
                   
                </ul>

            </div>

 <!-- fieldsets 0-->
            
                <fieldset>
                    <?php 
                    if( $arr_values[0]){
                        foreach($drag_posts as $key => $arr_values ) {
                        foreach( $arr_values as $v_key => $values){}
                            
                    ?>
                    
                        <h2 class="fs-title"><?php echo  $arr_values[0]['label']?></h2>

                        <input type="<?php echo  $arr_values[0]['type']?>" name="<?php echo  $arr_values[0]['name']?>" placeholder="<?php echo  $arr_values[0]['placeholder']?>" />
                   
                    <?php  } 
                    }
                    
                    if( $arr_values[1]){
                    ?>

                        <input type="button" name="next" class="next action-button chervon-right" value="Continue" />
                    <?php  } 
                    else{
                        ?>
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                    <?php
                    }
                    ?>
                    
                </fieldset>

 <!-- fieldsets 1-->
                <fieldset>
                    <?php 
                    if( $arr_values[1]){
                        foreach($drag_posts as $key => $arr_values ) {
                        foreach( $arr_values as $v_key => $values){}     
                    ?>
                    
                    <h2 class="fs-title"><?php echo  $arr_values[1]['label']?></h2>

                    <input type="<?php echo  $arr_values[1]['type']?>" name="<?php echo  $arr_values[1]['name']?>" placeholder="<?php echo  $arr_values[1]['placeholder']?>" />
                   
                    <?php  } ?>
                    <?php  } 
                    
                    if( $arr_values[1]){
                    ?>
                    
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <?php  } 
                    
                    if( $arr_values[2]){
                        ?>
                    <input type="button" name="next" class="next action-button" value="Next" />
                    <?php  }
                    else{

                    ?>

                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                    <?php } ?>
                    
                </fieldset>

 <!-- fieldsets 2-->
                <fieldset>
                    <?php 
                    if( $arr_values[2]){
                        foreach($drag_posts as $key => $arr_values ) {
                        foreach( $arr_values as $v_key => $values){}
                            // echo "Count: ".count($arr_values)."<br />";

                            // $count = count($arr_values);
                            // print_r($count);      
                    ?>
                    
                    <h2 class="fs-title"><?php echo  $arr_values[2]['label']?></h2>

                    <input type="<?php echo  $arr_values[2]['type']?>" name="<?php echo  $arr_values[2]['name']?>" placeholder="<?php echo  $arr_values[2]['placeholder']?>" />
                   
                    <?php  } ?>
                    <?php  } 
                    
                    if( $arr_values[2]){
                        ?>
                        
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <?php  } 
                        
                        if( $arr_values[3]){
                            ?>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <?php  }
                        else{
    
                        ?>
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        <?php } ?>

                </fieldset>

 <!-- fieldsets 3-->
                <fieldset>
                    <?php 
                    if( $arr_values[3]){
                        foreach($drag_posts as $key => $arr_values ) {
                        foreach( $arr_values as $v_key => $values){}
                            // echo "Count: ".count($arr_values)."<br />";

                            // $count = count($arr_values);
                            // print_r($count);      
                    ?>
                    
                    <h2 class="fs-title"><?php echo  $arr_values[3]['label']?></h2>

                    <input type="<?php echo  $arr_values[3]['type']?>" name="<?php echo  $arr_values[3]['name']?>" placeholder="<?php echo  $arr_values[3]['placeholder']?>" />
                   
                    <?php  } ?>
                    <?php  } 
                    
                    if( $arr_values[3]){
                        ?>
                        
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <?php  } 
                        
                        if( $arr_values[4]){
                            ?>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <?php  }
                        else{
    
                        ?>
    
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        <?php } ?>

                </fieldset>

<!-- fieldsets 4-->
                <fieldset>
                    <?php 
                    if( $arr_values[4]){
                        foreach($drag_posts as $key => $arr_values ) {
                        foreach( $arr_values as $v_key => $values){}
                            // echo "Count: ".count($arr_values)."<br />";

                            // $count = count($arr_values);
                            // print_r($count);      
                    ?>
                    
                    <h2 class="fs-title"><?php echo  $arr_values[4]['label']?></h2>

                    <input type="<?php echo  $arr_values[4]['type']?>" name="<?php echo  $arr_values[4]['name']?>" placeholder="<?php echo  $arr_values[4]['placeholder']?>" />
                   
                    <?php  } ?>
                    <?php  } 
                    
                    if( $arr_values[4]){
                        ?>
                        
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <?php  } 
                        
                        if( $arr_values[5]){
                            ?>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <?php  }
                        else{
    
                        ?>
    
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        <?php } ?>

                </fieldset>
        
        </form>
    
    </div>
<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

          




<!-- multistep form -->
<form  id="msform">
            <!-- progressbar -->
            <div class="row">

                <ul id="progressbar">
                        <li class="active">
                            <?php   
                            
                                foreach($drag_posts as $key => $arr_values ) {
                                    $flag = false;
                                    foreach( $arr_values as $v_key => $values){

                                        if(!$flag){
                                            echo  $arr_values[0]['type']." <li>";
                                            $flag = true;
                                        }
                                        // var_dump($values);      
                                    }   
                                }
                            ?>
                            </li>
                        </li>
                   
                </ul>

            </div>



                    <?php 

                        foreach ($drag_posts as $key => $arr_values){
                            // echo "<fieldset class=\"cust\">$arr_values</fieldset>\n";
                            printf( "<fieldset class=\"qbf-slider-fieldset\">  

                                        <h2 class=\"fs-title\"> %s </h2>
                                    
                                        <input type=\"%s\" name=\"%s\" placeholder=\"%s\" />   
                                        <input type=\"%s\" name=\"%s\" placeholder=\"%s\" />
                                        
                                        
                                    
                                    
                                    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
                                
                                </fieldset>\n", 
                                
                                                $arr_values[0]['label'],  
                                
                                                $arr_values[0]['type'],
                                                $arr_values[0]['name'],
                                                $arr_values[0]['placeholder'],

                                                $arr_values[1]['type'],
                                                $arr_values[1]['name'],
                                                $arr_values[1]['placeholder'],
                                                
                                            
                            );
                        }

                    
                    // foreach ($drag_posts as $key => $arr_values){
                    //     // echo "<fieldset class=\"cust\">$arr_values</fieldset>\n";
                    //     printf( "<fieldset class=\"qbf-slider-fieldset\">  

                    //                 <h2 class=\"fs-title\"> %s </h2>
                                  
                    //                 <input type=\"%s\" name=\"%s\" placeholder=\"%s\" />   
                    //                 <input type=\"%s\" name=\"%s\" placeholder=\"%s\" />
                                    
                                    
                                
                                
                    //             <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
                    //             <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
                            
                    //         </fieldset>\n", 
                            
                    //                         $arr_values[0]['label'],  
                            
                    //                         $arr_values[0]['type'],
                    //                         $arr_values[0]['name'],
                    //                         $arr_values[0]['placeholder'],

                    //                         $arr_values[1]['type'],
                    //                         $arr_values[1]['name'],
                    //                         $arr_values[1]['placeholder'],
                                            
                                        
                    //     );
                    // }
                    
                    ?>
            

        </form>







        <form  id="msform">
            <!-- progressbar -->
            <div class="row">

                <ul id="progressbar">
                        <li class="active">
                            <?php   
                            
                                foreach($drag_posts as $key => $arr_values ) {
                                    $flag = false;
                                    foreach( $arr_values as $v_key => $values){

                                        if(!$flag){
                                            echo  $arr_values[0]['type']." <li>";
                                            $flag = true;
                                        }
                                        // var_dump($values);      
                                    }   
                                }
                            ?>
                            </li>
                        </li>
                   
                </ul>

            </div>



                    <?php 



                        // foreach ($drag_posts as $key => $arr_values){
                        //         $i = 1;


                        //         if($i <= 2){
                        //             echo "<fieldset class=\"qbf-slider-fieldset\"> ". print_r($arr_values) . "<br>". " </fieldset>";
                        //             $i++;
                        //         }
                            
                        //     }



                        foreach ($drag_posts as $key => $arr_values){
                            // $a = json_encode($arr_values);
                            // echo "<fieldset class=\"cust\">$a</fieldset>\n";

                            // $a=  json_encode($arr_values);
                            // echo $a;


                            $a = json_encode($arr_values, JSON_PRETTY_PRINT);
                            $b = json_decode($a); //make it as object
                            // var_dump($b);

                            foreach($b as $val){

                            
                            
                                printf( "<fieldset class=\"qbf-slider-fieldset\">  

                                        
                                    $val->type
                                    $val->subtype
                                    $val->access
                                    <input type=\"$val->type\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />\n
                                    

                                    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
                                    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
                                
                                    </fieldset>\n"
                                               
                                                
                                            
                                );
                            }
                        }




                        // foreach ($drag_posts as $key => $arr_values){
                        //     // echo "<fieldset class=\"cust\">$arr_values</fieldset>\n";



                        //     printf( "<fieldset class=\"qbf-slider-fieldset\">  

                        //                 <input type=\"%s\" name=\"%s\" placeholder=\"%s\" />   

                        //                 <input type=\"%s\" name=\"%s\" placeholder=\"%s\" />
                                        

                        //             <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
                        //             <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
                                
                        //         </fieldset>\n", 
                                
                                                
                        //                         $arr_values[0]['type'],
                        //                         $arr_values[0]['name'],
                        //                         $arr_values[0]['placeholder'],

                                                 
                        //                         $arr_values[1]['type'],
                        //                         $arr_values[1]['name'],
                        //                         $arr_values[1]['placeholder'],
                                                
                                            
                        //     );
                        // }

                    
                    ?>
            

        </form>







<!-- backup -->
<!-- <div class="container">
    
    <form  id="msform">
        
        <div class="row">
            <ul id="progressbar">
                <li class="active">Effective Date</li>
                <li>Policy Details</li>
                <li>Your Quote</li>
                <li>Payment</li>
                <li>Done!</li>
            </ul>
        </div>
       
        
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">This is step 1</h3>
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="pass" placeholder="Password" />
                <input type="password" name="cpass" placeholder="Confirm Password" />
                <input type="button" name="next" class="next action-button chervon-right" value="Continue" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="facebook" placeholder="Facebook" />
                <input type="text" name="gplus" placeholder="Google Plus" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">We will never sell it</h3>
                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="phone" placeholder="Phone" />
                <textarea name="address" placeholder="Address"></textarea>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
    </form>

</div>

<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>

<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script> -->