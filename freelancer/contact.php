<?php 

require "includes/header.php";

?>

<main class="contenedor sombra">
            <h2>Contact with me</h2>
            <form class="formulario">
                <fieldset>

                    <div class="contenedor-campos">
                        <div class="campo">
                            <label>Name</label>
                            <input type="text" placeholder="Name" name ="name" class="input-text">
                        </div>

                        <div class="campo">
                            <label>Phone</label>
                            <input type="tel" placeholder="Phone" name="phone" class="input-text">
                        </div>

                        <div class="campo">
                            <label>Mail</label>
                            <input  type="mail" placeholder="mail" name="email" class="input-text">
                        </div>

                        <div class="campo">
                            <label>Message</label>
                            <textarea class="input-text" name ="message"></textarea>
                        </div>
                    </div><!--contedor-campos-->

                    <input type="submit" value="ENVIAR" class="boton w-sm-100">
                </fieldset>
            </form>
    </main>
<?php 
require "includes/footer.php"
?>