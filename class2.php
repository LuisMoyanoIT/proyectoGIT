<?php
include("modelos/empleadosBackend.php");


?>


<!DOCTYPE html>
<html>
<head>
    <!--TITTLE ES LA PROPIEDAD QUE NOS SIRVE PARA DARLE UN TITULO QUE SE VEA EN EL NAVEGADOR-->
<title>HOLA COMPAÑERO dsdfsd´p+sdf,l{sdfl</title>
<!--A TRAVES DE LA ETIQUETA STYLE SE PUEDE AÑADIR DISEÑO A LAS CLASES-->
<style>
    .content {
       margin-top: 100px;
       /* padding-left: 300px;
	   padding-right: 300px; */
       /* margin-left:10%; */
       

    }

    .botones{
        margin-bottom: 3%;

    }


</style>

<!--booTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!--CDN FONTAAWESOME-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head> 
 <!--BODY ES LA ETIQUETA QUE CONTIENE TODO NUESTRO DESARROLLO-->
<body>
    <!----DIV ES EL CONTENEDOR QUE NOS SIRVE PARA DARLE ESTRUCTURA A NUESTRA PAGINA--> <!---->
    <div class="container">
        <div class="content">
            <!--A TRAVES DE LA PROPIEDAD TEXT-ALIGN SE PUEDE DARLE UNA POSICION A CONVENIENCIA A NUESTRO TEXTO-->
            <h1 style="text-align: center;">Rama de Luis Moyano</h1>
            <hr>
            <div class="row">
                <div class="col-4">
                <select class="form-select">
                    <option value="0">Filtros de datos de empleado</option>
                    <option value="1">Fijo</option>
                    <option value="2">Contratado</option>
                    <option value="3">OutSourcing</option>
                </select>
                </div>
                <div class="col-8 ">
                <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#NuevoEmpleado">Crear nuevo empleado</button>
                </div>
                
            </div>
            <!---SIrve para hacer un salto de linea-->
            
            
            <br>


            <div>
                <!--TABLE SIRVE PARA HACER UNA TABLA-->
                <table class="table table-striped">
                    <thead class="table-dark">
                    <tr>
                        <!--la cabecera ocupa la etiqueeta th-->
                        <th>N°</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Lugar de nacimientolksdflksdf</th>
                        <th>Fecha de nacimiento</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                        <th>Estado</th>
                        <th>Acciones</th>


                    </tr>
                </thead>
                <?php
                
                $contador=1;
                if($ConsultaEmpleados): foreach($ConsultaEmpleados as $key):  ?>
                    <tr>
                        <td><?= $contador ?></td>
                        <td>   <?= $key['codigo'] ?>    </td>
                        <td> <?= $key['nombres']  ?>  </td>
                        <td><?= $key['lugar_nacimiento']  ?> </td>
                        <td><?= $key['fecha_nacimiento']  ?> </td>
                        <td><?= $key['telefono']  ?> </td>
                        <td><?= $key['puesto']  ?> </td>
                        <td><?= $key['estado']  ?> </td>
                        <td>
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            


                        </td>
                        <?php $contador++; ?>

                    </tr>
                    <?php endforeach; endif; ?>


                
                    


                </table>
            </div>
            

        </div>

    </div>

    <!-- Modal -->
<div class="modal fade" id="NuevoEmpleado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Crear emsdfsdfsdfpleado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form  action="modelos/CrearEmpleados.php"  method="POST"    >
                <div class="row">
                    <div class="form-group col-3">
                    <label>Codigo</label>
                    <input type="text" class="form-control" name="codigo" >
                    </div>
                    <div class="form-group col-9">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Lugar de nacimiento</label>
                        <input type="text" class="form-control" name="lugarNacimiento" required>
                    </div>
                    <div class="form-group col-6">
                        <label>Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="datepicker" name="fechaNacimiento" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label>Telefono</label>
                        <input type="text" class="form-control" name="telefono" required>
                    </div>
                    <div class="form-group col-6">
                        <label>Cargo</label>
                        <input type="text" class="form-control"  name="cargo" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Estados</label>
                    <select class="form-control" name="estado" required>
                        <option value="">Filtro de datos de empleado</option>
                        <option value="Fijo">Fijo</option>
                        <option value="Contratado">Contratado</option>
                        <option value="Outsourcing">Outsourcing</option>
                    </select>
                </div>
            
                
                <div class="offset-10">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            
        </div>
        
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>



