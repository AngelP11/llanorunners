@extends('templates.main')

@section('content-header')
    <div class="evento-info">
        <img src="{{ asset('img/logo_llanorunners.png') }}" alt="Logo Llanorunners">
        <p class="txt-1">¡Se complace en invitarlos al!</p>
        <h1 class="title">"Cross Country Camburito 12k"</h1>
        <h2>Demuestra de que estas hecho</h2>
        <p class="txt-2">Le evento ya fue llevadoa cabo, y ya puedes ver los resultados</p>

        {{-- Lugar: Polideportivo Universidad Romulo Gallego. San Juan de los Morros, Edo. Guárico - Fecha: 29 de Octubre del 2017 - Hora de salida: 7:00 AM --}}

        <div class="links">
            <a class="inscripsion" href="{{ asset('pdf/resultados_carrera_cross_country_12k.pdf') }}">Ver Resultados</a>
            {{-- <a href="#">¿Qué es una carrera Cross Country?</a> --}}
        </div>
    </div>
@endsection

@section('content')
    <div class="cross-country">
        <img src="{{ asset('img/monte.jpg') }}" alt="">
        <div>  
            <h2>¿Qué es una carrera Cross Country?</h2>
            <p>
                El Club de Corredores Llano Runners  de San Juan de los Morros Estado Guárico se complace en invitarlos a participar en  Carrera Cross Country Camburito 12 K. El Cross Country es una modalidad de carrera caracterizada  en recorrer distancias  a campo travieso, es decir en circuitos naturales no-urbanos.  El Cross Country es beneficioso para  el atleta  debido a los constantes cambios de ritmos y fuerza que se requiere para  avanzar y afrontar las cuestas.<br /><br /> 
                El Sector Camburito de San Juan de los Morros, es un excelente escenarios natural para realizar este tipo de carrera, porque nos ofrece variedad de relieve, una densa vegetación y diversos pasos de manantiales, que harán de la carrera una excelente experiencia. 
            </p>
        </div>
    </div>

    {{-- <div class="inscripsion">
        <p class="txt-title">¡Inscripcion!</p>
        <div class="linea"></div>

        <div class="pasos">
            <div id="paso-1" class="paso-1">
                <div class="fondo-negro">
                    <h2>Las inscripciones han sido cerradas</h2>

                    <br>

                    <strong>NOTA: Si desea inscribirse por medio de transferencia, debera hacerla desde el mismo banco a la siguiente cuenta por el monto de 30000,00 BsF:</strong>

                    <br><br>

                    {{-- <p>PARA  FORMALIZAR LA INSCRIPCIÓN, REALIZAR  DEPÓSITO EN EFECTIVO O TRANSFERENCIA ELECTRÓNICA POR LA CANTIDAD DE <strong>25.000,00 BsF</strong> PRECIO DE PRE-VENTA HASTA 15-10-2017, EL MONTO DESPUES DE ESA FECHA SERA DE 30000,00 BsF <br> (12% DE DESCUENTO INSCRIPCIONES POR GRUPO) (CUPOS LIMITADOS) EN LA SIGUIENTE CUENTA:<br><br>  --}}

                    {{--<p>CUENTA CORRIENTE BANCO VENEZOLANO DE CREDITO NO. 0104 0167 44  0167002110<br>
                    A NOMBRE DE: MARIA ALEJANDRA ZURLINI (WARAPOFIT)<br>
                    CI: V-128400253   (Firma Personal)<br>
                    CORREO ELECTRÓNICO : 10kllanorunners@gmail.com</p>

                    <br>
                        
                    <h2>Si ya estas inscrito:</h2>

                    <strong>Si usted esta ya esta inscrito, Descargue el siguiente archivo PDF con informacion referente a la carrera, y el acta de "Liberacion de Responsabilidades" el cual debe ser llenado y firmado para su entrega al momento de retirar el material</strong><br><br>
                    
                    <div class="links">
                        <a class="inscripsion" href="{{ asset('pdf/informacion_y_normativa_cross_country.pdf') }}">Descargar PDF</a>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="paso-2">
                <div class="fondo-negro">
                    <h2>Paso 2: Registrate</h2>
                    <div class="formulario">
                        {!! Form::open(['route' => 'user.competitor.store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Nombres y Apellidos') !!}
                                {!! Form::text('name', null, ['class' => "form-control", 'placeholder' => 'Nombre y Apellido', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('identification', 'Cedula') !!}
                                {!! Form::text('identification', null, ['class' => "form-control", 'placeholder' => 'Cedula de identidad', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('birthdate', 'Fecha de nacimiento') !!}
                                {!! Form::date('birthdate', null, ['class' => "form-control", 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('gender', 'Genero') !!}
                                {!! Form::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['class' => "form-control", 'placeholder' => 'Seleccione su genero', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('telephone', 'Telefono') !!}
                                {!! Form::text('telephone', null, ['class' => "form-control", 'placeholder' => 'Telefono celular', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Correo Electronico') !!}
                                {!! Form::email('email', null, ['class' => "form-control", 'placeholder' => 'example@mail.com', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('club', 'Club (Si no pertenece a ningun club dejar en blanco)') !!}
                                {!! Form::text('club', null, ['class' => "form-control", 'placeholder' => 'Club al que pertenece']) !!}
                            </div>

                             <div class="form-group">
                                {!! Form::label('amount', 'Monto pagado') !!}
                                {!! Form::text('amount', null, ['class' => "form-control", 'placeholder' => 'Monto depositado o transferido']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('references_number', 'Numero de referencia de la transferencia o deposito') !!}
                                {!! Form::text('references_number', null, ['class' => "form-control", 'placeholder' => 'Numero de referencia', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('payment_date', 'Fecha del pago') !!}
                                {!! Form::date('payment_date', null, ['class' => "form-control", 'required']) !!}
                            </div>

                            <center>   
                                <div class="form-group">
                                    {!! Form::submit('¡Registrarme!', ['class' => 'submit']) !!}
                                </div>
                            </center>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="patrocinantes">
        <p class="txt-title">Nuestros Patrocinantes</p>
        <div class="linea"></div>

        <div class="imgs-patro">
            <img class="santa" src="{{ asset('img/logo_santa_rosalia.jpg') }}" alt="Clinica Santa Rosalia">
            <img class="gatorade" src="{{ asset('img/logo_gatorade.jpg') }}" alt="Gatorade">
            <img class="super" src="{{ asset('img/super_todo.png') }}" alt="Super Todo">
            <img src="{{ asset('img/logo_bruna.jpg') }}" alt="Bruna">
            <img src="{{ asset('img/logoinverjgm.jpg') }}" alt="Inversiones JGM">
            
            <div>
                <img src="{{ asset('img/logowarapofit.jpg') }}" alt="WarapoFit">
                <img src="{{ asset('img/logo_bq.jpg') }}" alt="Tornillos BQ">
                <img src="{{ asset('img/logo_multicera.jpg') }}" alt="Multi cera de los llanos">
                <img src="{{ asset('img/logo_contadores.jpg') }}" alt="Colegio de Contadores">
                <img src="{{ asset('img/logo_milenaria.jpg') }}" alt="Panaderia La Milenaria">
                <img src="{{ asset('img/logo_asobroste.png') }}" alt="Pollos asobroste">
                <img src="{{ asset('img/logo_peregil.jpg') }}" alt="Restaurant Perejil">
                <img src="{{ asset('img/logo_hotel_ana.jpg') }}" alt="Hotel Ana Tours">
                <img src="{{ asset('img/logo_odontologo.jpg') }}" alt="Consultario Odontologico Dr. Sandra Gomez">
                <img src="{{ asset('img/logo_pollo_brasa.jpg') }}" alt="Pollos en Brasas los Morros">
                <img src="{{ asset('img/logo_zeeca.jpg') }}" alt="inversiones Zeeca">
                <img src="{{ asset('img/logo_g7.jpg') }}" alt="Mundo G7">
                <img src="{{ asset('img/logo_materiales.jpg') }}" alt="Materiales Guarico">
                <img src="{{ asset('img/logo_vencedor.jpg') }}" alt="Distribuidora El Vencedor">
                <img src="{{ asset('img/logo_maquinaria.jpg') }}" alt="Maquinarias y Materiales">
            </div>
        </div>
    </div>

    <footer>
        @include('templates.partails.footer')
    </footer>
@endsection

