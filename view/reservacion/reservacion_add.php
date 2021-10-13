<section class="listads">
    <h1> Hacer una Reservación </h1>
    <div class="resercn">
        <div class="formcn">
            <form id="formReservacion" action="?c=reservacion&a=add" method="POST" enctype="multipart/form-data">

            <label class="bsc">Nombre</label> <br>  
            <input type="text" name="nombre" id="nombre" value="" placeholder="Ingrese su nombre" required /> <br>

            <label class="bsc">Correo</label> <br>
            <input type="text" name="correo" id="correo" value="" placeholder="Ingrese su correo" required /> <br>

            <label class="bsc">Confirma tu correo</label> <br>
            <input type="text" name="correocon" value="" placeholder="Confirma tu correo" required /> <br>

            <label class="bsc">Teléfono</label> <br>
            <input type="text" name="telefono" value="" placeholder="Ingrese su número" required /> <br>

            <label> Fecha </label> <br>
            <input type="date" name="date_rsv"
                min="<?php echo date("Y-m-d"); ?>"
                max="<?php echo date("Y-m-d", strtotime("+14 days")); ?>"
                value="<?php echo date("Y-m-d"); ?>"
                required
            > <br>

            <label>Hora</label> <br>
            <input type="time" name="time_rsv" id="time_rsv"
                min="12:00"
                max="23:00"
                required
            > <br>

            <label class="bsc">Comensales</label> <br>
            <input type="number" name="comensales" value="" placeholder="Ingrese el número de comensales" required /> <br>

            <label class="bsc">¿Tiene alguna especificación, alergia, instrucción, o comentario?</label> <br>
            <textarea id="demandas" rows="5" name="demandas" value="" placeholder="Alergia al maní, al gluten..." width="200" height="200"></textarea> <br>

            <label class="bsc">Acepto las condiciones y términos de recibir los servicios de Oriental Gourmet</label> 
            <input type="checkbox" name="terms" required/> <br>
            
            <input type="submit">
            </form>
        </div>
        <div class="timecn">
            <h1> Nuestro horario </h1>
            <h3> Lunes a Sábado </h3>
            <h4> 12:00 - 23:00 </h4>
            <h3> Domingo </h3>
            <h4> 12:00 - 19:00 </h4>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="/pds2resto/js/validateReserv.js"></script>

