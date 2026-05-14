<?php
$title       = 'Spojte se s námi | Finanční poradenství';
$description = 'Každá dobrá spolupráce začíná rozhovorem. Ozvěte se nám a společně najdeme ten správný první krok k Vaší finanční stabilitě.';
$keywords    = 'kontakt, finanční poradenství, konzultace, nezávazná schůzka';
include '../components/header.php';

$activePage = 'kontakt';
include '../components/main-menu.php';
?>

<main class="pt-20">
  <!-- Hero Title Section -->
  <section class="max-w-[1280px] mx-auto px-gutter pt-stack-lg pb-stack-md">
    <h1 class="font-display-xl text-display-xl text-primary mb-base">Spojte se s námi</h1>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
      Každá dobrá spolupráce začíná rozhovorem. Ozvěte se nám a společně najdeme ten správný první krok.
    </p>
  </section>

  <!-- Dvousloupcový obsah -->
  <section class="max-w-[1280px] mx-auto px-gutter grid grid-cols-1 lg:grid-cols-2 gap-0 mb-section-gap">
    <!-- Levá strana: kontaktní info a mapa -->
    <div class="bg-surface-container-lowest p-stack-lg lg:p-16 border-l border-t border-b border-outline-variant/30">
      <div class="space-y-stack-lg mb-stack-lg">
        <div>
          <span class="font-label-caps text-secondary block mb-stack-sm uppercase">Identifikace společnosti</span>
          <h2 class="font-headline-md text-headline-md text-primary mb-base">Finanční poradenství</h2>
          <dl class="space-y-stack-sm">
            <div class="flex flex-col sm:flex-row sm:gap-4">
              <dt class="font-label-caps text-secondary uppercase shrink-0 w-40">IČO</dt>
              <dd class="font-body-md text-body-md text-on-surface">022 62 975</dd>
            </div>
            <div class="flex flex-col sm:flex-row sm:gap-4">
              <dt class="font-label-caps text-secondary uppercase shrink-0 w-40">Spisová značka</dt>
              <dd class="font-body-md text-body-md text-on-surface-variant">C 80725 vedená u Krajského soudu v Brně</dd>
            </div>
            <div class="flex flex-col sm:flex-row sm:gap-4">
              <dt class="font-label-caps text-secondary uppercase shrink-0 w-40">Sídlo</dt>
              <dd class="font-body-md text-body-md text-on-surface-variant">Pražákova 1008/69, Brno-město, 639 00 Brno</dd>
            </div>
          </dl>
        </div>
        <div>
          <span class="font-label-caps text-secondary block mb-stack-sm uppercase">Provozovny</span>
          <ul class="space-y-stack-sm">
            <li class="flex gap-3 items-start">
              <span class="material-symbols-outlined text-secondary text-base mt-0.5 shrink-0">location_on</span>
              <div>
                <p class="font-body-md text-body-md text-on-surface font-semibold">Centrála</p>
                <p class="font-body-md text-body-md text-on-surface-variant">AZ TOWER, 11. patro, Pražákova 1008/69, 639 00 Brno</p>
              </div>
            </li>
            <li class="flex gap-3 items-start">
              <span class="material-symbols-outlined text-secondary text-base mt-0.5 shrink-0">location_on</span>
              <div>
                <p class="font-body-md text-body-md text-on-surface font-semibold">Kancelář Kroměříž</p>
                <p class="font-body-md text-body-md text-on-surface-variant">Tovačovského 2784/24, Kroměříž</p>
              </div>
            </li>
            <li class="flex gap-3 items-start">
              <span class="material-symbols-outlined text-secondary text-base mt-0.5 shrink-0">location_on</span>
              <div>
                <p class="font-body-md text-body-md text-on-surface font-semibold">Kancelář Břeclav</p>
                <p class="font-body-md text-body-md text-on-surface-variant">nám. T. G. Masaryka 302/8, Břeclav</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- Mapa -->
      <div class="relative w-full aspect-video lg:aspect-[4/3] overflow-hidden rounded-sm bg-surface-container shadow-sm border border-outline-variant/20">
        <img
          class="w-full h-full object-cover map-container"
          alt="Mapa lokace kanceláře – čtvrť Mayfair, Londýn"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzq1xi-LrxBGgAOlUUWsEFi_-Va0u2-g8Pg117jQnZrBQB0-RGR9r7RkieGawy1vegyxxea0UAPVymcqUUndqydpyFhVU2iJ0-WlFscTvipBVNiVcTjo4-1oRxwh-Ps1l_AwnUrVTAB5jH6RMQqY2DZFLl4li3SQIEWWGzvyGjb5cXjXl9h8LYlmjAAcCxNnqGBKkfot4xShX2-wYEhnQd1ldyYJL-495Bl6OlF1JKhJNcGh1Wxu3lfRtzsITdijoIm8aQjWKbGyQ" />
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
          <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center shadow-xl border-4 border-white">
            <span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">location_on</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Pravá strana: formulář -->
    <div class="bg-primary p-stack-lg lg:p-16 flex flex-col justify-center">
      <div class="mb-stack-lg">
        <span class="font-label-caps text-secondary-fixed block mb-stack-sm uppercase">Sjednejte konzultaci</span>
        <h2 class="font-headline-md text-headline-md text-on-primary">Nezávazná konzultace zdarma</h2>
        <p class="font-body-md text-body-md text-on-primary-container mt-base">
          Vyplňte formulář a my se vám ozveme pro domluvení termínu osobního setkání.
        </p>
      </div>
      <form class="space-y-stack-md" method="post" action="#">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
          <div>
            <label class="font-label-caps text-on-primary-container block mb-base uppercase">Jméno a příjmení</label>
            <input
              class="w-full bg-transparent border-0 border-b border-outline-variant/40 text-on-primary py-base focus:ring-0 focus:border-secondary-fixed transition-colors placeholder:text-outline"
              placeholder="Jan Novák"
              type="text"
              name="name" />
          </div>
          <div>
            <label class="font-label-caps text-on-primary-container block mb-base uppercase">E-mailová adresa</label>
            <input
              class="w-full bg-transparent border-0 border-b border-outline-variant/40 text-on-primary py-base focus:ring-0 focus:border-secondary-fixed transition-colors placeholder:text-outline"
              placeholder="jan.novak@email.cz"
              type="email"
              name="email" />
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
          <div>
            <label class="font-label-caps text-on-primary-container block mb-base uppercase">Oblast zájmu</label>
            <select
              class="w-full bg-transparent border-0 border-b border-outline-variant/40 text-on-primary py-base focus:ring-0 focus:border-secondary-fixed transition-colors appearance-none cursor-pointer"
              name="interest">
              <option class="bg-primary">Finanční audit</option>
              <option class="bg-primary">Finanční plán</option>
              <option class="bg-primary">Péče o investiční majetek</option>
              <option class="bg-primary">Zajištění rizik</option>
            </select>
          </div>
          <div>
            <label class="font-label-caps text-on-primary-container block mb-base uppercase">Velikost portfolia</label>
            <select
              class="w-full bg-transparent border-0 border-b border-outline-variant/40 text-on-primary py-base focus:ring-0 focus:border-secondary-fixed transition-colors appearance-none cursor-pointer"
              name="portfolio">
              <option class="bg-primary">5–10 mil. Kč</option>
              <option class="bg-primary">10–50 mil. Kč</option>
              <option class="bg-primary">50 mil. Kč a více</option>
            </select>
          </div>
        </div>
        <div>
          <label class="font-label-caps text-on-primary-container block mb-base uppercase">Popis situace</label>
          <textarea
            class="w-full bg-transparent border-0 border-b border-outline-variant/40 text-on-primary py-base focus:ring-0 focus:border-secondary-fixed transition-colors placeholder:text-outline resize-none"
            placeholder="Stručně popište, s čím Vám můžeme pomoci..."
            rows="4"
            name="message"></textarea>
        </div>
        <div class="pt-stack-md">
          <button
            class="w-full md:w-auto px-stack-lg py-stack-sm bg-secondary-fixed text-on-secondary-fixed font-label-caps uppercase tracking-widest hover:bg-secondary-fixed/90 transition-all flex items-center justify-center gap-base"
            type="submit">
            Odeslat poptávku
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
          </button>
        </div>
        <p class="font-label-caps text-on-primary-container mt-stack-md opacity-60">
          * Veškerá komunikace je přísně důvěrná a podléhá zásadám ochrany osobních údajů.
        </p>
      </form>
    </div>
  </section>
</main>

<?php include '../components/footer.php'; ?>