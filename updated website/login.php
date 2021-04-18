<?php
// Set the page title and include the header file
$pageTitle = "Log in";
require_once("template/header.php");
require_once("database.php");
require_once("SHA3.php");
?>

    <!-- Page Content -->
<?php

$link = connect();
if(isset($_SESSION['login_fail'])){
    if($_SESSION['login_fail'] == 1){
        echo '<script language="javascript">';
        echo 'alert("Password or Username is incorrect.")';
        echo '</script>';
        $_SESSION['login_fail'] = 0 ;
    }
}
if ( isset( $_GET[ 'username' ] ) && isset( $_GET[ 'password' ] ) ){
    $username = $_GET[ 'username' ];
    $username = strtolower($username);
    $password = $_GET[ 'password' ];
    $salt="";




    $salt_query = "select salt from admins where uname = '" . $username."'";
    if($salt_result = mysqli_query( $link, $salt_query )){
        if(mysqli_num_rows($salt_result)== 1){
            $row = mysqli_fetch_array( $salt_result, MYSQLI_ASSOC ) ;
            $salt= $row['salt'] ;
        }
        mysqli_free_result($salt_result);
    }

    $password = $password.$salt;
    $sha3_512 = SHA3::init (SHA3::SHA3_512);
    $sha3_512->absorb ($password);
    $hash_pass = bin2hex($sha3_512->squeeze());

    $password_query = "select * from admins where uname = '" . $username . "' and pass =  '" . $hash_pass ."' ";
    $result = mysqli_query( $link, $password_query );
    # Number of result rows
    echo $password_query;
    if(mysqli_num_rows( $result ) == 0){
        $_SESSION['login_fail'] = 1;
        header( 'Location: login.php' );
    }else if( mysqli_num_rows( $result ) == 1 ) {
        $_SESSION['login_fail'] = 0;
        $_SESSION[ 'username' ] = $username;
        header( 'Location: admin.php' );
    }
    $link -> close();
}
if(!isset($_SESSION['username'])){
?>
    <div class="container">
        <div class="content">
            <div class="loginpage">
                <div class="w3-container w3-blue-gray">
                    <h2>Admin Login</h2>
                </div>

                <div class="login-form">

                        <table>
                            <form class="login_form" action="login.php" method="GET" >
                                <tr>
                                    <th><label class="w3-text-blue-gray" for="un">UserName:</label></th>
                                    
                                    <th><input class="w3-input w3-border w3-light-gray" id="un" type="text" name="username" required pattern="[^'\x22\x3D]+" title=" = &#x22  ' are not allowed" /></th>
                                    
                                </tr>
                                <tr>
                                    <th><label class="w3-text-blue-gray" for="pw">Password:</label></th>
                                    
                                    <th><input class="w3-input w3-border w3-light-gray" id="pw" type="password" name="password" required pattern="[^'\x22\x3D]+" title=" = &#x22  ' are not allowed"/></th>
                                </tr>
                                <tr>
                                    <th><button class="w3-btn w3-blue-gray" type="submit" value="login">Login</button></th>
                                </tr>
                            </form>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <?php
}else{
    header('Location:admin.php');
}
    ?>

<?php
// Include the footer template file
require_once("template/footer.php");
?>