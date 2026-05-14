<?php
// Detect project base URL – works regardless of which subfolder the project lives in
if (!defined('BASE_URL')) {
    $__dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    if (basename($__dir) === 'pages') {
        $__dir = dirname($__dir);
    }
    define('BASE_URL', rtrim($__dir === '.' ? '' : $__dir, '/'));
}
?>
<!DOCTYPE html>
<html class="light" lang="cs">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title><?= htmlspecialchars($title ?? '') ?></title>
  <?php if (!empty($description)): ?>
  <meta name="description" content="<?= htmlspecialchars($description) ?>" />
  <?php endif; ?>
  <?php if (!empty($keywords)): ?>
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>" />
  <?php endif; ?>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "on-secondary-fixed": "#261900",
            "on-primary": "#ffffff",
            "surface-container-highest": "#e2e2e2",
            "on-surface": "#1a1c1c",
            "inverse-surface": "#2f3131",
            secondary: "#745b26",
            "on-error": "#ffffff",
            "primary-container": "#1d3f33",
            "on-secondary-container": "#795f29",
            "surface-bright": "#f9f9f9",
            "inverse-primary": "#aacfbe",
            "on-primary-fixed-variant": "#2b4d41",
            outline: "#717974",
            error: "#ba1a1a",
            "on-tertiary-container": "#a4a2a2",
            "secondary-fixed": "#ffdea3",
            "tertiary-container": "#393939",
            "on-tertiary": "#ffffff",
            "on-secondary": "#ffffff",
            "on-secondary-fixed-variant": "#5a4310",
            "on-background": "#1a1c1c",
            "surface-dim": "#dadada",
            "on-tertiary-fixed-variant": "#474746",
            "surface-container-low": "#f3f3f3",
            "on-primary-container": "#86aa9b",
            surface: "#f9f9f9",
            "tertiary-fixed": "#e5e2e1",
            "outline-variant": "#c1c8c3",
            primary: "#04291e",
            "surface-container-lowest": "#ffffff",
            "surface-tint": "#436558",
            "surface-container": "#eeeeee",
            "surface-variant": "#e2e2e2",
            tertiary: "#242423",
            "primary-fixed-dim": "#aacfbe",
            "secondary-container": "#ffdb99",
            "primary-fixed": "#c5ebda",
            background: "#f9f9f9",
            "on-error-container": "#93000a",
            "secondary-fixed-dim": "#e4c283",
            "inverse-on-surface": "#f1f1f1",
            "on-surface-variant": "#414845",
            "error-container": "#ffdad6",
            "tertiary-fixed-dim": "#c8c6c5",
            "on-tertiary-fixed": "#1c1b1b",
            "surface-container-high": "#e8e8e8",
            "on-primary-fixed": "#002117",
          },
          borderRadius: {
            DEFAULT: "0.25rem",
            lg: "0.5rem",
            xl: "0.75rem",
            full: "9999px",
          },
          spacing: {
            "margin-mobile": "20px",
            "stack-sm": "12px",
            "container-max": "1280px",
            gutter: "32px",
            base: "8px",
            "section-gap": "120px",
            "stack-lg": "48px",
            "stack-md": "24px",
          },
          fontFamily: {
            "headline-md": ["Noto Serif"],
            "display-xl": ["Noto Serif"],
            "headline-lg": ["Noto Serif"],
            "body-lg": ["Work Sans"],
            "body-md": ["Work Sans"],
            "label-caps": ["Work Sans"],
          },
          fontSize: {
            "headline-md": ["32px", { lineHeight: "1.3", fontWeight: "400" }],
            "display-xl": ["64px", { lineHeight: "1.1", letterSpacing: "-0.02em", fontWeight: "400" }],
            "headline-lg": ["40px", { lineHeight: "1.2", fontWeight: "400" }],
            "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
            "body-md": ["16px", { lineHeight: "1.6", fontWeight: "400" }],
            "label-caps": ["12px", { lineHeight: "1.4", letterSpacing: "0.1em", fontWeight: "600" }],
          },
        },
      },
    };
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      display: inline-block;
      vertical-align: middle;
    }
    .gold-underline {
      position: relative;
    }
    .gold-underline::after {
      content: "";
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 100%;
      height: 1px;
      background-color: #745b26;
    }
    .hero-gradient {
      background: linear-gradient(to bottom, rgba(4, 41, 30, 0.4), rgba(4, 41, 30, 0.7));
    }
    .map-container {
      filter: grayscale(1) contrast(1.1) brightness(0.9);
    }
  </style>
</head>
<body class="bg-background text-on-surface font-body-md selection:bg-secondary-container selection:text-on-secondary-container">
