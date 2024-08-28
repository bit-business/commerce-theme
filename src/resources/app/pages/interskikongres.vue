<template>
  <div class="interski-kongresi">
    <Head :title="$page.props.name" />
    <section class="rectangle-parent56">
      <img class="frame-child82" alt="" src="/storage/slike/interski/rectangle-200@2x.png" />
      <div class="frame-child83" />
      <h1 class="interski-kongresi-i">INTERSKI KONGRESI I DEMO TEAM</h1>
    </section>
    <section class="interski-kongresi-inner">
      <div class="instruction-provider-parent">
        <!-- Instruction Provider 0 -->
        <button class="instruction-provider" @click="toggleInstruction(0)" :class="{ 'active': activeInstruction === 0 }">
          <b class="interski-povijest">Interski povijest</b>
        </button>
        <img class="line-icon" loading="lazy" alt="" src="/storage/slike/interski/line-39.svg" />
        <!-- Instruction Provider 1 -->
        <button class="instruction-provider1" @click="toggleInstruction(1)" :class="{ 'active': activeInstruction === 1 }">
          <b class="interski">Interski</b>
        </button>
        <img class="line-icon" loading="lazy" alt="" src="/storage/slike/interski/line-39.svg" />
        <!-- Instruction Provider 2 -->
        <button class="instruction-provider2" @click="toggleInstruction(2)" :class="{ 'active': activeInstruction === 2 }">
          <b class="demo-team">Demo team</b>
        </button>
      </div>
    </section>


  
    
    <menikartica3 v-if="activeInstruction === 0" />
    <menikartica2 v-else-if="activeInstruction === 1" />
    
    <section class="access-modifier" v-else-if="activeInstruction === 2">
      <div class="rectangle-parent57">
        <img class="frame-child85" alt="" src="/storage/slike/interski/rectangle-1581@2x.png" />
        <h1 class="demo-team1">DEMO TEAM</h1>
        <div class="demo-team-selekcija-container">
          <span>
            <p class="demo-team-selekcija-je-najbolj">
              <span>
                <span class="demo-team-selekcija"
                  >DEMO TEAM selekcija je najboljih hrvatskih demonstratora
                  skijanja izabranih prema rang listi rezultata
                </span>
                <Link class="demonstratorskog-seminara" :href="route('skijasi.commerce-theme.kategorija', { slug: 'dogadanja' })" 
                  >Demonstratorskog seminara</Link
                >
              </span>
              <span>
                <span>.</span>
              </span>
            </p>
            <p class="blank-line60">
              <span>
                <span>&nbsp;</span>
              </span>
            </p>
            <p class="demo-team-bira-se-na-razdoblje">
              <span>
                <span>DEMO TEAM bira se na razdoblje od </span>
                <b class="godine">4 godine</b>
                <span>.</span>
              </span>
            </p>
            <p class="blank-line61">
              <span>
                <span>&nbsp;</span>
              </span>
            </p>
            <p class="zadaa-hrvatskog-demo-team-a">
              <span>
                <b>Zadaća Hrvatskog DEMO TEAM-a:</b>
              </span>
            </p>
            <ul class="predstavljanje-hrvatske-svake">
              <li class="predstavljanje-hrvatske-svake1">
                <span>
                  <span
                    >predstavljanje Hrvatske svake 4 godine na Interski
                    kongresima</span
                  >
                </span>
              </li>
              <li class="prikaz-hrvatske-kole-skijanja">
                <span>
                  <span
                    >prikaz Hrvatske škole skijanja, sudjelovanje na show
                    nastupima i raznim radionicama na Interski kongresima</span
                  >
                </span>
              </li>
              <li class="razvoj-i-unaprjeenje-hrvatske">
                <span>
                  <span
                    >razvoj i unaprjeđenje Hrvatske škole skijanja i
                    metodologije podučavanja</span
                  >
                </span>
              </li>
              <li>
                <span>
                  <span
                    >prijenos znanja i rad na seminarima i tečajevima za
                    učitelje skijanja</span
                  >
                </span>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </section>
    <section class="interski-kongresi-child">
      <div class="error-handler-parent">
        <div class="error-handler">
          <h1 class="hrvatska-na-interski">HRVATSKA NA INTERSKI KONGRESIMA</h1>
        </div>
        <div class="frame-parent21">
          <div class="rectangle-parent58">
            <div class="frame-child86" />
            <div class="output-merger">
              <div class="rectangle-parent59">
                <img class="frame-child87" alt="" src="/storage/slike/interski/rectangle-112@2x.png" />
                <img
                  class="frame-child88"
                  loading="lazy"
                  alt=""
                  src="/storage/slike/interski/rectangle-1131@2x.png"
                />
              </div>
              <div class="decision-maker-wrapper">
                <div class="decision-maker">
                  <div class="interski-kongres-finska-wrapper">
                    <h1 class="interski-kongres-">INTERSKI KONGRES - FINSKA</h1>
                  </div>
                  <div class="parent">
                    <b class="b">2023</b>
                    <div class="levi-67805n-24802e-container">
                      <span class="levi-67805n-24802e-container1">
                        <p class="levi">
                          <b>Levi</b>
                        </p>
                        <p class="n-24802e">67.805°N 24.802°E</p>
                        <p class="m-nadmorske-visine">531 m nadmorske visine</p>
                        <p class="zagreb-levi-2497-km">Zagreb-Levi: 2497 km</p>
                      </span>
                    </div>
                    <button class="rectangle-parent60"  @click.prevent="toggleDropdown1"> 
                      <div class="frame-child89" />
                      <b class="demo-team2">DEMO TEAM</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <section class="logic-gate5">
          <transition name="dropdown">
  <div v-show="showDropdown" @click.self="showDropdown = false" class="dropdown-container2">
    <div class="rectangle-parent61">
            <div class="frame-child90" />
            <div class="data-preprocessor-chain">
              <div class="data-normalizer-chain-parent">
                <div class="data-normalizer-chain">
                  <div class="data-filter-chain">
                    <div class="data-reducer-chain">
                      <div class="spinner">
                        <div class="icon-set">
                          <b class="vrijeme-i-mjesto"
                            >Vrijeme i mjesto održavanja:</b
                          >
                          <div class="godina-levi">2023. godina, Levi</div>
                        </div>
                       
                        <div class="icon-set1">
                          <b class="demo-team3">PREDSTAVNICI:</b>
                        </div>



                  
                      </div>
                     
                    </div>

               
          

                    <div class="carousel-outer-container">
                    <div class="carousel-container">
   <button v-if="canScrollLeft(1)" @click="scrollLeft(1)" class="arrow left-arrow">&#8249;</button>
   <div class="carousel" id="carousel1" ref="carousel1">
    <div v-for="item in items" :key="item.id" class="carousel-item">
      <img :src="item.image" class="frame-child91" alt="" />
      <div class="text-overlay">
        <b>{{ item.name }}</b>
      </div>
    </div>
  </div>
  <button v-if="canScrollRight(1)" @click="scrollRight(1)" class="arrow right-arrow">&#8250;</button>
</div></div>

                  </div>
                  <!--
                  <div class="rectangle-parent64">
                    
                    <div class="frame-child93" />
                    <img
                      class="connection-manager-icon"
                      loading="lazy"
                      alt=""
                      src="/storage/slike/interski/vector.svg"
                    />
                  </div>-->
                </div>
                
                <div class="link-cluster">
                  <div class="validation" />
                </div>
              </div>
              <div class="transformer">
                <div class="interski-kongres-odran-container">
                  <p class="interski-kongres-odran">
                    22. INTERSKI kongres održan je 2023.g. u Finskom mjestu
                    Levi. 2015.g. bili smo na najjužnijem mjestu, a sada skoro
                    pa možemo reći da smo na krajnjem sjeveru kugle zemaljske.
                  </p>
                  <p class="na-kongresu-je">
                    Na kongresu je prisustvovalo 1148 sudionika iz 34 svjetske
                    nacije.
                  </p>
                  <p class="novi-demo-team">
                    Novi demo team izabran tek u ožujku 2022.g. imao je prije
                    kongresa svega 29 dana skijaških treninga. Veliki trud, rad
                    i volja doveli su nas je do vrhunskog uspjeha na Interski
                    kongresu u Finskoj. Svaka nacija nastupila je na show
                    nastupima i nastupima prikaza nacionalne škole skijanja.
                  </p>
                  <p class="blank-line62">&nbsp;</p>
                  <p class="hrvatska-je-ve">
                    Hrvatska je već u startu proglašena za najbolje odjevenom
                    nacijom, jedini smo na Interski kongresu imali 3 različite
                    uniforme, no to je bila tek dobra najava za ono što slijedi.
                  </p>
                  <p class="na-nonom-show">
                    Na noćnom show nastupu najprije se Maxime spustio ravno na
                    monoskiji, za njim je Davide izveo izvanredan skok,
                    reflektori skijališta su se ugasili i svi su gledali gdje li
                    je ostatak hrvatskog demo team. Članovi demo teama, jedan po
                    jedan palili su led lampice na svojim odijelima i krenuli u
                    akciju. Sjurili su se u vrhunskoj formaciji niz padinu, u
                    mrklom mraku, osvijetljen samo led lampicama. Tim nastupom
                    iznenadili smo sve sudionike i gledatelje te dobili vrhunske
                    pohvale jer skijati u mrklom mraku formacije, kada si ne
                    vidiš tlo pod nogama i nije tako lako. Također smo
                    impresionirali publiku našim izborom muzike (pjesme: Mama
                    ŠČ, Top Gun Anthem) koju je ukomponirao Franjo Jardas.
                  </p>
                  <p class="blank-line63">&nbsp;</p>
                  <p class="osim-nastupa-odlino">
                    Osim nastupa odlično smo prezentirali hrvatsku školu
                    skijanja na radionicama i održali smo predavanja s vrlo
                    zanimljivim, inovativnim temama u skijanju.
                  </p>
                  <p class="od-ostalih-sudionika">
                    Od ostalih sudionika uvelike bi pohvalili Švicarsku na
                    odličnim nastupima i radionicama. Švicarski demo team
                    oduševljen našim nastupom također je predložio da na
                    sljedećem Interski kongresu na 1 show nastupu nastupamo
                    zajedno, što bi bio prvi slušaj zajedničkog nastupa u
                    povijesti Interskija.
                  </p>
                  <p class="blank-line64">&nbsp;</p>
                  <p class="sudjelovali-smo-na">
                    Sudjelovali smo na radionicama skoro svih prisutnih nacija,
                    brojim predavanjima i svim sastancima s ciljem promicanja,
                    poboljšanja i usavršavanja kvalitete sportova na snijegu u
                    Hrvatskoj. Novo naučena znanja i vještine prenijet ćemo
                    našim članovima na budućim seminarima i tečajevima.
                  </p>
                </div>
              </div>
            </div>
         
          </div>
          <div class="frame-wrapper15"  @click.prevent="toggleDropdown1">
              <div class="rectangle-parent65">
                <div class="frame-child94" />
                <img
                  class="upload-1-icon6"
                  loading="lazy"
                  alt=""
                  src="/storage/slike/interski/upload-11.svg"
                />
              </div>
            </div>
</div></transition></section>


        </div>
      </div>
    </section>
    <section class="frame-section">
      <div class="rectangle-parent66">
        <div class="frame-child95" />
        <div class="frame-parent22">
          <div class="frame-wrapper16">
            <div class="interski-kongres-bugarska-parent">
              <h1 class="interski-kongres-1">INTERSKI KONGRES - BUGARSKA</h1>
              <div class="frame-wrapper17">
                <div class="frame-parent23">
                  <div class="group">
                    <b class="b1">2019</b>
                    <div class="pamporovo-4138n-2440e-1926-wrapper">
                      <div class="pamporovo-4138n-2440e-container">
                        <p class="pamporovo">
                          <b>Pamporovo</b>
                        </p>
                        <p class="n-2440e">41°38'N 24°40'E</p>
                        <p class="m-nadmorske-visine1">
                          1926 m nadmorske visine
                        </p>
                        <p class="zagreb-pamporovo-838-km">
                          Zagreb-Pamporovo: 838 km
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="frame-wrapper18">
                    <button class="rectangle-parent67" @click.prevent="toggleDropdown2"> 
                      <div class="frame-child96" />
                      <b class="demo-team4">DEMO TEAM</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="comparison-operator">
            <img
              class="comparison-operator-child"
              alt=""
              src="/storage/slike/interski/rectangle-160@2x.png"
            />
            <img
              class="comparison-operator-item"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/rectangle-1592@2x.png"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="interski-kongresi-inner1">
    <transition name="dropdown">
  <div v-show="showDropdown2" @click.self="showDropdown2 = false" class="dropdown-container2">
 
      <div class="rectangle-parent68">
        <div class="frame-child97" />
        <div class="frame-parent24">
          <div class="frame-parent25">
            <div class="frame-wrapper19">
              <div class="spinner-parent">
                <div class="spinner1">
                  <div class="icon-set2">
                    <b class="vrijeme-i-mjesto1"
                      >Vrijeme i mjesto održavanja:</b
                    >
                    <div class="godina-pamporovo">2019. godina, Pamporovo</div>
                  </div>
                  
                  <div class="icon-set3">
                    <b class="demo-team5">PREDSTAVNICI:</b>
                  </div>
                 
                </div>
              
              </div>


              <div class="carousel-outer-container">
                    <div class="carousel-container">
   <button v-if="canScrollLeft(2)" @click="scrollLeft(2)" class="arrow left-arrow">&#8249;</button>
  <div class="carousel" id="carousel2" ref="carousel2">
    <div v-for="item in items2" :key="item.id" class="carousel-item">
      <img :src="item.image" class="frame-child91" alt="" />
      <div class="text-overlay">
        <b>{{ item.name }}</b>
      </div>
    </div>
  </div>
  <button v-if="canScrollRight(2)" @click="scrollRight(2)" class="arrow right-arrow">&#8250;</button>
