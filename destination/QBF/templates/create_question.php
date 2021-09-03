<p class="plugin-name">Question Based Filter</p>


<div class="qbf_tabs">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item">
            <a href="#sectionA" class="nav-link active" data-toggle="tab">Build template</a>
        </li>
        <li class="nav-item">
            <a href="#sectionB" class="nav-link" data-toggle="tab">Edit Template</a>
        </li>

    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade show active">

            <div class="row">

            <div class="col-md-8">
                    <!--            save data used for save in DB-->
                    <div class="saveDataWrap create_field_save_btn" >
                        <input id="form_name" class="form-name" name="form_name" placeholder="Give a form name" type="text" AUTOCOMPLETE=OFF /> 

                        <button class="btn btn-primary saveData" id="saveData" type="button">Save</button>
                        <!-- <button class="btn btn-primary" id="show-all" type="button">console-result</button> -->

                    </div>

                    <div class="alert success" id="success">
                        <span class="closebtn">&times;</span>  
                        <strong>Success!</strong> Congratz successfully added your form.
                    </div>

                </div>

                
            </div>

            <hr/>

            <form action="" id="form-builder-pages">

                <ul id="tabs">
                    <li><a href="#page-1">Page 1</a></li>
                    <li id="add-page-tab"><a href="#new-page">+ Page</a></li>
                </ul>
                
                <div id="page-1" class="fb-editor"></div>
                <div id="new-page"></div>
                
            </form>

        </div>

        <div id="sectionB" class="tab-pane fade">
            <h2>Edit template</h2>
        

            <div class="saveDataWrap d-grid gap-2 col-6 mx-auto" >
                <button class="btn btn-primary" id="editData" type="button">Expand</button>
                <button class="btn btn-primary" id="savesData" type="button">Save</button>
            </div>
        </div>
    </div>
</div>


<div id="overlay"></div>
