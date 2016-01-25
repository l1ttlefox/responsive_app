 $(document).ready(function(){
    $('.main_slider').bxSlider({
    	  pagerLocation: 'bottom', 
		  prevText: '',
          nextText: ''			
    });
	
    $(".header_menu_but").click(function(){
		$("#header").toggleClass("open_header");
	});
	$('.slider_preview').bxSlider({
		  minSlides: 4,
		  maxSlides: 4,
		  slideWidth: 85,
		  slideMargin: 10,
		  moveSlides: 1,
		  pager:false,
		  prevText: '',
		  nextText: ''
    });
    $('.pd_add_slider').bxSlider({
		  pager:false,
		  prevText: '',
		  nextText: ''
    });
	openParts(".fc_title", "fc_open");
	openParts(".lsm_mobile", "lsm_open");
	openParts(".category_top", "open_category");
	removeItem();
	checkboxSwitch(".personal_checkbox", "chosen_checkbox")
	checkboxSwitch(".fi_checkbox","fi_chosen");
	menuAccordion(".lsm_title","show_links",".lsm_item");
	menuAccordion(".fb_title","show_filter",".filter_block");
	menuAccordion(".pd_text_top","open_info",".pd_text_info");
	menuAccordion(".msg_top","open_msg",".msg_block");
	set_img(".preview_slide img", "border_green");
	scrollFilter();
	topFieldsDrop();
	rangeFilter();
	initMap();	        		        	
});
//====================================
function openParts(a, b){
	$(a).click(function(){
		$(this).parent().toggleClass(b);
	});
};
function rangeFilter(){
	$(function() {
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 10,
	      max: 9999,
	      values: [ 10, 4599 ],
	      stop: function(event, ui) {
		        $( "#val_1" ).val( $( "#slider-range" ).slider( "values", 0 ));
		        $( "#val_2" ).val( $( "#slider-range" ).slider( "values", 1 ));
			    },
	      slide: function( event, ui ) {
	        $( "#val_1" ).val( $( "#slider-range" ).slider( "values", 0 ));
	         $( "#val_2" ).val( $( "#slider-range" ).slider( "values", 1 ) );
	      }
	    });
	    $( "#val_1" ).val( $( "#slider-range" ).slider( "values", 0 ));
        $( "#val_2" ).val( $( "#slider-range" ).slider( "values", 1 ) );
        $("#val_1").change(function(){
        	var val_1 = $("#val_1").val();
        	var val_2 = $("#val_2").val();
        	if(parseInt(val_1) > parseInt(val_2)){
        		val_1 = val_2;
        		$("#val_1").val(val_1);
        	}
        	$("#slider-range").slider("values", 0, val_1);
        });
        $("#val_2").change(function(){
        	var val_1 = $("#val_1").val();
        	var val_2 = $("#val_2").val();
        	if (val_2 > 1000000) { val_2 = 1000000; $("#val_2").val(1000000)}

        	if(parseInt(val_1) > parseInt(val_2)){
        		val_1 = val_2;
        		$("#val_2").val(val_2);
        	}
        	$("#slider-range").slider("values", 1, val_2);
        });
	  });
};//end of rangeFilter
function scrollFilter(){
	$("#showScroll").scroll(function(){
		var timeout = false;
		if($(this).scrollTop()>1){
			$(this).parent().addClass("mask_up");
		}else{
			$(this).parent().removeClass("mask_up");
		};
		if (timeout !== false) {
		    clearTimeout(timeout);
		    
		  }
		
		  timeout = setTimeout(function() {
		    $(this).parent().removeClass("mask_down");
		  }, 300);
	})
}
function set_img(obj, emphasis){
   	$(obj).click(function(){
   		
   		var src = $(this).attr("src");
   		var split = src.split('/');
   		var show = split[split.length-1];
   		$('#big_img img').attr('src', '/images/' + show);
   		if($(this).hasClass(emphasis)){
   			$(this).removeClass(emphasis);
   		}else{
   			$(obj).each(function(){
	   			$(obj).removeClass(emphasis);
	   		});
	   		$(this).addClass(emphasis);
   		}
   	});
   }
function checkboxSwitch(a,b){
	$(a).click(function(){
		$(this).toggleClass(b);
	});
}
function topFieldsDrop(){
	$(document).mouseup(function (e){ 
		var div = $(".header_personal"); 
		if (!div.is(e.target) && div.has(e.target).length === 0) { 
			div.removeClass("header_personal_open"); 
			
		}
	});
	menuAccordion(".personal_inner","header_personal_open",".header_personal");
	
}
function menuAccordion(a, b, c){
	//a - clicked item
	//b - toogled class
	//c - item? which is closed whwn the other item is being opening
	$(a).click(function(){
		if($(this).parent().hasClass(b)){
			$(this).parent().removeClass(b);
		}else{
			$(c).each(function(){
				$(c).removeClass(b);
			});
			$(this).parent().addClass(b);
		}
	});
};
function removeItem(){
	$(".basket_remove, .basket_remove_mobile").click(function(){
		$(this).parent().remove();
	});
	$(".message_delete").click(function(){
		$(this).parent().parent().remove();
	});
}
/*Настройки карты - для поп ап картинки лучше где то отдельно сверстать html 
 *и потом вставлять его в карту через переменную
 */

function initMap() {
	   // Create an array of styles.
	  var styles = [
	    {
	      stylers: [
			  { hue: "#7ed8b7" },
			  { saturation: 20 },
			  { lightness: -20 }
			]
	    },{
	      featureType: "road",
	      elementType: "geometry",
	      stylers: [
		      { hue: "#00ffee" },
		      { saturation: 30 },
		      { visibility: "simplified" }
		    ]
	    },{
	      featureType: "road",
	      elementType: "labels.icon",
	      stylers: [
	        { hue: "#0abec9" }
	      ]
	    },{
	    featureType: "poi.business",
	    elementType: "labels",
	    stylers: [
	      { visibility: "off" }
	    ]
	  },{
	    featureType: "poi.attraction",
	    elementType: "labels",
	    stylers: [
	      { visibility: "off" }
	    ]
	  },{
	    featureType: "poi.local",
	    elementType: "labels",
	    stylers: [
	      { hue: "#0abec9" }
	    ]
	  },{
	    featureType: "poi.local",
	    elementType: "labels.text.fill",
	    stylers: [
	      { hue: "#0abec9" },
	      { lightness: 30 }
	    ]
	  }
	  ];
	  var mapOptions = {
	    zoom: 16,
	    center: new google.maps.LatLng(50.074010, 14.439301),
	    mapTypeControlOptions: {
	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	    }
	  };
	  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	  var marker = new google.maps.Marker({
	    position: mapOptions.center,
	    map: map,
	    icon:'/images/map_pin.png'
	  });
	  
	  var styledMap = new google.maps.StyledMapType(styles,
		{name: "Styled Map"});
	  map.mapTypes.set('map_style', styledMap);
	  map.setMapTypeId('map_style');
	}

///===========================================