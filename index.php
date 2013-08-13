
<!DOCTYPE html>
<html lang="es-CO">

<head>
 
 <meta charset="utf-8" />

 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  

 <title>Fragma Club App</title>

 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

 <link rel="stylesheet/less" href="assets/less/style.less" />

 <script src="assets/js/jquery.js"></script>
 <script src="assets/js/swipe.min.js"></script>
 <script src="assets/js/phpjs.js"></script>
 <script src="assets/js/controller.js"></script>
 <script src="assets/js/shake.js"></script>
 <script src="assets/js/pgap.controller.js"></script>

 
 <script>
  less = {
    env: "development",
    async: false,
    fileAsync: false,
    poll: 500,
    functions: {},
    dumpLineNumbers: "comments",
    relativeUrls: false    
  };
</script>

 <script src="assets/js/less.js"></script>
 <script>

 less.watch();

 
  function test(){

     $.ajax({

       url : "test.php",
       success : function(rs){

            alert(rs);

       },
       error : function(err){
 
          alert(err.responseText);

       }

     })

  }


 //var inte = setInterval(function(){

 	//location.reload();

 //}, 15000);

 </script>

 <script src="assets/js/bootstrap.min.js"></script>

</head>

<body>

 <div class="first-container">
 	 <header class="row">
 	 	<h1 id="logo" class="hidden">Fragma Club</h1>
 	 	<img src="assets/img/logo.png" alt="" />

 	 	<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

 	 </header>

 	 <content clas="row clearfix">
      
      <div class="events-slider">
 	 	<ul class="events" style="overflow:hidden;">

      <li style="background:url(assets/img/evento2.jpg); " class="cover">
       
           <span class="legend">
             <b>Lukas Guerrero</b> <br />
                Sábado 27 de Julio - Open Set Alfonso Padilla 
           </span>
  
      </li>

 	 	
    	<li style="background:url(assets/img/evento1.jpg); " class="cover">
 			 
 	 				 <span class="legend">
 	 				 	 <b>Erick Kantona</b> <br />
 	 				 	    Viernes 09 de Agosto - ERICK KANTONA #HIPHOUSE
 	 				 </span>
 	
 	 		</li>


      <li style="background:url(assets/img/evento.jpg); " class="cover">
       
           <span class="legend">
             <b>Rumba Urbano Latino</b> <br />
                Sábado 09 de Agosto - YAMIL MACITA #CROSSOVER
           </span>
  
      </li>



 	 


 	 	</ul>
 	  </div>
 	 	
 	 </content>

 </div>



 	 			
          <?php if(isset($_GET["dark"])){ ?>
    <footer class="fixed-bottom">
      <div class="navbar" >
        <ul class="nav navbar-nav" id="menu">
 	 				<li class="nav"><a href="#" rel="norel">
 	 					<figure class="sprite-white sprite-home"> 
 	 					&nbsp;	 						
 	 					</figure>
 	 				</a></li>
 	 				<li class="nav"><a href="#" rel="norel">
 	 					<figure class="sprite-white sprite-geo"> 
 	 					&nbsp;	 						
 	 					</figure>
 	 				</a></li>
 	 				<li class="nav"><a href="#" rel="norel">
 	 					<figure class="sprite-white sprite-cam"> 
 	 					&nbsp;	 						
 	 					</figure>
 	 				</a></li>
 	 				<li class="nav"><a href="#" rel="norel">
 	 					<figure class="sprite-white sprite-list"> 
 	 					&nbsp;	 						
 	 					</figure>
 	 				</a></li>
 	 				<li class="nav"><a href="#" rel="norel">
 	 					<figure class="sprite-white sprite-inf"> 
 	 					&nbsp;	 						
 	 					</figure>
 	 				</a></li>
         </ul>
      </div>
   </footer>   
        <?php }else{ ?>
      <footer class="fixed-bottom color">
       <div class="navbar" >
        <ul class="nav navbar-nav" id="menu">        
            <li class="nav"><a href="#" rel="norel">
            <figure class="sprite sprite-home"> 
            &nbsp;              
            </figure>
          </a></li>
          <li class="nav"><a href="#" rel="norel">
            <figure class="sprite sprite-geo"> 
            &nbsp;              
            </figure>
          </a></li>
          <li class="nav"><a href="#" rel="norel">
            <figure class="sprite sprite-cam"> 
            &nbsp;              
            </figure>
          </a></li>
          <li class="nav"><a href="#" rel="norel">
            <figure class="sprite sprite-list"> 
            &nbsp;              
            </figure>
          </a></li>
          <li class="nav"><a href="#" rel="norel">
            <figure class="sprite sprite-inf"> 
            &nbsp;              
            </figure>
          </a></li>
         </ul> 
      </div>
   </footer>    
          <?php } ?>


 	 		
 	 

</body>

</html>