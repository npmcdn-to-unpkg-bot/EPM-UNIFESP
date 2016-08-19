@extends('Fields.LinhasDePesquisa.model')

@section('name','TDCS')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">TDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">FMRI</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">TDCS - Transcranial direct current stimulation</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/TDCS_small.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/TDCS_small.jpg')}}" alt="TDCS - Transcranial direct current stimulation"></a>
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
            <a href="{{asset('/images/Linha_de_pesquisa/TDCS.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/TDCS.jpg')}}" alt="TDCS - Transcranial direct current stimulation"></a>
        </div>
        <p><strong>Figura 1.</strong> Conforme ilustrado [1] , a estimulação anódica (corrente de sinal negativo) leva a um aumento transitório na disponibilidade de cálcio no intracelular, com fosforilação do ciclo CREBS e acetilação do BDNF (especialmente de áreas promotoras), assim promovendo plasticidade sináptica no hipocampo e ganhos de memória e inteligência geral, como os que nosso time vem observando com idosos e peak performers.</p>
        <ol>
            <li><a href="#">Podda, M.V., et al., Anodal transcranial direct current stimulation boosts synaptic plasticity and memory in mice via epigenetic regulation of Bdnf expression. Scientific Reports, 2016. 6: p. 22180.</a></li>
        </ol>

        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="TDCS - Transcranial direct current stimulation"><img src="{{asset('/images/Linha_de_pesquisa/TDCS.jpg')}}" alt="TDCS - Transcranial direct current stimulation"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">TDCS - Transcranial direct current stimulation</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>TDCS</strong></p>
            </div>

        </div>
    </div>
@endsection
