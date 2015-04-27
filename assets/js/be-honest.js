$(document).ready(function () {

  window.BH = {
    speakers: $('.speakers').find('.speaker'),
    modal: {
      main: $('#modal'),
      card: $('#modal .card'),
      mask: $('#modal .mask'),
      info: $('#modal .info'),
      image: $('#modal .image img')
    }
  };

  BH.speakers.on('click', function (e) {
    var speaker = $(this);
    if ( speaker.tagName == 'A' ) {
      return;
    } else {
      show_speaker_modal(speaker);
    }
  });

  BH.modal.mask.on('click', function (e) {
    hide_speaker_modal();
  });

  function show_speaker_modal (speaker) {
    BH.modal.image.attr('src', speaker.data('image'));
    BH.modal.info.html(speaker.html());
    BH.modal.card.css('top', $(window).scrollTop() + ( 0.25 * window.innerHeight ));
    BH.modal.main.fadeIn();
  }

  function hide_speaker_modal () {
    BH.modal.main.fadeOut();
  }
});
