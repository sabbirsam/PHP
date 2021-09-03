<?php
/**
 * Main: radio subtype = radio and required = false inline true
 */


$html .= '<div class="row">';

                            if($description == true ){
                                
                                
                                $html .= '<div class="controls">';
                                $html .= '<div class="tooltip"><label for="fname">' . $label . '</label>
                                    <span class="tooltiptext">'.$description.'</span>';
                                $html .= '</div>';
                                $html .= '</div>';

                                
                            }else{
                                $html .= '<div class="controls">';
                                $html .= '<label for="fname">' . $label . '</label>';
                                $html .= '</div>';
                                
                            }

                        
                            /*input type  Label*/
                            $html .= '<div class="controls">';

                            foreach ($values['values'] as $rd) {

                                // $html .= '<input type="radio" id="qbf_radio_group" name="fav_language" value="' . $rd['value'] . '">';
                                // $html .= '<label for="' . $rd['value'] . '">' . $rd['label'] . '</label><br>';

                                $html .= '<label class="radio">';
                                $html .= '<input type="radio" name="' . $rd['value'] . '" value="' . $rd['value'] . '" for="' . $rd['value'] . '">' . $rd['label'] .'</label>';
                            
                            }
            
                            $html .= '</div>';
