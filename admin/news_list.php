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
                          <h2 class="text-center">NEWS LIST</h2>
                        </div>
                    </div>
                </div>

                <!--  <div class="col-md-5">
                    <div class="mx-auto">
<form class="form-header" action="" method="POST">
    <input class="au-input au-input--xl" type="text" name="searchcms" placeholder="Search for Residents..." />
    <button class="au-btn--submit" type="submit" name="cmsbutton">
        <i class="zmdi zmdi-search"></i>
    </button>
</form>
</div>
                </div> -->
                

            </div>
        </div>
    </div>
</section>

<section class="mt-3 bg-light">
     <div class="col-md-5 mx-auto">            
        <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input class="au-input au-input--xl" type="text" name="searchcms" placeholder="Search for News..."
            maxlength="50" value="<?php echo isset($_POST['searchcms']) ? $_POST['searchcms'] : '' ?>" />
            <button class="au-btn--submit" type="submit" name="cmsbutton">
                <i class="zmdi zmdi-search"></i>
            </button>
        </form>
    </div>          
</section>
<?php include("include/modals/cms_delete.php"); ?> 

<?php 
$sql = "SELECT * FROM `cms_table` ";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();



if (isset($_POST['cmsbutton']))
{
    $keyword = filter_var("%".$_POST['searchcms']."%", FILTER_SANITIZE_STRING);
    $sql = "SELECT * FROM `cms_table` WHERE `title` LIKE ? OR `published_date` LIKE ? OR `author` LIKE ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sss',$keyword,$keyword,$keyword);
    $stmt->execute();
    $result = $stmt->get_result();
}

 ?>

              <div class="main-contents m-t-25">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
    <table class="table table-bordered table-striped  table-wrapper-scroll-y">
        <thead class="bg-dark" style="color: white;">
            <tr>
                <th class="text-center">NO</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th class="text-center">PUBLISHED DATE</th>
                <th class="text-center">CONTENT 1</th>
                <th class="text-center">CONTENT 2</th>
                <th class="text-center">IMAGE</th>
                <th class="text-center">ACTION</th>
                <th class="text-center">ACTION</th>
     <!--       <th class="text-center">BOD</th>
                <th class="text-center">HOUSE NO</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $number = 1;
                while ($data = $result->fetch_assoc())
                { 
?>
            <tr>

                <td><?php echo $number ?></td>
                <td><?php echo $data['title']; ?></td>
                <td><?php echo $data['author']; ?></td>
                <?php $newDate = date("F - d - Y", strtotime($data['published_date'])); ?>
                <td><?php echo $newDate ?></td>
                <td><?php echo substr($data['content1'],0,100); ?></td>
                <td><?php echo substr($data['content2'],0,100); ?></td>

<td class="w-25" align="center" valign="center"> <img 
    src="images/<?php echo $data['image']; ?>" class="w-75"> </td>

<td class="text-center"><!-- <a href="include/function/cms_function.php?cms_remove_id=<?php /*echo $data['id'];*/ ?>" class="btn btn-danger btn-sm">Remove</a> -->
<a href="javascript:void(0)" rel="<?php echo $data['id'] ?>" class="btn btn-danger btn-sm btns_links" id="btns_links"><i class="fa fa-times"></i> Remove</a> </td>

<td><a href="news_edit.php?cms_update_id=<?php echo $data['id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
            </tr>
                 <?php $number++;} 
                 ?>
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
        $(".btns_links").on('click', function(){
            var cmsid = $(this).attr("rel");
            var delete_url = "news_list.php?cms_remove_id="+ cmsid +" ";
            $(".cms_delete_link").attr("href", delete_url);
            $("#myModalcms").modal('show');
        });

    });
</script>