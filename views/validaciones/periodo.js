var formularioPeriodo = document.getElementById('formPeriodoCreacion');

formularioPeriodo.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioPeriodo);

  console.log(datos.get('inicio'))
  console.log(datos.get('fin'))

  fetch('../routes/periodo.php', {
    method: 'POST',
    body: datos
  })
  .then(res => res.json())
  .then(data => {
    console.log(data)
    formularioPeriodo.reset();
  })
})