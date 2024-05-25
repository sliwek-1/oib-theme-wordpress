<?php if(is_page('oferta')) { ?> 
    <div name="Oferta" class="spacer oferta">
        <div class="info">
            <h1>Nasza Oferta</h1>
        </div>
        <div class="center">
            <div class="animation-card left" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/roller.png" alt="" class="banner-img">
                <div>
                    <h2>Układanie Nawierzchni Asfaltowych</h2>
                    <p>
                    Układanie Nawierzchni Asfaltowych to usługa polegająca na przygotowaniu i położeniu warstwy asfaltu na drogach, parkingach czy chodnikach. Proces rozpoczyna się od oceny i przygotowania podłoża, w tym usunięcia starej nawierzchni oraz wyrównania terenu. Następnie nakładana jest warstwa asfaltu, która jest równomiernie rozprowadzana i zagęszczana za pomocą specjalistycznych maszyn, takich jak walce drogowe. Celem jest stworzenie trwałej, gładkiej i bezpiecznej nawierzchni odpornej na warunki atmosferyczne i obciążenia. Usługa ta wymaga precyzji i doświadczenia, aby zapewnić długowieczność i wysoką jakość końcowego produktu.
                    </p>
                </div>
            </div>
            <div class="animation-card left">
                <div>
                    <h2>Prace ziemne</h2>
                    <p>Usługa "Prace ziemne" obejmuje różnorodne zadania związane z przygotowaniem terenu pod budowę. W skład tych prac wchodzą m.in. wykopy, niwelacja terenu, drenaż, oraz przygotowanie fundamentów. Prace ziemne są kluczowe dla stabilności i trwałości konstrukcji, dlatego wykonuje się je z użyciem specjalistycznych maszyn, takich jak koparki, spycharki czy walce. Usługa ta może również obejmować usuwanie drzew i krzewów, a także zabezpieczenie skarp. Profesjonalne wykonanie prac ziemnych gwarantuje solidne i bezpieczne podłoże pod dalsze etapy budowy, niezależnie od rodzaju projektu, od domów jednorodzinnych po duże inwestycje infrastrukturalne.</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/groundwork.png" alt="prace ziemne" />
            </div>
            <div class="animation-card left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/doradztwo.png" alt="Doradztwo Techniczne" />
                <div>
                    <h2>Doradztwo Techniczne</h2>
                    <p>
                    Usługa doradztwa technicznego w drogownictwie obejmuje kompleksowe wsparcie w zakresie planowania, projektowania, budowy oraz utrzymania dróg. Specjaliści doradzają w wyborze optymalnych technologii i materiałów, analizują dokumentację techniczną oraz przeprowadzają ekspertyzy techniczne. Wspierają także w ocenie stanu istniejącej infrastruktury, planowaniu remontów i modernizacji oraz w zarządzaniu projektami drogowymi. Doradztwo obejmuje również aspekty związane z bezpieczeństwem ruchu drogowego, ochroną środowiska oraz zgodnością z przepisami i normami. Celem jest zapewnienie trwałych, bezpiecznych i ekonomicznie efektywnych rozwiązań drogowych.
                    </p>
                </div>
            </div>
            <div class="animation-card left">
                <div>
                    <h2>Prace Brukarskie</h2>
                    <p>
                    Prace brukarskie to usługa polegająca na układaniu kostki brukowej na różnych powierzchniach, takich jak chodniki, podjazdy, tarasy czy place. Specjaliści zajmujący się tym zadaniem oferują kompleksowe podejście, obejmujące przygotowanie podłoża, dobór odpowiednich materiałów oraz precyzyjne ułożenie kostki. Usługa obejmuje także prace wykończeniowe, takie jak wypełnianie spoin czy impregnacja nawierzchni. Dzięki profesjonalnym pracom brukarskim uzyskuje się trwałe, estetyczne i funkcjonalne nawierzchnie, które poprawiają wygląd i użyteczność przestrzeni. Fachowcy zapewniają doradztwo, indywidualne podejście do każdego projektu oraz wysoką jakość wykonania.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/brukarstwo.png" alt="Prace Brukarskie" />
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="info">
        <h1>Nasza Oferta</h1>
    </div>
    <?php get_template_part('includes/oferta', 'mnioferta') ?>
<?php } ?>