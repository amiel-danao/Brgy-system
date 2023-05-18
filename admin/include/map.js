 function loadMap() {
      	var map;
   	    var bounds = new google.maps.LatLngBounds();
        var Maragondon = {lat: 14.2530, lng: 120.7350};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: Maragondon
        });


	var markers = [
        ['Barangay Bucal 1', 14.2687, 120.7422],
        ['Barangay Bucal 2', 14.2753, 120.7508],
        ['Barangay Bucal 3A', 14.2762, 120.7623],
        ['Barangay Bucal 3B', 14.2763, 120.7575],
        ['Barangay Bucal 4A', 14.2740, 120.7731],
        ['Barangay Bucal 4B', 14.2747, 120.7688],
        ['Barangay Caingin Pob', 14.2705, 120.7384],
        ['Barangay Garita 1A', 14.2794, 120.7375],
        ['Barangay Garita 1B', 14.2770, 120.7429],
        ['Barangay Layong Mabilog', 14.2334, 120.7637],
        ['Barangay Mabato', 14.2169, 120.7578],
        ['Barangay Pantihan 1 (Balayungan)', 14.2604, 120.7879],
        ['Barangay Pantihan 2', 14.2338, 120.8010],
        ['Barangay Pantihan 3 (Pook na Munti)', 14.2075, 120.8172],
        ['Barangay Pantihan 4 (Pulo ni Sara)', 14.1786, 120.8294],
        ['Barangay Sta. Mercedes (Patungan)', 14.2232, 120.6562],
        ['Barangay Pinagsanhan A (Ibayo)', 14.2481, 120.6981],
        ['Barangay Pinagsanhan B (Ibayo)', 14.2491, 120.7198],
        ['Barangay Poblacion 1A', 14.2751, 120.7341],
        ['Barangay Poblacion 1B', 14.2735, 120.7367],
        ['Barangay Poblacion 2A', 14.2723, 120.7391],
        ['Barangay Poblacion 2B', 14.2735, 120.7393],
        ['Barangay San Miguel A (Caputatan)', 14.2872, 120.7449],
        ['Barangay San Miguel B (Caputatan)', 14.2830, 120.7518],
        ['Barangay Talipusngo', 14.2128, 120.7545],
        ['Barangay Tulay Silangan (Mabacao)', 14.2548, 120.7684],
        ['Barangay Tulay Kanluran (Mabacao)', 14.2068, 120.7158]
    ];
                        
    // Info window content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Barangay Bucal 1 </h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=BC1" target="_blank">Click to View The Total population of Barangay Bucal 1 Page </a></p>' + '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Bucal 2 </h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=BC2" target="_blank">Click to View The Total population of Barangay Bucal 2 Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Bucal 3A Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=BC3A" target="_blank">Click to View The Total population of Barangay Bucal 3A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Bucal 3B Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=BC3B" target="_blank">Click to View The Total population of Barangay Bucal 3B Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Bucal 4A Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=BC4A" target="_blank">Click to View The Total population of Barangay Bucal 4A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Bucal 4B Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=BC4B" target="_blank">Click to View The Total population of Barangay Bucal 4B Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Caingin Pob Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=CP" target="_blank">Click to View The Total population of Barangay Caingin Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Garita 1A Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=G1A" target="_blank">Click to View The Total population of Barangay Garita A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Garita 1B Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=G1B" target="_blank">Click to View The Total population of Barangay Garita B Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Layong Mabilog Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=LM" target="_blank">Click to View The Total population of Barangay Layong Mabilog Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Mabato Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=MB" target="_blank">Click to View The Total population of Barangay Mabato Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Pantihan 1 (Balayungan) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PT1" target="_blank">Click to View The Total population of Barangay Pantihan 1 (Balayungan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Pantihan 2 Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PT2" target="_blank">Click to View The Total population of Barangay Pantihan 2 Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Pantihan 3 (Pook na Munti) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PT3" target="_blank">Click to View The Total population of Barangay Pantihan 3 (Pook na Munti) Page </a></p>' +
        '</div>'],
        
        ['<div class="info_content">' +
        '<h3>Barangay Pantihan 4 (Pulo ni Sara) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PT4" target="_blank">Click to View The Total population of Barangay Pantihan 4 (Pulo ni Sara) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Sta. Mercedes (Patungan) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=STM" target="_blank">Click to View The Total population of Barangay Sta. Mercedes (Patungan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Pinagsanhan A (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PSA" target="_blank">Click to View The Total population of Barangay Pinagsanhan A (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Pinagsanhan B (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PSB" target="_blank">Click to View The Total population of Barangay Pinagsanhan B (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Poblacion 1A Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PB1A" target="_blank">Click to View The Total population of Barangay Poblacion 1A Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Poblacion 1B (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PB1B" target="_blank">Click to View The Total population of Barangay Poblacion 1B (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Poblacion 2A (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PB2A" target="_blank">Click to View The Total population of Barangay Bucal III Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Poblacion 2B (Ibayo) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=PB2B" target="_blank">Click to View The Total population of Barangay Poblacion 2B (Ibayo) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay San Miguel A (Caputatan) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=SMA" target="_blank">Click to View The Total population of Barangay San Miguel A (Caputatan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay San Miguel B (Caputatan) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=SMB" target="_blank">Click to View The Total population of Barangay San Miguel B (Caputatan) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Talipusngo Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=TLP" target="_blank">Click to View The Total population of Barangay Talipusngo Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Tulay Silangan (Mabacao) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=TSM" target="_blank">Click to View The Total population of Barangay Tulay Silangan (Mabacao) Page </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barangay Tulay Kanluran (Mabacao) Cavite</h3>' +
        '<p><a id="link" href="include/brgy-population/brgy-population.php?brgypopulation=TKM" target="_blank">Click to View The Total population of Barangay Tulay Kanluran (Mabacao) Page </a></p>' +
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