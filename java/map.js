function loadMap() {
      	var map;
   	    var bounds = new google.maps.LatLngBounds();
        var Maragondon = {lat: 14.2530, lng: 120.7350};
        var map = new google.maps.Map(document.getElementById('maps'), {
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
        '<h3>Welcome to Maragondon Barangay Bucal 1 </h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Bucal+I,+Maragondon,+Cavite/@14.2698269,120.7375751,16z/data=!3m1!4b1!4m5!3m4!1s0x33bd864c613d48cf:0x3cc383beb98f39f7!8m2!3d14.2687377!4d120.7421793">Click to see in google map of Barangay Bucal 1</a></p>' +
         '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 2 </h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Bucal+II,+Maragondon,+Cavite/@14.2741229,120.7458221,16z/data=!3m1!4b1!4m5!3m4!1s0x33bd87ac586e5fdf:0xa31b246578538898!8m2!3d14.2752698!4d120.7508">Click to see in google map of Barangay  Bucal 2</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 3A Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Bucal+III+A,+Maragondon,+Cavite/@14.2773268,120.7564641,16z/data=!3m1!4b1!4m5!3m4!1s0x33bd8707020b3347:0x25e7bd9113224ee7!8m2!3d14.276221!4d120.7622933">Click to see in google map of Bucal 3A</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 3B Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Bucal+III+B,+Maragondon,+Cavite/@14.2767113,120.752283,16z/data=!3m1!4b1!4m5!3m4!1s0x33bd87a9eb620485:0xb59fc70cacf83e6a!8m2!3d14.2770384!4d120.7565467">Click to see in google map of Bucal 3B</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 4A Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Bucal+IV+A,+Maragondon,+Cavite/@14.2737131,120.7725697,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd871bfb144f91:0x6e44487bd85bca26!8m2!3d14.2740419!4d120.7730672">Click to see in google map of Bucal 4A</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Bucal 4B Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Bucal+IV+B,+Maragondon,+Cavite/@14.2745672,120.7668318,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd8704ae3dc099:0xb9511c0791719ab3!8m2!3d14.274655!4d120.7687577">Click to see in google map of Bucal 4B</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Caingin Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Caingin+Barangay+Hall/@14.2704355,120.7349729,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd864a5754ee4d:0xffd03fad32911a94!8m2!3d14.2704303!4d120.7371616">Click to see in google map of Caingin</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Garita A Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Garita+I+A,+Cavite/@14.2799683,120.7315617,16z/data=!3m1!4b1!4m5!3m4!1s0x33bd87b616262b3f:0x869349eb33711032!8m2!3d14.2798983!4d120.7364319">Click to see in google map of Garita 1 A</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Garita B Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Garita+I+B,+Maragondon,+Cavite/@14.2771134,120.7383061,16z/data=!3m1!4b1!4m5!3m4!1s0x33bd87b3db2fa627:0xdf8b3d07bacfb5f7!8m2!3d14.2770397!4d120.7428977">Click to see in google map of Garita 1 B</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Layong Mabilog Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Layong+Mabilog,+Maragondon,+Cavite/@14.2316756,120.7564287,15z/data=!3m1!4b1!4m5!3m4!1s0x33bd8683bf6372c5:0x5a48b78f42ced849!8m2!3d14.2333634!4d120.7637298">Click to see in google map of Layong Mabilog </a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Mabato Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Mabato,+Cavite/@14.2169002,120.7578666,15z/data=!3m1!4b1!4m5!3m4!1s0x33bd84302d4a0e17:0xd3aece36a5dfa492!8m2!3d14.2177236!4d120.7737855">Click to see in google map of Mabato</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 1 (Balayungan) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Pantihan+I+(Balayungan),+Cavite/@14.2606141,120.7790538,15z/data=!3m1!4b1!4m5!3m4!1s0x33bd86dbe6a61be5:0xe77ccccde540a99c!8m2!3d14.258121!4d120.7895855">Click to see in google map of Pantihan 1 (Balayungan)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 2 Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Pantihan+II+(Sagbat),+Cavite/@14.233913,120.7838488,14z/data=!3m1!4b1!4m5!3m4!1s0x33bd86b288a33cb3:0x207f07ee219f34fd!8m2!3d14.2388059!4d120.7982029">Click to see in google map of Pantihan 2</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 3 (Pook na Munti) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Pantihan+III+(Pook+na+Munti),+Cavite/@14.2071245,120.7991328,14z/data=!3m1!4b1!4m5!3m4!1s0x33bd83ee39dab455:0x3bb6679f87e39cfe!8m2!3d14.2075326!4d120.8183077">Click to see in google map of Pantihan 3 (Pook na Munti)</a></p>' +
        '</div>'],
        
        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pantihan 4 (Pulo ni Sara) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Pantihan+IV+(Pook+ni+Sara),+Cavite/@14.179533,120.8143163,14z/data=!3m1!4b1!4m5!3m4!1s0x33bd83a0d98edeeb:0x54314a28c4adac25!8m2!3d14.1860569!4d120.8240513">Click to see in google map of Pantihan 4 (Pulo ni Sara)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Sta. Mercedes (Patungan) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Sta.+Mercedes+Ville/@14.2781533,120.7195393,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd87d25f51fd31:0x2f99c41c2db278f9!8m2!3d14.2781481!4d120.721728">Click to see in google map of Sta. Mercedes (Patungan)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pinagsanhan A (Ibayo) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/search/Pingsanhan+a,+Cavite/@14.2713398,120.7210313,15z/data=!3m1!4b1">Click to see in google map of Pinagsanhan A (Ibayo)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Pinagsanhan B (Ibayo) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Pinagsanhan+Elementary+School/@14.2713114,120.7275974,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd86347a3be089:0x9a2f610e95786c97!8m2!3d14.2713062!4d120.7297861">Click to see in google map of Pinagsanhan B (Ibayo)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 1A Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Poblacion+I+A,+Maragondon,+Cavite/@14.2749513,120.7280191,16z/data=!3m1!4b1!4m5!3m4!1s0x33bd87cad9484017:0x1ee5060158d61308!8m2!3d14.275883!4d120.7328396">Click to see in google map of Poblacion 1 A</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 1B (Ibayo) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Poblacion+I+B,+Maragondon,+Cavite/@14.2738448,120.7331589,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd87b5540af5ed:0xe1186f060713df0c!8m2!3d14.2739095!4d120.7353542">Click to see in google map of Poblacion 1 B (Ibayo)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 2A (Ibayo) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Poblacion+II+A,+Maragondon,+Cavite/@14.2727551,120.7367562,18z/data=!3m1!4b1!4m5!3m4!1s0x33bd864ad62b697d:0xbc5b8ff179cba440!8m2!3d14.2728547!4d120.738228">Click to see in google map of Poblacion 2 A</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Poblacion 2B (Ibayo) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Poblacion+II+B,+Maragondon,+Cavite/@14.2738256,120.7368412,18z/data=!4m5!3m4!1s0x33bd87b4d7ee087f:0x2fbd6e2fa9fa40f0!8m2!3d14.2741477!4d120.738228">Click to see in google map of Poblacion 2B (Ibayo)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay San Miguel 1 A (Caputatan) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/San+Miguel+I+A+(Caputatan),+Cavite/@14.2873146,120.7351036,15z/data=!3m1!4b1!4m5!3m4!1s0x33bd87bb79c49477:0xc61565c0dedf437!8m2!3d14.2868396!4d120.7421793">Click to see in google map of San Miguel A (Caputatan)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay San Miguel 1 B (Caputatan) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/San+Miguel+I+B,+Maragondon,+Cavite/@14.2839641,120.7415518,15z/data=!3m1!4b1!4m5!3m4!1s0x33bd87a5b11ab29f:0x876e8a02f9cfbfd7!8m2!3d14.2830273!4d120.7508">Click to see in google map of San Miguel B (Caputatan)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Talipusngo Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Talipusngo,+Maragondon,+Cavite/@14.210726,120.7360953,14z/data=!3m1!4b1!4m5!3m4!1s0x33bd85ca389221bd:0xae059c238ddf791e!8m2!3d14.216494!4d120.7551101">Click to see in google map of Talipusngo</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Tulay Silangan (Mabacao) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Tulay+Silangan,+Maragondon,+Cavite/@14.2499995,120.7459663,14z/data=!3m1!4b1!4m5!3m4!1s0x33bd86f4a115898b:0xa63b4b96663ace2d!8m2!3d14.2524091!4d120.7752219">Click to see in google map of Tulay Silangan (Mabacao)</a></p>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Welcome to Maragondon Barangay Tulay Kanluran (Mabacao) Cavite</h3>' +
         '<p><a id="link" target="_blank" href="https://www.google.com/maps/place/Tulay+Kanluran,+Maragondon,+Cavite/@14.2104688,120.6450159,12z/data=!3m1!4b1!4m5!3m4!1s0x33bd858bcba758d9:0x1885f331273fc6e6!8m2!3d14.1854441!4d120.7005044">Click to see in google map of Tulay Kanluran (Mabacao)</a></p>' +
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