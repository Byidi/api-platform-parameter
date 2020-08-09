<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200809163609 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ip (id INT AUTO_INCREMENT NOT NULL, server_id INT DEFAULT NULL, address VARCHAR(180) NOT NULL, UNIQUE INDEX UNIQ_A5E3B32DD4E6F81 (address), INDEX IDX_A5E3B32D1844E6B7 (server_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(180) NOT NULL, UNIQUE INDEX UNIQ_5A6DD5F65E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ip ADD CONSTRAINT FK_A5E3B32D1844E6B7 FOREIGN KEY (server_id) REFERENCES server (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ip DROP FOREIGN KEY FK_A5E3B32D1844E6B7');
        $this->addSql('DROP TABLE ip');
        $this->addSql('DROP TABLE server');
    }
}
