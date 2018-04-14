<?php
include("includes/init.php");
$current_page_id="index";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/all.css" media="all" />

  <title><?php echo $pages[$current_page_id] . " - " . $title; ?></title>
</head>

<body>
  <?php include("includes/header.php");
  ?>

  <div id="content-wrap1">
    <div id="search_form">
    <?php
    print_messages();
    ?>

    <h2>Enter SSN to search for:</h2>

    <form id="uploadFile" action="index.php" method="post">
      <ul>
        <li>
          <label>SSN:</label>
        </li>
        <li>
          <textarea name="SSN" cols="9" rows="1"></textarea>
        </li>
        <li>
          <button name="submit_search" type="submit">Search</button>
        </li>
      </ul>
    </form>
  </div>
  <div id="search_results">
    <?php
    $db = open_or_init_sqlite_db('source_data.sqlite', "init/init.sql");

    if (isset($_POST["submit_search"])) {
      //variables
      $upload_ssn = filter_input(INPUT_POST, 'SSN', FILTER_SANITIZE_STRING);

      //add to sourcedata
      $sql = "INSERT INTO source_data (SSN) VALUES (:ssn)";
      $arguments = array(
        ':ssn'=>$upload_ssn
      );
        $result = exec_sql_query($db, $sql, $arguments);
        if ($result) {
          array_push($messages, "Added");
        } else {
          array_push($messages, "Not Added");
        }

        $allrequests=exec_sql_query($db, "SELECT id FROM source_data ORDER BY ID DESC LIMIT 1", NULL)->fetchAll(PDO::FETCH_COLUMN);
        $currentid;
        foreach($allrequests as $ids){
            $currentid=$ids;
          };
        $paychecks_result=exec_sql_query($db, "SELECT SSN FROM paycheck_data WHERE SSN=$upload_ssn", NULL)->fetchAll(PDO::FETCH_COLUMN);
        $otherpay_result=exec_sql_query($db, "SELECT SSN FROM otherpay_data WHERE SSN=$upload_ssn", NULL)->fetchAll(PDO::FETCH_COLUMN);
        $surepay_result=exec_sql_query($db, "SELECT SSN FROM surepay_data WHERE SSN=$upload_ssn", NULL)->fetchAll(PDO::FETCH_COLUMN);
        $intuit_result=exec_sql_query($db, "SELECT SSN FROM intuit_data WHERE SSN=$upload_ssn", NULL)->fetchAll(PDO::FETCH_COLUMN);



        if ((in_array($upload_ssn, $paychecks_result)==FALSE)&&(in_array($upload_ssn, $otherpay_result)==FALSE)&&(in_array($upload_ssn, $surepay_result)==FALSE)&&(in_array($upload_ssn, $intuit_result)==FALSE)){
          echo "<p>No Records found</p>";
        }
        elseif (in_array($upload_ssn, $paychecks_result)&&in_array($upload_ssn, $otherpay_result)&&(in_array($upload_ssn, $surepay_result)==FALSE)&&in_array($upload_ssn, $intuit_result)==FALSE) {
          echo "<p> Paychecks and Other Pay have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif (in_array($upload_ssn, $paychecks_result)==FALSE&&in_array($upload_ssn, $otherpay_result)&&in_array($upload_ssn, $surepay_result)&&in_array($upload_ssn, $intuit_result)==FALSE) {
          echo "<p> Surepay and Other Pay have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif (in_array($upload_ssn, $paychecks_result)&&in_array($upload_ssn, $otherpay_result)==FALSE&&in_array($upload_ssn, $surepay_result)&&in_array($upload_ssn, $intuit_result)==FALSE) {
          echo "<p> Paychecks and Sure Pay have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif(in_array($upload_ssn, $paychecks_result)&&in_array($upload_ssn, $otherpay_result)&&in_array($upload_ssn, $surepay_result)&&in_array($upload_ssn, $intuit_result)==FALSE) {
          echo "<p> Paychecks, Surepay and Other Pay have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        //
        elseif (in_array($upload_ssn, $paychecks_result)==FALSE&&in_array($upload_ssn, $otherpay_result)&&(in_array($upload_ssn, $surepay_result)==FALSE)&&in_array($upload_ssn, $intuit_result)) {
          echo "<p> Intuit and Other Pay have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif (in_array($upload_ssn, $paychecks_result)==FALSE&&in_array($upload_ssn, $otherpay_result)==FALSE&&in_array($upload_ssn, $surepay_result)&&in_array($upload_ssn, $intuit_result)) {
          echo "<p> Surepay and Intuit have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif (in_array($upload_ssn, $paychecks_result)&&in_array($upload_ssn, $otherpay_result)==FALSE&&in_array($upload_ssn, $surepay_result)==FALSE&&in_array($upload_ssn, $intuit_result)==FALSE) {
          echo "<p> Paychecks and Intuit have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif(in_array($upload_ssn, $paychecks_result)&&in_array($upload_ssn, $otherpay_result)&&in_array($upload_ssn, $surepay_result)&&in_array($upload_ssn, $intuit_result)) {
          echo "<p> Paychecks, Intuit, Surepay and Other Pay have the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        //
        elseif(in_array($upload_ssn, $paychecks_result)==FALSE&&in_array($upload_ssn, $otherpay_result)==FALSE&&in_array($upload_ssn, $surepay_result)) {
          echo "<p> Surepay has the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif(in_array($upload_ssn, $paychecks_result)==FALSE&&in_array($upload_ssn, $otherpay_result)&&in_array($upload_ssn, $surepay_result)==FALSE) {
          echo "<p> Otherpay has the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        elseif(in_array($upload_ssn, $paychecks_result)==FALSE&&in_array($upload_ssn, $otherpay_result)==FALSE&&in_array($upload_ssn, $surepay_result)==FALSE&&in_array($upload_ssn, $intuit_result)) {
          echo "<p> Intuit has the record with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }
        else{
          echo"<p> Paychecks has the with TRNX ID".$currentid.".<a href=result.php?id=".$currentid.">  More Information?</a></p>";
        }


    }


    ?>
  </div>
  </div>

</body>

</html>
