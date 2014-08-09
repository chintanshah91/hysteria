





$(window).load(function(){
          
		       
				$("#preloader").fadeOut(2000,function(){$('#menu').show();});	
	});
            $(function() {
			$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"85%"});
				$(".inline").colorbox({inline:true, width:"50%"});
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
			function reset()
			{
			
			$('header div#menu ul li').removeClass("active"); }
			$('#smoke').pan({fps: 15,speed: 3,dir:'right'})
			$('#dog_1').sprite({fps:10,no_of_frames: 3}).spRandom({left:4000, top:450,speed: 4000, pause: 5000});
			$('#dog_2').sprite({fps:10,no_of_frames: 3}).spRandom({left:3800, top:450,speed: 4000, pause: 4000});
			$('#dog_3').sprite({fps:12,no_of_frames: 3}).spRandom({left:3900, top:450,speed: 4000, pause: 6000});
			$('#dog_4').sprite({fps:12,no_of_frames: 3}).spRandom({left:3900, top:450,speed: 4000, pause: 6000});
			$('#dog_5').sprite({fps:9,no_of_frames: 3}).spRandom({left:3900, top:450,speed: 4000, pause: 6000});
                $('header div#menu ul li').bind('click',function(event){
				    
                    var $anchor = $(this);
					reset();
                    $anchor.addClass("active");
					
					
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1000,'easeInOutExpo',function(){if($('header div#menu ul li:eq(4)').hasClass("active")){$('#container').slideDown("slow",'easeInOutCirc');}
					 else{$('#container').hide();}});
			    
                    event.preventDefault();
                });
		
		$('#s1').cycle({ 
    fx:     'scrollDown', 
    easing: 'easeOutBounce', 
    delay:  -1000 
});	
	
	$('#s2').cycle({ 
    fx:     'scrollHorz', 
    easing: 'easeInOutExpo', 
    delay:  -1000 
});	
	
	$('#s4').cycle({
        fx:     'blindZ,shuffle,toss',
        speed:  'slow',
		sync:false,
		easing:'easeInOutExpo',
        timeout: 0,
		randomizeEffects: 1,
        pager:  '#sidebar-column ul',
		pagerAnchorBuilder: function(idx, slide) { 
        return '#sidebar-column ul li:eq(' + idx + ')'; }
    }); 		
	
			});		
					