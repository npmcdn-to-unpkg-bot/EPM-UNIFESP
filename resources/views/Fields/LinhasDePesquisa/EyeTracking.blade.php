@extends('Fields.LinhasDePesquisa.model')

@section('name','Eye Tracking')

@section('active-section')
    <ul class="tier-2">
        <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">TDCS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Neurofeedback')}}" title="Neurofeedbac" class="destination">Neurofeedback </a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/RemediacaoCognitiva')}}" title="Remediação Cognitiva" class="destination">Remediação Cognitiva</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/QEEG')}}" title="QEEG" class="destination">QEEG</a> </li>
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/EyeTracking')}}" title="Eye Tracking" class="destination">Eye Tracking</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/FMRI')}}" title="FMRI" class="destination">FMRI</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Genetica')}}" title="Genética" class="destination">Genética</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/Eletrofisiologia')}}" title="Eletrofisiologia Periférica" class="destination">Eletrofisiologia Periférica </a> </li>
    </ul>
@endsection

@section('block')
    <div class="block" data-block-id="8015">

        <h2 class="head">Eye Tracking</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/EyeTracking_small.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/EyeTracking_small.jpg')}}" alt="Eye Tracking"></a>
            </div>
        </div>
        <p>
            O eye tracking ou rastreamento ocular é um conjunto de técnicas utilizadas para mapear deslocamentos oculares e pontos de fixação.
            <br><br>Em contexto clínico, o eye tracking é utilizado para se diagnosticar e se avaliar a eficácia de diferentes intervenções no comportamento orientativo, atenção sustentada e no comportamento prospectivo; isto é, na capacidade de orientar-se rápida e consistentemente para estímulos de interesse, habilidade de manter o consumo de informações de relevo, à revelia de distratores e na antecipação sensório-motora de eventos não-estocásticos, denotando eficácia biocomputacional dos processos automáticos de reconhecimento de padrões ambientais.
            <br><br>O Centro de Neuromodulação da EPM-UNIFESP conta com equipamentos de ponta para rastreamento ocular, além de patentes criadas para integrar a aquisição dos dados desta natureza a uma pletora de outras modalidades.
        </p>
        <br>
        <div class="image embedded big-size align-center">
            <a href="{{asset('/images/Linha_de_pesquisa/EyeTracking.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/EyeTracking.jpg')}}" alt="Eye Tracking"></a>
        </div>
        <p><strong>Figura 1.</strong> Pontos de fixação facial no autismo [1]. Série recente de estudos confirma que o eye tracking seja uma potente ferramenta no diagnóstico do autismo [2,3]</p>
        <ol>
            <li><a href="#">Pelphrey, K.A., et al., Visual scanning of faces in autism. J Autism Dev Disord, 2002. 32(4): p. 249-61.</a></li>
            <li><a href="#">Hutchins, T.L. and A. Brien, Conversational topic moderates social attention in autism spectrum disorder: Talking about emotions is like driving in a snowstorm. Research in Autism Spectrum Disorders, 2016. 26: p. 99-110.</a></li>
            <li><a href="#">Frazier, T.W., et al., Development of an Objective Autism Risk Index Using Remote Eye Tracking. Journal of the American Academy of Child & Adolescent Psychiatry. 55(4): p. 301-309.</a></li>
        </ol>

        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="Eye Tracking"><img src="{{asset('/images/Linha_de_pesquisa/EyeTracking.jpg')}}" alt="Eye Tracking"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">Eye Tracking</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>Eye Tracking</strong></p>
            </div>

        </div>
    </div>
@endsection
