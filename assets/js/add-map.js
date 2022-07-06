


var alamat = document.getElementById('alamat');
var lat = document.getElementById('lat');
var lng = document.getElementById('lng');

var alamatAutocomlete = new google.maps.places.Autocomplete(alamat);

google.maps.event.addListener(alamatAutocomlete, 'place_changed', function() {
	var pl = alamatAutocomlete.getPlace();
		lat.value = pl.geometry.location.lat();
		lng.value = pl.geometry.location.lng();
})