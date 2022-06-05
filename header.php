<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
?>		
<header>
    <a class = "logo" href = "./index.php">
    <img src = "./logo_draft_2.png" height="200"/></a>
<nav>

        <ul id="top_menu">  
<?php
    if(!$userid) {
?>                
                <li><a href="member_form.php">Register</a> </li>
                <li><a href="login_form.php">Log in</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")님";
?>
                <li><?=$logged?> </li>
                <li><a href="logout.php">Log out</a> </li>
                <li><a href="member_modify_form.php">Modification</a></li>
<?php
    }
?>
<?php
    if($userlevel==1) {
?>
                <li><a href="admin.php">Administrator</a></li>
<?php
    }
?>
            </ul>
            </nav>
</header>
        </div>
