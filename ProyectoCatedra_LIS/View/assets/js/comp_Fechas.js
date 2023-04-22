// obtener la fecha actual
const fechaActual = new Date();

// recorrer todas las tarjetas
const tarjetas = document.querySelectorAll('.cupon-card');
tarjetas.forEach(tarjeta => {
  // obtener la fecha de inicio y fin de la tarjeta
  const fechaInicio = new Date(tarjeta.querySelector('.card-text').dataset.fechaInicio);
  const fechaFin = new Date(tarjeta.querySelector('.card-text').dataset.fechaFin);

  // comparar la fecha actual con las fechas de inicio y fin de la tarjeta
  if (fechaActual >= fechaInicio && fechaActual <= fechaFin) {
    // si la fecha actual está dentro del rango de fechas de la tarjeta, mostrarla
    tarjeta.style.display = 'block';
  } else {
    // si la fecha actual no está dentro del rango de fechas de la tarjeta, ocultarla
    tarjeta.style.display = 'none';
  }
});
