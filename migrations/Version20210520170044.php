<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210520170044 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE actu ADD CONSTRAINT FK_83730342A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_83730342A76ED395 ON actu (user_id)');
        $this->addSql('ALTER TABLE audio ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE audio ADD CONSTRAINT FK_187D3695A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_187D3695A76ED395 ON audio (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu DROP FOREIGN KEY FK_83730342A76ED395');
        $this->addSql('DROP INDEX IDX_83730342A76ED395 ON actu');
        $this->addSql('ALTER TABLE actu DROP user_id');
        $this->addSql('ALTER TABLE audio DROP FOREIGN KEY FK_187D3695A76ED395');
        $this->addSql('DROP INDEX IDX_187D3695A76ED395 ON audio');
        $this->addSql('ALTER TABLE audio DROP user_id');
    }
}
