<?php 
    include('include/login-function/session.php');
    include('include/function/config.php');   
    include('include/function/cms_function.php');
    include('include/admin/header.php'); 
?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
    <?php include('include/admin/sidebar.php'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <!-- <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a> -->
                            </div>
                                <div class="header-button-item mr-0 js-sidebar-btn d-lg-none">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>

 <?php include('include/admin/sidebar2.php'); ?>
            <!-- END HEADER DESKTOP-->

            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">NEWS UPDATE FORM</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
<?php  
if (isset($_GET['cms_update_id']))
{
    $id = $_GET['cms_update_id'];
    $sql = "SELECT * FROM `cms_table` WHERE `id`=? ";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($data = $result->fetch_assoc())
     {
        $id = $data['id'];
        $cms_title = $data['title'];
        $cms_author =  $data['author'];
        $published_date =  $data['published_date'];
        $cms_content1 =  $data['content1'];
        $cms_content2 =  $data['content2'];
        $img = $data['image'];
    }
}
 ?>       
             <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>NEWS Information</strong>
                                    </div>
                                    <div class="card-body card-block">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="cms_id" value="<?php echo $id ?>">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="cms_title" class=" form-control-label">Title</label>
                    <?php echo date("Y");?>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="cms_title" name="cms_title"  class="form-control" required value="<?php echo $cms_title ?>">
                   
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="cms_author" class=" form-control-label">Author</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="cms_author" name="cms_author" class="form-control" required value="<?php echo $cms_author ?>">

                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="published_date" class=" form-control-label">Published_date</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="published_date" name="published_date" class="form-control" required value="<?php echo $published_date ?>">
                </div>
            </div>

             <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Content 1</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="cms_content1" id="cms_content2" rows="9"  class="form-control"><?php echo $cms_content1 ?></textarea>
                </div>
            </div>
           
                 <div class="row form-group">
                <div class="col col-md-3">
                    <label for="cms_content2" class=" form-control-label">Content 2</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="cms_content2" id="cms_content2" rows="9" placeholder="Content..." class="form-control"><?php echo $cms_content2 ?></textarea>
                </div>
            </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" name="updatecms">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
            </button>
        </div>
        </form>
                                    </div>
                                </div>
                            </div>                  
                    </div>
                </div>
            </div>
    </div>                 
                                <!-- END DATA TABLE -->
                <?php include('include/admin/footer2.php'); ?>

                    </div>
                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>