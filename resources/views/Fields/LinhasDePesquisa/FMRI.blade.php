@extends('Fields.LinhasDePesquisa.model')

@section('name','fMRI')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">TDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">FMRI</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">fMRI - FUNCTIONAL MAGNETIC RESONANCE IMAGING</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/FMRI_small.png')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/FMRI_small.png')}}" alt="fMRI - FUNCTIONAL MAGNETIC RESONANCE IMAGING"></a>
            </div>
        </div>
        <p>
            Técnica de estimulação cerebral que utiliza corrente de baixa intensidade, ministrada por eletrodos dispostos sobre o escalpo, para induzir efeitos plásticos no cérebro, associados à melhora de uma série de sintomas psiquiátricos e neurológicos, bem como no aumento da performance cognitiva. Centenas de ensaios clínicos e diversas meta-análises confirmam a sua eficácia.
            <br><br>A estimulação não gera disparo de potenciais de ação neuronal. Ela atua de maneira suave na despolarização/hiperpolarização dos potenciais de membrana. Por isso, trata-se de uma técnica bastante segura, do ponto de vista neurológico, cujos raros efeitos colaterais resumem-se a leves eritemas cutâneos, em sujeitos mais propensos.
            <br><br>Em geral, são necessárias ao menos dez sessões, de vinte minutos cada para que os efeitos sejam atingidos e estes persistem para além do período de tratamento.
            <br><br>Recentemente, nosso time publicou uma pequena letter na versão eletrônica da revista Science propondo um novo mecanismo de ação para a tDCS.
        </p>
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
