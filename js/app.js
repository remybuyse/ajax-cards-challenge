var app = {
  init: function() {
    console.info('App init');

    app.$form = $('#form-add-card');
    app.$filter = $('#filter');
    app.$listing = $('#listing');

    app.$listing.on('click', '.delete-card', app.deleteCard);
    app.$form.on('submit', app.sendNewCard);
    app.$filter.on('keyup', app.filterCards);

  },
  filterCards: function() {
    var url = 'filter.php?term='+app.$filter.val();

    $.ajax(url)
      .done(function(data) {
        app.$listing.html(data);
      });
  },
  sendNewCard: function(evt) {
    evt.preventDefault();

    var formData = app.$form.serializeArray();

    $.ajax('add.php', {method:'POST', data: formData})
      .done(function(data){
        // Je transforme data en objet jQuery
        var $card = $(data);
        // Je l'ajoute en haut (prepend) de mon listing
        app.$listing.prepend($card);
        // Je masque card puis le fait apparaitre progressivement
        $card.hide().fadeIn();
      })
      .fail(function(xhr) {
        console.log(xhr);
      })
      .always(function() {
        // on vide les champs du formulaire
        app.$form.find('input').val('');
      });
  },
  deleteCard: function(evt){
    evt.preventDefault();

    // On transforme this en objet jQuery, du coup il bénéficie des méthodes jQuery
    var $button = $(this);
    var url = $button.attr('href');

    $button.text('En cours...').attr('disabled','disabled');

    $.ajax(url)
      .done(function(data) {
        $button.closest('.card-container').fadeOut();
        $('.alert-success')
          .text(data)
          .removeClass('hidden')
          .hide()
          .fadeIn()
          .delay(3000)
          .fadeOut();
      })
      .fail(function(xhr) {
        $('.alert-danger')
          .text(xhr.responseText)
          .removeClass('hidden')
          .hide()
          .fadeIn()
          .delay(3000)
          .fadeOut();

        $button.text('Supprimer').removeAttr('disabled');
      });

  },

};

$(app.init);
