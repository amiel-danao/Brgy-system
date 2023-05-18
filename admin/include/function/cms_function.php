<?php
require_once('config.php');

 if (isset($_POST['createcms']))
   {
        $cms_title = filter_var($_POST['cms_title'], FILTER_SANITIZE_STRING);
        $cms_author = filter_var($_POST['cms_author'], FILTER_SANITIZE_STRING);
        $published_date = $_POST['published_date'];
        $cms_content1 = filter_var($_POST['cms_content1'], FILTER_SANITIZE_STRING);
        $cms_content2 = filter_var($_POST['cms_content2'], FILTER_SANITIZE_STRING); 
        $img = $_FILES['cms_image']['name'];
        $tmp_img = $_FILES['cms_image']['tmp_name'];
        $random_number = mt_rand(100000, 999999);
        $image =  $random_number ."-" . $img;
        move_uploaded_file($tmp_img,"images/$image");

$sql = "INSERT INTO `cms_table`( `title`, `author`, `published_date`, `content1`, `content2`, `image`) VALUES (?,?,?,?,?,?)";
$stmt = $db->prepare($sql);
$stmt->bind_param('ssssss',$cms_title,$cms_author,$published_date,$cms_content1,$cms_content2,$image);
        //$stmt->execute();
          if($stmt->execute())
          {
            $stmt->close();
            $db->close();
            //header("Location: news.php?Add_Success");
            echo "<script>alert('We have Successful Add News.') </script>";
            echo "<script>window.location.href = 'news.php'; </script>";
          }
          else  {
            echo "<script>alert('Sorry We Have Error Encounter.') </script>";
          }
    }


if (isset($_POST['updatecms']))
   {
      $id = $_POST['cms_id'];
      $cms_title = filter_var($_POST['cms_title'], FILTER_SANITIZE_STRING);
      $cms_author = filter_var($_POST['cms_author'], FILTER_SANITIZE_STRING);
      $published_date = $_POST['published_date'];
      $cms_content1 = filter_var($_POST['cms_content1'], FILTER_SANITIZE_STRING);
      $cms_content2 = filter_var($_POST['cms_content2'], FILTER_SANITIZE_STRING);
      $mysql = "UPDATE `cms_table` SET `title`=?, `author`=?, `published_date`=?, `content1`=?, `content2`=? WHERE `id`=? ";
      $mystmt = $db->prepare($mysql);
      $mystmt->bind_param('sssssi',$cms_title,$cms_author,$published_date,$cms_content1,$cms_content2,$id);
        $mystmt->execute();
          if($mystmt)
          {
            $mystmt->close();
            //$db->close();
            //header("Location: news_list.php?Update_Success");
            echo "<script>alert('We have Successful Update News.') </script>";
            echo "<script>window.location.href = 'news_list.php'; </script>";
          }
          else  {
            echo "<script>alert('Sorry We Have Error Encounter.') </script>";
          }
    }


  if (isset($_GET['cms_remove_id']))
    {

        $id = $_GET['cms_remove_id']; 
        $sql = "DELETE FROM `cms_table` WHERE `id`= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$id);
        //$stmt->execute();
         deleteimage($id);
          if($stmt->execute())
          {
        
            $stmt->close();
            $db->close();
            //header("Location: news_list.php");
             echo "<script>alert('We have Successful Delete News.') </script>";
            echo "<script>window.location.href = 'news_list.php'; </script>";
          }
          else  {
              echo "<script>alert('Sorry We Have Error Encounter.') </script>";
          }
    }


  function deleteimage($id)
    {
      global $db;
          $MYsqls = "SELECT `image` FROM `cms_table` WHERE `id`=? ";
          $MYstmts = $db->prepare($MYsqls);
          $MYstmts->bind_param('i',$id);
          $MYstmts->execute();
          $MYstmts->bind_result($pictures);
          $MYstmts->fetch();
          $MYstmts->close();
          //  while ($datas = $Results->fetch_assoc())
          // {
          //         $pictures = $datas['picture'];
          // }

         if($pictures != null || $pictures != "")
            {
              unlink("images/$pictures");
            }
         //return true;
    }
?>