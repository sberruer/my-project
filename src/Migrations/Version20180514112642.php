<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180514112642 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE author (id INTEGER NOT NULL, book_id INTEGER NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BDAFD8C816A2B381 ON author (book_id)');
        $this->addSql('CREATE TABLE book (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, isbn VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        //$this->addSql('ALTER TABLE product ADD COLUMN description CLOB NOT NULL');
        //$this->addSql('ALTER TABLE product ADD COLUMN bargain BOOLEAN NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE book');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, name, price FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, price INTEGER NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO product (id, name, price) SELECT id, name, price FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }
}
