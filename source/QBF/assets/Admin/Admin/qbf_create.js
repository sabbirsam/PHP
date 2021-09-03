
jQuery(($) => {
    "use strict";
    var $fbPages = $(document.getElementById("form-builder-pages"));
    var addPageTab = document.getElementById("add-page-tab");
    var fbInstances = [];
  
    $fbPages.tabs({
      beforeActivate: function (event, ui) {
        if (ui.newPanel.selector === "#new-page") {
          return false;
        }
      }
    });
  
    addPageTab.addEventListener(
      "click",
      (click) => {
        const tabCount = document.getElementById("tabs").children.length;
        const tabId = "page-" + tabCount.toString();
        const $newPageTemplate = document.getElementById("new-page");
        const $newTabTemplate = document.getElementById("add-page-tab");
        const $newPage = $newPageTemplate.cloneNode(true);
        $newPage.setAttribute("id", tabId);
        $newPage.classList.add("fb-editor");
        const $newTab = $newTabTemplate.cloneNode(true);
        $newTab.removeAttribute("id");
        const $tabLink = $newTab.querySelector("a");
        $tabLink.setAttribute("href", "#" + tabId);
        $tabLink.innerText = "Page " + tabCount;
  
        $newPageTemplate.parentElement.insertBefore($newPage, $newPageTemplate);
        $newTabTemplate.parentElement.insertBefore($newTab, $newTabTemplate);
        $fbPages.tabs("refresh");
        $fbPages.tabs("option", "active", tabCount - 1);
        fbInstances.push($($newPage).formBuilder());
      },
      false
    );



    /*disable attartibute with data type  and only attar of all */
    var options = {
        /*typeUserDisabledAttrs: {
                'checkbox-group': [  // find from inspect data-type
                    'description',
                    'inline',
    
                ],
    
                'button':[
                    'style'
                ]
        },*/
    
    
        /*only attar of all*/
        /*disabledAttrs: ["value", "name"],*/
    
        /*disableFields*/
        /*disableFields: ['autocomplete'],*/
    
        fieldRemoveWarn: true, // warning to remove field
    
            /*add own field */
        fields : [{
                label: "Email",
                type: "text",
                subtype: "email",
                icon: "✉"
        }],
    
    
    };

  

    fbInstances.push($(".fb-editor").formBuilder(options));
    
    
    document.getElementById("saveData").addEventListener("click", () => {

        if (confirm("Confirm to save")) {

            const allData = fbInstances.map((fb) => {

                var result = fb.actions.getData();
                return result;
            });

            var data = { 
              result: allData, 
              action: "qbf_save_data",
              form_field:$("#form_name").val(),
            };

        
            // console.log(data);

            $.ajax({
              url: qbf.ajaxurl,
              data: data,
              type: "post",
              success: function() { 
                $("#success").show();
                setTimeout(function(){
                   location.reload(); 
                }, 800);
            }


              // success: (res) => {
              //     alert("Successfull");
              //   },

            });


        }
        

    });




    // show all json and button
    
    // $(document.getElementById("show-all")).click(function () {
    //   const allData = fbInstances.map((fb) => {

    //     var result = fb.actions.getData();

    //     console.log(result);

    //     // return fb.formData;
    //     return result;
    //   });

    //   console.log(allData);
    
    // });
    

  });


