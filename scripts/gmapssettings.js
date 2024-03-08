// Karte initialisieren
    function initMap() {
        const positionZwickau = { lat: 50.65554055328061, lng: 12.506884678967293 };
		const positionAuerbach = { lat: 50.51261278891092, lng: 12.376719175402691 };
		const positionCenter = { lat: 50.59118602821341, lng: 12.44817593453857 };
        /*const positionErfurt = { lat: 50.97563854616416, lng: 11.072758434104886 };
        const positionCenter = { lat: 50.825, lng: 11.8 };*/
        
		// Karteneinstellungen               
        let targetZoom = 10;
        if  (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ||
            (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.platform))) {
                targetZoom = 9;
            }
        
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: targetZoom,
            center: positionCenter,
            mapId: "8130d9c10de19e64",
            streetViewControl: false,
            mapTypeControl: false,
        });
                
        // Markeroptionen
        const markerZwickau = new google.maps.Marker({
            position: positionZwickau,
            map,
        });
		const markerAuerbach = new google.maps.Marker({
            position: positionAuerbach,
            map,
        });
        /*const markerErfurt = new google.maps.Marker({
            position: positionErfurt,
            map,
        });*/

        // Places abfragen
        const requestZwickau = {
            placeId: "ChIJZ98WEAYtp0cRMPqEKIawvMU",
            fields: ["name", "formatted_address", "rating", "user_ratings_total", "url"],
          };
		const requestAuerbach = {
            placeId: "ChIJOTt8RiPboEcRms3Ycg0HDik",
            fields: ["name", "formatted_address", "url"],
          };
        /*const requestErfurt = {
            placeId: "ChIJt8sJxXMNpEcRWx8AFGD8Ss8",
            fields: ["name", "formatted_address", "url"],
          };*/ 
        const infowindowZwickau = new google.maps.InfoWindow();
		const infowindowAuerbach = new google.maps.InfoWindow();
        //const infowindowErfurt = new google.maps.InfoWindow();
        const service = new google.maps.places.PlacesService(map);

        //Content Marker und Bewertung Zwickau
        service.getDetails(requestZwickau, (place, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK && place) {
                    let content = '<h6>{{PLACENAME}}</h6>{{FORMATTED_ADDRESS}}<br><a href="{{HREF_BUSINESS}}"><span>In Google Maps ansehen</span></a>';
                    
                    content = content.replace("{{PLACENAME}}", place.name);
                    content = content.replace("{{FORMATTED_ADDRESS}}", place.formatted_address);
                    content = content.replace("{{HREF_BUSINESS}}", place.url);
                    
                    infowindowZwickau.setContent(
                        content
                    );
                    
                    
                    
                    let contentRating = '<strong class="fs-5">Google-Bewertung</strong><br><span class="text-muted font-weight-bold">{{CURRENT_RATING_NUM}}&nbsp&nbsp</span><span class="fs-5">{{CURRENT_RATING_STARS}}</span><br><a href="https://search.google.com/local/reviews?placeid=ChIJZ98WEAYtp0cRMPqEKIawvMU"><span>{{CURRENT_RATING_COUNT}} Rezensionen</span></a>';
                    let tempSpans = '';
                    
                    //place.rating = place.rating - 1.1; //Bewertung testen
                    place.rating = Math.round(place.rating * 10) / 10;
                    let ratingInt = parseInt(Math.floor(place.rating));
                    
                    for( let i = 0; i < ratingInt; i++ ) {
                        tempSpans += '<i class="bi bi-star-fill text-warning"></i>';
                    }
                    
                    let percentRating = ((place.rating - ratingInt) * 100) ;
                    if(percentRating >= 75) {
                        tempSpans += '<i class="bi bi-star-fill text-warning"></i>';
                    }
                    else if(percentRating >= 25) {
                        tempSpans += '<i class="bi bi-star-half text-warning"></i>';
                    }
                    else if(ratingInt != 5){
                        tempSpans += '<i class="bi bi-star text-warning"></i>';
                    }
                    
                    for( let i = 0; i < (4 - ratingInt); i++ ) {
                        tempSpans += '<i class="bi bi-star text-warning"></i>';
                    }
                    
                    contentRating = contentRating.replace("{{CURRENT_RATING_COUNT}}", place.user_ratings_total);
                    contentRating = contentRating.replace("{{CURRENT_RATING_STARS}}", tempSpans); //Variablen mit Content ersetzen
                    contentRating = contentRating.replace("{{CURRENT_RATING_NUM}}", place.rating);
                    
                    let targetDiv = document.getElementById("googleRatingDiv");
                    targetDiv.innerHTML = contentRating;
                    targetDiv.classList.remove("d-none");
                    
                    
                
                }
            });

		//Content Marker Auerbach
        service.getDetails(requestAuerbach, (place, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK && place) {
                    let content = '<h6>{{PLACENAME}}</h6>{{FORMATTED_ADDRESS}}<br><a href="{{HREF_BUSINESS}}"><span>In Google Maps ansehen</span></a>';
                    
                    content = content.replace("{{PLACENAME}}", place.name);
                    content = content.replace("{{FORMATTED_ADDRESS}}", place.formatted_address);
                    content = content.replace("{{HREF_BUSINESS}}", place.url);
                    
                    infowindowAuerbach.setContent(
                        content
                    );
                }
            });

        /*//Content Marker Erfurt
        service.getDetails(requestErfurt, (place, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK && place) {
                    let content = '<h6>{{PLACENAME}}</h6>{{FORMATTED_ADDRESS}}<br><a href="{{HREF_BUSINESS}}"><span>In Google Maps ansehen</span></a>';
                    
                    content = content.replace("{{PLACENAME}}", place.name);
                    content = content.replace("{{FORMATTED_ADDRESS}}", place.formatted_address);
                    content = content.replace("{{HREF_BUSINESS}}", place.url);
                    
                    infowindowErfurt.setContent(
                        content
                    );
                }
            }); */
			
        google.maps.event.addListener(markerZwickau, "click", function () {
            infowindowZwickau.open(map, this);
        });
		google.maps.event.addListener(markerAuerbach, "click", function () {
            infowindowAuerbach.open(map, this);
        });
        /*google.maps.event.addListener(markerErfurt, "click", function () {
            infowindowErfurt.open(map, this);
        });*/
    }