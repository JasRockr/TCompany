(function() {
    "use strict";

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){

        //Validación del elemento Mapa
        if(document.getElementById('mapa')) {

            var map = L.map('mapa').setView([6.280203, -75.582848], 17);
       
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([6.280203, -75.582848]).addTo(map)
                .bindPopup('Contáctanos ahora mismo')
                .openPopup();
                //.bindTooltip('T-Company')
                //.openTooltip();
        }
            
            // Campos Datos Usuario
            var nombre = document.getElementById('nombre');
            var apellido = document.getElementById('apellido');
            var email = document.getElementById('email');

            // Campos paquetes
            var camisetas_persona = document.getElementById('camisetas_persona');
            var camisetas_mascota = document.getElementById('camisetas_mascota');
            var camisetas_empresa = document.getElementById('camisetas_empresa');

            //Botones y Divs
            var calcular = document.getElementById('calcular');
            var errorDiv = document.getElementById('error');
            var botonRegistro = document.getElementById('btnRegistro');
            var lista_productos = document.getElementById('lista-productos');
            var suma = document.getElementById('suma-total')

            //Extras
            var camibusos = document.getElementById('camibuso');
            var mugs = document.getElementById('mug');

            botonRegistro.disabled = true;

            if(document.getElementById('calcular')) {

                //Eventos
                calcular.addEventListener('click', calcularMontos);
                
                camisetas_persona.addEventListener ('blur', mostrarPaquetes);
                camisetas_mascota.addEventListener ('blur', mostrarPaquetes);
                camisetas_empresa.addEventListener ('blur', mostrarPaquetes);

                nombre.addEventListener('blur', validarCampos);
                apellido.addEventListener('blur', validarCampos);
                email.addEventListener('blur', validarCampos);
                email.addEventListener('blur', validarMail);

                function validarCampos() {
                    if(this.value == '') {
                        errorDiv.style.display = 'block';
                        errorDiv.innerHTML = 'Este campo es obligatorio';
                        this.style.border = '1px solid red';
                        errorDiv.style.border = '1px solid red';
                    } else {
                        errorDiv.style.display = 'none';
                        this.style.border = '1px solid #cccccc';
                    }
                }

                function validarMail() {
                    if(this.value.indexOf("@") > -1) {
                        errorDiv.style.display = 'none';
                        this.style.border = '1px solid #cccccc';
                    } else {
                        errorDiv.style.display = 'block';
                        errorDiv.innerHTML = 'Por favor valide el correo';
                        this.style.border = '1px solid red';
                        errorDiv.style.border = '1px solid red';
                    }
                }


                function calcularMontos(event){
                    event.preventDefault();
                    if (regalo.value === '') {
                        alert("Por favor elige un regalo");
                        regalo.focus();
                    } else {
                        var cantCamiseta_persona = parseInt(camisetas_persona.value, 10) || 0,
                            cantCamiseta_mascota = parseInt(camisetas_mascota.value, 10) || 0,
                            cantCamiseta_empresa = parseInt(camisetas_empresa.value, 10) || 0,
                            cantCamibusos = parseInt(camibusos.value, 10) || 0,
                            cantMugs = parseInt(mugs.value, 10) || 0;


                        var totalPagar = (cantCamiseta_persona * 45000) 
                                    + (cantCamiseta_mascota * 30000) 
                                    + (cantCamiseta_empresa * 90000)
                                    + ((cantCamibusos * 35000) * .93) // Valor - 7% dcto
                                    + (cantMugs * 15000);
                        
                        var listadoProductos = [];

                        //Validacion de cantidades
                        if(cantCamiseta_persona >= 1) {
                            listadoProductos.push(cantCamiseta_persona + ' Camiseta(s) Personalizada(s)');
                        }
                        if(cantCamiseta_mascota >= 1) {
                            listadoProductos.push(cantCamiseta_mascota + ' Camiseta(s) Mascota(s)');
                        }
                        if(cantCamiseta_empresa >= 1) {
                            listadoProductos.push(cantCamiseta_empresa + ' Camiseta(s) Empresa');
                        }
                        if(cantCamibusos >= 1) {
                            listadoProductos.push(cantCamibusos + ' Camibuso(s)');
                        }
                        if(cantMugs >= 1) {
                            listadoProductos.push(cantMugs + ' Mug(s)');
                        }
                        
                        // Impresión de resumen
                        lista_productos.style.display = "block";
                        lista_productos.innerHTML = '';
                        for(var i = 0; i < listadoProductos.length; i ++) {
                            lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                        } 
                        suma.innerHTML = "COP $ " + totalPagar.toFixed(2); // 2 Decimales

                        botonRegistro.disabled = false;
                        document.getElementById('total_pedido').value = totalPagar;

                        console.log(listadoProductos);
                    }
                }

                function mostrarPaquetes() {
                    var cantCamiseta_persona = parseInt(camisetas_persona.value, 10) || 0,
                        cantCamiseta_mascota = parseInt(camisetas_mascota.value, 10) || 0,
                        cantCamiseta_empresa = parseInt(camisetas_empresa.value, 10) || 0;

                        var paquetesElegidos = [];

                        if(cantCamiseta_persona > 0) {
                            paquetesElegidos.push('personalizada')
                        }
                        if(cantCamiseta_mascota > 0) {
                            paquetesElegidos.push('mascota')
                        }
                        if(cantCamiseta_empresa > 0) {
                            paquetesElegidos.push('empresa')
                        }

                        for(var i = 0; i < paquetesElegidos.length; i ++) {
                            document.getElementById(paquetesElegidos[i]).style.display='block';
                        }
                }
            }
    }); //DOM CONTENT LOADED
})();



