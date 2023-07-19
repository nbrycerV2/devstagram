@extends('layouts.app')

@section('titulo')
    Inicia sesion en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-4/12">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen login de usuario">

        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form novalidate>
                @csrf
                
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" type="email" name="email" placeholder="Tu email" class="border p-3 w-full rounded-lg @error('email') border-red-500" value="{{old('email')}} @enderror">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password" type="password" name="password" placeholder="Tu contraseña" class="border p-3 w-full rounded-lg @error('password') border-red-500" @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                

                <input type="submit" value="Iniciar sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection