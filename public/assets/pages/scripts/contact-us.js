var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
	            lat: 25.8432961,
				lng: -80.3314801,
			  });
			   var marker = map.addMarker({
		            lat: 25.8432961,
					lng: -80.3314801,
		            title: 'Expreço - smart price',
		            infoWindow: {
		                content: "<b>Expreço</b> 7950 NW 77th Street ‐ Suite # C-4<br>Miami, FL 33166"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();
