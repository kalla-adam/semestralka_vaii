@extends('layouts.main')

@section('title')
Registrácia
@endsection

@section('nadpis')
<h1>
    Registrácia
</h1>
@endsection

@section('content')
<form action="{{ route('register.custom') }}" method="POST">
    @csrf
    <div class="container">
        <label><b>Meno</b></label>
        <input type="text" placeholder="Zadajte Meno" id="name" name="name" required autofocus>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

        <label><b>E-Mail</b></label>
        <input type="text" placeholder="Zadajte E-Mail" id="email" name="email" required>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif

        <label><b>Heslo</b></label>
        <input type="password" placeholder="Zadajte Heslo" id="password" name="password" required>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Zapamätaj si ma.
        </label>
    </div>
    
    <div class="container" style="background-color:#f0d0d0">
        <span class="psw">Zabudli ste <a href="#">heslo?</a></span>
    </div>
</form>
@endsection