</div></div>



            </div>
          
          </div>
          <div class="timing-manager">
            <div class="connection-hub" />
          </div>
          <div class="parameter-setter">
            <div class="na-najstarijem-bugarskom-container">
              <span>
                <p class="na-najstarijem-bugarskom">
                  Na najstarijem bugarskom skijalištu Pamporovo od
                  16.-23.03.2019. održan je 21. Interski kongres. U Bugarskoj je
                  sudjelovalo 35 zemalja članica INTERSKI-a, ISIA organizacije,
                  IVSI i IVSS-a među kojima je bila i delegacija Hrvatske te
                  demo team HZUTS-a.
                </p>
                <p class="blank-line65">&nbsp;</p>
                <p class="hrvatsku-skolu-skijanja">
                  Hrvatsku školu skijanja prezentirali smo vrhunskim show
                  nastupima, seminarima, predavanjima i udžbenikom Alpsko
                  skijanje te tako opravdali odlične kritike koje smo dobili
                  nakon nastupa na prošlom kongresu u Argentini 2015. godine.
                </p>
                <p class="blank-line66">&nbsp;</p>
                <p class="team-u-se-prikljuio">
                  Team-u se priključio i Dino Sokolović zlatni u slalomu na
                  Paraolimpijskim igrama održanim u Koreji 2018.g. i time
                  hrvatski nastup “digao” na još viši nivo.
                </p>
                <p class="direktan-prijenos-na">
                  Direktan prijenos na Bugarskoj nacionalnoj televiziji dodao je
                  još više naboja i novu dozu adrenalina svim sudionicima na
                  otvaranju kongresa. Naš nastup su započeli Ana Maria Vučinić i
                  Dino Sokolović skijanjem u “kontri”, a zatim je krenuo ostatak
                  tima u formaciji koju smo pripremali za otvaranje (jedna od
                  pet pripremljenih).
                </p>
                <p class="p"></p>
                <p class="na-sveopce-iznenaenje">
                  Na sveopće iznenađenje svih prisutnih, a naročito voditeljice
                  i TV komentatora, naš demonstrator Nino Ružička spustio se
                  kroz našu formaciju na BICIKLU!!! Izmjerena brzina bila je
                  93,3 km/h. To je bio vrhunac otvaranja kongresa. Odlični Dino
                  i Ana, super formacija teama i na kraju Nino na biciklu,
                  dovela nas je do titule najboljeg tima na otvaranju. Sljedećih
                  dana izmjenjivali smo iskustva s demonstratorima ostalih
                  zemalja sudionika, sudjelovali na workshopovima i raznim
                  prikazima škola skijanja te se pripremali za ostale službene
                  nastupe.
                </p>
                <p class="uz-odlicno-skijanje">
                  Uz odlično skijanje koje smo pokazali, slijedilo je još bolje
                  predavanje “Hrvatska škola skijanja” i njen prikaz na terenu
                  uz preko 300 sudionika.
                </p>
              </span>
            </div>
          </div>
        </div>
    
      </div>
      <div class="frame-wrapper20"  @click.prevent="toggleDropdown2">
          <div class="rectangle-parent71">
            <div class="frame-child100" />
            <img
              class="upload-1-icon7"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/upload-11.svg"
            />
          </div>
        </div>
   </div>
  </transition>
</section>

    <section class="interski-kongresi-inner2">
      <div class="frame-parent26">
        <div class="rectangle-parent72">
          <img class="frame-child101" alt="" src="/storage/slike/interski/rectangle-112@2x.png" />
          <img
            class="frame-child102"
            loading="lazy"
            alt=""
            src="/storage/slike/interski/rectangle-113-1@2x.png"
          />
        </div>
        <div class="logic-gate-wrapper">
          <div class="logic-gate">
            <h1 class="interski-kongres-2">INTERSKI KONGRES - ARGENTINA</h1>
            <div class="error-handler1">
              <div class="frame-parent27">
                <div class="parent1">
                  <b class="b2">2015</b>
                  <div class="ushuaia-5448s-6819w-958-m-wrapper">
                    <div class="ushuaia-5448s-6819w-container">
                      <p class="ushuaia">
                        <b>Ushuaia</b>
                      </p>
                      <p class="s-6819w">54°48′S 68°19′W</p>
                      <p class="m-nadmorske-visine2">958 m nadmorske visine</p>
                      <p class="zagreb-ushuaia-13687-km">
                        Zagreb-Ushuaia: 13687 km
                      </p>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper21">
                  <button class="rectangle-parent73" @click.prevent="toggleDropdown3"> 
                    <div class="frame-child103" />
                    <b class="demo-team6">DEMO TEAM</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="logic-gate1">
   <transition name="dropdown">
  <div v-show="showDropdown3" @click.self="showDropdown3 = false" class="dropdown-container2">
      <div class="rectangle-parent74">
        <div class="frame-child104" />
        <div class="shape-assembler">
          <div class="list-manager-parent">
            <div class="list-manager">
              <div class="input-provider-wrapper">
                <div class="input-provider">
                  <div class="spinner2">
                    <div class="icon-set4">
                      <b class="vrijeme-i-mjesto2"
                        >Vrijeme i mjesto održavanja:</b
                      >
                      <div class="godina-ushuaia">2015. godina, Ushuaia</div>
                    </div>
                    <div class="icon-set5">
                      <b class="demo-team7">PREDSTAVNICI:</b>
                    </div>
                
                  </div>
              
                </div>

        

              </div>

              
             
            </div>
            <div class="carousel-outer-container">
                    <div class="carousel-container">
   <button v-if="canScrollLeft(3)" @click="scrollLeft(3)" class="arrow left-arrow">&#8249;</button>
  <div class="carousel" id="carousel3" ref="carousel3">
    <div v-for="item in items3" :key="item.id" class="carousel-item">
      <img :src="item.image" class="frame-child91" alt="" />
      <div class="text-overlay">
        <b>{{ item.name }}</b>
      </div>
    </div>
  </div>
  <button v-if="canScrollRight(3)" @click="scrollRight(3)" class="arrow right-arrow">&#8250;</button>
</div></div>

            <div class="link-cluster1">
              <div class="link-cluster-child" />
            </div>
          </div>
          <div class="ushuaia-a-je-najjuniji-grad-i-wrapper">
            <div class="ushuaia-a-je-najjuniji-container">
              <p class="ushuaia-a-je-najjuniji">
                Ushuaia-a je najjužniji grad i luka na svijetu, sa skijalištem
                udaljenim pola sata vožnje od grada. Staze se protežu od 1057
                nmv. pa do 195 nmv. što skijalište čini najnižim skijalištem na
                svijetu.
              </p>
              <p class="blank-line67">&nbsp;</p>
              <p class="team-je-funkcionirao">
                Team je funkcionirao besprijekorno. Svaki dan treninzi od 09 do
                15 sati, odmor, obilazak, razgledavanje grada i video analize
                prije večere.
              </p>
              <p class="na-interskiju-je">
                Na Interskiju je sudjelovalo 37 zemalja svijeta. Svaka zemlja
                ima 3 show nastupa i 2 nastupa prikaza škole skijanja sa
                timovima od četiri pa do dvanaest članova.
              </p>
              <p class="blank-line68">&nbsp;</p>
              <p class="hrvatski-demo-team">
                Hrvatski demo team odskijao je vrhunski - brzo, s odličnim
                zavojem, bez grešaka i sa mnogo pohvala ostalih teamova.
              </p>
              <p class="odlinom-prezentacijom-demons">
                Odličnom prezentacijom, demonstracijom i objašnjenjem hrvatske
                škole skijanja oduševili smo sve prisutne. Rezultat je bio 88
                članova svih delegacija koji su prisustvovali našem workshopu
                što je daleko najveći broj posjećenosti workshopa cijelog
                kongresa.
              </p>
              <p class="blank-line69">&nbsp;</p>
              <p class="postali-smo-hit">
                Postali smo hit INTERSKI-a. Pohvale sa svih strana. Trud i
                ulaganja su se isplatila. Pokazali smo svijetu kvalitetnu i
                modernu školu skijanja.
              </p>
              <p class="od-ostalih-zemalja">
                Od ostalih zemalja dojmile su nas izvrsna Švicarska, Italija sa
                zanimljivim prikazom kako bi vrtić na snijegu trebao izgledati i
                atraktivna Argentina, domaćin s velikim brojem sudionika.
              </p>
            </div>
          </div>
        </div>
        <div class="frame-wrapper22"  @click.prevent="toggleDropdown3">
          <div class="rectangle-parent78">
            <div class="frame-child108" />
            <img
              class="upload-1-icon8"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/upload-11.svg"
            />
          </div>
        </div>
      </div></div></transition>
    </section>
    <section class="logic-gate2">
      <div class="rectangle-parent79">
        <div class="frame-child109" />
        <div class="frame-parent28">
          <div class="frame-wrapper23">
            <div class="interski-kongres-austrija-parent">
              <h1 class="interski-kongres-3">INTERSKI KONGRES - AUSTRIJA</h1>
              <div class="frame-wrapper24">
                <div class="frame-parent29">
                  <div class="parent2">
                    <b class="b3">2011</b>
                    <div class="st-anton-4707n-1016e-2806-wrapper">
                      <div class="st-anton-4707n-container">
                        <p class="st-anton">
                          <b>St. Anton</b>
                        </p>
                        <p class="n-1016e">47°07′N 10°16′E</p>
                        <p class="m-nadmorske-visine3">
                          2806 m nadmorske visine
                        </p>
                        <p class="zagreb-st-anton-461">
                          Zagreb-St. Anton: 461 km
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="frame-wrapper25">
                    <button class="rectangle-parent80" @click.prevent="toggleDropdown4"> 
                      <div class="frame-child110" />
                      <b class="demo-team8">DEMO TEAM</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
   
            <div class="rectangle-parent81">
              <img class="frame-child111" alt="" src="/storage/slike/interski/rectangle-160@2x.png" />
              <img
                class="frame-child112"
                loading="lazy"
                alt=""
                src="/storage/slike/interski/rectangle-159-11@2x.png"
              />
            </div>
       
        </div>
      </div>
    </section>
    <section class="logic-gate3">
      <transition name="dropdown">
  <div v-show="showDropdown4" @click.self="showDropdown4 = false" class="dropdown-container2">
      <div class="rectangle-parent82">
        <div class="frame-child113" />
        <div class="frame-parent30">
          <div class="frame-parent31">
            <div class="frame-wrapper27">
              <div class="spinner-group">
                <div class="spinner3">
                  <div class="icon-set6">
                    <b class="vrijeme-i-mjesto3"
                      >Vrijeme i mjesto održavanja:</b
                    >
                    <div class="godina-st-anton">2011. godina, St. Anton</div>
                  </div>
                  <div class="icon-set7">
                    <b class="demo-team9">PREDSTAVNICI:</b>
                  </div>
              
                </div>
            
              </div>

              
            </div>

            
       
          </div>

          <div class="carousel-outer-container">
                    <div class="carousel-container">
   <button v-if="canScrollLeft(4)" @click="scrollLeft(4)" class="arrow left-arrow">&#8249;</button>
  <div class="carousel" id="carousel4" ref="carousel4">
    <div v-for="item in items4" :key="item.id" class="carousel-item">
      <img :src="item.image" class="frame-child91" alt="" />
      <div class="text-overlay">
        <b>{{ item.name }}</b>
      </div>
    </div>
  </div>
  <button v-if="canScrollRight(4)" @click="scrollRight(4)" class="arrow right-arrow">&#8250;</button>
</div></div>

          <div class="bar-chart-wrapper">
            <div class="bar-chart">
              <div class="pie-chart" />
              <div class="interski-kongres-koji-container">
                <span>
                  <p class="interski-kongres-koji">
                    Interski kongres koji se u siječnju 2011. godine održao u
                    St. Antonu bio je dosada najveći i najbolje organizirani
                    Interski kongres. Na kongresu su nastupili predstavnici iz
                    40 zemalja članica Interski International, a ukupno je
                    akreditirano više od 2.000 sudionika. I za hrvatsko skijanje
                    i HZUTS ovaj je kongres bio do sada najuspješniji i
                    najkvalitetnije realizirani nastup.
                  </p>
                  <p class="p1"></p>
                  <p class="za-razliku-od">
                    Za razliku od prakse prethodnih kongresa, u St. Antonu je
                    promijenjen način rada na workshopovima. Sudionici su od 10
                    do 13 sati proveli u radu na jednom workshopu te nisu mogli
                    sudjelovati na nekom drugom. To je omogućilo kvalitetniji
                    rad na worksopu jer sudionici praktično nisu mogli mijenjati
                    po volji workshopove, što je bilo na prijašnjim kongresima
                    moguće. Zbog takve organizacije, workshopovi su bili
                    brojniji, sudionici su provodili više vremena u istoj grupi,
                    što je intenziviralo međusobnu interakciju i povećalo broj
                    pitanja.
                  </p>
                  <p class="intenzivirani-su-workshopovi">
                    Intenzivirani su workshopovi snowborda i telemarka te rada
                    sa osobama s invaliditetom.
                  </p>
                  <p class="blank-line70">&nbsp;</p>
                  <p class="hrvatski-nastup-bio">
                    Hrvatski nastup bio je u cijelosti na najvišoj razini, a
                    vrhunski su bili i svi pojedini dijelovi nastupa -
                    predavanja, workshopovi i show nastupi.
                  </p>
                  <p class="naa-predavanja-su">
                    Naša predavanja su bila praćena sa velikim interesom, a
                    diskusije nakon predavanja pokazale da postoji veliki
                    interes za hrvatsko skijanje. Workshopovi su održani s dvije
                    teme - Hrvatska škola skijanja i Novi način učenja
                    snowboarda uz pomoć skijaša, koji je razradio Igor Kecerin
                    uz pomoć Mikija Toskića, hrvatskog demonstratora snowboarda.
                    Taj pristup učenju snowboarda je vrlo dobro prihvaćen i
                    ocijenjen. Hrvatska škola skijanja je održana na tri jezika:
                    njemačkom, engleskom i talijanskom.
                  </p>
                  <p class="snowbord-workshop-je">
                    Snowbord workshop je održan na Engleskom. U realizaciji je
                    sudjelovao cijeli Demo team i ostvarili su veliki uspjeh.
                  </p>
                  <p class="blank-line71">&nbsp;</p>
                  <p class="show-nastup-se">
                    Show nastup se sastojao od tri nastupa tijekom večernjeg
                    programa i nastupom na ceremoniji zatvaranja kongresa.
                    Nastupi su bili izvrsni, te smo dobili mnogo pohvala i
                    čestitki od članova drugih demo-teamova, trenera
                    demo-teamova i organizacije.
                  </p>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="frame-wrapper28"  @click.prevent="toggleDropdown4">
          <div class="rectangle-parent86">
            <div class="frame-child117" />
            <img
              class="upload-1-icon9"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/upload-11.svg"
            />
          </div>
        </div>
      </div></div></transition>
    </section>
    <section class="logic-gate4">
      <div class="rectangle-parent87">
        <div class="frame-child118" />
        <div class="frame-parent32">
          <div class="rectangle-parent88">
            <img class="frame-child119" alt="" src="/storage/slike/interski/rectangle-112@2x.png" />
            <img
              class="frame-child120"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/rectangle-113-2@2x.png"
            />
          </div>
          <div class="frame-wrapper29">
            <div class="frame-parent33">
              <div class="interski-kongres-koreja-wrapper">
                <h1 class="interski-kongres-4">INTERSKI KONGRES - KOREJA</h1>
              </div>
              <div class="frame-parent34">
                <div class="parent3">
                  <b class="b4">2007</b>
                  <div class="pyeongchang-3722n-12824e-1-wrapper">
                    <div class="pyeongchang-3722n-12824e-container">
                      <p class="pyeongchang">
                        <b>Pyeongchang</b>
                      </p>
                      <p class="n-12824e">37°22′N 128°24′E</p>
                      <p class="m-nadmorske-visine4">1450 m nadmorske visine</p>
                      <p class="zagreb-pyeongchang-8568">
                        Zagreb-Pyeongchang : 8568 km
                      </p>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper30">
                  <button class="rectangle-parent89" @click.prevent="toggleDropdown5"> 
                    <div class="frame-child121" />
                    <b class="demo-team10">DEMO TEAM</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="logic-gate55">
      <transition name="dropdown">
  <div v-show="showDropdown5" @click.self="showDropdown5 = false" class="dropdown-container2">
      <div class="rectangle-parent90">
        <div class="frame-child122" />
        <div class="frame-parent35">
          <div class="frame-parent36">
            <div class="frame-parent37">
              <div class="frame-wrapper31">
                <div class="spinner-container">
                  <div class="spinner4">
                    <div class="icon-set8">
                      <b class="vrijeme-i-mjesto4"
                        >Vrijeme i mjesto održavanja:</b
                      >
                      <div class="godina-pyeongchang">
                    2007. godina, Pyeongchang
                  </div>
                    </div>
                
                    <div class="icon-set9">
                      <b class="demo-team11">PREDSTAVNICI:</b>
                    </div>
                  
                  </div>
                
                </div>
              </div>
            
            </div>

            <div class="carousel-outer-container">
                    <div class="carousel-container">
   <button v-if="canScrollLeft(5)" @click="scrollLeft(5)" class="arrow left-arrow">&#8249;</button>
  <div class="carousel" id="carousel5" ref="carousel5">
    <div v-for="item in items5" :key="item.id" class="carousel-item">
      <img :src="item.image" class="frame-child91" alt="" />
      <div class="text-overlay">
        <b>{{ item.name }}</b>
      </div>
    </div>
  </div>
  <button v-if="canScrollRight(5)" @click="scrollRight(5)" class="arrow right-arrow">&#8250;</button>
