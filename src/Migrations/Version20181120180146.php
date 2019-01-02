<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181120180146 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categorias (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidades_medida (id INT AUTO_INCREMENT NOT NULL, variantes_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, denominacion VARCHAR(255) NOT NULL, INDEX IDX_824297B3C5A7FAFE (variantes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE variantes (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, cantidad INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE unidades_medida ADD CONSTRAINT FK_824297B3C5A7FAFE FOREIGN KEY (variantes_id) REFERENCES variantes (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE unidades_medida DROP FOREIGN KEY FK_824297B3C5A7FAFE');
        $this->addSql('DROP TABLE categorias');
        $this->addSql('DROP TABLE unidades_medida');
        $this->addSql('DROP TABLE variantes');
    }
}
