import 'jquery-validation'

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    $("#contact_form").validate({
      messages: {
        name: "Skriv in ditt namn",
        email: {
          required: "Vi behöver din epost för att kunna kontakta dig",
          email: "Ange en giltig epost-adress",
        },
        foretag: "Skriv in vilket företag du företräder",
        kontaktperson: "Detta fält krävs",
        message: "Du måste skriva ett meddelande",
      },
    });

    $('#send-mail').click(function(e) {
      e.preventDefault()

      if($("#contact_form").valid()){

        const message = $('#message').val() + '<hr><p>'+ $('#name').val()+ ' (' + $('#email').val() +')</p>';

        $.ajax({
          type: 'POST',
          url: 'https://mandrillapp.com/api/1.0/messages/send.json',
          data: {
            'key': 'HqeQyBuKFGBqhUUyUTssWw',
            'message': {
              'from_email': 'hemsidan@workandpassion.se',
              "from_name": $('#name').val(),
              'to': [
                {
                  'email': 'mathias.hedstrom@workandpassion.se',
                  'type': 'to',
                },
              ],
              "headers": {
                "Reply-To": $('#email').val(),
              },
              'autotext': 'true',
              'subject': 'Nytt mail från workandpassion.se',
              'html': message.replace(/\r?\n/g, '<br />'),
            },
          },
        })
          .done(function() {
            // console.log(response); // if you're into that sorta thing
            $("#contact_form").trigger("reset");
            $("#mail-alert").addClass("show")
            // if(response[0].status === 'rejected') {
            //   $('#email_error').slideDown();
            // }else{
            //   $('#email_sent').slideDown();
            //   $('#contact_form input, #contact_form textarea').each(function(index, element) {
            //     $(this).val('');
            //   });
            // }
            // $this.html('Skicka').prop('disabled', false);
          });
      }
    });
  },
};