</div></div>
            <div class="link-cluster2">
              <div class="link-cluster-item" />
            </div>
          </div>
          <div class="u-18-om-interski-kongresu-u-k-wrapper">
            <div class="u-18-om-interski">
              U 18.-om Interski kongresu u Koreji bilo je prisutno 1500
              sudionika i 31 nacija. Delegacija HZUTS-a i njen DEMO TEAM
              predstavio se sa tri show nastupa s elementima hrvatske škole
              skijanja, tri predavanja te show nastupima na službenom otvaranju
              i zatvaranju Kongresa.
            </div>
          </div>
        </div>
        <div class="frame-wrapper32"  @click.prevent="toggleDropdown5">
          <div class="rectangle-parent94">
            <div class="frame-child126" />
            <img
              class="upload-1-icon10"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/upload-11.svg"
            />
          </div>
        </div>
      </div></div></transition>
    </section>
    <section class="logic-gate6">
      <div class="rectangle-parent95">
        <div class="frame-child127" />
        <div class="frame-parent38">
          <div class="frame-wrapper33">
            <div class="frame-parent39">
              <div class="interski-kongres-vicarska-wrapper">
                <h1 class="interski-kongres-5">INTERSKI KONGRES - ŠVICARSKA</h1>
              </div>
              <div class="frame-parent40">
                <div class="parent4">
                  <b class="b5">2003</b>
                  <div class="crans-montana-4619n-729e-3-wrapper">
                    <div class="crans-montana-4619n-container">
                      <p class="crans-montana">
                        <b>Crans Montana</b>
                      </p>
                      <p class="n-729e">46°19′N 7°29′E</p>
                      <p class="m-nadmorske-visine5">3177 m nadmorske visine</p>
                      <p class="zagreb-crans-montana-658">
                        Zagreb-Crans Montana: 658 km
                      </p>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper34">
                  <button class="rectangle-parent96" @click.prevent="toggleDropdown6"> 
                    <div class="frame-child128" />
                    <b class="demo-team12">DEMO TEAM</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="rectangle-parent97">
            <img class="frame-child129" alt="" src="/storage/slike/interski/rectangle-160@2x.png" />
            <img
              class="frame-child130"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/rectangle-159-21@2x.png"
            />
          </div>
        </div>
      </div>
    </section>
    <section class="logic-gate7">
      <transition name="dropdown">
  <div v-show="showDropdown6" @click.self="showDropdown6 = false" class="dropdown-container2">
      <div class="rectangle-parent98">
        <div class="frame-child131" />
        <div class="frame-parent41">
          <div class="frame-parent42">
            <div class="frame-wrapper35">
              <div class="spinner-parent1">
                <div class="spinner5">
                  <div class="icon-set10">
                    <b class="vrijeme-i-mjesto5"
                      >Vrijeme i mjesto održavanja:</b
                    >
                  </div>
                  <div class="icon-set11">
                    <b class="demo-team13">PREDSTAVNICI:</b>
                  </div>
                 
                </div>
                <div class="godina-crans-montana">
                  2003. godina, Crans Montana
                </div>
              </div>
            </div>
          
          </div>
          <div class="carousel-outer-container">
                    <div class="carousel-container">
   <button v-if="canScrollLeft(6)" @click="scrollLeft(6)" class="arrow left-arrow">&#8249;</button>
  <div class="carousel" id="carousel6" ref="carousel6">
    <div v-for="item in items6" :key="item.id" class="carousel-item">
      <img :src="item.image" class="frame-child91" alt="" />
      <div class="text-overlay">
        <b>{{ item.name }}</b>
      </div>
    </div>
  </div>
  <button v-if="canScrollRight(6)" @click="scrollRight(6)" class="arrow right-arrow">&#8250;</button>
</div></div>
          <div class="frame-wrapper36">
            <div class="line-parent">
              <div class="frame-child135" />
              <div class="interski-kongres-koji-container">
                <span>
                  <p class="interski-kongres-koji">
                  Novi DEMO TEAM predstavio je Hrvatsku na 17.-om Interski kongresu u Švicarskoj. 35 zemalja svijeta učesnica kongresa ponovno su se uvjerile da Hrvatska nema samo Ivicu i Janicu Kostelić, već i hrvatsku školu skijanja sa stogodišnjom tradicijom. </p>
                       <p class="blank-line71">&nbsp;</p>
                  <p class="show-nastup-se">
Uz odlične show nastupe Demo teama, imali smo vrlo zapažena i posjećena predavanja i radionice te smo na najbolji način predstavili hrvatsku školu skijanja. Sudionicima Interskija podijelili smo video kazetu 'Hrvatska škola skijanja', koja ujedno predstavlja prvi edukativni materijal na tržištu s novom modernom 'carving' školom skijanja (na hrvatskom jeziku s engleskim titlom).
          </p>
        </span></div>
            </div>
          </div>
        </div>
        <div class="frame-wrapper37"  @click.prevent="toggleDropdown6">
          <div class="rectangle-parent102">
            <div class="frame-child136" />
            <img
              class="upload-1-icon11"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/upload-11.svg"
            />
          </div>
        </div>
      </div></div></transition>
    </section>
    <section class="logic-gate8">
      <div class="rectangle-parent103">
        <div class="frame-child137" />
        <div class="frame-parent43">
          <div class="rectangle-parent104">
            <img class="frame-child138" alt="" src="/storage/slike/interski/rectangle-112@2x.png" />
            <img
              class="frame-child139"
              loading="lazy"
              alt=""
              src="/storage/slike/interski/rectangle-113-3@2x.png"
            />
          </div>
          <div class="frame-wrapper38">
            <div class="frame-parent44">
              <div class="interski-kongres-norveka-wrapper">
                <h1 class="interski-kongres-6">INTERSKI KONGRES - NORVEŠKA</h1>
              </div>
              <div class="frame-parent45">
                <div class="parent5">
                  <b class="b6">1999</b>
                  <div class="beitostlen-6114n-854e-110-wrapper">
                    <div class="beitostlen-6114n-854e-container">
                      <p class="beitostlen">
                        <b>Beitostølen</b>
                      </p>
                      <p class="n-854e">61°14′N 8°54′E</p>
                      <p class="m-nadmorske-visine6">1100 m nadmorske visine</p>
                      <p class="zagreb-beitostlen-1776-km">
                        Zagreb-Beitostølen: 1776 km
                      </p>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper39">
                  <button class="rectangle-parent105" @click.prevent="toggleDropdown7"> 
                    <div class="frame-child140" />
                    <b class="demo-team14">DEMO TEAM</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slider">
      <transition name="dropdown">
  <div v-show="showDropdown7" @click.self="showDropdown7 = false" class="dropdown-container2">
      <div class="rectangle-parent106">
        <div class="frame-child141" />
        <div class="popover">
          <div class="modal-window">
            <div class="tooltip">
              <div class="spinner6">
                <div class="icon-set12">
                  <b class="vrijeme-i-mjesto6">Vrijeme i mjesto održavanja:</b>
                  <div class="godina-beitostlen">1999. godina, Beitostølen</div>
                </div>
                <div class="icon-set13">
                  <b class="demo-team15">PREDSTAVNICI:</b>
                </div>
            
              </div>
      

            </div>
            <div class="carousel-outer-container">
                    <div class="carousel-container">
   <button v-if="canScrollLeft(7)" @click="scrollLeft(7)" class="arrow left-arrow">&#8249;</button>
  <div class="carousel" id="carousel7" ref="carousel7">
    <div v-for="item in items7" :key="item.id" class="carousel-item">
      <img :src="item.image" class="frame-child91" alt="" />
      <div class="text-overlay">
        <b>{{ item.name }}</b>
      </div>
    </div>
  </div>
  <button v-if="canScrollRight(7)" @click="scrollRight(7)" class="arrow right-arrow">&#8250;</button>
</div></div>
            <div class="table">
              <div class="form">
                <div class="image-palette" />
                <div class="prvi-hrvatski-demo-container">
                  <p class="prvi-hrvatski-demo">
                    Prvi hrvatski Demo team (8 demonstratora) izabran je 1997.g.
                    i nakon 2 godine intenzivnih priprema nastupio je na XVI
                    Interski kongresu 1999.g. u Norveškoj. Team se odlično
                    pripremio i vrhunski odradio show nastupe, radionice i
                    predavanja.
                  </p>
                  <p class="blank-line72">&nbsp;</p>
                  <p class="hrvatska-je-tada">
                    Hrvatska je tada prvi puta predstavljena svjetskoj sceni
                    učitelja sportova na snijegu uz velike pohvale i ovacije
                    svih sudionika Interski kongresa.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="group-footer"  @click.prevent="toggleDropdown7">
          <div class="frame-child143" />
          <img
            class="upload-1-icon12"
            loading="lazy"
            alt=""
            src="/storage/slike/interski/upload-11.svg"
          />
        </footer>
      </div></div></transition>
    </section>
  </div>
</template>

<script>



import { VueMarqueeSlider } from 'vue-marquee-slider';
import menikartica2 from "../components/interski/group-component.vue";
import menikartica3 from "../components/interski/group-component1.vue";

import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

