<?php

// include_once dirname(__FILE__).'/Template/text_true.php';


/**
 * Drag and drop Ajax to save the field on wp
 */
add_action("wp_ajax_qbf_save_data", "qbf_field_data");

function qbf_field_data() {

    if (sanitize_text_field($_POST['action']) != 'qbf_save_data') {
        die();
    }

    $sanitizedData = sanitizeData($_POST['result']);
    $formData =  sanitize_text_field( $_POST['form_field'] ) ;

    if( $sanitizedData){

        $qbf_drag_N_drop_data = array(
            'drag_data'=>$sanitizedData ?: false,
            'drag_field_name'=>$formData ?: false,
        );
    
    
        $dragNdrop_data_arguments = array(
            'post_type'=>'qbfdragndrop',
            'post_author'=>1,
            'post_date'=>date('Y-m-d H:i:s'),
            'post_status'=>'publish',
            'post_title'=>sprintf('%s',$formData),
            'meta_input'=>$qbf_drag_N_drop_data
        );
    
        $wp_error = '';
    
    
        wp_insert_post($dragNdrop_data_arguments,$wp_error);
    
        if(!$wp_error){
            echo "Drag & Drop Field Data Added";
        }
    
        /*    }*/
        else{
            echo "Not Allowed";
        }

    }else{
        
        alert( "please use some field" );
        die();
    }
    


    die();
}

/**
 * @param $data
 * @return array|array[]
 * Sanitization of drag and drop field
 */
function sanitizeData($data) {

    $sanitizedData = array();

    $sanitizedData = array_map(function ($singleData) {
        if (gettype($singleData) == 'array') {
            return sanitizeData($singleData);
        } else {
            return sanitize_text_field($singleData);
        }
    }, $data);

    return $sanitizedData;
}



/**
 * New  Search ajax
 */
add_action("wp_ajax_qbf_search", "qbf_search_data");
add_action("wp_ajax_nopriv_qbf_search", "qbf_search_data");
function qbf_search_data(){


    $arr = [];
    wp_parse_str( $_POST['qbf_search'], $arr );

    $get_search_value = sanitize_text_field( $_POST['qbf_search'], $arr );
    
    // echo "<pre>";
    //     print_r($number);
    // echo "</pre>";

    // $qbf_user_data = array(
    //     'search_value'=>$get_search_value ?: false,
    // );


    $qbf_user_data = array(
        'search_value'=>[
            'search_input_value'=>$get_search_value
        ],
    );


    print_r($qbf_user_data);

   

    $user_data_arguments = array(
        'post_type'=>'qbfuserdata',
        'post_author'=>1,
        'post_date'=>date('Y-m-d H:i:s'),
        'post_status'=>'publish',
        'post_title'=>sprintf('Search Result: %s',$get_search_value),
        'meta_input'=>$qbf_user_data
    );


    $wp_error = '';

    wp_insert_post($user_data_arguments,$wp_error);

    if(!$wp_error){
        echo "Data Added";
    }

/*    }*/
else{
    echo "Not Allowed";
    }

die();
    



}



/**
 * Field user input data Ajax to save the field values on wp
 */
add_action("wp_ajax_qbf_contact", "qbf_contact_data");
add_action("wp_ajax_nopriv_qbf_contact", "qbf_contact_data");

function qbf_contact_data(){

  /*  if(check_ajax_referer('qbf_contact','cn')){*/


    // $number_txt = isset($_POST['number']) && $_POST['number']!='';


        $number = sanitize_text_field( $_POST['number']); // this number from ajax
        $input = sanitize_text_field($_POST['input']);
        $textarea = sanitize_text_field($_POST['textarea']);
        $select = sanitize_text_field( $_POST['select'] ?? '');
        $date = sanitize_text_field($_POST['date']);
        $radio = sanitize_text_field($_POST['radio']);
        $checkbox = sanitize_text_field($_POST['checkbox']) ?? '';
        $myfile = sanitize_text_field($_POST['myfile']) ?? '';

       

        
        $qbf_user_data = array(
            'number'=>$number ?: false,
            'input'=>$input ?: false,
            'textarea'=>$textarea ?: false,
            'select'=>$select ,
            'radio'=>$radio ?: false,
            'date'=>$date ?: false,
            'checkbox'=>$checkbox ?: false,
            'myfile'=>$myfile ?: false,
        );

        print_r($qbf_user_data);

        

        /**
         * Save upload data(Need to work)
         */

        //  function pr($arr){
        //      echo "<pre>";print_r($arr); echo "</pre>";
        //  }

    
        if(wp_upload_bits($myfile, null, file_get_contents($_FILES["myfile"]["tmp_name"])))
            {
                echo json_encode(['code'=>200]);
                // pr($myfile);
            }
            else{
                echo json_encode(['code'=>404, 'msg'=>'Some thing is wrong! Try again.']);
            }


       

        $user_data_arguments = array(
            'post_type'=>'qbfuserdata',
            'post_author'=>1,
            'post_date'=>date('Y-m-d H:i:s'),
            'post_status'=>'publish',
            'post_title'=>sprintf('Number: %s Input: %s Text area: %s date: %s',$number,$input,$textarea,$date),
            'meta_input'=>$qbf_user_data
        );

        /*query to match start  Extra--------------------*/
            /*$user_data = new WP_Query(array(
                'post_type'=>'qbfuserdata',
                'post_status'=>'publish',
                'meta_query'=>array(
                    'relation'=>'AND',
                    'number_check'=>array(
                        'key'=>'number',
                        'value'=>$number
                    ),
                    'input_check'=>array(
                        'key'=>'input',
                        'value'=>$input
                    ),
                )
            ));

            if($user_data->found_posts>0){
                echo 'Duplicate';//its same as js if statement
                die();
            }*/
        /*query to match End--------------------- */

        $wp_error = '';

        wp_insert_post($user_data_arguments,$wp_error);

        if(!$wp_error){
            echo "Data Added";
        }

/*    }*/
    else{
        echo "Not Allowed";
        }

    die();
}



