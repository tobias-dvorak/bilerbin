// ── Smooth scroll ────────────────────────────────────────
function smoothJump(e, id) {
  if (e) e.preventDefault();
  const el = document.getElementById(id);
  if (!el) return;
  const offset = parseInt(getComputedStyle(document.getElementById('site-header')).height) || 64;
  const top = el.getBoundingClientRect().top + window.scrollY - offset + 60;
  window.scrollTo({ top, behavior: 'smooth' });
}

// ── Header scroll behaviour ──────────────────────────────
const header   = document.getElementById('site-header');
const navRight = document.getElementById('nav-right');

// ── Logo centre offset (Safari-safe: transform-only positioning) ──
// `--logo-x` is the pixel value that centres the 105px logo ring inside
// .header-inner. Recalculated on load and every resize so the non-scrolled
// state always snaps to the correct pixel value rather than using left:50%.
const headerLogo  = header.querySelector('.header-logo');
const headerInner = header.querySelector('.header-inner');
function updateLogoCenterOffset() {
  const cx = (headerInner.offsetWidth - 105) / 2; // 105 = non-scrolled ring width
  headerLogo.style.setProperty('--logo-x', Math.round(cx) + 'px');
}
updateLogoCenterOffset();
window.addEventListener('resize', updateLogoCenterOffset, { passive: true });

// All nav items in order (for scrolled right nav)
const ALL_NAV = [
  { href: 'o-nas',    label: 'O nás'        },
  { href: 'kavarna',  label: 'Kavárna'      },
  { href: 'oaza',     label: 'Oáza zdraví'  },
  { href: 'produkty', label: 'Produkty'     },
  { href: 'kontakt',  label: 'Kontakt'      },
];
// Right nav in landing state (last 3 items)
const LANDING_RIGHT = ALL_NAV.slice(2);

function buildNavRight(items) {
  navRight.innerHTML = items.map(n =>
    `<a href="#${n.href}" class="nav-link" onclick="smoothJump(event,'${n.href}')">${n.label}</a>`
  ).join('');
  updateActiveLinks();
}

// ── Dropdown (landing state) ─────────────────────────────
const navMenuBtn  = document.getElementById('nav-menu-btn');
const navDropdown = document.getElementById('nav-dropdown');

function closeDropdown() {
  navDropdown.classList.remove('open');
  navMenuBtn.setAttribute('aria-expanded', 'false');
}
navMenuBtn.addEventListener('click', e => {
  e.stopPropagation();
  const open = navDropdown.classList.toggle('open');
  navMenuBtn.setAttribute('aria-expanded', open);
});
document.addEventListener('click', e => {
  if (!navMenuBtn.contains(e.target) && !navDropdown.contains(e.target)) closeDropdown();
});

let wasScrolled = false;
function onScroll() {
  const scrolled = window.scrollY > 120;
  if (scrolled !== wasScrolled) {
    wasScrolled = scrolled;
    header.classList.toggle('scrolled', scrolled);
    if (scrolled) closeDropdown();
    buildNavRight(scrolled ? ALL_NAV : LANDING_RIGHT);
  }
  updateActiveLinks();
}

// ── Scroll spy ───────────────────────────────────────────
const SECTION_IDS = ['hero', 'o-nas', 'kavarna', 'oaza', 'produkty', 'kontakt'];

function updateActiveLinks() {
  // If the user has scrolled to the bottom of the page (footer can't reach
  // the spy threshold because it starts too close to the scroll limit),
  // highlight Kontakt unconditionally.
  const atBottom =
    window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - 40;

  let cur = SECTION_IDS[0];
  if (atBottom) {
    cur = 'kontakt';
  } else {
    const y = window.scrollY + 130;
    for (const id of SECTION_IDS) {
      const el = document.getElementById(id);
      if (el && el.offsetTop <= y) cur = id;
    }
  }
  document.querySelectorAll('.nav-link').forEach(a => {
    const id = a.getAttribute('href')?.replace('#', '');
    a.classList.toggle('active', id === cur);
  });
}

window.addEventListener('scroll', onScroll, { passive: true });
onScroll(); // init

// ── Mobile menu ──────────────────────────────────────────
const mobileToggle = document.getElementById('mobile-toggle');
const mobileDrawer = document.getElementById('mobile-drawer');

function setMobileOpen(open) {
  // Zero out background/border transition for this frame so the colour change is instant
  header.style.setProperty('--bg-trans', '0s');
  mobileDrawer.classList.toggle('open', open);
  mobileToggle.setAttribute('aria-expanded', open);
  header.classList.toggle('mobile-open', open);
  // Restore the normal transition speed after the paint
  requestAnimationFrame(() => header.style.removeProperty('--bg-trans'));
}

mobileToggle.addEventListener('click', () => {
  setMobileOpen(!mobileDrawer.classList.contains('open'));
});

function closeMobile() {
  setMobileOpen(false);
}

