# Concepts de la POO

## Attributs, Constantes et Méthodes
Les attributs (ou données membres) représentent les caractéristiques propres à un objet. Il est possible de déclarer des constantes propres à la classe. Les méthodes définissent les actions applicables à un objet.

## Classe
Une classe est une entité regroupant des variables et des fonctions. Chaque fonction a accès aux variables de l'entité. C'est un regroupement logique de variables et de fonctions pour tout objet issu de cette classe.

## Relations d'Objets
Il existe quatre types de relations durables :
- **Association:** Relation durable entre deux classes.
- **Agrégation:** Relation de contenance non symétrique.
- **Composition:** Agrégation plus forte, impliquant un cycle de vie commun.
- **Héritage:** Ajout d'éléments à une classe existante pour créer une nouvelle plus précise.

## Constructeur
Le constructeur est une méthode appelée implicitement à la création de l'objet. Il peut avoir des paramètres obligatoires et exécute des instructions à l'instanciation de la classe.

## Principe de l'Encapsulation
La POO cache la complexité en protégeant les détails internes via des attributs privés. En restreignant l'accès direct, les utilisateurs sont incités à utiliser les méthodes, évitant ainsi les erreurs potentielles.

## Visibilité des Propriétés et Méthodes
La visibilité définit l'accès d'un attribut ou d'une méthode dans le programme :
- **Public (ou var):** Visible à l'intérieur et à l'extérieur de la classe.
- **Protected:** Visible à l'intérieur de la classe et de ses classes filles.
- **Private:** Visible uniquement à l'intérieur de la classe.

