<?php include_once 'includes/templates/header.php'; ?>
  
<!-- SECCION REGISTRO -->
<section id="content" class="seccion contenedor">
    <h2>Registro</h2>
    
    <!-- FORMULARIO DE REGISTRO -->
    <form id="registro" action="pagar.php" class="registro" method="POST">
        <div id="datos_usuario" class="registro caja clearfix">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
            </div>
            <div class="campo">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
            </div>
            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Tu Email">
            </div>
            <div id="error"></div>
        </div> <!-- .registro caja clearfix -->

        <!-- SECCION PEDIDO -->
        <div id="paquetes" class="paquetes">
            <h3>Elige uno o varios en tu pedido</h3>

                <ul class="lista-precios clearfix">
                    <li>
                    <div class="tabla-precio">
                        <h3>Tu Camiseta Personal</h3>
                        <p class="numero"><span>Desde: </span>45.000 COP</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Impresión en calidad fotográfica</li>
                            <li> <i class="fas fa-check"></i> Colores brillantes y vivos</li>
                            <li> <i class="fas fa-check"></i> Durabilidad superior</li>
                        </ul>
                        <div class="orden">
                            <label for="camisetas_persona">Número de camisetas:</label>
                            <input type="number" min="0" id="camisetas_persona" size="3" name="productos[]" placeholder="0">
                        </div>
                    </div> 
                    </li>

                    <li>
                    <div class="tabla-precio">
                        <h3>Para tu mascota</h3>
                        <p class="numero"><span>Desde: </span>25.000 COP</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Impresión en calidad fotográfica</li>
                            <li> <i class="fas fa-check"></i> Colores brillantes y vivos</li>
                            <li> <i class="fas fa-check"></i> Durabilidad superior</li>
                        </ul>
                        <div class="orden">
                            <label for="camisetas_mascota">Número de camisetas:</label>
                            <input type="number" min="0" id="camisetas_mascota" size="3" name="productos[]" placeholder="0">
                        </div>
                    </div> 
                    </li>

                    <li>
                    <div class="tabla-precio">
                        <h3>Paquete Para tu Empresa</h3>
                        <p class="numero"><span>Desde: </span>90.000 COP</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Impresión en calidad fotográfica</li>
                            <li> <i class="fas fa-check"></i> Colores brillantes y vivos</li>
                            <li> <i class="fas fa-check"></i> Durabilidad superior</li>
                        </ul>
                        <div class="orden">
                            <label for="camisetas_empresa">Número de camisetas:</label>
                            <input type="number" min="0" id="camisetas_empresa" size="3" name="productos[]" placeholder="0">
                        </div>
                    </div> 
                    </li>
                </ul>
        </div> <!-- .paquetes -->

        <!-- SECCION DETALLES DE PEDIDO -->
        <div id="detalles" class="detalles clearfix">
            <h3>Selecciona algunos detalles</h3>
            <div class="caja">
                    <div id="personalizada" class="contenido-detalle clearfix">
                        <h4>Personalizadas</h4>
                            <div>
                                <p>Tallas disponibles:</p>
                                <label><input type="checkbox" name="detalle[]" id="talla_01" value="talla_01"><span>XS</span> XTRA-SMALL </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_02" value="talla_02"><span>S</span> SMALL </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_03" value="talla_03"><span>M</span> MEDIUM </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_04" value="talla_04"><span>L</span> LARGE </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_05" value="talla_05"><span>XL</span> XTRA-LARGE</label>
                            </div>
                            <div>
                                <p>Colores Disponibles:</p>
                                <label><input type="checkbox" name="detalle[]" id="color_01" value="color_01"><span>Black</span> Negro </label>
                                <label><input type="checkbox" name="detalle[]" id="color_02" value="color_02"><span>White</span> Blanco </label>
                                <label><input type="checkbox" name="detalle[]" id="color_03" value="color_03"><span>Red</span> Rojo </label>
                                <label><input type="checkbox" name="detalle[]" id="color_04" value="color_04"><span>Blue</span> Azul </label>
                                <label><input type="checkbox" name="detalle[]" id="color_05" value="color_05"><span>Green</span> Verde </label>
                            </div>
                            <div>
                                <p>Tipos Disponibles</p>
                                <label><input type="checkbox" name="detalle[]" id="tipo_01" value="tipo_01"><span>MC</span> Camiseta Manga Corta </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_02" value="tipo_02"><span>ML</span> Camibuso </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_03" value="tipo_03"><span>SK</span> Esqueleto </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_04" value="tipo_04"><span>TP</span> Tipo Polo </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_05" value="tipo_05"><span>BS</span> Buso </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_06" value="tipo_06"><span>SP</span> Deportiva </label>
                            </div>
                    </div> <!--#personalizada-->
                    <div id="mascota" class="contenido-detalle clearfix">
                        <h4>Mascotas</h4>
                            <div>
                                <p>Tallas disponibles:</p>
                                <label><input type="checkbox" name="detalle[]" id="talla_01" value="talla_01"><span>XS</span> XTRA-SMALL </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_02" value="talla_02"><span>S</span> SMALL </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_03" value="talla_03"><span>M</span> MEDIUM </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_04" value="talla_04"><span>L</span> LARGE </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_05" value="talla_05"><span>XL</span> XTRA-LARGE</label>
                            </div>
                            <div>
                                <p>Colores Disponibles:</p>
                                <label><input type="checkbox" name="detalle[]" id="color_01" value="color_01"><span>Black</span> Negro </label>
                                <label><input type="checkbox" name="detalle[]" id="color_02" value="color_02"><span>White</span> Blanco </label>
                                <label><input type="checkbox" name="detalle[]" id="color_03" value="color_03"><span>Red</span> Rojo </label>
                                <label><input type="checkbox" name="detalle[]" id="color_04" value="color_04"><span>Blue</span> Azul </label>
                                <label><input type="checkbox" name="detalle[]" id="color_05" value="color_05"><span>Green</span> Verde </label>
                            </div>
                            <div>
                                <p>Tipos Disponibles</p>
                                <label><input type="checkbox" name="detalle[]" id="tipo_01" value="tipo_01"><span>MC</span> Camiseta Manga Corta </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_02" value="tipo_02"><span>ML</span> Camibuso </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_03" value="tipo_03"><span>SK</span> Esqueleto </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_04" value="tipo_04"><span>TP</span> Tipo Polo </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_05" value="tipo_05"><span>BS</span> Buso </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_06" value="tipo_06"><span>SP</span> Deportiva </label>
                            </div>
                    </div> <!--#mascota-->
                    <div id="empresa" class="contenido-detalle clearfix">
                        <h4>Empresas</h4>
                            <div>
                                <p>Tallas disponibles:</p>
                                <label><input type="checkbox" name="detalle[]" id="talla_01" value="talla_01"><span>XS</span> XTRA-SMALL </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_02" value="talla_02"><span>S</span> SMALL </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_03" value="talla_03"><span>M</span> MEDIUM </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_04" value="talla_04"><span>L</span> LARGE </label>
                                <label><input type="checkbox" name="detalle[]" id="talla_05" value="talla_05"><span>XL</span> XTRA-LARGE</label>
                            </div>
                            <div>
                                <p>Colores Disponibles:</p>
                                <label><input type="checkbox" name="detalle[]" id="color_01" value="color_01"><span>Black</span> Negro </label>
                                <label><input type="checkbox" name="detalle[]" id="color_02" value="color_02"><span>White</span> Blanco </label>
                                <label><input type="checkbox" name="detalle[]" id="color_03" value="color_03"><span>Red</span> Rojo </label>
                                <label><input type="checkbox" name="detalle[]" id="color_04" value="color_04"><span>Blue</span> Azul </label>
                                <label><input type="checkbox" name="detalle[]" id="color_05" value="color_05"><span>Green</span> Verde </label>
                            </div>
                            <div>
                                <p>Tipos Disponibles</p>
                                <label><input type="checkbox" name="detalle[]" id="tipo_01" value="tipo_01"><span>MC</span> Camiseta Manga Corta </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_02" value="tipo_02"><span>ML</span> Camibuso </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_03" value="tipo_03"><span>SK</span> Esqueleto </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_04" value="tipo_04"><span>TP</span> Tipo Polo </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_06" value="tipo_06"><span>SP</span> Deportiva </label>
                                <label><input type="checkbox" name="detalle[]" id="tipo_05" value="tipo_05"><span>BS</span> Buso </label>
                            </div>
                    </div> <!--#empresa-->
                </div><!--.caja-->
        </div> <!--#detalles-->
        
        <!-- SECCION RESUMEN DE PEDIDO -->
        <div id="resumen" class="resumen">
            <h3>Pago y Extras</h3>
            <div class="caja clearfix">
                <div class="extras">
                    <div class="orden">
                        <label for="camibuso">Camibuso 35.000 COP <small>(Promoción 7% dcto.)</small></label>
                        <input type="number" min="0" id="camibuso" name="pedido_camibuso" size="3" placeholder="0">
                    </div> <!-- orden -->
                    <div class="orden">
                        <label for="mug">Mug personalizado 15.000 COP <small>(Con mucho estilo.. )</small></label>
                        <input type="number" min="0" id="mug" name="pedido_mug" size="3" placeholder="0">
                    </div> <!-- orden -->
                    <div class="orden">
                        <label for="regalo">Elige un regalo</label><br>
                        <select id="regalo" name="regalo" required>
                            <option value="">- Seleccione un regalo -</option>
                            <option value="1">Pack Stickers: (Mascotas, Emojis, Memes.. )</option>
                            <option value="2">Pack Stickers: (VideoJuegos, Desarrollo)</option>
                            <option value="3">Lapicero Personalizado</option>
                        </select>
                    </div> <!-- orden -->

                    <input type="button" id="calcular" class="button" value="Calcular">
                </div> <!-- extras -->

                <div class="total">
                    <p>Resumen:</p>
                    <div id="lista-productos">

                    </div>
                    <p>Total:</p>
                    <div id="suma-total">

                    </div>
                    <input type="hidden" name="total_pedido" id="total_pedido">
                    <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                </div>

            </div> <!-- Caja -->
        </div> <!-- resumen -->
    </form> <!-- .registro -->
</section> <!-- seccion datos_usuario -->

<?php include_once 'includes/templates/footer.php'; ?>