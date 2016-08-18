@extends('AboutUs.model')

@section('name', 'Quem Somos')

@section('active-page')
    <li class="active-page active-section open parent-level"> <a href="{{url('/sobrenos')}}" title="Quem Somos" class="destination">Sobre Nós</a>
        <ul class="tier-2">
            <li class=""> <a href="{{url('/sobrenos/missao')}}" title="Missão" class="destination">Missão</a></li>
            <li class=""> <a href="{{url('/sobrenos/visao')}}" title="Visão" class="destination">Visão</a></li>
            <li class=""> <a href="{{url('/sobrenos/estrategia')}}" title="Estratégia" class="destination">Estratégia</a> </li>
        </ul>
    </li>
@endsection

@section('main-content')
    <div class="block" data-block-id="8007">
        <h2><strong><span style="line-height: 1.5em;">Sobre nós</span></strong></h2>
        <p style="line-height: 1.5em">
            O Centro de Neuromodulação da EPM-UNIFESP foi criado por um conjunto de professores dedicados às técnicas de estimulação em psiquiatria.
            <br><br>
            Seus principais objetivos são a divulgação das linhas de pesquisa desenvolvidas nesta área, com vias à geração de maior capilaridade acadêmica e divulgação de ensaios clínicos desenvolvidos junto ao Departamento de Psiquiatria da UNIFESP.
            <br><br>
            O Centro não possui qualquer tipo de finalidade ou relacionamento direto ou indireto com a iniciativa privada, exceto pelo fato de ter tido suas atividades iniciadas por meio de doações privadas dos próprios docentes que custearam website e o parque de equipamentos, conforme pormenorizado no documento de constituição.
            <br><br><br>
            O Centro conta com diversos pesquisadores, além de uma equipe altamente qualificada que cuida de conteúdo e TI.</p>
        </div>
@endsection