@extends('Fields.LinhasDePesquisa.model')

@section('name','Remediação Cognitiva')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">tDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">fMRI</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">Remediacão Cognitiva</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/RemediacaoCognitiva_small.png')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/RemediacaoCognitiva_small.png')}}" alt="Remediação Cognitiva"></a>
            </div>
        </div>
        <p>
            A terapia de remediação cognitiva (CRT) define-se pela aplicação de um conjunto de técnicas de aprendizado verbal e não-verbal que visam otimizar competências conhecidas por terem papel essencial na inteligência geral e adaptabilidade individual, como tomada de decisão, memória de trabalho e atenção. Seu uso como tratamento coadjuvante em psiquiatria encontra-se amplamente documentado, representando uma mudança de paradigma no âmbito das abordagens cognitivo-comportamentais tradicionais. Uma meta-análise publicada na revista americana de psiquiatria (N = 2104) concluiu que a remediação cognitiva é capaz de produzir efeitos globais e duradouros em pacientes com esquizofrenia [1].
            <br><br>A técnica foi introduzida no país pelo diretor clínico do Centro de Neuromodulação da EPM-UNIFESP, Prof. Dr. Acioly Lacerda Tavares, que atualmente lidera um consórcio para expandir seu uso por meio de sistemas computacionais desenvolvidos em parceria com universidades americanas de renome.
        </p>
        <br>
        <div class="image embedded big-size align-center">
            <a href="{{asset('/images/Linha_de_pesquisa/RemediacaoCognitiva.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/RemediacaoCognitiva.jpg')}}" alt="Remediação Cognitiva"></a>
        </div>
        <p><strong>Figura 1.</strong> Conforme ilustrado a remediação cognitiva funciona particularmente bem quando associada a tratamentos farmacológicos, na esquizofrenia.</p>
        <ol>
            <li><a href="http://ajp.psychiatryonline.org/doi/full/10.1176/appi.ajp.2010.10060855">Wykes, T., et al., A Meta-Analysis of Cognitive Remediation for Schizophrenia: Methodology and Effect Sizes. American Journal of Psychiatry, 2011. 168(5): p. 472-485.</a></li>
            <li><a href="http://journal.frontiersin.org/article/10.3389/fnins.2013.00103/full">Acheson, D., E. Twamley, and J. Young, Reward learning as a potential target for pharmacological augmentation of cognitive remediation for schizophrenia: a roadmap for preclinical development. Frontiers in Neuroscience, 2013. 7(103).
                </a></li>
        </ol>

        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="Remediação Cognitiva"><img src="{{asset('/images/Linha_de_pesquisa/RemediacaoCognitiva.jpg')}}" alt="Remediação Cognitiva"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">Remediação Cognitiva</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>Remediação Cognitiva</strong></p>
            </div>

        </div>
    </div>
@endsection
