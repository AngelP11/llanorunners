@extends('templates.main')

@section('content-header')
    <div class="evento-info">
        <img src="{{ asset('img/logo_llanorunners.png') }}" alt="Logo Llanorunners">
        <p class="txt-1">¡Se complace en invitarlos al!</p>
        <h1 class="title">"Cross Country Camburito 12k"</h1>
        <h2>Demuestra de que estas hecho</h2>
        <p class="txt-2">Lugar: Polideportivo Universidad Romulo Gallego. San Juan de los Morros, Edo. Guárico - Fecha: 29 de Octubre del 2017 - Hora de salida: 7:00 AM</p>

        <div class="links">
            <a class="inscripsion" href="#paso-1">!Inscribirme!</a>
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

    <div class="inscripsion">
        <p class="txt-title">¡Inscripcion!</p>
        <div class="linea"></div>

        <div class="pasos">
            <div id="paso-1" class="paso-1">
                <div class="fondo-negro">
                    <h2>Paso 1: Transfiera o Deposite</h2>

                    <br>

                    <strong>NOTA: La edad mínima para inscribirse en la Carrera es de 15 años (con autorización por escrito del representante)</strong>

                    <br><br>

                    <p>PARA  FORMALIZAR LA INSCRIPCIÓN, REALIZAR  DEPÓSITO EN EFECTIVO O TRANSFERENCIA ELECTRÓNICA POR LA CANTIDAD DE <strong>25.000,00 BsF</strong> PRECIO DE PRE-VENTA HASTA 15-10-2017, EL MONTO DESPUES DE ESA FECHA SERA DE 30000,00 BsF <br> (12% DE DESCUENTO INSCRIPCIONES POR GRUPO) (CUPOS LIMITADOS) EN LA SIGUIENTE CUENTA:<br><br> 
                    CUENTA CORRIENTE BANCO VENEZOLANO DE CREDITO NO. 0104 0167 44  0167002110<br>
                    A NOMBRE DE: MARIA ALEJANDRA ZURLINI (WARAPOFIT)<br>
                    CI: V-128400253   (Firma Personal)<br>
                    CORREO ELECTRÓNICO : 10kllanorunners@gmail.com</p>

                    <br>

                    <strong>Su inscripcion incluye:</strong><br><br>
                    <ul>
                        <li>DORSAL (NÚMERO).</li>
                        <li>HIDRATACIÓN DURANTE Y AL FINAL DE LA COMPETENCIA.</li>
                        <li>REFRIGERIO.</li>
                        <li>ARCO  Y CRONÓMETRO EN  SALIDA Y LLEGADA.</li>
                        <li>MEDALLA DE FINALISTA A TODO EL CONCLUYA LA RUTA.</li>
                        <li>PREMIACIÓN EN METÁLICO A TODAS LAS CATEGORIAS.</li>
                        <li>PROMOCIÓN EN MEDIOS DE COMUNICACIÓN  Y REDES SOCIALES.</li>
                        <li>ASISTENCIA  MÉDICA.</li>
                        <li>SEGURIDAD  POLICIAL.</li>
                        <li>¡Y MUCHAS SORPRESAS MAS!</li>
                    </ul>  
                </div>
            </div>

            <div class="paso-2">
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
            </div>
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
            </div>
        </div>
    </div>

    <footer>
        @include('templates.partails.footer')
    </footer>
@endsection

