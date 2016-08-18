@extends('AboutUs.model')

@section('name', 'Visão')

@section('active-page')
    <li class="active-section open parent-level"> <a href="{{url('/sobrenos')}}" title="Quem Somos" class="destination">Sobre Nós</a>
        <ul class="tier-2">
            <li class=""> <a href="{{url('/sobrenos/missao')}}" title="Missão" class="destination">Missão</a></li>
            <li class="active-page"> <a href="{{url('/sobrenos/visao')}}" title="Visão" class="destination">Visão</a></li>
            <li class=""> <a href="{{url('/sobrenos/estrategia')}}" title="Estratégia" class="destination">Estratégia</a> </li>
        </ul>
    </li>
@endsection

@section('main-content')
    <div class="block" data-block-id="8007">
        <h2><strong><span style="line-height: 1.5em;">Visão</span></strong></h2>
        <p style="line-height: 1.5em">
            Um futuro em que intervenções não-farmacológicas para patologias do Sistema
            Nervoso Central estejam bem mapeadas, façam-se amplamente disponíveis e possam
            ser consideradas com clareza e segurança por todos os médicos e, quando aplicado,
            demais profissionais da área da saúde, na determinação do melhor tratamento para
            seus pacientes.
        </p>
    </div>
@endsection