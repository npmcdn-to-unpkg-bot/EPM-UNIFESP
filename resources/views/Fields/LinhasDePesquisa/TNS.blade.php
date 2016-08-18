@extends('Fields.LinhasDePesquisa.model')

@section('name','TNS')

@section('active-section')
    <ul class="tier-2">
        <li class="active-page"> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
        <li class=""> <a href="{{url('/linhasdepesquisa/TDCS')}}" title="TDCS" class="destination">TDCS</a> </li>
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

        <h2 class="head">rTMS - Transcranial magnetic stimulation</h2>
        <div class="type-image" data-id="16484">
            <div class="image embedded small-size align-right">
                <a href="{{asset('/images/Linha_de_pesquisa/TNS.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/TNS.jpg')}}" alt="TNS - Transcutaneous electrical nerve stimulation"></a>
            </div>
        </div>
        <p>
            A TNS é uma revolucionária técnica de estimulação trazida para o país pelos Profs. Quirino Cordeiro (diretor científico do nosso Centro de Neuromodulação, professor da EPM-UNIFESP e da Santa Casa) e pelo Prof. Pedro Shiozawa (da Santa Casa). Atualmente, o nosso grupo é líder mundial nesta área.
            <br><br>A TNS envolve a estimulação elétrica da terminação do ramo V1 do trigêmeo, que fica logo acima do supraorbital. Ao contrário do que ocorre com a tDCS e rTMS que agem de maneira top-down (do córtex para dentro), através da estimulação do trigêmeo, os impulsos navegam até o tronco encefálico e então se espraiam para o tálamo e córtex.
            <br><br>Especula-se que este trajeto bottom-up seja mais eficiente na produção de efeitos plásticos em diversos sítios subcorticais envolvidos em diversos transtornos psiquiátricos e doenças neurológicas, o que pode contribuir para os efeitos terapêuticos da técnica. A TNS não produz efeitos colaterais perigosos, mas frequentemente produz sonolência transitória nos pacientes.
        </p>
        <br>
        <div class="image embedded big-size align-center">
            <a href="{{asset('/images/Linha_de_pesquisa/TNS.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/TNS.jpg')}}" alt="TNS - Transcutaneous electrical nerve stimulatio"></a>
        </div>
        <p><strong>Figura 1.</strong> Representação esquemática do processo de ativação da circuitaria nervosa por TNS</p>
        <br><br>
        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
            <div class="image">
                <a href="#" title="TNS - Transcutaneous electrical nerve stimulation"><img src="{{asset('/images/Linha_de_pesquisa/TNS.jpg')}}" alt="TNS - Transcutaneous electrical nerve stimulation"></a>
            </div>
            <h3 class="headline"><a href="#" title="Produções">TNS - Transcutaneous electrical nerve stimulation</a></h3>
            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>TNS - Transcutaneous electrical nerve stimulation</strong></p>
            </div>

        </div>
    </div>
@endsection
