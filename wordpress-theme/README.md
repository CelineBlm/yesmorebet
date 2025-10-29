# YesMoreBet - Thème WordPress

Thème WordPress pour YesMoreBet - Animation de casino fictif 100% légale et sans argent réel.

## Description

Ce thème WordPress a été créé pour présenter les services de YesMoreBet, spécialisé dans l'animation d'événements avec des animations de casino fictif sur la Côte d'Azur (Grasse, Cannes, Antibes, Nice et région Sud).

## Installation

### Méthode 1 : Installation via l'interface WordPress

1. Compressez le dossier `wordpress-theme` en fichier ZIP
2. Dans votre tableau de bord WordPress, allez dans **Apparence > Thèmes**
3. Cliquez sur **Ajouter** puis **Téléverser un thème**
4. Sélectionnez le fichier ZIP et cliquez sur **Installer maintenant**
5. Une fois installé, cliquez sur **Activer**

### Méthode 2 : Installation via FTP

1. Uploadez le dossier `wordpress-theme` dans `/wp-content/themes/` de votre installation WordPress
2. Renommez le dossier en `yesmorebet`
3. Dans votre tableau de bord WordPress, allez dans **Apparence > Thèmes**
4. Trouvez le thème "YesMoreBet" et cliquez sur **Activer**

## Configuration

### 1. Créer les pages nécessaires

Créez les pages suivantes dans **Pages > Ajouter** :

- **Accueil** (slug: `home`) - Définissez-la comme page d'accueil dans Réglages > Lecture
- **Prestations** (slug: `prestations`)
- **Galerie** (slug: `galerie`)
- **Contact** (slug: `contact`)
- **FAQ** (slug: `faq`)
- **Mentions Légales** (slug: `mentions-legales`)
- **Politique de Confidentialité** (slug: `politique-confidentialite`)
- **CGV** (slug: `cgv`)

### 2. Configurer la page d'accueil

1. Allez dans **Réglages > Lecture**
2. Sélectionnez "Une page statique"
3. Choisissez la page "Accueil" comme page d'accueil

### 3. Ajouter le logo

1. Allez dans **Apparence > Personnaliser > Identité du site**
2. Cliquez sur "Sélectionner un logo"
3. Uploadez votre logo YesMoreBet

### 4. Configurer les menus

Le thème utilise deux emplacements de menu :
- **Menu principal** : Navigation du header
- **Menu footer** : Navigation du pied de page

Pour configurer :
1. Allez dans **Apparence > Menus**
2. Créez un nouveau menu
3. Ajoutez les pages que vous souhaitez
4. Assignez-le à l'emplacement souhaité

## Fonctionnalités

### Caractéristiques principales

- ✅ Design moderne et responsive (mobile, tablette, desktop)
- ✅ Header fixe avec effet de scroll
- ✅ Navigation mobile avec menu hamburger
- ✅ Smooth scroll pour les liens d'ancrage
- ✅ Bouton de retour en haut de page
- ✅ Footer avec liens sociaux et informations de contact
- ✅ Icônes SVG intégrées
- ✅ Optimisé pour la performance
- ✅ Accessible (WCAG 2.1)

### Pages template

Le thème inclut :
- `front-page.php` : Template de la page d'accueil
- `page.php` : Template générique pour les pages
- `index.php` : Template par défaut

### Template Parts

Les sections réutilisables sont dans `/template-parts/` :
- `hero-section.php` : Section hero de la page d'accueil
- `features-section.php` : Section des fonctionnalités
- `concept-section.php` : Section concept
- `faq-section.php` : Section FAQ

## Personnalisation

### Couleurs

Les couleurs du thème sont définies dans `style.css` avec des variables CSS :

```css
:root {
  --color-primary: #FDC700;
  --color-primary-dark: #D08700;
  --color-primary-light: #FACC15;
  --color-secondary: #CA8A04;
  --color-black: #000000;
  --color-white: #FFFFFF;
  --color-gray: #99A1AF;
}
```

### Polices

Le thème utilise :
- **Quicksand** : Police principale
- **Inter** : Police secondaire

## Structure du thème

```
wordpress-theme/
├── assets/
│   ├── css/
│   │   └── custom.css
│   ├── js/
│   │   ├── navigation.js
│   │   └── smooth-scroll.js
│   └── images/
├── inc/
│   ├── svg-icons.php
│   └── template-tags.php
├── template-parts/
│   ├── hero-section.php
│   ├── features-section.php
│   ├── concept-section.php
│   └── faq-section.php
├── functions.php
├── style.css
├── index.php
├── front-page.php
├── page.php
├── header.php
├── footer.php
└── README.md
```

## Support

Pour toute question ou assistance :

- **Email** : contact@yesmorebet.fr
- **Téléphone** : +33 6 26 51 22 17
- **Zone** : Grasse, Cannes, Antibes, Nice et région Sud

## Licence

Ce thème est sous licence GNU General Public License v2 ou ultérieure.

## Crédits

- Développé pour YesMoreBet
- Design inspiré du site original React
- Polices : Google Fonts (Quicksand, Inter)

---

© 2025 YesMoreBet. Tous droits réservés. • Fait avec ❤️ sur la Côte d'Azur
