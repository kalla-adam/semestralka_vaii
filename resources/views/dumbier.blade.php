@extends('layouts.main')

@section('title')
Ďumbier
@endsection

@section('content')
<h1>
    Ďumbier
</h1>

<div class="navbar" id="Navbar">
    <a href="{{route('home-page')}}">Home</a>
    <a href="{{route('vrcholy-page')}}">Vrcholy</a>
    <a href="{{route('krivan-page')}}">Kriváň</a>
    <a href="{{route('dumbier-page')}}" class="active">Ďumbier</a>
</div>

<div class="row">
    <p class="classic column">
        Nachádza sa v centrálnej časti pohoria, v geomorfologickom podcelku Ďumbierske Tatry a jej časti Ďumbier.[3] Vrch leží na hranici Žilinského a Banskobystrického kraja, na rozhraní okresov Liptovský Mikuláš a Brezno. Zasahuje na katastrálne územie mesta Brezno a obcí Liptovský Ján a Horná Lehota.[4] Susednými vrchmi sú na západe Krúpova hoľa (1 928 m n. m.), na severe Ludárova hoľa (1 731 m n. m.), na východe Štiavnica (2 025 m n. m.) a juhu Veľký Gápeľ (1 776 m n. m.).[2] Vrch je najvyšším bodom okresu Brezno a regiónu Horehronie.
    </p>

    <img src="storage/pics/dumbier.jpg" alt="Dumbier" class="column">
</div>

<div class="row">
    <img src="storage/pics/dumbier1.jpg" alt="Dumbier" class="column">

    <p class="classic column">
        Ďumbier sa na severe javí ako mohutný vysokohorský masív s 500 m vysokými stenami, piliermi a žliabkami do ľadovcových kotlov v koncoch Bystrej a Ludárovej doliny. Miernejšie južné svahy pokrýva pole žulových balvanov. Vrch je súčasťou hlavného hrebeňa, ktorý sa práve v masíve Ďumbiera rozdvojuje a pokým východne smerujúce rameno zakončuje mohutná Štiavnica, juhovýchodne smerujúce rameno vedie cez Besnú do sedla Čertovica a pokračuje Kráľovohoľskými Tatrami. Severným smerom vybieha rázsocha Ludárovej hole. Severné svahy odvodňuje Bystrá a Ludárov potok, smerujúce Štiavnicou do Váhu, z južnej časti prúdi voda Bystriankou do Hrona.[2]
        Na vrchole je vybudovaný železobetónový pylón a stojí tu veľký slovenský dvojkríž z dreva. V sedle pod Ďumbierom sa v nadmorskej výške 1 727,9 m n. m. nachádza Chata generála Milana Rastislava Štefánika s celoročnou prevádzkou. V severných kotlinách sa vyskytujú kamzíky a svište.
    </p>
</div>

<div class="row">
    <p class="classic column">
        Vo svahoch sa v minulosti intenzívne ťažila železná ruda, zlato a antimonit. Pozostatky tejto činnosti sú viditeľné takmer vo všetkých údoliach.
        Počas 2. svetovej vojny prebehli na svahoch boje medzi slovenskými partizánmi a sťahujúcimi sa Nemcami. Na pamiatku týchto bojov a ťažkého prechodu Nízkych Tatier partizánmi v zime roku 1944 postavili pri neďalekej Chate generála M. R. Štefánika pomník padlým partizánom.
    </p>
    
    <img src="storage/pics/dumbier2.jpg" alt="Dumbier" class="column">
</div>
@endsection