/**
 * shortcode genetator to show field on frontend
 */

add_shortcode('qbf_drag_field', 'qbf_drag_field_shortcode');

function qbf_drag_field_shortcode($atts){

    
    $shortcodeID = isset($atts['id']) ? intval($atts['id']) : null;

    if (!$shortcodeID) {
        return 'ID parameter not found.';
    }

    if (get_post_type($shortcodeID) !== 'qbfdragndrop') {
        return 'ID did not matched.';
    }

    if (get_post_status($shortcodeID) !== 'publish') {
        return 'Post is not public';
    }

    $dragData = unserialize(get_post_meta($shortcodeID)['drag_data'][0]);


    $html = '';

    /*wp_nonce_field('qbf_contact','qbf_contact');*/

    $html .= '<form method="POST" enctype="multipart/form-data" id="qbfSearch"> 
        <div class="qbf_d_table">';


            $drag_posts = $dragData;

            foreach($drag_posts as $key => $arr_values ) {

                        // echo "<pre>".print_r($arr_values, true)."</pre><br />";
                        // echo "Count: ".count($arr_values)."<br />";

                foreach( $arr_values as $v_key => $values){

                    // print_r($values);

                        /*fix undefined */
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

                        /**
                         * Text Fields
                         */
                        if ($_text == 'text') {
                            

                            // $subtype = $values['subtype'] ?? null;

                            if ( $subtype == 'text'){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;

                                    if ($_text == 'text' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Text_Field/text_false.php');

                                    }elseif($_text == 'text' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Text_Field/text_true.php');

                                    }

                            }elseif($subtype == 'tel'){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;
                                // $subtype = $values['subtype'] ?? null;

                                    if ($subtype == 'tel' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Text_Field/tel_false.php');

                                    }elseif($subtype == 'tel' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Text_Field/tel_true.php');

                                    }
            
                            }
                            elseif($subtype == 'password'){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;
                                // $subtype = $values['subtype'] ?? null;

                                    if ($subtype == 'password' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Text_Field/password_false.php');

                                    }elseif($subtype == 'password' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Text_Field/password_true.php');

                                    }


                            }
                            elseif($subtype == 'email'){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;
                                // $subtype = $values['subtype'] ?? null;

                                    if ($subtype == 'email' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Text_Field/email_false.php');

                                    }elseif($subtype == 'email' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Text_Field/email_true.php');

                                    }

                            }
                            elseif($subtype == 'color'){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;
                                // $subtype = $values['subtype'] ?? null;

                                    if ($subtype == 'color' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Text_Field/color_false.php');

                                    }elseif($subtype == 'color' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Text_Field/color_true.php');

                                    }

                            }

                        
                        }
                        
                        
                        /*textarea*/
                        // $_text = $values['type'];

                        if ($_text == 'textarea') {

                            // $subtype = $values['subtype'] ?? null;

                            if($subtype == 'textarea'){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;

                                    if ($subtype == 'textarea' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Text_Area/textarea_false.php');

                                    }elseif($subtype == 'textarea' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Text_Area/textarea_true.php');

                                    }

                            }

                        } 
                        
                        
                        /*select*/
                        // $_text = $values['type'];
                        if ($_text == 'select') {

                            $multiple = $values['multiple'] ?? null;

                            if($_text == 'select' && $multiple == 'false'){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;
                            

                                    if ($_text == 'select' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Select/select_false.php');

                                    }elseif($_text == 'select' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Select/select_true.php');

                                    }

                            }elseif($_text == 'select' &&  $multiple == 'true' ){

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;
                                // $multiple = $values['multiple'] ?? null;

                                if ($_text == 'select' &&  $required == 'false'){

                                    include(dirname(__FILE__).'/Template/Select/select_false_multiple.php');

                                }elseif($_text == 'select' &&  $required == 'true'){

                                    include(dirname(__FILE__).'/Template/Select/select_true_multiple.php');

                                }

                            }

                        }

                        
                        /*radio-group*/
                        if ($_text == 'radio-group') {


                            $type = $values['type'] ?? null;
                            // $inline = $values['inline'] ?? null;
                            // $other = $values['other'] ?? null;

                            if($type == 'radio-group' && $inline == 'true' ){
                                $other = $values['other'] ?? null;

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;

                                    if ($type == 'radio-group' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Radio-Group/radio_false_inline_true.php');
                                    

                                    }elseif($type == 'radio-group' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Radio-Group/radio_true_inline_true.php');
                                    
                                    }

                            }elseif($type == 'radio-group' && $inline == 'false'){
                                // $other = $values['other'] ?? null;

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;

                                    if ($type == 'radio-group' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Radio-Group/radio_false_inline_false.php');
                                        

                                    }elseif($type == 'radio-group' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Radio-Group/radio_true_inline_false.php');
                                        
                                    }

                            }


                        } 
                        
                        /*paragraph*/
                        if ($_text == 'paragraph') {

                            // $subtype = $values['subtype'] ?? null;

                            $html .= '<div class="row">';

                            if ($values['subtype'] == 'blockquote') {
                                $html .= ' <blockquote> ' . $label . ' </blockquote>';
                            } elseif ($values['subtype'] == 'p') {
                                $html .= ' <p> ' . $label . ' </p>';
                            } elseif ($values['subtype'] == 'canvas') {
                                $html .= ' <canvas> ' . $label . ' </canvas >';
                            } elseif ($values['subtype'] == 'output') {

                                $html .= ' <output> ' . $label . ' </output>';
                            }

                            $html .= '</div>';


                        } 
                        
                        
                        /*number*/
                        if ($_text == 'number') {

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;

                                    if ($_text == 'number' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Number/number_false.php');

                                    }elseif($_text == 'number' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Number/number_true.php');

                                    }

                        } 
                        
                        /*hidden*/

                        if ($_text == 'hidden') {
                            $html .= ' <input type="' . $values['type'] . '" id="qbf_hidden_num" name="' .$name . '" >';
                        }


                        /*Header button*/
                        if ($_text == 'header') {


                            // $subtype = $values['subtype'] ?? null;

                            $html .= '<div class="row">';

                            if ($values['subtype'] == 'h1') {
                                $html .= ' <h1 class=" '.$className. ' "> ' . $label . ' </h1>';
                            } elseif ($values['subtype'] == 'h2') {
                                $html .= ' <h2> ' . $label . ' </h2>';
                            } elseif ($values['subtype'] == 'h3') {
                                $html .= ' <h3> ' . $label . ' </h3 >';
                            } elseif ($values['subtype'] == 'h4') {

                                $html .= ' <h4> ' . $label . ' </h4>';
                            } elseif ($values['subtype'] == 'h5') {

                                $html .= ' <h5> ' . $label . ' </h5>';
                            } elseif ($values['subtype'] == 'h6') {

                                $html .= ' <h6> ' . $label . ' </h6>';
                            }

                            $html .= '</div>';


                        } 
                        
                        /*File/Upload button*/
                        if ($_text == 'file') {


                            // $multiple = $values['multiple'] ?? null;

                            // $html .= '<div class="row">';
                            if($multiple == 'true'){

                                $subtype = $values['subtype'] ?? null;

                                    if($subtype == 'file'){

                                        // $required = $values['required'] ?? null;
                                        // $description = $values['description'] ?? null;

                                            if ($subtype == 'file' &&  $required == 'false'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/multiple_file_upload_button_false.php');

                                            }elseif($subtype == 'file' &&  $required == 'true'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/multiple_file_upload_button_true.php');

                                            }

                                    }elseif($subtype == 'fineuploader'){

                                        // $required = $values['required'] ?? null;
                                        // $description = $values['description'] ?? null;

                                            if ($subtype == 'fineuploader' &&  $required == 'false'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/multiple_fineuploader_button_false.php');

                                            }elseif($subtype == 'fineuploader' &&  $required == 'true'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/multiple_fineuploader_button_true.php');

                                            }

                                    }
                                

                            }elseif($multiple == 'false'){

                                // $subtype = $values['subtype'] ?? null;

                                    if($subtype == 'file'){

                                        // $required = $values['required'] ?? null;
                                        // $description = $values['description'] ?? null;

                                            if ($subtype == 'file' &&  $required == 'false'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/file_upload_button_false.php');

                                            }elseif($subtype == 'file' &&  $required == 'true'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/file_upload_button_true.php');

                                            }

                                    }elseif($subtype == 'fineuploader'){

                                        // $required = $values['required'] ?? null;
                                        // $description = $values['description'] ?? null;

                                            if ($subtype == 'fineuploader' &&  $required == 'false'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/fineuploader_button_false.php');

                                            }elseif($subtype == 'fineuploader' &&  $required == 'true'){

                                                include(dirname(__FILE__).'/Template/File_Upload_Button/fineuploader_button_true.php');

                                            }

                                    }

                            }
                        }
                        
                        
                        /*date button*/
                        if ($_text == 'date') {

                                // $required = $values['required'] ?? null;
                                // $description = $values['description'] ?? null;

                                    if ($_text == 'date' &&  $required == 'false'){

                                        include(dirname(__FILE__).'/Template/Date_Button/date_false.php');

                                    }elseif($_text == 'date' &&  $required == 'true'){

                                        include(dirname(__FILE__).'/Template/Date_Button/date_true.php');

                                    }

                        }

                        /*checkbox button*/
                        if ($_text == 'checkbox-group' ) {

                            $toggle = $values['toggle'] ?? null;
                            
                            if ($_text == 'checkbox-group' && $toggle == 'true') {

                                $html .= '<div class="row">';
                        
                                $html .= ' <p> ' . $label . ' </p>';
                        
                                foreach ($values['values'] as $cb) {
                        
                                    $cb_name = $cb['name'] ?? null;
                                    $cb_label = $cb['label'] ?? null;
                        
                                    $html .= '<label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>';
                                    $html .= '<label for="' .$cb_name . '">' . $cb_label . '</label><br>';
                                }
                        
                                $html .= '</div>';
                    
                        } else if($_text == 'checkbox-group' && $toggle == 'false'){
                            
                            $html .= '<div class="row">';
                    
                            $html .= ' <p> ' . $label . ' </p>';
                    
                            foreach ($values['values'] as $cb) {
                    
                                $cb_name = $cb['name'] ?? null;
                                $cb_label = $cb['label'] ?? null;
                                $cb_value = $cb['value'] ?? null;
                    
                                $html .= '<input type="checkbox" id="qbf_checkbox" name="' .$name . '" value="' .$cb_value . '" >';
                                $html .= '<label for="' .$cb_name . '">' . $cb_label . '</label><br>';
                            }
                    
                            $html .= '</div>';
                        }
                        
                
            }
        }
    }

    /*submit button*/

    $shortcodeID = isset($atts['id']) ? intval($atts['id']) : null;

    if (!$shortcodeID) {
        return 'ID parameter not found.';
    }

    if (get_post_type($shortcodeID) !== 'qbfdragndrop') {
        return 'Post not matched.';
    }

    if (get_post_status($shortcodeID) !== 'publish') {
        return 'Post is not public';
    }

    $dragData = unserialize(get_post_meta($shortcodeID)['drag_data'][0]);

    
    $drag_posts = $dragData;

    foreach($drag_posts as $key => $arr_values ) {
        foreach( $arr_values as $v_key => $values){
            // print_r($values);


            /*fix undefined */
            $className = $values['className'] ?? null;
            $label = $values['label'] ?? null;
            $name = $values['name'] ?? null;
            $value = $values['value'] ?? null;
            $access = $values['access'] ?? null;
            $style = $values['style'] ?? null;


            $_text = $values['type'];
            if ($_text == 'button') {
                if ($values['subtype'] == 'button') {
                    $html .= '<div class="row">';
                    $html .= ' <button name="' . $name . '" value="'.$value.'" type="button" class="' . $className . '" id="qbf-submit">' . $label . '</button>';
                    $html .= '</div>';

                } elseif ($values['subtype'] == 'search') {
                    $html .= '<div class="row">';
                    $html .= ' <button name="submit" value="'.$value.'" type="submit" class="' . $className . '" id="qbf-search">' . $label . '</button>';
                    $html .= '</div>';

                } elseif ($values['subtype'] == 'submit') {
                    $html .= '<div class="row">';
                    $html .= ' <button name="submit" type="submit" value="'.$value.'" class="' . $className . '" id="qbf-submit">' . $label . '</button>';
                    $html .= '</div>';
                }
            }
        }
    }

    $html .= '</div></form>';

    return $html;
}



/**
 * Activation
 */
function activate_questionnaire_based_filter() {
    Inc\Base\Activate::activate();
}

register_activation_hook(__FILE__, 'activate_questionnaire_based_filter');

/**
 * Deactivation
 */
function deactivate_questionnaire_based_filter() {
    Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_questionnaire_based_filter');

/**
 * Register service and its classes 
 */
if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}

/**
 * form builder: 4354
 */