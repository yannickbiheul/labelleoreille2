<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210525084220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu DROP FOREIGN KEY FK_83730342A76ED395');
        $this->addSql('DROP INDEX IDX_83730342A76ED395 ON actu');
        $this->addSql('ALTER TABLE actu DROP user_id');
        $this->addSql('ALTER TABLE audio DROP FOREIGN KEY FK_187D36959E45C554');
        $this->addSql('ALTER TABLE audio DROP FOREIGN KEY FK_187D3695A76ED395');
        $this->addSql('DROP INDEX IDX_187D3695A76ED395 ON audio');
        $this->addSql('DROP INDEX IDX_187D36959E45C554 ON audio');
        $this->addSql('ALTER TABLE audio DROP prestation_id, DROP user_id');
        $this->addSql('ALTER TABLE prestation ADD audio VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE actu ADD CONSTRAINT FK_83730342A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_83730342A76ED395 ON actu (user_id)');
        $this->addSql('ALTER TABLE audio ADD prestation_id INT DEFAULT NULL, ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE audio ADD CONSTRAINT FK_187D36959E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id)');
        $this->addSql('ALTER TABLE audio ADD CONSTRAINT FK_187D3695A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_187D3695A76ED395 ON audio (user_id)');
        $this->addSql('CREATE INDEX IDX_187D36959E45C554 ON audio (prestation_id)');
        $this->addSql('ALTER TABLE prestation DROP audio');
    }
}
