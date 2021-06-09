<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="<?= base_url('adminassets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('adminassets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">

    <link href="<?= base_url('adminassets/css/animate.css') ?>" rel="stylesheet">
    <link href="<?= base_url('adminassets/css/style.css') ?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to RDA</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <?php if(!empty($this->session->flashdata('error'))){ ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <?= $this->session->flashdata('error') ?>
                    </div>
                    <?php } ?>
                    <?php if(!empty($this->session->flashdata('success'))){ ?>
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <?= $this->session->flashdata('success') ?>
                    </div>
                    <?php } ?>
                    <form class="m-t" role="form" action="<?= base_url('login') ?>" method="post">
                        <div class="form-group <?= form_error('username')?'row has-error':'' ?>">
                            <input type="text" class="form-control" placeholder="Username" required="" name="username">
                        </div>
                        <div class="form-group <?= form_error('password')?'row has-error':'' ?>"">
                            <input type="password" class="form-control" placeholder="Password" required="" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>

</body>
</html>
