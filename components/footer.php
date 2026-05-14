<footer class="bg-primary text-on-primary w-full py-stack-lg border-t border-primary-container">
  <div class="max-w-[1280px] mx-auto px-gutter grid grid-cols-1 md:grid-cols-2 gap-stack-md">
    <div class="space-y-stack-sm">
      <div class="font-headline-md text-headline-md text-on-primary">AURELIUS PRIVATE</div>
      <p class="font-body-md text-on-primary-container max-w-sm">
        Finanční poradenství s přehledem a jistotou. Nezávislost, transparentnost a dlouhodobé partnerství.
      </p>
      <p class="font-body-md text-body-md text-on-primary-container mt-stack-md">
        © <?= date('Y') ?> Finanční poradenství. Všechna práva vyhrazena.
      </p>
    </div>
    <div class="flex flex-col md:items-end justify-between">
      <div class="flex flex-wrap gap-x-stack-md gap-y-stack-sm md:justify-end">
        <a class="font-body-md text-body-md text-on-primary-container hover:text-secondary-fixed transition-colors" href="#">Ochrana soukromí</a>
        <a class="font-body-md text-body-md text-on-primary-container hover:text-secondary-fixed transition-colors" href="#">Obchodní podmínky</a>
        <a class="font-body-md text-body-md text-on-primary-container hover:text-secondary-fixed transition-colors" href="#">Regulatorní info</a>
        <a class="font-body-md text-body-md text-on-primary-container hover:text-secondary-fixed transition-colors" href="#">Cookies</a>
        <a class="font-body-md text-body-md text-on-primary-container hover:text-secondary-fixed transition-colors" href="<?= BASE_URL ?>/pages/contact">Kontakt</a>
      </div>
      <div class="flex gap-stack-md mt-stack-lg">
        <span class="material-symbols-outlined text-secondary-fixed cursor-pointer hover:opacity-80">lock_open</span>
        <span class="material-symbols-outlined text-secondary-fixed cursor-pointer hover:opacity-80">language</span>
        <span class="material-symbols-outlined text-secondary-fixed cursor-pointer hover:opacity-80">mail</span>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
