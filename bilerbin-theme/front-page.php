<?php
/**
 * Front Page Template — Bilerbin
 * Displayed when "A static page" is set as the front page in Settings → Reading.
 */

get_header();
?>

<main>

  <!-- ═══════════════════════════════════════════
       HERO
  ════════════════════════════════════════════ -->
  <section id="hero" aria-labelledby="hero-title">
    <div class="hero-tree" aria-hidden="true">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/hero-tree.png" alt="" width="1418" height="1314" loading="eager"/>
    </div>
    <div class="hero-content">
      <span class="hero-est">Domácí produkty z přírody Orlických hor</span>
      <h1 class="hero-title" id="hero-title">Bilerbin</h1>
      <p class="hero-sub">Přírodní produkty&ensp;|&ensp;Rodinná kavárna</p>
      <div class="hero-cta">
        <button class="btn btn-filled btn-lg" onclick="smoothJump(null,'produkty')">Zobrazit produkty</button>
        <button class="btn btn-lg" onclick="smoothJump(null,'kavarna')">Navštivte kavárnu</button>
      </div>
    </div>
    <a href="#o-nas" class="scroll-cue" onclick="smoothJump(event,'o-nas')" aria-label="Přejít níže">
      <span>Více o nás</span>
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M5 9l7 7 7-7" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
  </section>

  <!-- ═══════════════════════════════════════════
       O NÁS
  ════════════════════════════════════════════ -->
  <section id="o-nas" aria-labelledby="onas-title">
    <div class="section-inner" style="padding: 0 24px;">
      <header class="section-heading">
        <h2 class="section-title" id="onas-title">O nás</h2>
      </header>
      <div class="onas-grid">
        <div>
          <div class="img-slot" style="aspect-ratio: 4/5;">
            <span>rodinné foto · zahrada</span>
          </div>
        </div>
        <div class="onas-text">
          <p class="para">Vše to začalo již před deseti lety, kdy jsme se po dostudování VŠ rozhodli, že město není nic pro nás, žít chceme někde v přírodě. Během několika let se nám narodily dvě holčičky, našli jsme krásné místo v podhůří Orlických hor a postavili si dřevěný dům.</p>
          <p class="para">Ač jsme oba chemici, té chemie (a obzvláště v jídle) už nám připadá trochu moc. Snažíme se co nejvíce si vypěstovat, na naší zahradě ale nenajdete žádné přešlechtěné cizokrajné rostliny, umělá hnojiva a chemické postřiky. Uznáváme permakulturní přístup&thinsp;—&thinsp;vzorem nám jsou naše babičky, které ještě žily v souladu s přírodou.</p>
          <p class="para">Nejdříve bylo vše jen pro nás, recepty jsem postupně upravovala a vylepšovala. Rodina a kamarádi si brzy zvykli, že dárky od nás jsou většinou jedlé. A protože všem moc chutná, rozhodli jsme se zkusit vyrábět jedlé dobroty pro co nejvíce lidí, kteří to vidí stejně jako my a chtějí si pochutnávat na džemech, sirupech a slaných dobrotách bez umělých konzervantů, barviv a aromat.</p>
          <p class="para" style="color:var(--brown);font-style:italic;">A teď už je to jen na vás. Moc si přejeme aby vám chutnalo a měli jste dobrý pocit, že děláte něco pro své zdraví i naši přírodu.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       KAVÁRNA
  ════════════════════════════════════════════ -->
  <section id="kavarna" aria-labelledby="kavarna-title">
    <div class="section-inner" style="padding: 0 24px;">
      <header class="section-heading">
        <h2 class="section-title" id="kavarna-title">Kavárna</h2>
      </header>
      <div class="kavarna-grid">
        <div class="kavarna-text">
          <p class="para">Mimo výrobu sirupů a marmelád také provozujeme malou kavárnu v centru Lanškrouna. Kromě výborné kávy a bylinkových čajů můžete také ochutnat všechny naše sirupy&thinsp;—&thinsp;jako horké nápoje nebo limonády.</p>
          <p class="para">To, co vám bude nejvíce chutnat, si pak můžete odnést domů v podobě lahve bylinkového sirupu nebo sklenice marmelády. Každý den pro vás pečeme domácí dezerty, v pondělí pečeme bez lepku, často i bez mléka.</p>
          <p class="para" style="color:var(--brown);font-style:italic;">Zastavte se v čase, ve spěchu, u nás. Těšíme se.</p>
          <div style="margin-top:8px;">
            <div class="img-slot" style="aspect-ratio: 16/9;">
              <span>interiér kavárny</span>
            </div>
          </div>
        </div>

        <aside class="hours-card" aria-label="Otevírací doba">
          <h3>Otevírací doba</h3>
          <dl class="hours-table">
            <dt>pondělí</dt>  <dd class="time">9:00 – 18:00</dd>
            <dt>úterý</dt>    <dd class="time">9:00 – 18:00</dd>
            <dt>středa</dt>   <dd class="time">9:00 – 18:00</dd>
            <dt>čtvrtek</dt>  <dd class="time">9:00 – 18:00</dd>
            <dt>pátek</dt>    <dd class="time">9:00 – 18:00</dd>
            <dt>sobota</dt>   <dd class="time">9:00 – 12:00</dd>
            <dt>neděle</dt>   <dd class="time closed">zavřeno</dd>
          </dl>
          <address class="hours-addr">
            Kozinova 71, 563 01 Lanškroun<br/>
            Pod náměstím.
          </address>
        </aside>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       OÁZA ZDRAVÍ
  ════════════════════════════════════════════ -->
  <section id="oaza" aria-labelledby="oaza-title">
    <div class="section-inner" style="padding: 0 24px;">
      <header class="section-heading">
        <h2 class="section-title" id="oaza-title">Oáza zdraví</h2>
      </header>
      <div class="oaza-grid">
        <div class="oaza-text">
          <p class="para">Každý všední den si u nás můžete dát čerstvé polední menu z <a href="https://www.oaza-zdravi.cz" target="_blank" rel="noopener noreferrer"
            style="color: inherit; text-decoration: none; border: none; border-bottom: 1px solid var(--hairline); transition: border-bottom-color .2s;"
            onmouseover="this.style.setProperty('border-bottom-color','var(--brown)')" onmouseout="this.style.setProperty('border-bottom-color','var(--hairline)')">Oázy zdraví</a> — veganské kuchyně, která nám denně vozí bezmasá jídla vyrobená z kvalitních surovin.</p>
          <p class="para">Vždy nabízíme výběr ze tří variant — Polévky, Jídla I a Jídla VS. Objednávku je nutné provést nejpozději v 10:00 v předcházející den přes tlačítko níže.</p>
          <p class="para">Platba se provádí na místě v daný den. Jídlo si prosím přijďte sníst či vyzvednout mezi 11 a 14 hodinou.</p>
          <p class="para" style="font-style:italic; color:var(--brown); margin-top:4px;">Kontakt pro jakoukoliv podporu: <a href="tel:+420608706393" style="color:inherit; border:none; border-bottom:1px solid var(--hairline); transition:border-bottom-color .2s;" onmouseover="this.style.setProperty('border-bottom-color','var(--brown)')" onmouseout="this.style.setProperty('border-bottom-color','var(--hairline)')">+420&thinsp;608&thinsp;706&thinsp;393</a> — Martin</p>
          <div style="margin-top:12px;">
            <button class="btn btn-filled">Objednat</button>
          </div>
        </div>

        <div class="menu-card" role="region" aria-label="Týdenní menu">
          <div class="menu-card-head">
            <h3>Menu</h3>
            <span class="menu-week">Platné v týdnu 23.&thinsp;3. – 27.&thinsp;3.</span>
          </div>
          <div class="day-switcher">
            <button class="icon-btn" id="prev-day" aria-label="Předchozí den" disabled>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M15 5l-7 7 7 7" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            <span id="day-name">Pondělí 23. 3.</span>
            <button class="icon-btn" id="next-day" aria-label="Následující den">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M9 5l7 7-7 7" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="menu-items" id="menu-items" aria-live="polite"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       PRODUKTY
  ════════════════════════════════════════════ -->
  <section id="produkty" aria-labelledby="produkty-title">
    <div class="section-inner produkty-inner" style="padding: 0 24px;">
      <div>
        <header class="section-heading">
          <h2 class="section-title" id="produkty-title">Produkty</h2>
        </header>
        <p class="para" style="max-width:800px;">
          Máte chuť na něco dobrého? Bylinkové sirupy a marmelády si můžete objednat přes web formulář. Děkujeme za vaši podporu a přízeň&thinsp;—&thinsp;Helenka a Martin z Bilerbinu.
        </p>
      </div>

      <!-- Sirupy -->
      <article class="product-block" aria-labelledby="sirupy-title">
        <div>
          <h3 class="product-block-title" id="sirupy-title">Sirupy</h3>
          <p class="para" style="margin-top:18px;max-width:820px;">Naše sirupy obsahují jen čerstvé bylinky, pěstované v čistém prostředí Orlických hor, cukr (řepný, třtinový) nebo med a citrónovou šťávu.</p>
        </div>
        <div class="prod-grid">
          <div class="prod-card" style="background:var(--tan-warm);">
            <div class="prod-detail">
              <div>
                <h4 class="prod-name">Kořeněný dýňový sirup</h4>
                <p class="prod-desc">Podzimně laděný sirup z domácích dýní, s příměsí citronu a koření pro výraznou chuť. Ideální volba pro přípravu osvěžujících limonád, pumpkin spice latte, nebo jen jako mlsání na lžičku.</p>
              </div>
              <div class="img-slot" style="width:200px;height:220px;flex-shrink:0;">
                <span>sirup · láhev</span>
              </div>
            </div>
            <div class="prod-row">
              <div class="prod-sizes" id="sirup-sizes" role="group" aria-label="Velikost">
                <button class="size-btn active" data-group="sirup" data-size="0,5 l">0,5 l</button>
                <button class="size-btn"        data-group="sirup" data-size="1 l">1 l</button>
              </div>
              <div class="prod-price">135,- Kč</div>
            </div>
          </div>
          <div class="ingredients-card">
            <div>
              <h4>Složení</h4>
              <p>Dýňový rozvar, třtinový cukr, citronová šťáva, hřebíček, badyán, skořice, muškátový oříšek.</p>
            </div>
            <button class="btn btn-ghost-cream btn-sm">Objednat</button>
          </div>
        </div>
        <div class="variants-block">
          <h4>Další varianty</h4>
          <div class="variants-list" id="sirup-variants" role="group" aria-label="Varianty sirupů"></div>
        </div>
      </article>

      <!-- Džemy -->
      <article class="product-block" aria-labelledby="dzemy-title">
        <div>
          <h3 class="product-block-title" id="dzemy-title">Marmelády</h3>
          <p class="para" style="margin-top:18px;max-width:820px;">V džemech najdete nejméně 60 % ovoce (často i více), cukr, citrónovou šťávu a pokud je potřeba, čistý jablečný nebo citrusový pektin. Všechno ovoce pochází z lokálních zdrojů, rádi podporujeme farmáře v našem okolí. Nabízíme v balení 220 g.</p>
        </div>
        <div class="prod-grid">
          <div class="prod-card" style="background:rgb(248,231,192);">
            <div class="prod-detail">
              <div>
                <h4 class="prod-name">Aróniový extra džem s červeným vínem</h4>
                <p class="prod-desc">Aronie z vlastní zahrady, červené víno a špetka skořice. Hluboce ovocný džem k snídani na chleba, k pečenému sýru nebo do palačinek.</p>
              </div>
              <div class="img-slot" style="width:200px;height:220px;flex-shrink:0;">
                <span>džem · sklenice</span>
              </div>
            </div>
            <div class="prod-row">
              <div class="prod-sizes" role="group" aria-label="Velikost">
                <button class="size-btn active" data-group="dzem" data-size="220 g">220 g</button>
              </div>
              <div class="prod-price">110,- Kč</div>
            </div>
          </div>
          <div class="ingredients-card">
            <div>
              <h4>Složení</h4>
              <p>Aronie 65 %, třtinový cukr, červené víno, citronová šťáva, jablečný pektin, skořice.</p>
            </div>
            <button class="btn btn-ghost-cream btn-sm">Objednat</button>
          </div>
        </div>
        <div class="variants-block">
          <h4>Další varianty</h4>
          <div class="variants-list" id="dzem-variants" role="group" aria-label="Varianty džemů"></div>
        </div>
      </article>

      <!-- Kde nás najdete -->
      <div>
        <h3 style="font-family:'Italiana',serif;font-weight:400;margin:0;font-size:clamp(28px,3.4vw,40px);color:var(--ink);">Kde nás najdete</h3>
        <p class="para" style="margin-top:16px;max-width:820px;">Níže je kompletní seznam podniků, ve kterých můžete zakoupit naše domácí produkty.</p>
        <ul class="partners-grid" style="list-style:none;margin:0;padding:0;" aria-label="Seznam partnerů">
          <li class="partner-item">Kavárna Bilerbin · Lanškroun</li>
          <li class="partner-item">Šálek štěstí · Svitavy</li>
          <li class="partner-item">Pekařství Jan Mašek · Smržovka</li>
          <li class="partner-item">Cesta bez obalu · Jablonec n. N.</li>
          <li class="partner-item">Nad věcí · Poniklá</li>
          <li class="partner-item">Zdravá výživa JuTaK · Semily</li>
          <li class="partner-item">Nejen kavárna · Liberec</li>
          <li class="partner-item">Kavárna Na cestě · Jablonec n. N.</li>
          <li class="partner-item">Spižírna · Liberec</li>
          <li class="partner-item">Studio ArtTeta · Liberec</li>
          <li class="partner-item">Fabio produkt · Turnov</li>
          <li class="partner-item">Cukrárna na nám. Míru · Jablonné v Podj.</li>
          <li class="partner-item">Cukrárna U kostela · Hejnice</li>
          <li class="partner-item">Cukrárna a Kavárna Vločka · Frýdlant</li>
          <li class="partner-item">Infocentrum Riedlova vila · Desná</li>
          <li class="partner-item">Mléčný bar Naproti · Ostrava</li>
          <li class="partner-item">Farma U Stromovouse · Světlá Hora</li>
        </ul>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
