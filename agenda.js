$(document).ready(function() {
    $('#agenda-block li').corner('3px');
  
    $('#agenda-block li').click(function () {
        $('ul', this).toggle("show");
    });
});