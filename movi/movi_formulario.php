<?php
/** INI funciones Humberto **/
function capturaDocumentos(){

return "
<style>
img ssa {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}

img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>


<script>
$('#EnviarReporte').click(function(){
	
	console.log('se ha enviado el reporte');
	
    var contenido=
            
          '<div>'+
'                                                   <ul class=\"steps\" style=\"margin-left: 0\">'+
'                                                       <li data-step=\"1\" >'+
'                                                           <span class=\"step\">1</span>'+
'                                                           <span class=\"title\">ALS</span>'+
'                                                       </li>'+
''+
'                                                       <li data-step=\"2\" >'+
'                                                           <span class=\"step\">2</span>'+
'                                                           <span class=\"title\">S702</span>'+
'                                                       </li>'+
''+
'                                                       <li data-step=\"3\" >'+
'                                                           <span class=\"step\">3</span>'+
'                                                           <span class=\"title\">C617</span>'+
'                                                       </li>'+
''+
'                                                       <li data-step=\"4\" >'+
'                                                           <span class=\"step\" >4</span>'+
'                                                           <span class=\"title\">S028</span>'+
'                                                       </li>'+
'                                                   </ul>'+
'                                               </div> <hr>'  +
'<p class=\"alert alert-warning \">' +
 '  El proceso tomara unos minutos en cuanto termine recibira una notificacion via email  ' +
  '                                                       </p> '  ;




               $.alert({
                icon: 'fa fa-gears  fa-2x fa-fw',
                title: 'Data Tracing Process Launch',
                content: contenido,
                columnClass: 'medium',
                animationSpeed:800,
                animationBounce:1,
                animation: 'zoom',
                closeAnimation: 'zoom',
                 animationBounce: 2.5,
                animateFromElement: false,
                theme: 'material',
                type: 'blue',
                buttons: {
                    Aceptar: {
                         btnClass: 'btn-green',
                         action:function () {

							window.location.href = \"http://localhost/dtap/movi/movi_escritorio_ura_tab.php\";
                        }
                    }
                }
            });




	

});
</script>

<div id=\"home\" class=\"tab-pane active\">
			<div class=\"row\">
				<div class=\"col-xs-12 col-sm-2 center\">
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>				
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>		
		<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>										
								<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>

					<span class=\"\">

											
<i class=\" ace-icon fa fa-paperclip  big-icon\"></i>



					</span>




				</div><!-- /.col -->

				<div class=\"col-xs-12 col-sm-10\">
<!--INI  nueva tabla para LTP -->

<div class=\"table table-condensed\">
    <div class=\"table-responsive\" id=\"contenidoTabla\">
        
        <table id=\"LTP\" class=\"table table-hover table-sm\">
            <thead>
                <tr id=\"ltptr\">
                    <th>Producto</th>
                    <th>Feed ID</th>
                    <th>No de crédito</th>
                    <th>Atributo</th>
                    <th>Fecha de reporte</th>
                    <th>Tipo de LTP</th>
                    <th>Extraer</th>
                    <th>Carga manual</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td id=\"ltptd\">HIPOTECA</td>
                    <td id=\"ltptd\">RT-SGL-145678-JIYH-FF-MX</td>
                    <td id=\"ltptd\">0102030405</td>
                    <td id=\"ltptd\">CTE_GFCID</td>
                    <td id=\"ltptd\">
                        <div class=\"profile-info-row\">
							<div class=\"profile-info-value  col-xs-6 \">
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-calendar fa-lg\"></i>
												</span>
								<input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
								class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
								</div>
							</div>
						</div>
                    </td>
                    <td id=\"ltptd\">
                        <select id=\"tablaltp\" style=\"width:auto\">
                        	<option value=\"\">Seleccciona</option>
                            <option value=\"\">Estado de cuenta</option>
                            <option value=\"\">Contrato</option>
                            <option value=\"\">Tarjeta de crédito</option>
                            <option value=\"\">KYC</option>
                            <option value=\"\">PP</option>
                        </select>
                    </td>
                    <td id=\"ltptd\">
                        <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\" onclick=\"window.open('conexion.html', 'popup', 'top=100, left=200, width=400, height=100, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')\" rel=\"nofollow\">Conectar</a></p>
                    </td>
                    <td id=\"ltptd\">
                        <!--<a name=\"\" id=\"\" class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">Buscar...</a>-->
                        <div class=\"profile-info-row\">
                                <input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
                                
                                    <div class=\"profile-info-value col-xs-6 \">
                                        <span>				
                                                <div class=\"col-xs-12\">
                            
                                                </div>											
                                        </span>
                                    </div>
                            </div>

                    </td>
                    </tr>
                    <tr>
                        <td id=\"ltptd\">PRESTAMOS</td>
                        <td id=\"ltptd\">RT-SGL-145678-FF-MX-000</td>
                        <td id=\"ltptd\">00000000</td>
                        <td id=\"ltptd\">CUENTABASICA</td>
                        <td id=\"ltptd\">
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-value  col-xs-6 \">
                                    <div class=\"input-group\">
                                                    <span class=\"input-group-addon\">
                                                        <i class=\" blue fa fa-calendar fa-lg\"></i>
                                                    </span>
                                    <input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
                                    class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td id=\"ltptd\">
                            <select id=\"tablaltp\" style=\"width:auto\">
                                <option value=\"\">Seleccciona</option>
                                <option value=\"\">Estado de cuenta</option>
                                <option value=\"\">Contrato</option>
                                <option value=\"\">Tarjeta de crédito</option>
                                <option value=\"\">KYC</option>
                                <option value=\"\">PP</option>
                            </select>
                        </td>
                        <td id=\"ltptd\">
                            <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\" onclick=\"window.open('conexion.html', 'popup', 'top=100, left=200, width=400, height=100, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')\" rel=\"nofollow\">Conectar</a></p>
                        </td>
                        <td id=\"ltptd\">
                            <!--<a name=\"\" id=\"\" class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">Buscar...</a>-->
                            <div class=\"profile-info-row\">
                                    <input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
                                    
                                        <div class=\"profile-info-value col-xs-6 \">
                                            <span>				
                                                    <div class=\"col-xs-12\">
                                
                                                    </div>											
                                            </span>
                                        </div>
                                </div>
    
                        </td>
                        </tr>
                    <tr>
                        <td id=\"ltptd\">TARJETA DE CREDITO</td>
                        <td id=\"ltptd\">RT-SGL-145678-M78546-MX</td>
                        <td id=\"ltptd\">07892315</td>
                        <td id=\"ltptd\">N_CURR_BAL</td>
                        <td id=\"ltptd\">
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-value  col-xs-6 \">
                                    <div class=\"input-group\">
                                                    <span class=\"input-group-addon\">
                                                        <i class=\" blue fa fa-calendar fa-lg\"></i>
                                                    </span>
                                    <input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
                                    class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td id=\"ltptd\">
                            <select id=\"tablaltp\" style=\"width:auto\">
                                <option value=\"\">Seleccciona</option>
                                <option value=\"\">Estado de cuenta</option>
                                <option value=\"\">Contrato</option>
                                <option value=\"\">Tarjeta de crédito</option>
                                <option value=\"\">KYC</option>
                                <option value=\"\">PP</option>
                            </select>
                        </td>
                        <td id=\"ltptd\">
                            <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\" onclick=\"window.open('conexion.html', 'popup', 'top=100, left=200, width=400, height=100, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')\" rel=\"nofollow\">Conectar</a></p>
                        </td>
                        <td id=\"ltptd\">
                            <!--<a name=\"\" id=\"\" class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">Buscar...</a>-->
                            <div class=\"profile-info-row\">
                                    <input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
                                    
                                        <div class=\"profile-info-value col-xs-6 \">
                                            <span>				
                                                    <div class=\"col-xs-12\">
                                
                                                    </div>											
                                            </span>
                                        </div>
                                </div>

                        </td>
                    </tr>
                    <tr>
                        <td id=\"ltptd\">TARJETA DE CREDITO</td>
                        <td id=\"ltptd\">RT-SGL-145678-MTDS-FF-MX</td>
                        <td id=\"ltptd\">0102030405</td>
                        <td id=\"ltptd\">N_TAX_BNP_LIQ</td>
                        <td id=\"ltptd\">
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-value  col-xs-6 \">
                                    <div class=\"input-group\">
                                                    <span class=\"input-group-addon\">
                                                        <i class=\" blue fa fa-calendar fa-lg\"></i>
                                                    </span>
                                    <input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
                                    class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td id=\"ltptd\">
                            <select id=\"tablaltp\" style=\"width:auto\">
                                <option value=\"\">Seleccciona</option>
                                <option value=\"\">Estado de cuenta</option>
                                <option value=\"\">Contrato</option>
                                <option value=\"\">Tarjeta de crédito</option>
                                <option value=\"\">KYC</option>
                                <option value=\"\">PP</option>
                            </select>
                        </td>
                        <td id=\"ltptd\">
                            <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\" onclick=\"window.open('conexion.html', 'popup', 'top=100, left=200, width=400, height=100, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')\" rel=\"nofollow\">Conectar</a></p>
                        </td>
                        <td id=\"ltptd\">
                            <!--<a name=\"\" id=\"\" class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">Buscar...</a>-->
                            <div class=\"profile-info-row\">
                                    <input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
                                    
                                        <div class=\"profile-info-value col-xs-6 \">
                                            <span>				
                                                    <div class=\"col-xs-12\">
                                
                                                    </div>											
                                            </span>
                                        </div>
                                </div>

                        </td>
                    </tr>
                    <tr>
                        <td id=\"ltptd\">HIPOTECA</td>
                        <td id=\"ltptd\">RT-YPW-PPLKR-9854-FF-MX01</td>
                        <td id=\"ltptd\">019073545</td>
                        <td id=\"ltptd\">ROLLOVER</td>
                        <td id=\"ltptd\">
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-value  col-xs-6 \">
                                    <div class=\"input-group\">
                                                    <span class=\"input-group-addon\">
                                                        <i class=\" blue fa fa-calendar fa-lg\"></i>
                                                    </span>
                                    <input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
                                    class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td id=\"ltptd\">
                            <select id=\"tablaltp\" style=\"width:auto\">
                                <option value=\"\">Seleccciona</option>
                                <option value=\"\">Estado de cuenta</option>
                                <option value=\"\">Contrato</option>
                                <option value=\"\">Tarjeta de crédito</option>
                                <option value=\"\">KYC</option>
                                <option value=\"\">PP</option>
                            </select>
                        </td>
                        <td id=\"ltptd\">
                            <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\" onclick=\"window.open('conexion.html', 'popup', 'top=100, left=200, width=400, height=100, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')\" rel=\"nofollow\">Conectar</a></p>
                        </td>
                        <td id=\"ltptd\">
                            <!--<a name=\"\" id=\"\" class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">Buscar...</a>-->
                            <div class=\"profile-info-row\">
                                    <input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
                                    
                                        <div class=\"profile-info-value col-xs-6 \">
                                            <span>				
                                                    <div class=\"col-xs-12\">
                                
                                                    </div>											
                                            </span>
                                        </div>
                                </div>
    
                        </td>
                        </tr>
                        <tr>
                            <td id=\"ltptd\">PRESTAMOS</td>
                            <td id=\"ltptd\">RT-SGL-14FDKO8-MTDS-KFJ-5432</td>
                            <td id=\"ltptd\">0102030405</td>
                            <td id=\"ltptd\">CTE_LIBRE2</td>
                            <td id=\"ltptd\">
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-value  col-xs-6 \">
                                        <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\" blue fa fa-calendar fa-lg\"></i>
                                                        </span>
                                        <input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
                                        class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td id=\"ltptd\">
                                <select id=\"tablaltp\" style=\"width:auto\">
                                    <option value=\"\">Seleccciona</option>
                                    <option value=\"\">Estado de cuenta</option>
                                    <option value=\"\">Contrato</option>
                                    <option value=\"\">Tarjeta de crédito</option>
                                    <option value=\"\">KYC</option>
                                    <option value=\"\">PP</option>
                                </select>
                            </td>
                            <td id=\"btn1 ltptd\">
                                <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\" onclick=\"window.open('conexion.html', 'popup', 'top=100, left=200, width=400, height=100, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')\" rel=\"nofollow\">Conectar</a></p>
                            </td>
                            <td id=\"ltptd\">
                                <!--<a name=\"\" id=\"\" class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">Buscar...</a>-->
                                <div id=\"btn2\" class=\"profile-info-row\">
                                        <input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
                                        
                                            <div class=\"profile-info-value col-xs-6 \">
                                                <span>				
                                                        <div class=\"col-xs-12\">
                                    
                                                        </div>											
                                                </span>
                                            </div>
                                    </div>
        
                            </td>
                            </tr>
            </tbody>
        </table>
        
    </div>
</div>
<a name=\"\" id=\"btnProcesarLTP\"  class=\"btn btn-primary\" href=\"#\" role=\"button\">Procesar</a>

<!--
<script language=\"javascript\" type=\"text/javascript\">
    function habilitar(){
        boton_1 = document.getElementById(\"btn1\").value;
        boton_2 = document.getElementById(\"btn2\").value;
        val = 0;
        if(boton_1==\"\"){
            val++;
        }
        if(boton_2==\"\"){
            val++;
        }
        if(val==0){
            document.getElementById(\"btn1\").disabled = false;
        } else {
            document.getElementById(\"btn1\").disabled = true;
        }
    }
    document.getElementById(\"btn1\").addEventListener(\"click\", ()=>{
        alert(\"boton\")
    })

</script>
-->

<!-- FIN  nueva tabla para LTP -->

<!--
					<h4 class=\"blue\">
						<span class=\"middle\"> </span>

						<span class=\"label label-info arrowed-in-right\">
							<i class=\"ace-icon fa fa-circle smaller-80 align-middle\"></i>
							Data Tracing  Process
						</span>
					</h4>
-->
					<div class=\"profile-user-info\">

					<div class=\"profile-info-row\">
					
							<div class=\"profile-info-name blue\"> </div>
						
													
										<!--		
										<input id=\"archivo-1\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
										-->

							
							<div class=\"profile-info-value col-xs-6 \">
							<span>

								<div class=\"col-xs-12\">

								</div>											
							</span>
							</div>
							
						</div>		

						<div class=\"profile-info-row\">
											<div class=\"profile-info-name blue\"> </div>
											<!--
												<input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
												-->
													<div class=\"profile-info-value col-xs-6 \">
														<span>				
																<div class=\"col-xs-12\">
											
																</div>											
														</span>
													</div>
											</div>

											




						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\">  </div>
							<!--
<input id=\"archivo-3\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">															</div>											
-->
							<div class=\"profile-info-value col-xs-6 \">
								<span>

     <div class=\"col-xs-12\">
								</span>
							</div>
						</div>
						
						<!---->
<!--						
						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> CV </div>
	 <input id=\"archivo-4\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">

							<div class=\"profile-info-value col-xs-6 \">
								<span>

     <div class=\"col-xs-12\">
	 
															</div>											
								</span>
							</div>
						</div>
						
				<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Identificación Oficial</div>
<input id=\"archivo-5\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">	 

							<div class=\"profile-info-value col-xs-6 \">
								<span>

     <div class=\"col-xs-12\">
	 </div>											
								</span>
							</div>
						</div>	

	<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Certificado De Estudios</div>
<input id=\"archivo-6\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">	 

							<div class=\"profile-info-value col-xs-6 \">
								<span>

     <div class=\"col-xs-12\">
	 </div>											
								</span>
							</div>
						</div>			
<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Comprobante De Domicilio</div>
<input id=\"archivo-7\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">

							<div class=\"profile-info-value col-xs-6 \">
								<span>

     <div class=\"col-xs-12\">
	 </div>											
								</span>
							</div>
						</div>							

-->						

						
					</div>

					<div class=\"hr hr-8 dotted\"></div>

					<div class=\"profile-user-info\">


					</div>
					</div> <!-- se anadio este div -->
				</div><!-- /.col -->
			</div><!-- /.row -->

			<div class=\"space-20\"></div>

		</div>


";
}

/** FIN funciones Humberto **/



function capturaDocumentosold(){

/** Base 

	
**/

return "
<div id=\"home\" class=\"tab-pane active\">
			<div class=\"row\">
				<div class=\"col-xs-12 col-sm-2 center\">
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>				
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>		
		<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>										
								<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>

					<span class=\"\">

											
<i class=\"ace-icon fa fa-street-view  big-icon\"></i>

					</span>




				</div><!-- /.col -->

				<div class=\"col-xs-12 col-sm-10\">
					<h4 class=\"blue\">
						<span class=\"middle\"> </span>

						<span class=\"label  label-info  arrowed-in-right\">
							<i class=\"ace-icon fa fa-circle smaller-80 align-middle\"></i>
							Data Tracing  Process
						</span>
					</h4>

					<div class=\"profile-user-info\">

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Pais </div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
<div class=\"form-group\">
								<div class=\"col-xs-12\">
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-street-view\"></i>
												</span>
												<input type=\"tel\" value=\"\" id=\"telefonoce\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Pais\" required=\"\" autofocus=\"\">
											</div>
								</div>
														</div>




													</span>
												</div>
											</div>

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Estado </div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					<input type=\"text\" placeholder=\"Teléfono de Oficina\" name=\"txt_nombre\" id=\"txt_nombre\" class=\"form-control text-capitalize\" required=\"\" autofocus=\"\" data-bv-field=\"txt_nombre\">								
													</span>
												</div>
											</div>




						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> C.P. </div>

							<div class=\"profile-info-value col-xs-6 \">
								<span>
<input type=\"text\" placeholder=\"Teléfono Celular\" name=\"txt_nombre\" id=\"txt_nombre\" class=\"form-control text-capitalize\" required=\"\" autofocus=\"\" data-bv-field=\"txt_nombre\">								
								</span>
							</div>
						</div>

						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Colonia </div>

							<div class=\"profile-info-value  col-xs-6 \">
								<span>
								<input type=\"text\" placeholder=\"@twitter\" name=\"txt_localizacion\" id=\"txt_localizacion\" class=\"form-control text-capitalize\" required=\"\" autofocus=\"\" data-bv-field=\"txt_localizacion\">
								</span>
							</div>
						</div>


						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Calle </div>

							<div class=\"profile-info-value  col-xs-6 \">
								<span>
								<input type=\"text\" placeholder=\"@twitter\" name=\"txt_localizacion\" id=\"txt_localizacion\" class=\"form-control text-capitalize\" required=\"\" autofocus=\"\" data-bv-field=\"txt_localizacion\">
								</span>
							</div>
						</div>

						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Numero Interior </div>

							<div class=\"profile-info-value  col-xs-6 \">
								
								<span><input type=\"text\" placeholder=\"\" name=\"txt_edad\" id=\"txt_edad\" class=\"form-control text-capitalize\" required=\"\" autofocus=\"\" data-bv-field=\"txt_edad\">
								</span>
							</div>
						</div>

					</div>

					<div class=\"hr hr-8 dotted\"></div>

					<div class=\"profile-user-info\">


					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->

			<div class=\"space-20\"></div>

		</div>


";

} // fin de capturaDocumentos

function capturaDomicilio(){

return "
<div id=\"home\" class=\"tab-pane active\">
			<div class=\"row\">
				<div class=\"col-xs-12 col-sm-2 center\">
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>				
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>		
		<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>										
								<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>

					<span class=\"\">

											
<i class=\"ace-icon fa fa-street-view  big-icon\"></i>

					</span>




				</div><!-- /.col -->

				<div class=\"col-xs-12 col-sm-10\">
					<h4 class=\"blue\">
						<span class=\"middle\"> </span>

						<span class=\"label  label-info  arrowed-in-right\">
							<i class=\"ace-icon fa fa-circle smaller-80 align-middle\"></i>
							Data Tracing  Process
						</span>
					</h4>

					<div class=\"profile-user-info\">

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Pais </div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-street-view\"></i>
												</span>
												<input type=\"text\" value=\"\" id=\"telefonoce\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Pais\" required=\"\" autofocus=\"\">
											</div>			
													</span>
												</div>
											</div>

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Estado </div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-street-view\"></i>
												</span>
												<input type=\"text\" value=\"\" id=\"telefonoce\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Estado\" required=\"\" autofocus=\"\">
											</div>								
													</span>
												</div>
											</div>




						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> C.P. </div>

							<div class=\"profile-info-value col-xs-6 \">
								<span>
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-street-view\"></i>
												</span>
												<input type=\"number\" value=\"\" id=\"telefonoce\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"C.P.\" required=\"\" autofocus=\"\">
											</div>
								</span>
							</div>
						</div>

						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Colonia </div>

							<div class=\"profile-info-value  col-xs-6 \">
								<span>
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-street-view\"></i>
												</span>
												<input type=\"text\" value=\"\" id=\"telefonoce\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Colonia\" required=\"\" autofocus=\"\">
											</div>
								</span>
							</div>
						</div>


						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Calle </div>

							<div class=\"profile-info-value  col-xs-6 \">
								<span>
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-street-view\"></i>
												</span>
												<input type=\"text\" value=\"\" id=\"telefonoce\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Calle\" required=\"\" autofocus=\"\">
											</div>
								</span>
							</div>
						</div>

						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Numero Interior </div>

							<div class=\"profile-info-value  col-xs-6 \">
								
								<span>
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-street-view\"></i>
												</span>
												<input type=\"number\" value=\"\" id=\"telefonoce\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Numero Interior\" required=\"\" autofocus=\"\">
											</div>
								</span>
							</div>
						</div>

					</div>

					<div class=\"hr hr-8 dotted\"></div>

					<div class=\"profile-user-info\">


					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->

			<div class=\"space-20\"></div>

		</div>

";
} // fin de function capturaDomicilio()



function capturaContacto(){

return "



<div id=\"home\" class=\"tab-pane active\">
			<div class=\"row\">
				<div class=\"col-xs-12 col-sm-2 center\">
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>										
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
									<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>

					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>

					<span class=\"\">
					<i class=\"ace-icon fa fa-database big-icon\"></i>

					</span>


					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>

					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>

					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>

					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>
					<div class=\"space space-4\"></div>

					


					<a id=\"btnConnx\" href=\"#\" class=\"btn btn-sm btn-block btn-primary\">
						<i class=\"ace-icon fa fa-plus-circle bigger-120\"></i>
						<span class=\"bigger-110\">Connection</span>
					</a>

					<div class=\"space space-4\"></div>




					
				</div><!-- /.col -->

				<div class=\"col-xs-12 col-sm-6\">
<!--
					<h4 class=\"blue\">
						<span class=\"middle\"> </span>

						<span class=\"label  label-info  arrowed-in-right\">
							<i class=\"ace-icon fa fa-circle smaller-80 align-middle\"></i>
							Data Tracing  Process
						</span>
					</h4>
-->


					<div class=\"profile-user-info\">

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Reporte </div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
						<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-cc-visa\"></i>
												</span>
												<!--
												<input type=\"text\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Email\" required=\"\" autofocus=\"\">
												-->
											  <select id=\"combobox1\" name= \"combobox1\" data-placeholder=\"Select Report\" class=\"chosen-select\" tabindex=\"5\" style=\"width: 425px\">
												
												  </select>
											</div>							
													</span>
												</div>
											</div>



						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Producto </div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
											<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa  fa-cc-visa\"></i>
												</span>
												
												<!--
												<input type=\"tel\" value=\"\" id=\"telefono\" name=\"telefono\" class=\"form-control\" placeholder=\"Numero De oficina\" required=\"\" autofocus=\"\">
												-->
									  <!-- select Group 
												<div class=\"col-lg-8\">
												  -->
										<select id=\"combobox2\" name= \"combobox2\"data-placeholder=\"Productos...\" 
											class=\"chosen-select\"  style=\"width:425px;\" tabindex=\"4\">
											
										</select>
								<!--				  
												</div>
												
								 END select Group -->
											</div>					
											</span>
												</div>
											</div>



											<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Atributos</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
											<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa  fa-cc-visa\"></i>
												</span>
												
												<!--
												<input type=\"tel\" value=\"\" id=\"telefono\" name=\"telefono\" class=\"form-control\" placeholder=\"Numero De oficina\" required=\"\" autofocus=\"\">
												-->
									  <!-- select Group 
												<div class=\"col-lg-8\">
												  -->
										<select id=\"combobox3\" name= \"combobox3\" data-placeholder=\"Atributos...\" 
											class=\"chosen-select\"  style=\"width:425px;\" tabindex=\"4\" multiple>
											
										</select>
								<!--				  
												</div>
												
								 END select Group -->
											</div>					
											</span>
												</div>
											</div>


											<script type=\"text/javascript\">
    
											let reportes = [\"Seleccione Reporte\",\"FRY-14Q\",\"2052A\",\"RWA\",\"IPAB\",\"CNR\"];
											let productos = [\"Préstamos personales\",\"Tarjetas\",\"Depósitos\",\"Hipoteca\",
											\"Tarjetas de crédito\",\"Pequeños negocios\",\"Créditos de consumo\"];
											let atributos = [\"NUMCLIENTE\",\"TPER\",\"CUENTABASICA\",\"ROLLOVER\",\"DIGITO\",\"CTE_LIBRE\", 
											\"V_ACCT\",\"N_CURR_BAL\",\"N_CYCLE_DUE\",\"V_ORG\",\"N_TAX_BNP_LIQ\",
											\"NUMCLIENTE\",\"TPER\",\"DIGITO\",\"ROLLOVER\",\"CUENTABASICA\",\"CTE_GFCID\",\"CTE_LIBRE2\",
											\"NUMCLIENTE\",\"TPER\",\"CTE_GFCID\",\"CTE_LIBRE2\",\"CTE_NUM\",
											\"FECHA_DISPOSICION\",\"FECHA_VENCIMIENTO\",\"CONTRATO\",\"MX_ESTATUS_CONTRATO\",\"TASA_INTERES\",\"PLAZO\"]
										
											let combobox1 = document.getElementById(\"combobox1\")
											let combobox2 = document.getElementById(\"combobox2\")
											let combobox3 = document.getElementById(\"combobox3\")
										
											function Recorrer(combobox,valores)
											{
												combobox2.innerHTML = '' 
												combobox3.innerHTML = '' 
										
												for(let index of valores)
												{
													combobox.innerHTML +=`
													<option>\${index}</option>
													` 
												}
											}
										
											function llenarproduc(){
												Recorrer(combobox1,reportes)
											}
											llenarproduc()
										
											combobox1.addEventListener('change',(e)=>{
												let dato=e.target.value
												switch (dato) {
													case 'Seleccione Reporte':
														Recorrer(combobox2)
														break;
													case 'FRY-14Q':
														Recorrer(combobox2,productos.slice(4,7))
														break;
													case '2052A':
														Recorrer(combobox2,productos.slice(0,4))
														break;
													case 'RWA':
														Recorrer(combobox2,productos.slice(2,5))
														break;
													case 'IPAB':
														Recorrer(combobox2,productos.slice(1,4))
														break;
													case 'CNR':
														Recorrer(combobox2,productos.slice(0,3))
														break;
												
													default:
														break;
												}
											})
										
											function Recorrer1(comboboxM,valoress)
											{
												combobox3.innerHTML = '' 
										
												for(let index of valoress)
												{
													comboboxM.innerHTML +=`
													<option value=\" \">\${index}</option>
													` 
												}
											}
										
											function llenarproduc2(){
												Recorrer1(combobox2,atributos)
											}
										
											combobox2.addEventListener('change',(e)=>{
												let dato1=e.target.value
												switch (dato1) {
													case 'Préstamos personales':
														Recorrer1(combobox3,atributos.slice(0,6))
														break;
													case 'Tarjetas':
														Recorrer1(combobox3,atributos.slice(6,11))
														break;
													case 'Depósitos':
														Recorrer1(combobox3,atributos.slice(11,18))
														break;
													case 'Hipoteca':
														Recorrer1(combobox3,atributos.slice(18,23))
														break;
													case 'Tarjetas de crédito':
														Recorrer1(combobox3,atributos.slice(23,26))
														break;
													case 'Pequeños negocios':
														Recorrer1(combobox3,atributos.slice(26,29))
														break;
													case 'Créditos de consumo':
														Recorrer1(combobox3,atributos.slice(2,6))
														break;
												
													default:
														break;
												}
											});
										
										</script>





					<div class=\"profile-info-row\">
					
							<div class=\"profile-info-name blue\"> Date Information </div>

							<div class=\"profile-info-value  col-xs-12 \">
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-calendar fa-lg\"></i>
												</span>
								<input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
								class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
								</div>
							</div>
							
						</div>					



						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Num.Rows </div>

							<div class=\"profile-info-value  col-xs-12 \">
									<div class=\"input-group\">
											<span class=\"input-group-addon\">
												<i class=\"blue fa fa-database\"></i>
											</span>
											<input type=\"text\" value=\"100\" id=\"numRows\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Número de regstros a recuperar.\" required=\"\" autofocus=\"\">
									</div>				
								
								</span>
							</div>
						</div>

					</div>

					<div class=\"hr hr-8 dotted\"></div>

					<div class=\"profile-user-info\">


					</div>
				</div><!-- /.col -->
				
				<div class=\"col-xs-12 col-sm-4\">
				</div><!-- /.col -->
				
			</div><!-- /.row -->

			<div id=\"ContenedorJQGrid\"   class=\"space-20\">
			
<!-- Para recibior  JQGrid -->

				<div class=\"ibox-content  col-xs-12 col-sm-8 \">
				<div class=\"board\">
					<div class=\"board-inner\">


					<div class=\"jqGrid_wrapper\">
						<table id=\"table_list_2\"></table>
						<div id=\"pager_list_2\"></div>
					</div>


					</div>
				</div>
				</div>
<!-- Fin Para recibior  JQGrid -->


			
			
			</div>

		</div>

";
} // fin de function capturaContacto()

function capturaPersonales(){

return "<div id=\"home\" class=\"tab-pane active\">
			<div class=\"row\">
				<div class=\"col-xs-12 col-sm-3 center\">
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>				
					<span class=\"\">
					<!--
						<img class=\"editable img-responsive\" 
						alt=\"Regulatory Report\" id=\"avatar2\" src=\"../images/report.png\" 
						style=\"width: 220px;height:220px;\">
						
					-->	
						<i class=\"ace-icon fa fa-cog    big-icon\"></i>
						
					</span>

<!--
					<div class=\"space space-4\"></div>
					

					<a href=\"#\" class=\"btn btn-sm btn-block btn-success\">
						<i class=\"ace-icon fa fa-plus-circle bigger-120\"></i>
	
						<span class=\"bigger-110\">RRID:12-100-1-M1C031P-0000064 </span>
						
					</a>
-->
				</div><!-- /.col -->

				<div class=\"col-xs-12 col-sm-9\">
					<h4 class=\"blue\">
						<span class=\"middle\"> </span>

						<span class=\"label  label-info  arrowed-in-right\">
							<i class=\"ace-icon fa fa-circle smaller-80 align-middle\"></i>
							Data Tracing  Process
						</span>
					</h4>

					<div class=\"profile-user-info\">

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Data Tracing Name </div>

												<div class=\"profile-info-value col-xs-6 \">
													<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue fa fa-key fa-lg\"></i>
												</span>
												<input type=\"text\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Id Data Tracing Event\" required=\"\" autofocus=\"\">
											</div>
												</div>
											</div>

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Reporte </div>

												<div class=\"profile-info-value col-xs-6 \">
													<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\"blue  fa fa-file-pdf-o fa-lg\"></i>
												</span>
												<input type=\"text\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Report Name\" required=\"\" autofocus=\"\" >
											</div>
												</div>
											</div>




						<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> Report Owner </div>

							<div class=\"profile-info-value col-xs-6 \">
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-user fa-lg\"></i>
												</span>
												<input type=\"text\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\" Report Owner\" required=\"\" autofocus=\"\">
											</div>
							</div>
						</div>


						<div class=\"profile-info-row\">
						<!--
							<div class=\"profile-info-name blue\"> Date Information erase</div>

							<div class=\"profile-info-value  col-xs-6 \">
								<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-calendar fa-lg\"></i>
												</span>
								<input type=\"date\" value=\"\" id=\"inputUsuario\" name=\"inputUsuario\" 
								class=\"form-control\" placeholder=\"Fecha De la información\" required=\"\" autofocus=\"\">
								</div>
							</div>
						-->	
						</div>


					</div>

					<div class=\"hr hr-8 dotted\"></div>

					<div class=\"profile-user-info\">


					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->

			<div class=\"space-20\"></div>

		</div>
";

}// fin de capturaPersonales

$Personales=capturaPersonales();
$Contacto= capturaContacto();
$Domicilio = capturaDomicilio();
$Documentos = capturaDocumentos();

echo "
          
<div class=\"wrapper wrapper-content animated fadeInRight\" id=\"main_page_2\" style=\"
    padding-top: 0px;\">
						<div class=\"row\">
							<div class=\"col-lg-12 \">
								<div class=\"ibox float-e-margins\">
									<div class=\"ibox-title col-lg-12 \">
										<h3>RWA - Data Tracing Process Configuration </h3>
									</div>

<!-- inicio formulario -->



							<div class=\"col-xs-12\">
								<!-- PAGE CONTENT BEGINS -->
								<div class=\"tabbable\">
									<ul class=\"nav nav-tabs padding-18 tab-size-bigger\" id=\"myTab\">
										<li class=\"active\">
											<a data-toggle=\"tab\" href=\"#faq-tab-1\">
												<i class=\"blue ace-icon fa fa-cog bigger-220\"></i>
												Configuración
											</a>
										</li>

										<li>
											<a data-toggle=\"tab\" href=\"#faq-tab-2\">
												<i class=\"blue ace-icon fa  fa-database bigger-220\"></i>
												Data Set
											</a>
										</li>

										<li>
											<a data-toggle=\"tab\" href=\"#faq-tab-7\">
												<i class=\"blue ace-icon  fa fa-file-excel-o bigger-220\"></i>
												Custom Data Set
											</a>
										</li>


<!--

										<li>
											<a data-toggle=\"tab\" href=\"#faq-tab-3\">
												<i class=\"blue ace-icon fa fa-street-view bigger-220\"></i>
												Domicilio
											</a>
										</li>

-->
										<li>
											<a data-toggle=\"tab\" href=\"#faq-tab-4\">
												<i class=\"blue ace-icon fa fa-paperclip bigger-220\"></i>
												LTP
											</a>
										</li>

<!--
										<li>
											<a data-toggle=\"tab\" href=\"#faq-tab-5\">
												<i class=\"blue ace-icon fa fa-gears bigger-220\"></i>
												Data Tracing Process
											</a>
										</li>
-->
<!--

										<li>
											<a data-toggle=\"tab\" href=\"#faq-tab-6\">
												<i class=\"blue ace-icon fa fa-th-list bigger-220\"></i>
												Custom Data Set
											</a>
										</li>

-->



									</ul>



									<div class=\"tab-content no-border padding-24\">


										<div id=\"faq-tab-1\" class=\"tab-pane fade in active\">
											<h4 class=\"blue\">
												<i class=\"ace-icon fa fa-check bigger-110\"></i>
												Regulatory Data Tracing Process Configuration
											</h4>

$Personales


											<div class=\"space-8\"></div>

											<div id=\"faq-list-1\" class=\"panel-group accordion-style1 accordion-style2\">

												<div class=\"panel panel-default\">

												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>
											</div>
										</div>







										<div id=\"faq-tab-2\" class=\"tab-pane fade\">
											<h4 class=\"blue\">
												<i class=\"blue  ace-icon fa fa-check bigger-110\"></i>
												Reportes y Productos
											</h4>


$Contacto


											<div class=\"space-8\"></div>

											<div id=\"faq-list-2\" class=\"panel-group accordion-style1 accordion-style2\">
												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>
											</div>
										</div>





										<div id=\"faq-tab-3\" class=\"tab-pane fade\">
											<h4 class=\"blue\">
												<i class=\"blue ace-icon fa fa-street-view bigger-110\"></i>
												Datos de Domicilio
											</h4>
$Domicilio


											<div class=\"space-8\"></div>

											<div id=\"faq-list-3\" class=\"panel-group accordion-style1 accordion-style2\">
												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>
											</div>
										</div>
										<div id=\"faq-tab-4\" class=\"tab-pane fade\">
											<h4 class=\"blue\">
												<i class=\"blue ace-icon fa fa-check bigger-110\"></i>
												Regulatory Report Account Balance
											</h4>
$Documentos

											<div class=\"space-8\"></div>

											<div id=\"faq-list-4\" class=\"panel-group accordion-style1 accordion-style2\">
												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
													
												</div>

												<div class=\"panel panel-default\">
												</div>
											</div>
										</div>
<!-- fin propuesto-->
							


										<div id=\"faq-tab-5\" class=\"tab-pane fade\">
						<div id=\"faq-tab-5\" class=\"tab-pane fade active in\">
											<h4 class=\"blue\">
												<i class=\"blue ace-icon fa fa-database bigger-110\"></i>
												Data Tracing Process Launch
											</h4>

<div id=\"home\" class=\"tab-pane active\">
			<div class=\"row\">
				<div class=\"col-xs-12 col-sm-2 center\">
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>				
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>		
		<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>										
								<div class=\"space space-4\"></div>
				<div class=\"space space-4\"></div>

					<span class=\"\">

											
<i class=\"ace-icon fa fa-gears    big-icon\"></i>

					</span>




				</div><!-- /.col -->

				<div class=\"col-xs-12 col-sm-10\">
					<h4 class=\"blue\">
						<span class=\"middle\"> </span>

						
					</h4>
					

					<div class=\"profile-user-info\">
					
					<div class=\"profile-info-row\">
					
					
					
					
												<div class=\"profile-info-name blue\"> Product Name
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>				
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card\"></i>
												</span>
												<input type=\"text\" value=\"Estado de Cuenta Credito Oro\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Función\" required=\"\" autofocus=\"\"readonly>
											</div>						
												</div>
												
											</div>
					
											<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Report Name
												
</div>

								<div class=\"profile-info-value col-xs-6 \">
													<span>				
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card\"></i>
												</span>
												<input type=\"text\" value=\"IPAB\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Función\" required=\"\" autofocus=\"\"readonly>
											</div>						
												</div>
												
											</div>




						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Fecha Informacion
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

<span class=\"lbl\">
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-calendar\"></i>
												</span>
												<input type=\"text\" value=\"01-Jun-2022\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Sunfunción\" required=\"\" autofocus=\"\" readonly>
											</div>
													




													</span>
												</div>
												
											</div>




						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\">LTP
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

<span class=\"lbl\">
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa  fa-paperclip\"></i>
												</span>
												<input type=\"text\" value=\"banamex_389-5490031_estado_de_cuenta_septiembre_2017.pdf\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Sunfunción\" required=\"\" autofocus=\"\" readonly>
											</div>
													




													</span>
												</div>
												
											</div>



			<div class=\"profile-info-row\">
							<div class=\"profile-info-name blue\"> 
							</div>

							<div class=\"profile-info-value col-xs-6 \">
										<span>				
											<div class=\"input-group\">
											<!--
												<span class=\"input-group-addon\">
												
													<i class=\" blue fa fa-credit-card\"></i>
												
										</span>
											-->
							<!-- <button class=\"btn btn-primary  dim btn-large-dim\" type=\"button\">
							<i class=\"fa fa-location-arrow\"></i></button>
							-->
							<a id=\"EnviarReporte\" class=\"btn btn-success btn-circle btn-lg\" type=\"button\" style=\"
							width: 122px;		\">
							<i class=\"fa fa-check\"></i>Enviar
                            </a>
										
							</div>						
							</div>
							
							<div class=\"profile-info-value col-xs-6 \">
										
									
									
							</div>

												
				</div>
											
<!--
						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Unidad
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

<span class=\"lbl\">
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card\"></i>
												</span>
												<input type=\"text\" value=\"610\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Sunfunción\" required=\"\" autofocus=\"\" readonly>
											</div>
													




													</span>
												</div>
												
											</div>



						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Partida
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
												<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card\"></i>
												</span>
												<input type=\"text\" value=\"1204\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"Grupo\" required=\"\" autofocus=\"\"readonly>
											</div>
													<span>
					


					


													</span>	
												</div>
												
											</div>

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Puesto
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					


				
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card\"></i>
												</span>
												<input type=\"text\" value=\"CF41075\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"All\" required=\"\" autofocus=\"\"readonly>
											</div>

													</span>

													




													
												</div>
												
											</div>

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Proyecto Programa
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					


					
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card\"></i>
												</span>
												<input type=\"text\" value=\"2\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"PP\" required=\"\" autofocus=\"\"readonly>
											</div>

													</span>

													




													
												</div>
											
											</div>

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Grupo Funcional
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

					
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card \"></i>
												</span>
												<input type=\"text\" value=\"2\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"UR\" required=\"\" autofocus=\"\" readonly>
											</div>

													</span>
</span>
													




													
												</div>
												
											</div>

						<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Función
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

					
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card \"></i>
												</span>
												<input type=\"text\" value=\"3\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"UR\" required=\"\" autofocus=\"\"readonly>
											</div>

													</span>
</span>
													




													
												</div>
												
											</div>										


											
														<div class=\"profile-info-row\">
												<div class=\"profile-info-name blue\"> Subfunción
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

					
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card \"></i>
												</span>
												<input type=\"text\" value=\"03\" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"UR\" required=\"\" autofocus=\"\"readonly>
											</div>

													</span>
</span>
													




													
												</div>
												
											</div>	
					<div class=\"profile-info-row\">
										<div class=\"profile-info-name blue\"> Num Puesto
												
</div>

												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

					
<div class=\"input-group\">
												<span class=\"input-group-addon\">
													<i class=\" blue fa fa-credit-card \"></i>
												</span>
												<input type=\"text\" value=\"5528 \" id=\"inputUsuario\" name=\"inputUsuario\" class=\"form-control\" placeholder=\"UR\" required=\"\" autofocus=\"\"readonly>
											</div>

													</span>
</span>
													




													
												</div>
												
											</div>
											
-->											
											
												<div class=\"profile-info-value col-xs-6 \">
													<span>
					

					
<div class=\"input-group\">
												
</span>
													




													
												</div>
												
											</div>											
											

					</div>

					<div class=\"hr hr-8 dotted\"></div>

					<div class=\"profile-user-info\">


					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->

			<div class=\"space-20\"></div>

		</div>



											<div class=\"space-8\"></div>

											<div id=\"faq-list-5\" class=\"panel-group accordion-style1 accordion-style2\">
												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>

												<div class=\"panel panel-default\">
												</div>
											</div>
										</div>
										</div>
<!-- fin 5 propuesto-->






										<div id=\"faq-tab-6\" class=\"tab-pane fade\">
											<h4 class=\"blue\">
												<i class=\"blue ace-icon fa fa-th-list bigger-110\"></i>
												Conceptos de Percepción
											</h4>

											<div class=\"space-8\"></div>

											<div id=\"faq-list-6\" class=\"panel-group accordion-style1 accordion-style2\">
												<div class=\"panel panel-default\">
													<div class=\"panel-heading\">
														<a href=\"#faq-6-1\" data-parent=\"#faq-list-6\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\">
															<i class=\"ace-icon fa fa-plus\" data-icon-hide=\"ace-icon fa fa-minus\" data-icon-show=\"ace-icon fa fa-hand-o-right\"></i>
															<span class=\"label label-info arrowed-in-right arrowed\">
															Concepto 1-07-00
															</span>
														</a>
													</div>

													<div class=\"panel-collapse collapse\" id=\"faq-6-1\">
														<div class=\"panel-body\">
															$ 20,000.00 SUELDOS BASE

														</div>
													</div>
												</div>

												<div class=\"panel panel-default\">
													<div class=\"panel-heading\">
														<a href=\"#faq-6-2\" data-parent=\"#faq-list-6\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\">
															<i class=\"ace-icon fa fa-plus bigger-120\" 
															data-icon-hide=\"ace-icon fa-minus\" data-icon-show=\"ace-icon fa fa-frown-o\"></i>
<span class=\"label label-info arrowed-in-right arrowed\">
															Concepto 1-06-CG
															</span>
														</a>
													</div>

													<div class=\"panel-collapse collapse\" id=\"faq-6-2\">
														<div class=\"panel-body\">
															$ 40,000.00  COMPENSACION GARANTIZADA 

														</div>
													</div>
												</div>

												<div class=\"panel panel-default\">
													<div class=\"panel-heading\">

														<a href=\"#faq-6-3\" data-parent=\"#faq-list-6\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed \">
															<i class=\"ace-icon fa fa-plus smaller-80\" 
															data-icon-hide=\"ace-icon fa fa-minus\" data-icon-show=\"ace-icon fa fa-plus\"></i>
															<span class=\"label label-info arrowed-in-right arrowed\">
															Concepto 1-38-00
															</span>
														</a>
													</div>

													<div class=\"panel-collapse collapse\" id=\"faq-6-3\">
														<div class=\"panel-body\">
$ 2,000.00  AYUDA DE DESPENSA

														</div>
													</div>
												</div>


											</div>
										</div>
<!-- fin 6 propuesto-->








										<div id=\"faq-tab-7\" class=\"tab-pane fade\">
											<h4 class=\"blue\">
												<i class=\"blue ace-icon fa fa-cubes bigger-110\"></i>
												Selección Personalizada de Datos
											</h4>
											<div class=\"space-8\"></div>
											<div class=\"space-8\"></div>
											<div class=\"space-8\"></div>

<!-- carga de archivo -->

<div class=\"profile-info-row \">
											<div class=\"profile-info-name blue\"> Data Set </div>
												<input id=\"archivo-2\" name=\"documentos\" type=\"file\" class=\"file\" multiple=true data-preview-file-type=\"any\">
												
													<div class=\"profile-info-value col-xs-6 \">
														<span>				
																<div class=\"col-xs-12\">
											
																</div>											
														</span>
													</div>
											</div>
<!-- Fin  carga de archivo -->




											<div class=\"space-8\"></div>
<!--
											<div id=\"faq-list-7\" class=\"panel-group accordion-style1 accordion-style2\">
												<div class=\"panel panel-default\">
													<div class=\"panel-heading\">
														<a href=\"#faq-7-1\" data-parent=\"#faq-list-7\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\">
															<i class=\"ace-icon fa fa-plus\" data-icon-hide=\"ace-icon fa fa-hand-o-down\" data-icon-show=\"ace-icon fa fa-hand-o-right\"></i>
															<span class=\"label label-info arrowed-in-right arrowed\">
															Concepto 2-01-00
															</span>

														</a>
													</div>

													<div class=\"panel-collapse collapse\" id=\"faq-7-1\">
														<div class=\"panel-body\">
IMPUESTO SOBRE LA RENTA


														</div>
													</div>
												</div>

												<div class=\"panel panel-default\">
													<div class=\"panel-heading\">
														<a href=\"#faq-7-2\" data-parent=\"#faq-list-7\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\">
															<i class=\"ace-icon fa fa-plus bigger-120\" data-icon-hide=\"ace-icon fa fa-smile-o\" data-icon-show=\"ace-icon fa fa-frown-o\"></i>
															<span class=\"label label-info arrowed-in-right arrowed\"> Concepto 2-02-SI</span>

														</a>
													</div>

													<div class=\"panel-collapse collapse\" id=\"faq-7-2\">
														<div class=\"panel-body\">
SEGURO DE INVALIDEZ Y VIDA, ISSSTE


														</div>
													</div>
												</div>

												<div class=\"panel panel-default\">
													<div class=\"panel-heading\">
														<a href=\"#faq-7-3\" data-parent=\"#faq-list-7\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\">
															<i class=\"ace-icon fa fa-plus smaller-80\" data-icon-hide=\"ace-icon fa fa-minus\" data-icon-show=\"ace-icon fa fa-plus\"></i>
															<span class=\"label label-info arrowed-in-right arrowed\">Concepto 2-02-SR</span>

														</a>
													</div>

													<div class=\"panel-collapse collapse\" id=\"faq-7-3\">
														<div class=\"panel-body\">

SEGURO DE RETIRO, CESANTÍA EN EDAD AVANZADA Y VEJEZ, ISSSTE



														</div>
													</div>
												</div>

												<div class=\"panel panel-default\">
													<div class=\"panel-heading\">
														<a href=\"#faq-7-4\" data-parent=\"#faq-list-7\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\">
															<i class=\"ace-icon fa fa-plus smaller-80\" data-icon-hide=\"ace-icon fa fa-minus\" data-icon-show=\"ace-icon fa fa-plus\"></i>
															<span class=\"label label-info arrowed-in-right arrowed\">Concepto 2-02-SS</span>

														</a>
													</div>

													<div class=\"panel-collapse collapse\" id=\"faq-7-4\">
														<div class=\"panel-body\">
SERVICIOS SOCIALES Y CULTURALES, ISSSTE


														</div>
													</div>
												</div>
											</div>
										</div>
-->

										<!-- fin 7 propuesto-->




									</div>
						





<!-- fin formulario -->
							<div class=\"ibox-content\">
								<div class=\"board\">
									<div class=\"board-inner\">
										<div class=\"tabs-left\">
										</div>
									</div>



								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
					



<script src=\"../js/bootstrapValidator.min.js\"></script>

 <!-- iCheck -->
    <script src=\"../js/plugins/iCheck/icheck.min.js\"></script>
	<link href=\"../css/plugins/chosen/chosen.css\" rel=\"stylesheet\">

    <script src=\"../js/plugins/jqGrid/i18n/grid.locale-en.js\"></script>
    <script src=\"../js/plugins/jqGrid/jquery.jqGrid.min.js\"></script>

	
<script>
$(document).ready(function () {

$(\"#btnProcesarLTP\").click(function(){
	console.log('Procesando Información');
	
		$.post('movi_results_LTP.html', { \"id\": 1, \"pzavteid\":123 },
		  function(response,status) {
				//alert(response);
				var string = response;
				$('#main_page').html(response);
		  }// fin function
	 ); // fin post


});


/**** JQGRID ***/

var mydata = [
	{id: \"1\", invdate: \"2010-05-24\", name: \"test\", note: \"note\", tax: \"10.00\", total: \"2111.00\"} ,
	{id: \"2\", invdate: \"2010-05-25\", name: \"test2\", note: \"note2\", tax: \"20.00\", total: \"320.00\"},
	{id: \"3\", invdate: \"2007-09-01\", name: \"test3\", note: \"note3\", tax: \"30.00\", total: \"430.00\"},
	{id: \"4\", invdate: \"2007-10-04\", name: \"test\", note: \"note\", tax: \"10.00\", total: \"210.00\"},
	{id: \"5\", invdate: \"2007-10-05\", name: \"test2\", note: \"note2\", tax: \"20.00\", total: \"320.00\"},
	{id: \"6\", invdate: \"2007-09-06\", name: \"test3\", note: \"note3\", tax: \"30.00\", total: \"430.00\"},
	{id: \"7\", invdate: \"2007-10-04\", name: \"test\", note: \"note\", tax: \"10.00\", total: \"210.00\"},
	{id: \"8\", invdate: \"2007-10-03\", name: \"test2\", note: \"note2\", amount: \"300.00\", tax: \"21.00\", total: \"320.00\"},
	{id: \"9\", invdate: \"2007-09-01\", name: \"test3\", note: \"note3\", amount: \"400.00\", tax: \"30.00\", total: \"430.00\"},
	{id: \"11\", invdate: \"2007-10-01\", name: \"test\", note: \"note\", amount: \"200.00\", tax: \"10.00\", total: \"210.00\"},
	{id: \"12\", invdate: \"2007-10-02\", name: \"test2\", note: \"note2\", amount: \"300.00\", tax: \"20.00\", total: \"320.00\"},
	{id: \"13\", invdate: \"2007-09-01\", name: \"test3\", note: \"note3\", amount: \"400.00\", tax: \"30.00\", total: \"430.00\"},
	{id: \"14\", invdate: \"2007-10-04\", name: \"test\", note: \"note\", amount: \"200.00\", tax: \"10.00\", total: \"210.00\"},
	{id: \"15\", invdate: \"2007-10-05\", name: \"test2\", note: \"note2\", amount: \"300.00\", tax: \"20.00\", total: \"320.00\"},
	{id: \"16\", invdate: \"2007-09-06\", name: \"test3\", note: \"note3\", amount: \"400.00\", tax: \"30.00\", total: \"430.00\"},
	{id: \"17\", invdate: \"2007-10-04\", name: \"test\", note: \"note\", amount: \"200.00\", tax: \"10.00\", total: \"210.00\"},
	{id: \"18\", invdate: \"2007-10-03\", name: \"test2\", note: \"note2\", amount: \"300.00\", tax: \"20.00\", total: \"320.00\"},
	{id: \"19\", invdate: \"2007-09-01\", name: \"test3\", note: \"note3\", amount: \"400.00\", tax: \"30.00\", total: \"430.00\"},
	{id: \"21\", invdate: \"2007-10-01\", name: \"test\", note: \"note\", amount: \"200.00\", tax: \"10.00\", total: \"210.00\"},
	{id: \"22\", invdate: \"2007-10-02\", name: \"test2\", note: \"note2\", amount: \"300.00\", tax: \"20.00\", total: \"320.00\"},
	{id: \"23\", invdate: \"2007-09-01\", name: \"test3\", note: \"note3\", amount: \"400.00\", tax: \"30.00\", total: \"430.00\"},
	{id: \"24\", invdate: \"2007-10-04\", name: \"test\", note: \"note\", amount: \"200.00\", tax: \"10.00\", total: \"210.00\"},
	{id: \"25\", invdate: \"2007-10-05\", name: \"test2\", note: \"note2\", amount: \"300.00\", tax: \"20.00\", total: \"320.00\"},
	{id: \"26\", invdate: \"2007-09-06\", name: \"test3\", note: \"note3\", amount: \"400.00\", tax: \"30.00\", total: \"430.00\"},
	{id: \"27\", invdate: \"2007-10-04\", name: \"test\", note: \"note\", amount: \"200.00\", tax: \"10.00\", total: \"210.00\"},
	{id: \"28\", invdate: \"2007-10-03\", name: \"test2\", note: \"note2\", amount: \"300.00\", tax: \"20.00\", total: \"320.00\"},
	{id: \"29\", invdate: \"2007-09-01\", name: \"test3\", note: \"note3\", amount: \"400.00\", tax: \"30.00\", total: \"430.00\"}
	];

	

// Configuration for jqGrid Example 2
$(\"#table_list_2\").jqGrid({
    data: mydata,
    datatype: \"local\",
    height: 450,
    autowidth: true,
    shrinkToFit: true,
    rowNum: 20,
    rowList: [10, 20, 30],
    colNames:['Total Balance','Due Balance', 'Day Past Due', 'Minimkum Amount to Pay','Ordinary Interest Rate','Moratorium Interest Rate','Bucket'],
    colModel:[
        {name:'id',index:'id', editable: true, width:60, sorttype:\"int\",search:true},
        {name:'invdate',index:'invdate', editable: true, width:90, sorttype:\"date\", formatter:\"date\"},
        {name:'name',index:'name', editable: true, width:100},
        {name:'amount',index:'amount', editable: true, width:80, align:\"right\",sorttype:\"float\", formatter:\"number\"},
        {name:'tax',index:'tax', editable: true, width:80, align:\"right\",sorttype:\"float\"},
        {name:'total',index:'total', editable: true, width:80,align:\"right\",sorttype:\"float\"},
        {name:'note',index:'note', editable: true, width:100, sortable:false}
    ],
    pager: \"#pager_list_2\",
    viewrecords: true,
    caption: \"Data Set\",
    add: true,
    edit: true,
    addtext: 'Add',
    edittext: 'Edit',
    hidegrid: false
});

// Add selection
$(\"#table_list_2\").setSelection(4, true);


// Setup buttons
$(\"#table_list_2\").jqGrid('navGrid', '#pager_list_2',
        {edit: true, add: true, del: true, search: true},
        {height: 200, reloadAfterSubmit: true}
);

// Add responsive to jqGrid
$(window).bind('resize', function () {
    var width = $('.jqGrid_wrapper').width();

    $('#table_list_2').setGridWidth(width+100);
	});




/******* FIN JQGRID  *****/




















	
	$('#btnConnx').click(function(){

            
	$('#ContenedorJQGrid').attr(\"class\", \"space-200\");

		var contenido=
            
          '<div>'+
'                                                   <ul class=\"steps\" style=\"margin-left: 0\">'+
'                                                       <li data-step=\"1\" class=\"complete\" >'+
'                                                           <span class=\"step\">1</span>'+
'                                                           <span class=\"title\">User</span>'+
'                                                       </li>'+
''+
'                                                       <li data-step=\"2\" class=\"complete\" >'+
'                                                           <span class=\"step\">2</span>'+
'                                                           <span class=\"title\">Instance</span>'+
'                                                       </li>'+
''+
'                                                       <li data-step=\"3\"  class=\"complete\">'+
'                                                           <span class=\"step\">3</span>'+
'                                                           <span class=\"title\">Cnnx</span>'+
'                                                       </li>'+
''+
'                                                       <li data-step=\"4\" class=\"complete\" >'+
'                                                           <span class=\"step\" >4</span>'+
'                                                           <span class=\"title\">Ok</span>'+
'                                                       </li>'+
'                                                   </ul>'+
'                                               </div> <hr>'  +
'<p class=\"alert alert-success \">' +
 '  La conexión a la base de datos fue exitosa, sa ha agregado el set de datos selecionado.  ' +
  '                                                       </p> '  ;




               $.alert({
                icon: 'fa fa-database fa-2x fa-fw',
                title: 'Database Connection',
                content: contenido,
                columnClass: 'medium',
                animationSpeed:1800,
                animationBounce:1,
                animation: 'zoom',
                closeAnimation: 'zoom',
                 animationBounce: 2.5,
                animateFromElement: false,
                theme: 'modern',
                type: 'blue',
                buttons: {
                    Aceptar: {
                         btnClass: 'btn-green',
                         action:function () {
                        }
                    }
                }
            });

			
			

        });

	
	

                $('#FormUser').bootstrapValidator({
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        txt_nombre: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/,
                                    message: ' '
                                }
                            }
                        },
                        txt_app_p: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/,
                                    message: ' '
                                }
                            }
                        },
                        txt_app_m: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/,
                                    message: ' '
                                }
                            }
                        },
                        txt_foto: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                }
                            }
                        },
                        txt_cargo: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/,
                                    message: ' '
                                }
                            }
                        },
                        txt_email: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9.-_\s]+$/,
                                    message: ' '
                                }
                            }
                        },
                        txt_psw: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                
                                different: {
                                    field: 'txt_email',
                                    message: 'La contraseña no puede ser la misma que el correo'
                                }
                            }
                        },
                        txt_conf_psw: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                identical: {
                                    field: 'txt_psw',
                                    message: 'La contraseña y su confirmación no coinciden'
                                },
                                different: {
                                    field: 'txt_email',
                                    message: 'La contraseña no puede ser lo mismo que el correo'
                                }
                            }
                        },
                        txt_organismos: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                }
                            }
                        },
                        txt_uni_respon: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                }
                            }
                        },
                        txt_pregunta_seguridad: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                }
                            }
                        },
                        txt_licencia: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9_\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/,
                                    message: 'Error en Número de Licencia '
                                }
                            }
                        },
                        txt_respuesta: {
                            validators: {
                                notEmpty: {
                                    message: ' '
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/,
                                    message: ' '
                                }
                            }
                        }
                    }
                });

                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
           

  });
</script>
 <!--<link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\">-->
<link href=\"../css/fileinput.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
<!---<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>-->
<script src=\"../js/fileinput.min.js\" type=\"text/javascript\"></script>
<!-- <link href=\"../css/boopstrap.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>-->




";


?>