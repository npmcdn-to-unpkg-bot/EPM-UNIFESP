@extends('Fields.LinhasDePesquisa.model')

@section('name','Eletrofisiologia Periférica')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">TDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">FMRI</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">Eletrofisiologia Periférica</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/eletrofisiologia_small.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/eletrofisiologia_small.jpg')}}" alt="Eletrofisiologia Periférica"></a>
            </div>
        </div>
        <p>
            O sistema nervoso pode ser esquematicamente dividido em central e periférico, sendo este último constituído pelos gânglios e nervos situados fora do complexo cérebro-medula espinhal. O sistema nervoso periférico possui porções relacionadas ao controle voluntário dos músculos esqueléticos e porções relacionadas ao controle involuntário dos músculos lisos, os quais influenciam o funcionamento de uma pletora de órgãos e afetam funções vitais como respiração, digestão e os reflexos orientativos. Esta influência dá-se por duas vias principais, uma que quase sempre culmina na atividade de receptores nicotínicos e muscaríneos e outra que tende a culminar na atividade de receptores adrenérgicos. Tais são respectivamente conhecidos como os ramos parassimpático e simpáticos do sistema nervoso periférico.
            <br><br>Os mesmos evoluíram ao longo da filogenia, em consonância com o surgimento das computações afetivas, para garantir a consistência das respostas comportamentais a estímulos de valor incondicionado. Neste sentido, permitem registros de dinâmicas emocionais e pré-emocionais básicas, as quais estão conhecidamente alteradas nos diferentes transtornos psiquiátricos e em algumas condições psicológicas.
            <br><br>Isto não significa que seu uso também seja, via de regra, básico ou simplório. Por exemplo, sabe-se que pacientes com ansiedade crônica possuem atividade simpática elevada e que esta frequentemente apresenta-se em comorbidade com a depressão. Em contraste, graus intensos de depressão maior tendem a ser acompanhados de atividade simpática diminuída, do que segue o caráter estratégico do mapeamento da atividade autonômica para a produção de diagnósticos diferenciais e, ainda mais amplamente, para avaliar as dimensões endógenas mais profundamente afetadas por alguma intervenção clínica.
            <br><br>O Centro de Neuromodulação da EPM-UNIFESP conta com um equipamento premiado para a realização de registros autonômicos, todos os principais sensores utilizados na área e soluções de software próprias que facilitam a integração com registros do sistema nervoso central.
        </p>
        <br>
        <div class="image embedded big-size align-right">
            <a href="{{asset('/images/Linha_de_pesquisa/eletrofisiologia.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/eletrofisiologia.jpg')}}" alt="Eletrofisiologia Periférica"></a>
        </div>
        <blockquote><strong>Figura 1.</strong> Ilustração de diferenças no ritmo cardíaco em consonância com o tônus emocional predominante (imagem cedida pela Willow Clinic, UK)</blockquote>
        <br>
        <br>
        <br>
        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="Eletrofisiologia Periférica"><img src="{{asset('/images/Linha_de_pesquisa/eletrofisiologia_small.jpg')}}" alt="Eletrofisiologia Periférica"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">Eletrofisiologia Periférica</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>Eletrofisiologia Periférica</strong></p>
            </div>

        </div>
    </div>
@endsection
