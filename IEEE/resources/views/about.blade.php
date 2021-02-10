@extends('layouts.app')

@section('content')
<style>
    .column {
    float: left;
    width: 50%;
    padding: 50px;
}

h4{
    font-family: 'Open Sans', sans-serif;
    color: #E1A042;
    text-align: left;
}

p{
    font-family: 'Open Sans', sans-serif;
    text-align: justify;
}

.row{
    text-align: center;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.title{
    margin-top:50px
}
</style>
<div class="title" >
        <div class="row" style="style=padding-top:30px; padding-bottom:30px">
            <div class="col-4" style="float:left;">
            <img src="{{asset('img/lines.png')}}" alt="">
            </div>
            <div class="col-4" style="text-align:center; color:black;">
            <h3>ABOUT US</h3>
            </div>
             <div class="col-4" >
             <img src="{{asset('img/lines.png')}}" style="float:right;" alt="">
            </div>
        
        </div>
<div class="container-fluid">
    <div class="row" style="padding-left: 50px; padding-right: 50px">
        <div class="column">
            <h4>Missão do IS:</h4>
            <p>
                Nesta página vamos falar sobre cenas à toa de várias
                disciplinas e ciências, bla bla bla cenas de meninos de gestão
                bla bla bla marketing aqui um pouco bla bla bla.
                Nesta página vamos falar sobre cenas à toa
                de várias disciplinas e ciências, bla bla bla cenas de meninos de gestão
                bla bla bla marketing aqui um pouco bla bla bla.
                Nesta página vamos falar sobre cenas à toa
                de várias disciplinas e ciências, bla bla bla cenas de meninos de gestão
                bla bla bla marketing aqui um pouco bla bla bla.
            </p>
        </div>
        <div class="column">
            <h4>Os nossos valores:</h4>
            <p>
                Nesta página vamos falar sobre cenas à toa
                de várias disciplinas e ciências, bla bla bla cenas de meninos de gestão
                bla bla bla marketing aqui um pouco bla bla bla.
                Nesta página vamos falar sobre cenas à toa
                de várias disciplinas e ciências, bla bla bla cenas de meninos de gestão
                bla bla bla marketing aqui um pouco bla bla bla.
                Nesta página vamos falar sobre cenas à toa
                de várias disciplinas e ciências, bla bla bla cenas de meninos de gestão
                bla bla bla marketing aqui um pouco bla bla bla.
            </p>
        </div>

    </div>



</div>

@endsection