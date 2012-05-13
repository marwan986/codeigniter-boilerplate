<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author maziz
 */
class home extends BP_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->css = array("BP/homepage.css","slides.css");
        $this->javascript = array("mylibs/slides.min.jquery.js");
       
       
        /*Define single page content as usual*/
        $toView['page_content'] = date("H:i:s");
        $toView['other_data'] = "<p>See you!</p>";
        
        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}

?>