export default {
  name: "interskikongres",
  layout: [appLayout, galerijaLayout],
  components: {
    menikartica2,
    menikartica3,

    VueMarqueeSlider,
    Link,
    Head
  },
  data() {
    return {


    items: [
      { id: 1, name: 'Bor Oreb', image: '/storage/slike/interski/demo/finska/Bor.jpg' },
      { id: 2, name: 'Dag Modrić', image: '/storage/slike/interski/demo/finska/Dag.jpg' },
      { id: 3, name: 'Edin Sarač', image: '/storage/slike/interski/demo/finska/Edin.jpg' },
      { id: 4, name: 'Filip Tudor', image: '/storage/slike/interski/demo/finska/Filip.jpeg' },
      { id: 5, name: 'Franjo Jardas', image: '/storage/slike/interski/demo/finska/Franjo.jpg' },
      { id: 6, name: 'Helena Gaube', image: '/storage/slike/interski/demo/finska/Helena.jpg' },
      { id: 7, name: 'Iva Mišak', image: '/storage/slike/interski/demo/finska/Iva.jpg' },
      { id: 8, name: 'Leo Martinović', image: '/storage/slike/interski/demo/finska/Leo.jpg' },
      { id: 9, name: 'Luka Dobrinić', image: '/storage/slike/interski/demo/finska/luka.jpg' },
      { id: 10, name: 'Maja Fućak', image: '/storage/slike/interski/demo/finska/Maja.jpeg' },
      { id: 11, name: 'Mateo Rački', image: '/storage/slike/interski/demo/finska/Mateo.jpg' },
      { id: 12, name: 'Davor Pavušek', image: '/storage/slike/interski/demo/finska/Pavusek.jpg' },
      { id: 13, name: 'Boris Petljak', image: '/storage/slike/interski/demo/finska/petljak.jpg' },
      { id: 14, name: 'Davor Puhak', image: '/storage/slike/interski/demo/finska/puhak.jpg' },
      { id: 15, name: 'Vjeran Švaić', image: '/storage/slike/interski/demo/finska/Vjeran.jpg' },
      { id: 16, name: 'Ivan Oreb', image: '/storage/slike/interski/demo/bugarska/Ivan Oreb.jpg' },
      { id: 17, name: 'Davide Erba', image: '/storage/slike/interski/demo/finska/erba.jpg' },
      { id: 17, name: 'Maxime Riviera', image: '/storage/slike/interski/demo/finska/Riviera_Maxime.jpg' },
    ],

    items2: [
      { id: 1, name: 'Ana Maria Vučinić', image: '/storage/slike/interski/demo/bugarska/Ana Maria Vucinic.jpg' },
      { id: 2, name: 'Boris Petljak', image: '/storage/slike/interski/demo/bugarska/Boris Petljak.jpg' },
      { id: 3, name: 'Dag Modrić', image: '/storage/slike/interski/demo/bugarska/Dag Modric.jpg' },
      { id: 4, name: 'Davor Pavušek', image: '/storage/slike/interski/demo/bugarska/Davor Pavusek.jpg' },
      { id: 5, name: 'Davor Puhak', image: '/storage/slike/interski/demo/bugarska/Davor Puhak.jpg' },
      { id: 6, name: 'Filip Tudor', image: '/storage/slike/interski/demo/bugarska/Filip Tudor.jpg' },
      { id: 7, name: 'Franjo Jardas', image: '/storage/slike/interski/demo/bugarska/Franjo Jardas.jpg' },
      { id: 8, name: 'Ivan Oreb', image: '/storage/slike/interski/demo/bugarska/Ivan Oreb.jpg' },
      { id: 9, name: 'Ivica Franjko', image: '/storage/slike/interski/demo/bugarska/Ivica Franjko.jpg' },
      { id: 10, name: 'Luka Dobrinić', image: '/storage/slike/interski/demo/bugarska/Luka Dobrinic.jpg' },
      { id: 11, name: 'Nino Ružička', image: '/storage/slike/interski/demo/bugarska/Nino Ruzicka.jpg' },
      { id: 12, name: 'Lana Kostić', image: '/storage/slike/interski/demo/bugarska/lanakostic.jpg' },
      { id: 13, name: 'Danijel Jurković', image: '/storage/slike/interski/demo/norveska/Danijel Jurkovic.JPG' },
      { id: 14, name: 'Ivan Vučinić', image: '/storage/slike/interski/demo/argentina/Ivan Vucinic.jpg' },
      { id: 15, name: 'Dino Sokolović', image: '/storage/slike/interski/demo/bugarska/dinosokolovic.jpg' },

    ],
    items3: [
      { id: 1, name: 'Ana-Maria Vučinić', image: '/storage/slike/interski/demo/argentina/Ana maria.jpg' },
      { id: 2, name: 'Boris Petljak', image: '/storage/slike/interski/demo/argentina/Boris Petljak.jpg' },
      { id: 3, name: 'Dag Modrić', image: '/storage/slike/interski/demo/argentina/Dag.jpg' },
      { id: 4, name: 'Danijel Jurković', image: '/storage/slike/interski/demo/argentina/Daniel.jpg' },
      { id: 5, name: 'Filip Tudor', image: '/storage/slike/interski/demo/argentina/Filip.jpg' },
      { id: 6, name: 'Franjo Jardas', image: '/storage/slike/interski/demo/argentina/Franjo.jpg' },
      { id: 7, name: 'Ivan Oreb', image: '/storage/slike/interski/demo/argentina/Ivan Oreb.jpg' },
      { id: 8, name: 'Ivan Vučinić', image: '/storage/slike/interski/demo/argentina/Ivan Vucinic.jpg' },
      { id: 9, name: 'Ivica Franjko', image: '/storage/slike/interski/demo/argentina/Ivica Franjko.jpg' },
      { id: 10, name: 'Igor Kecerin', image: '/storage/slike/interski/demo/argentina/Kecerin.jpg' },
      { id: 11, name: 'Luka Dobrinić', image: '/storage/slike/interski/demo/argentina/Luka.jpg' },
      { id: 12, name: 'Davor Puhak', image: '/storage/slike/interski/demo/argentina/Puhak.jpg' },
    ],
    items4: [
      { id: 1, name: 'Luka Dobrinić', image: '/storage/slike/interski/demo/austrija/Dobrinic_Luka_1410.jpg' },
      { id: 2, name: 'Ivica Franjko', image: '/storage/slike/interski/demo/austrija/Franjko_Ivica_1714.jpg' },
      { id: 3, name: 'Franjo Jardas', image: '/storage/slike/interski/demo/austrija/Jardas_Franjo ml._2126.jpg' },
      { id: 4, name: 'Igor Kecerin', image: '/storage/slike/interski/demo/austrija/Kecerin_Igor_2206.jpg' },
      { id: 5, name: 'Miodrag Toskić', image: '/storage/slike/interski/demo/austrija/Miki Toskic.jpg' },
      { id: 6, name: 'Dag Modrić', image: '/storage/slike/interski/demo/austrija/Modric_Dag_2439.jpg' },
      { id: 7, name: 'Davor Pavušek', image: '/storage/slike/interski/demo/austrija/Pavusek_Davor_2712.jpg' },
      { id: 8, name: 'Boris Petljak', image: '/storage/slike/interski/demo/austrija/Petljak_Boris_2718.jpg' },
      { id: 9, name: 'Ozren Rađenović', image: '/storage/slike/interski/demo/austrija/Radenovic_Ozren_2810.jpg' },
      { id: 10, name: 'Tomislav Šepić', image: '/storage/slike/interski/demo/austrija/Sepic_Tomislav_3008.jpg' },
      { id: 11, name: 'Vedran Vrus', image: '/storage/slike/interski/demo/austrija/Vrus_Vedran_3327.jpg' },
      { id: 12, name: 'Pavle Zobundžija ', image: '/storage/slike/interski/demo/austrija/Zobundzija_Pavle_3503.jpg' },
    ],
    items5: [
      { id: 1, name: 'Boris Petljak', image: '/storage/slike/interski/demo/koreja/Boris Petljak.JPG' },
      { id: 2, name: 'Dag Modrić', image: '/storage/slike/interski/demo/koreja/Dag.JPG' },
      { id: 3, name: 'Danko Štrbac', image: '/storage/slike/interski/demo/koreja/Danko Strbac.JPG' },
      { id: 4, name: 'Davor Pavušek', image: '/storage/slike/interski/demo/koreja/Davor Pavusek.JPG' },
      { id: 5, name: 'Goran Lanc', image: '/storage/slike/interski/demo/koreja/Goran Lanc.JPG' },
      { id: 6, name: 'Igor Kecerin', image: '/storage/slike/interski/demo/koreja/Igor Kecerin.png' },
      { id: 7, name: 'Ivica Franjko', image: '/storage/slike/interski/demo/koreja/Ivica Franjko.png' },
      { id: 8, name: 'Leon Gregurić', image: '/storage/slike/interski/demo/koreja/Leon Greguric.JPG' },
      { id: 9, name: 'Luka Dobrinić', image: '/storage/slike/interski/demo/koreja/Luka Dobrinic.png' },
      { id: 10, name: 'Nikola Androšević', image: '/storage/slike/interski/demo/koreja/Nikola Androsevic.JPG' },
      { id: 11, name: 'Ozren Rađenović', image: '/storage/slike/interski/demo/koreja/Ozren.JPG' },
      { id: 12, name: 'Pavle Zubundžija', image: '/storage/slike/interski/demo/koreja/Pavle.png' },
    ],
    items6: [
      { id: 1, name: 'Ana Jurković', image: '/storage/slike/interski/demo/svicarska/Ana.JPG' },
      { id: 2, name: 'Damir Blašković', image: '/storage/slike/interski/demo/svicarska/blaskovic damir.JPG' },
      { id: 3, name: 'Ana Jurković', image: '/storage/slike/interski/demo/svicarska/Jurkovic.JPG' },
      { id: 4, name: 'Majda Krčmar', image: '/storage/slike/interski/demo/svicarska/krcmar majda.JPG' },
      { id: 5, name: 'Goran Lanc', image: '/storage/slike/interski/demo/svicarska/Lanc.JPG' },
      { id: 6, name: 'Leon Gregurić', image: '/storage/slike/interski/demo/svicarska/Leon.JPG' },
      { id: 7, name: 'Dag Modrić', image: '/storage/slike/interski/demo/svicarska/modric dag.JPG' },
      { id: 8, name: 'Ozren Rađenović', image: '/storage/slike/interski/demo/svicarska/Ozren.JPG' },
      { id: 9, name: 'Danko Štrbac', image: '/storage/slike/interski/demo/svicarska/Strbac.JPG' },
      { id: 10, name: 'Tea Đurek', image: '/storage/slike/interski/demo/svicarska/Tea.JPG' },
   
    ],
    items7: [
      { id: 1, name: 'Damir Blašković', image: '/storage/slike/interski/demo/norveska/blaskovic damir.JPG' },
      { id: 2, name: 'Danijel Jurković', image: '/storage/slike/interski/demo/norveska/Danijel Jurkovic.JPG' },
      { id: 3, name: 'Danko Štrbac', image: '/storage/slike/interski/demo/norveska/Danko.JPG' },
      { id: 4, name: 'Ivica Franjko', image: '/storage/slike/interski/demo/norveska/Ivica Franjko.png' },
      { id: 5, name: 'Goran Lanc', image: '/storage/slike/interski/demo/norveska/Lanc.JPG' },
      { id: 6, name: 'Dag Modrić', image: '/storage/slike/interski/demo/norveska/modric dag.JPG' },
      { id: 7, name: 'Ozren Rađenović', image: '/storage/slike/interski/demo/norveska/Ozren.JPG' },
      { id: 8, name: 'Radovan Saks', image: '/storage/slike/interski/demo/norveska/saks radovan.JPG' },
  

    ],


      activeInstruction: 2,

      res: {
      active: false,
      icon: "",
      status: "",
      message: "",



    
   
      canScrollLeft1: false,
      canScrollRight1: false,
      canScrollLeft2: false,
      canScrollRight2: false,
      canScrollLeft3: false,
      canScrollRight3: false,
      canScrollLeft4: false,
      canScrollRight4: false,
      canScrollLeft5: false,
      canScrollRight5: false,
      canScrollLeft6: false,
      canScrollRight6: false,
      canScrollLeft7: false,
      canScrollRight7: false,
  

      
    },

    errors: {},
    showDropdown: false,
    showDropdown2: false,
    showDropdown3: false,
    showDropdown4: false,
    showDropdown5: false,
    showDropdown6: false,
    showDropdown7: false,

    }
  },

  mounted() {


    this.$nextTick(() => {
      for (let i = 1; i <= 7; i++) {
        if (this.$refs[`carousel${i}`]) {
          this.$refs[`carousel${i}`].addEventListener('scroll', this.handleScroll);
        }
      }
    });

},
    
computed: {
  ...mapState({
    appName(state) {
      return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
    },
  }),

  canScrollLeft() {
    return index => this.res[`canScrollLeft${index}`];
  },
  canScrollRight() {
    return index => this.res[`canScrollRight${index}`];
  },
},

  

methods: {
  handleScroll(event) {
  const target = event.target.closest('.carousel');
  if (target) {
    const index = parseInt(target.id.slice(8)); // Extract the index from the id
    this.$set(this.res, `canScrollLeft${index}`, target.scrollLeft > 20);
    this.$set(
      this.res,
      `canScrollRight${index}`,
      target.scrollLeft < target.scrollWidth - target.clientWidth
    );
  }
},
    scrollLeft(index) {
      const carousel = this.$refs[`carousel${index}`];
      if (carousel) {
        const scrollAmount = carousel.clientWidth * 0.8;
        carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
      }
    },
    scrollRight(index) {
      const carousel = this.$refs[`carousel${index}`];
      if (carousel) {
        const scrollAmount = carousel.clientWidth * 0.8;
        carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
      }
    },



  scrollToDropdown() {
    const dropdownContent = this.$refs.dropdown;
    if (dropdownContent) {
      dropdownContent.scrollIntoView({ behavior: 'smooth' });
    }
  },

  
    toggleInstruction(index) {
      // Toggle the active instruction only if it's not already active
      this.activeInstruction = this.activeInstruction === index ? 2 : index;
    },

    toggleDropdown1() {
  this.showDropdown = !this.showDropdown;
  this.$nextTick(() => {
    if (this.$refs.dropdown) {
      if (this.showDropdown) {
        this.$refs.dropdown.classList.add('open');
      } else {
        this.$refs.dropdown.classList.add('closing');
        setTimeout(() => {
          this.$refs.dropdown.classList.remove('closing');
        }, 600);
      }
    }
  });
},






toggleDropdown2() {
  this.showDropdown2 = !this.showDropdown2; 
  if (this.showDropdown2) {
    this.$refs.dropdown2.classList.add('open');
  } else {
    this.$refs.dropdown2.classList.add('closing');
    setTimeout(() => {
      this.$refs.dropdown2.classList.remove('closing');
    }, 600);
  }
},




toggleDropdown3() {
  this.showDropdown3 = !this.showDropdown3; 
  if (this.showDropdown3) {
    this.$refs.dropdown3.classList.add('open');
  } else {
    this.$refs.dropdown3.classList.add('closing');
    setTimeout(() => {
      this.$refs.dropdown3.classList.remove('closing');
    }, 600);
  }
},




toggleDropdown4() {
  this.showDropdown4 = !this.showDropdown4; 
  if (this.showDropdown4) {
    this.$refs.dropdown4.classList.add('open');
  } else {
    this.$refs.dropdown4.classList.add('closing');
    setTimeout(() => {
      this.$refs.dropdown4.classList.remove('closing');
    }, 600);
  }
},




toggleDropdown5() {
  this.showDropdown5 = !this.showDropdown5; 
  if (this.showDropdown5) {
    this.$refs.dropdown5.classList.add('open');
  } else {
    this.$refs.dropdown5.classList.add('closing');
    setTimeout(() => {
      this.$refs.dropdown5.classList.remove('closing');
    }, 600);
  }
},


toggleDropdown6() {
  this.showDropdown6 = !this.showDropdown6; 
  if (this.showDropdown6) {
    this.$refs.dropdown6.classList.add('open');
  } else {
    this.$refs.dropdown6.classList.add('closing');
    setTimeout(() => {
      this.$refs.dropdown6.classList.remove('closing');
    }, 600);
  }
},



toggleDropdown7() {
  this.showDropdown7 = !this.showDropdown7;
  this.$nextTick(() => {
    if (this.$refs.dropdown7) {
      if (this.showDropdown7) {
        this.$refs.dropdown7.classList.add('open');
      } else {
        this.$refs.dropdown7.classList.add('closing');
        setTimeout(() => {
          this.$refs.dropdown7.classList.remove('closing');
        }, 600);
      }
    }
  });
},


 
  },

};
</script>
<style scoped>



/* Line styles */
/* Add a pseudo-element for the line */
.instruction-provider,
.instruction-provider1,
.instruction-provider2 {
  position: relative;
  padding-bottom: 5px; 
}

.instruction-provider::after,
.instruction-provider1::after,
.instruction-provider2::after {
  content: "";
  position: absolute;
  bottom: -15px;
  left: 0;
  width: 100%;
  height: 2px; /* Thickness of the line */
  background-color: #03A9F4;
  transform: scaleX(0);
  transition: transform 0.3s ease-out;
}

/* Hover effect: Line appears from left to right */
.instruction-provider:hover::after,
.instruction-provider1:hover::after,
.instruction-provider2:hover::after {
  transform: scaleX(1);
  transform-origin: left;
}

