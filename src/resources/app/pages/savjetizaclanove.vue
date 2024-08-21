<template>
  <div class="savjeti-za-clanove">
    <section class="savjeti-za-clanove-inner">
      <div class="rectangle-parent31">
        <img class="frame-child55" alt="" src="/storage/slike/savjetizaclanove/rectangle-200@2x.png" />
        <div class="result-display" />
        <div class="savjeti-za-lanove">SAVJETI ZA ČLANOVE</div>
      </div>
    </section>
    <section class="list-organizer">
      <div class="condition-splitter">
        <div class="button-design">
          <div class="additional-options">
            <div class="savjeti-za-lanove-container">
              <span>
                <p class="savjeti-za-lanove1">
                  Savjeti za članove odnose se na slijedeće tematike:
                </p>
                <ul class="mogunosti-napretka-lana-unut">
                  <li class="mogunosti-napretka-lana-unut1">
                    <span>Mogućnosti napretka člana unutar HZUTS-a</span>
                  </li>
                  <li class="obveze-lana-prema-hzuts-u">
                    <span>Obveze člana prema HZUTS-u</span>
                  </li>
                </ul>
                <p class="blank-line4">&nbsp;</p>
                <p class="da-bi-postali">Da bi postali član HZUTS-a morate:</p>
                <ul class="zadovoljiti-odreena-pravila-z">
                  <li class="zadovoljiti-odreena-pravila-z1">
                    <Link :href="route('skijasi.commerce-theme.uclanise')" class="zadovoljiti-odreena-pravila"
                      >zadovoljiti određena pravila za učlanjenje</Link>
                  </li>
                  <li class="platiti-dravnu-lanarinu-hzut">
                    <span class="platiti-dravnu-lanarinu"
                      >platiti državnu članarinu HZUTS-a</span
                    >
                  </li>
                  <li class="platiti-izradu-iskaznice-i-amb">
                    <span class="platiti-izradu-iskaznice"
                      >platiti izradu iskaznice i amblem</span
                    >
                  </li>
                </ul>
                <p class="blank-line5">&nbsp;</p>
                <p class="svaki-lan-hzuts-a">
                  Svaki član HZUTS-a posjeduje iskaznicu i amblem HZUTS-a.
                </p>
              </span>
            </div>
            <div class="maskota-final-2-1-wrapper">
              <img
                class="maskota-final-2-1"
                alt=""
                src="/storage/slike/savjetizaclanove/maskota-final-2-1@2x.png"
              />
            </div>
          </div>
        </div>
        <div class="frame-parent13">
          <div class="frame-parent14">
            <div class="rectangle-parent32">
              <img class="frame-child56" alt="" src="/storage/slike/savjetizaclanove/rectangle-159@2x.png" />
              <img
                class="ivsi-logo-klein-interski-1-1-icon"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/ivsilogokleininterski1-1@2x.png"
              />
            </div>
            <div class="frame-wrapper9">
              <div class="access-controller-parent">
                <div class="access-controller">
                  <div class="korak-ivsi-licenca">1. KORAK: IVSI LICENCA</div>
                </div>
                <div class="kada-se-ulani-container">
                  <p class="kada-se-ulani">
                    Kada se učlani u HZUTS učitelj skijanja/daskanja dobiva IVSI
                    licencu. IVSI licenca je državna licenca.
                  </p>
                  <p class="uitelj-skijanja-sa">
                    Učitelj skijanja sa IVSI licencom dobiva IVSI markicu za
                    narednu godinu koju mora nalijepiti na iskaznicu HZUTS-a.
                  </p>
                </div>
                <div class="frame-wrapper10">
                  <button class="rectangle-parent33" @click.prevent="toggleDropdown">
                                        <div class="frame-child57" />
                    <b class="saznaj-vie">SAZNAJ VIŠE</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div v-show="showDropdown" @click.self="showDropdown = false" class="dropdown-container">
  <div class="dropdown1" :class="{ open: showDropdown }" ref="dropdown">
    <div class="dropdown-content">
            <div class="frame-child58" />
            <div class="assignment-operator">
              <div class="trajanje-i-obnova-container">
                <span>
                  <p class="trajanje-i-obnova">
                    <span class="trajanje-i-obnova1">
                      <b class="trajanje-i-obnova2">Trajanje i obnova:</b>
                    </span>
                  </p>
                  <p class="ivsi-licenca-traje-3-godine">
                    <span class="ivsi-licenca-traje-3-godine1">
                      <span class="ivsi-licenca-traje"
                        >IVSI licenca traje 3 godine.</span
                      >
                    </span>
                  </p>
                  <p class="da-bi-produili-svoju-ivsi-lic">
                    <span class="da-bi-produili-svoju-ivsi-lic1">
                      <span class="da-bi-produili"
                        >Da bi produžili svoju IVSI licencu, najmanje jednom u 3
                        godine morate prisustvovati seminaru za produživanje
                        licence.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line6">
                    <span class="blank-line7">
                      <span class="blank-line8">&nbsp;</span>
                    </span>
                  </p>
                  <p class="gdje-moete-raditi-sa-ivsi-lic">
                    <span class="gdje-moete-raditi-sa-ivsi-lic1">
                      <b class="gdje-moete-raditi"
                        >Gdje možete raditi sa IVSI licencom:</b
                      >
                    </span>
                  </p>
                  <p class="sa-ivsi-licencom-uitelj-skija">
                    <span class="sa-ivsi-licencom-uitelj-skija1">
                      <span class="sa-ivsi-licencom"
                        >Sa IVSI licencom učitelj skijanja/daskanja može raditi
                        u školama skijanja u Hrvatskoj i u nekim državama
                        inozemstva (dobro se raspitati za pojedine države ili
                        pokrajine država).</span
                      >
                    </span>
                  </p>
                  <p class="blank-line9">
                    <span class="blank-line10">
                      <span class="blank-line11">&nbsp;</span>
                    </span>
                  </p>
                  <p class="za-rad-u-italiji-potrebno-je-i">
                    <span class="za-rad-u-italiji-potrebno-je-i1">
                      <span class="za-rad-u"
                        >*Za rad u Italiji potrebno je imati dozvolu za rad od
                        strane HZUTS-a.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line12">
                    <span class="blank-line13">
                      <span class="blank-line14">&nbsp;</span>
                    </span>
                  </p>
                  <p class="obveze-uitelja-skijanjadaska">
                    <span class="obveze-uitelja-skijanjadaska1">
                      <b class="obveze-uitelja-skijanjadaska2"
                        >Obveze učitelja skijanja/daskanja sa IVSI licencom:</b
                      >
                    </span>
                  </p>
                  <ul class="svake-godine-plaati-dravnu">
                    <li class="svake-godine-plaati-dravnu1">
                      <span class="svake-godine-plaati-dravnu2">
                        <span class="svake-godine-plaati"
                          >Svake godine plaćati državnu
                        </span>
                      </span>
                      <span class="lanarinu-hzuts-a-i-lanarinu-p">
                        <Link :href="route('skijasi.commerce-theme.infoclanarine')" class="lanarinu-hzuts-a">članarinu HZUTS-a</Link>
                        <span class="i-lanarinu-podrunome">
                          i članarinu područnome zboru u koji ste
                          učlanjeni</span
                        >
                      </span>
                    </li>
                    <li class="imati-vaeu-ivsi-licencu-min">
                      <span class="imati-vaeu-ivsi-licencu-min1">
                        <span class="imati-vaeu-ivsi"
                          >Imati važeću IVSI licencu (min. 1 u 3 god.
                          sudjelovati na seminaru za produživanje licence)</span
                        >
                      </span>
                    </li>
                    <li class="ivsi-markicu-za-narednu-godinu">
                      <span class="ivsi-markicu-za-narednu-godinu1">
                        <span class="ivsi-markicu-za"
                          >IVSI markicu za narednu godinu nalijepiti na
                          iskaznicu HZUTS-a, koju je potrebno imati uz sebe
                          prilikom rada</span
                        >
                      </span>
                    </li>
                    <li class="tijekom-rada-nositi-amblem-ui">
                      <span class="tijekom-rada-nositi-amblem-ui1">
                        <span class="tijekom-rada-nositi"
                          >Tijekom rada nositi amblem učitelj skijanja</span
                        >
                      </span>
                    </li>
                    <li>
                      <span class="uz-iskaznicu-i-amblem-priliko">
                        <span class="uz-iskaznicu-i"
                          >Uz iskaznicu i amblem, prilikom rada potrebno je
                          imati i važeći osobni dokument</span
                        >
                      </span>
                    </li>
                  </ul>
                </span>
              </div>
            </div>

            <div class="rectangle-parent35" @click.prevent="closeDropdown">
              <div class="frame-child59" />
              <img
                class="upload-1-icon"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/upload-1.svg"
              />
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
    </section>
    <section class="data-stream-wrapper">
      <div class="data-stream">
        <div class="frame-parent15">
          <div class="rectangle-parent36">
            <img class="frame-child60" alt="" src="/storage/slike/savjetizaclanove/rectangle-113@2x.png" />
            <img
              class="isia-logo-1-icon"
              loading="lazy"
              alt=""
              src="/storage/slike/savjetizaclanove/isia-logo-1@2x.png"
            />
          </div>
          <div class="trainer-profile">
            <div class="transformer-chain-parent">
              <div class="transformer-chain">
                <div class="korak-isia-licenca">2. KORAK: ISIA LICENCA</div>
              </div>
              <div class="uitelj-skijanjadaskanja-sa-container">
                <span>
                  <p class="uitelj-skijanjadaskanja-sa">
                    Učitelj skijanja/daskanja sa IVSI licencom može pristupiti
                    ISIA seminaru. Ukoliko učitelj skijanja/daskanja položi sve
                    ispite ISIA seminara, postaje učitelj skijanja/daskanja sa
                    ISIA licencom.
                  </p>
                  <p class="blank-line15">&nbsp;</p>
                  <p class="isia-licenca-je">
                    ISIA licenca je profesionalna licenca.
                  </p>
                  <p class="uitelj-skijanja-sa1">
                    Učitelj skijanja sa ISIA licencom dobiva ISIA markicu sa
                    ISIA brojem za narednu godinu koju mora nalijepiti na
                    iskaznicu HZUTS-a.
                  </p>
                </span>
              </div>
              <div class="frame-wrapper11">
                <button class="rectangle-parent37" @click.prevent="toggleDropdown2">
                  <div class="frame-child61" />
                  <b class="saznaj-vie1">SAZNAJ VIŠE</b>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="nested-tree">

          <div v-show="showDropdown2" @click.self="showDropdown2 = false" class="dropdown-container2">
  <div class="dropdown2" :class="{ open: showDropdown2 }" ref="dropdown2">
    <div class="dropdown-content2">
            <div class="frame-child62" />
            <div class="trajanje-i-obnova-isia-licenc-wrapper">
              <div class="trajanje-i-obnova-container1">
                <span>
                  <p class="blank-line16">
                    <span class="blank-line17">
                      <span class="blank-line18">&nbsp;</span>
                    </span>
                  </p>
                  <p class="trajanje-i-obnova3">
                    <span class="trajanje-i-obnova4">
                      <b class="trajanje-i-obnova5">Trajanje i obnova:</b>
                    </span>
                  </p>
                  <p class="isia-licenca-traje-3-godine">
                    <span class="isia-licenca-traje-3-godine1">
                      <span class="isia-licenca-traje"
                        >ISIA licenca traje 3 godine.</span
                      >
                    </span>
                  </p>
                  <p class="da-bi-produili-svoju-isia-lic">
                    <span class="da-bi-produili-svoju-isia-lic1">
                      <span class="da-bi-produili1"
                        >Da bi produžili svoju ISIA licencu, najmanje jednom u 3
                        godine morate prisustvovati na seminaru za produživanje
                        licence.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line19">
                    <span class="blank-line20">
                      <span class="blank-line21">&nbsp;</span>
                    </span>
                  </p>
                  <p class="gdje-moete-raditi-sa-isia-lic">
                    <span class="gdje-moete-raditi-sa-isia-lic1">
                      <b class="gdje-moete-raditi1"
                        >Gdje možete raditi sa ISIA licencom:</b
                      >
                    </span>
                  </p>
                  <p class="sa-isia-licencom-uitelj-skija">
                    <span class="sa-isia-licencom-uitelj-skija1">
                      <span class="sa-isia-licencom"
                        >Sa ISIA licencom učitelj skijanja/daskanja može raditi
                        u školama skijanja u Hrvatskoj i u inozemstvu.</span
                      >
                    </span>
                  </p>
                  <p class="za-rad-u-italiji-potrebno-je-i2">
                    <span class="za-rad-u-italiji-potrebno-je-i3">
                      <span class="za-rad-u1"
                        >*Za rad u Italiji potrebno je imati dozvolu za rad od
                        strane HZUTS-a.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line22">
                    <span class="blank-line23">
                      <span class="blank-line24">&nbsp;</span>
                    </span>
                  </p>
                  <p class="obveze-uitelja-skijanjadaska3">
                    <span class="obveze-uitelja-skijanjadaska4">
                      <b class="obveze-uitelja-skijanjadaska5"
                        >Obveze učitelja skijanja/daskanja sa ISIA licencom:</b
                      >
                    </span>
                  </p>
                  <ul class="svake-godine-plaati-dravnu3">
                    <li class="svake-godine-plaati-dravnu4">
                      <span class="svake-godine-plaati-dravnu5">
                        <span class="svake-godine-plaati1"
                          >Svake godine plaćati državnu
                        </span>
                      </span>
                      <span class="lanarinu-hzuts-a-isia-lanari">
                        <Link :href="route('skijasi.commerce-theme.infoclanarine')" class="lanarinu-hzuts-a-isia"
                          >članarinu HZUTS-a, ISIA članarinu</Link
                        >
                        <span>
                          i članarinu područnome zboru u koji ste
                          učlanjeni</span
                        >
                      </span>
                    </li>
                    <li class="imati-vaeu-isia-licencu-min">
                      <span class="imati-vaeu-isia-licencu-min1">
                        <span
                          >Imati važeću ISIA licencu (min. 1 u 3 god.
                          sudjelovati na seminaru za produživanje licence)</span
                        >
                      </span>
                    </li>
                    <li class="isia-markicu-za-narednu-godinu">
                      <span class="isia-markicu-za-narednu-godinu1">
                        <span
                          >ISIA markicu za narednu godinu nalijepiti na
                          iskaznicu HZUTS-a, koju je potrebno imati uz sebe
                          prilikom rada</span
                        >
                      </span>
                    </li>
                    <li class="tijekom-rada-nositi-amblem-isi">
                      <span class="tijekom-rada-nositi-amblem-isi1">
                        <span>Tijekom rada nositi amblem ISIA učitelj</span>
                      </span>
                    </li>
                    <li class="uz-iskaznicu-i-amblem-priliko1">
                      <span class="uz-iskaznicu-i-amblem-priliko2">
                        <span
                          >Uz iskaznicu i amblem, prilikom rada potrebno je
                          imati i važeći osobni dokument</span
                        >
                      </span>
                    </li>
                  </ul>
                  <p class="blank-line25">
                    <span>
                      <span class="blank-line26">&nbsp;</span>
                    </span>
                  </p>
                  <p class="hzuts-isia-uiteljeskijanja-d">
                    <span>
                      <span class="hzuts-isia-uiteljeskijanja"
                        >*HZUTS ISIA učitelje/skijanja daskanja upisuje u
                      </span>
                    </span>
                    <span class="isia-bazu-podataka">
                      <a href="https://isiadb.ski/instructor" class="isia-bazu-podataka1"
                        >ISIA bazu podataka</a
                      >
                      <span class="span2">.</span>
                    </span>
                  </p>
                </span>
              </div>
            </div>
            <div class="rectangle-parent39" @click.prevent="closeDropdown2">
              <div class="frame-child63" />
              <img
                class="upload-1-icon1"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/upload-1.svg"
              />
            </div>
          </div>   </div>   </div>
        </div>
        <div class="timer-tree">
          <div class="licence-renewal-wrapper">
            <div class="licence-renewal">
              <img
                class="interface-icon"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/rectangle-112@2x.png"
              />
              <div class="licence-renewal-child" />
              <div class="image-upload">
                <div class="logic-branch">
                  <div class="korak-demonstrator-skijanja">
                    3. KORAK: DEMONSTRATOR SKIJANJA
                  </div>
                  <div class="savjeti-isia-uitelj-skijanjadaskanja-wrapper">
                    <div class="savjeti-isia-uitelj-skijanjadaskanja-container">
                      <p class="savjeti-isia-uitelj-skijanjadaskanja">
                        ISIA učitelj skijanja/daskanja min. 2 godine nakon
                        položenog ISIA ispita može pristupiti prijemnom ispitu
                        za prisustvovanje na Demonstratorskom seminaru.
                      </p>
                      <p class="nakon-poloenog-prijemnog">
                        Nakon položenog prijemnog ispita, ISIA učitelj
                        skijanja/daskanja pristupa Demonstratorskom seminaru.
                      </p>
                      <p class="nakon-uspjeno-poloenih">
                        Nakon uspješno položenih ispita na Demonstratorskom
                        seminaru, ISIA učitelj skijanja/daskanja stječe status
                        Državnog demonstratora HZUTS-a.
                      </p>
                    </div>
                  </div>
                  <div class="logic-branch-inner">
                    <button class="saznajvisegumb3" @click.prevent="toggleDropdown3">
                      <div class="frame-child64" />
                      <b class="saznaj-vie2">SAZNAJ VIŠE</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div v-show="showDropdown3" @click.self="showDropdown3 = false" class="dropdown-container2">
  <div class="dropdown3" :class="{ open: showDropdown3 }" ref="dropdown3">
    <div class="dropdown-content3">
            <div class="frame-child65" />
            <div class="status-dravnog-demonstratora-wrapper">
              <div class="status-dravnog-demonstratora-container">
                <span>
                  <p class="status-dravnog-demonstratora">
                    <span>
                      <span class="status-dravnog-demonstratora1"
                        >Status Državnog demonstratora najviši je rang Učitelja
                        sportova na snijegu u Hrvatskoj.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line27">
                    <span>
                      <span class="blank-line28">&nbsp;</span>
                    </span>
                  </p>
                  <p class="trajanje-i-obnova6">
                    <span>
                      <b>Trajanje i obnova:</b>
                    </span>
                  </p>
                  <p class="demonstratorska-licenca-traje">
                    <span>
                      <span class="demonstratorska-licenca-traje1"
                        >Demonstratorska licenca traje 2 godine.</span
                      >
                    </span>
                  </p>
                  <p class="da-bi-produili-svoju-demonstr">
                    <span>
                      <span class="da-bi-produili2"
                        >Da bi produžili svoju demonstratorsku licencu, svake 2
                        godine morate prisustvovati demonstratorskom
                        seminaru.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line29">
                    <span>
                      <span class="blank-line30">&nbsp;</span>
                    </span>
                  </p>
                  <p class="obveze-demonstratora">
                    <span>
                      <b>Obveze demonstratora:</b>
                    </span>
                  </p>
                  <ul class="svake-godine-plaati-dravnu6">
                    <li class="svake-godine-plaati-dravnu7">
                      <span class="svake-godine-plaati-dravnu8">
                        <span>Svake godine plaćati državnu </span>
                        <Link :href="route('skijasi.commerce-theme.infoclanarine')" class="lanarinu-hzuts-a-isia1"
                          >članarinu HZUTS-a, ISIA članarinu</Link
                        >
                        <span class="i-lanarinu-podrunome1">
                          i članarinu područnome zboru u koji ste
                          učlanjeni</span
                        >
                      </span>
                    </li>
                    <li class="imati-vaeu-demonstratorsku-l">
                      <span class="imati-vaeu-demonstratorsku-l1">
                        <span class="imati-vaeu-demonstratorsku"
                          >Imati važeću demonstratorsku licencu (svake 2 godine
                          sudjelovati na demonstratorskom seminaru)</span
                        >
                      </span>
                    </li>
                    <li class="isia-markicu-za-narednu-godinu2">
                      <span class="isia-markicu-za-narednu-godinu3">
                        <span class="isia-markicu-za"
                          >ISIA markicu za narednu godinu nalijepiti na
                          iskaznicu HZUTS-a, koju je potrebno imati uz sebe
                          prilikom rada</span
                        >
                      </span>
                    </li>
                    <li class="tijekom-rada-nositi-amblem-dem">
                      <span class="tijekom-rada-nositi-amblem-dem1">
                        <span class="tijekom-rada-nositi1"
                          >Tijekom rada nositi amblem demonstrator</span
                        >
                      </span>
                    </li>
                    <li class="uz-iskaznicu-i-amblem-priliko3">
                      <span class="uz-iskaznicu-i-amblem-priliko4">
                        <span class="uz-iskaznicu-i1"
                          >Uz iskaznicu i amblem, prilikom rada potrebno je
                          imati i važeći osobni dokument</span
                        >
                      </span>
                    </li>
                  </ul>
                  <p class="blank-line31">
                    <span class="blank-line32">
                      <span class="blank-line33">&nbsp;</span>
                    </span>
                  </p>
                  <p class="ako-demonstrator-skijanja-ne-p">
                    <span class="ako-demonstrator-skijanja-ne-p1">
                      <span class="ako-demonstrator-skijanja"
                        >*Ako demonstrator skijanja ne pristupi demonstratorskom
                        seminaru imat će status: ISIA učitelj (Demonstrator bez
                        licence)</span
                      >
                    </span>
                  </p>
                </span>
              </div>
            </div>
            <div class="rectangle-parent42" @click.prevent="closeDropdown3">
              <div class="frame-child66" />
              <img
                class="upload-1-icon2"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/upload-1.svg"
              />
            </div>
          </div> </div>   </div>
        </div>
        <div class="data-stream-inner">
          <div class="rectangle-parent43">
            <img
              class="frame-child67"
              loading="lazy"
              alt=""
              src="/storage/slike/savjetizaclanove/rectangle-112-1@2x.png"
            />
            <img class="frame-child68" alt="" src="/storage/slike/savjetizaclanove/rectangle-158.svg" />
            <div class="button-component">
              <div class="data-integration">
                <div class="korak-demo-team">4. KORAK: DEMO TEAM</div>
                <div class="prema-rang-listi-rezultata-dem-wrapper">
                  <div class="prema-rang-listi-container">
                    <span>
                      <p class="prema-rang-listi">
                        Prema rang listi rezultata Demonstratorskog seminara,
                        najboljih 10 demonstratora čine DEMO TEAM.
                      </p>
                      <p class="blank-line34">&nbsp;</p>
                      <p class="lanovi-demo-team-a2">
                        Članovi demo team-a predstavljaju Hrvatsku svake 4
                        godine na Interski kongresu. Stoga se svaki demo team
                        bira na mandat od jednog do drugog Interski kongresa.
                      </p>
                      <p class="blank-line35">&nbsp;</p>
                      <p class="zadatak-demo-teama-je">
                        <b>Zadatak demo teama je:</b>
                      </p>
                      <ul class="sudjelovanje-na-treninzima-pri">
                        <li class="sudjelovanje-na-treninzima-pri1">
                          <span class="sudjelovanje-na-treninzima"
                            >sudjelovanje na treninzima pripreme za Interski
                            kongres</span
                          >
                        </li>
                        <li>
                          <span class="predstavljanje-i-prezentiranje"
                            >predstavljanje i prezentiranje Hrvatske na Interski
                            kongresu</span
                          >
                        </li>
                      </ul>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="algorithmic-flow">
      <div class="data-integrity">
        <div class="data-integrity-child" />
      </div>
      <div class="data-sharing">
        <div class="licence-renewal-container">
          <div class="licence-renewal1">
            <img
              class="lifetime-i-s-i-a"
              loading="lazy"
              alt=""
              src="/storage/slike/savjetizaclanove/rectangle-159@2x.png"
            />
            <div class="licence-renewal-item" />
            <div class="image-upload1">
              <div class="data-streaming">
                <div class="savjeti-isia-card">ISIA CARD</div>
                <div class="data-aggregator-x">
                  <div class="savjeti-isia-uitelj-skijanjadaskanja-container1">
                    <p class="savjeti-isia-uitelj-skijanjadaskanja1">
                      ISIA učitelj skijanja/daskanja može prisustvovati ispitu
                      za ISIA CARD.
                    </p>
                    <p class="ukoliko-osoba-poloi">
                      Ukoliko osoba položi sve ispite dobiva status: ISIA
                      učitelj skijanja/daskanja sa ISIA CARD-om.
                    </p>
                  </div>
                </div>
                <div class="data-streaming-inner">
                  <button class="saznajvisegumb4"  @click.prevent="toggleDropdown4">
                    <div class="frame-child69" />
                    <b class="saznaj-vie3">SAZNAJ VIŠE</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div v-show="showDropdown4" @click.self="showDropdown4 = false" class="dropdown-container2">
  <div class="dropdown4" :class="{ open: showDropdown4 }" ref="dropdown4">
    <div class="dropdown-content4">
          <div class="frame-child70" />
          <div class="value-sifter">
            <div class="savjeti-isia-card-je-container">
              <span>
                <p class="savjeti-isia-card-je-doivotna-licenca">
                  <span>
                    <b>ISIA CARD je doživotna licenca.</b>
                  </span>
                </p>
                <p class="blank-line36">
                  <span>
                    <span class="blank-line37">&nbsp;</span>
                  </span>
                </p>
                <p class="savjeti-isia-uitelj-skijanjadaskanja2">
                  <span>
                    <span class="savjeti-isia-uitelj-skijanjadaskanja3"
                      >ISIA učitelj skijanja/daskanja sa ISIA CARD-om dobiva
                      novu iskaznicu, točnije ISIA CARD na koju mora nalijepiti
                      ISIA markicu za narednu godinu.</span
                    >
                  </span>
                </p>
                <p class="blank-line38">
                  <span>
                    <span class="blank-line39">&nbsp;</span>
                  </span>
                </p>
                <p class="obveze-isia-uitelj-skijanjad">
                  <span>
                    <b
                      >Obveze ISIA učitelj skijanja/daskanja sa ISIA CARD-om:</b
                    >
                  </span>
                </p>
                <ul class="svake-godine-plaati-dravnu9">
                  <li class="svake-godine-plaati-dravnu10">
                    <span class="svake-godine-plaati-dravnu11">
                      <span>Svake godine plaćati državnu </span>
                      <Link :href="route('skijasi.commerce-theme.infoclanarine')" class="lanarinu-hzuts-a-isia2"
                        >članarinu HZUTS-a, ISIA članarinu</Link
                      >
                      <span
                        >, ISIA CARD članarinu i članarinu područnome zboru u
                        koji ste učlanjeni</span
                      >
                    </span>
                  </li>
                  <li class="imati-vaeu-isia-licencu">
                    <span class="imati-vaeu-isia-licencu1">
                      <span>Imati važeću ISIA licencu</span>
                    </span>
                  </li>
                  <li class="isia-markicu-za-narednu-godinu4">
                    <span class="isia-markicu-za-narednu-godinu5">
                      <span
                        >ISIA markicu za narednu godinu nalijepiti na ISIA CARD,
                        koju je potrebno imati uz sebe prilikom rada</span
                      >
                    </span>
                  </li>
                  <li class="tijekom-rada-nositi-amblem-dem2">
                    <span class="tijekom-rada-nositi-amblem-dem3">
                      <span>Tijekom rada nositi amblem demonstrator</span>
                    </span>
                  </li>
                  <li>
                    <span class="uz-iskaznicu-i-amblem-priliko5">
                      <span
                        >Uz iskaznicu i amblem, prilikom rada potrebno je imati
                        i važeći osobni dokument</span
                      >
                    </span>
                  </li>
                </ul>
              </span>
            </div>
          </div>
          <div class="rectangle-parent46" @click.prevent="closeDropdown4">
            <div class="frame-child71" />
            <img
              class="upload-1-icon3"
              loading="lazy"
              alt=""
              src="/storage/slike/savjetizaclanove/upload-1-3.svg"
            />
          </div>
        </div> </div>   </div>
      </div>
      <div class="graph-visualization">
        <div class="frame-parent16">
          <div class="licence-renewal-frame">
            <div class="licence-renewal2">
              <img
                class="licence-renewal-inner"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/rectangle-159-1@2x.png"
              />
              <div class="licence-renewal-child1" />
              <div class="image-upload2">
                <div class="teaching-experience">
                  <div class="iaess-licenca">IAESS LICENCA</div>
                  <div class="reference-letters">
                    <div class="kako-bi-osoba-container">
                      <p class="kako-bi-osoba-dobila-iaess-lic">
                        <span class="kako-bi-osoba"
                          >Kako bi osoba dobila IAESS licencu mora zadovoljiti
                          određena
                        </span>
                        <span class="pravila">pravila</span>
                        <span>.</span>
                      </p>
                      <p class="u-hrvatskoj-iaess">
                        U Hrvatskoj IAESS licencu posjeduju samo voditelji
                        skijanja.
                      </p>
                      <p class="voditelj-skijanja-sa">
                        Voditelj skijanja sa IAESS licencom dobiva IAESS markicu
                        za narednu godinu koju mora nalijepiti na iskaznicu
                        HZUTS-a.
                      </p>
                    </div>
                  </div>
                  <div class="teaching-experience-inner">
                    <button class="saznajvisegumb5"  @click.prevent="toggleDropdown5">
                      <div class="frame-child72" />
                      <b class="saznaj-vie4">SAZNAJ VIŠE</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
          <div v-show="showDropdown5" @click.self="showDropdown5 = false" class="dropdown-container2">
  <div class="dropdown5" :class="{ open: showDropdown5 }" ref="dropdown5">
    <div class="dropdown-content5">
            <div class="frame-child73" />
            <div class="data-transformer">
              <div class="trajanje-i-obnova-container2">
                <span>
                  <p class="trajanje-i-obnova7">
                    <span>
                      <b>Trajanje i obnova:</b>
                    </span>
                  </p>
                  <p class="iaess-licenca-traje-3-godine">
                    <span>
                      <span class="iaess-licenca-traje"
                        >IAESS licenca traje 3 godine.</span
                      >
                    </span>
                  </p>
                  <p class="da-bi-produili-svoju-iaess-li">
                    <span>
                      <span class="da-bi-produili3"
                        >Da bi produžili svoju IAESS licencu, najmanje jednom u
                        3 godine morate prisustvovati seminaru za produživanje
                        licence.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line40">
                    <span>
                      <span class="blank-line41">&nbsp;</span>
                    </span>
                  </p>
                  <p class="gdje-moete-raditi-sa-iaess-li">
                    <span>
                      <b>Gdje možete raditi sa IAESS licencom:</b>
                    </span>
                  </p>
                  <p class="voditelji-skijanja-nisu-isto">
                    <span>
                      <span class="voditelji-skijanja-nisu"
                        >Voditelji skijanja nisu isto što i učitelji skijanja.
                        Voditelji mogu raditi SAMO i ISKLJUČIVO s djecom,
                        učenicima ili studentima iz obrazovne ustanove u kojoj
                        su zaposleni. Prilikom vođenja takvih grupa obvezni su
                        imati i potvrdu ravnatelja. Oni ne smiju raditi preko
                        turističkih agencija s grupama ljudi koji su uplatili
                        aranžmane preko agencija. Za takav rad su nadležni
                        učitelji skijanja s potvrđenom IVSI licencom.</span
                      >
                    </span>
                  </p>
                  <p class="blank-line42">
                    <span>
                      <span class="blank-line43">&nbsp;</span>
                    </span>
                  </p>
                  <p class="obveze-voditelja-skijanja">
                    <span>
                      <b>Obveze voditelja skijanja:</b>
                    </span>
                  </p>
                  <ul class="svake-godine-plaati-dravnu12">
                    <li class="svake-godine-plaati-dravnu13">
                      <span>
                        <span class="svake-godine-plaati2"
                          >Svake godine plaćati državnu
                        </span>
                      </span>
                      <span class="lanarinu-hzuts-a-i-lanarinu-p1">
                        <Link :href="route('skijasi.commerce-theme.infoclanarine')" class="lanarinu-hzuts-a1">članarinu HZUTS-a</Link>
                        <span class="i-lanarinu-podrunome2">
                          i članarinu područnome zboru u koji ste
                          učlanjeni</span
                        >
                      </span>
                    </li>
                    <li class="imati-vaeu-iaess-licencu-mi">
                      <span class="imati-vaeu-iaess-licencu-mi1">
                        <span class="imati-vaeu-iaess"
                          >Imati važeću IAESS licencu (min. 1 u 3 god.
                          sudjelovati na seminaru za produživanje licence)</span
                        >
                      </span>
                    </li>
                    <li class="iaess-markicu-za-narednu-godin">
                      <span class="iaess-markicu-za-narednu-godin1">
                        <span class="iaess-markicu-za"
                          >IAESS markicu za narednu godinu nalijepiti na
                          iskaznicu HZUTS-a, koju je potrebno imati uz sebe
                          prilikom rada</span
                        >
                      </span>
                    </li>
                    <li class="tijekom-rada-nositi-amblem-vod">
                      <span class="tijekom-rada-nositi-amblem-vod1">
                        <span class="tijekom-rada-nositi2"
                          >Tijekom rada nositi amblem voditelj skijanja</span
                        >
                      </span>
                    </li>
                    <li class="uz-iskaznicu-i-amblem-priliko6">
                      <span class="uz-iskaznicu-i-amblem-priliko7">
                        <span class="uz-iskaznicu-i2"
                          >Uz iskaznicu i amblem, prilikom rada potrebno je
                          imati i važeći osobni dokument</span
                        >
                      </span>
                    </li>
                  </ul>
                  <p class="blank-line44">
                    <span class="blank-line45">
                      <span class="blank-line46">&nbsp;</span>
                    </span>
                  </p>
                  <p class="ukoliko-voditelj-skijanja-eli">
                    <span class="ukoliko-voditelj-skijanja-eli1">
                      <span class="ukoliko-voditelj-skijanja"
                        >*Ukoliko voditelj skijanja želi imati status Učitelja
                        skijanja mora položiti tečaj za učitelja skijanja.</span
                      >
                    </span>
                  </p>
                </span>
              </div>
            </div>
            <div class="rectangle-parent49" @click.prevent="closeDropdown5">
              <div class="frame-child74" />
              <img
                class="upload-1-icon4"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/upload-1.svg"
              />
            </div>
          </div> </div>   </div>
        </div>
      </div>
      <div class="graph-visualization1">
        <div class="frame-parent17">
          <div class="frame-wrapper12">
            <div class="rectangle-parent50">
              <img
                class="frame-child75"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/rectangle-159-2@2x.png"
              />
              <div class="frame-child76" />
              <div class="frame-wrapper13">
                <div class="savjeti-trener-skijanjadaskanja-parent">
                  <div class="savjeti-trener-skijanjadaskanja">
                    TRENER SKIJANJA/DASKANJA
                  </div>
                  <div class="neki-opis-bla-bka-wrapper">
                    <div class="neki-opis-bla">Trener skijanja informacije</div>
                  </div>
                  <div class="frame-wrapper14">
                    <button class="saznajvisegumb6"  @click.prevent="toggleDropdown6"> 
                      <div class="frame-child77" />
                      <b class="saznaj-vie5">SAZNAJ VIŠE</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div v-show="showDropdown6" @click.self="showDropdown6 = false" class="dropdown-container2">
  <div class="dropdown6" :class="{ open: showDropdown6 }" ref="dropdown6">
    <div class="dropdown-content6">
            <div class="frame-child78" />
            <div class="function-library">
              <div class="trajanje-i-obnova-container3">
                <span>
                  <p class="trajanje-i-obnova8">
                    <b>Trajanje i obnova:</b>
                  </p>
                  <p class="trenerska-licenca-traje">
                    Trenerska licenca traje 3 godine.
                  </p>
                  <p class="da-bi-produili4">
                    Da bi produžili svoju trenersku licencu, najmanje jednom u 3
                    godine morate prisustvovati isključivo na trenerskom
                    seminaru.
                  </p>
                  <p class="blank-line47">&nbsp;</p>
                  <p class="gdje-moete-raditi-sa-trenersk">
                    <b>Gdje možete raditi sa trenerskom licencom:</b>
                  </p>
                  <p class="sa-trenerskom-licencom">
                    Sa trenerskom licencom trener skijanja/daskanja može raditi
                    jedino sa natjecateljima u skijaškim/snowboard klubovima i
                    skijaškim/snowboard reprezentacijama.
                  </p>
                  <p class="sa-trenerskom-licencom1">
                    Sa trenerskom licencom trener skijanja/daskanja ne može
                    raditi u školama skijanja – za taj rad su nadležni učitelji
                    skijanja/daskanja.
                  </p>
                  <p class="blank-line48">&nbsp;</p>
                  <p class="obveze-voditelja-skijanja1">
                    <b>Obveze voditelja skijanja:</b>
                  </p>
                  <ul class="svake-godine-plaati-dravnu14">
                    <li class="svake-godine-plaati-dravnu15">
                      <span class="svake-godine-plaati3"
                        >Svake godine plaćati državnu članarinu HZUTS-a i
                        članarinu područnome zboru u koji ste učlanjeni
                        (članarinu HZUTS-a povezati sa: Članarine)</span
                      >
                    </li>
                    <li class="imati-vaeu-trenersku-licencu">
                      <span class="imati-vaeu-trenersku"
                        >Imati važeću trenersku licencu (min. 1 u 3 god.
                        sudjelovati na trenerskom seminaru)</span
                      >
                    </li>
                    <li class="trenersku-markicu-za-narednu-g">
                      <span class="trenersku-markicu-za"
                        >Trenersku markicu za narednu godinu nalijepiti na
                        iskaznicu HZUTS-a, koju je potrebno imati uz sebe
                        prilikom rada</span
                      >
                    </li>
                    <li class="tijekom-rada-nositi-amblem-tre">
                      <span class="tijekom-rada-nositi3"
                        >Tijekom rada nositi amblem trener skijanja</span
                      >
                    </li>
                  </ul>
                  <p class="blank-line49">&nbsp;</p>
                  <p class="uz-iskaznicu-i3">
                    Uz iskaznicu i amblem, prilikom rada potrebno je imati i
                    važeći osobni dokument
                  </p>
                </span>
              </div>
            </div>
            <div class="rectangle-parent53" @click.prevent="closeDropdown6">
              <div class="frame-child79" />
              <img
                class="upload-1-icon5"
                loading="lazy"
                alt=""
                src="/storage/slike/savjetizaclanove/upload-1.svg"
              />
            </div>
          </div> </div>   </div>
        </div>
      </div>
      <footer class="combiner">
        <div class="conditional-link">
          <div class="da-bi-osoba-container">
            <span class="da-bi-osoba-container1">
              <p class="da-bi-osoba-bila-lan-hzuts-a">
                <span>
                  <span class="da-bi-osoba"
                    >Da bi osoba bila član HZUTS-a svake godine mora podmiri
                    svoje članarine.</span
                  >
                </span>
              </p>
              <p class="da-bi-osoba-mogla-raditi-mora">
                <span>
                  <span class="da-bi-osoba1"
                    >Da bi osoba mogla raditi mora imati podmirene sve članarine
                    i valjanu licencu.</span
                  >
                </span>
              </p>
              <p class="blank-line50">
                <span>
                  <span class="blank-line51">&nbsp;</span>
                </span>
              </p>
              <p class="osoba-tijekom-rada-mora-imati">
                <span>
                  <span class="osoba-tijekom-rada"
                    >Osoba tijekom rada mora imati odgovarajući amblem HZUTS-a i
                    iskaznicu HZUTS-a sa pripadajućom markicom za narednu
                    sezonu.</span
                  >
                </span>
              </p>
              <p class="blank-line52">
                <span>
                  <span class="blank-line53">&nbsp;</span>
                </span>
              </p>
              <p class="savjeti-potvrda-o-plaenoj-lanarini">
                <span>
                  <span class="savjeti-potvrda-o-plaenoj"
                    >Potvrda o plaćenoj članarini (hologram) i licenca (markica)
                    dobit će se samo nakon plaćene članarine Područnom zboru i
                    plaćene državne članarine HZUTS-u (uz preduvjet potvrđene
                    licence za tekuću sezonu). Iste se podižu isključivo u
                    vrijeme dežurstva vašeg područnog zbora.</span
                  >
                </span>
              </p>
              <p class="blank-line54">
                <span>
                  <span class="blank-line55">&nbsp;</span>
                </span>
              </p>
              <p class="dobro-za-znati">
                <span>
                  <b>Dobro za znati:</b>
                </span>
              </p>
              <p class="mukarci-nakon-navrenih-60-g">
                <span>
                  <span class="mukarci-nakon-navrenih"
                    >Muškarci nakon navršenih 60. god i žene nakon navršenih 55
                    god. sa IAESS/IVSI/ISIA licencom plaćaju 50 % godišnje
                    državne članarine, oni koji imaju ISIA licencu ISIA
                    članarinu plaćaju po normalnoj cijeni</span
                  >
                </span>
              </p>
              <p class="blank-line56">
                <span>
                  <span class="blank-line57">&nbsp;</span>
                </span>
              </p>
              <p class="voditelji-skijanja-iaess-lice">
                <span>
                  <b
                    >Voditelji skijanja (IAESS licenca), učitelji
                    skijanja/daskanja (IVSI i ISIA licenca) imaju pravo na
                    doživotnu licencu ako su ispunjeni slijedeći uvjeti:</b
                  >
                </span>
              </p>
              <ul class="mukarci-nakon-navrenih-60-g1">
                <li class="mukarci-nakon-navrenih-60-g2">
                  <span>
                    <span class="mukarci-nakon-navrenih1"
                      >Muškarci nakon navršenih 60. god i žene nakon navršenih
                      55 god.</span
                    >
                  </span>
                </li>
                <li class="najmanje-3-potvrene-licence-p">
                  <span>
                    <span class="najmanje-3-potvrene"
                      >Najmanje 3 potvrđene licence prije nego što su napunili
                      60/55 god.</span
                    >
                  </span>
                </li>
                <li class="nakon-to-su-napunili-tih-60-i">
                  <span>
                    <span class="nakon-to-su"
                      >Nakon što su napunili tih 60 ili 55 god. moraju doći još
                      jednom potvrditi licencu (npr. ako imam 59 god i potvrdila
                      sam licencu, licenca mi vrijedi još 3 godine. Ako bi
                      htjela dobiti doživotnu licencu moram još jednom nakon tih
                      navršenih 60/55 god doći na seminar za potvrđivanje
                      licence)</span
                    >
                  </span>
                </li>
              </ul>
              <p class="blank-line58">
                <span>
                  <span class="blank-line59">&nbsp;</span>
                </span>
              </p>
              <p class="ovo-se-ne-odnosi-na-demonstrat">
                <span class="ovo-se-ne-odnosi-na-demonstrat1">
                  <span
                    >*Ovo se ne odnosi na demonstratore. Demonstratori moraju
                    svake 2 godine prisustvovati demonstratorskom
                    seminaru.</span
                  >
                </span>
              </p>
            </span>
          </div>
          <div class="isiacardoverview">
            <img
              class="maskota-final-2-11"
              alt=""
              src="/storage/slike/savjetizaclanove/maskota-final-2-1@2x.png"
            />
          </div>
        </div>
      </footer>
    </section>
  </div>
