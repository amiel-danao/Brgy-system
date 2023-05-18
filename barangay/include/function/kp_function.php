<?php 
require_once('config.php');

if (isset($_POST['addkp']))
{
    $criminal = filter_var($_POST['criminal'], FILTER_SANITIZE_STRING);
    $civil = filter_var($_POST['civil'], FILTER_SANITIZE_STRING);
    $others = filter_var($_POST['others'], FILTER_SANITIZE_STRING);
    $totala = filter_var($_POST['totala'], FILTER_SANITIZE_STRING);
    $mediation = filter_var($_POST['mediation'], FILTER_SANITIZE_STRING);
    $conciliation = filter_var($_POST['conciliation'], FILTER_SANITIZE_STRING); 
    $arbitration = filter_var($_POST['arbitration'], FILTER_SANITIZE_STRING);
    $totalb = $_POST['totalb'];
    $repudiated = filter_var($_POST['repudiated'], FILTER_SANITIZE_STRING); 
    $withdraw = filter_var($_POST['withdraw'], FILTER_SANITIZE_STRING); 
    $pending = filter_var($_POST['pending'], FILTER_SANITIZE_STRING); 
    $dismissed = filter_var($_POST['dismissed'], FILTER_SANITIZE_STRING); 
    $certified = filter_var($_POST['certified'], FILTER_SANITIZE_STRING); 
    $refferedconcern = filter_var($_POST['refferedconcern'], FILTER_SANITIZE_STRING); 
    $totalc = filter_var($_POST['totalc'], FILTER_SANITIZE_STRING);
    $estimated = filter_var($_POST['estimated'], FILTER_SANITIZE_STRING);
    $month = $_POST['month'];
    $year = $_POST['year'];
    $bcode =$_POST['bcode'];

     $mysql = "INSERT INTO `kp_tbl_c1`( `criminal(2a.1)`, `civil(2a.2)`, `others(2a.3)`, `totals(2a.4)`, `mediation_(2b.1)`, `concillation_(2b.2)`, `arbitrition_(2b.3)`, `total_(2b.4)`, `repudiated_cases_(2c.1)`, `withdrawn_cases_(2c.2)`, `pending_cases_(2c.3)`, `dismissed_cases_(2c.4)`, `certified_cases_(2c.5)`, `reffered_agencies_(2c.6)`, `total_(2c.7)`, `estimated_savings`, `month`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssssssssssssssssss',$criminal,$civil,$others,$totala,$mediation,$conciliation,$arbitration,$totalb,$repudiated,$withdraw,$pending,$dismissed,$certified,$refferedconcern,$totalc,$estimated,$month,$year,$bcode);
    // $stmt->execute();
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'kp.php'; </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error encounter') </script>";
           exit();
      }
}


if(isset($_GET['records']))
  {
      $id = filter_var($_GET['records'], FILTER_SANITIZE_NUMBER_INT);
      $mysql = "DELETE FROM `kp_tbl_c1` WHERE `id`=?";
      $mystmt = $db->prepare($mysql);
      $mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'kp_record.php'; </script>";
        }
        else
        {
             echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }


if (isset($_POST['updatekp']))
{
  $id = filter_var($_POST['ids'], FILTER_SANITIZE_NUMBER_INT);
  $criminal = filter_var($_POST['criminal'], FILTER_SANITIZE_STRING);
  $civil = filter_var($_POST['civil'], FILTER_SANITIZE_STRING);
  $others = filter_var($_POST['others'], FILTER_SANITIZE_STRING);
  $totals2a = filter_var($_POST['totala'], FILTER_SANITIZE_STRING);
  $mediation = filter_var($_POST['mediation'], FILTER_SANITIZE_STRING);
  $concillation = filter_var($_POST['conciliation'], FILTER_SANITIZE_STRING);
  $arbitration = filter_var($_POST['arbitration'], FILTER_SANITIZE_STRING);
  $total2b = filter_var($_POST['totalb'], FILTER_SANITIZE_STRING);
  $repudiated = filter_var($_POST['repudiated'], FILTER_SANITIZE_STRING);
  $withdrawn_cases = filter_var($_POST['withdraw'], FILTER_SANITIZE_STRING);
  $pending_cases = filter_var($_POST['pending'], FILTER_SANITIZE_STRING);
  $dismissed_cases = filter_var($_POST['dismissed'], FILTER_SANITIZE_STRING);
  $certified_cases = filter_var($_POST['certified'], FILTER_SANITIZE_STRING);
  $reffered_agencies = filter_var($_POST['refferedconcern'], FILTER_SANITIZE_STRING);
  $total2c = filter_var($_POST['totalc'], FILTER_SANITIZE_STRING);
  $estimated_savings = filter_var($_POST['estimated'], FILTER_SANITIZE_STRING);
  $month = $_POST['month'];
  $year = $_POST['year'];
  $bcode =$_POST['bcode'];

$mysql = "UPDATE `kp_tbl_c1` SET `criminal(2a.1)`=?,`civil(2a.2)`=?,`others(2a.3)`=?,`totals(2a.4)`=?,`mediation_(2b.1)`=?,`concillation_(2b.2)`=?,`arbitrition_(2b.3)`=?,`total_(2b.4)`=?,`repudiated_cases_(2c.1)`=?,`withdrawn_cases_(2c.2)`=?,`pending_cases_(2c.3)`=?,`dismissed_cases_(2c.4)`=?,`certified_cases_(2c.5)`=?,`reffered_agencies_(2c.6)`=?,`total_(2c.7)`=?,`estimated_savings`=?,`month`=?,`year`=?, `brgy_code`=? WHERE `id`=?";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssssssssssssssssssi',$criminal,$civil,$others,$totals2a,$mediation,$concillation,$arbitration,$total2b,$repudiated,$withdrawn_cases,$pending_cases,$dismissed_cases,$certified_cases,$reffered_agencies,$total2c,$estimated_savings,$month,$year,$bcode,$id);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'kp_record.php'; </script>";
        // echo "<script>alert('We have Succesful Update Record.') </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

}






