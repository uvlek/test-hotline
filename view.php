<?php require_once('elements/header.php'); ?>
<div class="content">
<?php 
  if(isset($_GET['id'])){
    require_once('connect.php');
    $id = $_GET['id'];
    $result = mysql_query("SELECT * FROM pages WHERE id='$id'");
    while($page = mysql_fetch_array($result)) {
      echo '<div class="page-title">' . $page['title'] . '</div>';
      if (isset($page["tags"])){
        $tags = explode(',', $page["tags"]);
        echo '<span class="tags">';
        foreach ($tags as $tag) {
          echo '<a href="index.php?tag=' . $tag . '">' . $tag . '</a>';
        }
        echo '</span>';
      }
      echo '<span class="page-date">' . $page['date'] . '</span>';
      echo '<div style="clear:both"></div>';
      echo '<div class="page-content">';
      if (isset($page["image"]) && !empty($page["image"])){
        echo '<img src="'.$page["image"].'" class="page-image"/>';
      }
      echo $page['content'];
      echo '<div style="clear: both"></div>';
      echo '</div>';
    }
  }
?> 
</div>           
<?php require_once('elements/footer.php'); ?>
