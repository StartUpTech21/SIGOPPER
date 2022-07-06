
<section class="pusat-belanja" id="pusat-belanja">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-header" style="float: left;">
                    <h2>LOKASI PUSAT PERBELANJAAN</h2>
                </div>
            </div>
        </div>
        <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header" style="padding: 20px">
                        <div class="row">
            <div class="col-md-4">
                <input type="text" id="origin-input" placeholder="Lokasi anda ..." class="form-control">
            </div>
            <div class="col-md-4">
                <select id="destination-input" class="form-control">

                   <?php
                   $ambilData = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori ");
                   while ($tampilData = mysqli_fetch_array($ambilData)) {
                    $alamat = $tampilData['alamat_tempat'];
                    $nama = $tampilData['nama_tempat'];
                    ?>
                    <option value="<?php echo $alamat ?>"><?php echo $nama ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-4" >
            <div id="mode-selector">
            <p>
                <label>
                    <input name="group1" class="with-gap" type="radio" id="changemode-walking" checked/>
                    <span>Berjalan</span>
                </label>
                <label>
                    <input name="group1" class="with-gap" type="radio" name="type" id="changemode-transit" />
                    <span>Transit</span>
                </label>
                <label>
                    <input name="group1" class="with-gap"  type="radio" id="changemode-driving" />
                    <span>Menyetir</span>
                </label>
            </p>
            </div>
        </div>
    </div>
            </div>
            <!-- <div id="total"></div> -->
            <div class="body" style="padding: 0 !important;position: relative;">
                <div id="info"></div>
                <div id="map" style="width: 100%;height: 400px;position: relative"></div>
            </div>

        </div>
    </div>
</div>

</div>



</section>
<script>

function initMap() {
     var myLatLng = { lat: -1.843678, lng: 109.959504 };
  const map = new google.maps.Map(document.getElementById("map"), {
    mapTypeControl: false,
    center: myLatLng,
    zoom: 13,
  });

  new AutocompleteDirectionsHandler(map);




   var myLatLng = { lat: -1.843678, lng: 109.959504 };
   var mapOptions = {
    center: myLatLng,
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

<?php
$no=1;
$data = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori");
while ($d = mysqli_fetch_array($data)) {
    $namaTempat = $d['nama_tempat'];
    $namaKategori = $d['nama_kategori'];
    $alamatTempat = $d['alamat_tempat'];
    $latTempat = $d['lat_tempat'];
    $lngTempat = $d['lng_tempat'];
    $desTempat = $d['des_tempat'];

    ?>
    var $infoWindows = '<div class="maps-location-info" id="mapsBox">' +
        '<div class="location-info-header">' +
        '<button class="btn-close-infoWindow" onclick="CloseInfo();">' +
        '<i class="material-icons">close</i>' +
        '</button>' +
        '<h2><?php echo $namaTempat ?></h2>' +
        '<span class="budge"><?php echo $namaKategori ?></span>' +
        '</div>' +
        '<ul>' +
        '<li>' +
        '<span class="title">' +
        '<i class="material-icons">location_on</i> Alamat' +
        '</span>' +
        '<p><?php echo $alamatTempat ?>' +
        '</li>' +
        '<li>' +
        '<span class="title">' +
        '<i class="material-icons">edit</i> Deskripsi' +
        '</span>' +
        '<?php echo json_encode($desTempat) ?>' +
        '</li>' +
        '</ul>' +
        '</div>';
    addMarker(<?php echo $latTempat ?>, <?php echo $lngTempat ?>, $infoWindows); 


<?php } ?>

function  addMarker(Lat,Lng,info) {

    var icon = {
    url: "assets/image/marker/marker-red.svg", // url
    scaledSize: new google.maps.Size(32, 32), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
};
   var lokasi = new google.maps.LatLng(Lat, Lng);

   var marker = new google.maps.Marker({
      map: map,
      position: lokasi,
      icon: icon
  }); 
   bindInfoWindow(marker, map, info);


}

function bindInfoWindow(marker, map, infoWindow) {
    google.maps.event.addListener(marker, 'click', function () {
        var info = document.getElementById('info');
        info.innerHTML = infoWindow;
    });
}

function CloseInfo(){
    document.getElementById("mapsBox").style.display = 'none';
}

}

class AutocompleteDirectionsHandler {
  map;
  originPlaceId;
  destinationPlaceId;
  travelMode;
  directionsService;
  directionsRenderer;
  constructor(map) {
    this.map = map;
    this.originPlaceId = "";
    this.destinationPlaceId = "";
    this.travelMode = google.maps.TravelMode.WALKING;
    this.directionsService = new google.maps.DirectionsService();
    this.directionsRenderer = new google.maps.DirectionsRenderer();
    this.directionsRenderer.setMap(map);

    const originInput = document.getElementById("origin-input");
    const destinationInput = document.getElementById("destination-input");
    const modeSelector = document.getElementById("mode-selector");
    // Specify just the place data fields that you need.
    const originAutocomplete = new google.maps.places.Autocomplete(
      originInput,
      { fields: ["place_id"] }
    );
    // Specify just the place data fields that you need.
    const destinationAutocomplete = new google.maps.places.Autocomplete(
      destinationInput,
      { fields: ["place_id"] }
    );

    this.setupClickListener(
      "changemode-walking",
      google.maps.TravelMode.WALKING
    );
    this.setupClickListener(
      "changemode-transit",
      google.maps.TravelMode.TRANSIT
    );
    this.setupClickListener(
      "changemode-driving",
      google.maps.TravelMode.DRIVING
    );
    this.setupPlaceChangedListener(originAutocomplete, "ORIG");
    this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
  }
  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  setupClickListener(id, mode) {
    const radioButton = document.getElementById(id);

    radioButton.addEventListener("click", () => {
      this.travelMode = mode;
      this.route();
    });
  }
  setupPlaceChangedListener(autocomplete, mode) {
    autocomplete.bindTo("bounds", this.map);
    autocomplete.addListener("place_changed", () => {
      const place = autocomplete.getPlace();

      if (!place.place_id) {
        window.alert("Please select an option from the dropdown list.");
        return;
      }

      if (mode === "ORIG") {
        this.originPlaceId = place.place_id;
      } else {
        this.destinationPlaceId = place.place_id;
      }

      this.route();
    });
  }
  route() {
    if (!this.originPlaceId || !this.destinationPlaceId) {
      return;
    }

    const me = this;

    this.directionsService.route(
      {
        origin: { placeId: this.originPlaceId },
        destination: { placeId: this.destinationPlaceId },
        travelMode: this.travelMode,
      },
      (response, status) => {
        if (status === "OK") {
          me.directionsRenderer.setDirections(response);
        } else {
          window.alert("Directions request failed due to " + status);
        }
      }
    );
  }






}
   
</script>