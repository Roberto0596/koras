<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Nueva Solicitud de Credito</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="solicitud">Solicitudes</a></li>
            <li class="breadcrumb-item active">Solicitud de credito</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="card">

      <div class="pull-left">

        <ul class="nav nav-tabs" id="myTab" role="tablist">

          <li class="nav-item">

            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" id="informacion_laboral" data-toggle="tab" href="#laboral_informacion" role="tab" aria-controls="laboral_informacion" aria-selected="false">Informacion laboral</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" id="info-familiar-tab" data-toggle="tab" href="#informacion_familiar" role="tab" aria-controls="informacion_familiar" aria-selected="true">Informacion familiar</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" id="referencia_familiar" data-toggle="tab" href="#familiar_referencia" role="tab" aria-controls="familiar_referencia" aria-selected="false">Referencias familiares</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" id="referencia_amistad" data-toggle="tab" href="#amistad_referencia" role="tab" aria-controls="amistad_referencia" aria-selected="false">Referencias de amistad</a>

          </li>

           <li class="nav-item">

            <a class="nav-link" id="foto" data-toggle="tab" href="#fotoNueva" role="tab" aria-controls="fotoNueva" aria-selected="false">Foto</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" id="avalNuevo" data-toggle="tab" href="#aval" role="tab" aria-controls="aval" aria-selected="false">Aval</a>

          </li>

        </ul>

      </div>

      <form method="post" enctype="multipart/form-data">
        
        <div class="card-body">

          <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
              <div class="row">

                <div class="col-md-4">

                  <label class="label-style" for="">Seleccione un cliente</label>

                  <div class="input-group mb-3">

                    <select class="form-control select2" name="id_cliente" required>
                        
                        <option value="">Selecionar Cliente</option>

                        <?php 
                          $respuesta = ControladorClientes::ctrMostrarClientes(null,null);
                          foreach ($respuesta as $key => $value)
                          {
                              echo '<option value="'.$value["id_cliente"].'">'.$value["nombre"].'</option>';
                          }
                        ?>

                    </select>

                  </div>

                </div>

                <div class="col-md-4">

                  <label class="label-style" for="">Numero de placas</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="text" style="text-transform: uppercase;" name="num_placas" placeholder="Numero de placas" class="form-control" required>

                  </div>
                  
                </div>

                <div class="col-md-4">

                  <label class="label-style" for="">Estado Civil</label>

                  <div class="input-group mb-3">

                    <div class="input-group-prepend">

                      <span class="input-group-text"><i class="fas fa-user"></i></span>

                    </div>

                    <select class="form-control capitalize" name="estado_civil" required>
                  
                      <option value="">Selecionar estado civil</option>

                      <option value="Casado">Casado</option>

                      <option value="Soltero">Soltero</option>

                      <option value="Divorciado">Divorciado</option>

                      <option value="Union libre">Union libre</option>

                      <option value="Viudo">Viudo</option>

                    </select>

                  </div>

                </div>

              </div>

              <div class="row">

                <div class="col-md-4">

                  <label class="label-style" for="">Casa</label>

                    <div class="input-group mb-3">

                        <div class="input-group-prepend">

                          <span class="input-group-text"><i class="fas fa-user"></i></span>

                        </div>

                        <select class="form-control capitalize" name="casa" required>
                      
                          <option value="">Seleccione un item</option>

                          <option value="Si">Si</option>

                          <option value="No">No</option>

                      </select>

                    </div>

                </div>

                <div class="col-md-4">

                  <label class="label-style" for="">Tiempo en casa</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="text" name="tiempo_casa" placeholder="Tiempo en casa" class="form-control capitalize" required>

                  </div>

                </div>

                <div class="col-md-4">

                  <label class="label-style" for="">Gastos mensuales</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="number" min="0" name="gastos_mensuales" placeholder="Gastos mensuales" class="form-control capitalize" required>

                  </div>

                </div>

              </div>

            </div>
            
            <div class="tab-pane fade show" id="informacion_familiar" role="tabpanel" aria-labelledby="info-familiar-tab">
              <div class="row">

                <div class="col-md-12">
                  <label class="label-style" for="">Informacion familiar</label>
                  <table class="table">
                    <thead>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                    </thead>
                    <tbody>
                      <tr>

                        <th>Papa</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_papa" placeholder="Nombre" class="form-control capitalize" required>
                            <input type="hidden" name="referencia_padre" value="2">

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_papa" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_papa" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                      <tr>
                        
                        <th>Mama</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_mama" placeholder="Nombre" class="form-control capitalize" required>
                            <input type="hidden" name="referencia_mama" value="3">

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_mama" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_mama" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                    </tbody>

                  </table>

                </div>

              </div>

            </div>


            <div class="tab-pane fade" id="laboral_informacion" role="tabpanel" aria-labelledby="informacion_laboral">

              <div class="row">

                <div class="col-md-4">

                  <label class="label-style" for="">Profesion</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="text" name="profesion" id="profesion" placeholder="Nombre de la empresa" class="form-control capitalize" required>

                  </div>

                </div>

                <div class="col-md-4">

                  <label class="label-style" for="">Nombre de la empresa</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="text" name="nombre_empresa" id="nombre_empresa" placeholder="Nombre de la empresa" class="form-control capitalize" required>

                  </div>

                </div>

                <div class="col-md-4">
                  
                  <label class="label-style" for="">Domicilio de la empresa</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="text" name="dom_empresa" id="dom_empresa" placeholder="Domicilio de la empresa" class="form-control capitalize" required>

                  </div>

                </div>

              </div>

              <div class="row">

                <div class="col-md-4">
                  
                  <label class="label-style" for="">Telefono de casa</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="text" name="tel_empresa" id="tel_empresa" placeholder="Telefono de la empresa" class="form-control capitalize" required>

                  </div>

                </div>

                <div class="col-md-4">

                  <label class="label-style" for="">Puesto</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="text" name="puesto" id="puesto" placeholder="Puesto que desempeña" class="form-control capitalize" required>

                  </div>

                </div>

                <div class="col-md-4">
                  
                  <label class="label-style" for="">Sueldo</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <input type="number" name="sueldo" id="sueldo" placeholder="Sueldo" class="form-control capitalize" required>

                  </div>

                </div>

                <div class="col-md-4">
                  
                  <label class="label-style" for="">Antiguedad</label>

                  <div class="input-group mb-3">

                      <div class="input-group-prepend">

                        <span class="input-group-text"><i class="fas fa-user"></i></span>

                      </div>

                      <select class="form-control capitalize" name="antiguedad" required>
                  
                      <option value="">Seleccionar un item</option>

                      <option value="Menos de un año">Menos de un año</option>

                      <option value="1 año">1 año</option>

                      <option value="2 años">2 años</option>

                      <option value="3 años">3 años</option>

                      <option value="4 años">4 años</option>

                      <option value="5 años">5 años</option>

                      <option value="Mas de 5 años">Mas de 5 años</option>

                    </select>

                  </div>

                </div>

              </div>

            </div>

            <div class="tab-pane fade" id="familiar_referencia" role="tabpanel" aria-labelledby="referencia_familiar">
              <div class="row">
                <div class="col-md-12">
                  <label class="label-style" for="">Referencias familiares</label>
                  <input type="hidden" name="referencia_familiar" value="0">
                  <table class="table">
                    <thead>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                    </thead>
                    <tbody>
                      <tr>

                        <th>1</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_familiar[]" placeholder="Nombre" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_familiar[]" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_familiar[]" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                      <tr>
                        
                        <th>2</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_familiar[]" placeholder="Nombre" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_familiar[]" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_familiar[]" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                      <tr>
                        
                        <th>3</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_familiar[]" placeholder="Nombre" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_familiar[]" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_familiar[]" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                    </tbody>

                  </table>

                </div>

              </div>
            </div>

            <div class="tab-pane fade" id="amistad_referencia" role="tabpanel" aria-labelledby="referencia_amistad">
              <div class="row">
                <div class="col-md-12">
                  <label class="label-style" for="">Referencias de amistad</label>
                  <input type="hidden" name="referencia_amistad" value="1">
                  <table class="table">
                    <thead>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                    </thead>
                    <tbody>
                      <tr>

                        <th>1</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_amistad[]" placeholder="Nombre" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_amistad[]" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_amistad[]" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                      <tr>
                        
                        <th>2</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_amistad[]" placeholder="Nombre" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_amistad[]" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_amistad[]" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                      <tr>
                        
                        <th>3</th>
                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="nombre_amistad[]" placeholder="Nombre" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="direccion_amistad[]" placeholder="Direccion" class="form-control capitalize" required>

                          </div>

                        </td>

                        <td>

                          <div class="input-group mb-3">

                            <input type="text" name="telefono_amistad[]" placeholder="Telefono" class="form-control capitalize" required>

                          </div>

                        </td>

                      </tr>

                    </tbody>

                  </table>

                </div>

              </div>
            </div>

            <div class="tab-pane fade" id="fotoNueva" role="tabpanel" aria-labelledby="foto">

              <div class="row">

                <div class="col-md-12">

                  <label class="label-style" for="">Foto</label>

                  <div class="form-group">  

                      <div class="panel">SUBIR FOTO</div>

                      <input type="file" class="nuevaFoto" name="nuevaFoto" required>

                      <p class="help-block">Peso máximo de la foto 2MB</p>

                      <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                  </div>

                </div>

              </div>

            </div>

            <div class="tab-pane" id="aval" role="tabpanel" aria-labelledby="avalNuevo">

              <div class="row">

                <div class="col-md-12">

                  <ul class="nav nav-tabs" id="myTab2" role="tablist">

                    <li class="nav-item"><a class="nav-link active" id="info_personale" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Info. personal del aval</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" id="general" data-toggle="tab" href="#info_general" role="tab" aria-controls="info_general">Info. general del aval</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" id="info_laboral_aval" data-toggle="tab" href="#laboral_informacion_aval" role="tab" aria-controls="laboral_informacion_aval">Info. Laboral del aval</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" id="informacion_familiar_aval_tab" data-toggle="tab" href="#informacion_familiar_aval" role="tab" aria-controls="informacion_familiar_aval_tab">Info. familiar del aval</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" id="familiar_referencia_aval" data-toggle="tab" href="#referencia_familiar_aval" role="tab" aria-controls="referencia_familiar_aval">Referencia familiar del aval</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" id="referencia_amistad_aval_tab" data-toggle="tab" href="#referencia_amistad_aval" role="tab" aria-controls="referencia_amistad_aval">Referencias de amistad del aval</a>
                    </li>

                  </ul>

                </div>

              </div>

              <div class="row">

                <div class="col-md-12">

                  <div class="tab-content" id="myTabContent2">

                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info_personale">

                      <div class="row">

                        <div class="col-md-6">

                          <label class="label-style" for="">Nombre completo</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" name="nombre_aval" placeholder="Nombres y Apellido" class="form-control form-control-lg capitalize" required>
                              <input type="hidden" name="tipo_aval" value="1">

                          </div>

                        </div>

                        <div class="col-md-6">

                          <div class="row">

                            <div class="col-md-6">

                              <label class="label-style" for="">Direccion</label>

                              <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <span class="input-group-text"><i class="fas fa-user"></i></span>

                                  </div>

                                  <input type="text" name="direccion_aval" placeholder="Direccion" class="form-control form-control-lg capitalize" required>

                              </div>

                            </div>

                            <div class="col-md-6">

                              <label class="label-style" for="">Edad</label>

                              <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <span class="input-group-text"><i class="fas fa-user"></i></span>

                                  </div>

                                  <input type="text" name="edad_aval" placeholder="Edad" class="form-control form-control-lg" required>

                              </div>

                            </div>

                          </div>
                    
                        </div>

                        <div class="col-md-6">

                          <div class="row">

                            <div class="col-md-6">

                              <label class="label-style" for="">Telefono de casa</label>

                              <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <span class="input-group-text"><i class="fas fa-user"></i></span>

                                  </div>

                                  <input type="number" name="t_casa_aval" placeholder="Telefono de casa" class="form-control form-control-lg" required>

                              </div>

                            </div>

                            <div class="col-md-6">

                              <label class="label-style" for="">Telefono celular</label>

                              <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <span class="input-group-text"><i class="fas fa-user"></i></span>

                                  </div>

                                  <input type="number" name="t_celular_aval" placeholder="Telefono celular" class="form-control form-control-lg" required>

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="col-md-6">

                          <div class="row">

                            <div class="col-md-6">

                              <label class="label-style" for="">Codigo postal</label>

                              <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <span class="input-group-text"><i class="fas fa-user"></i></span>

                                  </div>

                                  <input type="number" name="codigo_postal_aval" placeholder="Codigo postal" class="form-control form-control-lg" required>

                              </div>

                            </div>

                            <div class="col-md-6">

                              <label class="label-style" for="">Ciudad</label>

                              <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <span class="input-group-text"><i class="fas fa-user"></i></span>

                                  </div>

                                  <input type="text" name="ciudad_aval" placeholder="Ciudad" class="form-control form-control-lg capitalize" required>

                              </div>

                            </div>

                          </div>
                          
                        </div>

                      </div>

                    </div>

                    <div class="tab-pane fade show" id="info_general" role="tabpanel" aria-labelledby="general">
                      
                      <div class="row">

                        <div class="col-md-6">

                          <label class="label-style" for="">Numero de placas</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" style="text-transform: uppercase;" name="num_placas_aval" placeholder="Numero de placas" class="form-control" required>

                          </div>
                          
                        </div>

                        <div class="col-md-6">

                          <label class="label-style" for="">Estado Civil</label>

                          <div class="input-group mb-3">

                            <div class="input-group-prepend">

                              <span class="input-group-text"><i class="fas fa-user"></i></span>

                            </div>

                            <select class="form-control capitalize" name="estado_civil_aval" required>
                          
                              <option value="">Selecionar estado civil</option>

                              <option value="Casado">Casado</option>

                              <option value="Soltero">Soltero</option>

                              <option value="Divorciado">Divorciado</option>

                              <option value="Union libre">Union libre</option>

                              <option value="Viudo">Viudo</option>

                            </select>

                          </div>

                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-4">

                          <label class="label-style" for="">Casa</label>

                            <div class="input-group mb-3">

                                <div class="input-group-prepend">

                                  <span class="input-group-text"><i class="fas fa-user"></i></span>

                                </div>

                                <select class="form-control capitalize" name="casa_aval" required>
                              
                                  <option value="">Seleccione un item</option>

                                  <option value="Si">Si</option>

                                  <option value="No">No</option>

                              </select>

                            </div>

                        </div>

                        <div class="col-md-4">

                          <label class="label-style" for="">Tiempo en casa</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" name="tiempo_casa_aval" placeholder="Tiempo en casa" class="form-control capitalize" required>

                          </div>

                        </div>

                        <div class="col-md-4">

                          <label class="label-style" for="">Gastos mensuales</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="number" min="0" name="gastos_mensuales_aval" placeholder="Gastos mensuales" class="form-control capitalize" required>

                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="tab-pane fade show" id="laboral_informacion_aval" role="tabpanel" aria-labelledby="info_laboral_aval">

                      <div class="row">

                        <div class="col-md-4">

                          <label class="label-style" for="">Profesion</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" name="profesion_aval" id="profesion_aval" placeholder="Nombre de la empresa" class="form-control capitalize" required>

                          </div>

                        </div>

                        <div class="col-md-4">

                          <label class="label-style" for="">Nombre de la empresa</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" name="nombre_empresa_aval" id="nombre_empresa_aval" placeholder="Nombre de la empresa" class="form-control capitalize" required>

                          </div>

                        </div>

                        <div class="col-md-4">
                          
                          <label class="label-style" for="">Domicilio de la empresa</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" name="dom_empresa_aval" id="dom_empresa_aval" placeholder="Domicilio de la empresa" class="form-control capitalize" required>

                          </div>

                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-4">
                          
                          <label class="label-style" for="">Telefono de la empresa</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" name="tel_empresa_aval" id="tel_empresa_aval" placeholder="Telefono de la empresa" class="form-control capitalize" required>

                          </div>

                        </div>

                        <div class="col-md-4">

                          <label class="label-style" for="">Puesto</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="text" name="puesto_aval" id="puesto_aval" placeholder="Puesto que desempeña" class="form-control capitalize" required>

                          </div>

                        </div>

                        <div class="col-md-4">
                          
                          <label class="label-style" for="">Sueldo</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <input type="number" name="sueldo_aval" id="sueldo_aval" placeholder="Sueldo" class="form-control capitalize" required>

                          </div>

                        </div>

                        <div class="col-md-4">
                          
                          <label class="label-style" for="">Antiguedad</label>

                          <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                              </div>

                              <select class="form-control capitalize" name="antiguedad_aval" required>
                          
                              <option value="">Seleccionar un item</option>

                              <option value="Menos de un año">Menos de un año</option>

                              <option value="1 año">1 año</option>

                              <option value="2 años">2 años</option>

                              <option value="3 años">3 años</option>

                              <option value="4 años">4 años</option>

                              <option value="5 años">5 años</option>

                              <option value="Mas de 5 años">Mas de 5 años</option>

                            </select>

                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="tab-pane fade show" id="informacion_familiar_aval" role="tabpanel" aria-labelledby="informacion_familiar_aval_tab">

                      <div class="row">

                        <div class="col-md-12">

                          <table class="table">
                            
                            <thead>
                              <th>#</th>
                              <th>Nombre</th>
                              <th>Direccion</th>
                              <th>Telefono</th>
                            </thead>
                            <tbody>
                              <tr>

                                <th>Papa</th>
                                <td>

                                  <div class="input-group mb-3">

                                    <input type="text" name="nombre_papa_aval" placeholder="Nombre" class="form-control capitalize" required>
                                    <input type="hidden" name="referencia_padre_aval" value="2">

                                  </div>

                                </td>

                                <td>

                                  <div class="input-group mb-3">

                                    <input type="text" name="direccion_papa_aval" placeholder="Direccion" class="form-control capitalize" required>

                                  </div>

                                </td>

                                <td>

                                  <div class="input-group mb-3">

                                    <input type="text" name="telefono_papa_aval" placeholder="Telefono" class="form-control capitalize" required>

                                  </div>

                                </td>

                              </tr>

                              <tr>
                                
                                <th>Mama</th>
                                <td>

                                  <div class="input-group mb-3">

                                    <input type="text" name="nombre_mama_aval" placeholder="Nombre" class="form-control capitalize" required>
                                    <input type="hidden" name="referencia_mama_aval" value="3">

                                  </div>

                                </td>

                                <td>

                                  <div class="input-group mb-3">

                                    <input type="text" name="direccion_mama_aval" placeholder="Direccion" class="form-control capitalize" required>

                                  </div>

                                </td>

                                <td>

                                  <div class="input-group mb-3">

                                    <input type="text" name="telefono_mama_aval" placeholder="Telefono" class="form-control capitalize" required>

                                  </div>

                                </td>

                              </tr>

                            </tbody>

                          </table>

                        </div>

                      </div>

                    </div>

                    <div class="tab-pane fade show" id="referencia_familiar_aval" role="tabpanel" aria-labelledby="familiar_referencia_aval">

                      <div class="row">

                        <div class="col-md-12">

                          <input type="hidden" name="referencia_familiar_aval" value="0">

                          <table class="table">

                            <thead>

                              <th>#</th>
                              <th>Nombre</th>
                              <th>Direccion</th>
                              <th>Telefono</th>

                            </thead>

                            <tbody>

                              <tr>
                                <th>1</th>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="nombre_familiar_aval[]" placeholder="Nombre" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="direccion_familiar_aval[]" placeholder="Direccion" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="telefono_familiar_aval[]" placeholder="Telefono" class="form-control capitalize" required>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                               <th>2</th>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="nombre_familiar_aval[]" placeholder="Nombre" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="direccion_familiar_aval[]" placeholder="Direccion" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="telefono_familiar_aval[]" placeholder="Telefono" class="form-control capitalize" required>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                 <th>3</th>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="nombre_familiar_aval[]" placeholder="Nombre" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="direccion_familiar_aval[]" placeholder="Direccion" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="telefono_familiar_aval[]" placeholder="Telefono" class="form-control capitalize" required>
                                  </div>
                                </td>
                              </tr>

                            </tbody>

                          </table>

                        </div>

                      </div>

                    </div>

                    <div class="tab-pane fade show" id="referencia_amistad_aval" role="tabpanel" aria-labelledby="referencia_amistad_aval_tab">

                      <div class="row">

                        <div class="col-md-12">

                          <input type="hidden" name="referencia_amistad_aval" value="1">

                          <table class="table">

                            <thead>
                              <th>#</th>
                              <th>Nombre</th>
                              <th>Direccion</th>
                              <th>Telefono</th>
                            </thead>

                            <tbody>
                              <tr>
                                <th>1</th>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="nombre_amistad_aval[]" placeholder="Nombre" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="direccion_amistad_aval[]" placeholder="Direccion" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="telefono_amistad_aval[]" placeholder="Telefono" class="form-control capitalize" required>
                                  </div>
                                </td>
                              </tr>
                              <tr>                               
                                <th>2</th>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="nombre_amistad_aval[]" placeholder="Nombre" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="direccion_amistad_aval[]" placeholder="Direccion" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="telefono_amistad_aval[]" placeholder="Telefono" class="form-control capitalize" required>
                                  </div>
                                </td>
                              </tr>
                              <tr>                     
                                <th>3</th>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="nombre_amistad_aval[]" placeholder="Nombre" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="direccion_amistad_aval[]" placeholder="Direccion" class="form-control capitalize" required>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group mb-3">
                                    <input type="text" name="telefono_amistad_aval[]" placeholder="Telefono" class="form-control capitalize" required>
                                  </div>
                                </td>
                              </tr>

                            </tbody>

                          </table>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>
              
            </div>

          </div>
          
        </div>

        <div class="card-footer">

          <div class="row">

            <div class="col-md-6">
            
              <a href="clientes" class="btn btn-block btn-danger float-left">                  
                <i class="fa fa-fw fa-plus"></i> Cancelar
              </a>

            </div>

            <div class="col-md-6">

              <button type="submit" class="btn btn-block btn-success float-right">                  
                <i class="fa fa-fw fa-plus"></i> Guardar
              </button>

            </div>

          </div>
        </div>

        <?php
          $crearSolicitud = new ControladorSolicitud();
          $crearSolicitud->ctrCrearSolicitud(); 
        ?>

      </form>

    </div>

  </section>

</div>
