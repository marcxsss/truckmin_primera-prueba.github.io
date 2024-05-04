
var originalTitle = document.title;
var index = 0;
var intervalId;

function cambiarTitulo() {
  document.title = mensajes[index];
  index = (index + 1) % mensajes.length;
}

function iniciarCarrusel() {
  intervalId = setInterval(cambiarTitulo, 1000); // Cambia el t�tulo cada 2 segundos (ajusta seg�n tus preferencias)
}

function detenerCarrusel() {
  clearInterval(intervalId);
  document.title = originalTitle;
}

// Ejecuta detenerCarrusel cuando la p�gina est� enfocada
window.addEventListener('focus', detenerCarrusel);

// Reanuda el carrusel cuando te sales de la pesta�a
document.addEventListener('visibilitychange', function() {
  if (document.visibilityState === 'hidden') {
    iniciarCarrusel();
  } else {
    detenerCarrusel();
  }
});

// Ejecuta detenerCarrusel cuando la p�gina se carga completamente
window.onload = detenerCarrusel;