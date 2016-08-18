@extends('Productions.model')

@section('Content')
<div class="main-content section">
    <div class="center force">
        <div class="primary-column column force">
            <div id="main-content" class="primary-content column force" role="main">
                <div class="block" data-block-id="13470">
                    <p>Johns Hopkins enrolls more than 21,000 full- and part-time students throughout nine academic divisions. Our faculty and students study, teach, and learn across more than 240 programs in the arts and music, the humanities, the social and natural sciences, engineering, international studies, education, business, and the health professions.</p>
                    <p>Use our <strong>interactive program explorer</strong> to see what we offer. Sort by division and/or degree type, or use the keyword search to get started.</p>
                </div>
                <div id="bbFieldGrid" class="force">
                    <p class="no-js"><strong>To interact with the academic explorer, please <a href="http://www.activatejavascript.org/">enable JavaScript</a> in your browser.</strong></p>
                    <p class="old-browser"><strong>For a more interactive experience, please <a href="http://browsehappy.com/">upgrade your browser</a>.</strong></p>
                    <script type="application/json" id="icons">{"categories":[],"degrees":{"bachelors":"fa-fw fa-graduation-cap","major":"fa-fw i-major major","minor":"fa-fw i-minor minor","certificate":"fa-fw fa-certificate","doctoral":"fa-fw fa-medkit","masters":"fa-fw fa-briefcase"},"divisions":[],"frequency":{"full-time":"fa-hourglass","part-time":"fa-hourglass-half"},"type":{"hybrid":"fa-refresh","in-person":"fa-user","online":"fa-laptop"}}</script>
                    <div class="filters column force">
                        <div class="display-nav closed"><span>Filters</span> <i class="fa fa-fw fa-chevron-down open"></i> <i class="fa fa-fw fa-times close"></i> </div>
                        <form class="closed">
                            <fieldset data-group="keyword">
                                <legend>
                                    <h4>Keyword</h4></legend>
                                <div class="filter">
                                    <div class="search-box force">
                                        <input type="hidden" name="c" value="program_explorer">
                                        <label for="search-view632">Search</label>
                                        <input id="search-view632" class="column" type="text" name="q" value="" autocomplete="off">
                                        <button type="button" class="column submit-button button"><i class="fa fa-fw fa-compass"></i><span class="text">Pesquisar</span></button>
                                        <button type="button" class="column clear-button button"><i class="fa fa-fw fa-eraser"></i><span class="text">clear</span></button>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset data-group="programlevel">
                                <legend>
                                    <h4>Nível do Estudo</h4></legend>
                                <div class="filter parent-level">
                                    <div class="form-field bachelors">
                                        <input type="checkbox" value=".bachelors" id="bachelors-view633" tabindex="-1">
                                        <label for="bachelors-view633"><a href="#"><i class="fa fa-fw fa-graduation-cap"></i> Graduação</a></label>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field masters">
                                        <input type="checkbox" value=".masters" id="masters-view638" tabindex="-1">
                                        <label for="masters-view638"><a href="#"><i class="fa fa-fw fa-briefcase"></i> Mestrado</a></label>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field doctoral">
                                        <input type="checkbox" value=".doctoral" id="doctoral-view639" tabindex="-1">
                                        <label for="doctoral-view639"><a href="#"><i class="fa fa-fw fa-medkit"></i> Doutorado</a></label>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field certificate">
                                        <input type="checkbox" value=".certificate" id="certificate-view640" tabindex="-1">
                                        <label for="certificate-view640"><a href="#"><i class="fa fa-fw fa-certificate"></i> Especialização</a></label>
                                    </div>
                                </div>
                                <div class="clear">
                                    <button type="button" class="small clear-button"><i class="fa fa-fw fa-eraser"></i> <span class="text">Apagar</span></button>
                                </div>
                            </fieldset>
                            <fieldset data-group="frequency">
                                <legend>
                                    <h4>Status</h4></legend>
                                <div class="filter">
                                    <div class="form-field full-time">
                                        <input type="checkbox" value=".full-time" id="full-time-view641" tabindex="-1">
                                        <label for="full-time-view641"><a href="#"><i class="fa fa-hourglass"></i> Completo</a></label>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field part-time">
                                        <input type="checkbox" value=".part-time" id="part-time-view642" tabindex="-1">
                                        <label for="part-time-view642"><a href="#"><i class="fa fa-hourglass-half"></i> Pesquisando</a></label>
                                    </div>
                                </div>
                                <div class="clear">
                                    <button type="button" class="small clear-button"><i class="fa fa-fw fa-eraser"></i> <span class="text">APAGAR</span></button>
                                </div>
                            </fieldset>
                            <fieldset data-group="format">
                                <legend>
                                    <h4>Formato</h4></legend>
                                <div class="filter">
                                    <div class="form-field in-person">
                                        <input type="checkbox" value=".in-person" id="in-person-view643" tabindex="-1">
                                        <label for="in-person-view643"><a href="#"><i class="fa fa-user"></i> Qualitativo</a></label>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field online">
                                        <input type="checkbox" value=".online" id="online-view644" tabindex="-1">
                                        <label for="online-view644"><a href="#"><i class="fa fa-laptop"></i> Quantitativo</a></label>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field hybrid">
                                        <input type="checkbox" value=".hybrid" id="hybrid-view645" tabindex="-1">
                                        <label for="hybrid-view645"><a href="#"><i class="fa fa-refresh"></i> Híbrido</a></label>
                                    </div>
                                </div>
                                <div class="clear">
                                    <button type="button" class="small clear-button"><i class="fa fa-fw fa-eraser"></i> <span class="text">APAGAR</span></button>
                                </div>
                            </fieldset>
                            <fieldset data-group="divisions">
                                <legend>
                                    <h4>Linhas de Pesquisa</h4></legend>
                                <div class="filter">
                                    <div class="form-field TNS">
                                        <input type="checkbox" value=".school-of-public-health" id="school-of-public-health-view646" tabindex="-1">
                                        <label for="school-of-public-health-view646"><a href="#">TNS - Transcutaneous electrical nerve stimulation</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>A TNS envolve a estimulação elétrica da terminação do ramo V1 do trigêmeo, que fica logo acima do supraorbital. Ao contrário do que ocorre com a tDCS e rTMS que agem de maneira top-down (do córtex para dentro), através da estimulação do trigêmeo, os impulsos navegam até o tronco encefálico e então se espraiam para o tálamo e córtex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field TMS">
                                        <input type="checkbox" value=".carey-business-school" id="carey-business-school-view647" tabindex="-1">
                                        <label for="carey-business-school-view647"><a href="#">TMS - Transcranial magnetic stimulation</a></label>
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
                                        <input type="checkbox" value=".school-of-arts-and-sciences" id="school-of-arts-and-sciences-view648" tabindex="-1">
                                        <label for="school-of-arts-and-sciences-view648"><a href="#">TDCS - Transcranial direct current stimulation</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Técnica de estimulação cerebral que utiliza corrente de baixa intensidade, ministrada por eletrodos dispostos sobre o escalpo, para induzir efeitos plásticos no cérebro, associados à melhora de uma série de sintomas psiquiátricos e neurológicos, bem como no aumento da performance cognitiva. Centenas de ensaios clínicos e diversas meta-análises confirmam a sua eficácia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field NEUROFEEDBACK">
                                        <input type="checkbox" value=".peabody-institute" id="peabody-institute-view649" tabindex="-1">
                                        <label for="peabody-institute-view649"><a href="#">NEUROFEEDBACK</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Neurofeedback é uma técnica de alteração de estados afetivos e melhora do desempenho cognitivo por meio da indução de mudanças de longo prazo na distribuição e comportamento dos padrões frequenciais do cérebro. Nas sessões clínicas, os clientes procuram atingir estados de funcionamento otimizados, tendo como referência aquilo que eletrodos dispostos sobre o escalpo e testa registram; na prática, controlam interfaces ‘com a força do pensamento’, o que torna as sessões bastante estimulantes para a maior.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field REMEDIACAO">
                                        <input type="checkbox" value=".sais" id="sais-view650" tabindex="-1">
                                        <label for="sais-view650"><a href="#">REMEDIAÇÃO COGNITIVA</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>A terapia de remediação cognitiva (CRT) é um conjunto de técnicas de aprendizado verbal e não-verbal que visam otimizar competências conhecidas por terem papel essencial na inteligência geral e adaptabilidade individual, como tomada de decisão, memória de trabalho e atenção.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field QEEG">
                                        <input type="checkbox" value=".school-of-education" id="school-of-education-view651" tabindex="-1">
                                        <label for="school-of-education-view651"><a href="#">QEEG - Quantitative electroencephalography</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>A eletroencefalografia serve à realização de medidas indiretas da atividade cerebral, ao passo que sua variante quantitativa (QEEG) simplesmente denota que existe alta densidade de canais sendo registrados. Conforme aumenta a cobertura do escalpo, cresce a possibilidade de se fazer estimativas acerca da origem de fenômenos biológicos, sejam eles de interesse clínico ou cognitivo-comportamental.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field EYETRACKING">
                                        <input type="checkbox" value=".school-of-medicine" id="school-of-medicine-view652" tabindex="-1">
                                        <label for="school-of-medicine-view652"><a href="#">EYE TRACKING</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>O eye tracking ou rastreamento ocular é um conjunto de técnicas utilizadas para mapear deslocamentos oculares e pontos de fixação.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field FMRI">
                                        <input type="checkbox" value=".school-of-nursing" id="school-of-nursing-view653" tabindex="-1">
                                        <label for="school-of-nursing-view653"><a href="#">FMRI - Functional magnetic resonance imaging </a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Técnica de estimulação cerebral que utiliza corrente de baixa intensidade, ministrada por eletrodos dispostos sobre o escalpo, para induzir efeitos plásticos no cérebro, associados à melhora de uma série de sintomas psiquiátricos e neurológicos, bem como no aumento da performance cognitiva.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field GENETICA">
                                        <input type="checkbox" value=".school-of-engineering" id="school-of-engineering-view654" tabindex="-1">
                                        <label for="school-of-engineering-view654"><a href="#">GENÉTICA</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>Tal como se aplica à personalidade, habilidades e perfil afetivo, a maioria dos transtornos psiquiátricos parece estar relacionada a uma combinação de predisposições genéticas e determinações ambientais.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="form-field ELETROFISIOLOGIA">
                                        <input type="checkbox" value=".school-of-engineering" id="school-of-engineering-view654" tabindex="-1">
                                        <label for="school-of-engineering-view654"><a href="#">ELETROFISIOLOGIA PERIFÉRICA</a></label>
                                        <div class="info"> <i class="fa fa-fw fa-info-circle"></i>
                                            <div class="info-text">
                                                <p>O sistema nervoso pode ser esquematicamente dividido em central e periférico, sendo este último constituído pelos gânglios e nervos situados fora do complexo cérebro-medula espinhal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear">
                                    <button type="button" class="small clear-button"><i class="fa fa-fw fa-eraser"></i> <span class="text">APAGAR</span></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="fields-of-study column force grid">
                        @foreach ($papers as $paper)
                        <div class="grid-item field-of-study {{$paper->fields}}" style="margin-bottom: 34px; cursor: pointer;position:static; width: 47%">
                            <div class="field-of-study-details">
                                <h4><a href="{{$paper->pdf}}" class="{{$paper->fields}}">{{$paper->name}}</a></h4>
                                <div class="icons"> <i class="fa fa-fw fa-certificate"></i> <i class="fa fa-hourglass"></i> <i class="fa fa-hourglass-half"></i> <i class="fa fa-refresh"></i> <i class="fa fa-user"></i> </div>
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
                        <h4>We couldn't find any results for you.</h4> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection