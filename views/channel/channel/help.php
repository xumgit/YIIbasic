<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div>
  <h1>Channel</h1><br />
  <h1><?php echo Yii::$app->getSecurity()->generateRandomString();?></h1><br />
  <?php 
  // $data and $secretKey are obtained from the form
  // $encryptedData = Yii::$app->getSecurity()->encryptByPassword($data, $secretKey);
  // store $encryptedData to database
  
  // $secretKey is obtained from user input, $encryptedData is from the database
  // $data = Yii::$app->getSecurity()->decryptByPassword($encryptedData, $secretKey);
  ?>
</div>