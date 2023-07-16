const formulario = document.getElementById('form');
const resultado = document.getElementById('buttonEnviar');

const consultarApi = async (e) => {
  e.preventDefault();
  const url = `consulta.php`;
  const config = {
    method: 'GET' 
  };

  try {
    const respuesta = await fetch(url, config);
    const data = await respuesta.text();
    alert(data);
    console.log('Método GET');
  } catch (error) {
    alert('Error en la consulta: ' + error); 
    console.log('Error, no es método GET');
  }
};

resultado.addEventListener('click', consultarApi);
