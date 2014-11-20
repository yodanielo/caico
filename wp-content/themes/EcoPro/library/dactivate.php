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
            <div class="dclabel">Dirección</div>
            <input type="text" name="dcdireccion" id="dcdireccion" class="dcimput" />
        </div>
        <div class="dcfila">
            <div class="dclabel">Teléfono</div>
            <input type="text" alt="Teléfono" name="dctel" id="dctel" class="dcimput requerido" /><span class="required">*</span>
        </div>
        <div class="dcfila">
            <div class="dclabel">Provincia</div>
            <input type="text" name="dcprov" id="dcprov" class="dcimput" />
        </div>
        <div class="dcfila">
            <div class="dclabel">C.P.</div>
            <input type="text" name="dccp" id="dccp" class="dcimput" />
        </div>
        <div class="dcfila">
            <div class="dclabel">Email</div>
            <input type="text" alt="Email" name="dcemail" id="dcemail" class="dcimput requerido vemail" /><span class="required">*</span>
        </div>
        <div class="dcfila">
            <div class="dclabel" style="width:400px">
                <strong>Quiero donar parte del programa actívate</strong>
            </div>
        </div>
        <div class="dcfila">
            <div class="dclabel" style="width:400px">
                <input name="quierodonar" checked type="radio" value="Donando 200€"/>&nbsp;Donando 200€ anualmente<br/>
                <input name="quierodonar" type="radio" value="Donando 150€"/>&nbsp;Donando 150€ anualmente<br/>
                <input name="quierodonar" type="radio" value="Donando 100€"/>&nbsp;Donando 100€ anualmente<br/>
                <input name="quierodonar" type="radio" value="Donando 50€"/>&nbsp;Donando 50€ anualmente<br/>
                <input name="quierodonar" type="radio" value="Otro importe"/>&nbsp;otro importe<br/>
            </div>
        </div>
        <div class="dcfila">
            <div class="dclabel">Importe</div>
            <input type="text" name="dcotroimporte" id="dcotroimporte" class="dcimput" />
        </div>
        <div class="dcfila">
            <div class="dclabel" style="width:200px">
                <strong>Con carácter</strong>
            </div>
        </div>
        <div class="dcfila">
            <div class="dclabel" style="width:400px">
                <input name="caracter" checked type="radio" value="Trimestral"/>&nbsp;Trimestral<br/>
                <input name="caracter" type="radio" value="Semestral"/>&nbsp;Semestral<br/>
                <input name="caracter" type="radio" value="Anual"/>&nbsp;Anual<br/>
            </div>
        </div>
        <div class="dcfila">
            <div class="dclabel" style="width:400px"><strong>Número de cuenta de cargo</strong></div>
        </div>
        <div class="dcfila">
            <div class="dclabel">Nº de cuenta</div>
            <input type="text" alt="Nº de cuenta" name="dcuenta" id="dcuenta" class="dcimput requerido" /><span class="required">*</span>
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
    carga_activate();
</script>
