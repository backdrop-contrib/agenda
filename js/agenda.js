$(document).ready(function() {
    $('#agenda-block li').corners('3px');
  
    $('#agenda-block li').click(function () {
        $('ul', this).toggle("show");
    });

});