
<p class="plugin-name">Question Based Filter</p>

<div class="row">
    <div class="col-md-9">
        <div class="qbf_tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#sectionA" class="nav-link active" data-toggle="tab">All Template</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sectionB" class="nav-link" data-toggle="tab">Export</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sectionC" class="nav-link" data-toggle="tab">Slider</a>
                    </li>

                </ul>

                <div class="tab-content">
                    <div id="sectionA" class="tab-pane fade show active">
                        <!--<div class="form-data-field">
                            <div class="saveDataWrap d-grid gap-2 col-6 mx-auto" >
                                <a href="admin.php?page=questionnaire_based_filter_cqbf">Create Form</a>
                            </div>
                        </div>-->
                        

                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">shortcode</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            /*query to match start  Extra--------------------*/
                            $drag_data = new WP_Query(array(
                                'post_type'=>'qbfdragndrop',
                            ));

                            $drag_posts = $drag_data->posts;

                            foreach($drag_posts as $key => $values ) {
                                foreach ( $values as $value ) {

                                }
                            ?>

                            <tr>

                                <?php
                                $drag_values = $values->drag_data;
                                foreach ($drag_values as $drag_keys=> $drag_val) {
                                    ?>

                                   <!-- <th scope="row"><?php /*print_r($drag_val) */?></th> --> <!--important this line need to use on shortcode and make field-->
                                    <!-- <th scope="row"><?php /*print_r($drag_val['type']) */?></th> --> <!--important this line need to use on shortcode and make field-->
                                    <?php }
                                ?>

                                <th scope="row"><?php echo $values->ID ?></th>
                                <th scope="row"><?php echo $values->post_title ?></th>

                                <td><code><?php echo "[qbf_drag_field id=" . $values->ID . "]" ?></code></td>

                            </tr>
                            </tbody>

                            <?php } ?>
                        </table>
                    </div>


                    <div id="sectionB" class="tab-pane fade">
                        <h2>JSON Data</h2>

                        <pre class="prettyprint">
                            <?php

                            $drag_data = new WP_Query(array(
                                'post_type'=>'qbfdragndrop',
                            ));

                            $drag_posts = $drag_data->posts;

                            foreach($drag_posts as $key => $values ) {
                                foreach ($values as $value) {
                                }

                                $drag_values = $values->drag_data;
                                foreach ($drag_values as $drag_keys => $drag_val) {
                                }

                                print_r($drag_values);
                            }

                            ?>
                        </pre>
                    </div>


                    <div id="sectionC" class="tab-pane fade">
                        <h2>Slider</h2>

                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">shortcode</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            /*query to match start  Extra--------------------*/
                            $drag_data = new WP_Query(array(
                                'post_type'=>'qbfdragndrop',
                            ));

                            $drag_posts = $drag_data->posts;

                            foreach($drag_posts as $key => $values ) {
                                foreach ( $values as $value ) {

                                }
                            ?>

                            <tr>

                                <?php
                                $drag_values = $values->drag_data;
                                foreach ($drag_values as $drag_keys=> $drag_val) {
                                    ?>
                                    <?php }
                                ?>

                                <th scope="row"><?php echo $values->ID ?></th>
                                <th scope="row"><?php echo $values->post_title ?></th>

                                <td><code><?php echo "[qbf_slider id=" . $values->ID . "]" ?></code></td>

                            </tr>
                            </tbody>

                            <?php } ?>
                        </table>

                    </div>

                </div>
            </div>
        <div id="overlay"></div>
    </div>

    <div class="col-md-3">

        <div class="form-data-field">

            <div class="saveDataWrap" >
                <a href="admin.php?page=questionnaire_based_filter_cqbf">Create Form</a>
            </div>
        </div>

    </div>
</div>
