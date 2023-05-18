<?php 
      include('include/login-function/session.php');
      include('include/function/config.php');
      include('include/function/file-reference-function.php');
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
                               <!--  <a href="#">
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
                                      <h2 class="text-center">REFERENCE FILE LIST</h2>
                                    </div>
                                </div>
                            </div>

                         <!--    <div class="col-md-5">
<form class="form-header" action="" method="POST">
    <input class="au-input au-input--xl" type="text" name="searchreference" placeholder="Search for File Title" />
    <button class="au-btn--submit" type="submit" name="searchfile">
        <i class="zmdi zmdi-search"></i>
    </button>
</form>
                            </div> -->

                        </div>
                    </div>
                </div>
            </section>

        <section class="mt-3">
            <div class="col-md-5 mx-auto">
                <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input class="au-input au-input--xl" type="text" name="searchreference" placeholder="Search for File" value="<?php echo isset($_POST['searchreference']) ? $_POST['searchreference'] : '' ?>" maxlength="50" />
                    <button class="au-btn--submit" type="submit" name="searchfile">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div>
        </section>
<?php include("include/modals/reference-file-delete.php"); ?> 

      <div class="main-contents m-t-25">
        <div class="section__content section__content--p20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-bordered table-striped  table-wrapper-scroll-y">
                            <thead class="bg-dark" style="color: white;">
                                <tr>
                                    <th class="text-center" width="30%">TITLE</th>
                                    <th class="text-center" width="45%">DESCRIPTION</th>
                                    <th class="text-center" width="10%">DATE</th>
                                    <th class="text-center" width="35%">FILE</th>
                                    <th class="text-center">DOWNLOAD</th>
                                    <th class="text-center">REMOVE</th>
                                </tr>
                            </thead>
                                        <tbody>
    <?php 

$Sql = "SELECT * FROM `reference_file_tbl` ORDER BY `id` DESC ";
$Stmt = $db->prepare($Sql);
$Stmt->execute();
$Result = $Stmt->get_result();


if(isset($_POST['searchfile']))
{
    $unique = filter_var($_POST['searchreference']."%", FILTER_SANITIZE_STRING);
    $Sql = "SELECT * FROM `reference_file_tbl` WHERE `title` LIKE ? OR `file` LIKE ? OR `description` LIKE ? ORDER BY `id` DESC ";
    $Stmt = $db->prepare($Sql);
    $Stmt->bind_param('sss',$unique,$unique,$unique);
    $Stmt->execute();
    $Result = $Stmt->get_result();

}

$number = 1;
while ($Data = $Result->fetch_assoc())
{ 
    $id = $Data['id'];
    $title = $Data['title'];
    $description = $Data['description'];
    $date = $Data['date'];
    $file = $Data['file'];

     ?>
    <tr>
        
        <td><?php echo $title ?></td>
        <td><?php echo $description ?></td>
      <?php  $newDate = date("F - d - Y", strtotime($date)); ?>
        <td><?php echo $newDate ?></td>
        <td class="text-center"><?php echo $file ?></td>
        <td>
        <a download="<?php echo $file ?>" href="Files/<?php echo $file ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-download"></i> Download</a>
        </td>
        <td class="text-center ">
<a href="javascript:void(0)" rel="<?php echo $id ?>" class="btn btn-danger btn-sm btnfile_link"><i class="fa fa-times"></i> Remove</a>
 </td>
    </tr>
        <?php } ?>                                   
                                                 
                            </tbody>
                        </table>
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

<script>
$(document).ready(function(){
    $(".btnfile_link").on('click', function(){
    var fileid = $(this).attr("rel");
    var deletez_url = "file-reference-list.php?deletefileid="+ fileid +" ";
    $(".files_delete_link").attr("href", deletez_url);
    $("#myModalfiles").modal('show');
    });

});

</script>