// ── Menu day switcher ────────────────────────────────────
const MENU_DAYS = [
  { name: 'Pondělí 23. 3.', items: [
    { type: 'Polévka',  name: 'Mrkvová s ďumbírem' },
    { type: 'Jídlo 1',  name: 'Thajské zelené curry, basmati' },
    { type: 'Jídlo VS', name: 'Pečená kořenová zelenina, jáhly' },
  ]},
  { name: 'Úterý 24. 3.', items: [
    { type: 'Polévka',  name: 'Cibulačka s hřibovým olejem' },
    { type: 'Jídlo 1',  name: 'Domácí těstoviny, ricotta, špenát' },
    { type: 'Jídlo VS', name: 'Tofu se sezamem, jasmínová rýže' },
  ]},
  { name: 'Středa 25. 3.', items: [
    { type: 'Polévka',  name: 'Krémová květáková' },
    { type: 'Jídlo 1',  name: 'Kuře se smetanovou omáčkou a houskovým knedlíkem' },
    { type: 'Jídlo VS', name: 'Quinoa s pečenou dýní a fetou' },
  ]},
  { name: 'Čtvrtek 26. 3.', items: [
    { type: 'Polévka',  name: 'Pórková se zlatým česnekem' },
    { type: 'Jídlo 1',  name: 'Hovězí guláš s domácím chlebem' },
    { type: 'Jídlo VS', name: 'Cizrnové karí s rýží' },
  ]},
  { name: 'Pátek 27. 3.', items: [
    { type: 'Polévka',  name: 'Rybí vývar s nudlemi' },
    { type: 'Jídlo 1',  name: 'Pstruh na másle, pečené brambory' },
    { type: 'Jídlo VS', name: 'Houbové rizoto s parmezánem' },
  ]},
];

let dayIdx = 0;
const prevBtn   = document.getElementById('prev-day');
const nextBtn   = document.getElementById('next-day');
const dayName   = document.getElementById('day-name');
const menuItems = document.getElementById('menu-items');

function renderMenu() {
  const day = MENU_DAYS[dayIdx];
  dayName.textContent = day.name;
  prevBtn.disabled = dayIdx === 0;
  nextBtn.disabled = dayIdx === MENU_DAYS.length - 1;
  menuItems.innerHTML = day.items.map(it => `
    <div class="menu-item">
      <span class="menu-type">${it.type}</span>
      <div class="menu-main">${it.name}</div>
    </div>
  `).join('');
}

prevBtn.addEventListener('click', () => { if (dayIdx > 0) { dayIdx--; renderMenu(); } });
nextBtn.addEventListener('click', () => { if (dayIdx < MENU_DAYS.length - 1) { dayIdx++; renderMenu(); } });
renderMenu();

// ── Size selector ────────────────────────────────────────
document.addEventListener('click', e => {
  const btn = e.target.closest('.size-btn');
  if (!btn) return;
  const group = btn.dataset.group;
  document.querySelectorAll(`.size-btn[data-group="${group}"]`)
    .forEach(b => b.classList.toggle('active', b === btn));
});

// ── Variant chips ────────────────────────────────────────
const SIRUP_VARIANTS = [
  'Mátový', 'Bezový', 'Levandulový', 'Dýňový kořeněný', 'Rakytníkový',
  'Šípkový', 'Smrkový', 'Jahodový', 'Meduňkový', 'Heřmánkový',
  'Rybízový', 'Pampeliškový',
];
const DZEM_VARIANTS = [
  'Jahodový s vanilkou', 'Meruňkový', 'Švestkový se skořicí', 'Aróniový s červ. vínem',
  'Borůvkový', 'Hruškový s levandulí', 'Rebarborový', 'Brusinkový s pomerančem',
  'Malinový', 'Mirabelkový', 'Fíkový s rumem',
];

function renderVariants(containerId, variants, defaultActive) {
  const el = document.getElementById(containerId);
  el.innerHTML = variants.map((v, i) =>
    `<button class="variant-chip${i === defaultActive ? ' active' : ''}" type="button">${v}</button>`
  ).join('');
}
renderVariants('sirup-variants', SIRUP_VARIANTS, 3);
renderVariants('dzem-variants',  DZEM_VARIANTS,  3);

document.querySelectorAll('.variants-list').forEach(list => {
  list.addEventListener('click', e => {
    const chip = e.target.closest('.variant-chip');
    if (!chip) return;
    list.querySelectorAll('.variant-chip').forEach(c => c.classList.remove('active'));
    chip.classList.add('active');
  });
});

// ── Scroll reveal ────────────────────────────────────────
(function () {
  // Each entry is [CSS selector, per-sibling stagger in ms].
  const GROUPS = [
    ['#o-nas   .section-heading',   0  ],
    ['#o-nas   .onas-grid > *',     110],
    ['#kavarna .section-heading',   0  ],
    ['#kavarna .kavarna-grid > *',  110],
    ['#oaza    .section-heading',   0  ],
    ['#oaza    .oaza-grid > *',     110],
    ['#produkty .section-heading',  0  ],
    ['#produkty .produkty-inner > .para', 0],
    ['#produkty .product-block',    90 ],
    ['#produkty .partners-grid',    0  ],
    ['#kontakt  .footer-grid > *',  100],
    ['#kontakt  .footer-bottom',    0  ],
  ];

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    });
  }, {
    threshold: 0.08,
    rootMargin: '0px 0px -48px 0px',
  });

  GROUPS.forEach(([sel, stagger]) => {
    document.querySelectorAll(sel).forEach((el, i) => {
      el.classList.add('reveal');
      if (stagger && i > 0) el.style.transitionDelay = `${i * stagger}ms`;
      observer.observe(el);
    });
  });
})();
