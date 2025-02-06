<?php 
session_start();
include "include/header.php" ?>
 
 <h3> Register form </h3>

 <div class="container">
        <div class="row">
                <div class="col-md-6">
                        <?php if (isset($_SESSION ['message']))
                 { ?>
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>What's the heck!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <?php 
                unset ($_SESSION ['message']);
                 }?>


        <form action= "function/authcode.php" method = "POST">
        <div class="form-group">
                <label for="exampleInputname">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="form-group">
                <label for="exampleInputphone">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleInputphone" placeholder="Phone">
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
        </form>

       

        </div>
 </div>


 </div>
 
 <?php include('include/footer.php')?>
