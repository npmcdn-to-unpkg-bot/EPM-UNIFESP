@extends('Fields.LinhasDePesquisa.model')

@section('name','Genética')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">tDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">fMRI</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">Genética</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/genetica_small.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/genetica_small.jpg')}}" alt="Genética"></a>
            </div>
        </div>
        <p>
            Tal como se aplica à personalidade, habilidades e perfil afetivo, a maioria dos transtornos psiquiátricos parece estar relacionada a uma combinação de predisposições genéticas e determinações ambientais.
            <br><br>Há algumas décadas, percebeu-se que certas variações genéticas, sobretudo de caráter polimórfico, igualmente influenciavam as chances de remissão e as respostas aos diferentes tratamentos. Conforme esta linha de estudos foi avançando, um conjunto muito grande de polimorfismos foi sendo mapeado entre os portadores dos diferentes transtornos e passou a ganhar crédito a ideia de se desenvolver tratamentos individualizados, desde tal mapeamento.
            <br><br>O Centro de Neuromodulação da EPM-UNIFESP endossa e adota esta prática, com ensaios clínicos envolvendo tDCS e outras formas de estimulação e genética, para que no futuro seja possível personalizar protocolos com alto índice de acerto, à luz de predisposições moleculares.
        </p>
        <br>
        <div class="image embedded big-size align-center">
            <a href="{{asset('/images/Linha_de_pesquisa/genetica.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/genetica.jpg')}}" alt="Genética"></a>
        </div>
        <blockquote><strong>Figura 1.</strong> Variações genéticas que afetam a resposta ao tratamento em pacientes diagnosticados com transtorno obsessivo-compulsivo [1]</blockquote>
        <ol>
            <li><a href="#">Qin, H., et al., Whole-genome association analysis of treatment response in obsessive-compulsive disorder. Mol Psychiatry, 2016. 21(2): p. 270-276.</a></li>
        </ol>

        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="Genética"><img src="{{asset('/images/Linha_de_pesquisa/genetica_small.jpg')}}" alt="Genética"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">Genética</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>Genética</strong></p>
            </div>

        </div>
    </div>
@endsection
