
<html class="xv-responsive" lang="zh">
<head>
	<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['SearchTypeName']; ?>-搜索结果页</title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['SearchTypeName']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['SearchTypeName']; ?>" />
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
		<li class="hide-if-premium"><a class="btn btn-default home active" href="/"><span class="icon video mobile-show-inline-block"></span><span class="label mobile-hide"><?php  echo $this->value['SearchTypeName']; ?></span></a></li>
	
	</div>	

	<div id="content">

	<div class="mozaique">
	<?php  $MYSQLVODS=(array)$this->value['SearchTypeJCSQL'];$SearchTypeId=$this->value['SearchTypeId'];$GetMb_page=$this->value['SearchTypePage']; $Count=10;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>		
	<div   class="thumb-block ">
		<div class="thumb-inside">
			<div class="microthumb">
				<div class="microthumb-thumb" style="background-position:0% 0%"></div>
				<div class="microthumb-border"></div>
			</div>
			<div class="thumb">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$s['d_type'].$Host4; ?>"><img src="<?php 	echo  $s['d_pic'] ?>"    /></a>
			</div>
		</div>
		<div class="thumb-under">
			<p class="title">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$s['d_type'].$Host4; ?>" title="Japan group sex"><?php 	echo  $s['d_name'] ?></a>
			</p>
			<p class="metadata">
				<span class="bg">
					<span class="duration">热度:<?php 	echo   rand(5, 10000); ?></span>

			</p>
		</div>
	</div>																
	<?php  } ?>

	<div class="pagination ">
		<ul>

						<li><a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['page'].$Host4; ?>">首页</a></li>
						<li><a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['prev'].$Host4; ?>">上一页</a></li>
						<li><a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['next'].$Host4; ?>">下一页</a></li>
						<li><a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['total'].$Host4; ?>">尾页</a></li>	

	</div>
	</div>

	</div>



<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
 </body>
</html>

