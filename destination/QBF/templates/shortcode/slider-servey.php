<?php


// $val->type
// $val->access
// $val->className
// $val->description
// $val->inline
// $val->label
// $val->max
// $val->maxlength
// $val->min
// $val->multiple
// $val->name
// $val->options
// $val->other
// $val->placeholder
// $val->required
// $val->rows
// $val->step
// $val->style
// $val->subtype
// $val->toggle
// $val->value

  $drag_posts = $dragData;
  
?>
    <div class="QBF-sliders">

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

                            
                          

                            $a = json_encode($arr_values);
                            $b = json_decode($a); //make it as object
                            echo "<fieldset class=\"qbf-slider-fieldset\">";

                            foreach($b as $val){

                                // TEXT and subtype Text ------>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                                if($val->type == 'text' && $val->subtype == 'text'){

                                    printf( "<label for=\"$val->name\">$val->label</label>
                                            <input type=\"$val->type\" id=\"$val->name\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />"
                                               
                                                
                                            
                                    );
                                }
                                // TEXT and subtype color 
                                elseif($val->type == 'text' && $val->subtype == 'color' ){
                                    printf( "<input type=\"$val->subtype\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />"
                                    );
                                }

                                 // TEXT and subtype color 
                                 elseif($val->type == 'text' && $val->subtype == 'email' ){
                                    printf( "<input type=\"$val->subtype\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />"
                                    );
                                }

                                 // TEXT and subtype password 
                                 elseif($val->type == 'text' && $val->subtype == 'password' ){
                                    printf( "<input type=\"$val->subtype\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />"
                                    );
                                }

                                 // TEXT and subtype tel 
                                 elseif($val->type == 'text' && $val->subtype == 'tel' ){
                                    printf( "<input type=\"$val->subtype\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />"
                                    );
                                }



                                if($val->type == 'autocomplete'){

                                    printf( " <input type=\"$val->type\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" /> "
      
                                    );
                                }
                                


                                // button 

                                if($val->type == 'button' && $val->subtype == 'button'){

                                    printf( "<button type=\"$val->subtype\" class=\"$val->className\">$val->label</button>\n"
     
                                    );
                                }
                                // TEXT and subtype submit 
                                elseif($val->type == 'button' && $val->subtype == 'submit' ){
                                    printf( "<button type=\"$val->subtype\" class=\"$val->className\">$val->label</button>"
                                    );
                                }

                                 // TEXT and subtype search 
                                 elseif($val->type == 'button' && $val->subtype == 'search' ){
                                    printf( "<button type=\"$val->subtype\" class=\"$val->className\">$val->label</button>\n "
                                    );
                                }


                                if($val->type == 'checkbox-group'){

                                    printf( " <div class=\"$val->className\">
                                                <input class=\"$val->className\" type=\"$val->type\" value=\"$val->value\" id=\"$val->name\">
                                                <label class=\"$val->className\" for=\"$val->name\">
                                                    $val->label
                                                </label>
                                            </div>"         
                                    );
                                }

                                if($val->type == 'date'){

                                    printf( "<input type=\"$val->type\" id=\"$val->name\" name=\"$val->name\"> "
       
                                    );
                                }


                                if($val->type == 'file'){

                                    printf( "<input type=\"$val->type\" id=\"$val->name\" name=\"$val->name\">"
        
                                    );
                                }

                                if($val->type == 'header'){

                                    printf( "<header>
                                        <$val->subtype>$val->label</$val->subtype>
                                    </header> "
     
                                    );
                                }


                                if($val->type == 'hidden'){

                                    printf( "<input type=\"$val->type\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />\n "
      
                                    );
                                }

                                if($val->type == 'number'){

                                    printf( "<label for=\"$val->name\">$val->label</label>
                                    <input type=\"$val->type\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />\n"
      
                                    );
                                }

                                if($val->type == 'paragraph'){

                                    printf( " <p>$val->label</p>"
       
                                    );
                                }


                                if($val->type == 'radio-group'){

                                    printf( " <div class=\"$val->className\">
                                        <input class=\"$val->className\" type=\"$val->type\" value=\"$val->value\" id=\"$val->name\">
                                        <label class=\"$val->className\" for=\"$val->name\">
                                            $val->label
                                        </label>
                                    </div> "
        
                                    );
                                }


                                if($val->type == 'select'){

                                    printf( "<div class=\"$val->className\">
                                        <input class=\"$val->className\" type=\"$val->type\" value=\"$val->value\" id=\"$val->name\">
                                        <label class=\"$val->className\" for=\"$val->name\">
                                            $val->label
                                        </label>
                                    </div>"
       
                                    );
                                }


                                if($val->type == 'textarea'){

                                    printf( "<label for=\"$val->name\">$val->label</label>
                                    <input type=\"$val->type\" name=\"$val->name\" class=\"$val->className\" value=\"$val->value\" />"
       
                                    );
                                }

                                // another if 
                            }


                            echo "<input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
                            <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />

                            </fieldset>";

                            
                        }

                    
                    ?>
            

        </form>
    
    </div>

    </div>
<!-- jQuery -->
<!-- <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script> -->
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

          







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