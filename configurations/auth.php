<?php
/**
 * @name    :   auth.php
 * @desc    :   this will take care of session, login and log out logic
 */


## 1) start session
startSessionOnce();





## 2) display an error message if user is not allowed and if is not in the admin page
if( !is_logged_in()  && !isset($adminPage)){
    $failMsg = "You are not allowed, please click <a 
        class='boldLink'
        href='" . ROOT . "login.php'
        >here</a> to log in.";
}




## 3) log out logic
if(isset($_GET["log"]) && $_GET["log"] === "out"){
    /**
     * we could wipe out the session entirely using
     * session_destroy()
     */
    // deleting user ID and NAME from session
    $_SESSION["logID"]      = null;
    $_SESSION["logNAME"]    = null;

    // redirect to log in page
    header("location: " . ROOT . "index.php");

}


/**
    ==================== helper functions for security ===============


htmlentities();
htmlspecialchars();

html_entity_decode();

addslashes();
strip_tags();


ltrim() \
trim()   => remove unwanted spaces
rtrim() /


sha1, sha2, sha264, sha???

read about how to use SALT keys to encrypt values


(mysql functions)

AES_ENTITY_ENCODE();
AES_ENTITY_DECODE();

// secure connections
DES_ENTITY_ENCODE();
DES_ENTITY_DECODE();

mysqli_real_escape()


 read more about security on OWASP.org

 * to prevent sql injections read about PDO and read about mysqli prepared statements


 */





