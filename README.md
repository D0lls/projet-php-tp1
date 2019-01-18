### url site : 

# [LP DIM] Andrusiak Victor

## Installation.

### Si la base de données n'existe pas : 

 CREATE DATABASE tp1_andrusiak;

### Ensuite créer les tables suivante : 

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `dates` int(11) NOT NULL,
  `vote` int(11) DEFAULT '0',
  `last_vote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

### Ensuite faite les Alter Table suivant :

- ALTER TABLE `message` ADD PRIMARY KEY (`id`);
- ALTER TABLE `utilisateurs` ADD PRIMARY KEY (`id`);
- ALTER TABLE `utilisateurs` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
- ALTER TABLE `message` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


