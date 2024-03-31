<?php
include('class/User.php');
$user = new User();
$message =  $user->register();
include('include/header.php');
?>
    <title>Projet php marwa</title>
<?php include('include/container.php');?>
    <div class="container contact">
        <div id="signupbox" class="col-md-7">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Inscription</div>
                </div>
                <div class="panel-body" >
                    <form id="signupform" class="form-horizontal" role="form" method="POST" action="">
                        <?php if ($message != '') { ?>
                            <div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $message; ?></div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Prenom*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstname" placeholder="prenom" value="<?php if(!empty($_POST["firstname"])) { echo $_POST["firstname"]; } ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Nom</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lastname" placeholder="nom" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email*</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password*</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="passwd" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-2">
                                <input type="checkbox" style="width: 18px;float: right" class="form-control" name="confirm"  required>
                            </div>
                            <label for="password" class="col-md-6 control-label">I agree with the term of services*</label>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-signup" type="submit" name="register" value="register" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Register</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    espace admin
                                    <a href="./admin/">
                                        Log In
                                    </a>Here
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('include/footer.php');?>