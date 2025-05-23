# ✅ Gestion de Tâches - Application Laravel (To-Do List)

Une application simple de gestion de tâches avec gestion des utilisateurs, développée avec Laravel. Chaque utilisateur peut créer, visualiser, modifier et supprimer ses propres tâches.

---

## 🎯 Fonctionnalités

- **Inscription & Connexion**
    - Authentification via Laravel Breeze
- **Tableau de bord personnel**
    - Chaque utilisateur voit uniquement ses tâches
- **Gestion complète des tâches (CRUD)**
    - Ajouter une tâche : titre, description, date limite
    - Modifier une tâche
    - Supprimer une tâche
    - Marquer une tâche comme terminée / en cours
- **Filtrage et tri**
    - Filtrer par statut (terminée / en cours)
    - Trier par date limite ou ordre alphabétique
- **Notifications**
    - Messages flash pour confirmer les actions (ex: "Tâche ajoutée avec succès")

---

## 🛠️ Stack technique

- **Framework** : Laravel 10+
- **Authentification** : Laravel Breeze
- **Base de données** : SQLite
- **Frontend** : Blade Templates

---

## 🔧 Installation

```bash
# 1. Cloner le dépôt
git clone https://github.com/votre-utilisateur/gestion-taches-laravel.git
cd gestion-taches-laravel

# 2. Installer les dépendances
composer install
npm install && npm run dev


