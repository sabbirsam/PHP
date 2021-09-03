
<p class="plugin-name">Question Based Filter</p>

<div class="row">

    <div class="col-md-12">

        <!--Start contact form area-->
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-form">

                            <div class="inner-box">


                                <div class="qbf_tabs">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="nav-item">
                                            <a href="#sectionCon" class="nav-link active" data-toggle="tab">User Input</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sectionB" class="nav-link" data-toggle="tab">Search Input</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sectionC" class="nav-link" data-toggle="tab">Slider</a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">

                                        <div id="sectionCon" class="tab-pane fade show active">

                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="sec-title-style1 float-left">
                                                        <div class="text"><div class="decor-left"><span></span></div><p>User Input data. </p></div>
                                                    </div>
                                                    <div class="text-box float-right">
                                                        <!--<p>Feel free to contact us. </p>-->
                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Number</th>
                                                    <th scope="col">Input</th>
                                                    <th scope="col">textarea</th>
                                                    <th scope="col">select</th>
                                                    <th scope="col">radio</th>
                                                    <th scope="col">date</th>
                                                    <th scope="col">checkbox</th>
                                                    <th scope="col">File</th>
                                                    <!--<th scope="col">Title</th>-->
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php

                                                    /*query to match start  Extra--------------------*/
                                                    $user_data = new WP_Query(array(
                                                        'post_type'=>'qbfuserdata',
                                                    ));

                                                    $posts = $user_data->posts;

                                                    foreach($posts as $key => $values ) {
                                                        foreach ( $values as $value ) {
                                                            $data[] = [
                                                                $key,
                                                                substr( var_export( $value, true ), 1, -1 ),
                                                            ];
                                                        }
                                                    ?>

                                                <tr>
                                                    <th scope="row"><?php echo $values->ID; ?></th>
                                                    <td><?php echo $values->number ?></td>
                                                    <td><?php echo $values->input ?></td>
                                                    <td><?php echo $values->textarea ?></td>
                                                    <td><?php echo $values->select ?></td>
                                                    <td><?php echo $values->radio ?></td>
                                                    <td><?php echo $values->date ?></td>
                                                    <td><?php echo $values->checkbox ?></td>
                                                    <td><?php echo $values->myfile ?></td>
                                                    <!--<td><code><?php /*echo $values->post_title */?></code></td>-->


                                                   <?php  }?>

                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>


                                        <div id="sectionB" class="tab-pane fade">
                                            <h4>Search Data</h4>
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Search Value</th>
                                                    <th scope="col">Input</th>
                                                    <th scope="col"></th>
                                                    
                                                    <!--<th scope="col">Title</th>-->
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php

                                                    /*query to match start  Extra--------------------*/
                                                    $user_data = new WP_Query(array(
                                                        'post_type'=>'qbfuserdata',
                                                    ));

                                                    $posts = $user_data->posts;

                                                    foreach($posts as $key => $values ) {

                                                        $a = $values->search_value['search_input_value'];
                                                        
                                                        // print_r($values->search_value['search_input_value']);
                                                        
                                                        $res = explode("&",$a);
                                                        // print_r($res);
                                                        foreach($res as $key => $value) {

                                                            $r = explode('=',$value);
                                                            // print_r($r);
                                                            echo $r[0] ."=>". $r[1]."<br>";

                                                         }

                                                         
                                                    ?>

                                                <tr>
                                                        <th scope="row"><?php echo $values->ID; ?></th>


                                                        <td><?php echo $values->search_value['search_input_value'] ?></td>

                                                        
                                                        <?php foreach($res as $key => $value) {
                                                            $r = explode('=',$value);
                                                                    
                                                        ?>
                                                        <td><?php echo $r[1]."<br>"?></td>
                                                        <?php }?>
                                                                
                                                   <?php  }?>

                                                </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>




                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>


<section class="contact-address-area">
    <div class="container">
        <div class="sec-title-style1 text-center max-width">
            <div class="title">WPPOOL</div>
            <div class="text"><div class="decor-left"><span></span></div><p>Quick Contact</p><div class="decor-right"><span></span></div></div>
            <div class="bottom-text">
                <p>
                    Experience remarkable WordPress products with a new level of power, beauty, and human-centered designs. Think you know WordPress products? Think deeper!
                </p>
            </div>
        </div>
        <div class="contact-address-box row">
            <!--Start Single Contact Address Box-->
            <div class="col-sm-4 single-contact-address-box text-center">
                <div class="icon-holder">
                            <span class="icon-clock-1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span>
                            </span>
                </div>
                <h3>Free version</h3>
                <h2>Upcomming...</h2>
            </div>
            <!--End Single Contact Address Box-->
            <!--Start Single Contact Address Box-->
            <div class="col-sm-4 single-contact-address-box main-branch">
                <h3>Questionnaire Based Filter</h3>
                <div class="inner">
                    <ul>
                        <li>
                            <div class="title">
                                <h4>Free:</h4>
                            </div>
                            <div class="text">
                                <p>Lorem Ipsum, 40C, Lorem Ipsum dummy,<br> Lorem Ipsum, Ch 98054</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4>Pro:</h4>
                            </div>
                            <div class="text">
                                <p>+123 456 789 <br> test@info.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4>Ultimate:</h4>
                            </div>
                            <div class="text">
                                <p>Mon-Fri: 9:30am - 6:30pm<br> Sat-Sun: Closed</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End Single Contact Address Box-->
            <!--Start Single Contact Address Box-->
            <div class="col-sm-4 single-contact-address-box text-center">
                <div class="icon-holder">
                            <span class="icon-question-2">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </span>
                </div>
                <h3>Pro Version</h3>
                <h2>Upcomming...</h2
            </div>
            <!--End Single Contact Address Box-->
        </div>
    </div>
</section>
<!--End Contact Address Area-->

<!--Start contact form area-->
<!--<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="sec-title-style1 float-left">
                                <div class="title">Send Your Message</div>
                                <div class="text"><div class="decor-left"><span></span></div><p>Contact Form</p></div>
                            </div>
                            <div class="text-box float-right">
                                <p>If you face any difficulty or Issue feel free to contact us. </p>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>-->