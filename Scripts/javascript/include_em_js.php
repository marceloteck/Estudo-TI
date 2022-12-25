<!--starthtml-->  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!--endhtml--><!--startJs--> <script> function IncludeJS(pagina, divID){
  $.ajax({
    url: pagina,
    type: 'GET',
    success: function(data) {
    $(divID).html(data);
    $('#DivInclude').select2();
    }
  });
} </script> <!--endJs--><!-- /** --TITULO--:Include_em_Js| --LINK--:./Scripts/javascript/include_em_js.php| **/ -->