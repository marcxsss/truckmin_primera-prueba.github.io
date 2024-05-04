$(document).ready(function() {
    $('.cotizarButton').on('click', function(e) {
      e.preventDefault();

      // Find the input and product name within the clicked button's container
      var quantity = $(this).closest('.cotizar-container').find('.cotizar-input').val();
      var productName = $(this).closest('.image-container').find('p').text();

      // Set a default value if quantity is undefined or null
      quantity = quantity || 1;

      // Create the WhatsApp message with the product name and quantity
      var whatsappMessage = "Hola, estoy interesado en cotizar " + quantity + " unidades del producto '" + productName + "'.";

      // Encode the message for a URL
      var encodedMessage = encodeURIComponent(whatsappMessage);

      // Construct the WhatsApp link
      var whatsappLink = "https://api.whatsapp.com/send?phone=51955302160&text=" + encodedMessage;

      // Redirect to the WhatsApp link
      window.location.href = whatsappLink;
    });
  });