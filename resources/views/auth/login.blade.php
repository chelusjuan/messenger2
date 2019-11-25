@extends('layouts.app')

@section('content')
<b-container>

    <b-row align-h="center"> 
        <b-col cols="8">
            <b-card-group deck>
            <b-card title="Iniciar sesion">
                

                <b-form>
                    <b-alert show>
                    Por favor ingresa tus datos:
                    </b-alert>
                    <b-form-group class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <b-form-group
                            label="Ingresa tu correo: "
                            label-for="email"
                            description="Nosotros protegemos tu informacion"
                        >
                            <b-form-input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="micorreoelectronico@dominio.com"
                            value="{{ old('email') }}" required autofocus
                            ></b-form-input>
                        </b-form-group>


                        <b-form-group
                            label="Ingresa tu contrasena: "
                            label-for="password"
                        >
                            <b-form-input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="contrasena" required autofocus
                            ></b-form-input>
                        </b-form-group>
                        <b-form-group>
                         <b-form-checkbox
                            name="remember" 
                            {{ old('remember') ? 'checked="true"' : '' }}
                            
                                >
                                recordar inicio de sesion
                        </b-form-checkbox>
                        </b-form-group>

                        
                        <b-button type="submit" variant="primary">Ingresar</b-button>
                        
                        <b-button href="{{ route('password.request') }}" variant="link"> Olvidaste tu contrasena?</b-button>
                        
                        
                    
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
