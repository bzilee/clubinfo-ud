$(document).ready(function()
{

  $('#submit').click(function(e)
  {
    console.log("Clic sur bouton");
    e.preventDefault();
    console.log("Annulation effet par defaut");

      $.post(
          'myfaculty/test/b_s', //'get.php',

          {name:$('#name').val()},//'TOTO'

          function (data)
          {

          $('#loader').css({display:'inline-block'});
          $('.loader p').append(data);
          console.log("Requette Effectuée");
          },

         'text',

      );
      console.log("Suite dinstructions apres $.post");

  });


  //-------------------------------------------------
  $('#submit1').click(function(e)
  {
    console.log("Clic sur bouton");
    e.preventDefault();
    console.log("Annulation effet par defaut");

      $.post(
          'myfaculty/ajax/messages', //'get.php',

          {name:$('#name').val()},//'TOTO'

          function (data)
          {

          $('#loader').css({display:'inline-block'});
          $('.loader p').append(data);
          console.log("Requette Effectuée");
          },

         'text',

      );
      console.log("Suite dinstructions apres $.post");

  });



});
