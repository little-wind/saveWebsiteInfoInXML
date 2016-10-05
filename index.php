<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>通过xml保存网站基本信息</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include('getXML.php');
  ?>
  <div id="webInfo">
    <h2>xml文件的数据</h2>
    <form class="webInfo-form" action="#">
      <label for="websiteName">
        <span>网站名称：</span>
        <input id="websiteName" type="text" name="websiteName" value="<?php echo $webInfo['websiteName']; ?>">
      </label>

      <label for="masterName">
        <span>站主名称：</span>
        <input id="masterName" type="text" name="masterName" value="<?php echo $webInfo['masterName']; ?>">
      </label>

      <label for="email">
        <span>邮箱地址：</span>
        <input id="email" type="text" name="email" value="<?php echo $webInfo['email']; ?>">
      </label>

      <label for="url">
        <span>网站URL：</span>
        <input id="url" type="text" name="url" value="<?php echo $webInfo['url']; ?>">
      </label>

      <label for="logoDesc">
        <span>Logo描述：</span>
        <input id="logoDesc" type="text" name="logoDesc" value="<?php echo $webInfo['logoDesc']; ?>">
      </label>

      <label for="ICP">
        <span>ICP：</span>
        <input id="icp" type="text" name="icp" value="<?php echo $webInfo['icp']; ?>">
      </label>

      <label for="masterIntro">
        <span>站主简介：</span>
        <input id="masterIntro" type="text" name="masterIntro" value="<?php echo $webInfo['masterIntro']; ?>">
      </label>

      <label for="websiteIntro">
        <span>网站描述：</span>
        <input id="websiteIntro" type="text" name="websiteIntro" value="<?php echo $webInfo['websiteIntro']; ?>">
      </label>

      <label>
        <span>&nbsp;</span>
        <a class="button" href="edit.php">编辑</a>
      </label>
    </form>
  </div>
</body>
</html>