# Thème WordPress YesMoreBet

Thème WordPress pour YesMoreBet - Animation de casino fictif sur la Côte d'Azur

## 📋 Description

Ce thème WordPress a été créé à partir du projet React YesMoreBet. Il conserve le design or et noir caractéristique et intègre tous les contenus des pages originales avec un système de navigation WordPress natif qui résout les problèmes de navigation.

## ✨ Caractéristiques

- ✅ Design responsive (mobile-first)
- ✅ Palette de couleurs or/noir (#fdc700, #d08700, #000000)
- ✅ Police Quicksand
- ✅ Navigation WordPress native (résout les problèmes de liens)
- ✅ Menu mobile avec hamburger
- ✅ Support des menus personnalisés
- ✅ Intégration des styles Tailwind CSS
- ✅ 8 pages prêtes à l'emploi

## 📦 Installation

### 1. Télécharger le thème

Copiez le dossier `yesmorebet` dans votre répertoire de thèmes WordPress :
```
/wp-content/themes/yesmorebet/
```

### 2. Activer le thème

1. Connectez-vous à votre administration WordPress
2. Allez dans **Apparence > Thèmes**
3. Activez le thème **YesMoreBet**

### 3. Créer les pages

Créez les pages suivantes dans **Pages > Ajouter** :

#### Page d'accueil (Home)
- **Titre** : Accueil
- **Slug** : accueil
- **Contenu** : [Utilisez l'éditeur de blocs pour ajouter Hero Section, Features, Concept, FAQ]

#### Page Prestations
- **Titre** : Prestations
- **Slug** : prestations
- **Contenu** : [Ajoutez les formules, tarifs et conditions]

#### Page Galerie
- **Titre** : Galerie
- **Slug** : galerie
- **Contenu** : [Ajoutez les images de vos événements]

#### Page Contact
- **Titre** : Contact
- **Slug** : contact
- **Contenu** : [Ajoutez un formulaire de contact et vos coordonnées]

#### Page FAQ
- **Titre** : FAQ
- **Slug** : faq
- **Contenu** : [Ajoutez vos questions-réponses]

#### Page Mentions Légales
- **Titre** : Mentions légales
- **Slug** : mentions-legales
- **Contenu** : [Ajoutez les mentions légales]

#### Page Politique de Confidentialité
- **Titre** : Politique de confidentialité
- **Slug** : politique-confidentialite
- **Contenu** : [Ajoutez votre politique RGPD]

#### Page CGV
- **Titre** : Conditions Générales de Vente
- **Slug** : cgv
- **Contenu** : [Ajoutez vos CGV]

### 4. Configurer la page d'accueil

1. Allez dans **Réglages > Lecture**
2. Cochez **Une page statique**
3. Sélectionnez "Accueil" comme **Page d'accueil**

### 5. Configurer les menus

#### Menu Principal (Header)
1. Allez dans **Apparence > Menus**
2. Créez un nouveau menu nommé "Menu Principal"
3. Ajoutez les pages suivantes :
   - Le Concept (lien vers /#concept)
   - FAQ
   - Galerie
   - Contact
4. Assignez ce menu à l'emplacement **"Primary Menu"**

#### Menu Footer
1. Créez un second menu nommé "Menu Footer"
2. Ajoutez les pages :
   - Mentions légales
   - Politique de confidentialité
   - CGV
3. Assignez ce menu à l'emplacement **"Footer Menu"**

## 🎨 Personnalisation

### Couleurs du thème

Les couleurs principales sont définies dans les fichiers CSS :
- **Or primaire** : `#fdc700`
- **Or secondaire** : `#d08700`
- **Noir** : `#000000`
- **Blanc** : `#ffffff`
- **Gris clair** : `#d1d5dc`

### Police

Le thème utilise la police **Quicksand** (Google Fonts) avec les poids :
- Light (300)
- Regular (400)
- Medium (500)
- SemiBold (600)
- Bold (700)

### Logo

Pour remplacer le logo :
1. Allez dans **Apparence > Personnaliser > Identité du site**
2. Téléchargez votre logo (dimensions recommandées : 174x114 px)

## 🔧 Structure des fichiers

```
yesmorebet/
├── style.css               # Métadonnées du thème
├── functions.php           # Fonctions du thème
├── header.php              # En-tête avec navigation
├── footer.php              # Pied de page
├── index.php               # Template par défaut
├── page.php                # Template de page
├── front-page.php          # Template page d'accueil
├── assets/
│   ├── css/
│   │   └── main.css        # Styles compilés (Tailwind)
│   ├── js/
│   │   └── main.js         # Scripts JavaScript
│   └── images/             # Images du thème
└── README.md               # Ce fichier
```

## 🚀 Fonctionnalités

### Navigation

Le thème utilise le système de menu WordPress natif. Les avantages :
- ✅ **Navigation fonctionnelle** : Plus de problèmes de liens qui ne fonctionnent pas
- ✅ **Gestion facile** : Modifiez les menus depuis l'administration WordPress
- ✅ **URLs propres** : WordPress gère automatiquement les permaliens
- ✅ **Menu responsive** : Menu hamburger sur mobile

### Walker de menu personnalisé

Le thème inclut un Walker personnalisé (`YesMoreBet_Walker_Nav_Menu`) qui applique :
- Style gradient sur la page active
- Effets de survol
- Classes Tailwind pour le design

## 📱 Responsive Design

Le thème est entièrement responsive :
- **Mobile** : Menu hamburger, layout en colonne
- **Tablet** : Adaptation progressive
- **Desktop** : Menu horizontal, grilles multi-colonnes

Breakpoints Tailwind :
- `sm`: 640px
- `md`: 768px
- `lg`: 1024px
- `xl`: 1280px
- `2xl`: 1536px

## 🐛 Résolution des problèmes

### Les liens du menu ne fonctionnent pas

**Cause** : Les menus ne sont pas configurés
**Solution** : Suivez l'étape 5 "Configurer les menus" ci-dessus

### La page d'accueil n'affiche pas le bon contenu

**Cause** : La page d'accueil statique n'est pas configurée
**Solution** : Suivez l'étape 4 "Configurer la page d'accueil"

### Les styles ne s'appliquent pas

**Cause** : Les fichiers CSS ne sont pas chargés correctement
**Solution** :
1. Vérifiez que les fichiers existent dans `/assets/css/`
2. Videz le cache de votre site
3. Régénérez les permaliens dans **Réglages > Permaliens**

### Le menu mobile ne s'ouvre pas

**Cause** : JavaScript non chargé
**Solution** : Vérifiez que `wp_footer()` est présent dans `footer.php`

## 📞 Support

Pour toute question ou problème :
- **Email** : yesmorebet@hotmail.com
- **Téléphone** : +33 6 26 51 22 17

## 📄 Licence

Ce thème est sous licence GPL v2 ou ultérieure.

## 🎯 Crédits

- **Design & Développement** : Claude Code
- **Client** : YesMoreBet - Guillaume Peyrot
- **Framework CSS** : Tailwind CSS
- **Police** : Quicksand (Google Fonts)

---

**Version** : 1.0.0
**Date** : Octobre 2025
**Auteur** : Guillaume Peyrot / YesMoreBet
