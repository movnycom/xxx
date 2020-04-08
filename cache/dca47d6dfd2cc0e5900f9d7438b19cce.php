
<html class="xv-responsive" lang="zh">
<head>
	<title><?php echo $this->value['WebTitle']; ?></title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>" />
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
		<li class="hide-if-premium"><a class="btn btn-default home active" href="/"><span class="icon video mobile-show-inline-block"></span><span class="label mobile-hide">主頁</span></a></li>
	
	</div>	

	<div id="content">

	<div class="mozaique">
	<?php  $VideoType=1;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
	<div   class="thumb-block ">
		<div class="thumb-inside">
			<div class="microthumb">
				<div class="microthumb-thumb" style="background-position:0% 0%"></div>
				<div class="microthumb-border"></div>
			</div>
			<div class="thumb">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"    /></a>
			</div>
		</div>
		<div class="thumb-under">
			<p class="title">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="Japan group sex"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
			</p>
			<p class="metadata">
				<span class="bg">
					<span class="duration">热度:<?php 	echo   rand(5, 10000); ?></span>

			</p>
		</div>
	</div>																
	<?php  } ?>
	<?php  $VideoType=2;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
	<div   class="thumb-block ">
		<div class="thumb-inside">
			<div class="microthumb">
				<div class="microthumb-thumb" style="background-position:0% 0%"></div>
				<div class="microthumb-border"></div>
			</div>
			<div class="thumb">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"    /></a>
			</div>
		</div>
		<div class="thumb-under">
			<p class="title">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="Japan group sex"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
			</p>
			<p class="metadata">
				<span class="bg">
					<span class="duration">热度:<?php 	echo   rand(5, 10000); ?></span>

			</p>
		</div>
	</div>																
	<?php  } ?>
	<?php  $VideoType=4;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
	<div   class="thumb-block ">
		<div class="thumb-inside">
			<div class="microthumb">
				<div class="microthumb-thumb" style="background-position:0% 0%"></div>
				<div class="microthumb-border"></div>
			</div>
			<div class="thumb">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"    /></a>
			</div>
		</div>
		<div class="thumb-under">
			<p class="title">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="Japan group sex"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
			</p>
			<p class="metadata">
				<span class="bg">
					<span class="duration">热度:<?php 	echo   rand(5, 10000); ?></span>

			</p>
		</div>
	</div>																
	<?php  } ?>
	<?php  $VideoType=5;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
	<div   class="thumb-block ">
		<div class="thumb-inside">
			<div class="microthumb">
				<div class="microthumb-thumb" style="background-position:0% 0%"></div>
				<div class="microthumb-border"></div>
			</div>
			<div class="thumb">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"    /></a>
			</div>
		</div>
		<div class="thumb-under">
			<p class="title">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="Japan group sex"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
			</p>
			<p class="metadata">
				<span class="bg">
					<span class="duration">热度:<?php 	echo   rand(5, 10000); ?></span>

			</p>
		</div>
	</div>																
	<?php  } ?>	
	<?php  $VideoType=6;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
	<div   class="thumb-block ">
		<div class="thumb-inside">
			<div class="microthumb">
				<div class="microthumb-thumb" style="background-position:0% 0%"></div>
				<div class="microthumb-border"></div>
			</div>
			<div class="thumb">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"    /></a>
			</div>
		</div>
		<div class="thumb-under">
			<p class="title">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="Japan group sex"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
			</p>
			<p class="metadata">
				<span class="bg">
					<span class="duration">热度:<?php 	echo   rand(5, 10000); ?></span>

			</p>
		</div>
	</div>																
	<?php  } ?>	
	<div id="subs-home-toggle-cont" class="hide-if-premium">


						<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?>
						<a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" target="_blank" id="subs-home-toggle" class="btn btn-default"><?php 	echo  $IeUrls['IeUrlName'] ?></a>
						<?php  } ?>
	</div>
	</div>
	</div>

	</div>



<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
 </body>
</html>

