(function() {
    "use strict";
    var regalo = document.getElementById('regalo')
    document.addEventListener("DOMContentLoaded", function(){
        //Mapa 
        if (document.getElementById('mapa')){
            var map = L.map('mapa').setView([18.148135, -94.461415], 16);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.marker([18.148135, -94.461415]).addTo(map)
                .bindPopup('GDLWebcamp 2020. <br> Ubicacion')
                .openPopup();
        }   
        
        
        //Campos usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        
        //Campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones & divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('errorDiv');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        botonRegistro.disabled = true;

        //Eventos
        if (document.getElementById('calcular')){


        calcular.addEventListener('click', calcularMontos);
        
        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);
        
        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);

        function calcularMontos(event){
            event.preventDefault();
            if (regalo.value === '')
                alert('Debes escoger un regalo para continuar.');
            else{
                //Se realizan los calculos de la compra final
                var boletosDia = pase_dia.value,
                    boletos2Dias = pase_dosdias.value,
                    boletoCompleto = pase_completo.value,
                    cantCamisas = camisas.value,
                    cantEtiquetas = etiquetas.value;
                
                var totalPagar = boletosDia*30 + boletos2Dias*45 + boletoCompleto*50
                                 + (cantCamisas*10*.93) +  cantEtiquetas*2;
                console.log('Total a pagar: ' + totalPagar);

                var ListadoProductos = [];
                if (boletosDia > 0)
                    ListadoProductos.push(boletosDia + ' pases por 1 día');
                if (boletos2Dias > 0)
                    ListadoProductos.push(boletos2Dias + ' pases por 2 día');
                if (boletoCompleto > 0)
                    ListadoProductos.push(boletoCompleto + ' pases Completos');
                if (cantCamisas > 0)
                    ListadoProductos.push(cantCamisas + ' Camisas');
                if (cantEtiquetas > 0)
                    ListadoProductos.push(cantEtiquetas + ' Etiquetas');
                console.log(ListadoProductos);
                lista_productos.style.display = 'block';
                lista_productos.innerHTML = '';
                for (var i=0; i<ListadoProductos.length; i++){
                    lista_productos.innerHTML += ListadoProductos[i] + '<br/>';
                }
                suma.innerHTML += '<h3> $ ' + totalPagar.toFixed(2) + '</h3>';

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar;
            }
        }

        function mostrarDias(){
            // var boletosDia = parseInt(pase_dia.value, 10)|| 0,
            //     boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0,
            //     boletoCompleto = parseInt(pase_completo.value, 10)|| 0;
            var boletosDia = pase_dia.value,
                boletos2Dias = pase_dosdias.value,
                boletoCompleto = pase_completo.value;
            var diasElegidos = [];
            
            if (boletosDia > 0)
                diasElegidos.push('viernes');
            if (boletos2Dias > 0)
                diasElegidos.push('viernes', 'sabado');
            if (boletoCompleto > 0)
                diasElegidos.push('viernes', 'sabado', 'domingo');
            
                for (var i = 0; i < diasElegidos.length; i++)
                    document.getElementById(diasElegidos[i]).style.display = 'block';
        }
        
        function validarCampos(){
            if (this.value === ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es obligatorio';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }
        function validarMail(){
            if (this.value.indexOf("@") == -1) {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Correo no válido';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }
        
        }   

    });//Document ready
})();



$(function(){
    // Lettering
    $('.nombre-sitio').lettering();

    // Agregar clase a menu
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    //  Menu Fijo
    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();
    console.log('window height: ' + windowHeight);
    console.log('Barra Algura: ' + barraAltura);
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });

    // Menu responsive
    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });

    //  Programa de conferencias
    $('.programa-evento .info-curso:first').show();
    
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        var enlace = $(this).attr('href');
        $('.ocultar').hide();
        $(enlace).fadeIn(1000);

        return false;
    });

    //  Animaciones para los números
    $(' .resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 3000);
    $(' .resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 3000);
    $(' .resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 3000);
    $(' .resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 3000);

    //  Cuenta regresiva
    $('.cuenta-regresiva').countdown('2020/10/30 09:35:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    // Colorbox 
    $('.invitado-info').colorbox({inline:true, width:"50%"});
    $('.boton_newsletter').colorbox({inline:true, width:"50%"});
});