</template>
<script>
  import { defineComponent } from "vue";
  import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

  export default {
    name: "SavjetiZaClanove",
    layout: [appLayout, galerijaLayout],

    components: {
    Link,
    Head,
  },

    data() {
  return {
    showDropdown: false,
    showDropdown2: false,
    showDropdown3: false,
    showDropdown4: false,
    showDropdown5: false,
    showDropdown6: false,
  }
},

methods: {

  toggleDropdown() {
  if (this.showDropdown) {
    this.$nextTick(() => {
      this.$refs.dropdown.classList.add('closing');
      setTimeout(() => {
        this.showDropdown = false;
        this.$refs.dropdown.classList.remove('closing');
      }, 600);
    });
  } else {
    this.showDropdown = true;
  }
},
  closeDropdown() {
  if (this.showDropdown) {
    this.$nextTick(() => {
      this.$refs.dropdown.classList.add('closing');
      setTimeout(() => {
        this.showDropdown = false;
        this.$refs.dropdown.classList.remove('closing');
      }, 600);
    });
  }
},



toggleDropdown2() {
  if (this.showDropdown2) {
    this.$nextTick(() => {
      this.$refs.dropdown2.classList.add('closing');
      setTimeout(() => {
        this.showDropdown2 = false;
        this.$refs.dropdown2.classList.remove('closing');
      }, 600);
    });
  } else {
    this.showDropdown2 = true;
  }
},
  closeDropdown2() {
  if (this.showDropdown2) {
    this.$nextTick(() => {
      this.$refs.dropdown2.classList.add('closing');
      setTimeout(() => {
        this.showDropdown2 = false;
        this.$refs.dropdown2.classList.remove('closing');
      }, 600);
    });
  }
},


toggleDropdown3() {
  if (this.showDropdown3) {
    this.$nextTick(() => {
      this.$refs.dropdown3.classList.add('closing');
      setTimeout(() => {
        this.showDropdown3 = false;
        this.$refs.dropdown3.classList.remove('closing');
      }, 600);
    });
  } else {
    this.showDropdown3 = true;
  }
},
  closeDropdown3() {
  if (this.showDropdown3) {
    this.$nextTick(() => {
      this.$refs.dropdown3.classList.add('closing');
      setTimeout(() => {
        this.showDropdown3 = false;
        this.$refs.dropdown3.classList.remove('closing');
      }, 600);
    });
  }
},


toggleDropdown4() {
  if (this.showDropdown4) {
    this.$nextTick(() => {
      this.$refs.dropdown4.classList.add('closing');
      setTimeout(() => {
        this.showDropdown4 = false;
        this.$refs.dropdown4.classList.remove('closing');
      }, 600);
    });
  } else {
    this.showDropdown4 = true;
  }
},
  closeDropdown4() {
  if (this.showDropdown4) {
    this.$nextTick(() => {
      this.$refs.dropdown4.classList.add('closing');
      setTimeout(() => {
        this.showDropdown4 = false;
        this.$refs.dropdown4.classList.remove('closing');
      }, 600);
    });
  }
},


toggleDropdown5() {
  if (this.showDropdown5) {
    this.$nextTick(() => {
      this.$refs.dropdown5.classList.add('closing');
      setTimeout(() => {
        this.showDropdown5 = false;
        this.$refs.dropdown5.classList.remove('closing');
      }, 600);
    });
  } else {
    this.showDropdown5 = true;
  }
},
  closeDropdown5() {
  if (this.showDropdown5) {
    this.$nextTick(() => {
      this.$refs.dropdown5.classList.add('closing');
      setTimeout(() => {
        this.showDropdown5 = false;
        this.$refs.dropdown5.classList.remove('closing');
      }, 600);
    });
  }
},


toggleDropdown6() {
  if (this.showDropdown6) {
    this.$nextTick(() => {
      this.$refs.dropdown6.classList.add('closing');
      setTimeout(() => {
        this.showDropdown6 = false;
        this.$refs.dropdown6.classList.remove('closing');
      }, 600);
    });
  } else {
    this.showDropdown6 = true;
  }
},
  closeDropdown6() {
  if (this.showDropdown6) {
    this.$nextTick(() => {
      this.$refs.dropdown6.classList.add('closing');
      setTimeout(() => {
        this.showDropdown6 = false;
        this.$refs.dropdown6.classList.remove('closing');
      }, 600);
    });
  }
},


},

  };

  
