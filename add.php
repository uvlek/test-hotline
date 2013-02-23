<?php require_once('elements/header.php'); ?>
<?php require_once('elements/datepicker_init.php'); ?>
  <div class="content">
    <form action="add.php" method="post" ENCTYPE="multipart/form-data">
      <div class="content-head">
        <div class="form-title">Добавление нового материала</div>

        <input type="file" name="image" id="foto" accept="image/*,image/jpeg">

        <div id="date">Дата: 
          <? if(isset($_POST['date']) && !empty($_POST['date'])) {
            $date = $_POST['date'];
            echo '<span class="pass">*<span>';
          } else {
            echo '<span class="ssap">*<span>';
          }?>
          <input type="text" id="date-time-picker" name="date"/>
        </div>

        <button class="btn"><span>Сохранить → базу</span></button>
      </div>


      <div style="clear: both;"></div>
      <div class="i-wrap">
        <label>Заголовок:</label>
        <? if(isset($_POST['title']) && !empty($_POST['title'])) {
          $title = $_POST['title'];
          echo '<span class="pass">*<span>';
        } else {
          echo '<span class="ssap">*<span>';
        }?>
        <input type="text" name="title" value=""/>
      </div>

      <div class="i-wrap">
        <label>Контент:</label>
        <? if(isset($_POST['content']) && !empty($_POST['content'])) {
          $content = nl2br($_POST['content']);
          echo '<span class="pass">*<span>';
        } else {
          echo '<span class="ssap">*<span>';
        }?>
        <textarea rows="10" cols="45" name="content"></textarea>
      </div>
      <div class="i-wrap">
        <label>Теги:</label>
        <input type="text" name="tags" />
      </div>
    </form>

    <?php
      $upfold = 'upload/'; 
      $nin = date('YmdHis').rand(100,1000).'.jpg';
      $uploadfile = "$upfold$nin";

      if($_FILES['image']['size'] != 0 and $_FILES['image']['size'] <= 1024000) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
          $size = getimagesize($uploadfile); 
          if ($size[0] < 1001 && $size[1] < 5001)  { 
            $image = $uploadfile;
          }else{
            unlink($uploadfile);
          }
        } else {
        }
      } else {
      }
    ?>

    <?php 
      if(isset($title, $content, $date)){ 
        require_once('connect.php');
        mysql_query("INSERT INTO pages (title, content, date, image, tags) VALUES ('$title', '$content', '$date', '$image', '$_POST[tags]')");
      }
    ?>
  </div>      
<?php require_once('elements/footer.php'); ?>
