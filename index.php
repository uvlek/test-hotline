<?php require_once('elements/header.php'); ?>
  <div class="content">
    <?php 
      require_once('connect.php');
      if (isset($_GET['tag'])) {
        $tag = $_GET['tag'];
        $query = "SELECT * FROM `pages` WHERE (CONVERT( `tags` USING utf8 ) LIKE  '%" . $tag . "%')";
      } else {
        $query = "SELECT * FROM pages";
      }
      $result = mysql_query($query);

      while($page = mysql_fetch_array($result)) {
        echo '<div class="list-item">';
        echo '<a href="view.php?id=' . $page['id'] . '">' . $page['title'] . '</a>';
        echo '<span style="float:right;">' . $page['date'] . '</span>' . "</div>";
      }
    ?> 
  </div>       
<?php require_once('elements/footer.php'); ?>
