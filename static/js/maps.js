var map;
var labels = 'o';
var labelIndex = 0;
function initialize() {
    var myLatlng = new google.maps.LatLng(25.7866223,-100.2402523);
    var styles = [
        {
            stylers: [
                { hue: "#DDD" },
                { saturation: 0 }
            ]
        },{
            featureType: "road",
            elementType: "geometry",
            stylers: [
                { lightness: 100 },
                { visibility: "simplified" }
            ]
        },{
            featureType: "road",
            elementType: "labels",
            stylers: [
                { visibility: "on" }
            ]
        }
    ];      
    var styledMap = new google.maps.StyledMapType(styles, {name: "Mapa"});  
    var mapOptions = {
        zoom: 19,
        center: myLatlng,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.SATELLITE, 'map_style']
        }
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);  
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');     
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Señales Viales'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);