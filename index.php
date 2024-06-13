<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>PreviSalud</title>
</head>
<body>
    <div class="container">
        <img src="ips.png" alt="" class="logo">
        <div class="container b">
            <h1>Agendamiento Citas</h1>

            <form id="asignacion">
                <div class="info">
                    <label for="especialidad">Requiere cita con que especialidad:</label>
                    <select id="especialidad" name="especialidad" required>
                        <option value="">Selecciona una opcion...</option>
                        <option value="Obstetricia">Obstetricia</option>
                        <option value="Medicina General">Medicina General</option>
                        <option value="Pediatria">Pediatria</option>
                        <option value="Ginecologia">Ginecologia</option>
                        <option value="Nutricionista">Nutricionista</option>
                        <option value="Oftalmologia">Oftalmologia</option>
                    </select>
                    <br>
                    <br>

                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <br>
                    <br>

                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" required>
                    <br>
                    <br>

                    <label for="sangre">Tipo de sangre</label>
                    <select name="sangre" id="sangre" required>
                        <option value="">Selecciona una opcion</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <br>
                    <br>

                    <label for="numero">CC</label>
                    <input type="number" id="numero" name="cc" required>
                    <br>
                    <br>

                    <label for="numero">Tiene hijos</label><br>
                    <label for="si">Si</label>
                    <input type="checkbox" id="si" name="hijos" value="si">
                    <label for="no">No</label>
                    <input type="checkbox" id="no" name="hijos" value="no">
                    <br>
                    <br>

                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion" required>
                    <br>
                    <br>

                    <label for="fecha">Fecha de nacimiento</label>
                    <input type="date" id="fecha" name="fecha" required>
                    <br>
                    <br>

                    <label for="departamento">Departamento</label>
                    <select name="depa" id="departamento" required>
                        <option value="">Selecciona una opcion</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Arauca">Arauca</option>
                        <option value="Atlantico">Atlantico</option>
                        <option value="Bolivar">Bolivar</option>
                        <option value="Boyaca">Boyaca</option>
                        <option value="Caldas">Caldas</option>
                        <option value="Caqueta">Caqueta</option>
                        <option value="Casanare">Casanare</option>
                        <option value="Cauca">Cauca</option>
                        <option value="Cesar">Cesar</option>
                        <option value="Choco">Choco</option>
                        <option value="Cordoba">Cordoba</option>
                        <option value="Cundinamarca">Cundinamarca</option>
                        <option value="Guainia">Guainia</option>
                        <option value="Guaviare">Guaviare</option>
                        <option value="Huila">Huila</option>
                        <option value="La Guajira">La Guajira</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Meta">Meta</Meta></option>
                        <option value="Nariño">Nariño</option>
                        <option value="Norte de Santander">N/Santander</option>
                        <option value="Putumayo">Putumayo</option>
                        <option value="Quindio">Quindio</option>
                        <option value="Risaralda">Risaralda</option>
                        <option value="San Andres">San Andres</option>
                        <option value="Santander">Santander</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Tolima">Tolima</option>
                        <option value="Valle del cauca">Valle del cauca</option>
                        <option value="Vaupes">Vaupes</option>
                        <option value="Vichada">Vichada</option>
                    </select>
                    <br>
                    <br>

                    <label for="municipio">Municipio</label>
                    <select name="muni" id="municipio" required>
                    <option value="">Selecciona una opcion</option>
                    <option value="Leticia">Leticia</option>
                    <option value="Medellin">Medellin</option>
                    <option value="Arauca">Arauca</option>
                    <option value="Barranquilla">Barranquilla</option>
                    <option value="Cartagena">Cartagena</option>
                    <option value="Tunja">Tunja</option>
                    <option value="Manizales">Manizales</option>
                    <option value="Florencia">Florencia</option>
                    <option value="Yopal">Yopal</option>
                    <option value="Popayan">Popayan</option>
                    <option value="Valledupar">Valledupar</option>
                    <option value="Quibdo">Quibdo</option>
                    <option value="Monteria">Monteria</option>
                    <option value="Bogota D.C">Bogota D.C</option>
                    <option value="Puerto inirida">Puerto inirida</option>
                    <option value="San Jose del guaviare">San Jose del Guaviare</option>
                    <option value="Neiva">Neiva</option>
                    <option value="Riohacha">Riohacha</option>
                    <option value="Santa Marta">Santa Marta</option>
                    <option value="Villavicencio">Villavicencio</option>
                    <option value="Pasto">Pasto</option>
                    <option value="Cucuta">Cucuta</option>
                    <option value="Mocoa">Mocoa</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Pereira">Pereira</option>
                    <option value="San Andres">San Andres</option>
                    <option value="Bucaramanga">Bucaramanga</option>
                    <option value="Sincelejo">Sincelejo</option>
                    <option value="Ibague">Ibague</option>
                    <option value="Cali">Cali</option>
                    <option value="Mitu">Mitu</option>
                    <option value="Puerto Carreño">Puerto Carreño</option>
                    </select>
                    <br>
                    <br>

                    <label for="fechaCita">Fecha de la cita</label>
                    <input type="date" id="fechaCita" name="cita" required>
                    <br>
                    <br>

                    <button type="button" id="submit">Enviar</button>

                </div>

            </form>

        </div>
    </div>

    <div id="resultContainer"></div>

    <script>
        $(document).ready(function() {
            function save(data) {
                localStorage.setItem('formData', JSON.stringify(data));
            }

            function load() {
                const data = JSON.parse(localStorage.getItem('formData'));
                if(data) {
                    display(data);
                }
            }

            function display(formData) {
                const resultContainer = $('#resultContainer');
                let table = '<table border="1"><tr>';
                formData.forEach(item => {
                    table += '<th>' + item.name + '</th>';
                });
                table += '</tr><tr>';
                formData.forEach(item => {
                    table += '<td>' + item.value + '</td>';
                });
                table += '</tr></table>';
                resultContainer.html(table);
            }

            load();

            $('#submit').click(function() {
                const formData = $('#asignacion').serializeArray();
                $.ajax({
                    type: 'POST',
                    url: 'danavale.php',
                    data: $('#asignacion').serialize(),
                    success: function(response) {
                        $('#resultContainer').html(response);
                        display(formData);
                        save(formData);
                    },
                    error: function() {
                        alert('Error al registrar los datos');
                    }
                });
            });
        });
    </script>

</body>
</html>