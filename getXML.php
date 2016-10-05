<?php
  $xmlFile = 'webInfo.xml';
  if(file_exists($xmlFile)) {
    $webInfo = array();
    $xml = file_get_contents($xmlFile);
    preg_match_all('/<webInfo>(.*)<\/webInfo>/s', $xml, $dom);

    foreach($dom['1'] as $value) {
      preg_match_all('/<websiteName>(.*)<\/websiteName>/', $value, $websiteName);
      preg_match_all('/<masterName>(.*)<\/masterName>/', $value, $masterName);
      preg_match_all('/<email>(.*)<\/email>/', $value, $email);
      preg_match_all('/<url>(.*)<\/url>/', $value, $url);
      preg_match_all('/<logoDesc>(.*)<\/logoDesc>/', $value, $logoDesc);
      preg_match_all('/<icp>(.*)<\/icp>/', $value, $icp);
      preg_match_all('/<masterIntro>(.*)<\/masterIntro>/', $value, $masterIntro);
      preg_match_all('/<websiteIntro>(.*)<\/websiteIntro>/', $value, $websiteIntro);

      $webInfo['websiteName'] = $websiteName['1']['0'];
      $webInfo['masterName'] = $masterName['1']['0'];
      $webInfo['email'] = $email['1']['0'];
      $webInfo['url'] = $url['1']['0'];
      $webInfo['logoDesc'] = $logoDesc['1']['0'];
      $webInfo['icp'] = $icp['1']['0'];
      $webInfo['masterIntro'] = $masterIntro['1']['0'];
      $webInfo['websiteIntro'] = $websiteIntro['1']['0'];
    }
  }
?>