<div id="header">
<header>
<div class="stripe white-stripe">
<h1 class="hidden"><?php echo $this->value['WebTitle']; ?></h1>

<a href="#" class="animated-hamburger" id="header-menu-toggle" title="切换菜单">
<span class="an-h-1"></span>
<span class="an-h-2"></span>
<span class="an-h-3"></span>
<span class="an-h-4"></span>
</a>

<a href="/" class="logo" id="site-logo-link"> <img src="<?php echo $this->value['WebLogo']; ?>" alt="<?php echo $this->value['WebTitle']; ?>"  height="36" width="144"></a>

<form action="" id="xv-search-form" class="mobile-hide">
<div class="cont">
<div class="input-group">
<input type="text" name="search" value="" class="search-input form-control" maxlength="2048" placeholder="请输入影片名或演员名" />
<span class="input-group-btn">
	<button type="submit" title="搜索" class="search-submit btn btn-default">
		<span class="icon-f icf-search"></span><span class="mobile-show-inline-block">搜索</span>
	</button>
</span>
</div>
</div>
</form>
<h2 class="mobile-hide" id="dsktp-title-comment"><span class="pad">最佳 <span class="text-danger">免費成人影視</span>網站</span></h2>
</div>
<h2 id="mobile-slogan" class="mobile-show">最佳 <span class="text-danger">免費成人影視</span>網站 </h2>
</header>
</div>

 <div id="nav" class="forced-opened"> 
   <nav> 
    <div class="main-categories ordered-label-list"> 
     <ul> 
      <li class="mobile-show"><a class="btn btn-default label main" id="main-cat-sub-list-btn">分类</a></li> 
		 <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?>  <li><a class="btn btn-default label red-label"  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>


      <li><a class="btn btn-default" href="?search=无毛">无毛</a></li>
	  <li><a class="btn btn-default" href="?search=丝袜">丝袜</a></li>
	  <li><a class="btn btn-default" href="?search=中出">中出</a></li>
	  <li><a class="btn btn-default" href="?search=萝莉">萝莉</a></li>
	  <li><a class="btn btn-default" href="?search=少妇">少妇</a></li>
	  <li><a class="btn btn-default" href="?search=教师">教师</a></li>
	  <li><a class="btn btn-default" href="?search=护士">护士</a></li>
	  <li><a class="btn btn-default" href="?search=凌辱">凌辱</a></li>
	  <li><a class="btn btn-default" href="?search=痴汉">痴汉</a></li>
	  <li><a class="btn btn-default" href="?search=裤袜">裤袜</a></li>
	  <li><a class="btn btn-default" href="?search=SM">SM</a></li>
	  <li><a class="btn btn-default" href="?search=人妻">人妻</a></li>
	  <li><a class="btn btn-default" href="?search=波多野结衣">波多野结衣</a></li>
	  <li><a class="btn btn-default" href="?search=母子">母子</a></li>
	  <li><a class="btn btn-default" href="?search=足交">足交</a></li>
	  <li><a class="btn btn-default" href="?search=口交">口交</a></li>
	  <li><a class="btn btn-default" href="?search=高潮">高潮</a></li>
	  <li><a class="btn btn-default" href="?search=孕妇">孕妇</a></li>
	  <li><a class="btn btn-default" href="?search=医生">医生</a></li>
	  <li><a class="btn btn-default" href="?search=旗袍">旗袍</a></li>
	  <li><a class="btn btn-default" href="?search=未亡人">未亡人</a></li>
	  <li><a class="btn btn-default" href="?search=轮奸">轮奸</a></li>
	  <li><a class="btn btn-default" href="?search=魔镜">魔镜</a></li>
	  <li><a class="btn btn-default" href="?search=国王游戏">国王游戏</a></li>
	  <li><a class="btn btn-default" href="?search=按摩">按摩</a></li>
	   <li><a class="btn btn-default" href="?search=媚药">媚药</a></li>
	   <li><a class="btn btn-default" href="?search=苍井空">苍井空</a></li>
	   <li><a class="btn btn-default" href="?search=秘书">秘书</a></li>
	  
	  
	  
      <li class="mobile-hide"><a class="view-more btn btn-default">+</a></li>
      <li id="last-main-cats-visited" class="ordered-label-list"></li>
     </ul>
    </div> 

    <div id="nav_subs" class="mobile-show"></div> 
   </nav> 
  </div>
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> <a target="_blank"  href="<?php echo $TopWebUrl?>" ><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $TopPicUrl?>"></a> <?php } ?>
