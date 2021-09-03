
<?php settings_errors(); ?>
<p class="plugin-name">Question Based Filter</p>


<div class="row">
    <div class="col-md-6">

        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-form">

                            <div class="inner-box">

                                <div class="qbf_tabs">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="nav-item">
                                            <a href="#sectionA" class="nav-link active" data-toggle="tab">Menus option</a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">
                                        <div id="sectionA" class="tab-pane fade show active">

                                            <form method="post" action="options.php">
                                                <?php
                                                settings_fields( 'questionnaire_settings' );  //setSettings optiongroup need to same here
                                                do_settings_sections( 'questionnaire_based_filter' );  //same as setSection page
                                                submit_button();
                                                ?>
                                            </form>

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

    <div class="col-md-6">

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
                                            <a href="#sectionCon" class="nav-link active" data-toggle="tab">Support</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sectionDoc" class="nav-link" data-toggle="tab">Documentation</a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">
                                        <div id="sectionCon" class="tab-pane fade show active">

                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="sec-title-style1 float-left">
                                                        <div class="text"><div class="decor-left"><span></span></div><p>Feel free to contact us. </p></div>
                                                    </div>
                                                    <div class="text-box float-right">
                                                        <!--<p>Feel free to contact us. </p>-->
                                                    </div>
                                                </div>
                                            </div>

                                            <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="input-box">
                                                                    <input type="text" name="form_name" value="" placeholder="Name" required="">
                                                                </div>
                                                                <div class="input-box">
                                                                    <input type="text" name="form_phone" value="" placeholder="Version:">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="input-box">
                                                                    <input type="email" name="form_email" value="" placeholder="Email" required="">
                                                                </div>
                                                                <div class="input-box">
                                                                    <input type="text" name="form_website" value="" placeholder="Website">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="input-box">
                                                                    <input type="text" name="form_subject" value="" placeholder="Query">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12">
                                                        <div class="input-box">
                                                            <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                                        </div>
                                                        <div class="button-box">
                                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                            <button type="submit" data-loading-text="Please wait...">Send Message<span class="flaticon-next"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                        <div id="sectionDoc" class="tab-pane fade">

                                            <div class="video-list">
                                                <div class="list-one">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Pmso8MJRpBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
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









<!--
<div class="qbf_tabs">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item">
            <a href="#sectionA" class="nav-link active" data-toggle="tab">Menus option</a>
        </li>
        <li class="nav-item">
            <a href="#sectionB" class="nav-link" data-toggle="tab">Documentation</a>
        </li>
        <li class="nav-item">
            <a href="#sectionC" class="nav-link" data-toggle="tab">Support</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade show active">

            <form method="post" action="options.php">
                <?php
/*                settings_fields( 'questionnaire_settings' );  //setSettings optiongroup need to same here
                do_settings_sections( 'questionnaire_based_filter' );  //same as setSection page
                submit_button();
                */?>
            </form>

        </div>

        <div id="sectionB" class="tab-pane fade">

            <div class="video-list">
                <div class="list-one">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Pmso8MJRpBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div id="sectionC" class="tab-pane fade">
            <h3>Support</h3>
        </div>
    </div>
</div>-->


