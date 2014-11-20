<div class="dcontacto">
    <form action="#" method="post" name="frmdccontacto" id="frmdccontacto">
        <div class="dcfila">
            <div class="dclabel">Nombre</div>
            <input type="text" alt="Nombre" name="dcnombre" id="dcnombre" class="dcimput requerido" /><span class="required">*</span>
        </div>
        <div class="dcfila">
            <div class="dclabel">Apellidos</div>
            <input type="text" alt="Apellidos" name="dcape" id="dcape" class="dcimput requerido" /><span class="required">*</span>
        </div>
        <div class="dcfila">
            <div class="dclabel">Teléfono</div>
            <input type="text" alt="Teléfono" name="dctel" id="dctel" class="dcimput requerido" /><span class="required">*</span>
        </div>
        <div class="dcfila">
            <div class="dclabel">Email</div>
            <input type="text" alt="Email" name="dcemail" id="dcemail" class="dcimput requerido vemail" /><span class="required vemail">(Email válido)</span>
        </div>
        <div class="dcfila">
            <div class="dclabel">Comentario</div>
            <textarea alt="Comentario"name="dccomentario" id="dccomentario" class="dcimput" style="height:100px"></textarea>
        </div>
        <div class="dcfila">
            <div class="dclabel" style="width:400px;"><input type="checkbox" name="dacepto" id="dacepto" /><a id="aceptocondiciones">Acepto las condiciones legales</a></div>
            <div id="condicionesup" style="float:left;width:500px; background:#ccc; padding:10px; display:none;">
                <p>De acuerdo con el contenido de la Ley Orgánica 15/1999 de protección de datos de
                carácter personal, los datos personales facilitados a través de la cumplimentación del
                presente formulario para la colaboración o contacto con la Fundación Caíco, supone el
                consentimiento expreso del solicitante, para que la Fundación Caíco, lleve a cabo la
                gestión o tramitación de los datos y los traten automáticamente, pudiendo incorporar
                dichos datos a un fichero automatizado, debidamente inscrito en el Registro General de
                Protección de Datos de la Agencia Española de Protección de datos, siendo responsable
                la Fundación Caíco.</p>
                <p>Los datos personales recabados por la Fundación Caíco serán utilizados con la finalidad
                de gestionar la colaboración y contacto. De conformidad con la normativa vigente, su
                derecho a acceder a dicho fichero a efectos de ejercer sus derechos de acceso,
                rectificación, cancelación u oposición, solo con solicitarlo en el domicilio social de la
                Fundación Caíco, en C/ Fray Juan Gil, 5 bajo, 28002. Madrid o en el correo electrónico
                <a href="mailto:info@fundacioncaico.org">info@fundacioncaico.org</a>.</p>
            </div>
        </div>
        <div class="dcfila">
            <input type="submit" value="enviar" class="dcbutton"/>
        </div>
    </form>
</div>
<script type="text/javascript">
    cargarempativa();
</script>
