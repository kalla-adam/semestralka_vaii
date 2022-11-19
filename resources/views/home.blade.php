@extends('layouts.main')

@section('title')
Home
@endsection

@section('nadpis')
<h1>
    Home
</h1>
@endsection

@section('content')
<form action="#" method="post">
    <div class="container">
        <label><b>Prihlasovacie meno</b></label>
        <input type="text" placeholder="Zadajte Prihlasovacie Meno" name="uname" required>
    
        <label><b>Heslo</b></label>
        <input type="password" placeholder="Zadajte Heslo" name="psw" required>
    
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
