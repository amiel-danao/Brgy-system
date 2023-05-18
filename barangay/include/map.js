 function loadMap() {
      	var map;
   	    var bounds = new google.maps.LatLngBounds();
        var Maragondon = {lat: 14.2530, lng: 120.7350};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: Maragondon
        });


	var markers = [
        ['Barangay Bucal 1', 14.2698165, 120.7375751],
        ['Barangay Bucal 2', 14.2741125, 120.7458221],
        ['Barangay Bucal 3A', 14.2773164, 120.7564641],
        ['Barangay Bucal 3B', 14.2767009, 120.752283],
        ['Barangay Bucal 4A', 14.2737079, 120.7725697],
        ['Barangay Bucal 4B', 14.274562, 120.7668318],
        ['Barangay Caingin Pob', 14.2704846, 120.7348679],
        ['Barangay Garita 1A', 14.2799579, 120.7315617],
        ['Barangay Garita 1B', 14.2771028, 120.7339287],
        ['Barangay Layong Mabilog', 14.2385798, 120.7493795],
        ['Barangay Mabato', 14.2168789, 120.7491118],
        ['Barangay Pantihan 1 (Balayungan)', 14.2605933, 120.7790538],
        ['Barangay Pantihan 2', 14.2338714, 120.7838489],
        ['Barangay Pantihan 3 (Pook na Munti)', 14.2070833, 120.8078877],
        ['Barangay Pantihan 4 (Pulo ni Sara)', 14.1794914, 120.8143164],
        ['Barangay Sta. Mercedes (Patungan)', 14.2715681, 120.7041037],
        ['Barangay Pinagsanhan A (Ibayo)', 14.2708636, 120.7259515],
        ['Barangay Pinagsanhan B (Ibayo)', 14.2452443, 120.7012109],
        ['Barangay Poblacion 1A', 14.2749409, 120.7280191],
        ['Barangay Poblacion 1B', 14.2738396, 120.7331589],
        ['Barangay Poblacion 2A', 14.2727525, 120.7356619],
        ['Barangay Poblacion 2B', 14.273823, 120.7357468],
        ['Barangay San Miguel A (Caputatan)', 14.2872938, 120.7351036],
        ['Barangay San Miguel B (Caputatan)',14.2839433, 120.7415518],
        ['Barangay Talipusngo', 14.2106844, 120.7360954],
        ['Barangay Tulay Silangan (Mabacao)', 14.2499579, 120.7459663],
        ['Barangay Tulay Kanluran (Mabacao)', 14.2103024, 120.6450164]
    ];
                        
    // Info window content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 1 </h3>' +
        '<p><a id="link" href="bucal1">Click to Link in Bucal 1 Page </a></p>' + '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 2 </h3>' +
        '<p><a id="link" href="bucal2">Click to Link in Bucal 2 Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 3A Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Bucal 3A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 3B Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Bucal 3B Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 4A Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Bucal 4A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 4B Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Bucal 4B Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Caingin Pob Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Caingin Pob Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Garita 1A Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Garita 1A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Garita 1B Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Garita 1B Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Layong Mabilog Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Layong Mabilog Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Mabato Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Mabato Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 1 (Balayungan) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Pantihan 1 (Balayungan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 2 Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Pantihan 2 Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 3 (Pook na Munti) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Pantihan 3 (Pook na Munti) Page </a></p>' +
        '</div>'],
        
        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 4 (Pulo ni Sara) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Pantihan 4 (Pulo ni Sara) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Sta. Mercedes (Patungan) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Sta. Mercedes (Patungan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pinagsanhan A (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Pinagsanhan A (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pinagsanhan B (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Pinagsanhan B (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 1A Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Poblacion 1A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 1B (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Poblacion 1B (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 2A (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Bucal III Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 2B (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Poblacion 2B (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay San Miguel A (Caputatan) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in San Miguel A (Caputatan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay San Miguel B (Caputatan) Cavite</h3>' +
        '<p><a id="link" href="#ww.amazon.com/">Click to Link in San Miguel B (Caputatan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Talipusngo Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Talipusngo Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Tulay Silangan (Mabacao) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Tulay Silangan (Mabacao) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Tulay Kanluran (Mabacao) Cavite</h3>' +
        '<p><a id="link" href="#">Click to Link in Tulay Kanluran (Mabacao) Page </a></p>' +
        '</div>']

        ];

        var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
        for( i = 0; i < markers.length; i++ ) {
	        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
	        bounds.extend(position);
	        marker = new google.maps.Marker({
	            position: position,
	            map: map,
	          //  icon:image,
	            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
       
    }   
 }