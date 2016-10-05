<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>修改xml文件</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['update'])) {
      //生成xml
      $fileOpen = fopen('webInfo.xml', 'w');

      if(!$fileOpen) {
        exit('创建失败！');
      }

      flock($fileOpen, LOCK_EX);
      //写入xml文件的操作

      $string = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $string = "<webInfo>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $websiteName = trim($_POST['websiteName']);
      $string = "\t<websiteName>$websiteName</websiteName>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $masterName = trim($_POST['masterName']);
      $string = "\t<masterName>$masterName</masterName>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $email = trim($_POST['email']); 
      $string = "\t<email>$email</email>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $url = trim($_POST['url']);
      $string = "\t<url>$url</url>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $logoDesc = trim($_POST['logoDesc']);
      $string = "\t<logoDesc>$logoDesc</logoDesc>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $icp = trim($_POST['icp']);
      $string = "\t<icp>$icp</icp>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $masterIntro = trim($_POST['masterIntro']);
      $string = "\t<masterIntro>$masterIntro</masterIntro>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $websiteIntro = trim($_POST['websiteIntro']);
      $string = "\t<websiteIntro>$websiteIntro</websiteIntro>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      $string = "</webInfo>\r\n";
      fwrite($fileOpen, $string, strlen($string));

      flock($fileOpen, LOCK_UN);
      fclose($fileOpen);

      echo '<script type="text/javascript">alert(\'更新成功！\');location.href="index.php"</script>';
      exit();
    }

    include('getXML.php');
  ?>
  <div id="webInfo">
    <h2>修改xml文件</h2>
    <form class="webInfo-form" action="#" method="post">
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
        <input class="button" type="submit" value="更新" name="update">
      </label>
    </form>
  </div>
</body>
</html>