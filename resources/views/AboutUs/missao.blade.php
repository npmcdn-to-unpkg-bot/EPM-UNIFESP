@extends('AboutUs.model')

@section('name', 'Missão')

@section('active-page')
    <li class="active-section open parent-level"> <a href="{{url('/sobrenos')}}" title="Quem Somos" class="destination">Sobre Nós</a>
        <ul class="tier-2">
            <li class="active-page"> <a href="{{url('/sobrenos/missao')}}" title="Missão" class="destination">Missão</a></li>
            <li class=""> <a href="{{url('/sobrenos/visao')}}" title="Visão" class="destination">Visão</a></li>
            <li class=""> <a href="{{url('/sobrenos/estrategia')}}" title="Estratégia" class="destination">Estratégia</a> </li>
        </ul>
    </li>
@endsection

@section('main-content')
    <div class="block" data-block-id="8007">
        <h2><strong><span style="line-height: 1.5em;">Missão</span></strong></h2>
        <p style="line-height: 1.5em">Desenvolver estudos éticos e cientificamente relevantes envolvendo técnicas de estimulação, remediação cognitiva e neurofeedback, assim gerando benefícios diretos e indiretos para a as diversas populações clínicas brasileiras que destas terapias podem se beneficiar, sob os valores assistenciais e humanísticos da <strong>Escola Paulista de Medicina da Universidade Federal de São Paulo</strong>.</p>
    </div>
@endsection