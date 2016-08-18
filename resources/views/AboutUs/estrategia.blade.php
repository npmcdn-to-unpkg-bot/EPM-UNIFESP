@extends('AboutUs.model')

@section('name', 'Missão')

@section('active-page')
    <li class="active-section open parent-level"> <a href="{{url('/sobrenos')}}" title="Quem Somos" class="destination">Sobre Nós</a>
        <ul class="tier-2">
            <li class=""> <a href="{{url('/sobrenos/missao')}}" title="Missão" class="destination">Missão</a></li>
            <li class=""> <a href="{{url('/sobrenos/visao')}}" title="Visão" class="destination">Visão</a></li>
            <li class="active-page"> <a href="{{url('/sobrenos/estrategia')}}" title="Estratégia" class="destination">Estratégia</a> </li>
        </ul>
    </li>
@endsection

@section('main-content')
    <div class="block" data-block-id="8007">
        <h2><strong><span style="line-height: 1.5em;">Estratégia</span></strong></h2>
        <p style="line-height: 1.5em">
            Aumentar a aderência de pós-graduandos e residentes às linhas científicas
            deste vasto subdomínio da psiquiatria, parcialmente compartilhado com a neurologia e
            a psicologia, por meio de abordagens pragmáticas, com forte ênfase na geração de
            publicações de impacto; fortalecer as colaborações com membros de outros
            departamentos e de outras instituições, por meio da promoção de estudos
            multicêntricos, com potencial de agregar à prática de nossos parceiros; abrir-se à
            sociedade mais ampla por meio de forte presença digital e ativa divulgação dos
            resultados dos nossos estudos mais importantes.
        </p>
    </div>
@endsection