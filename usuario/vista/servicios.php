<?php require_once("./vista-header/header.php") ?>
<br><br><br>
<br>
<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Solicitar un Servicio
            </h2>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6">
                <div class="form_container">

                    <fieldset>
                        <div>
                            <input type="text" class="form-control" name="" id="nombres" placeholder="Ingrese su nombre" required="" /><br>
                        </div>
                        <div class="box">
                            <input type="text" class="form-control" name="" id="apellidos" placeholder="Ingrese su apellido" required="" /><br>
                            <div>
                                <input type="text" class="form-control" name="" id="telefono" placeholder="telefono" required="" /><br>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="" id="direccion" placeholder="Direccion" required="" /><br>
                            </div>
                            <div>
                                <input type="email" class="form-control" name="" id="email" placeholder="Email" required="" /><br>
                            </div>
                        </div>
                        <div class="box">
                            <textarea name="" id="mensaje" class="form-control" cols="30" rows="10" placeholder="Escriba su mensaje" required=""></textarea>
                        </div>
                        <br><br><br>

                        <div>
                            <button  class="btn btn-primary" id="send">Enviar</button>
                        </div><br><br>
                </div>
                </fieldset>
            </div>

            <!---->
            
            <div class="col-md-6">
            <br><br><br>
                <div class="map_container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.9767058057846!2d-75.23081145021861!3d-12.045123645106097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e9621d9dfba39%3A0x44cb676cd58700f2!2sEvitamiento%2C%20Huancayo!5e0!3m2!1ses!2spe!4v1653491219541!5m2!1ses!2spe" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--<div id="googleMap"></div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end book section -->


<?php require_once("./vista-header/footer.php") ?>