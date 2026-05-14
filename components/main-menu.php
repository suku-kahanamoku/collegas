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
    'nase-sluzby'    => ['label' => 'Naše služby',    'href' => '/'],
    'sprava-majetku' => ['label' => 'Správa majetku', 'href' => '/pages/investment-asset-management.php'],
    'vzdelavani'     => ['label' => 'Vzdělávání',     'href' => '#'],
    'o-nas'          => ['label' => 'O nás',          'href' => '#'],
    'kariera'        => ['label' => 'Kariéra',        'href' => '#'],
    'kontakt'        => ['label' => 'Kontakt',        'href' => '/pages/contact.php'],
];

$activePage = $activePage ?? '';
?>
<header class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30">
  <div class="max-w-[1280px] mx-auto flex justify-between items-center px-gutter h-20">
    <a class="font-headline-md text-headline-md font-normal tracking-tighter text-primary no-underline" href="/">
      AURELIUS PRIVATE
    </a>
    <nav class="hidden md:flex items-center gap-stack-lg">
      <?php foreach ($navItems as $key => $item): ?>
        <?php if ($key === $activePage): ?>
          <a
            class="font-body-md text-body-md tracking-wider uppercase text-secondary border-b-2 border-secondary pb-1 transition-colors duration-300"
            href="<?= htmlspecialchars($item['href']) ?>"
          ><?= htmlspecialchars($item['label']) ?></a>
        <?php else: ?>
          <a
            class="font-body-md text-body-md tracking-wider uppercase text-on-surface hover:text-secondary transition-colors duration-300"
            href="<?= htmlspecialchars($item['href']) ?>"
          ><?= htmlspecialchars($item['label']) ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>
    <button class="bg-primary text-on-primary px-stack-md py-stack-sm font-label-caps uppercase tracking-widest hover:bg-primary-container transition-colors">
      Klientská zóna
    </button>
  </div>
</header>
