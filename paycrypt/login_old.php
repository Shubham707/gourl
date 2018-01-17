<?php 
include_once('common.php');
$allowed = array(".", "-", "_");
$email_id ="";
$password = "";

//echo "           =>>>>>>> ".hash('sha256',addslashes(strip_tags($email_id)));
//echo "</br> </br> </br> </br> </br> </br> </br>           =>>>>>>> ".hash('sha256',addslashes(strip_tags($password)))."</br> </br> ";
$error = array();
if(isset($_POST['btnlogin']))
{
//  var_dump($_POST);
    $email_id = $_POST['txtEmailID'];
    $password = $_POST['txtpassword'];

    if (empty($email_id))
    {
        $error['emailError'] = "Please Provide valid email id";
    }   
    if(empty($password))
    {
        $error['passwordError'] = "Please Provide valid passowrd";
    }
    elseif (!isEmail($email_id))
    {
        $error['emailError'] = "Please Provide valid email id";
    }

    if(empty($error))
    {
        $email_id = $mysqli->real_escape_string(strip_tags($email_id));
        $password_value = hash('sha256',addslashes(strip_tags($password)));
        $qstring = "select coalesce(id,0) as id, coalesce(username,'') as username,
                    coalesce(password,'') as password,
                    coalesce(email,'') as email_id,
                    coalesce(admin,'') as admin,
                    coalesce(locked,0) as locked,
                    coalesce(supportpin,'') as supportpin,
                    coalesce(is_email_verify,0) as is_email_verify,
                    coalesce(secret,'') as secret,
                    coalesce(authused,0) as authused
                    from merchantuser WHERE encrypt_username = '" . hash('sha256',$email_id) . "'";
        
        $result = $mysqli->query($qstring);
        $user = $result->fetch_assoc();
        //var_dump($user);
        
        $secret = $user['secret'];
        if (($user) && ($user['password'] == $password_value) && ($user['locked'] == 0) && ($user['authused'] == 0))
        {
            //  session_start();
            session_regenerate_id (true); //prevent against session fixation attacks.
                                
            //var_dump($user);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email_id'] = $user['email_id'];
            $_SESSION['user_session'] = $user['username'];
            $_SESSION['user_admin'] = $user['admin'];
            $_SESSION['user_supportpin'] = $user['supportpin'];
            $_SESSION['is_email_verify'] = $user['is_email_verify'];
            $_SESSION['accesskey'] = $user['accesskey'];
            
            header("Location:merchantprofile.php");
            exit();

        } 
        elseif (($user) && ($user['password'] == $password_value) && ($user['locked'] == 1))
        {
            $pin = $user['supportpin'];
            $error['emailError'] = "Account is locked. Contact support for more information. $pin";
        }
        elseif (($user) && ($user['password'] == $password_value) && ($user['locked'] == 0) && ($user['authused'] == 1 && ($oneCode == $_POST['auth']))) 
        {
            //      session_start();
            session_regenerate_id (true); //prevent against session fixation attacks.
                                
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email_id'] = $user['email_id'];
            $_SESSION['user_session'] = $user['username'];
            $_SESSION['user_admin'] = $user['admin'];
            $_SESSION['user_supportpin'] = $user['supportpin'];
            $_SESSION['is_email_verify'] = $user['is_email_verify'];
            header("Location:home.php");
            exit();
        }
        else
        {
                $error['emailError'] = "email_id, password is incorrect";
        }
    }
    else
    {
        $error['emailError'] = "email_id, password is incorrect";
    }
}
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Wallets | <?php echo $coin_fullname;?>(<?php echo $coin_short;?>)</title>
        <meta name="description" content="<?php echo $coin_fullname;?>(<?php echo $coin_short;?>)">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./img/favicon.png" rel="shortcut icon" type="image/x-icon">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <link href="css/sitestyle.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/wallet.css" rel="stylesheet">
        <link href="css/add.css" rel="stylesheet">
        <script type="text/javascript" async="" src="js/atrk.js"></script>
        <script src="js/modernizr-2.js"></script>
        
    </head>
    <body>
        
        <div style="height:85%" class="MyMainDiv">
            <form  method="post" action="#"> 
                <div class="form-horizontal white signUpContainer center">
                    <div class="flex-center flex-justify flex-column login-box-container">
                        <div ui-view="contents" class="login-box mhs">
                            <div id="login" data-preflight-tag="Login">
                                <header>
                                    <hgroup>
                                        <div class="flex-between flex-center flex-wrap">
                                            <h2 class="em-300 mtn">Sign In</h2>
                                        </div>
                                    </hgroup>
                                </header>
                                <div name="loginForm" role="form" autocomplete="off" novalidate="" 
                                    class="ptl form-horizontal clearfix ng-pristine ng-invalid ng-invalid-required">
                                    <fieldset>
                                        <div ng-class="{'has-error': errors.uid}" class="form-group">
                                            <label style="float:left">Email ID</label>
                                            <input id="txtEmailID" name="txtEmailID" class="form-control" style="border:2px solid #e08081;" type="text"
                                            value="<?php echo $email_id;?>">
                                            <?php if(isset($error['emailError'])) { echo "<br/><span class=\"messageClass\">".$error['emailError']."</span>";  }?>  
                                        </div>
                                        <div ng-class="{'has-error': errors.password}" class="form-group">
                                            <label style="float:left">Password</label>
                                            <input id="txtpassword" name="txtpassword" class="form-control" type="password" value="<?php echo $password;?>">
                                            <?php if(isset($error['passwordError'])) { echo "<br/><span class=\"messageClass\">".$error['passwordError']."</span>";  }?>    
                                        </div>
                                        <div class="mtl flex-center flex-end">
                                            <input type="submit" class="button Lockerblue ladda-button" id="btnlogin" name="btnlogin" value="Sign In"/>
                                            <span class="button Lockerblue ladda-button" id="btnLoading" style="display:none">
                                                <span style="position:relative;">
                                                    <span class="loader"></span>
                                                </span>
                                                <span class="val1">Loading</span>
                                            </span>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="ptl flex-end">
                                    <div ng-hide="didLogout" class="flex-row">
                                        <div class="em-300 mbm">Having some trouble?</div>
                                        <span ui-sref="public.help" class="pointer em-300 blue mls" style="color: #079eff;font-weight: 400;">
                                            <a href="forget.php">View Options</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div style="background:#2f2f2f;height:15%; display:none" class="minefooter">
            <div class="footer">
                <div class="row-fluid" style="margin-bottom:0px;">
                    <div class="col -md-12">
                        <div class="social">
                            <ul class="social-link tt-animate ltr">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                            <p class="footerp">2017 <?php echo $coin_fullname;?> All RIGHTS RESERVED.</p>
                            <p class="footerp">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>