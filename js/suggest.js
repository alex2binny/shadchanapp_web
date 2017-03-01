$(document).ready(function(){

  /* Left and right arrow functionality */
  $('#leftArrow').hover( function() {
    $('#highlightArea').toggleClass('hidden');
  });

  $('#rightArrow').hover( function() {
    $('#highlightArea').toggleClass('hidden');
  });


  $('.scroll-wrapper, .scroller').dragscrollable({
      dragSelector: '.row',
      acceptPropagatedEvent: false
  });

  /* Disable for now */
  /* adds dynamic content for modals */
  $('.linkForModal').on( "click", function() {
    // change name dynamically
    var input1 = $( this ).find("input[name='name']").val();
    $("#media-heading").html( input1 );

    // change bio dynamically
    var input2 = $( this ).find("input[name='message']").val();
    $("#text-left").html( input2 );
  });

/*  */


});
