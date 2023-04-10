use gsbFrais ;
--drop database gsbFrais;

--
-- Contenu de la table `FraisForfait`
--

INSERT INTO `frais_forfait` (`id`, `libelle`, `montant`) VALUES
('ETP', 'Forfait Etape', 110.00),
('KM', 'Frais Kilométrique', 0.62),
('NUI', 'Nuitée Hôtel', 80.00),
('REP', 'Repas Restaurant', 25.00);

--
-- Contenu de la table `Etat`
--

INSERT INTO `etat` (`id`, `libelle`) VALUES
('RB', 'Remboursée'),
('CL', 'Saisie clôturée'),
('CR', 'Fiche créée, saisie en cours'),
('VA', 'Validée et mise en paiement');

-- --------------------------------------------------------

--
-- Contenu de la table `Visiteur`
--

INSERT INTO `visiteur` (`id`, `nom`, `prenom`, `login`, `mdp`, `adresse`, `cp`, `ville`, `date_embauche`) VALUES
('a131', 'Villechalane', 'Louis', 'lvillachane', 'jux7g', '8 rue des Charmes', '46000', 'Cahors', '2005-12-21'),
('a17', 'Andre', 'David', 'dandre', 'oppg5', '1 rue Petit', '46200', 'Lalbenque', '1998-11-23'),
('a55', 'Bedos', 'Christian', 'cbedos', 'gmhxd', '1 rue Peranud', '46250', 'Montcuq', '1995-01-12'),
('a93', 'Tusseau', 'Louis', 'ltusseau', 'ktp3s', '22 rue des Ternes', '46123', 'Gramat', '2000-05-01'),
('b13', 'Bentot', 'Pascal', 'pbentot', 'doyw1', '11 allée des Cerises', '46512', 'Bessines', '1992-07-09'),
('b16', 'Bioret', 'Luc', 'lbioret', 'hrjfs', '1 Avenue gambetta', '46000', 'Cahors', '1998-05-11'),
('b19', 'Bunisset', 'Francis', 'fbunisset', '4vbnd', '10 rue des Perles', '93100', 'Montreuil', '1987-10-21'),
('b25', 'Bunisset', 'Denise', 'dbunisset', 's1y1r', '23 rue Manin', '75019', 'paris', '2010-12-05'),
('b28', 'Cacheux', 'Bernard', 'bcacheux', 'uf7r3', '114 rue Blanche', '75017', 'Paris', '2009-11-12'),
('b34', 'Cadic', 'Eric', 'ecadic', '6u8dc', '123 avenue de la République', '75011', 'Paris', '2008-09-23'),
('b4', 'Charoze', 'Catherine', 'ccharoze', 'u817o', '100 rue Petit', '75019', 'Paris', '2005-11-12'),
('b50', 'Clepkens', 'Christophe', 'cclepkens', 'bw1us', '12 allée des Anges', '93230', 'Romainville', '2003-08-11'),
('b59', 'Cottin', 'Vincenne', 'vcottin', '2hoh9', '36 rue Des Roches', '93100', 'Monteuil', '2001-11-18'),
('d13', 'Debelle', 'Jeanne', 'jdebelle', 'nvwqq', '134 allée des Joncs', '44000', 'Nantes', '2000-05-11');

-- --------------------------------------------------------

--
-- Contenu de la table `Comptable`
--
INSERT INTO `comptable` (`id`, `nom`, `prenom`, `login`, `mdp`, `adresse`, `cp`, `ville`) VALUES
('e49', 'Duncombe', 'Claude', 'cduncombe', 'qf77j', '19 rue de la tour', '23100', 'La souteraine'),
('e5', 'Enault-Pascreau', 'Céline', 'cenault', 'y2qdu', '25 place de la gare', '23200', 'Gueret'),
('e52', 'Eynde', 'Valérie', 'veynde', 'i7sn3', '3 Grand Place', '13015', 'Marseille'),
('f21', 'Finck', 'Jacques', 'jfinck', 'mpb3t', '10 avenue du Prado', '13002', 'Marseille'),
('f39', 'Frémont', 'Fernande', 'ffremont', 'xs5tq', '4 route de la mer', '13012', 'Allauh'),
('f4', 'Gest', 'Alain', 'agest', 'dywvt', '30 avenue de la mer', '13025', 'Berre'),
('d51', 'Debroise', 'Michel', 'mdebroise', 'sghkb', '2 Bld Jourdain', '44000', 'Nantes'),
('e22', 'Desmarquest', 'Nathalie', 'ndesmarquest', 'f1fob', '14 Place d Arc', '45000', 'Orléans'),
('e24', 'Desnost', 'Pierre', 'pdesnost', '4k2o5', '16 avenue des Cèdres', '23200', 'Guéret'),
('e39', 'Dudouit', 'Frédéric', 'fdudouit', '44im8', '18 rue de l église', '23120', 'GrandBourg');

--
-- Contenu de la table `FicheFrais`
--

