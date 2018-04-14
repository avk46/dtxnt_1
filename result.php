<?php
include("includes/init.php");
$current_page_id="result";
if (isset($_GET['id'])) {
$current_trnx_id = (int)$_GET['id'];
}
else{
  $current_trnx_id=null;
}
//var_dump($current_trnx_id);

// $db = open_or_init_sqlite_db('source_data.sqlite', "init/init.sql");
// $currentrequest=exec_sql_query($db, "SELECT * FROM source_data", NULL)->fetchAll(PDO::FETCH_ASSOC);
//var_dump($currentrequest);
// foreach($currentrequest as $c){
//   echo"id=".$c['id']."ppp".$c["SSN"];
// }


// $ssn_search;
// foreach($currentrequest as $ssn){
//   $ssn_search=$ssn['SSN'];
// }
//
//  $paychecks_result=exec_sql_query($db, "SELECT * FROM paycheck_data WHERE SSN=$ssn_search", NULL)->fetchAll(PDO::FETCH_ASSOC);
//  $otherpay_result=exec_sql_query($db, "SELECT * FROM otherpay_data WHERE SSN=$ssn_search", NULL)->fetchAll(PDO::FETCH_ASSOC);
// $surepay_result=exec_sql_query($db, "SELECT * FROM surepay_data WHERE SSN=$ssn_search", NULL)->fetchAll(PDO::FETCH_ASSOC);
//  var_dump($paychecks_result);
// var_dump($otherpay_result);
// var_dump($surepay_result);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php");
  ?>


  <div id="content-wrap1">
  <div id="search_results">

    <?php
    $db = open_or_init_sqlite_db('source_data.sqlite', "init/init.sql");

    $currentrequest=exec_sql_query($db, "SELECT * FROM source_data WHERE id=$current_trnx_id", NULL)->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($currentrequest);
    // foreach($currentrequest as $c){
    //   echo"id=".$c['id']."ppp".$c["SSN"];
    // }

    echo "<h1> Search Results for TRNX ID ".$current_trnx_id."</h1>";

    $ssn_search;
    foreach($currentrequest as $ssn){
    //  var_dump($ssn);
      $ssn_search=$ssn["SSN"];

    }
    $paychecks_result=exec_sql_query($db, "SELECT * FROM paycheck_data WHERE SSN=$ssn_search", NULL)->fetchAll(PDO::FETCH_ASSOC);
    $otherpay_result=exec_sql_query($db, "SELECT * FROM otherpay_data WHERE SSN=$ssn_search", NULL)->fetchAll(PDO::FETCH_ASSOC);
    $surepay_result=exec_sql_query($db, "SELECT * FROM surepay_data WHERE SSN=$ssn_search", NULL)->fetchAll(PDO::FETCH_ASSOC);
    $intuit_result=exec_sql_query($db, "SELECT * FROM intuit_data WHERE SSN=$ssn_search", NULL)->fetchAll(PDO::FETCH_ASSOC);
  //  var_dump($ssn_search);
  //  var_dump($paychecks_result);
    // var_dump($otherpay_result);
    // var_dump($surepay_result);

    if ($paychecks_result!=null){
      foreach ($paychecks_result as $record){
        if ($record["employed"]=='no'){
        echo "<p><h2>Paychecks:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Last Hire: ".$record["most_recent_hire_date"]."</p>";
        }
        else{
          echo "<p><h2>Paychecks:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Employer:".$record["employer_name"]."<br> Employed As Of: <br>".$record["employed_as_of"]."<br> Address:".$record["company_address"]."</p>";

        }
      }
    }

    if ($otherpay_result!=null){
      foreach ($otherpay_result as $record){
        if ($record["employed"]=='no'){
        echo "<p><h2>Otherpay:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Last Hire: ".$record["most_recent_hire_date"]."</p>";
        }
        else{
          echo "<p><h2>Otherpay:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Employer:".$record["employer_name"]."<br> Employed As Of: <br>".$record["employed_as_of"]."<br> Address:".$record["company_address"]."</p>";

        }
      }
    }

    if ($surepay_result!=null){
      foreach ($surepay_result as $record){
        if ($record["employed"]=='no'){
        echo "<p><h2>Surepay:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Last Hire: ".$record["most_recent_hire_date"]."</p>";
        }
        else{
          echo "<p><h2>Surepay:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Employer:".$record["employer_name"]."<br> Employed As Of: <br>".$record["employed_as_of"]."<br> Address:".$record["company_address"]."</p>";

        }
      }
    }
    if ($intuit_result!=null){
      foreach ($intuit_result as $record){
        if ($record["employed"]=='no'){
        echo "<p><h2>Intuit:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Last Hire: ".$record["most_recent_hire_date"]."</p>";
        }
        else{
          echo "<p><h2>Intuit:</h2> <br> First Name: ".$record["first_name"]."<br>"."Last Name: ".$record["last_name"]."<br>"."Employed: ".$record["employed"]."<br>"."Employer:".$record["employer_name"]."<br> Employed As Of: <br>".$record["employed_as_of"]."<br> Address:".$record["company_address"]."</p>";

        }
      }
    }

       //
       // foreach($paychecks_result as $record){
       //      var_dump("lol");
       //   if (in_array($ssn_search, $record)){
       //
       // }
    //  var_dump(in_array($ssn_search, $paychecks_result));
    //}

  //   if (in_array($ssn_search, $otherpay_result)){
  //     foreach($otherpay_result as $record){
  //           //var_dump($record);
  //       echo "<p>First Name: ".$record["first_name"]."<br>"."Last Name".$record["last_name"]."</p>";
  //   }
  // }
  //   if (in_array($ssn_search, $surepay_result)){
  //     foreach($surepay_result as $record){
  //           //var_dump($record);
  //       echo "<p>First Name: ".$record["first_name"]."<br>"."Last Name".$record["last_name"]."</p>";
  //     }
  //
  //  }


?>
  </div>
  </div>

</body>

</html>
