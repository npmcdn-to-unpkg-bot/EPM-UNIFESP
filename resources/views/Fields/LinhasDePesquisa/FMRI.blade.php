@extends('Fields.LinhasDePesquisa.model')

@section('name','fMRI')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">tDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">fMRI</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">fMRI - Ressonância Magnética Funcional</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/FMRI_small.png')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/FMRI_small.png')}}" alt="fMRI - FUNCTIONAL MAGNETIC RESONANCE IMAGING"></a>
            </div>
        </div>
        <p>
            A ressonância magnética funcional (fMRI ou RMf) é a principal técnica de imageamento cerebral utilizada no mundo para diagnósticos clínicos e compreensão das dinâmicas cerebrais subjacentes a processos afetivos e cognitivos. A fMRI registra a perfusão sanguínea oxigenada nos diferentes sítios cerebrais ao longo do tempo; posto que a queima de oxigênio é necessária para a realização das computações neurais, o sinal registrado (conhecido como BOLD) serve de medida indireta de ativação na área correlata, contribuindo dramaticamente para a compreensão do papel das diferentes circuitarias existentes, em repouso e nas dinâmicas intencionais. Na atualidade, utilizamos diversos procedimentos que complementam a fMRI, tal como o imageamento por difusor de tensão (DTI), que utiliza o movimento browniano das moléculas de água ao longo dos tecidos, como os feixes axônicos, para gerar traçados capazes de revelar vias e circuitos e o uso concomitante de QEEG, para o registro de mudanças rápidas de processamento.</p>
        <br>
        <div class="image embedded big-size align-center">
            <a href="{{asset('/images/Linha_de_pesquisa/FMRI.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/FMRI.jpg')}}" alt="fMRI - FUNCTIONAL MAGNETIC RESONANCE IMAGING"></a>
        </div>
        <p><strong>Figura 1.</strong> Imagem gerada por DTI, utilizando o Magnetom 3T (Siemens)</p>

        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="FMRI - FUNCTIONAL MAGNETIC RESONANCE IMAGING"><img src="{{asset('/images/Linha_de_pesquisa/FMRI.jpg')}}" alt="FMRI - FUNCTIONAL MAGNETIC RESONANCE IMAGING"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">FMRI - FUNCTIONAL MAGNETIC RESONANCE IMAGING</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>fMRI</strong></p>
            </div>

        </div>
    </div>
@endsection
