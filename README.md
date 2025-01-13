# La Vie des Plantes 🌿

## Description
Bienvenue sur le projet **La Vie des Plantes**, un site WordPress conçu pour présenter une entreprise spécialisée dans les plantes et la décoration florale. Ce projet, basé à Angers, met en avant les valeurs de qualité, durabilité et savoir-faire tout en offrant une expérience utilisateur fluide et agréable.

---

## Fonctionnalités principales
- **Page d'accueil personnalisée** avec un menu dynamique.
- **Page "À propos"** pour découvrir l'histoire et les valeurs de l'entreprise.
- **Formulaire de contact** pour faciliter la communication avec les visiteurs.
- **Pages dédiées aux services et réalisations**.
- Charte graphique respectant le thème **Flower Shop Lite**.

---

## Prérequis
Avant de commencer, assurez-vous que les outils suivants sont installés :

- **[XAMPP](https://www.apachefriends.org/)** (version 7.4 ou supérieure).
- Un **navigateur web** (Chrome, Firefox, etc.).
- **Git** pour le contrôle de version (optionnel).

---

## Installation

### Étape 1 : Préparation
1. **Clonez ce repository ou téléchargez le fichier ZIP :**
   ```bash
   git clone https://github.com/Djodjoww/la_vie_des_plantes.git
   ```
   
2. **Copiez le dossier dans XAMPP :**
   - Placez le dossier du projet dans `C:/xampp/htdocs/`.

3. **Configurez la base de données :**
   - Ouvrez [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Créez une nouvelle base de données nommée `la_vie_des_plantes_db`.
   - Importez le fichier SQL fourni (`la_vie_des_plantes.sql`).

### Étape 2 : Lancer le site
1. **Démarrez XAMPP :**
   - Activez les services **Apache** et **MySQL**.

2. **Accédez au site :**
   - Ouvrez votre navigateur et rendez-vous à : [http://localhost/la_vie_des_plantes](http://localhost/la_vie_des_plantesCEF).

3. **Connectez-vous à l'administration :**
   - URL : [http://localhost/la_vie_des_plantes/wp-admin](http://localhost/la_vie_des_plantesCEF/wp-admin).
   - Identifiants : Djodjoww
   - Password : Motdepasse.1

---

## Déploiement
Pour déployer votre projet en ligne :
1. **Exportez la base de données** depuis phpMyAdmin.
2. **Transférez les fichiers WordPress** vers un hébergeur via FTP.
3. **Mettez à jour les URLs** dans la base de données pour refléter l'URL de production.

---

## Structure du projet
Voici une brève description des dossiers et fichiers principaux :

```
la_vie_des_plantesCEF/
├── wp-admin/          # Fichiers du panneau d'administration WordPress
├── wp-content/
│   ├── themes/        # Thème utilisé (Flower Shop Lite)
│   ├── plugins/       # Plugins installés
├── wp-includes/       # Fichiers principaux de WordPress
├── wp-config.php      # Configuration de la base de données
└── .htaccess          # Règles de réécriture pour WordPress
```

---

