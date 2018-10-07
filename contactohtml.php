       <div class="page-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="header-page">
                            <h1>Contacto</h1>
                            <ul>
                                <li> <a href="index.html">Inicio</a> </li>
                                <li>Contacto</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Section breadcumb End Here -->
        <!-- Contact Page Start Here -->
        <div class="contact-page-area">
            <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <?php if (isset($_GET["mensaje_ok"])):?>
                       <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Ok!</strong> Mensaje enviado exitosamente.
                      </div>
                      <?php endif;?>  
                      <?php if (isset($_GET["mensaje_bad"])):?>
                       <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> No se pudo enviar tu mensaje intenta más tarde.
                      </div>
                      <?php endif;?>  
                   </div>     

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="contact-informations">
                          
                            <h3>Datos Contacto</h3>
                            <p>Contacta con un asesor y conoce como puedes invertir con nosotros.</p>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> +(57)1 2450219</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> admin@aureusrlg.com</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Whatsapp:3103241988</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> calle 39b# 21 - 54 Barrio La Soledad (Bogotá Colombia)</li>
                            </ul>
                        </div>
                    </div>                    
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">                        
                        <div class="contact-page">
                            <!-- Google Map Start Here -->
                            <div id="map" style="width:100%;height:330px;">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8005070123345!2d-74.07674368536124!3d4.629650896636845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a2b03cc8e23%3A0x9183f63a06fb004!2sCl.+39b+%2321-54%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1529413139185" width="845" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                                      <br/><br/>                 

                <div class="row padding-top">
                    <div class="contact-form">
                      <h3>Enviar Mensaje</h3>                           
                      <div class="main-contact-form">  
                        <form action="mailing/enviarcontacto.php" method="POST"  >
                          <fieldset>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" name="nombres" class="form-control" placeholder="Nombre*" required="required">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="email" name="correo" class="form-control" placeholder="E-mail*" required="required">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" name="telefono" class="form-control" placeholder="Teléfono*" required="required">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" name="asunto" class="form-control" placeholder="Asunto*" required="required">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <textarea cols="40" rows="10" name="mensaje" class="textarea form-control" placeholder="Menasaje" required="required"></textarea>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group acurate">
                                <button class="btn-send" type="submit">Enviar Menasaje</button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>