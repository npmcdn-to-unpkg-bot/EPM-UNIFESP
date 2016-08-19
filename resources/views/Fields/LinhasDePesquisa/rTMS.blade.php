@extends('Fields.LinhasDePesquisa.model')

@section('name','rTMS')

@section('active-section')
<ul class="tier-2">
    <li class=""> <a href="{{url('/linhasdepesquisa/TNS')}}" title="TNS" class="destination">TNS</a> </li>
    <li class="active-page"> <a href="{{url('/linhasdepesquisa/rTMS')}}" title="TMS" class="destination">rTMS</a> </li>
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
                <a href="{{asset('/images/Linha_de_pesquisa/TMS_small.png')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/TMS_small.png')}}" alt="rTMS - Transcranial magnetic stimulation"></a>
            </div>
         </div>
         <p>
             A estimulação magnética transcraniana é uma técnica que envolve a indução de campos magnéticos alternantes, através de uma bobina, para estimular as células nervosas.
              <br><br>Ao atingir o cérebro, os pulsos magnéticos são convertidos em corrente elétrica, produzindo efeitos neuroplásticos, que milhares de ensaios clínicos demonstraram promissores no tratamento de diversos transtornos psiquiátricos e doenças neurológicas.
              <br><br>Atualmente, utilizamos técnicas de imageamento cerebral (neuronavegadores) que permitem o direcionamento preciso da corrente para pequenas áreas de interesse, produzindo resultados clínicos ainda melhores.
         </p>
         <br>
         <div class="image embedded big-size align-center">
             <a href="{{asset('/images/Linha_de_pesquisa/TMS.jpg')}}" target="_blank"><img src="{{asset('/images/Linha_de_pesquisa/TMS.jpg')}}" alt="rTMS - Transcranial magnetic stimulation"></a>
         </div>
         <p><strong>Figura 1.</strong> A rTMS possui diferentes mecanismos de ação, em neurotransmissores, aparato genético, células da glia e outros. Conforme ilustrado <a href="{{asset('/images/Linha_de_pesquisa/TMS.jpg')}}" target="_blank">[1]</a>, a relação entre pulsos eletromagnéticos e corrente elétrica é parte essencial do processo de funcionamento e deve ser compreendida à luz de teorias de sistemas dinâmicos. Atualmente, nosso time conta com professores-pesquisadores em matemática computacional, especializados em sistemas dinâmicos.</p>
         <ol>
            <li><a href="#">Chervyakov, A.V., et al., Possible Mechanisms Underlying the Therapeutic Effects of Transcranial Magnetic Stimulation. Frontiers in Human Neuroscience, 2015. 9(303).</a></li>
         </ol>

                        <div class="supporting-content-item teaser type-teaser force has-image js-transform" data-id="21094" data-type="teaser">
                            <div class="image">
                                <a href="#" title="rTMS - Transcranial magnetic stimulation"><img src="{{asset('/images/Linha_de_pesquisa/TMS.jpg')}}" alt="rTMS - Transcranial magnetic stimulation"></a>
                            </div>
                            <h3 class="headline"><a href="#" title="Produções">rTMS - Transcranial magnetic stimulation</a></h3>
                            <div class="summary"><p>Produções do Centro de Neuromodulação EPM-UNIFESP em <strong>rTMS - Transcranial magnetic stimulation</strong></p>
                            </div>

                        </div>
     </div>
@endsection
