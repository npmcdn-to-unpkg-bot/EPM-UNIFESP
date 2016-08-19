@extends('Fields.LinhasDePesquisa.model')

@section('name','Neurofeedback')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">TDCS</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
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

        <h2 class="head">Neurofeedback</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/Neurofeedback_small.gif')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/Neurofeedback_small.gif')}}" alt="Neurofeedback"></a>
            </div>
        </div>
        <p>
            Neurofeedback é uma técnica de alteração de estados afetivos e melhora do desempenho cognitivo por meio da indução de mudanças de longo prazo na distribuição e comportamento dos padrões frequenciais do cérebro. Nas sessões clínicas, os clientes procuram atingir estados de funcionamento otimizados, tendo como referência aquilo que eletrodos dispostos sobre o escalpo e testa registram; na prática, controlam interfaces ‘com a força do pensamento’, o que torna as sessões bastante estimulantes para a maior.
            <br><br>Em 2012, a sociedade americana de pediatria erigiu o neurofeedback a intervenção de nível 1 (grau mais elevado de eficácia) para déficit de atenção, equiparando-o às mais potentes medicações. http://coe.csusb.edu/documents/CRPsychosocialInterventions.pdf
            <br><br>Nosso time produziu a grande maioria dos papers de impacto brasileiros no tema, ao passo que a nossa diretora de conteúdo e coordenadora da área de neurofeedback, July Silveira, foi uma das fundadoras da Associação Brasileira de Neurofeedback e é uma das mais atuantes profissionais do país.
            <br><br>A técnica de controle de interfaces por ondas cerebrais também pode ser utilizada fora do contexto clínico; foi com base nela que o nosso diretor executivo, Prof. Dr. Álvaro Machado Dias, em colaboração com o coordenador de neurociências computacionais do Centro de Neuromodulação da EPM-UNIFESP, Dr. Henrique Teruo Akiba, além de importantes artistas, criaram a obra videowave, primeira instalação neurocientífica da América Latina (http://goo.gl/A9eA1y).
        </p>
        <br>
        <div class="image embedded big-size align-center">
            <a href="{{asset('/images/Linha_de_pesquisa/Neurofeedback.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/Neurofeedback.jpg')}}" alt="Neurofeedback"></a>
        </div>
        <p><strong>Figura 1.</strong>Mapa de alteração de padrões cerebrais em sujeitos diagnosticados com depressão, tratados com neurofeedback por ressonância (f-MRI), conforme reportado em estudo publicado na NeuroImage  [1] </p>
        <ol>
            <li><a href="#">Zotev, V., et al., Correlation between amygdala BOLD activity and frontal EEG asymmetry during real-time fMRI neurofeedback training in patients with depression. NeuroImage : Clinical, 2016. 11: p. 224-238.</a></li>
        </ol>

        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="Neurofeedback"><img src="{{asset('/images/Linha_de_pesquisa/Neurofeedback.jpg')}}" alt="Neurofeedback"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">Neurofeedback</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>Neurofeedback</strong></p>
            </div>

        </div>
    </div>
@endsection
