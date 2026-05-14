<?php

/**
 * Hlavní navigace
 *
 * Vstupní proměnná:
 *   $activePage (string) – klíč aktivní stránky
 *
 * Dostupné klíče:
 *   nase-sluzby | sprava-majetku | vzdelavani | o-nas | kariera | kontakt
 */

$navItems = [
  'nase-sluzby'    => ['label' => 'Naše služby',    'href' => BASE_URL . '/'],
  'sprava-majetku' => ['label' => 'Správa majetku', 'href' => BASE_URL . '/pages/investment-asset-management'],
  'vzdelavani'     => ['label' => 'Vzdělávání',     'href' => '#'],
  'o-nas'          => ['label' => 'O nás',          'href' => '#'],
  'kariera'        => ['label' => 'Kariéra',        'href' => '#'],
  'kontakt'        => ['label' => 'Kontakt',        'href' => BASE_URL . '/pages/contact'],
];

$activePage = $activePage ?? '';
?>
<header class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30">
  <div class="max-w-[1280px] mx-auto flex justify-between items-center px-gutter h-20">
    <a class="no-underline" href="<?= BASE_URL ?>/">
      <img src="<?= BASE_URL ?>/img/logo.svg" alt="Aurelius Private" class="h-10 w-auto" />
    </a>

    <!-- Desktop nav (lg+) -->
    <nav class="hidden lg:flex items-center gap-stack-md">
      <?php foreach ($navItems as $key => $item): ?>
        <?php if ($key === $activePage): ?>
          <a
            class="font-body-md text-body-md tracking-wider uppercase whitespace-nowrap text-secondary border-b-2 border-secondary pb-1 transition-colors duration-300"
            href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['label']) ?></a>
        <?php else: ?>
          <a
            class="font-body-md text-body-md tracking-wider uppercase whitespace-nowrap text-on-surface hover:text-secondary transition-colors duration-300"
            href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['label']) ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <div class="flex items-center gap-3">
      <button class="bg-primary text-on-primary px-4 py-stack-sm font-label-sm text-sm uppercase tracking-widest whitespace-nowrap hover:bg-primary-container transition-colors">
        Klientská zóna
      </button>
      <!-- Hamburger (below lg) -->
      <button
        id="hamburger-btn"
        class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 text-primary"
        aria-label="Otevřít menu"
        aria-expanded="false"
        aria-controls="mobile-drawer">
        <span class="block w-6 h-0.5 bg-current transition-all duration-300" id="ham-line-1"></span>
        <span class="block w-6 h-0.5 bg-current transition-all duration-300" id="ham-line-2"></span>
        <span class="block w-6 h-0.5 bg-current transition-all duration-300" id="ham-line-3"></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile drawer overlay -->
<div
  id="drawer-overlay"
  class="fixed inset-0 z-40 bg-black/40 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300"
  aria-hidden="true"></div>

<!-- Mobile drawer -->
<aside
  id="mobile-drawer"
  class="fixed top-0 right-0 z-50 h-full w-72 bg-surface shadow-2xl translate-x-full transition-transform duration-300 flex flex-col"
  aria-label="Mobilní navigace"
  aria-hidden="true">
  <div class="flex items-center justify-between px-6 h-20 border-b border-outline-variant/30">
    <img src="<?= BASE_URL ?>/img/logo.svg" alt="Aurelius Private" class="h-8 w-auto" />
    <button id="drawer-close-btn" class="text-primary" aria-label="Zavřít menu">
      <span class="material-symbols-outlined">close</span>
    </button>
  </div>
  <nav class="flex flex-col px-6 py-stack-md gap-1 flex-1 overflow-y-auto">
    <?php foreach ($navItems as $key => $item): ?>
      <a
        class="font-body-md text-body-md tracking-wider uppercase whitespace-nowrap py-stack-sm border-b border-outline-variant/20 transition-colors duration-200 <?= $key === $activePage ? 'text-secondary font-semibold' : 'text-on-surface hover:text-secondary' ?>"
        href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['label']) ?></a>
    <?php endforeach; ?>
  </nav>
</aside>

<script>
  (function() {
    const btn = document.getElementById('hamburger-btn');
    const drawer = document.getElementById('mobile-drawer');
    const overlay = document.getElementById('drawer-overlay');
    const closeBtn = document.getElementById('drawer-close-btn');

    function openDrawer() {
      drawer.classList.remove('translate-x-full');
      overlay.classList.remove('hidden', 'opacity-0');
      requestAnimationFrame(() => overlay.classList.add('opacity-100'));
      drawer.setAttribute('aria-hidden', 'false');
      btn.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
      drawer.classList.add('translate-x-full');
      overlay.classList.remove('opacity-100');
      overlay.classList.add('opacity-0');
      setTimeout(() => overlay.classList.add('hidden'), 300);
      drawer.setAttribute('aria-hidden', 'true');
      btn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }

    btn.addEventListener('click', openDrawer);
    closeBtn.addEventListener('click', closeDrawer);
    overlay.addEventListener('click', closeDrawer);
  })();
</script>