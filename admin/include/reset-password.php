<?php include('login/header.php'); ?>
        <div class="head">
            <div class="container">
                <div class="mx-auto">
                    <div class="row">
                        <div class="col-lg-3">    
                        </div>
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-header">
                    <strong>Request Reset Password</strong>
                <p>We need your email address account to send the link and intruction to update your password.</p>
                </div>
            <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-md" name="sendrequest">
            <i class="fa fa-dot-circle-o"></i> SEND
        </button>
        </div>
        </form>
                                    </div>
                                </div>
                            </div> 
                        <div class="col-lg-3">    
                        </div>                 
                    </div>
                </div>
            </div>
        </div>
<?php include('login/footer.php'); ?>