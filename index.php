<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HysteriaXtreme</title>
<link rel="stylesheet" href="colorbox.css" type="text/css" />
<style type="text/css">


body{
background-color:#000000;	
background:url(hysteria/hysteria.jpg) no-repeat;
font-family: 'Voltaire', sans-serif;
}
a:link {border: none #000000}
a:visited{border: none #000000}
#menu{
	position:absolute;
	font-style:normal;
	font-family:"Times New Roman", Times, serif;
	z-index: auto;
	border:none;
}
#spons{
	position:absolute;
	top:555px;
	left:1050px;
}
#spons:hover
{
	position:absolute;
	top:559px;
	left:1050px;
}
#about{
	position:absolute;
	height:100;
	width:300;
	left: 650px;
	top: 350px;
}

#prize{
	position:absolute;
	left: 850px;
	top: 350px;
}

#registration{
	position:absolute;	
	left: 900px;
	top: 445px;
}
#registration:hover{
	position:absolute;	
	left: 900px;
	top: 449px;
}
#rules{
	position:absolute;	
	left: 1050px;
	top: 350px;
}
#dialus{
	position:absolute;	
	left: 650px;
	top: 450px;
}
#gallery{
	position:absolute;
	top:550px;
	left:650px;
}

#gallery:hover
{
	position:absolute;
	top:553px;
	left:650px;
}


</style>
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<script src="colorbox/jquery1.7.1.js"></script>
		<script src="colorbox/jquery.colorbox.js"></script>
 

		<script>
		$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements

				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".iframe").colorbox({iframe:true, width:"570px", height:"630"});
				$(".inline").colorbox({inline:true, width:"570px"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
				
				
			

		});
</script>
</head>

<body>

<div id="menu">
<div id="spons">
<a href="hysteria2/sponsors1.php" target="_new">
<img src="hysteria/HYsteria Tabs/SPONCORSGLOW.png" border="0" onmouseover="this.src='hysteria/HYsteria Tabs/SPONCORS.png'"onmouseout="this.src='hysteria/HYsteria Tabs/SPONCORSGLOW.png'"  /> 
</div>

<div id="about">
<a class='inline' href="#info">
<img src="hysteria/HYsteria Tabs/aboutglow1.png" border="0" onmouseover="this.src='hysteria/HYsteria Tabs/aboutglow.png'" onmouseout="this.src='hysteria/HYsteria Tabs/aboutglow1.png'"  />

</div>
<div id="prize">
<a class='inline' href="#incentives">
<img src="hysteria/HYsteria Tabs/prizeglow1.png" border="0" onmouseover="this.src='hysteria/HYsteria Tabs/prizeglow.png'" onmouseout="this.src='hysteria/HYsteria Tabs/prizeglow1.png'"/>
</div>
<div id="registration">
<a class='iframe' href="resigtration.php">
<img src="hysteria/HYsteria Tabs/registrationglow1.png" border="0" onmouseover="this.src='hysteria/HYsteria Tabs/registrationglow.png'" onmouseout="this.src='hysteria/HYsteria Tabs/registrationglow1.png'" />
</div>
<div id="rules">
<a class='inline' href="#regulation">
<img src="hysteria/HYsteria Tabs/rulesglow1.png" border="0" onmouseover="this.src='hysteria/HYsteria Tabs/rulesglow.png'" onmouseout="this.src='hysteria/HYsteria Tabs/rulesglow1.png'"/>
</div>
<div id="dialus">
<a class='inline' href="#contact">
<img src="hysteria/HYsteria Tabs/dialusglow1.png" border="0" onmouseover="this.src='hysteria/HYsteria Tabs/dialusglow.png'" onmouseout="this.src='hysteria/HYsteria Tabs/dialusglow1.png'"/>
</div>
<div id="gallery">
<a href="gallery/index.html" target="_new">
<img src="hysteria/HYsteria Tabs/galleryglow1.png" border="0" onmouseover="this.src='hysteria/HYsteria Tabs/galleryglow.png'" onmouseout="this.src='hysteria/HYsteria Tabs/galleryglow1.png'"/>

</div>
</div>