//==================================================



if (isset($_POST['addvawc']))
{
    $physical = filter_var($_POST['physical'], FILTER_SANITIZE_STRING);
    $sexual = filter_var($_POST['sexual'], FILTER_SANITIZE_STRING);
    $phsychological = filter_var($_POST['phsychological'], FILTER_SANITIZE_STRING);
    $economic = filter_var($_POST['economic'], FILTER_SANITIZE_STRING);
    $total1 = filter_var($_POST['total1'], FILTER_SANITIZE_STRING);
    $dswd = filter_var($_POST['dswd'], FILTER_SANITIZE_STRING); 
    $pnp = filter_var($_POST['pnp'], FILTER_SANITIZE_STRING);
    $court = $_POST['court'];
    $bpo = filter_var($_POST['bpo'], FILTER_SANITIZE_STRING); 
    $medical = filter_var($_POST['medical'], FILTER_SANITIZE_STRING);
    $total_vawc = filter_var($_POST['total_vawc'], FILTER_SANITIZE_STRING); 
    $training = filter_var($_POST['training'], FILTER_SANITIZE_STRING); 
    $iec = filter_var($_POST['iec'], FILTER_SANITIZE_STRING); 
    $funds = filter_var($_POST['funds'], FILTER_SANITIZE_STRING); 
    $remarks = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING); 
    $month = $_POST['month'];
    $year = $_POST['year'];
    $bcode =$_POST['bcode'];

     $mysql = "INSERT INTO `kp_tbl_c2`( `physical_abuse`, `sexual_abuse`, `physcological_abuse`, `economic_abuse`, `total`, `refferred_dswdo`, `refferred_pnp`, `refferred_court`, `issued_bpo`, `refferred_medical`, `total_vawc_case`, `training`, `iec`, `funds_allocated`, `funds_remarks`, `month`, `year`, `brgy_code`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ssssssssssssssssss',$physical,$sexual,$phsychological,$economic,$total1,$dswd,$pnp,$court,$bpo,$medical,$total_vawc,$training,$iec,$funds,$remarks,$month,$year,$bcode);
    // $stmt->execute();
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert New Record.') </script>";
        echo "<script>window.location.href = 'kp_vawc.php'; </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error encounter') </script>";
           exit();
      }
}


if(isset($_GET['recordz']))
  {
      $id = filter_var($_GET['recordz'], FILTER_SANITIZE_NUMBER_INT);
      $mysql = "DELETE FROM `kp_tbl_c2` WHERE `id`=?";
      $mystmt = $db->prepare($mysql);
      $mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'kp_record.php'; </script>";
        }
        else
        {
             echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }




if(isset($_POST['updatevawc']))
  {
      $id = filter_var($_POST['ID'], FILTER_SANITIZE_NUMBER_INT);
      $physical = filter_var($_POST['physical'], FILTER_SANITIZE_STRING);
      $sexual_abuse = filter_var($_POST['sexual'], FILTER_SANITIZE_STRING);
      $physcological_abuse = filter_var($_POST['phsychological'], FILTER_SANITIZE_STRING);
      $economic_abuse = filter_var($_POST['economic'], FILTER_SANITIZE_STRING);
      $total = filter_var($_POST['total1'], FILTER_SANITIZE_STRING);
      $refferred_dswdo = filter_var($_POST['dswd'], FILTER_SANITIZE_STRING);
      $refferred_pnp = filter_var($_POST['pnp'], FILTER_SANITIZE_STRING);
      $refferred_court = filter_var($_POST['court'], FILTER_SANITIZE_STRING);
      $issued_bpo = filter_var($_POST['bpo'], FILTER_SANITIZE_STRING);
      $refferred_medical = filter_var($_POST['medical'], FILTER_SANITIZE_STRING);
      $total_vawc_case = filter_var($_POST['total_vawc'], FILTER_SANITIZE_STRING);
      $training = filter_var($_POST['training'], FILTER_SANITIZE_STRING);
      $iec = filter_var($_POST['iec'], FILTER_SANITIZE_STRING);
      $funds_allocated = filter_var($_POST['funds'], FILTER_SANITIZE_STRING);
      $funds_remarks = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);
      $month = $_POST['month'];
      $year = $_POST['year'];
      $bcode =$_POST['bcode'];

      $mysql = "UPDATE `kp_tbl_c2` SET `physical_abuse`=?,`sexual_abuse`=?,`physcological_abuse`=?,`economic_abuse`=?,`total`=?,`refferred_dswdo`=?,`refferred_pnp`=?,`refferred_court`=?,`issued_bpo`=?,`refferred_medical`=?,`total_vawc_case`=?,`training`=?,`iec`=?,`funds_allocated`=?,`funds_remarks`=?,`month`=?,`year`=?, `brgy_code`=? WHERE `id`=?";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ssssssssssssssssssi',$physical,$sexual_abuse,$physcological_abuse,$economic_abuse,$total,$refferred_dswdo,$refferred_pnp,$refferred_court,$issued_bpo,$refferred_medical,$total_vawc_case,$training,$iec,$funds_allocated,$funds_remarks,$month,$year,
      $bcode,$id);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'kp_record.php'; </script>";
        // echo "<script>alert('We have Succesful Update Record.') </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
  }

 ?>