
       var map = null; 
	   function carregar(){
		   var latlng = new google.maps.LatLng(-29.767954,-57.071657);

		   var myOptions = {
			 zoom: 12,
			 center: latlng,
			 mapTypeId: google.maps.MapTypeId.ROADMAP
		   };

		   //criando o mapa
		   map = new google.maps.Map(document.getElementById("mapa"), myOptions);



	   }



		 function marcar(){
				 var endereco = document.getElementById("endereco").value ;
				 //alert(endereco)
				 geocoder = new google.maps.Geocoder();        
				 geocoder.geocode({'address':endereco}, function(results, status){ 
					 if( status = google.maps.GeocoderStatus.OK){
					   latlng = results[0].geometry.location;
					   markerInicio = new google.maps.Marker({position: latlng,map: map});        
					   map.setCenter(latlng); 
				   }            
			   });
		 }