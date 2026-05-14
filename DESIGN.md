---
name: Sovereign Heritage
colors:
  surface: '#f9f9f9'
  surface-dim: '#dadada'
  surface-bright: '#f9f9f9'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f3f3'
  surface-container: '#eeeeee'
  surface-container-high: '#e8e8e8'
  surface-container-highest: '#e2e2e2'
  on-surface: '#1a1c1c'
  on-surface-variant: '#414845'
  inverse-surface: '#2f3131'
  inverse-on-surface: '#f1f1f1'
  outline: '#717974'
  outline-variant: '#c1c8c3'
  surface-tint: '#436558'
  primary: '#04291e'
  on-primary: '#ffffff'
  primary-container: '#1d3f33'
  on-primary-container: '#86aa9b'
  inverse-primary: '#aacfbe'
  secondary: '#745b26'
  on-secondary: '#ffffff'
  secondary-container: '#ffdb99'
  on-secondary-container: '#795f29'
  tertiary: '#242423'
  on-tertiary: '#ffffff'
  tertiary-container: '#393939'
  on-tertiary-container: '#a4a2a2'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#c5ebda'
  primary-fixed-dim: '#aacfbe'
  on-primary-fixed: '#002117'
  on-primary-fixed-variant: '#2b4d41'
  secondary-fixed: '#ffdea3'
  secondary-fixed-dim: '#e4c283'
  on-secondary-fixed: '#261900'
  on-secondary-fixed-variant: '#5a4310'
  tertiary-fixed: '#e5e2e1'
  tertiary-fixed-dim: '#c8c6c5'
  on-tertiary-fixed: '#1c1b1b'
  on-tertiary-fixed-variant: '#474746'
  background: '#f9f9f9'
  on-background: '#1a1c1c'
  surface-variant: '#e2e2e2'
typography:
  display-xl:
    fontFamily: Noto Serif
    fontSize: 64px
    fontWeight: '400'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Noto Serif
    fontSize: 40px
    fontWeight: '400'
    lineHeight: '1.2'
  headline-md:
    fontFamily: Noto Serif
    fontSize: 32px
    fontWeight: '400'
    lineHeight: '1.3'
  body-lg:
    fontFamily: Work Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Work Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  label-caps:
    fontFamily: Work Sans
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1.4'
    letterSpacing: 0.1em
spacing:
  base: 8px
  section-gap: 120px
  container-max: 1280px
  gutter: 32px
  margin-mobile: 20px
  stack-sm: 12px
  stack-md: 24px
  stack-lg: 48px
---

## Brand & Style

This design system is engineered for a high-end financial consultancy where trust, legacy, and exclusivity are paramount. The aesthetic is rooted in **Modern Corporate Minimalism** with a strong editorial influence. It balances the stability of traditional private banking with the clarity of contemporary digital interfaces.

The visual narrative relies on "quiet luxury"—conveying value through generous whitespace, high-fidelity serif typography, and a deliberate absence of decorative clutter. Photography should focus on architectural geometry, tactile textures (fine grain, marble, dark wood), and portraits with soft, natural lighting. The interface should feel like an invitation to a private lounge: secure, composed, and tailored.

## Colors

The palette is anchored by **Forest Green** (#1D3F33) and **Deep Charcoal** (#1a1a1a), used primarily for immersive header sections, footers, and primary call-to-action backgrounds. These colors establish immediate authority and depth.

**Subtle Gold** (#C9A96C) acts as the "jewelry" of the interface. It is used sparingly for icons, active states, and focus underlines to denote exclusivity and high-tier value. 

**Light Gray** (#f4f4f4) provides a secondary background layer to break up pure white sections, creating a subtle tiered effect that prevents visual fatigue while maintaining an airy, premium feel. Text colors should prioritize high contrast, using charcoal for body text on light backgrounds and white for text on dark backgrounds.

## Typography

The typographic hierarchy utilizes a "Serif for Authority, Sans for Utility" approach. **Noto Serif** is reserved for headlines and pull-quotes to provide a literary, established quality reminiscent of high-end financial broadsheets.

**Work Sans** serves as the functional workhorse. It is selected for its neutral, professional character and excellent legibility in complex data tables or long-form consultancy reports. 

Use the **label-caps** style for metadata, section eyebrows, and small navigational elements to add an organized, structured feel to the page. Line heights are intentionally generous to ensure a relaxed reading pace.

## Layout & Spacing

The layout follows a **Fixed Grid** philosophy, centering content within a 1280px container for a focused, curated experience. Large-scale imagery and dark background sections may break the grid to span the full viewport width, creating a sense of scale.

Spacing is aggressive; "generous whitespace" is treated as a core design element rather than empty space. Section gaps are wide (120px) to allow each topic to breathe and to signal that the user's time is respected. Content should be organized in a clear vertical stack, utilizing the 8px base unit for consistent rhythm within components.

## Elevation & Depth

Hierarchy is established through **Tonal Layers** and high-contrast transitions rather than heavy shadows. 

On light backgrounds, use soft, low-opacity borders (#000000 at 8%) or subtle shifts to #f4f4f4 to define containers. On dark backgrounds, use hairline gold borders or slight value shifts in the green palette to create depth. 

Shadows should be used extremely sparingly, only for floating elements like dropdown menus or modals. When used, they must be "Ambient Shadows"—diffuse, large-radius, and low-opacity (10-15%) to avoid a "tacked-on" digital look.

## Shapes

The design system utilizes **Sharp (0px)** corners for all primary containers, buttons, and decorative elements. This architectural approach reinforces the feeling of stability, precision, and institutional strength.

Avoid rounded corners entirely, except for circular elements (like icon containers or avatars) where a perfect circle is required. The use of right angles creates a grid-aligned, structured aesthetic that aligns with high-end architectural movements.

## Components

### Buttons
Primary buttons should be Forest Green with White text or Charcoal with White text. Secondary buttons utilize a "Ghost" style with a 1px Charcoal or Gold border. Hover states should involve a subtle fill change or a slight shift in the Gold accent color.

### Cards
Cards are defined by their content rather than heavy containers. Use "invisible" cards with structured typography or cards with a 1px light gray border. Backgrounds for cards should alternate between White and Light Gray (#f4f4f4).

### Input Fields
Inputs should be minimalist, featuring only a bottom border (1px) that transitions to Gold on focus. Labels should use the `label-caps` typography style.

### Navigation
The navigation bar should be clean with significant letter spacing. Use a thin Gold underline to indicate the active page. The transition from a transparent header (on dark hero images) to a solid white header (on scroll) should be seamless.

### Interactive Accents
Use the subtle Gold color for "Read More" links, which should include a small horizontal arrow icon. Circular "Play" buttons for videos should be semi-transparent with a 1px border, following the J&T Bank aesthetic.