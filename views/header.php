<!doctype html>
<html>
<head>
  <?php if (ENVIRONMENT == "production") {?>
    <script type="text/javascript">
    if (location.protocol != 'https:') {
      location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
    }
    </script>
  <?php }?>
  <?php if (!isset($title)) {?>
  <title>PayStack Code Igniter Application Interface</title>
  <?php } else {?>
  <title>Splint for Code Igniter {<?=$title?>}</title>
  <?php }?>
  <link rel="shortcut icon" type="image/png" href="<?=base_url("favicon.png")?>"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <style>
  a.link{text-decoration: none;}
  a.white-link{color: white;}
  a.black-link{color: black;}
  a.left-margin{margin-left: 40px;}
  body{font-family:'Source Code Pro',monospace;}
  .zoom {background-size:cover;background-repeat:no-repeat;-webkit-transition:all 10s;
  -moz-transition:all 10s;-o-transition: all 10s;transition:all 10s;min-height:500px;}
  .blink{animation: blink 1s steps(2,start) infinite;-webkit-animation:blink 1s steps(2,start)infinite;}
  @keyframes blink{to{visibility:hidden;}}
  @-webkit-keyframes blink{to{visibility:hidden;}}
  pre{overflow-x: auto;}pre code{overflow-wrap: normal;white-space: pre;}
  .wrap{overflow-wrap:break-word;word-wrap: break-word;-ms-word-break:break-all;word-break:break-word;-ms-hyphens:auto;-moz-hyphens:auto;-webkit-hyphens:auto;hyphens:auto;}
  </style>
</head>
<body class="<?=isset($color) ? "$color": ""?>">
  <div class="w3-bar w3-card w3-theme w3-hide-small">
    <a href="<?=app_url()?>" class="w3-bar-item link w3-text-white">
      <img src="<?=asset_url("logo.png")?>" class="w3-image w3-white w3-padding w3-round" width="60"/>
      <span class="w3-margin"><font size="2">PayStack Client Interface</font></span>
    </a>
    <a href="<?=site_url("packages")?>" class="left-margin w3-bar-item w3-button w3-mobile w3-margin-top w3-round w3-hover-white link"><i class="fa fa-cubes"></i> Packages</a>
    <a href="<?=base_url("wiki")?>" class="left-margin w3-bar-item w3-button w3-mobile w3-margin-top w3-round w3-hover-white link"><i class="fas fa-file-alt"></i> Wiki</a>
    <a href="<?=site_url("downloads")?>" class="left-margin w3-bar-item w3-button w3-mobile w3-margin-top w3-round w3-hover-white link"><i class="fas fa-download"></i> Downloads</a>
    <a href="<?=site_url("blog")?>" class="left-margin w3-bar-item w3-margin-top w3-round w3-button w3-mobile link w3-hover-white">{<i class="fas fa-newspaper"></i>} Blog</a>
  </div>
  <div class="w3-hide-medium w3-hide-large w3-center w3-padding w3-theme">
    <p>
      <a href="<?=base_url()?>" class="w3-bar-item link w3-text-white">
        <p><img src="<?=asset_url("logo.png")?>" class="w3-image w3-white w3-padding w3-round" width="60"/></p>
        <p><span class="w3-margin"><font size="2">SPLINT</font></span></p>
      </a>
    </p>
    <p><a href="<?=site_url("packages")?>" class="w3-button w3-mobile w3-round w3-hover-white link"><i class="fa fa-cubes"></i> Packages</a></p>
    <p><a href="<?=base_url("wiki")?>" class="w3-button w3-mobile w3-round  w3-hover-white link"><i class="fas fa-file-alt"></i> Wiki</a></p>
    <p><a href="<?=site_url("downloads")?>" class="w3-button w3-mobile w3-round w3-hover-white link"><i class="fas fa-download"></i> Downloads</a></p>
    <p><a href="<?=site_url("blog")?>" class=" w3-round w3-button w3-mobile link w3-hover-white">{<i class="fas fa-newspaper"></i>} Blog</a></p>
  </div>