<div style='display:none'>
			<div id='incentives' style='padding:10px;'>
			<h1 align="center">INCENTIVES</h1><br />
            <ul>
            <li>
        Cash Prize: A 5 digit cash prize to be given to the winner of Hysteria’ 12
            </li><br />
            <li>
         Free recording: 50 hours of recording by musicmatters
            </li><br />
            <li>
        	A chance to be a part of the annual MyBand all India tour
            </li><br />
            <li>
          	Merchandise: Exclusive merchandise provided by our elite sponsors worth over INR 1 lakh to be distributed at the prelims and the finals
            </li><br />
            <li>
         	Tremendous publicity (event covered by our magazine partners RSJ and BigM)
            </li>
            <li>
            6.	And well, a chance to just drop everything else, have awesome fun and jam to your soul’s content.


            </li>
           
            </ul>
          
			</div>
		</div>

<div style="display:none">
<div id="info" style="padding:20px">
<h1 align="center">ABOUT HYSTERIA </h1>
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The thronging masses and the impulse to harbor every moment makes you crave for more. This is madness which is intense. Music which will blow your mind. The previous events have been euphoric to say the least and this time we take it to the next level. With music that consumed oneself playing, the devil’s horns were up all night, and so were the people. Experiencing the high which music can drape us in, we invite everyone with their rock machines, percussions and screamos. Those not really into setting the stage on fire are most welcome with their devil's horns, mosh pits and hysterical head banging. One of the largest Western Rock competitions in India with prelims in Delhi and Mumbai, Hysteria has seen the rise of famed names in the Indian rock scene like Manefus, Therefore Play, Backdoor Blues, Sanitarium, Overture, Lycanthropia and many more.
</ul>
<ul>
<li>
Type of music:Rock/Metal/Funk/Grunge/Punk/
			Psychedelic/Alternative
</li><li>
Estimated audience: 200-300 in the prelims 
</li><Li>
Previously held at Café Morrison(Delhi);Chicane(Noida) 
  & B69 (Mumbai).
</Li>
</ul>

</div></div>

<div style="display:none">
<div id="regulation" style="padding:10px">
<h1 align="center">RULES</h1>
<ul>
<h3>English</h3>

<li>
 Online Eliminations: Out of all the registered bands, 12 bands, for each venue, would be selected for the regional eliminations on the basis of their demos.
</li>
<li>
 Regional Eliminations: Prelims to be held in Delhi, Mumbai and IIT campus. Out of 12 bands competing in each regional elimination round, 3 bands would be selected for the semi finals.
</li>
<li>
 Rest of India: 3 bands to be selected from all the registered bands from places not coming in the 2 zones, i.e. west and north.
</li>
<li>
 Semifinals: 9 bands will compete against each other and 3 bands will be selected for finals.
</li>
 Finals: Finalists will compete against each other while doing an opening act for a famous Headliner. Our previous headliners include the likes of Local Train, Barefaced Liars.
</pre>
<h3>Hindi</h3> 
<li>	Online eliminations: 4 bands out of all the registered ones will be selected for direct entry into the finals.
</li>
<li>
	Finals: The selected bands will compete for the first place in the finals held at the IIT campus on the first day of the fest.

</li><br/><li style=" font-weight:500;">
TIME LIMIT:    20-25 min including sound check</li><br/>
</li>
</ul>
<h3 align="center">Event Overview</h3>

<ul>
<h3>English</h3>
<li>

	<strong>Regional Eliminations: </strong>
    </br>
a)	West zone prelims, Mumbai: Saturday, 3rd March, venue
</br>
b)	North zone prelims, Delhi: Sunday, 26th February, Café Morrison
</li>
<li>
	<strong>Semi Finals:</strong> Friday, March 16th, 2012, IIT Roorkee Saharanpur campus, Saharanpur
</li>
<li>
	<strong>Finals:</strong> Saturday, March 17th, 2012, IIT Roorkee Saharanpur campus, Saharanpur
</li>
</ul>
<ul>
<h3>Hindi</h3>

<li><strong>Finals:</strong> Friday, March 16th, 2012, IIT Roorkee Saharanpur campus, Saharanpur</li>
</ul>
</div></div>
<div style="display:none">
<div align="center" id="contact" style="padding:10px">
<h1 align="center">CONTACT US</h1>
<br/><br/><br/><br/><br/>
 <strong>Badri (Organizer)
<br/><br/>
+918057264654</strong>
<br/><br/>
<strong>Chintan Shah (Organizer)
<br/><br/>
+917830933061</strong>
<br/><br/>
<strong>Tanmay Purohit (Organizer)
<br/><br/>
+917417486017</strong>


<br/><br/>
OR Mail Us @ hysteria.iitr12@gmail.com
</div></div>



</body>
</html>