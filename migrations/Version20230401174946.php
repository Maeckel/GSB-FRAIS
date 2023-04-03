<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230401174946 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comptable (id VARCHAR(255) NOT NULL, nom VARCHAR(30) DEFAULT NULL, prenom VARCHAR(30) DEFAULT NULL, login VARCHAR(20) DEFAULT NULL, mdp VARCHAR(20) DEFAULT NULL, adresse VARCHAR(30) DEFAULT NULL, cp VARCHAR(5) DEFAULT NULL, ville VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat (id VARCHAR(255) NOT NULL, libelle VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_frais (id VARCHAR(255) NOT NULL, visiteur_id VARCHAR(255) NOT NULL, etat_id VARCHAR(255) DEFAULT NULL, nb_justificatifs INT DEFAULT NULL, montant_valide NUMERIC(12, 2) DEFAULT NULL, date_modif DATE DEFAULT NULL, INDEX IDX_5FC0A6A7D5E86FF (etat_id), INDEX IDX_5FC0A6A77F72333D (visiteur_id), PRIMARY KEY(id, visiteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frais_forfait (id VARCHAR(255) NOT NULL, libelle VARCHAR(20) DEFAULT NULL, montant NUMERIC(7, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_forfait (visiteur_id VARCHAR(255) NOT NULL, fichefrais_id VARCHAR(255) NOT NULL, fraisforfait_id VARCHAR(255) NOT NULL, quantite VARCHAR(100) DEFAULT NULL, INDEX IDX_BD293ECF7F72333D (visiteur_id), INDEX IDX_BD293ECFD318D763 (fichefrais_id), INDEX IDX_BD293ECFCEAFB3F4 (fraisforfait_id), PRIMARY KEY(visiteur_id, fichefrais_id, fraisforfait_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_hors_forfait (id INT AUTO_INCREMENT NOT NULL, visiteur_id VARCHAR(255) NOT NULL, fichefrais_id VARCHAR(255) DEFAULT NULL, libelle VARCHAR(100) DEFAULT NULL, date DATE DEFAULT NULL, montant NUMERIC(12, 2) DEFAULT NULL, INDEX IDX_EC01626D7F72333D (visiteur_id), INDEX IDX_EC01626DD318D763 (fichefrais_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visiteur (id VARCHAR(255) NOT NULL, nom VARCHAR(30) DEFAULT NULL, prenom VARCHAR(30) DEFAULT NULL, login VARCHAR(30) DEFAULT NULL, mdp VARCHAR(30) DEFAULT NULL, adresse VARCHAR(30) DEFAULT NULL, cp VARCHAR(5) DEFAULT NULL, ville VARCHAR(30) DEFAULT NULL, date_embauche DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A7D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A77F72333D FOREIGN KEY (visiteur_id) REFERENCES visiteur (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF7F72333D FOREIGN KEY (visiteur_id) REFERENCES visiteur (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECFD318D763 FOREIGN KEY (fichefrais_id) REFERENCES fiche_frais (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECFCEAFB3F4 FOREIGN KEY (fraisforfait_id) REFERENCES frais_forfait (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626D7F72333D FOREIGN KEY (visiteur_id) REFERENCES visiteur (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626DD318D763 FOREIGN KEY (fichefrais_id) REFERENCES fiche_frais (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A7D5E86FF');
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A77F72333D');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF7F72333D');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECFD318D763');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECFCEAFB3F4');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626D7F72333D');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626DD318D763');
        $this->addSql('DROP TABLE comptable');
        $this->addSql('DROP TABLE etat');
        $this->addSql('DROP TABLE fiche_frais');
        $this->addSql('DROP TABLE frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_hors_forfait');
        $this->addSql('DROP TABLE visiteur');
    }
}
