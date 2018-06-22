<?php

/**
 *  This will take care of:
 *  + useful constants,
 *  + error handling,
 *  + database connection and selection
 *  + helper functions
 */

//===========  ERROR HANDLING:

######  DO NOT EXPOSE ERRORS IN PRODUCTION MODE
###### ATTACKERS CAN GET ADVANTAGE OF THEM!!!!
ini_set('display_errors','on');
error_reporting(E_ALL);


//===========  CONSTANTS:

###### defining a constant pointing at the root folder
//define('CONST_NAME','VALUE');
define('ROOT', 'http://localhost/onewordmessenger/');
define('UteConn', 'Utilities is connected!');


//===========  DATABASE LOGIC:
define("HST", "localhost");
define("USR", "root");
define("PSW", "");// default password: root
define("DBN", "onewordmessenger");


######## creating a mysqli object, using mysqli() class
$mysqli = new mysqli(HST, USR, PSW, DBN);

// trace($mysqli);


if(
    $mysqli->connect_error
) {
    $failMsg = "Something went wrong. Please try again later";
    echo $mysqli->connect_error;
}



//===========  HELPER FUNCTIONS:



/**
 *	@name   trace
 *	@desc   this foo will display the content of arrays/superglobals
 *	            in a nice and readable fashion
 *  @param   object	$obj		the object to print
 */

function trace($obj){
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}//end trace






/**
 *	@name   getPageNames
 *  @desc   this foo will retrieve and return all names for CMS pages
 */
function getPageNames(){


}//getPageNames




/**
 *	@name       getPageContentByName
 *	@desc       this foo will receive a page name and return all data about relative page
 * 	@param 	    STRING	$name	the name of the page to fetch
 */
function getPageContentByName($name){

}//getPageContentByName



/**
 *	@name       is_edit_mode
 *	@desc       this foo will detect if in edit mode
 *  @return     boolean
 */
function is_edit_mode(){
    if(isset($_GET["e_id"])){
        return true;
    } else {
        return false;
    }
}//is_edit_mode


/**
 *	@name       is_logged_in
 *	@desc       this foo will detect if user is currently logged in
 *  @return     boolean
 */
function is_logged_in(){
    if(isset( $_SESSION["logID"] ) ){
        return true;
    } else {
        return false;
    }
}//is_logged_in


/**
 *	@name       get_title
 *	@desc       this foo will receive a CMS entity name and return a page title
 * 	@param 	    STRING  	$what	the name of the CMS entity
 * 	@return 	STRING      $title	the title of the page
 */
function get_title($what){
    if( is_edit_mode() ){
        echo "Edit $what";
    } else {
        echo "Add $what";
    }
}//get_title




/**
 *	@name       displayMsg
 *	@desc       this foo will take care of feedback messages
 * 	@param 	    STRING  	$msg	the message to display
 * 	@param 	    STRING      $type	[s=> success, f=>fail]
 */
function displayMsg($msg, $type){
    global $successMsg;
    global $failMsg;

    if(strtolower($type) === "s"){
        if( isset($successMsg) ){
            $successMsg .= "<p>$msg</p>";
        } else {
            $successMsg = "<p>$msg</p>";
        }
    }## success


    if(strtolower($type) === "f"){
        if( isset($failMsg) ){
            $failMsg .= "<p>$msg</p>";
        } else {
            $failMsg = "<p>$msg</p>";
        }
    }## fail
}//displayMsg







/**
 *	@name       startSessionOnce
 *	@desc       this foo will start the session once, only if not started already
 */
function startSessionOnce(){
    if(!isset($_SESSION)){
        session_start();
    }
}//startSessionOnce


/**
 * @name    isPageActive
 * @desc    this foo will check the current page info and update navigate bar with act class
 * @param   $PageActive
 * @param   $CurrentTab
 */
function isPageActive($PageActive,$CurrentTab){

   if($PageActive == $CurrentTab){echo "act";}else{echo "";}

}//isPageActive