INSERT INTO `fiche_frais` (`id`, `visiteur_id`, `etat_id`, `nb_justificatifs`, `montant_valide`, `date_modif`) VALUES
('04/2022', 'a17', 'CL' , 10, 500.08, '2022-04-19'),
('09/2022', 'a55', 'VA' , 11, 800.60, '2022-09-06'),
('11/2022', 'a93', 'RB' , 8, 200.07, '2022-11-25'),
('04/2022', 'b13', 'CL' , 4, 300.70, '2022-04-24'),
('05/2022', 'a17', 'VA' , 10, 500.08, '2022-05-19'),
('10/2022', 'a55', 'RB' , 11, 400.06, '2022-10-06'),
('12/2022', 'a93', 'CL' , 8, 500.07, '2022-12-25'),
('03/2022', 'b13', 'VA' , 4, 700.07, '2022-03-24'),
('02/2023', 'a131', 'CL' , 1, 900.07, '2023-02-12'),
('01/2023', 'b16', 'VA' , 10, 500.08, '2022-01-19'),
('02/2023', 'b19', 'RB' , 11, 800.60, '2022-02-06'),
('03/2023', 'b25', 'CL' , 8, 500.07, '2023-03-25'),
('04/2023', 'b28', 'CR' , 4, 600.07, '2023-04-24'),
('02/2023', 'b34', 'VA' , 1, 400.07, '2023-02-12'),
('02/2023', 'b4', 'RB' , 1, 100.07, '2023-02-12'),
('04/2023', 'b16', 'CR' , 10, 500.08, '2023-04-19'),
('10/2022', 'b19', 'CL' , 11, 800.06, '2022-10-06'),
('07/2022', 'b25', 'VA' , 8, 500.07, '2022-07-25'),
('12/2022', 'b28', 'RB' , 4, 600.07, '2022-12-24'),
('08/2022', 'b34', 'CL' , 1, 200.07, '2022-08-12'),
('04/2023', 'b34', 'CR' , 1, 900.07, '2023-04-12');

--
-- Contenu de la table `LigneFraisHorsForfait`
--

INSERT INTO `ligne_frais_hors_forfait` (`id`, `visiteur_id`, `fichefrais_id`, `libelle`, `date`, `montant`) VALUES
(1, 'a17', '04/2022', 'Reservation de salle pour conférence', '2022-04-18' , 15.0),
(2, 'a55', '09/2022', 'Achat de fournitures', '2022-09-18' , 15.0),
(3, 'a93', '12/2022', 'Achat de fournitures', '2022-12-18' , 10.0),
(4, 'a17', '05/2022', 'Achat de fournitures', '2022-05-18' , 10.0),
(5, 'a55', '10/2022', 'Achat de fournitures', '2022-10-18' , 11.0),
(6, 'a93', '11/2022', 'Achat de fournitures', '2022-11-18' , 11.0),
(7, 'a131', '02/2023', 'Reservation de salle pour conférence', '2023-02-20' , 12.0),
(8, 'b16', '01/2023', 'Achat de fournitures', '2023-01-18' , 12.0),
(9, 'b19', '02/2023', 'Reservation de salle pour conférence', '2023-02-18' , 13.0),
(10, 'b25', '03/2023', 'Achat de fournitures', '2023-03-18' , 13.0),
(11, 'b28', '04/2023', 'Reservation de salle pour conférence', '2023-04-18' , 14.0),
(12, 'b34', '08/2022', 'Achat de fournitures', '2022-08-18' , 14.0),
(13, 'b34', '04/2023', 'Achat de fournitures', '2023-04-18' , 15.0),
(14, 'b4', '02/2023', 'Reservation de salle pour conférence', '2023-02-20' , 15.0);

--
-- Contenu de la table `LigneFraisForfait`
--

INSERT INTO `ligne_frais_forfait` (`visiteur_id`, `fichefrais_id`, `fraisforfait_id`, `quantite`) VALUES
('a131', '02/2023', 'KM', '3'),
('a131', '02/2023', 'ETP', '2'),
('a131', '02/2023', 'REP', '4'),
('a131', '02/2023', 'NUI', '2'),
('a17', '04/2022', 'KM', '4'),
('a17', '04/2022', 'ETP', '3'),
('a17', '05/2022', 'KM', '4'),
('a17', '05/2022', 'NUI', '3'),
('a55', '10/2022', 'REP', '4'),
('a55', '10/2022', 'NUI', '2'),
('a55', '09/2022', 'ETP', '4'),
('a55', '09/2022', 'NUI', '2'),
('a93', '11/2022', 'KM', '3'),
('a93', '11/2022', 'ETP', '2'),
('a93', '12/2022', 'ETP', '3'),
('a93', '12/2022', 'NUI', '2'),
('b16', '01/2023', 'REP', '4'),
('b16', '01/2023', 'NUI', '2'),
('b16', '04/2023', 'KM', '4'),
('b16', '04/2023', 'ETP', '2'),
('b19', '02/2023', 'REP', '1'),
('b19', '02/2023', 'NUI', '2'),
('b19', '10/2022', 'KM', '1'),
('b19', '10/2022', 'NUI', '2'),
('b25', '03/2023', 'KM', '3'),
('b25', '03/2023', 'ETP', '2'),
('b25', '07/2022', 'NUI', '3'),
('b25', '07/2022', 'REP', '2'),
('b28', '04/2023', 'REP', '1'),
('b28', '04/2023', 'NUI', '2'),
('b28', '12/2022', 'KM', '1'),
('b28', '12/2022', 'ETP', '2'),
('b34', '02/2023', 'KM', '3'),
('b34', '02/2023', 'ETP', '2'),
('b34', '04/2023', 'REP', '4'),
('b34', '04/2023', 'NUI', '1'),
('b34', '08/2022', 'KM', '3'),
('b4', '02/2023', 'KM', '2'),
('b4', '02/2023', 'REP', '1'),
('b4', '02/2023', 'NUI', '2');
