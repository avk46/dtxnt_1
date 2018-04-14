
<header>
  <nav id="menu">
    <ul>
      <?php
          foreach($pages as $page_id => $page_name) {
            if ($page_id == $current_page_id) {
              $css_id = "id='current_page'";
            } else {
              $css_id = "";
            }
            echo "<li><a " . $css_id . " href='" . $page_id. ".php'>$page_name</a></li>";
          }
      ?>
    </ul>
  </nav>
</header>
