@extends('Fields.LinhasDePesquisa.model')

@section('name','QEEG')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">tDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">fMRI</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">QEEG – Eletroencefalografia quantitativa</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/QEEG_small.gif')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/QEEG_small.gif')}}" alt="QEEG - QUANTITATIVE ELECTROENCEPHALOGRAPHY"></a>
            </div>
        </div>
        <p>
            A eletroencefalografia serve à realização de medidas indiretas da atividade cerebral, ao passo que sua variante quantitativa (QEEG) simplesmente denota que existe alta densidade de canais sendo registrados. Conforme aumenta a cobertura do escalpo, cresce a possibilidade de se fazer estimativas acerca da origem de fenômenos biológicos, sejam eles de interesse clínico ou cognitivo-comportamental.
            <br><br>Há dois tipos básicos de aplicação do QEEG no contexto clínico do Centro de Neuromodulação da EPM-UNIFESP: registros contínuos (wavelets) e potenciais evocados. Neste contexto, os registros contínuos são utilizados para avaliar a estabilidade e distribuição das faixas frequenciais, ao passo que os potenciais evocados costumam ser utilizados no diagnóstico e avaliação de eficácia das intervenções sobre as computações biológicas e pré-conscientes que subjazem à percepção e à realização de tarefas cognitivas.
            <br><br>O Centro de Neuromodulação da EPM-UNIFESP conta com alguns dos mais modernos equipamentos do mundo para eletroencefalografia quantitativa. Recentemente, incorporamos o uso de Loreta (low resolution brain electromagnetic tomography) que é uma técnica que permite o imageamento cerebral por EEG. A vantagem de sua aplicação emerge do fato de conciliar a conhecida alta resolução temporal do EEG com representações espaciais do cérebro de cunho análogo.
        </p>
        <br>
        <div class="image embedded big-size align-center">
            <a href="{{asset('/images/Linha_de_pesquisa/QEEG.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/QEEG.jpg')}}" alt="QEEG - QUANTITATIVE ELECTROENCEPHALOGRAPHY"></a>
        </div>
        <p>Figura 1.Imagem de estudo que comparou a habilidade de identificação de áreas epileptogênicas através de Loreta com ressonância magnética pós-operativa. A conclusão foi que Loreta é eficiente na identificação destes focos [1].</p>
        <ol>
            <li><a href="#">kdeniz, G., et al., Electrical source localization by LORETA in patients with epilepsy: Confirmation by postoperative MRI. Annals of Indian Academy of Neurology, 2016. 19(1): p. 37-43.</a></li>
        </ol>

        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="QEEG - QUANTITATIVE ELECTROENCEPHALOGRAPHY"><img src="{{asset('/images/Linha_de_pesquisa/QEEG.jpg')}}" alt="QEEG - QUANTITATIVE ELECTROENCEPHALOGRAPHY"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">QEEG - QUANTITATIVE ELECTROENCEPHALOGRAPHY</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>QEEG</strong></p>
            </div>

        </div>
    </div>
@endsection
