<?php
class db_connect{
    private $server ;
    private $user ;
    private $dbpassword ;
   private $database ;
   function __construct(){
        $this->server = "localhost";
        $this->user = "root";
        $this->dbpassword = "";
        $this->database = "hello";
   }
    function connectdb(){
       /* $server = "localhost";
        $user = "root";
        $dbpassword = "";
        $database = "hi";
        open data connection */
        $con = mysqli_connect($this->server,$this->user,$this->dbpassword,$this->database);
        return $con;
        }
}
class Session{
    function ses_start(){
        session_start();
    }
    function ses_close(){
        session_destroy();
    }
}
function admin_check($c){
    $u = $_SESSION['username'];
    $s = "SELECT * FROM logindetails where username='$u'";
    $r = mysqli_query($c, $s);
    return $r;
}
function admin_check2($c){
    $u = $_SESSION['username'];
    $s = "SELECT * FROM logindetails where username='$u'";
    $r = mysqli_query($c, $s);
    $rou = $r->fetch_assoc() ;
        if ($rou["role"] == 1) {
            return true;
        }
        else{
            return false;
        }
    }

?>