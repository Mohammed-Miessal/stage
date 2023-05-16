//  $(document).ready(function() {
//      setTimeout(function() {
//          $('.alert').fadeOut('slow');
//      }, 3000);
//  });

//    $(document).ready(function() {
//      $('#search-btn').on('click', function() {
//        var value = $('#search').val().toLowerCase();
//        $('#myTable tbody tr').filter(function() {
//          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//        });
//      });
//    });
$(document).ready(function() {
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 3000);
});



$(document).ready(function() {
    $(".search").keyup(function () {
      var searchTerm = $(".search").val().toLowerCase();
      var listItem = $('#myTable tbody').children('tr');
      $.each(listItem, function() {
        var cells = $(this).find('td');
        var match = false;
        cells.each(function() {
          if ($(this).text().toLowerCase().indexOf(searchTerm) > -1) {
            match = true;
            return false;
          }
        });
        if (match) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
      var jobCount = $('#myTable tbody tr:visible').length;
      $('.counter').text(jobCount + ' item');
      if(jobCount == '0') {
        $('.no-result').show();
      } else {
        $('.no-result').hide();
      }
    });
  });
  
