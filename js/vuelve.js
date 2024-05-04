
var originalTitle = document.title;
var index = 0;
var intervalId;

function cambiarTitulo() {
  document.title = mensajes[index];
  index = (index + 1) % mensajes.length;
}

function iniciarCarrusel() {
  intervalId = setInterval(cambiarTitulo, 1000); // Cambia el título cada 2 segundos (ajusta según tus preferencias)
}

function detenerCarrusel() {
  clearInterval(intervalId);
  document.title = originalTitle;
}

// Ejecuta detenerCarrusel cuando la página está enfocada
window.addEventListener('focus', detenerCarrusel);

// Reanuda el carrusel cuando te sales de la pestaña
document.addEventListener('visibilitychange', function() {
  if (document.visibilityState === 'hidden') {
    iniciarCarrusel();
  } else {
    detenerCarrusel();
  }
});

// Ejecuta detenerCarrusel cuando la página se carga completamente
window.onload = detenerCarrusel;