
<?php
//plugin_basename( dirname( __FILE__, 3 ) ) . '/questionnaire-based-filter.php';
require_once "class.table-list.php";
?>

<p class="plugin-name">Question Based Filter</p>

<div class="row">
    <div class="col-md-9">
            <div class="qbf_tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#sectionA" class="nav-link active" data-toggle="tab">Slider Demo 1</a>
                    </li>

                    <li class="nav-item">
                        <a href="#sectionB" class="nav-link" data-toggle="tab">Data Table</a>
                    </li>
                </ul>


                <div class="tab-content">
                    <div id="sectionA" class="tab-pane fade show active">

                        <div id="content">
                            <h1>Mobile Information</h1>
                            <div id="wrapper">
                                <div id="steps">
                                    <form id="formElem" name="formElem" action="" method="post">
                                        <fieldset class="step">
                                            <legend>Mobile Brands</legend>
                                            <p>
                                                <label for="username">Brand name</label>
                                                <input id="username" name="username" />
                                            </p>
                                            <p>
                                                <label for="email">Model</label>
                                                <input id="email" name="email" placeholder="Apple/Samsung" type="email" AUTOCOMPLETE=OFF />
                                            </p>
                                            <!--<p>
                                                <label for="password">Password</label>
                                                <input id="password" name="password" type="password" AUTOCOMPLETE=OFF />
                                            </p>-->
                                        </fieldset>
                                        
                                        <fieldset class="step">
                                            <legend>Processor</legend>
                                            <p>
                                                <label for="cardtype">Your expected processor</label>
                                                <select id="cardtype" name="cardtype">
                                                    <option>Mediatech</option>
                                                    <option>Hilio</option>
                                                    <option>Snapdragon</option>
                                                    <option>Mali</option>
                                                    <option>Xionios</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="cardnumber">Core number</label>
                                                <input id="cardnumber" name="cardnumber" type="number" AUTOCOMPLETE=OFF />
                                            </p>
                                            <p>
                                                <label for="namecard">Name on Brand</label>
                                                <input id="namecard" name="namecard" type="text" AUTOCOMPLETE=OFF />
                                            </p>
                                        </fieldset>
                                        
                                        <fieldset class="step">
                                            <legend>Confirm</legend>
                                            <p>
                                                Everything in the form was correctly filled
                                                if all the steps have a green checkmark icon.
                                                A red checkmark icon indicates that some field
                                                is missing or filled out with invalid data. In this
                                                last step the user can confirm the submission of
                                                the form.
                                            </p>
                                            <p class="submit">
                                                <button id="registerButton" type="submit">Register</button>
                                            </p>
                                        </fieldset>
                                    </form>
                                </div>
                                <div id="navigation" style="display:none;">
                                    <ul>
                                        <li class="selected">
                                            <a href="#">Brands</a>
                                        </li>
                                        <li>
                                            <a href="#">Colors</a>
                                        </li>
                                        <li>
                                            <a href="#">Confirm</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sectionB" class="tab-pane fade show">
                        <div id="content">
                             <h1>Data Table</h1>
                             <table class="products-table">
                                <tbody>
                                <?php //qbfuserdata   <- post type

                                    // $user_data = new WP_Query(array(
                                    //     'post_type'=>'qbfuserdata',
                                    // ));

                                    // $posts = $user_data->posts;

                                    global $wpdb;
                                    $db_input = $wpdb->get_results("SELECT SQL_CALC_FOUND_ROWS wp_posts.post_type 

                                        FROM wp_posts",ARRAY_A);

                                    // print_r($db_input);

                                    
                                    $dbtu = new QBF_Table($user_data->posts);
                                    
                                    $dbtu = new QBF_Table($db_input);

                                    $dbtu->search_box('search', 'search_id');
                                    $dbtu->prepare_items();
                                    $dbtu->display();
                                ?>

                                </tbody>

                            </table>

                        </div>
                    </div>

                </div>
            </div>
    </div>

    <div class="col-md-3">

            <div class="form-data-field">

                <div class="saveDataWrap" >
                    <a href="admin.php?page=questionnaire_based_filter_cqbf">Create Form</a>
                </div>
            </div>
    </div>
</div>