</script>
<style scoped>
  .frame-child55 {
    height: 528px;
    width: 1440px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
    z-index: 0;
  }
  .result-display {
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
  .savjeti-za-lanove {
    width: 550px;
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    max-width: 100%;
    z-index: 2;
  }
  .rectangle-parent31 {
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 240px 20px;
    box-sizing: border-box;
    position: relative;
    background-image: url("/storage/slike/savjetizaclanove/rectangle-200@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    max-width: 100%;
  }
  .savjeti-za-clanove-inner {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #fff;
    font-family: Inter;
  }
  .savjeti-za-lanove1 {
    margin: 0;
  }
  .mogunosti-napretka-lana-unut1 {
    margin-bottom: 0px;
  }
  .obveze-lana-prema-hzuts-u {
    margin-bottom: 0px;
  }
  .mogunosti-napretka-lana-unut {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    padding-left: 27px;
  }
  .blank-line4 {
    margin: 0;
  }
  .da-bi-postali {
    margin: 0;
  }
  .zadovoljiti-odreena-pravila {
    text-decoration: underline;
  }
  .zadovoljiti-odreena-pravila-z1 {
    margin-bottom: 0px;
  }
  .platiti-dravnu-lanarinu {
    color: #000;
  }
  .platiti-dravnu-lanarinu-hzut {
    margin-bottom: 0px;
  }
  .platiti-izradu-iskaznice {
    color: #000;
  }
  .platiti-izradu-iskaznice-i-amb {
    margin-bottom: 0px;
  }
  .zadovoljiti-odreena-pravila-z {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    padding-left: 27px;
    color: #03a9f4;
  }
  .blank-line5 {
    margin: 0;
  }
  .svaki-lan-hzuts-a {
    margin: 0;
  }
  .savjeti-za-lanove-container {
    height: 240px;
    position: relative;
    font-weight: 300;
    display: flex;
    align-items: center;
    max-width: 100%;
  }
  .maskota-final-2-1 {
    align-self: stretch;
    height: 122px;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
    display: none;
  }
  .maskota-final-2-1-wrapper {
    height: 122px;
    width: 150px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    background-image: url("/storage/slike/savjetizaclanove/maskota-final-2-1@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .additional-options {
    flex: 1;
    background-color: #fff;
    border: 10px solid #73d2f6;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    padding: 47px 70px 47px 50px;
    max-width: 100%;
    gap: 20px;
  }
  .button-design {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 4px 0px 4.5px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child56 {
    height: 420px;
    width: 721px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .ivsi-logo-klein-interski-1-1-icon {
    height: 149.2px;
    width: 150px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent32 {
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    padding: 20px 32px 19.8px;
    box-sizing: border-box;
    background-image: url("/storage/slike/savjetizaclanove/rectangle-159@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    min-width: 468px;
    min-height: 420px;
    max-width: 100%;
  }
  .korak-ivsi-licenca {
    flex: 1;
    position: relative;
    white-space: pre-wrap;
    display: inline-block;
    max-width: 100%;
  }
  .access-controller {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 37px 0px 37.3px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .kada-se-ulani {
    margin: 0;
  }
  .uitelj-skijanja-sa {
    margin: 0;
  }
  .kada-se-ulani-container {
    align-self: stretch;
    position: relative;
    font-size: 16px;
    font-weight: 300;
    font-family: Inter;
  }
  .frame-child57 {
    height: 60px;
    width: 411.4px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .saznaj-vie {
    width: 283px;
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    display: flex;
    font-family: Inter;
    color: inherit;
    text-align: center;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent33 {
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    background-color: transparent;
    width: 411.4px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
  }
  .rectangle-parent33:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .frame-wrapper10 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .access-controller-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 27px;
    max-width: 100%;
  }
  .frame-wrapper9 {
    width: 663px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 67px 0px 0px;
    box-sizing: border-box;
    min-width: 663px;
    max-width: 100%;
  }
  .frame-parent14 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 24px 0px 0px;
    box-sizing: border-box;
    gap: 33px;
    max-width: 100%;
  }
  .frame-child58 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .trajanje-i-obnova2 {
    font-family: Inter;
  }
  .trajanje-i-obnova1 {
    color: #000;
  }
  .trajanje-i-obnova {
    margin: 0;
  }
  .ivsi-licenca-traje {
    font-weight: 300;
    font-family: Inter;
  }
  .ivsi-licenca-traje-3-godine1 {
    color: #000;
  }
  .ivsi-licenca-traje-3-godine {
    margin: 0;
  }
  .da-bi-produili {
    font-weight: 300;
    font-family: Inter;
  }
  .da-bi-produili-svoju-ivsi-lic1 {
    color: #000;
  }
  .da-bi-produili-svoju-ivsi-lic {
    margin: 0;
  }
  .blank-line8 {
    font-weight: 300;
    font-family: Inter;
  }
  .blank-line7 {
    color: #000;
  }
  .blank-line6 {
    margin: 0;
  }
  .gdje-moete-raditi {
    font-family: Inter;
  }
  .gdje-moete-raditi-sa-ivsi-lic1 {
    color: #000;
  }
  .gdje-moete-raditi-sa-ivsi-lic {
    margin: 0;
  }
  .sa-ivsi-licencom {
    font-weight: 300;
    font-family: Inter;
  }
  .sa-ivsi-licencom-uitelj-skija1 {
    color: #000;
  }
  .sa-ivsi-licencom-uitelj-skija {
    margin: 0;
  }
  .blank-line11 {
    font-weight: 300;
    font-family: Inter;
  }
  .blank-line10 {
    color: #000;
  }
  .blank-line9 {
    margin: 0;
  }
  .za-rad-u {
    color: #db1f26;
  }
  .za-rad-u-italiji-potrebno-je-i1 {
    font-weight: 300;
    font-family: Inter;
  }
  .za-rad-u-italiji-potrebno-je-i {
    margin: 0;
  }
  .blank-line14 {
    color: #000;
  }
  .blank-line13 {
    font-weight: 300;
    font-family: Inter;
  }
  .blank-line12 {
    margin: 0;
  }
  .obveze-uitelja-skijanjadaska2 {
    font-family: Inter;
  }
  .obveze-uitelja-skijanjadaska1 {
    color: #000;
  }
  .obveze-uitelja-skijanjadaska {
    margin: 0;
  }
  .svake-godine-plaati {
    color: #000;
  }
  .svake-godine-plaati-dravnu2 {
    font-weight: 300;
    font-family: Inter;
  }
  .lanarinu-hzuts-a {
    text-decoration: underline;
    color: #03a9f4;
  }
  .i-lanarinu-podrunome {
    color: #000;
  }
  .lanarinu-hzuts-a-i-lanarinu-p {
    font-weight: 300;
    font-family: Inter;
  }
  .svake-godine-plaati-dravnu1 {
    margin-bottom: 0px;
  }
  .imati-vaeu-ivsi {
    color: #000;
  }
  .imati-vaeu-ivsi-licencu-min1 {
    font-weight: 300;
    font-family: Inter;
  }
  .imati-vaeu-ivsi-licencu-min {
    margin-bottom: 0px;
  }
  .ivsi-markicu-za {
    color: #000;
  }
  .ivsi-markicu-za-narednu-godinu1 {
    font-weight: 300;
    font-family: Inter;
  }
  .ivsi-markicu-za-narednu-godinu {
    margin-bottom: 0px;
  }
  .tijekom-rada-nositi {
    color: #000;
  }
  .tijekom-rada-nositi-amblem-ui1 {
    font-weight: 300;
    font-family: Inter;
  }
  .tijekom-rada-nositi-amblem-ui {
    margin-bottom: 0px;
  }
  .uz-iskaznicu-i {
    color: #000;
  }
  .uz-iskaznicu-i-amblem-priliko {
    font-weight: 300;
    font-family: Inter;
  }
  .svake-godine-plaati-dravnu {
    margin: 0;
    font-size: inherit;
    padding-left: 32px;
  }
  .trajanje-i-obnova-container {
    height: 100%;
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;
  }
  .assignment-operator {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 10px 30px 0px 31px;
    box-sizing: border-box;
    max-width: 100%;
    padding-bottom: 90px;
  }
  .frame-child59 {
    height: 63px;
    width: 1439px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon {
    height: 32px;
    width: 32.9px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent35 {
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

    cursor: pointer;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.rectangle-parent35:hover {
  transform: scale(1.2);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}


.dropdown-container {
  overflow: hidden;
}

  .dropdown1 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    /* align-items: flex-start; */
    justify-content: flex-start;
    padding: 40px 0px 0px 1px;
    box-sizing: border-box;
    gap: 120px;
    max-width: 100%;
    text-align: left;
    font-size: 24px;
    font-family: Inter;
    max-height: 0px; 
    transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;

  overflow: hidden; 
}


.dropdown1.open {
  max-height: 100%; 
  opacity: 1;
}

.dropdown1.open .dropdown-content {
  animation: slideDown 0.6s ease-in-out;
}

.dropdown1.closing .dropdown-content {
  animation: slideUp 0.6s ease-in-out;
}

@keyframes slideUp {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(-50px);
    opacity: 0;
  }
}

@keyframes slideDown {
  0% {
    transform: translateY(-50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}


  .frame-parent13 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    /* align-items: flex-start; */
    justify-content: flex-start;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    font-family: Inter;
    font-weight: 700;
  }
  .condition-splitter {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 51px;
    max-width: 100%;
  }
  .list-organizer {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 20px;
    color: #000;
    font-family: Inter;
  }
  .frame-child60 {
    height: 420px;
    width: 720px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
  }
  .isia-logo-1-icon {
    height: 200px;
    width: 200px;
    position: relative;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent36 {
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    padding: 0px 16px;
    box-sizing: border-box;
    background-image: url("/storage/slike/savjetizaclanove/rectangle-113@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    min-width: 468px;
    min-height: 420px;
    max-width: 100%;
  }
  .korak-isia-licenca {
    flex: 1;
    position: relative;
    white-space: pre-wrap;
    display: inline-block;
    max-width: 100%;
  }
  .transformer-chain {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 37px 0px 37.3px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .uitelj-skijanjadaskanja-sa {
    margin: 0;
  }
  .blank-line15 {
    margin: 0;
  }
  .isia-licenca-je {
    margin: 0;
  }
  .uitelj-skijanja-sa1 {
    margin: 0;
  }
  .uitelj-skijanjadaskanja-sa-container {
    align-self: stretch;
    height: 133px;
    position: relative;
    font-size: 16px;
    font-weight: 300;
    font-family: Inter;
    display: flex;
    align-items: center;
  }
  .frame-child61 {
    height: 60px;
    width: 411.4px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .saznaj-vie1 {
    width: 283px;
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    display: flex;
    font-family: Inter;
    color: inherit;
    text-align: center;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent37 {
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    background-color: transparent;
    width: 411.4px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
  }
  .rectangle-parent37:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .frame-wrapper11 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .transformer-chain-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 27px;
    max-width: 100%;
  }
  .trainer-profile {
    width: 663px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 39px 0px 0px;
    box-sizing: border-box;
    min-width: 663px;
    max-width: 100%;
  }
  .frame-parent15 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 23px 0px 0px;
    box-sizing: border-box;
    gap: 34px;
    max-width: 100%;
  }
  .frame-child62 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .blank-line18 {
    font-weight: 300;
    font-family: Inter;
  }
  .blank-line17 {
    color: #000;
  }
  .blank-line16 {
    margin: 0;
  }
  .trajanje-i-obnova5 {
    font-family: Inter;
  }
  .trajanje-i-obnova4 {
    color: #000;
  }
  .trajanje-i-obnova3 {
    margin: 0;
  }
  .isia-licenca-traje {
    font-weight: 300;
    font-family: Inter;
  }
  .isia-licenca-traje-3-godine1 {
    color: #000;
  }
  .isia-licenca-traje-3-godine {
    margin: 0;
  }
  .da-bi-produili1 {
    font-weight: 300;
    font-family: Inter;
  }
  .da-bi-produili-svoju-isia-lic1 {
    color: #000;
  }
  .da-bi-produili-svoju-isia-lic {
    margin: 0;
  }
  .blank-line21 {
    font-weight: 300;
    font-family: Inter;
  }
  .blank-line20 {
    color: #000;
  }
  .blank-line19 {
    margin: 0;
  }
  .gdje-moete-raditi1 {
    font-family: Inter;
  }
  .gdje-moete-raditi-sa-isia-lic1 {
    color: #000;
  }
  .gdje-moete-raditi-sa-isia-lic {
    margin: 0;
  }
  .sa-isia-licencom {
    font-weight: 300;
    font-family: Inter;
  }
  .sa-isia-licencom-uitelj-skija1 {
    color: #000;
  }
  .sa-isia-licencom-uitelj-skija {
    margin: 0;
  }
  .za-rad-u1 {
    color: #db1f26;
  }
  .za-rad-u-italiji-potrebno-je-i3 {
    font-weight: 300;
    font-family: Inter;
  }
  .za-rad-u-italiji-potrebno-je-i2 {
    margin: 0;
  }
  .blank-line24 {
    color: #000;
  }
  .blank-line23 {
    font-weight: 300;
    font-family: Inter;
  }
  .blank-line22 {
    margin: 0;
  }
  .obveze-uitelja-skijanjadaska5 {
    font-family: Inter;
  }
  .obveze-uitelja-skijanjadaska4 {
    color: #000;
  }
  .obveze-uitelja-skijanjadaska3 {
    margin: 0;
  }
  .svake-godine-plaati1 {
    color: #000;
  }
  .svake-godine-plaati-dravnu5 {
    font-weight: 300;
    font-family: Inter;
  }
  .lanarinu-hzuts-a-isia {
    text-decoration: underline;
    color: #03a9f4;
  }
  .lanarinu-hzuts-a-isia-lanari {
    font-weight: 300;
    font-family: Inter;
  }
  .svake-godine-plaati-dravnu4 {
    margin-bottom: 0px;
  }
  .imati-vaeu-isia-licencu-min1 {
    font-weight: 300;
    font-family: Inter;
  }
  .imati-vaeu-isia-licencu-min {
    margin-bottom: 0px;
  }
  .isia-markicu-za-narednu-godinu1 {
    font-weight: 300;
    font-family: Inter;
  }
  .isia-markicu-za-narednu-godinu {
    margin-bottom: 0px;
  }
  .tijekom-rada-nositi-amblem-isi1 {
    font-weight: 300;
    font-family: Inter;
  }
  .tijekom-rada-nositi-amblem-isi {
    margin-bottom: 0px;
  }
  .uz-iskaznicu-i-amblem-priliko2 {
    font-weight: 300;
    font-family: Inter;
  }
  .uz-iskaznicu-i-amblem-priliko1 {
    margin-bottom: 0px;
  }
  .svake-godine-plaati-dravnu3 {
    margin: 0;
    font-size: inherit;
    padding-left: 32px;
  }
  .blank-line26 {
    font-weight: 600;
  }
  .blank-line25 {
    margin: 0;
  }
  .hzuts-isia-uiteljeskijanja {
    font-weight: 600;
  }
  .isia-bazu-podataka1 {
    text-decoration: underline;
    color: #03a9f4;
  }
  .span2 {
    color: #000;
  }
  .isia-bazu-podataka {
    font-weight: 600;
  }
  .hzuts-isia-uiteljeskijanja-d {
    margin: 0;
  }
  .trajanje-i-obnova-container1 {
    height: 100%;
    position: relative;
    display: flex;
    align-items: center;
    z-index: 1;
  }
  .trajanje-i-obnova-isia-licenc-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 31px;
    box-sizing: border-box;
    max-width: 100%;
    padding-bottom: 90px;
  }
  .frame-child63 {
    height: 63px;
    width: 1439px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon1 {
    height: 32px;
    width: 32.9px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent39 {
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
    cursor: pointer;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.rectangle-parent39:hover {
  transform: scale(1.2);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}
  .dropdown2 {
    align-self: stretch;
    background-color: #fff;
  
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 26px 0px 0px 1px;
    box-sizing: border-box;
    gap: 105px;
    max-width: 100%;

    max-height: 0px; 
    transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;

  overflow: hidden; 
}

.dropdown-container2{
  overflow: hidden;
}

.dropdown2.open {
  max-height: 100%; 
  opacity: 1;
}

.dropdown2.open .dropdown-content2 {
  animation: slideDown 0.6s ease-in-out;
}

.dropdown2.closing .dropdown-content2 {
  animation: slideUp 0.6s ease-in-out;
}



  .nested-tree {
    align-self: stretch;
    display: relative; 
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 51px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 24px;
    font-family: Inter;
  }
  .interface-icon {
    height: 420px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    min-width: 468px;
    z-index: 1;
  }
  .licence-renewal-child {
    align-self: stretch;
    width: 1440px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
    z-index: 1;
  }
  .korak-demonstrator-skijanja {
    align-self: stretch;
    position: relative;

    z-index: 1;
  }
  .savjeti-isia-uitelj-skijanjadaskanja {
    margin: 0;
  }
  .nakon-poloenog-prijemnog {
    margin: 0;
  }
  .nakon-uspjeno-poloenih {
    margin: 0;
  }
  .savjeti-isia-uitelj-skijanjadaskanja-container {
    flex: 1;
    position: relative;
    font-weight: 300;
    display: inline-block;
    max-width: 100%;
    z-index: 1;
  }
  .savjeti-isia-uitelj-skijanjadaskanja-wrapper {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 12px;
    box-sizing: border-box;
    max-width: 100%;
    font-size: 16px;
    font-family: Inter;
  }
  .frame-child64 {
    height: 60px;
    width: 411.4px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .saznaj-vie2 {
    width: 283px;
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    display: flex;
    font-family: Inter;
    color: inherit;
    text-align: center;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    z-index: 1;
  }
  .saznajvisegumb3 {
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    background-color: transparent;
    width: 411.4px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
    z-index: 1;
  }
  .saznajvisegumb3:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .logic-branch-inner {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .logic-branch {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 34px;
    max-width: 100%;
  }
  .image-upload {
    width: 687px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 39px 0px 0px;
    box-sizing: border-box;
    min-width: 687px;
    max-width: 100%;
  }
  .licence-renewal {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 16px 0px 0px;
    box-sizing: border-box;
    gap: 17px;
    max-width: 100%;
  }
  .licence-renewal-wrapper {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child65 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .status-dravnog-demonstratora1 {
    font-weight: 300;
  }
  .status-dravnog-demonstratora {
    margin: 0;
  }
  .blank-line28 {
    font-weight: 300;
  }
  .blank-line27 {
    margin: 0;
  }
  .trajanje-i-obnova6 {
    margin: 0;
  }
  .demonstratorska-licenca-traje1 {
    font-weight: 300;
  }
  .demonstratorska-licenca-traje {
    margin: 0;
  }
  .da-bi-produili2 {
    font-weight: 300;
  }
  .da-bi-produili-svoju-demonstr {
    margin: 0;
  }
  .blank-line30 {
    font-weight: 300;
  }
  .blank-line29 {
    margin: 0;
  }
  .obveze-demonstratora {
    margin: 0;
  }
  .lanarinu-hzuts-a-isia1 {
    text-decoration: underline;
    color: #03a9f4;
  }
  .i-lanarinu-podrunome1 {
    color: #000;
  }
  .svake-godine-plaati-dravnu8 {
    font-weight: 300;
  }
  .svake-godine-plaati-dravnu7 {
    margin-bottom: 0px;
  }
  .imati-vaeu-demonstratorsku {
    color: #000;
  }
  .imati-vaeu-demonstratorsku-l1 {
    font-weight: 300;
  }
  .imati-vaeu-demonstratorsku-l {
    margin-bottom: 0px;
  }
  .isia-markicu-za {
    color: #000;
  }
  .isia-markicu-za-narednu-godinu3 {
    font-weight: 300;
  }
  .isia-markicu-za-narednu-godinu2 {
    margin-bottom: 0px;
  }
  .tijekom-rada-nositi1 {
    color: #000;
  }
  .tijekom-rada-nositi-amblem-dem1 {
    font-weight: 300;
  }
  .tijekom-rada-nositi-amblem-dem {
    margin-bottom: 0px;
  }
  .uz-iskaznicu-i1 {
    color: #000;
  }
  .uz-iskaznicu-i-amblem-priliko4 {
    font-weight: 300;
  }
  .uz-iskaznicu-i-amblem-priliko3 {
    margin-bottom: 0px;
  }
  .svake-godine-plaati-dravnu6 {
    margin: 0;
    font-size: inherit;
    padding-left: 32px;
  }
  .blank-line33 {
    color: #db1f26;
  }
  .blank-line32 {
    font-weight: 300;
  }
  .blank-line31 {
    margin: 0;
  }
  .ako-demonstrator-skijanja {
    color: #db1f26;
  }
  .ako-demonstrator-skijanja-ne-p1 {
    font-weight: 300;
  }
  .ako-demonstrator-skijanja-ne-p {
    margin: 0;
  }
  .status-dravnog-demonstratora-container {
    height: 100%;
    position: relative;
    display: flex;
    align-items: center;
    z-index: 1;
  }
  .status-dravnog-demonstratora-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 31px;
    box-sizing: border-box;
    max-width: 100%;

    padding-bottom: 90px;
  }
  .frame-child66 {
    height: 63px;
    width: 1439px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon2 {
    height: 32px;
    width: 32.9px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent42 {
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
    cursor: pointer;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.rectangle-parent42:hover {
  transform: scale(1.2);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}
  .dropdown3 {
    align-self: stretch;
    background-color: #fff;

    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 69px 0px 0px 1px;
    box-sizing: border-box;
    gap: 149px;
    max-width: 100%;
    text-align: left;
    font-size: 24px;
    font-family: Inter;
    max-height: 0px; 
    transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;

  overflow: hidden; 
}


.dropdown3.open {
  max-height: 100%; 
  opacity: 1;
}

.dropdown3.open .dropdown-content3 {
  animation: slideDown 0.6s ease-in-out;
}

.dropdown3.closing .dropdown-content3 {
  animation: slideUp 0.6s ease-in-out;
}

  .timer-tree {
    align-self: stretch;
  
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 51px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child67 {
    height: 420px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    min-width: 468px;
    z-index: 1;
  }
  .frame-child68 {
    height: 420px;
    width: 1440px;
    position: relative;
    display: none;
    min-height: 420px;
    max-width: 100%;
    z-index: 1;
  }
  .korak-demo-team {
    align-self: stretch;
    position: relative;
    white-space: pre-wrap;
    z-index: 1;
  }
  .prema-rang-listi {
    margin: 0;
    font-weight: 300;
  }
  .blank-line34 {
    margin: 0;
    font-weight: 300;
  }
  .lanovi-demo-team-a2 {
    margin: 0;
    font-weight: 300;
  }
  .blank-line35 {
    margin: 0;
    font-weight: 300;
  }
  .zadatak-demo-teama-je {
    margin: 0;
  }
  .sudjelovanje-na-treninzima {
    font-weight: 300;
  }
  .sudjelovanje-na-treninzima-pri1 {
    margin-bottom: 0px;
  }
  .predstavljanje-i-prezentiranje {
    font-weight: 300;
  }
  .sudjelovanje-na-treninzima-pri {
    margin: 0;
    font-size: inherit;
    padding-left: 27px;
  }
  .prema-rang-listi-container {
    height: 240px;
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;
  }
  .prema-rang-listi-rezultata-dem-wrapper {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 12px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 20px;
    font-family: Inter;
  }
  .data-integration {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 40px;
    max-width: 100%;
  }
  .button-component {
    width: 687px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 45px 0px 0px;
    box-sizing: border-box;
    min-width: 687px;
    max-width: 100%;
  }
  .rectangle-parent43 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.5px 16px 0px 0px;
    box-sizing: border-box;
    gap: 17px;
    max-width: 100%;
  }
  .data-stream-inner {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .data-stream {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .data-stream-wrapper {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 1px 63px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
    font-weight: 700;
  }
  .data-integrity-child {
    align-self: stretch;
    flex: 1;
    position: relative;
    border-top: 5px solid #03a9f4;
    box-sizing: border-box;
    max-width: 100%;
  }
  .data-integrity {
    align-self: stretch;
    height: 5px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 3px 0px 1px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .lifetime-i-s-i-a {
    height: 420px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    min-width: 468px;
    z-index: 1;
  }
  .licence-renewal-item {
    align-self: stretch;
    width: 1440px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
    z-index: 1;
  }
  .savjeti-isia-card {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .savjeti-isia-uitelj-skijanjadaskanja1 {
    margin: 0;
  }
  .ukoliko-osoba-poloi {
    margin: 0;
  }
  .savjeti-isia-uitelj-skijanjadaskanja-container1 {
    flex: 1;
    position: relative;
    font-weight: 300;
    display: inline-block;
    max-width: 100%;
    z-index: 1;
  }
  .data-aggregator-x {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 12px;
    box-sizing: border-box;
    max-width: 100%;
    font-size: 20px;
    font-family: Inter;
  }
  .frame-child69 {
    height: 60px;
    width: 411.4px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .saznaj-vie3 {
    width: 283px;
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    display: flex;
    font-family: Inter;
    color: inherit;
    text-align: center;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    z-index: 1;
  }
  .saznajvisegumb4 {
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    background-color: transparent;
    width: 411.4px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
    z-index: 1;
  }
  .saznajvisegumb4:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .data-streaming-inner {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .data-streaming {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 55px;
    max-width: 100%;
  }
  .image-upload1 {
    width: 687px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 39px 0px 0px;
    box-sizing: border-box;
    min-width: 687px;
    max-width: 100%;
  }
  .licence-renewal1 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 16px 0px 0px;
    box-sizing: border-box;
    gap: 17px;
    max-width: 100%;
  }
  .licence-renewal-container {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 2px 0px 0px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child70 {
    align-self: stretch;
    height: 581px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .savjeti-isia-card-je-doivotna-licenca {
    margin: 0;
  }
  .blank-line37 {
    font-weight: 300;
  }
  .blank-line36 {
    margin: 0;
  }
  .savjeti-isia-uitelj-skijanjadaskanja3 {
    font-weight: 300;
  }
  .savjeti-isia-uitelj-skijanjadaskanja2 {
    margin: 0;
  }
  .blank-line39 {
    font-weight: 300;
  }
  .blank-line38 {
    margin: 0;
  }
  .obveze-isia-uitelj-skijanjad {
    margin: 0;
  }
  .lanarinu-hzuts-a-isia2 {
    text-decoration: underline;
    color: #03a9f4;
  }
  .svake-godine-plaati-dravnu11 {
    font-weight: 300;
  }
  .svake-godine-plaati-dravnu10 {
    margin-bottom: 0px;
  }
  .imati-vaeu-isia-licencu1 {
    font-weight: 300;
  }
  .imati-vaeu-isia-licencu {
    margin-bottom: 0px;
  }
  .isia-markicu-za-narednu-godinu5 {
    font-weight: 300;
  }
  .isia-markicu-za-narednu-godinu4 {
    margin-bottom: 0px;
  }
  .tijekom-rada-nositi-amblem-dem3 {
    font-weight: 300;
  }
  .tijekom-rada-nositi-amblem-dem2 {
    margin-bottom: 0px;
  }
  .uz-iskaznicu-i-amblem-priliko5 {
    font-weight: 300;
  }
  .svake-godine-plaati-dravnu9 {
    margin: 0;
    font-size: inherit;
    padding-left: 32px;
  }
  .savjeti-isia-card-je-container {
    height: 100%;
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;

    padding-bottom: 90px;
  }
  .value-sifter {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 30px 0px 34px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child71 {
    height: 63px;
    width: 1440px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon3 {
    height: 32px;
    width: 32.9px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent46 {
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
    cursor: pointer;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.rectangle-parent46:hover {
  transform: scale(1.2);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}
  .dropdown4 {
    align-self: stretch;
    background-color: #fff;

    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 98px 0px 0px;
    box-sizing: border-box;
    gap: 72px;
    max-width: 100%;
    z-index: 2;
    text-align: left;
    font-size: 24px;
    font-family: Inter;
    transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;

overflow: hidden; 
}


.dropdown4.open {
  max-height: 100%; 
opacity: 1;
}

.dropdown4.open .dropdown-content4 {
animation: slideDown 0.6s ease-in-out;
}

.dropdown4.closing .dropdown-content4 {
animation: slideUp 0.6s ease-in-out;
}
  .data-sharing {
    align-self: stretch;
   
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 0px 5px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .licence-renewal-inner {
    height: 420px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    min-width: 468px;
    z-index: 1;
  }
  .licence-renewal-child1 {
    align-self: stretch;
    width: 1440px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
    z-index: 1;
  }
  .iaess-licenca {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .kako-bi-osoba {
    color: #000;
  }
  .pravila {
    text-decoration: underline;
    color: #03a9f4;
  }
  .kako-bi-osoba-dobila-iaess-lic {
    margin: 0;
  }
  .u-hrvatskoj-iaess {
    margin: 0;
  }
  .voditelj-skijanja-sa {
    margin: 0;
  }
  .kako-bi-osoba-container {
    flex: 1;
    position: relative;
    font-weight: 300;
    display: inline-block;
    max-width: 100%;
    z-index: 1;
  }
  .reference-letters {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 12px;
    box-sizing: border-box;
    max-width: 100%;
    font-size: 16px;
    font-family: Inter;
  }
  .frame-child72 {
    height: 60px;
    width: 411.4px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .saznaj-vie4 {
    width: 283px;
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    display: flex;
    font-family: Inter;
    color: inherit;
    text-align: center;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    z-index: 1;
  }
  .saznajvisegumb5 {
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    background-color: transparent;
    width: 411.4px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
    z-index: 1;
  }
  .saznajvisegumb5:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .teaching-experience-inner {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .teaching-experience {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 53px;
    max-width: 100%;
  }
  .image-upload2 {
    width: 687px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 39px 0px 0px;
    box-sizing: border-box;
    min-width: 687px;
    max-width: 100%;
  }
  .licence-renewal2 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 16px 0px 0px;
    box-sizing: border-box;
    gap: 17px;
    max-width: 100%;
  }
  .licence-renewal-frame {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child73 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .trajanje-i-obnova7 {
    margin: 0;
  }
  .iaess-licenca-traje {
    font-weight: 300;
  }
  .iaess-licenca-traje-3-godine {
    margin: 0;
  }
  .da-bi-produili3 {
    font-weight: 300;
  }
  .da-bi-produili-svoju-iaess-li {
    margin: 0;
  }
  .blank-line41 {
    font-weight: 300;
  }
  .blank-line40 {
    margin: 0;
  }
  .gdje-moete-raditi-sa-iaess-li {
    margin: 0;
  }
  .voditelji-skijanja-nisu {
    font-weight: 300;
  }
  .voditelji-skijanja-nisu-isto {
    margin: 0;
  }
  .blank-line43 {
    font-weight: 300;
  }
  .blank-line42 {
    margin: 0;
  }
  .obveze-voditelja-skijanja {
    margin: 0;
  }
  .svake-godine-plaati2 {
    font-weight: 300;
  }
  .lanarinu-hzuts-a1 {
    text-decoration: underline;
    color: #03a9f4;
  }
  .i-lanarinu-podrunome2 {
    color: #000;
  }
  .lanarinu-hzuts-a-i-lanarinu-p1 {
    font-weight: 300;
  }
  .svake-godine-plaati-dravnu13 {
    margin-bottom: 0px;
  }
  .imati-vaeu-iaess {
    color: #000;
  }
  .imati-vaeu-iaess-licencu-mi1 {
    font-weight: 300;
  }
  .imati-vaeu-iaess-licencu-mi {
    margin-bottom: 0px;
  }
  .iaess-markicu-za {
    color: #000;
  }
  .iaess-markicu-za-narednu-godin1 {
    font-weight: 300;
  }
  .iaess-markicu-za-narednu-godin {
    margin-bottom: 0px;
  }
  .tijekom-rada-nositi2 {
    color: #000;
  }
  .tijekom-rada-nositi-amblem-vod1 {
    font-weight: 300;
  }
  .tijekom-rada-nositi-amblem-vod {
    margin-bottom: 0px;
  }
  .uz-iskaznicu-i2 {
    color: #000;
  }
  .uz-iskaznicu-i-amblem-priliko7 {
    font-weight: 300;
  }
  .uz-iskaznicu-i-amblem-priliko6 {
    margin-bottom: 0px;
  }
  .svake-godine-plaati-dravnu12 {
    margin: 0;
    font-size: inherit;
    padding-left: 32px;
  }
  .blank-line46 {
    color: #000;
  }
  .blank-line45 {
    font-weight: 300;
  }
  .blank-line44 {
    margin: 0;
  }
  .ukoliko-voditelj-skijanja {
    color: #db1f26;
  }
  .ukoliko-voditelj-skijanja-eli1 {
    font-weight: 300;
  }
  .ukoliko-voditelj-skijanja-eli {
    margin: 0;
  }
  .trajanje-i-obnova-container2 {
    height: 100%;
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;
  }
  .data-transformer {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 30px 0px 31px;
    box-sizing: border-box;
    max-width: 100%;

    padding-bottom: 90px;
  }
  .frame-child74 {
    height: 63px;
    width: 1439px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon4 {
    height: 32px;
    width: 32.9px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent49 {
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
    cursor: pointer;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.rectangle-parent49:hover {
  transform: scale(1.2);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}
  .dropdown5 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px 1px;
    box-sizing: border-box;
    gap: 72px;
    max-width: 100%;
    z-index: 2;
    text-align: left;
    font-size: 24px;
    font-family: Inter;
    transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;

overflow: hidden; 
}


.dropdown5.open {
  max-height: 100%; 
opacity: 1;
}

.dropdown5.open .dropdown-content5 {
animation: slideDown 0.6s ease-in-out;
}

.dropdown5.closing .dropdown-content5 {
animation: slideUp 0.6s ease-in-out;
}
  .frame-parent16 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .graph-visualization {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 1px 5px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child75 {
    height: 420px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    min-width: 468px;
    z-index: 1;
  }
  .frame-child76 {
    align-self: stretch;
    width: 1440px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
    z-index: 1;
  }
  .savjeti-trener-skijanjadaskanja {
    align-self: stretch;
    position: relative;
    z-index: 1;
  }
  .neki-opis-bla {
    flex: 1;
    position: relative;
    font-weight: 300;
    display: inline-block;
    max-width: 100%;
    z-index: 1;
  }
  .neki-opis-bla-bka-wrapper {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 12px;
    box-sizing: border-box;
    max-width: 100%;
    font-size: 16px;
    font-family: Inter;
  }
  .frame-child77 {
    height: 60px;
    width: 411.4px;
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }
  .saznaj-vie5 {
    width: 283px;
    position: relative;
    font-size: 20px;
    letter-spacing: 10px;
    line-height: 24.5px;
    display: flex;
    font-family: Inter;
    color: inherit;
    text-align: center;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    z-index: 1;
  }
  .saznajvisegumb6 {
    cursor: pointer;
    border: 2px solid #03a9f4;
    padding: 18px 20px;
    background-color: transparent;
    width: 411.4px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    max-width: 100%;
    z-index: 1;
  }
  .saznajvisegumb6:hover {
    background-color: #008fdb;
    color: white;
    border: 2px solid #008fdb;
    box-sizing: border-box;
  }
  .frame-wrapper14 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 0px 20px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .savjeti-trener-skijanjadaskanja-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 81px;
    max-width: 100%;
  }
  .frame-wrapper13 {
    width: 687px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 39px 0px 0px;
    box-sizing: border-box;
    min-width: 687px;
    max-width: 100%;
  }
  .rectangle-parent50 {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 16px 0px 0px;
    box-sizing: border-box;
    gap: 17px;
    max-width: 100%;
  }
  .frame-wrapper12 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .frame-child78 {
    align-self: stretch;
    height: 687px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .trajanje-i-obnova8 {
    margin: 0;
  }
  .trenerska-licenca-traje {
    margin: 0;
    font-weight: 300;
  }
  .da-bi-produili4 {
    margin: 0;
    font-weight: 300;
  }
  .blank-line47 {
    margin: 0;
    font-weight: 300;
  }
  .gdje-moete-raditi-sa-trenersk {
    margin: 0;
  }
  .sa-trenerskom-licencom {
    margin: 0;
    font-weight: 300;
  }
  .sa-trenerskom-licencom1 {
    margin: 0;
    font-weight: 300;
  }
  .blank-line48 {
    margin: 0;
    font-weight: 300;
  }
  .obveze-voditelja-skijanja1 {
    margin: 0;
  }
  .svake-godine-plaati3 {
    font-weight: 300;
  }
  .svake-godine-plaati-dravnu15 {
    margin-bottom: 0px;
  }
  .imati-vaeu-trenersku {
    font-weight: 300;
  }
  .imati-vaeu-trenersku-licencu {
    margin-bottom: 0px;
  }
  .trenersku-markicu-za {
    font-weight: 300;
  }
  .trenersku-markicu-za-narednu-g {
    margin-bottom: 0px;
  }
  .tijekom-rada-nositi3 {
    font-weight: 300;
  }
  .tijekom-rada-nositi-amblem-tre {
    margin-bottom: 0px;
  }
  .svake-godine-plaati-dravnu14 {
    margin: 0;
    font-size: inherit;
    padding-left: 32px;
  }
  .blank-line49 {
    margin: 0;
    font-weight: 300;
  }
  .uz-iskaznicu-i3 {
    margin: 0;
    font-weight: 300;
  }
  .trajanje-i-obnova-container3 {
    height: 100%;
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
    z-index: 1;
  }
  .function-library {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 10px 30px 40px 31px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .frame-child79 {
    height: 63px;
    width: 1439px;
    position: relative;
    background-color: #03a9f4;
    display: none;
    max-width: 100%;
  }
  .upload-1-icon5 {
    height: 32px;
    width: 32.9px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .rectangle-parent53 {
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
    cursor: pointer;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.rectangle-parent53:hover {
  transform: scale(1.2);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}
  .dropdown6 {
    align-self: stretch;
    background-color: #fff;
 
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px 1px;
    box-sizing: border-box;
    gap: 72px;
    max-width: 100%;
    z-index: 2;
    text-align: left;
    font-size: 24px;
    font-family: Inter;
    transition: max-height 0.6s ease-in-out, opacity 0.6s ease-in-out;

overflow: hidden; 
}


.dropdown6.open {
  max-height: 100%; 
opacity: 1;
}

.dropdown6.open .dropdown-content6 {
animation: slideDown 0.6s ease-in-out;
}

.dropdown6.closing .dropdown-content6 {
animation: slideUp 0.6s ease-in-out;
}
  .frame-parent17 {
    flex: 1;
  
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .graph-visualization1 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 1px 5px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .da-bi-osoba {
    font-weight: 300;
  }
  .da-bi-osoba-bila-lan-hzuts-a {
    margin: 0;
  }
  .da-bi-osoba1 {
    font-weight: 300;
  }
  .da-bi-osoba-mogla-raditi-mora {
    margin: 0;
  }
  .blank-line51 {
    font-weight: 300;
  }
  .blank-line50 {
    margin: 0;
  }
  .osoba-tijekom-rada {
    font-weight: 300;
  }
  .osoba-tijekom-rada-mora-imati {
    margin: 0;
  }
  .blank-line53 {
    font-weight: 300;
  }
  .blank-line52 {
    margin: 0;
  }
  .savjeti-potvrda-o-plaenoj {
    font-weight: 300;
  }
  .savjeti-potvrda-o-plaenoj-lanarini {
    margin: 0;
  }
  .blank-line55 {
    font-weight: 300;
  }
  .blank-line54 {
    margin: 0;
  }
  .dobro-za-znati {
    margin: 0;
  }
  .mukarci-nakon-navrenih {
    font-weight: 300;
  }
  .mukarci-nakon-navrenih-60-g {
    margin: 0;
  }
  .blank-line57 {
    font-weight: 300;
  }
  .blank-line56 {
    margin: 0;
  }
  .voditelji-skijanja-iaess-lice {
    margin: 0;
  }
  .mukarci-nakon-navrenih1 {
    font-weight: 300;
  }
  .mukarci-nakon-navrenih-60-g2 {
    margin-bottom: 0px;
  }
  .najmanje-3-potvrene {
    font-weight: 300;
  }
  .najmanje-3-potvrene-licence-p {
    margin-bottom: 0px;
  }
  .nakon-to-su {
    font-weight: 300;
  }
  .nakon-to-su-napunili-tih-60-i {
    margin-bottom: 0px;
  }
  .mukarci-nakon-navrenih-60-g1 {
    margin: 0;
    font-size: inherit;
    padding-left: 32px;
  }
  .blank-line59 {
    font-weight: 300;
  }
  .blank-line58 {
    margin: 0;
  }
  .ovo-se-ne-odnosi-na-demonstrat1 {
    font-weight: 300;
  }
  .ovo-se-ne-odnosi-na-demonstrat {
    margin: 0;
    color: #db1f26;
  }
  .da-bi-osoba-container1 {
    width: 100%;
  }
  .da-bi-osoba-container {
    height: 725px;
    width: 85%;
    position: relative;
    display: flex;
    align-items: center;
    flex-shrink: 0;
    max-width: 100%;
  }
  .maskota-final-2-11 {
    align-self: stretch;
    height: 122px;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
    display: none;
  }
  .isiacardoverview {
    height: 122px;
    width: 150px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    background-image: url("/storage/slike/savjetizaclanove/maskota-final-2-1@2x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .conditional-link {
    flex: 1;
    background-color: #fff;
    border: 10px solid #73d2f6;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 94px 50px;
    gap: 41px;
    max-width: 100%;
  }
  .combiner {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 5px 0px 5.5px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: left;
    font-size: 24px;
    color: #000;
    font-family: Inter;
  }
  .algorithmic-flow {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 46px;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: Inter;
    font-weight: 700;
  }
  .savjeti-za-clanove {
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
    gap: 51px;
    letter-spacing: normal;
  }

  @media screen and (max-width: 1350px) {
    .rectangle-parent32 {
      min-height: auto;
    }

    .frame-wrapper9 {
      flex: 1;
    }

    .frame-parent14 {
      flex-wrap: wrap;
      padding: 20px;
      box-sizing: border-box;
    }

    .rectangle-parent36 {
      min-height: auto;
    }

    .trainer-profile {
      flex: 1;
    }

    .frame-parent15 {
      flex-wrap: wrap;
      padding: 20px;
      box-sizing: border-box;
    }

    .image-upload {
      flex: 1;
    }

    .licence-renewal {
      flex-wrap: wrap;
      padding-left: 16px;
      padding-top: 16px;
      padding-bottom: 16px;
      box-sizing: border-box;
    }

    .timer-tree {
      padding-bottom: 33px;
      box-sizing: border-box;
    }

    .button-component {
      flex: 1;
    }

    .rectangle-parent43 {
      flex-wrap: wrap;
      padding-left: 16px;
      padding-top: 16px;
      padding-bottom: 50px;
      box-sizing: border-box;
    }

    .data-stream-wrapper {
      padding-bottom: 27px;
      box-sizing: border-box;
    }

    .image-upload1 {
      flex: 1;
    }

    .licence-renewal1 {
      flex-wrap: wrap;
      padding-left: 16px;
      padding-top: 16px;
      padding-bottom: 16px;
      box-sizing: border-box;
    }

    .image-upload2 {
      flex: 1;
    }

    .licence-renewal2 {
      flex-wrap: wrap;
      padding-left: 16px;
      padding-top: 16px;
      padding-bottom: 16px;
      box-sizing: border-box;
    }

    .frame-wrapper13 {
      flex: 1;
    }

    .rectangle-parent50 {
      flex-wrap: wrap;
      padding-left: 16px;
      padding-top: 16px;
      padding-bottom: 16px;
      box-sizing: border-box;
    }

    .conditional-link {
      flex-wrap: wrap;
      padding-left: 25px;
      padding-right: 25px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 1150px) {
    .savjeti-za-lanove-container {
      align-self: stretch;
      width: auto;
      flex: 1;
    }

    .additional-options {
      flex-wrap: wrap;
    }

    .rectangle-parent32 {
      align-items: flex-end;
      justify-content: center;
      min-height: 420;
    }

    .frame-wrapper9 {
      padding-bottom: 50px;
      box-sizing: border-box;
    }

    .assignment-operator {
      padding: 30px 50px 26px;
      box-sizing: border-box;
    }

    .rectangle-parent36 {
      align-items: flex-end;
      justify-content: center;
      padding-top: 20px;
      padding-bottom: 20px;
      box-sizing: border-box;
      min-height: 420;
    }

    .trainer-profile {
      padding-bottom: 50px;
      box-sizing: border-box;
    }


    .image-upload {
      padding-bottom: 50px;
      box-sizing: border-box;
    }

    .status-dravnog-demonstratora-wrapper {
      padding: 50px 50px 30px;
      box-sizing: border-box;
    }

    .prema-rang-listi-rezultata-dem-wrapper {
      padding: 0px 50px;
      box-sizing: border-box;
    }

    .value-sifter {
      padding: 50px;
      box-sizing: border-box;
    }
    .trajanje-i-obnova-isia-licenc-wrapper {
      padding: 50px;
      box-sizing: border-box;
    }
    .function-library {
      padding: 50px;
      box-sizing: border-box;
    }
    .data-transformer {
      height: auto;
      flex-direction: row;
      padding: 50px;
      box-sizing: border-box;
    }

    .image-upload2 {
      padding-bottom: 60px;
      box-sizing: border-box;
    }

  

    .frame-wrapper13 {
      padding-bottom: 50px;
      box-sizing: border-box;
    }

 

    .da-bi-osoba-container {
      align-self: stretch;
      width: auto;
      flex: 1;
    }

    .conditional-link {
      gap: 41px 11px;
      padding: 70px 30px 70px 40px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 800px) {
    .savjeti-za-lanove {
      font-size: 32px;
    }

    .rectangle-parent31 {
      padding-top: 156px;
      padding-bottom: 156px;
      box-sizing: border-box;
    }

    .additional-options {
      padding-left: 25px;
      padding-right: 35px;
      box-sizing: border-box;
    }

    .rectangle-parent32 {
      min-width: 100%;
    }

    .korak-ivsi-licenca {
      font-size: 32px;
    }

    .frame-wrapper9 {
      min-width: 100%;
    }

    .frame-parent14 {
      gap: 33px 16px;
    }

    .assignment-operator {

      box-sizing: border-box;
    }

    .dropdown1 {
      gap: 60px 120px;
    }

    .condition-splitter {
      gap: 25px 51px;
    }

    .rectangle-parent36 {
      min-width: 100%;
    }

    .korak-isia-licenca {
      font-size: 32px;
    }

    .trainer-profile {
      min-width: 100%;
    }

    .frame-parent15 {
      gap: 34px 17px;
    }

    .trajanje-i-obnova-isia-licenc-wrapper {

      box-sizing: border-box;
    }

    .dropdown2 {
      gap: 52px 105px;
    }

    .nested-tree {
      padding-bottom: 33px;
      box-sizing: border-box;
    }

    .interface-icon {
      min-width: 100%;
    }

    .korak-demonstrator-skijanja {
      font-size: 32px;
    }

    .logic-branch {
      gap: 17px 34px;
    }

    .image-upload {
      min-width: 100%;
    }

    .status-dravnog-demonstratora-wrapper {

      box-sizing: border-box;
    }

    .dropdown3 {
      gap: 74px 149px;
      padding-top: 45px;
      box-sizing: border-box;
    }

    .timer-tree {
      padding-bottom: 21px;
      box-sizing: border-box;
    }

    .frame-child67 {
      min-width: 100%;
    }

    .korak-demo-team {
      font-size: 32px;
    }

    .data-integration {
      gap: 20px 40px;
    }

    .button-component {
      min-width: 100%;
    }

    .data-stream-wrapper {
      padding-bottom: 20px;
      box-sizing: border-box;
    }

    .lifetime-i-s-i-a {
      min-width: 100%;
    }

    .savjeti-isia-card {
      font-size: 32px;
    }

    .data-streaming {
      gap: 27px 55px;
    }

    .image-upload1 {
      min-width: 100%;
    }

    .value-sifter {

      box-sizing: border-box;
    }

    .dropdown4 {
      gap: 36px 72px;
      padding-top: 64px;
      box-sizing: border-box;
    }

    .licence-renewal-inner {
      min-width: 100%;
    }

    .iaess-licenca {
      font-size: 32px;
    }

    .teaching-experience {
      gap: 26px 53px;
    }

    .image-upload2 {
      min-width: 100%;
    }

    .data-transformer {

      box-sizing: border-box;
    }

    .dropdown5 {
      gap: 36px 72px;
    }

    .frame-child75 {
      min-width: 100%;
    }

    .savjeti-trener-skijanjadaskanja {
      font-size: 32px;
    }

    .savjeti-trener-skijanjadaskanja-parent {
      gap: 40px 81px;
    }

    .frame-wrapper13 {
      min-width: 100%;
    }

    .function-library {
 
      box-sizing: border-box;
    }

    .dropdown6 {
      gap: 36px 72px;
    }

    .conditional-link {
      gap: 41px 20px;
    }

    .algorithmic-flow {
      gap: 23px 46px;
    }

    .savjeti-za-clanove {
      gap: 25px 51px;
    }
  }
  @media screen and (max-width: 650px) {
    .savjeti-za-lanove {
      font-size: 24px;
    }

    .savjeti-za-lanove-container {
      font-size: 16px;
    }

    .additional-options {
      height: auto;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-right: 42px;
      box-sizing: border-box;
    }

    .korak-ivsi-licenca {
      font-size: 24px;
    }

    .saznaj-vie {
      font-size: 16px;
      letter-spacing: 3px;
    }

    .trajanje-i-obnova-container {
      font-size: 19px;
    }

    .assignment-operator {
      height: auto;

      box-sizing: border-box;
    }

    .dropdown1 {
      gap: 30px 120px;
    }

    .korak-isia-licenca {
      font-size: 24px;
    }

    .saznaj-vie1 {
      font-size: 16px;
      letter-spacing: 3px;
    }

    .transformer-chain-parent {
      gap: 46px 27px;
      padding-top: 30px;
      box-sizing: border-box;
    }

    .trajanje-i-obnova-container1 {
      font-size: 19px;
    }

    .trajanje-i-obnova-isia-licenc-wrapper {
      height: auto;
      box-sizing: border-box;
    }

    .dropdown2 {
      gap: 26px 105px;
    }

    .korak-demonstrator-skijanja {
      font-size: 24px;
      white-space: normal;
    }

    .saznaj-vie2 {
      font-size: 16px;
      letter-spacing: 3px;
    }

    .status-dravnog-demonstratora-container {
      font-size: 19px;
    }

    .status-dravnog-demonstratora-wrapper {
  
      box-sizing: border-box;
    }

    .dropdown3 {
      gap: 37px 149px;
    }

    .korak-demo-team {
      font-size: 24px;
    }

    .prema-rang-listi-container {
      font-size: 16px;
    }

    .prema-rang-listi-rezultata-dem-wrapper {
      padding-top: 30px;
      padding-bottom: 10px;
      box-sizing: border-box;
    }

    .button-component {
      padding-top: 29px;
      box-sizing: border-box;
    }

    .savjeti-isia-card {
      font-size: 24px;
    }

    .savjeti-isia-uitelj-skijanjadaskanja-container1 {
      font-size: 16px;
    }

    .saznaj-vie3 {
      font-size: 16px;
      letter-spacing: 3px;
    }

    .savjeti-isia-card-je-container {
      font-size: 19px;
    }

    .value-sifter {
   
      box-sizing: border-box;
    }

    .dropdown4 {
      gap: 18px 72px;
    }

    .iaess-licenca {
      font-size: 24px;
    }

    .saznaj-vie4 {
      font-size: 16px;
      letter-spacing: 3px;
    }

    .trajanje-i-obnova-container2 {
      font-size: 19px;
    }

    .data-transformer {

      box-sizing: border-box;
    }

    .dropdown5 {
      gap: 18px 72px;
    }

    .savjeti-trener-skijanjadaskanja {
      font-size: 24px;
    }

    .saznaj-vie5 {
      font-size: 16px;
      letter-spacing: 3px;
    }

    .savjeti-trener-skijanjadaskanja-parent {
      gap: 20px 81px;
    }

    .trajanje-i-obnova-container3 {
      font-size: 19px;
    }

    .function-library {

      box-sizing: border-box;
    }

    .dropdown6 {
      gap: 18px 72px;
    }

    .da-bi-osoba-container {
      font-size: 19px;
    }

    .conditional-link {
      flex-direction: column;
      gap: 20px 41px;
      align-items: center;
      justify-content: flex-start;
      padding-top: 40px;
      padding-right: 50px;
      padding-bottom: 40px;
      box-sizing: border-box;
    }


    .assignment-operator {
      padding-top: 0px;
      padding-bottom: 30px;
      padding-left: 30px;
      padding-right: 30px;
    }
    .prema-rang-listi-rezultata-dem-wrapper {
      padding-top: 0px;
      padding-bottom: 30px;
      padding-left: 30px;
      padding-right: 30px;
    }
    .savjeti-isia-card-je-container {
      padding-bottom: 30px;

    }

    .value-sifter {
      padding-top: 0px;
      padding-bottom: 30px;
      padding-left: 30px;
      padding-right: 30px;
    }
    .trajanje-i-obnova-isia-licenc-wrapper {
      padding-top: 0px;
      padding-bottom: 30px;
      padding-left: 30px;
      padding-right: 30px;
    }
    .function-library {
      padding-top: 0px;
      padding-bottom: 30px;
      padding-left: 30px;
      padding-right: 30px;
    }
    .data-transformer {
      padding-top: 0px;
      padding-bottom: 30px;
      padding-left: 30px;
      padding-right: 30px;
    }


  }




  @media screen and (max-width: 380px) {
    .savjeti-za-lanove {
      font-size: 22px;
    }

    .savjeti-za-lanove-container {
      font-size: 14px;
    }

    .additional-options {
      height: auto;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-right: 42px;
      box-sizing: border-box;
    }

    .korak-ivsi-licenca {
      font-size: 22px;
    }

    .saznaj-vie {
      font-size: 14px;
    }

    .trajanje-i-obnova-container {
      font-size: 17px;
    }

    .assignment-operator {
      height: auto;
   
      box-sizing: border-box;
    }

    .dropdown1 {
      gap: 30px 120px;
    }

    .korak-isia-licenca {
      font-size: 22px;
    }

    .saznaj-vie1 {
      font-size: 14px;
    }

    .transformer-chain-parent {
      gap: 46px 27px;
      padding-top: 30px;
      box-sizing: border-box;
    }

    .trajanje-i-obnova-container1 {
      font-size: 17px;
    }

    .trajanje-i-obnova-isia-licenc-wrapper {
      height: auto;

      box-sizing: border-box;
    }

    .dropdown2 {
      gap: 26px 105px;
    }

    .korak-demonstrator-skijanja {
      font-size: 22px;
    }

    .saznaj-vie2 {
      font-size: 14px;
    }

    .status-dravnog-demonstratora-container {
      font-size: 17px;
    }

    .status-dravnog-demonstratora-wrapper {
   
      box-sizing: border-box;
    }

    .dropdown3 {
      gap: 37px 149px;
    }

    .korak-demo-team {
      font-size: 22px;
    }

    .prema-rang-listi-container {
      font-size: 14px;
    }

    .prema-rang-listi-rezultata-dem-wrapper {
      padding-top: 30px;
      padding-bottom: 10px;
      box-sizing: border-box;
    }

    .button-component {
      padding-top: 29px;
      box-sizing: border-box;
    }

    .savjeti-isia-card {
      font-size: 22px;
    }

    .savjeti-isia-uitelj-skijanjadaskanja-container1 {
      font-size: 14px;
    }

    .saznaj-vie3 {
      font-size: 14px;
    }

    .savjeti-isia-card-je-container {
      font-size: 17px;
    }

    .value-sifter {
  
      box-sizing: border-box;
    }

    .dropdown4 {
      gap: 18px 72px;
    }

    .iaess-licenca {
      font-size: 22px;
    }

    .saznaj-vie4 {
      font-size: 14px;
    }

    .trajanje-i-obnova-container2 {
      font-size: 17px;
    }

    .data-transformer {
 
      box-sizing: border-box;
    }

    .dropdown5 {
      gap: 18px 72px;
    }

    .savjeti-trener-skijanjadaskanja {
      font-size: 22px;
    }

    .saznaj-vie5 {
      font-size: 14px;
    }

    .savjeti-trener-skijanjadaskanja-parent {
      gap: 20px 81px;
    }

    .trajanje-i-obnova-container3 {
      font-size: 17px;
    }

    .function-library {

      box-sizing: border-box;
    }

    .dropdown6 {
      gap: 18px 72px;
    }

    .da-bi-osoba-container {
      font-size: 17px;
    }

    .conditional-link {
      flex-direction: column;
      gap: 20px 41px;
      align-items: center;
      justify-content: flex-start;
      padding-top: 40px;
      padding-right: 50px;
      padding-bottom: 40px;
      box-sizing: border-box;
    }

  }

  @media screen and (min-width: 1350px) {
  .rectangle-parent32 {
    max-width: 50%;
  }
  .rectangle-parent36 {
    max-width: 50%;
  }
  .interface-icon {
    max-width: 50%;
  }
  .frame-child67 {
    max-width: 50%;
  }
  .lifetime-i-s-i-a {
    max-width: 50%;
  }
  .licence-renewal-inner {
    max-width: 50%;
  }
  .frame-child75 {
    max-width: 50%;
  }
  .frame-wrapper9 {
    justify-content: center;
    width: 50%;
  }
  .trainer-profile {
    justify-content: center;
    width: 50%;
  }
  .image-upload {
    justify-content: center;
    width: 50%;
  }
  .button-component {
    justify-content: center;
    width: 50%;
  }
  .image-upload1 {
    justify-content: center;
    width: 50%;
  }
  .image-upload2 {
    justify-content: center;
    width: 50%;
  }
  .frame-wrapper13 {
    justify-content: center;
    width: 50%;
  }

}

  
  ul {
  list-style-type: disc; /* Add bullet points */
}
</style>
