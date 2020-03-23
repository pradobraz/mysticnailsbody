<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320214829 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE marcacoes (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, nome_cliente VARCHAR(255) NOT NULL, tiposervico1 VARCHAR(255) NOT NULL, tiposervico2 VARCHAR(255) DEFAULT NULL, tiposervico3 VARCHAR(255) DEFAULT NULL, tiposervico4 VARCHAR(255) DEFAULT NULL, dia_m DATE NOT NULL, hora_m TIME NOT NULL, notas VARCHAR(255) DEFAULT NULL, status VARCHAR(255) NOT NULL, valor NUMERIC(10, 0) DEFAULT NULL, registo DATETIME NOT NULL, registo_update DATETIME DEFAULT NULL, INDEX IDX_BD3F5BE7DE734E51 (cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE marcacoes ADD CONSTRAINT FK_BD3F5BE7DE734E51 FOREIGN KEY (cliente_id) REFERENCES clientes (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE marcacoes');
    }
}
