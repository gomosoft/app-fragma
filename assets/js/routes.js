$.fn.vc = function(){ $(this).trigger("viewChanged"); }

window.route = function(where, callback){
   


		

	   switch(where){

	      case "home":

	       var data = {};

           var view = new EJS({url:"views/home.ejs"})
                   .render(data);

           data.view = view;

           var layout = new EJS({url:"views/layout.ejs"}).render(data);

           document.getElementById("content-wrapper").innerHTML = layout;
  




	      break;


	      case "login":

	           var layout = new EJS({url:"views/login.ejs"}).render();

               document.getElementById("content-wrapper").innerHTML = layout;

               var loginRender = function(){
				
					var logh = $(".cont-w").height();
					var doch = $(document).height();
					var offset = ( doch - logh ) / 2;
					
        	       $(".cont-w").css({marginTop : offset});

               }


               $(window).on("resize", loginRender);
               loginRender();
         


	      break;

	       case "map":
	       
	       var data = {};

	       var view = new EJS({url:"views/map.ejs"})
                   .render(data);

           data.view = view;

	       var layout = new EJS({url:"views/layout.ejs"}).render(data);

           document.getElementById("content-wrapper").innerHTML = layout;
    
				

	      break;

	      case "editor":

	       var data = {};
	           data.pic = window.pic;

           var view = new EJS({url:"views/editor.ejs"})
                   .render(data);

           data.view = view;

           var layout = new EJS({url:"views/layout.ejs"}).render(data);


           document.getElementById("content-wrapper").innerHTML = layout;

           window.con.ini_render();
           window.set_frame_controller(null, true);

      


      var startX = 0;
      var startY = 0;
    

       var dragController = function(event, phase, direction, distance){
				
					     
						 
						 deltaX = (event.x - startX) + 5;
						 deltaY = (event.y - startY) + 5;

						 console.log(distance);

						 $("#canvas-image").css({ 
						 	 "-webkit-transform" : "translate3d(" + deltaX + "px," + deltaY + "px,0)" 
						 	,"transform" : "translate3d(" + deltaX + "px," + deltaY + "px,0)" 
						 });

						    startX = event.x;
							startY = event.y;


			};

        $("#cont-wrapper").swipe({
			 swipeStatus : dragController,
			 allowPageScroll : "horizontal"			 
			/*,pinch : function(event, direction){ console.log(direction, event); }
			,
			pinchStatus:function(event, phase, direction, distance , duration , fingerCount, pinchZoom) {

				console.log("pinch")
                                                       
													if(fingers === 2)					
                                                        $(this).css({ 
						 	   									"-webkit-transform" : "escale3d(" + pinchZoom + "," + pinchZoom + ")"						 	
									                         , "transform" : "escale3d(" + pinchZoom + "," + pinchZoom + ")"						 	
									                     });


                                                }                                              */ 
                });

 

	      break;


	   }
	

           window.con.ini_render();	
           $(document).vc();

	if(callback instanceof Function)
		callback(where);

}