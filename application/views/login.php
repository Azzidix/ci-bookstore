<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('node_modules/gentelella/vendors/animate.css/animate.min.css') ?>" rel="stylesheet">

    <!-- PNotify -->
    <link href="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.nonblock.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('node_modules/gentelella/build/css/custom.min.css') ?>" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="<?= base_url('login/loginUser') ?>">
                        <h1>Login</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-default submit">Log in</button>
                            <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">

                            <div>
                                <h1><i class="fa fa-paw"></i> BookStore</h1>
                                <p>©<?= Date('Y') ?> All Rights Reserved. BookStore Management. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('node_modules/gentelella/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- starrr -->
    <script src="<?= base_url('node_modules/gentelella/vendors/starrr/dist/starrr.js') ?>"></script>
    <!-- PNotify -->
    <script src="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.nonblock.js') ?>"></script>
    <script>
        <?php if ($this->session->flashdata('success')) : ?>
            new PNotify({
                title: 'Success',
                text: 'Logout Success.',
                type: 'success',
                styling: 'bootstrap3'
            });
        <?php elseif ($this->session->flashdata('failed')) : ?>
            new PNotify({
                title: 'Failed',
                text: 'Login Failed Username or Password not match.',
                type: 'error',
                styling: 'bootstrap3'
            });
        <?php endif; ?>
    </script>
</body>

</html>