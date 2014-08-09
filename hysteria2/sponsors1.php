<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<script type="text/javascript" src="jquerycycle.js"></script>
<style>
.spon {  height: 232px; width: 232px; padding:20px auto; margin:50px auto; overflow: hidden }

.spon img { height: 200px; width: 200px; padding: 15px; border: 1px solid #ccc; background-color: #eee; top:0; left:0 }
.spon img{
	-moz-border-radius: 10px; -webkit-border-radius: 10px;
}
#spon img{ height:55px; width:200px; padding: 15px; border:0px;border: 1px solid #ccc;top:0; left:0}

</style>
<script type="text/javascript">

 $(function() {

$('#header').fadeIn(100);
$('#s1').cycle({ 
    fx: 'curtainX', 
    easing: 'easeOutBounce', 
    delay:  -100 ,
  
});	

});

</script>

</head>
<body background="../hysteria/Background.jpg">

<div id="header" style="display:none;"></div>
<div id="s1" class="spon">
<div id="spon"> <a href="http://www.nimbuzz.com/en/" ><img src="sponsors/NimbuzzLogo.png"/></a></div>
 		   <img src="sponsors/myband_logo2.png" width="200" height="200"/>
           <img src="sponsors/GuitarHall.jpg" width="200" height="200"/>
           <img src="sponsors/rsj.jpg" width="200" height="200"/>
           <img src="sponsors/hindustan_times-logo.gif" width="200" height="200"/>
           <img src="sponsors/MUSICIANS_MALL_logo.jpg" height="200" width="200"/>
          
           
           
</div>






</body>
</html>