//JQuery
$(function() {
    
    //Plugin Lettering 
    $('.nombre-sitio').lettering();

    // Agregar clase a menu
    $('body.designer .navegacion-principal a:contains("Diseñar")').addClass('activo');
    $('body.galerias .navegacion-principal a:contains("Galeria")').addClass('activo');
    $('body.catalogo .navegacion-principal a:contains("Catalogo")').addClass('activo');
    $('body.productos .navegacion-principal a:contains("Productos")').addClass('activo');

    //Menu fijo
    var windowHeight = $(window).height(); //Altura de ventana activa
    var barraAltura = $('.barra').innerHeight(); //Altura de barra de navegación

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });

    //Scroll Mouse

    $('a.scroll-link').click(function(e){
		e.preventDefault();
		$id = $(this).attr('href');
		$('body,html').animate({
			scrollTop: $($id).offset().top -20
		}, 750);
	});


    //Menu movil
    function updateMenuButton() {
        $('.js-menu-button').find('.menu-icon').toggleClass('is-active');
    }

    $(document).ready(function() {
        $('.js-menu-button').click(function(e){
            e.preventDefault();
            updateMenuButton();
            $('.navegacion-principal').slideToggle();
        });
    });


/*
    //Ciclo de cotización
    $('.ciclo-cotizacion .info-ciclo:first').show();
    $('.menu-ciclo-servicios a:first').addClass('activo');

    // $('div.ocultar').hide();
    $('.menu-ciclo-servicios a').on('click', function() {
        $('.menu-ciclo-servicios a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });
*/

//Plugins JQuery 
    //Animaciones para los numeros - jquery.animateNumber.min.js
    var resumenLista = jQuery('.resumen-habilidades');
    if(resumenLista.length > 0 ) {
        $('.resumen-habilidades').waypoint(function() {
            $('.resumen-habilidades li:nth-child(1) p').animateNumber({ number: 92}, 1200);
            $('.resumen-habilidades li:nth-child(2) p').animateNumber({ number: 97}, 1200);
            $('.resumen-habilidades li:nth-child(3) p').animateNumber({ number: 82}, 1200);
            $('.resumen-habilidades li:nth-child(4) p').animateNumber({ number: 65}, 1200);
        }, {
            offset: '60%'
        })
    }

    //Cuenta regresiva - jquery.countdown.min.js
    $('.cuenta-regresiva').countdown('2021/10/23 00:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //Colorbox

    $('.artista-info').colorbox({inline:true, width:'50%'});


});