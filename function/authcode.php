 <?php

session_start();
include('../admin/config/dbcon.php');

if (isset($_POST['register_btn']))
{
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

        // Check email that has already 

        $check_email_query = "SELECT email FROM users WHERE email = '$email' ";
        $check_email_query_run = mysqli_query($con, $check_email_query);
        if (mysqli_num_rows ( $check_email_query_run ) > 0){
                $_SESSION['message'] = " you already Registered";

                header('Location: ../register.php');
        }
        else {
        if ($password == $cpassword){
        $insert_query = "INSERT INTO users (name,email,phone,password) VALUES ('$name', '$email',' $phone','$password')";
        $insert_query_run = mysqli_query($con, $insert_query);

                if ($insert_query_run){
                        $_SESSION['message'] = " Register Successfully";

                        header('Location: ../login.php');
                }
                else {
                        $_SESSION['message'] = " Register Successfully";

                        header('Location: ../register.php');
                }

        }
        else 
        {
                $_SESSION['message'] = " Passwords do not match";

                header('Location: ../register.php');
        }



        }
}
else if (isset($_POST['login_btn']))
{
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $login_query = "SELECT * FROM users WHERE email= '$email' AND password = '$password' ";
        $login_query_run = mysqli_query($con, $login_query);

        if (mysqli_num_rows($login_query_run) > 0)
        {
                $_SESSION['auth'] = true;

                $userdata = mysqli_fetch_array($login_query_run);
                $username = $userdata['name'];
                $useremail = $userdata['email'];


                $_SESSION['auth_user'] = [
                        'name' => $username,
                        'emai' => $useremail
                ];

                $_SESSION['message'] = "Logged in Successfully";
                header('Location: ../index.php');
        }
        else {
                $_SESSION['message'] = "Invalid Credentials";
                header('Location: ../login.php');
        }

}

?> 