/* Active button style: A full line below the button */
.instruction-provider.active::after,
.instruction-provider1.active::after,
.instruction-provider2.active::after {
  transform: scaleX(1);
}



  .frame-child82 {
    height: 528px;
    width: 1440px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
    z-index: 0;
  }
  .frame-child83 {
    height: 100%;
    width: 100%;
    position: absolute;
    margin: 0 !important;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1;
  }
  .interski-kongresi-i {
    margin: 0;
    height: 48px;
    width: 760px;
    position: relative;
    font-size: inherit;
    letter-spacing: 3px;
    font-weight: 600;
    font-family: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
  }
  .rectangle-parent56 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 240px 20px 240px 21px;
    box-sizing: border-box;
    position: relative;
    background-image: url("/storage/slike/interski/rectangle-200@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #fff;
    font-family: Inter;
  }
  .interski-povijest {
    align-self: stretch;
    position: relative;
  }
  .instruction-provider {
    width: 172px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 3px 0px 0px;
    box-sizing: border-box;
  }
  .frame-child84 {
    height: 32px;
    width: 2px;
    position: relative;
    border-right: 2px solid #03a9f4;
    box-sizing: border-box;
  }
  .interski {
    align-self: stretch;
    position: relative;
  }
  .instruction-provider1 {
    width: 114.7px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 3px 0px 0px;
    box-sizing: border-box;
  }
  .line-icon {
    height: 30px;
    width: 2px;
    position: relative;
    object-fit: contain;
    min-height: 30px;
  }
  .demo-team {
    align-self: stretch;
    position: relative;
    display: inline-block;
    min-width: 114.7px;
  }
  .instruction-provider2 {
    width: 114.7px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 3px 0px 0px;
    box-sizing: border-box;
  }
  .instruction-provider-parent {
    height: 90px;
    flex: 1;
    background-color: #000;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
 
    box-sizing: border-box;
    gap: 20px;
    max-width: 100%;
    white-space: nowrap;
  }
  .interski-kongresi-inner {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 20px;
    color: #fff;
    font-family: Inter;
  }
  .frame-child85 {
    width: 1440px;
    height: 420px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .demo-team1 {
    margin: 0;
    width: 255px;
    position: relative;
    font-size: inherit;
    font-weight: 800;
    font-family: inherit;
    display: inline-block;
    z-index: 1;
  }
  .demo-team-selekcija {
    color: #000;
  }
  .demonstratorskog-seminara {
    text-decoration: underline;
    color: #03a9f4;
  }
  .demo-team-selekcija-je-najbolj {
    margin: 0;
  }
  .blank-line60 {
    margin: 0;
  }
  .godine {
    font-family: Inter;
  }
  .demo-team-bira-se-na-razdoblje {
    margin: 0;
  }
  .blank-line61 {
    margin: 0;
  }
  .zadaa-hrvatskog-demo-team-a {
    margin: 0;
  }
  .predstavljanje-hrvatske-svake1 {
    margin-bottom: 0px;
  }
  .prikaz-hrvatske-kole-skijanja {
    margin-bottom: 0px;
  }
  .razvoj-i-unaprjeenje-hrvatske {
    margin-bottom: 0px;
  }
  .predstavljanje-hrvatske-svake {
    margin: 0;
    font-size: inherit;
    padding-left: 27px;
  }
  .demo-team-selekcija-container {
    height: 216px;
    position: relative;
    font-size: 20px;
    text-align: left;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;
    font-family: Inter;
  }
  .rectangle-parent57 {
    flex: 1;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 34px 60px 75px;
    box-sizing: border-box;
    gap: 55px;
    background-image: url("/storage/slike/interski/rectangle-1581@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    max-width: 100%;
  }
  .access-modifier {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 60px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
    font-weight: 700;
  }
  .hrvatska-na-interski {
    margin: 0;
    width: 795px;
    position: relative;
    font-size: inherit;
    font-weight: 800;
    font-family: inherit;
    display: inline-block;
  }
  .error-handler {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 40px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child86 {
    align-self: stretch;
    width: 1400px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .frame-child87 {
    height: 420px;
    width: 700px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .frame-child88 {
    height: 136px;
    width: 252px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent59 {
    height: 420px;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    background-image: url("/storage/slike/interski/rectangle-1121@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-width: 335px;
    max-width: 100%;
  }
  .interski-kongres- {
    margin: 0;
    width: 572px;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .interski-kongres-finska-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 53px;
  }
  .b {
    flex: 1;
    position: relative;
    font-size: 260px;
    display: flex;
    color: rgba(3, 169, 244, 0.1);
    align-items: center;
    justify-content: center;
    max-width: 100%;
  }
  .levi {
    margin: 0;
  }
  .n-24802e {
    margin: 0;
  }
  .m-nadmorske-visine {
    margin: 0;
  }
  .zagreb-levi-2497-km {
    margin: 0;
  }
  .levi-67805n-24802e-container1 {
    width: 100%;
  }
  .levi-67805n-24802e-container {
    width: 374px;
    position: absolute;
    margin: 0 !important;
    top: 51px;

    display: flex;
    align-items: center;
    z-index: 1;
  }
  .frame-child89 {
    height: 60px;
    width: 400px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .demo-team2 {
    position: relative;
    letter-spacing: 10px;
    line-height: 24.5px;
    z-index: 1;
  }
  .rectangle-parent60 {

    min-width: 400px;
    margin: 0 !important;
    position: absolute;

    bottom: 42px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 18px 20px;
    max-width: 100%;
    z-index: 1;
  }

  .rectangle-parent60:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }




  .parent {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    position: relative;
    max-width: 100%;
    font-size: 20px;
  }
  .decision-maker {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .decision-maker-wrapper {
    max-width: 678px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 40px 0px 0px;
    box-sizing: border-box;
  }
  .output-merger {
    flex: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px 0px 0px;
    box-sizing: border-box;
    gap: 10px 8px;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent58 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 12px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child90 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .vrijeme-i-mjesto {
    width: 222px;
    position: relative;
    display: inline-block;
    z-index: 1;
    text-align: left;
  }
  .icon-set {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  gap: 15px;
  }
  .demo-team3 {
    width: 105px;
    position: relative;
    display: inline-block;
    min-width: 105px;
    z-index: 1;
  }
  .icon-set1 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;

  }

  .frame-child92 {
    height: 25px;
    width: 110px;
    position: relative;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
  }
  .filip-tudor {
    width: auto;
    position: relative;
    font-size: 14px;
    display: inline-block;
    font-family: Inter;
    color: #fff;
    text-align: center;
    min-width: 87px;
    z-index: 1;
  }
  .rectangle-parent63 {
    cursor: pointer;
    border: none;
    padding: 4px 11px 4px 12px;
    background-color: rgba(0, 0, 0, 0.6);
    margin: 0 !important;
    position: absolute;
    right: -12px;
    bottom: 4px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    white-space: nowrap;
    z-index: 2;
  }
  .rectangle-parent63:hover {
    background-color: rgba(51, 51, 51, 0.6);
  }
  .rectangle-parent62 {
    width: 140px;
    height: 150px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 0px;
    box-sizing: border-box;
    position: relative;
  }
  .spinner {

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    min-width: 146px;
  }
  .godina-levi {
    width: 140px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    text-align: left;
  }
  .data-reducer-chain {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;

    padding: 0px 30px;
  }
  .data-filter-chain {

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 0px 25px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child93 {
    align-self: stretch;
    width: 50px;
    position: relative;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
    z-index: 0;
  }
  .connection-manager-icon {
    height: 20px;
    width: 12px;
    position: absolute;
    margin: 0 !important;
    bottom: 78.5px;
    left: calc(50% - 6px);
    z-index: 1;
  }
  .rectangle-parent64 {
    height: 183px;
    width: 50px;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    z-index: 1;
  }
  .data-normalizer-chain {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    max-width: 100%;
    gap: 20px;
  }
  .validation {
    align-self: stretch;
    flex: 1;
    position: relative;
    border-top: 2px solid #03a9f4;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .link-cluster {
    width: 100%;
    height: 2px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 2px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .data-normalizer-chain-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 4px;
    max-width: 100%;
  }
  .interski-kongres-odran {
    margin: 0;
  }
  .na-kongresu-je {
    margin: 0;
  }
  .novi-demo-team {
    margin: 0;
  }
  .blank-line62 {
    margin: 0;
  }
  .hrvatska-je-ve {
    margin: 0;
  }
  .na-nonom-show {
    margin: 0;
  }
  .blank-line63 {
    margin: 0;
  }
  .osim-nastupa-odlino {
    margin: 0;
  }
  .od-ostalih-sudionika {
    margin: 0;
  }
  .blank-line64 {
    margin: 0;
  }
  .sudjelovali-smo-na {
    margin: 0;
  }
  .interski-kongres-odran-container {
    flex: 1;
    position: relative;
    display: inline-block;
    max-width: 100%;
    z-index: 1;
  }
  .transformer {
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding-left: 30px;
    padding-right: 90px;
    padding-bottom: 80px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 14px;
  }
  .data-preprocessor-chain {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 18px;
    max-width: 100%;
  }
  .frame-child94 {
    height: 63px;
    width: 1400px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon6 {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent65 {
    align-self: stretch;
    flex: 1;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 16px 20px 15px;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper15 {
    align-self: stretch;
    height: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    box-sizing: border-box;
    max-width: 100%;
  }
  .rectangle-parent61 {
    align-self: stretch;
    background-color: #fff;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    gap: 38px;
    max-width: 100%;
    font-size: 16px;

    padding-top: 30px;

    transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;

overflow: hidden; 
  }


  

  .dropdown-container2{
  overflow: hidden;
}

.rectangle-parent61.open {
  max-height: 100%; 
  opacity: 1;
}

.rectangle-parent61 .open {
  animation: slideDown 0.6s ease-in-out;
}

.rectangle-parent61 .closing {
  animation: slideUp 0.6s ease-in-out;
}


.dropdown-enter-active, .dropdown-leave-active {
  transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;
}

.dropdown-enter, .dropdown-leave-to {
  max-height: 0;
  opacity: 0;
}

.dropdown-enter-to, .dropdown-leave {
  max-height: 100%;
  opacity: 1;
}




  .frame-parent21 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    font-family: Inter;
    overflow: hidden;
  }
  .error-handler-parent {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 30px;
    max-width: 100%;
  }
  .interski-kongresi-child {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 50px 17px 30px 20px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
    font-weight: 700;
  }
  .frame-child95 {
    align-self: stretch;
    width: 1400px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .interski-kongres-1 {
    margin: 0;
    align-self: stretch;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
  }
  .b1 {
    width: 642px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
  }
  .pamporovo {
    margin: 0;
  }
  .n-2440e {
    margin: 0;
  }
  .m-nadmorske-visine1 {
    margin: 0;
  }
  .zagreb-pamporovo-838-km {
    margin: 0;
  }
  .pamporovo-4138n-2440e-container {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .pamporovo-4138n-2440e-1926-wrapper {
    width: 374px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 66px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
    margin-left: -522px;
    font-size: 20px;
    color: #000;
  }
  .group {
    width: 642px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child96 {
    height: 60px;
    width: 400px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .demo-team4 {
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    font-family: Inter;

    text-align: center;
    z-index: 1;
  }
  .rectangle-parent67 {
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    color:#000;
    background-color: transparent;
    align-self: stretch;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent67:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }

  .rectangle-parent73:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .rectangle-parent80:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }

  .rectangle-parent89:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }

  .rectangle-parent96:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .rectangle-parent105:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }




  .frame-wrapper18 {
    height: 102px;
    min-width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    margin-left: -548px;
  }
  .frame-parent23 {
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-wrapper17 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 3px 0px 4px;
    box-sizing: border-box;
    max-width: 100%;
    margin-top: -30px;
    font-size: 260px;
    color: rgba(3, 169, 244, 0.1);
  }
  .interski-kongres-bugarska-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-wrapper16 {
    width: 649px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 43.5px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .comparison-operator-child {
    height: 420px;
    width: 700px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .comparison-operator-item {
    height: 136px;
    width: 252px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .comparison-operator {
    height: 420px;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-end;
    background-image: url("/storage/slike/interski/bugarska.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-width: 335px;
    max-width: 100%;
  }
  .frame-parent22 {
    flex: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px 0px 0px;
    box-sizing: border-box;
    gap: 26px 24px;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent66 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 0px 26px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-section {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 19px 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
  }
  .frame-child97 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .vrijeme-i-mjesto1 {

    position: relative;
    display: inline-block;
text-align: left;
    z-index: 1;
  }
  .icon-set2 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  gap: 15px;

  }
  .demo-team5 {
    width: 105px;
    position: relative;
    display: inline-block;
    min-width: 105px;
    z-index: 1;
  }
  .icon-set3 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px;
  }
  .extractor-icon {
    height: 150px;
    flex: 1;
    position: relative;
    border-radius: 10px;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 1;
  }
  .frame-child98 {
    height: 25px;
    width: 110px;
    position: relative;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
  }
  .filip-tudor1 {
    width: 87px;
    position: relative;
    font-size: 14px;
    display: inline-block;
    font-family: Inter;
    color: #fff;
    text-align: center;
    min-width: 87px;
    z-index: 1;
  }
  .rectangle-parent69 {
    cursor: pointer;
    border: none;
    padding: 4px 11px 4px 12px;
    background-color: rgba(0, 0, 0, 0.6);
    margin: 0 !important;
    position: absolute;
    right: -12px;
    bottom: 4px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    white-space: nowrap;
    z-index: 2;
  }
  .rectangle-parent69:hover {
    background-color: rgba(51, 51, 51, 0.6);
  }
  .extractor-parent {
    width: 140px;
    height: 150px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 0px;
    box-sizing: border-box;
    position: relative;
  }
  .spinner1 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    min-width: 146px;
  }
  .godina-pamporovo {

    position: relative;
    display: flex;
    align-items: center;

    justify-content: center;
    z-index: 1;
  }
  .spinner-parent {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;

    padding: 0px 30px;
  }
  .frame-wrapper19 {

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 0px 25px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child99 {
    align-self: stretch;
    width: 50px;
    position: relative;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
    z-index: 0;
  }
  .decision-maker-icon {
    height: 20px;
    width: 12px;
    position: absolute;
    margin: 0 !important;
    bottom: 78.5px;
    left: calc(50% - 6px);
    z-index: 1;
  }
  .rectangle-parent70 {
    height: 183px;
    width: 50px;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    z-index: 1;
  }
  .frame-parent25 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    max-width: 100%;
    gap: 20px;
  }
  .connection-hub {
    align-self: stretch;
    flex: 1;
    position: relative;
    border-top: 2px solid #03a9f4;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .timing-manager {
    width: 100%;
    height: 16px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 14px 2px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .na-najstarijem-bugarskom {
    margin: 0;
  }
  .blank-line65 {
    margin: 0;
  }
  .hrvatsku-skolu-skijanja {
    margin: 0;
  }
  .blank-line66 {
    margin: 0;
  }
  .team-u-se-prikljuio {
    margin: 0;
  }
  .direktan-prijenos-na {
    margin: 0;
  }
  .p {
    margin: 0;
  }
  .na-sveopce-iznenaenje {
    margin: 0;
  }
  .uz-odlicno-skijanje {
    margin: 0;
  }
  .na-najstarijem-bugarskom-container {
  
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;
  }
  .parameter-setter {
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 30px;
    padding-bottom: 80px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 14px;
  }
  .frame-parent24 {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 4px;
    max-width: 100%;
  }
  .frame-child100 {
    height: 63px;
    width: 1400px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon7 {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent71 {
    align-self: stretch;
    flex: 1;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 16px 20px 15px;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper20 {
    align-self: stretch;
    height: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 2px 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .rectangle-parent68 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  
    box-sizing: border-box;
    gap: 89px;
    max-width: 100%;

    padding-top: 30px;
  }
  .interski-kongresi-inner1 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 17px 30px 20px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 16px;
    color: #000;
    font-family: Inter;
  }
  .frame-child101 {
    height: 420px;
    width: 700px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .frame-child102 {
    height: 136px;
    width: 252px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent72 {
    height: 420px;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    background-image: url("/storage/slike/interski/rectangle-1122@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-width: 335px;
    max-width: 100%;
  }
  .interski-kongres-2 {
    margin: 0;
    align-self: stretch;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
  }
  .b2 {
    width: 638px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
    z-index: 2;
  }
  .ushuaia {
    margin: 0;
  }
  .s-6819w {
    margin: 0;
  }
  .m-nadmorske-visine2 {
    margin: 0;
  }
  .zagreb-ushuaia-13687-km {
    margin: 0;
  }
  .ushuaia-5448s-6819w-container {
    align-self: stretch;
    position: relative;
    z-index: 3;
  }
  .ushuaia-5448s-6819w-958-m-wrapper {
    width: 374px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 66px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
    margin-left: -491px;
    font-size: 20px;
    color: #000;
  }
  .parent1 {
    width: 638px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child103 {
    height: 60px;
    width: 400px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .demo-team6 {
    position: relative;
    letter-spacing: 10px;
    line-height: 24.5px;
    z-index: 1;
  }
  .rectangle-parent73 {
    align-self: stretch;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    color: #000;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 18px 20px;
    max-width: 100%;
    z-index: 3;
  }
  .frame-wrapper21 {
    height: 102px;
    width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    margin-left: -491px;
    font-size: 20px;
    color: #000;
  }
  .frame-parent27 {
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
  }
  .error-handler1 {
    width: 646px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 4px;
    box-sizing: border-box;
    max-width: 100%;
    margin-top: -30px;
    font-size: 260px;
    color: rgba(3, 169, 244, 0.1);
  }
  .logic-gate {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .logic-gate-wrapper {
    width: 662px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 43.5px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-parent26 {
    flex: 1;
    background-color: #fff;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px 0px 0px;
    box-sizing: border-box;
    gap: 26px 24px;
    max-width: 100%;
  }
  .interski-kongresi-inner2 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 28px 0px 24px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
  }
  .frame-child104 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .vrijeme-i-mjesto2 {
  text-align: left;
    position: relative;
    display: inline-block;
    z-index: 1;
  }
  .icon-set4 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 0px 2px;
  }
  .demo-team7 {
    width: 105px;
    position: relative;
    display: inline-block;
    min-width: 105px;
    z-index: 1;
  }
  .icon-set5 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px;
  }
  .frame-child105 {
    height: 150px;
    flex: 1;
    position: relative;
    border-radius: 10px;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 1;
  }
  .frame-child106 {
    height: 25px;
    width: 110px;
    position: relative;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
  }
  .filip-tudor2 {
    width: 87px;
    position: relative;
    font-size: 14px;
    display: inline-block;
    font-family: Inter;
    color: #fff;
    text-align: center;
    min-width: 87px;
    z-index: 1;
  }
  .rectangle-parent76 {
    cursor: pointer;
    border: none;
    padding: 4px 11px 4px 12px;
    background-color: rgba(0, 0, 0, 0.6);
    margin: 0 !important;
    position: absolute;
    right: -12px;
    bottom: 4px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    white-space: nowrap;
    z-index: 2;
  }
  .rectangle-parent76:hover {
    background-color: rgba(51, 51, 51, 0.6);
  }
  .rectangle-parent75 {
    width: 140px;
    height: 150px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 0px;
    box-sizing: border-box;
    position: relative;
  }
  .spinner2 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    min-width: 146px;

  }
  .godina-ushuaia {
 
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    text-align: left;
  }
  .input-provider {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
  }
  .input-provider-wrapper {
    width: 406px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 0px 25px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child107 {
    align-self: stretch;
    width: 50px;
    position: relative;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
    z-index: 0;
  }
  .vector-icon1 {
    height: 20px;
    width: 12px;
    position: absolute;
    margin: 0 !important;
    bottom: 78.5px;
    left: calc(50% - 6px);
    z-index: 1;
  }
  .rectangle-parent77 {
    height: 183px;
    width: 50px;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    z-index: 1;
  }
  .list-manager {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    max-width: 100%;
    gap: 20px;
    padding: 0px 30px;
  }
  .link-cluster-child {
    align-self: stretch;
    flex: 1;
    position: relative;
    border-top: 2px solid #03a9f4;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .link-cluster1 {
    width: 100%;
    height: 2px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 2px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .list-manager-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 4px;
    max-width: 100%;
  }
  .ushuaia-a-je-najjuniji {
    margin: 0;
  }
  .blank-line67 {
    margin: 0;
  }
  .team-je-funkcionirao {
    margin: 0;
  }
  .na-interskiju-je {
    margin: 0;
  }
  .blank-line68 {
    margin: 0;
  }
  .hrvatski-demo-team {
    margin: 0;
  }
  .odlinom-prezentacijom-demons {
    margin: 0;
  }
  .blank-line69 {
    margin: 0;
  }
  .postali-smo-hit {
    margin: 0;
  }
  .od-ostalih-zemalja {
    margin: 0;
  }
  .ushuaia-a-je-najjuniji-container {
    position: relative;
    z-index: 1;
  }
  .ushuaia-a-je-najjuniji-grad-i-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 30px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 14px;
  }
  .shape-assembler {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    gap: 18px;
    max-width: 100%;
  }
  .frame-child108 {
    height: 63px;
    width: 1400px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon8 {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent78 {
    align-self: stretch;
    flex: 1;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 16px 20px 15px;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper22 {
    align-self: stretch;
    height: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 2px 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .rectangle-parent74 {
    flex: 1;
    background-color: #fff;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px;
    box-sizing: border-box;
    gap: 140px;
    max-width: 100%;
    z-index: 1;
  }
  .logic-gate1 {
    align-self: stretch;

    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 19px 30px 18px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 16px;
    color: #000;
    font-family: Inter;
  }
  .frame-child109 {
    align-self: stretch;
    width: 1400px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .interski-kongres-3 {
    margin: 0;
    align-self: stretch;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
  }
  .b3 {
    width: 598px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
  }
  .st-anton {
    margin: 0;
  }
  .n-1016e {
    margin: 0;
  }
  .m-nadmorske-visine3 {
    margin: 0;
  }
  .zagreb-st-anton-461 {
    margin: 0;
  }
  .st-anton-4707n-container {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .st-anton-4707n-1016e-2806-wrapper {
    width: 374px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 66px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
    margin-left: -500px;
    font-size: 20px;
    color: #000;
  }
  .parent2 {
    width: 598px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child110 {
    height: 60px;
    width: 400px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .demo-team8 {
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    font-family: Inter;

    text-align: center;
    z-index: 1;
  }
  .rectangle-parent80 {
    color: #000;
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    background-color: transparent;
    align-self: stretch;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
    z-index: 1;
  }

  .frame-wrapper25 {
    height: 102px;
    width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    margin-left: -526px;
  }
  .frame-parent29 {
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-wrapper24 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 13px 0px 15px;
    box-sizing: border-box;
    max-width: 100%;
    margin-top: -30px;
    font-size: 260px;
    color: rgba(3, 169, 244, 0.1);
  }
  .interski-kongres-austrija-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-wrapper23 {
    width: 626px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 43.5px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child111 {
    height: 420px;
    width: 700px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .frame-child112 {
    height: 136px;
    width: 252px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent81 {

    height: 420px;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-end;

    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-width: 335px;
    max-width: 100%;
    

    background-image: url("/storage/slike/interski/rectangle-1601@2x.png");

  }
  .frame-wrapper26 {
    height: 420px;
    width: 700px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 0px 10px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-parent28 {
    flex: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px;
    box-sizing: border-box;
    gap: 45px 43px;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent79 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 1px 0px 5px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .logic-gate2 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 22px 0px 18px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
  }
  .frame-child113 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .vrijeme-i-mjesto3 {
   text-align: left;
    position: relative;
    display: inline-block;
    z-index: 1;
  }
  .icon-set6 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 0px 2px;
  }
  .demo-team9 {
    width: 105px;
    position: relative;
    display: inline-block;
    min-width: 105px;
    z-index: 1;
  }
  .icon-set7 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px;
  }
  .frame-child114 {
    height: 150px;
    flex: 1;
    position: relative;
    border-radius: 10px;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 1;
  }
  .frame-child115 {
    height: 25px;
    width: 110px;
    position: relative;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
  }
  .filip-tudor3 {
    width: 87px;
    position: relative;
    font-size: 14px;
    display: inline-block;
    font-family: Inter;
    color: #fff;
    text-align: center;
    min-width: 87px;
    z-index: 1;
  }
  .rectangle-parent84 {
    cursor: pointer;
    border: none;
    padding: 4px 11px 4px 12px;
    background-color: rgba(0, 0, 0, 0.6);
    margin: 0 !important;
    position: absolute;
    right: -12px;
    bottom: 4px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    white-space: nowrap;
    z-index: 2;
  }
  .rectangle-parent84:hover {
    background-color: rgba(51, 51, 51, 0.6);
  }
  .rectangle-parent83 {
    width: 140px;
    height: 150px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 0px;
    box-sizing: border-box;
    position: relative;
  }
  .spinner3 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    min-width: 146px;
  }
  .godina-st-anton {
  text-align: left;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  .spinner-group {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
  }
  .frame-wrapper27 {
    width: 412px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child116 {
    align-self: stretch;
    width: 50px;
    position: relative;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
    z-index: 0;
  }
  .vector-icon2 {
    height: 20px;
    width: 12px;
    position: absolute;
    margin: 0 !important;
    bottom: 78.5px;
    left: calc(50% - 6px);
    z-index: 1;
  }
  .rectangle-parent85 {
    height: 183px;
    width: 50px;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    z-index: 1;
  }
  .frame-parent31 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    max-width: 100%;
    gap: 20px;

    padding: 0px 30px;
  }
  .pie-chart {
    align-self: stretch;
    height: 2px;
    position: relative;
    border-top: 2px solid #03a9f4;
    box-sizing: border-box;
    z-index: 1;
  }
  .interski-kongres-koji {
    margin: 0;
  }
  .p1 {
    margin: 0;
  }
  .za-razliku-od {
    margin: 0;
  }
  .intenzivirani-su-workshopovi {
    margin: 0;
  }
  .blank-line70 {
    margin: 0;
  }
  .hrvatski-nastup-bio {
    margin: 0;
  }
  .naa-predavanja-su {
    margin: 0;
  }
  .snowbord-workshop-je {
    margin: 0;
  }
  .blank-line71 {
    margin: 0;
  }
  .show-nastup-se {
    margin: 0;
  }
  .interski-kongres-koji-container {
    align-self: stretch;
  
    position: relative;
    display: flex;
    align-items: center;
    text-align: left;
    z-index: 1;
    font-size: 14px;
  }
  .bar-chart {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 18px;
    max-width: 100%;
  }
  .bar-chart-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 30px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 14px;
  }
  .frame-parent30 {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    gap: 4px;
    max-width: 100%;
  }
  .frame-child117 {
    height: 63px;
    width: 1400px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon9 {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent86 {
    align-self: stretch;
    flex: 1;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 16px 20px 15px;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper28 {
    align-self: stretch;
    height: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 2px 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .rectangle-parent82 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px;
    box-sizing: border-box;
    gap: 55px;
    max-width: 100%;
    z-index: 2;
  }
  .logic-gate3 {
    align-self: stretch;

align-items: flex-start;
justify-content: flex-start;
padding: 0px 19px 30px 18px;
box-sizing: border-box;
max-width: 100%;
text-align: center;
font-size: 16px;
color: #000;
font-family: Inter;
  }
  .frame-child118 {
    align-self: stretch;
    width: 1400px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .frame-child119 {
    height: 420px;
    width: 700px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .frame-child120 {
    height: 136px;
    width: 252px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent88 {
    height: 420px;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    background-image: url("/storage/slike/interski/rectangle-1123@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-width: 335px;
    max-width: 100%;
  }
  .interski-kongres-4 {
    margin: 0;
    width: 585px;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
    display: inline-block;
  }
  .interski-kongres-koreja-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 35px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .b4 {
    width: 672px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
  }
  .pyeongchang {
    margin: 0;
  }
  .n-12824e {
    margin: 0;
  }
  .m-nadmorske-visine4 {
    margin: 0;
  }
  .zagreb-pyeongchang-8568 {
    margin: 0;
  }
  .pyeongchang-3722n-12824e-container {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .pyeongchang-3722n-12824e-1-wrapper {
    width: 374px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 66px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
    margin-left: -508px;
    font-size: 20px;
    color: #000;
  }
  .parent3 {
    width: 672px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child121 {
    height: 60px;
    width: 400px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .demo-team10 {
    position: relative;
    letter-spacing: 10px;
    line-height: 24.5px;
    z-index: 1;
  }
  .rectangle-parent89 {
    align-self: stretch;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 18px 20px;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper30 {
    height: 102px;
    width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    margin-left: -508px;
    font-size: 20px;
    color: #000;
  }
  .frame-parent34 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
    margin-top: -30px;
    font-size: 260px;
    color: rgba(3, 169, 244, 0.1);
  }
  .frame-parent33 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-wrapper29 {
    width: 672px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 43.5px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-parent32 {
    flex: 1;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px 0px 0px;
    box-sizing: border-box;
    gap: 13px 11px;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent87 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 3px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .logic-gate4 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 22px 0px 18px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
  }
  .frame-child122 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .vrijeme-i-mjesto4 {
    width: 222px;
    position: relative;
    display: inline-block;
    z-index: 1;

    text-align: left;
  }
  .icon-set8 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
 gap: 15px;
  }
  .demo-team11 {
    width: 105px;
    position: relative;
    display: inline-block;
    min-width: 105px;
    z-index: 1;
  }
  .icon-set9 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px;
  }
  .frame-child123 {
    height: 150px;
    flex: 1;
    position: relative;
    border-radius: 10px;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 1;
  }
  .frame-child124 {
    height: 25px;
    width: 110px;
    position: relative;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
  }
  .filip-tudor4 {
    width: 87px;
    position: relative;
    font-size: 14px;
    display: inline-block;
    font-family: Inter;
    color: #fff;
    text-align: center;
    min-width: 87px;
    z-index: 1;
  }
  .rectangle-parent92 {
    cursor: pointer;
    border: none;
    padding: 4px 11px 4px 12px;
    background-color: rgba(0, 0, 0, 0.6);
    margin: 0 !important;
    position: absolute;
    right: -12px;
    bottom: 4px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    white-space: nowrap;
    z-index: 2;
  }
  .rectangle-parent92:hover {
    background-color: rgba(51, 51, 51, 0.6);
  }
  .rectangle-parent91 {
    width: 140px;
    height: 150px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 0px;
    box-sizing: border-box;
    position: relative;
  }
  .spinner4 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    min-width: 146px;
  }
  .godina-pyeongchang {

    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  .spinner-container {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
  }
  .frame-wrapper31 {
    width: 449px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child125 {
    align-self: stretch;
    width: 50px;
    position: relative;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
    z-index: 0;
  }
  .vector-icon3 {
    height: 20px;
    width: 12px;
    position: absolute;
    margin: 0 !important;
    bottom: 78.5px;
    left: calc(50% - 6px);
    z-index: 1;
  }
  .rectangle-parent93 {
    height: 183px;
    width: 50px;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    z-index: 1;
  }
  .frame-parent37 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    max-width: 100%;
    gap: 20px;

padding: 0px 30px;

  }
  .link-cluster-item {
    align-self: stretch;
    flex: 1;
    position: relative;
    border-top: 2px solid #03a9f4;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .link-cluster2 {
    width: 100%;
    height: 2px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 2px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-parent36 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 4px;
    max-width: 100%;
  }
  .u-18-om-interski {
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;
  }
  .u-18-om-interski-kongresu-u-k-wrapper {
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 30px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 14px;
  }
  .frame-parent35 {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    gap: 18px;
    max-width: 100%;
  }
  .frame-child126 {
    height: 63px;
    width: 1400px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon10 {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent94 {
    align-self: stretch;
    flex: 1;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 16px 20px 15px;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper32 {
    align-self: stretch;
    height: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 2px 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .rectangle-parent90 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px;
    box-sizing: border-box;
    gap: 293px;
    max-width: 100%;
    z-index: 2;
  }
  .logic-gate5 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 16px;
    color: #000;
    font-family: Inter;
  }
  .logic-gate55 {
  align-self: stretch;
align-items: flex-start;
justify-content: flex-start;
padding: 0px 19px 30px 18px;
box-sizing: border-box;
max-width: 100%;
text-align: center;
font-size: 16px;
color: #000;
font-family: Inter;
}

  .frame-child127 {
    align-self: stretch;
    width: 1400px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .interski-kongres-5 {
    margin: 0;
    width: 661px;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
    display: inline-block;
  }
  .interski-kongres-vicarska-wrapper {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 17px 0px 16px;
  }
  .b5 {
    width: 694px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
  }
  .crans-montana {
    margin: 0;
  }
  .n-729e {
    margin: 0;
  }
  .m-nadmorske-visine5 {
    margin: 0;
  }
  .zagreb-crans-montana-658 {
    margin: 0;
  }
  .crans-montana-4619n-container {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .crans-montana-4619n-729e-3-wrapper {
    width: 374px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 66px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
    margin-left: -548px;
    font-size: 20px;
    color: #000;
  }
  .parent4 {
    width: 694px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child128 {
    height: 60px;
    width: 400px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .demo-team12 {
    position: relative;
    letter-spacing: 10px;
    line-height: 24.5px;
    z-index: 1;
  }
  .rectangle-parent96 {
    color:#000;
    align-self: stretch;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 18px 20px;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper34 {
    height: 102px;
    width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    margin-left: -574px;
    font-size: 20px;
    color: #000;
  }
  .frame-parent40 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
    margin-top: -30px;
    font-size: 260px;
    color: rgba(3, 169, 244, 0.1);
  }
  .frame-parent39 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-wrapper33 {

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 43.5px 0px 0px;
    box-sizing: border-box;
    
    max-width: 100%;
  }
  .frame-child129 {
    height: 420px;
    width: 700px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .frame-child130 {
    height: 136px;
    width: 252px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent97 {
    
    height: 420px;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-end;
    background-image: url("/storage/slike/interski/rectangle-1602@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-width: 335px;
    max-width: 100%;
  }
  .frame-parent38 {
    flex: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px 0px 0px;
    box-sizing: border-box;
    gap: 3px 1px;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent95 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 1px 0px 2px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .logic-gate6 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 22px 0px 18px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
  }
  .frame-child131 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .vrijeme-i-mjesto5 {

    position: relative;
    display: inline-block;
    z-index: 1;

    text-align: left;
  }
  .icon-set10 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 0px 2px;
  }
  .demo-team13 {
    width: 105px;
    position: relative;
    display: inline-block;
    min-width: 105px;
    z-index: 1;
  }
  .icon-set11 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px;
  }
  .frame-child132 {
    height: 150px;
    flex: 1;
    position: relative;
    border-radius: 10px;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 1;
  }
  .frame-child133 {
    height: 25px;
    width: 110px;
    position: relative;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
  }
  .filip-tudor5 {
    width: 87px;
    position: relative;
    font-size: 14px;
    display: inline-block;
    font-family: Inter;
    color: #fff;
    text-align: center;
    min-width: 87px;
    z-index: 1;
  }
  .rectangle-parent100 {
    cursor: pointer;
    border: none;
    padding: 4px 11px 4px 12px;
    background-color: rgba(0, 0, 0, 0.6);
    margin: 0 !important;
    position: absolute;
    right: -12px;
    bottom: 4px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    white-space: nowrap;
    z-index: 2;
  }
  .rectangle-parent100:hover {
    background-color: rgba(51, 51, 51, 0.6);
  }
  .rectangle-parent99 {
    width: 140px;
    height: 150px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 20px 0px 0px;
    box-sizing: border-box;
    position: relative;
  }
  .spinner5 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    min-width: 133px;
  }
  .godina-crans-montana {
    position: relative;
    z-index: 1;
  }
  .spinner-parent1 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
  }
  .frame-wrapper35 {

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;

    padding: 0px 30px;
  }
  .frame-child134 {
    align-self: stretch;
    width: 50px;
    position: relative;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
    z-index: 0;
  }
  .vector-icon4 {
    height: 20px;
    width: 12px;
    position: absolute;
    margin: 0 !important;
    bottom: 78.5px;
    left: calc(50% - 6px);
    z-index: 1;
  }
  .rectangle-parent101 {
    height: 183px;
    width: 50px;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    z-index: 1;
  }
  .frame-parent42 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    max-width: 100%;
    gap: 20px;
  }
  .frame-child135 {
    align-self: stretch;
    height: 2px;
    position: relative;
    border-top: 2px solid #03a9f4;
    box-sizing: border-box;
    z-index: 1;
  }
  .novi-demo-team-predstavio-je-h {
    height: 84.3px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    z-index: 1;
  }
  .novi-demo-team-predstavio-je-h-wrapper {
    align-self: stretch;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 9px 0px 1.5px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .line-parent {
    align-self: stretch;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 18.8px;
    max-width: 100%;
  }
  .frame-wrapper36 {

    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 30px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-parent41 {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    gap: 4px;
    max-width: 100%;
  }
  .frame-child136 {
    height: 63px;
    width: 1400px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon11 {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent102 {
    align-self: stretch;
    flex: 1;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 16px 20px 15px;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper37 {
    align-self: stretch;
    height: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 2px 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .rectangle-parent98 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px;
    box-sizing: border-box;
    gap: 241.9px;
    max-width: 100%;
    z-index: 2;
  }
  .logic-gate7 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 19px 30px 18px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 16px;
    color: #000;
    font-family: Inter;
  }
  .frame-child137 {
    align-self: stretch;
    width: 1400px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .frame-child138 {
    height: 420px;
    width: 700px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .frame-child139 {
    height: 136px;
    width: 252px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent104 {
    height: 420px;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    background-image: url("/storage/slike/interski/rectangle-1124@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-width: 335px;
    max-width: 100%;
  }
  .interski-kongres-6 {
    margin: 0;
    width: 648px;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
    display: inline-block;
  }
  .interski-kongres-norveka-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 0px 5px;
  }
  .b6 {
    width: 643px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
  }
  .beitostlen {
    margin: 0;
  }
  .n-854e {
    margin: 0;
  }
  .m-nadmorske-visine6 {
    margin: 0;
  }
  .zagreb-beitostlen-1776-km {
    margin: 0;
  }
  .beitostlen-6114n-854e-container {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .beitostlen-6114n-854e-110-wrapper {
    width: 374px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 66px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
    margin-left: -494px;
    font-size: 20px;
    color: #000;
  }
  .parent5 {
    width: 643px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child140 {
    height: 60px;
    width: 400px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .demo-team14 {
    position: relative;
    letter-spacing: 10px;
    line-height: 24.5px;
    z-index: 1;
  }
  .rectangle-parent105 {
    align-self: stretch;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 18px 20px;
    max-width: 100%;
    z-index: 1;
  }
  .frame-wrapper39 {
    height: 102px;
    width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    margin-left: -494px;
    font-size: 20px;
    color: #000;
  }
  .frame-parent45 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    max-width: 100%;
    margin-top: -30px;
    font-size: 260px;
    color: rgba(3, 169, 244, 0.1);
  }
  .frame-parent44 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-wrapper38 {
    width: 653px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 43.5px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-parent43 {
    width: 100%;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px 0px 0px;
    box-sizing: border-box;
    gap: 28px 26px;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent103 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .logic-gate8 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 22px 0px 18px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
  }
  .frame-child141 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .vrijeme-i-mjesto6 {
  
    position: relative;
    display: inline-block;
    z-index: 1;

    text-align: left;
  }
  .icon-set12 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  gap: 15px;
  }
  .demo-team15 {
    width: 105px;
    position: relative;
    display: inline-block;
    min-width: 105px;
    z-index: 1;
  }
  .icon-set13 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px;
  }
  .carousel-child {
    height: 150px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 1;
  }
  .frame-child142 {
    height: 25px;
    width: 145px;
    position: relative;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
  }
  .danijel-jurkovi {
    width: 134px;
    position: relative;
    font-size: 14px;
    display: inline-block;
    font-family: Inter;
    color: #fff;
    text-align: center;
    z-index: 1;
  }
  .rectangle-parent107 {
    cursor: pointer;
    border: none;
    padding: 4px 5px 4px 6px;
    background-color: rgba(0, 0, 0, 0.6);
    margin: 0 !important;
    position: absolute;
    right: -34px;
    bottom: 4px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    white-space: nowrap;
    z-index: 2;
  }
  .rectangle-parent107:hover {
    background-color: rgba(51, 51, 51, 0.6);
  }

  .spinner6 {

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    min-width: 224px;
  }
  .godina-beitostlen {

    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  .tooltip {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;

    gap: 15px;
    max-width: 100%;

    padding: 0px 30px;
  }
  .image-palette {
    align-self: stretch;
    height: 2px;
    position: relative;
    border-top: 2px solid #03a9f4;
    box-sizing: border-box;
    z-index: 1;

  }
  .prvi-hrvatski-demo {
    margin: 0;
  }
  .blank-line72 {
    margin: 0;
  }
  .hrvatska-je-tada {
    margin: 0;
  }
  .prvi-hrvatski-demo-container {
    position: relative;
    z-index: 1;
  
  }
  .form {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 18px;
    max-width: 100%;
  
    padding: 0px 30px;
  }
  .table {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 0px 2px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 14px;
  }
  .modal-window {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 29px;
    max-width: 100%;
    
  }
  .popover {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child143 {
    height: 63px;
    width: 100%;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon12 {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .group-footer {
    align-self: stretch;
    height: 63px;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 16px 20px 15px;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
  }
  .rectangle-parent106 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px 1px;
    box-sizing: border-box;
    gap: 259px;
    max-width: 100%;
    z-index: 2;
  }
  .slider {
    align-self: stretch;

    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 21px 0px 18px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 16px;
    color: #000;
    font-family: Inter;
    display: flex;

    
  }
  .interski-kongresi {
    width: 100%;
    background-color: #f8f7f5;
    max-width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 60px 0px;
    box-sizing: border-box;
    letter-spacing: normal;
  }


  .carousel-outer-container {
  width: 100%;
  position: relative;

}

.carousel-container {
  position: relative;
  width: 100vw;
  overflow: visible;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding-left: 34px;
  padding-right: 76px;
  box-sizing: border-box;
}

.carousel {
  display: flex;
  overflow-x: auto;
  overflow-y: hidden;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  padding-top: 20px;
  padding-bottom: 20px;
}

.carousel::-webkit-scrollbar {
  display: none;
}

.carousel-item {
  margin: 16px;
  position: relative;
  width: 120px;
  height: 150px;
  flex: 0 0 auto;
  border-radius: 10px;
  max-width: 100%;
  overflow: visible;
  object-fit: cover;
  z-index: 1;
  scroll-snap-align: start;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.6);
  transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}

.carousel-item:hover {

  transform: scale(1.2);
  z-index: 3;
  border-radius: 10px;
  overflow: visible;
}

.carousel-item:hover .frame-child91,
.carousel-item:hover .text-overlay {
  transform: scale(1.1);
  transition: transform 0.5s ease-in-out;
}

.frame-child91 {
  width: 120px;
  object-fit: cover;
  height: 150px;
  display: block;
  border-radius: 10px;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.6);
  transition: transform 0.5s ease-in-out;
}

.text-overlay {
  position: absolute;
  bottom: 10px;
  left: 10px;
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 5px;
  font-size: 14px;
  z-index: 3;
  transition: transform 0.5s ease-in-out;
}



.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.7);
  border: none;
  cursor: pointer;
  padding: 16px;
  font-size: 24px;
  color: white;
  z-index: 5;
}

.left-arrow {
  left: 0px;
  height: 80%;
  z-index: 5;
  width: 38px;
}

.right-arrow {
  width: 38px;
  right: 40px;
  height: 80%;
  z-index: 5;
}
 

@media screen and (max-width: 1200px) {
    .instruction-provider-parent {
      align-items: center;
      justify-content: center;
      white-space: nowrap;
    }

    .rectangle-parent57 {
      padding-left: 30px;
      padding-right: 30px;
      box-sizing: border-box;
    }

    .rectangle-parent74 {
      gap: 70px;
    }

    .rectangle-parent90 {
      gap: 146px;
    }

    .rectangle-parent98 {
      gap: 121px;
    }

    .popover {

      box-sizing: border-box;
    }

    .rectangle-parent106 {
      gap: 129px;
    }
  }
  @media screen and (max-width: 1050px) {

    .frame-parent22 {
    align-items: center;
    justify-content: center;
  }

  .frame-parent26 {
    align-items: center;
    justify-content: center;
  }

  .frame-parent28 {
    align-items: center;
    justify-content: center;
  }

  .frame-parent32 {
    align-items: center;
    justify-content: center;
  }

  .frame-parent38 {
    align-items: center;
    justify-content: center;
  }
  .frame-parent43 {
    align-items: center;
    justify-content: center;
  }
  .b1 {
      font-size: 250px;
    }
    .b2 {
      font-size: 250px;
    }
    .b3 {
      width: initial;
      font-size: 250px;
    }
    .b4 {
      font-size: 250px;
    }
    .b5 {
      font-size: 250px;
    }
    .b6 {
      font-size: 250px;
    }



    .rectangle-parent97 {
      order: -1;
    }

    .rectangle-parent81 {
      order: -1;
    }
    .rectangle-parent66 {
     padding: 0 !important;
    }
    .comparison-operator{
  order: -1;
    }
    .icon-set2 {
flex-direction: column;
}

.output-merger {
      width: auto;
      align-self: unset;
      align-items: flex-start;
      justify-content: center;
    }






    .interski-kongresi-i {
      font-size: 32px;
    }

    .instruction-provider-parent {
      align-items: center;
      justify-content: center;
      box-sizing: border-box;
      white-space: nowrap;
    }

    .demo-team1 {
      font-size: 32px;
      text-align: left;
    }

    .hrvatska-na-interski {
      font-size: 32px;
    }

    .interski-kongres- {
      font-size: 32px;
    }


    .interski-kongres-1 {
      font-size: 32px;
    }



    .interski-kongres-2 {
      font-size: 32px;
    }



    .interski-kongres-3 {
      font-size: 32px;
    }



    .interski-kongres-4 {
      font-size: 32px;
    }


    .interski-kongres-5 {
      font-size: 32px;
    }



    .interski-kongres-6 {
      font-size: 32px;
    }

  }
  @media screen and (max-width: 750px) {
    .rectangle-parent56 {
      padding-top: 156px;
      padding-bottom: 156px;
      box-sizing: border-box;
    }

    .interski-povijest {
      white-space: nowrap;
    }

    .instruction-provider-parent {
      align-items: center;
      justify-content: center;
      padding-left: 100px;
      padding-right: 100px;
      box-sizing: border-box;
    }

    .demo-team-selekcija-container {
      align-self: stretch;
      width: auto;
      flex: 1;
    }

    .rectangle-parent57 {
      gap: 27px;
    }

    .access-modifier {
      height: auto;
      align-items: flex-start;
      justify-content: flex-start;
      padding-top: 10px;
      padding-bottom: 45px;
      box-sizing: border-box;
    }

    .interski-kongres-finska-wrapper {
      padding-left: 26px;
      padding-right: 26px;
      box-sizing: border-box;
    }

  

    .levi-67805n-24802e-container {
      font-size: 25px;
      align-self: stretch;
      width: auto;
      flex: 1;
    }

    .rectangle-parent60 {
      margin-left: 40px;
margin-right: 40px;
min-width: 200px;
width:auto;
    }

    .parent {
      height: auto;

      align-items: center;
      justify-content: center;
      padding-bottom: 150px;
      box-sizing: border-box;
      min-width: 100;
      max-width: 500;
      min-height: 100;
      max-height: 500;
    }

    .decision-maker {
      align-self: stretch;
      width: auto;
      flex: 1;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .decision-maker-wrapper {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-top: 28px;
      box-sizing: border-box;
    }

    .output-merger {
      width: auto;
      align-self: unset;
      align-items: flex-start;
      justify-content: center;
    }



    .rectangle-parent61 {
      gap: 19px;
    }



    .rectangle-parent68 {
      gap: 44px;
    }


    .rectangle-parent74 {
      gap: 35px;
    }

    .frame-parent28 {
      gap: 21px;
    }

 
    .rectangle-parent82 {
      gap: 27px;
    }



    .rectangle-parent90 {
      gap: 73px;
    }


    .rectangle-parent98 {
      gap: 60px;
    }

    .spinner6 {
      flex: 1;
    }



    .rectangle-parent106 {
      gap: 65px;
    }
  }







  @media screen and (max-width: 660px) {
    .godina-crans-montana {
      text-align: left;
  }

    .godina-beitostlen {
text-align: left;
}


    .godina-pamporovo {

text-align: left;
}

    
    .carousel-container {

  padding-left: 20px;
  padding-right: 40px;
}

    
    .frame-wrapper25 {
margin-left: initial;
width: auto;
    }

    .frame-wrapper34 {
margin-left: initial;
width: auto;
    }

    .frame-wrapper30{
margin-left: initial;
width: auto;
    }

    .frame-wrapper39{
margin-left: initial;
width: auto;
    }

    .frame-wrapper21 {
margin-left: initial;
width: auto;
    }



    .tooltip {

    align-items: flex-end;
  }


    .b {
      font-size: 170px;

    }

    .b1 {
      font-size: 170px;
    }
    .b2 {
      font-size: 170px;
    }
    .b3 {
      width: initial;
      font-size: 170px;
    }
    .b4 {
      font-size: 170px;
    }
    .b5 {
      font-size: 170px;
    }
    .b6 {
      font-size: 170px;
    }


    .interski-kongres-6 {
font-size: 1.4rem;
width: 500px;
  }  
.interski-kongres-norveka-wrapper {
width: 100%;
justify-content: center;
  }  
  .interski-kongres- {
width: 100%;
font-size: 1.4rem;
} 
.interski-kongres-1 {
width: 100%;
font-size: 1.4rem;
} 
.interski-kongres-2 {
width: 100%;
font-size: 1.4rem;
} 
.interski-kongres-3 {
width: 100%;
font-size: 1.4rem;
} 
.interski-kongres-4 {
width: 100%;
font-size: 1.4rem;
} 
.interski-kongres-5 {
width: 100%;
font-size: 1.4rem;
} 

.frame-parent33 {
      align-items: center;
      justify-content: center;
    }




  


    .interski-kongres-bugarska-parent{
 gap: 0px;
    }


    .rectangle-parent60 {
 min-width: 200px;
    }

    .rectangle-parent58 {
      padding: 0;
    }


    .b {
      font-size: 120px;
    }

    .b1 {
      font-size: 120px;
    }
    .b2 {
      font-size: 120px;
    }
    .b3 {
      font-size: 120px;
    }
    .b4 {
      font-size: 120px;
    }
    .b5 {
      font-size: 120px;
    }
    .b6 {
      font-size: 120px;
    }

    .rectangle-parent66 {
     padding: 0 !important;
    }
    .comparison-operator{
     min-width: initial !important;
    }
    .icon-set2 {
flex-direction: row;
}


.instruction-provider-parent{
     gap: 5px !important;
    }


    .interski-kongresi-i {
      font-size: 24px;
    }

    .interski-povijest {
      font-size: 16px;
    }

    .interski {
      font-size: 16px;
    }

    .demo-team {
      font-size: 16px;
      font-weight: 400;
    min-width: initial;
    padding-left: 5px;

    }

    .instruction-provider-parent {
      padding-left: 20px;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .demo-team1 {
      font-size: 24px;
      align-self: stretch;
      width: auto;
    }

    .demo-team-selekcija-container {
      font-size: 16px;
    }

    .rectangle-parent57 {
      padding-top: 22px;
      padding-bottom: 49px;
      box-sizing: border-box;
    }

    .hrvatska-na-interski {
      font-size: 24px;
    }

    .rectangle-parent59 {
      flex: unset;
      align-self: stretch;
    }

    .interski-kongres- {
      font-size: 21px;
      flex: 1;
      align-self: stretch;
      height: auto;
    }

    .interski-kongres-finska-wrapper {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      align-items: flex-start;
      justify-content: center;
    }

    .levi-67805n-24802e-container {
      font-size: 16px;
      align-self: stretch;
      width: auto;
      flex: 1;
    }

    .frame-child89 {
      flex: 1;
      align-self: stretch;
      height: auto;
    }

    .demo-team2 {
      letter-spacing: 2px;
      font-size: 15px;
      flex: 1;
      align-self: stretch;
      height: auto;
    }

    .rectangle-parent60 {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      align-items: center;
      justify-content: center;
    }

  

    .decision-maker {
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }

    .decision-maker-wrapper {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center;
    }

    .output-merger {
      
      align-items: center;
      justify-content: center;
      flex: unset;
      align-self: stretch;
    }

    .rectangle-parent58 {
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .data-reducer-chain {
      flex-wrap: wrap;

    }

    .data-normalizer-chain {
      flex: 1;
      align-self: stretch;
      height: auto;
      flex-direction: row;
      align-items: center;
 
    }

    .data-normalizer-chain-parent {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      gap: 4px;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .interski-kongres-odran-container {
      flex: 1;
      align-self: stretch;
      height: auto;
    }

    .transformer {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      flex-wrap: wrap;
      padding-left: 30px;
      padding-right: 30px;
      box-sizing: border-box;
    }

    .data-preprocessor-chain {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      gap: 18px;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .frame-parent21 {
      align-items: center;
      justify-content: center;
    }

    .error-handler-parent {
      align-items: center;
      justify-content: flex-start;
      flex: unset;
      align-self: stretch;
    }

    .interski-kongresi-child {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .interski-kongres-1 {
      font-size: 21px;
    }


    .pamporovo-4138n-2440e-container {
      font-size: 16px;
    }

    .pamporovo-4138n-2440e-1926-wrapper {
      flex: 1;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center;

      margin-left: initial !important;
      width: initial;
      box-sizing: border-box;
      position: absolute;
    }

    .group {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 0px;
      align-items: flex-start;
 height: auto;
 justify-content: center;
 padding-bottom: 64px;
    }

    .demo-team4 {
      font-size: 15px;
      letter-spacing: 2px;
    }

    .frame-wrapper18 {
margin-left: 40px;
margin-right: 40px;
min-width: 200px;
width:auto;
  }
  .rectangle-parent73 {
margin-left: 40px;
margin-right: 40px;
min-width: 200px;
width:auto;
  }

    .frame-parent23 {
      flex-direction: column;
      gap: -548px;
      align-items: center;
      justify-content: center;
      flex: unset;
      align-self: stretch;
    }

    .frame-wrapper17 {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: -90px;
    }

    .interski-kongres-bugarska-parent {
      flex-direction: column;
      gap: 100px;
      align-items: center;
      justify-content: flex-start;
    }

    .frame-wrapper16 {
      flex: 1;
      align-items: center;
      justify-content: flex-start;
      padding-top: 28px;
      box-sizing: border-box;
    }

    .frame-section {
      align-items: flex-start;
      justify-content: center;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .spinner-parent {
      flex-wrap: wrap;
    }



    .na-najstarijem-bugarskom-container {
      flex: 1;
      align-self: stretch;
      height: auto;
    }

    .parameter-setter {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: row;
      flex-wrap: wrap;
      align-items: flex-start;
      justify-content: flex-start;
      padding-left: 30px;
      padding-right: 30px;
      box-sizing: border-box;
    }

    .frame-parent24 {
      align-self: stretch;
      width: auto;
    }

    .rectangle-parent68 {
      gap: 22px;
      align-items: center;
      justify-content: flex-start;
      flex: unset;
      align-self: stretch;
    }

    .interski-kongresi-inner1 {
      flex-direction: row;
      align-items: center;
      justify-content: flex-start;
      padding-right: 20px;
      padding-bottom: 100px;
      box-sizing: border-box;
    }

    .interski-kongres-2 {
      font-size: 24px;
    }


    .ushuaia-5448s-6819w-container {
      font-size: 16px;
    }

    .frame-parent29{
  flex-direction: column;
  align-items: center;
    }

    .st-anton-4707n-1016e-2806-wrapper{
      width: auto;
      flex: 1;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center;

      padding-top: 50px;
      margin-left: initial;
      box-sizing: border-box;
      position: absolute;
    }

    .frame-wrapper24 {
    margin-top: initial;
  }


    .ushuaia-5448s-6819w-958-m-wrapper {
      width: auto;
      flex: 1;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center;

      margin-left: initial;
      box-sizing: border-box;
      position: absolute;
    }

    .parent1 {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 0px;
      align-items: center;
justify-content: center;
    }

    .parent2 {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 0px;
      align-items: center;
justify-content: center;
padding-bottom: 50px;
    }

    .demo-team6 {
      font-size: 15px;
      letter-spacing: 2px;
    }

    .frame-parent27 {
      flex-direction: column;
      gap: 50px;
      align-items: center;
      justify-content: flex-end;
      flex: unset;
      align-self: stretch;
    }

    .error-handler1 {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: initial;
    }

    .logic-gate {
      gap: -30px;
      align-items: center;
      justify-content: center;
    }

    .logic-gate-wrapper {
      flex: 1;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center;
    }

    .frame-parent26 {
      flex-direction: row;
      flex-wrap: wrap;
      align-items: flex-start;
      justify-content: center;
      flex: unset;
      align-self: stretch;
    }

    .interski-kongresi-inner2 {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-left: 20px;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .input-provider {
      flex-wrap: wrap;
    }

    .list-manager-parent {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      gap: 4px;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .list-manager {
      align-items: center;
    }

    .ushuaia-a-je-najjuniji-container {
      flex: 1;
      align-self: stretch;
      height: auto;
    }

    .ushuaia-a-je-najjuniji-grad-i-wrapper {
  
      box-sizing: border-box;
    }

    .rectangle-parent74 {
      gap: 17px;
      flex: unset;
      align-self: stretch;
    }

    .logic-gate1 {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-left: 20px;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .interski-kongres-3 {
      font-size: 24px;
    }


    .st-anton-4707n-container {
      font-size: 16px;
    }

    .demo-team8 {
      font-size: 15px;
      letter-spacing: 2px;
    }

    .frame-wrapper23 {
      flex: 1;
      align-items: center;
      justify-content: flex-start;
      padding-top: 28px;
      box-sizing: border-box;
    }

    .spinner-group {
      flex-wrap: wrap;
    }

    .frame-parent31 {
      height: auto;

      align-items: center;
     
    }

    .frame-parent37 {
    align-items: center;
  }

    .interski-kongres-koji-container {
      flex: 1;
    }

    .bar-chart {
      align-self: stretch;
      width: auto;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .bar-chart-wrapper {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .frame-parent30 {
      align-self: stretch;
      width: auto;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .rectangle-parent82 {
      flex: unset;
      align-self: stretch;
    }

    .logic-gate3 {
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
      padding-left: 20px;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .interski-kongres-4 {
      font-size: 21px;
      flex: 1;
    }

 


    .pyeongchang-3722n-12824e-container {
      font-size: 16px;
    }

    .pyeongchang-3722n-12824e-1-wrapper {
      width: auto;
      flex: 1;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center;

      margin-left: initial;
      box-sizing: border-box;
      position: absolute;
    }

    .parent3 {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 110px;
      align-items: flex-start;
justify-content: center;
      padding-top: 0px;
      box-sizing: border-box;
    }

    .demo-team10 {
      font-size: 15px;
      letter-spacing: 2px;
    }

    .frame-parent34 {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      gap: 50px;
      align-items: center;
      justify-content: center;
      padding-right: 1px;
      box-sizing: border-box;
    }

    .frame-parent33 {
      gap: 50px;
      align-items: center;
      justify-content: center;
    }

    .frame-wrapper29 {
      flex: 1;
      gap: 0px;
      align-items: center;
      justify-content: center;
    }

    .frame-parent32 {
      flex-direction: row;
      flex-wrap: wrap;
      gap: 50px;
      align-items: center;
      justify-content: center;
    }

    .spinner-container {
      flex-wrap: wrap;
    }

    .frame-parent36 {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      gap: 4px;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .u-18-om-interski {
      align-self: stretch;
      width: auto;
      flex: unset;
    }

    .u-18-om-interski-kongresu-u-k-wrapper {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .rectangle-parent90 {
      gap: 37px;
    }

    .interski-kongres-5 {
      font-size: 21px;
      flex: 1;
      align-self: stretch;
      height: auto;
    }



    .crans-montana-4619n-container {
      font-size: 16px;
    }

    .crans-montana-4619n-729e-3-wrapper {
      flex: 1;
      align-items: center;
      justify-content: flex-start;

      box-sizing: border-box;
      width: auto;
      position:absolute;
      margin-left: initial;
    }

    .parent4 {
      align-self: stretch;
      width: auto;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 110px;
      align-items: flex-start;
justify-content: center;
      padding-top: 0px;
      box-sizing: border-box;
    }

    .demo-team12 {
      font-size: 15px;
      letter-spacing: 2px;
    }

    .frame-parent40 {
      flex-direction: column;
      gap: 50px;
      align-items: center;
      justify-content: center;
      padding-right: 1px;
      box-sizing: border-box;
    }

    .frame-parent39 {
      flex-direction: column;
      gap: 50px;
      align-items: center;
      justify-content: center;
    }

    .frame-wrapper33 {
      padding-top: 28px;
      box-sizing: border-box;
      flex: unset;
      align-self: stretch;
    }

    .rectangle-parent97 {
      flex: unset;
      align-self: stretch;
    }

    .frame-parent38 {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      flex: unset;
      align-self: stretch;
    }

    .rectangle-parent95 {
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
    }


    .frame-parent42 {
      height: auto;

      gap: 0px;
    }

    .novi-demo-team-predstavio-je-h {
      flex: unset;
      align-self: stretch;
    }

    .novi-demo-team-predstavio-je-h-wrapper {
      height: auto;
      flex-direction: column;
      padding-right: 20px;
      box-sizing: border-box;
    }

    .rectangle-parent98 {
      gap: 30px;
    }

    .rectangle-parent104 {
      flex: unset;
      align-self: stretch;
    }

    .interski-kongres-6 {
      font-size: 21px;
      flex: 1;
      align-self: stretch;
      height: auto;
    }


    .beitostlen-6114n-854e-container {
      font-size: 16px;
      flex: 1;
    }

    .beitostlen-6114n-854e-110-wrapper {

      align-items: center;
      justify-content: center;
      padding-top: 100px;
      box-sizing: border-box;

      margin-left: initial;
      position: absolute;

    }

    .parent5 {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center !important;
      padding-top: 50px;

    }

    .demo-team14 {
      font-size: 15px;
      letter-spacing: 2px;
    }



    .frame-parent45 {
      flex-direction: column;
      gap: 50px;
      align-items: center;
      justify-content: center;
      margin-top: inital;
    }

    .frame-parent44 {
      gap: -30px;
      align-items: center;
      justify-content: center;
    }

    .frame-wrapper38 {
      align-self: stretch;
      width: auto;
      align-items: center;
      justify-content: flex-start;
      padding-top: 28px;
      padding-bottom: 28px;
      box-sizing: border-box;
    }

    .frame-parent43 {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .rectangle-parent103 {
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }

    .prvi-hrvatski-demo-container {
      align-self: stretch;
      width: auto;
      flex: 1;
    }

    .form {
      flex: 1;
    }

    .rectangle-parent106 {
      gap: 32px;
    }
  }

  ul {
  list-style-type: disc;
}









</style>



