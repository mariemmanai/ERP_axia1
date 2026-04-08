# ERP_axia1 — ERP Modulaire (Symfony 6)

Projet ERP modulaire : conception et développement d’une solution ERP sous **Symfony 6**, destinée à la gestion intégrée des processus métiers :
- Achats
- Ventes
- Stocks
- Production
- Comptabilité

> Objectif : proposer une base ERP **modulaire**, extensible et maintenable, où chaque domaine métier peut évoluer indépendamment.

---

## Fonctionnalités (modules)

- **Achats** : gestion des fournisseurs, demandes/commandes, réceptions
- **Ventes** : devis, commandes clients, facturation
- **Stocks** : mouvements, inventaires, valorisation 
- **Production** : ordres de fabrication, consommation
- **Comptabilité** : écritures, journaux, reporting

> La disponibilité exacte dépend de l’état actuel d’implémentation dans le code.

---

## Stack technique

- **Backend** : PHP / **Symfony 6**
- **Architecture** : modulaire 

---

## Prérequis

- PHP (version compatible Symfony 6)
- Composer
- Une base de données (MySQL)

---

## Installation 

1. Cloner le dépôt
   ```bash
   git clone https://github.com/mariemmanai/ERP_axia1.git
   cd ERP_axia1
   ```

2. Installer les dépendances PHP
   ```bash
   composer install
   ```

3. Configurer l’environnement
   - Créez un fichier `.env` et configurez la base de données :
     ```
     DATABASE_URL="mysql://user:password@127.0.0.1:3306/erp_axia1?serverVersion=8.0"
     ```

4. Créer la base & lancer les migrations
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```


6. Démarrer le serveur
   ```bash
   symfony serve
   # ou
   php -S 127.0.0.1:8000 -t public
   ```

Puis ouvrir : `http://127.0.0.1:8000`

---

## Configuration

- Variables d’environnement : `.env`, `.env.local`
- Logs : `var/log/`
- Cache : `var/cache/`

---

## Structure du projet 

Projet suit une structure proche de :
- `src/` : code applicatif (controllers, services, entités, etc.)
- `templates/` : vues Twig (si application web)
- `public/` : point d’entrée, assets publics
- `config/` : configuration Symfony
- `tests/` : tests

---

## Roadmap

- [ ] Authentification + rôles/permissions (RBAC)
- [ ] Gestion multi-sociétés / multi-entrepôts
- [ ] API pour intégrations (facturation, e-commerce, etc.)
- [ ] Reporting (KPIs, exports)
- [ ] Audit log & traçabilité

---


## Auteur

- **mariemmanai** — https://github.com/mariemmanai
