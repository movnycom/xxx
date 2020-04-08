
<html class="xv-responsive" lang="zh">
<head>
	<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?>视频播放</title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#000000">
	<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/static/css/main.css">


<script>
if (!window.xv) {
    window.xv = {};
}
window.xv.conf = {
    "sitename": "default",
    "dyn": {
        "pagefilter": "straight",
        "no_main_cat": false,
        "suportHls": true,
        "login_info": {
            "is_logged": false,
            "is_premium": false,
            "profile": false,
            "iptrusted": -1,
            "orientation": "straight",
            "recaptchakey": "6LeEkhMTAAAAAFrfG3CxNAT9JiM1oLIkyU7UuYYQ",
            "invrecaptchakey": "6LcM6ScUAAAAAHFxb4HmgMyNHrfi61bf_USRJ4uo"
        }
    }};
</script>
	<script src="<?php echo $this->value['StylePath']; ?>/static/js/default.header.static.js"></script>
</head>
<body class="home should-have-side-tf-tower">
<div id="page">
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
	<div id="main">
	<div id="home-tabs" class="xv-tabs ">
	<ul class="tab-buttons tab-6-buttons">
		<li class="hide-if-premium"><a class="btn btn-default home active" href="/"><span class="icon video mobile-show-inline-block"></span><span class="label mobile-hide"><?php echo $this->value['Name']; ?></span></a></li>
	
	</div>	

	<div id="content">
	
	   <div style="height:300px"><?php echo $this->value['Play']; ?></div>
	
		 <?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
						<a target="_blank"  href="<?php echo $VideoWebUrl?>"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $VideoPicUrl?>"></a>
						 <?php } ?>		
	<div class="mozaique">
	<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeJCSQL'];shuffle($MYSQLVOD);  $Count=10;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>		
	<div   class="thumb-block ">
		<div class="thumb-inside">
			<div class="microthumb">
				<div class="microthumb-thumb" style="background-position:0% 0%"></div>
				<div class="microthumb-border"></div>
			</div>
			<div class="thumb">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>"><img src="<?php 	echo  $MYSQLVODs['d_pic'] ?>"    /></a>
			</div>
		</div>
		<div class="thumb-under">
			<p class="title">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>" title="Japan group sex"><?php 	echo  $MYSQLVODs['d_name'] ?></a>
			</p>
			<p class="metadata">
				<span class="bg">
					<span class="duration">热度:<?php 	echo   rand(5, 10000); ?></span>

			</p>
		</div>
	</div>																
	<?php  } ?>


	</div>

	</div>



<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
 </body>
</html>

