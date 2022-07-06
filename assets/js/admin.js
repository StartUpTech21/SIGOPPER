



$(document).ready(function(){
    $('.collapsible').collapsible();

    $('.user-dropdown').dropdown({
        alignment: 'right',
        inDuration: 300,
    });

    $('.btn-collapse-navbar').on('click', function(){
        $('body').toggleClass('body-open');
    });

    $('.dataTable').DataTable({
        responsive: true
    });
    $('.dataTables_length label select').formSelect();
    $('.select').formSelect();


  $('.modal').modal();

  $('.btn-close-infoWindow').on('click', function(){
        $('.maps-location-info').hidde();
        alert('ok');
  });

});
