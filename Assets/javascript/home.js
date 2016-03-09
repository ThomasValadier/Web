$(document).ready(function(){
    $(".locate-btn").on('click', function(){
          
    if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(function(position){
            var geocodingAPI = 'https://maps.google.com/maps/api/geocode/json?latlng=' + position.coords.latitude  +',' + position.coords.longitude + '&sensor=false&key=AIzaSyDHBVEPD8KEM4Zs50uKlGDEJHHAA2UFfN4'
                  
            $.getJSON(geocodingAPI, function (json) {
                if (json.status == "OK") {
                    var result = json.results[0];
                    $(".location").val(result.formatted_address);
                }
            });
     });
        }
    });
})