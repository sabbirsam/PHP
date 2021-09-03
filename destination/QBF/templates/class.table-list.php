<?php

if(!class_exists("WP_List_Table")){
//    require_once ( trailingslashit( ABSPATH ).'wp-admin/includes/class-wp-list-table.php');

    require_once( ABSPATH . '/wp-admin/includes/class-wp-list-table.php' );
}



class QBF_Table extends WP_List_Table{


    function  __construct($data){

        parent::__construct();
        $this->items = $data;

    }

    function get_columns()
    {
        return[
            'cb'=>'id',
            'post_type'=>__('Title','qbf'),
            
        
        ];
    }



    function column_cb($item)
    {
        /*return $item['id'];*/
        return "<input type='checkbox' value='{$item['id']}'/>"; // show checkbox
    }

    function  prepare_items()
    {
        $this->_column_headers = array($this->get_columns(),array(),$this->get_sortable_columns());

    }

    /*value comes from where */
    function column_default($item, $column_name)
    {
        /*return $item[$column_name];*/
        parent::column_default($item, $column_name);
    }

}