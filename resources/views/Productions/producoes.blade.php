@extends('Productions.model')

@section('Content')
<div class="main-content section">
    <div class="center force">
        <div class="primary-column column force">
            <div id="main-content" class="primary-content column force" role="main">
                <div class="block" data-block-id="13470">
                    <p>Aqui você encontra alguma de nossas produções. Acesse nossa página no decisionhub (decisionhub.com.br/neuromodulacao) para uma listagem constantemente atualizada das nossas produções.</p>
                </div>
                <div id="bbFieldGrid" class="force">
                    <p class="no-js"><strong>To interact with the academic explorer, please <a href="http://www.activatejavascript.org/">enable JavaScript</a> in your browser.</strong></p>
                    <p class="old-browser"><strong>For a more interactive experience, please <a href="http://browsehappy.com/">upgrade your browser</a>.</strong></p>
                    <div class="filters column force">
                        <div class="display-nav closed"><span>Filtros</span> <i class="fa fa-fw fa-chevron-down open"></i> <i class="fa fa-fw fa-times close"></i> </div>
                        <form action="{{url('/producoes/pesquisar')}}" method="POST">
                            <fieldset data-group="keyword">
                                <legend><h4>Palavra-chave</h4></legend>
                                <div class="">
                                    <div class="search-box force">
                                        {{ csrf_field() }}
                                        <label for="search-view632">Pesquisar</label>
                                        <input id="search-view632" class="column" type="text" name="searchbar" autocomplete="off">
                                        <button type="submit" class="column submit-button button"><i class="fa fa-fw fa-compass"></i><span class="text">Pesquisar</span></button>
                                        <a class="column clear-button button" href="{{url('/producoes')}}"><i class="fa fa-fw fa-eraser"></i><span class="text">Todas as Produções</span></a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form>
                            <fieldset data-group="divisions">
                                <legend>
                                    <h4>Linhas de Pesquisa</h4></legend>
                                <div class="filter">
                                    <div class="form-field TNS">
                                        <input type="checkbox" value="TNS" id="tns" tabindex="-1">
                                        <label for="tns"><a href="#main-content">TNS – Estimulação do nervo trigêmeo</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>A TNS envolve a estimulação elétrica da terminação do ramo V1 do trigêmeo, que fica logo acima do supraorbital. Ao contrário do que ocorre com a tDCS e rTMS que agem de maneira top-down (do córtex para dentro), através da estimulação do trigêmeo, os impulsos navegam até o tronco encefálico e então se espraiam para o tálamo e córtex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field TMS">
                                        <input type="checkbox" value="RTMS" id="rtms" tabindex="-1">
                                        <label for="rtms"><a href="#main-content">rTMS – Estimulação magnética transcraniana</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>A estimulação magnética transcraniana é uma técnica que envolve a indução de campos magnéticos alternantes, através de uma bobina, para estimular as células nervosas.
                                                    <br>Ao atingir o cérebro, os pulsos magnéticos são convertidos em corrente elétrica, produzindo efeitos neuroplásticos, que milhares de ensaios clínicos demonstraram promissores no tratamento de diversos transtornos psiquiátricos e doenças neurológicas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field TDCS">
                                        <input type="checkbox" value="TDCS" id="tdcs" tabindex="-1">
                                        <label for="tdcs"><a href="#main-content">tDCS – Estimulação transcraniana por corrente contínua</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Técnica de estimulação cerebral que utiliza corrente de baixa intensidade, ministrada por eletrodos dispostos sobre o escalpo, para induzir efeitos plásticos no cérebro, associados à melhora de uma série de sintomas psiquiátricos e neurológicos, bem como no aumento da performance cognitiva. Centenas de ensaios clínicos e diversas meta-análises confirmam a sua eficácia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field NEUROFEEDBACK">
                                        <input type="checkbox" value="NEUROFEEDBACK" id="neurofeedback" tabindex="-1">
                                        <label for="neurofeedback"><a href="#main-content">NEUROFEEDBACK</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Neurofeedback é uma técnica de alteração de estados afetivos e melhora do desempenho cognitivo por meio da indução de mudanças de longo prazo na distribuição e comportamento dos padrões frequenciais do cérebro. Nas sessões clínicas, os clientes procuram atingir estados de funcionamento otimizados, tendo como referência aquilo que eletrodos dispostos sobre o escalpo e testa registram; na prática, controlam interfaces ‘com a força do pensamento’, o que torna as sessões bastante estimulantes para a maior.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field REMEDIACAO">
                                        <input type="checkbox" value="REMEDIACAO" id="remediacao" tabindex="-1">
                                        <label for="remediacao"><a href="#main-content">REMEDIAÇÃO COGNITIVA</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>A terapia de remediação cognitiva (CRT) é um conjunto de técnicas de aprendizado verbal e não-verbal que visam otimizar competências conhecidas por terem papel essencial na inteligência geral e adaptabilidade individual, como tomada de decisão, memória de trabalho e atenção.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field QEEG">
                                        <input type="checkbox" value="QEEG" id="qeeg" tabindex="-1">
                                        <label for="qeeg"><a href="#main-content"> QEEG – Eletroencefalografia quantitativa</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>A eletroencefalografia serve à realização de medidas indiretas da atividade cerebral, ao passo que sua variante quantitativa (QEEG) simplesmente denota que existe alta densidade de canais sendo registrados. Conforme aumenta a cobertura do escalpo, cresce a possibilidade de se fazer estimativas acerca da origem de fenômenos biológicos, sejam eles de interesse clínico ou cognitivo-comportamental.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field EYETRACKING">
                                        <input type="checkbox" value="EYETRACKING" id="eyetracking" tabindex="-1">
                                        <label for="eyetracking"><a href="#main-content">EYE TRACKING</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>O eye tracking ou rastreamento ocular é um conjunto de técnicas utilizadas para mapear deslocamentos oculares e pontos de fixação.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field FMRI">
                                        <input type="checkbox" value="FMRI" id="fmri" tabindex="-1">
                                        <label for="fmri"><a href="#main-content">fMRI - Ressonância Magnética Funcional</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Técnica de estimulação cerebral que utiliza corrente de baixa intensidade, ministrada por eletrodos dispostos sobre o escalpo, para induzir efeitos plásticos no cérebro, associados à melhora de uma série de sintomas psiquiátricos e neurológicos, bem como no aumento da performance cognitiva.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field GENETICA">
                                        <input type="checkbox" value="GENETICA" id="genetica" tabindex="-1">
                                        <label for="genetica"><a href="#main-content">GENÉTICA</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Tal como se aplica à personalidade, habilidades e perfil afetivo, a maioria dos transtornos psiquiátricos parece estar relacionada a uma combinação de predisposições genéticas e determinações ambientais.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field ELETROFISIOLOGIA">
                                        <input type="checkbox" value="ELETROFISIOLOGIA" id="eletrofisiologia" tabindex="-1">
                                        <label for="eletrofisiologia"><a href="#main-content">ELETROFISIOLOGIA PERIFÉRICA</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>O sistema nervoso pode ser esquematicamente dividido em central e periférico, sendo este último constituído pelos gânglios e nervos situados fora do complexo cérebro-medula espinhal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear">
                                    <button type="button" class="small clear-button"><a href='{{url('/producoes')}}'><i class="fa fa-fw fa-eraser"></i> <span class="text">APAGAR</span></a></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="fields-of-study column force grid">
                        @foreach ($papers as $paper)
                        <div class="grid-item field-of-study {{$paper->fields}}" style="margin-bottom: 34px; cursor: pointer;position:static; width: 47%">
                            <div class="field-of-study-details">
                                <h4><a href="{{$paper->pdf}}" class="{{$paper->fields}} {{$paper->filters}}">{{$paper->name}}</a></h4>
                                <ul class="division">
                                    <li>{{$paper->authors}}</li>
                                </ul>
                                <div class="summary">
                                    <p>{{$paper->summary}}</p>
                                </div>
                            </div>
                            <div class="school-colors" data-school-number="1">
                                <div class="color {{$paper->fields}}"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="noresults column">
                        <h4>Não conseguimos achar nenhuma publicação com esses parâmetros.  Acesse nossa página no decisionhub (decisionhub.com.br/neuromodulacao) para uma listagem constantemente atualizada das nossas produções.</h4></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection