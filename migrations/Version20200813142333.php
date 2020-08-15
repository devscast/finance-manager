<?php
/*
 * This file is part of the devscast Project.
 *
 * (c) Bernard Ng <ngandubernard@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Class Version20200813142333
 * @package DoctrineMigrations
 * @author bernard-ng <ngandubernard@gmail.com>
 */
final class Version20200813142333 extends AbstractMigration
{
    /**
     * @return string
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function getDescription(): string
    {
        return 'user table creation';
    }

    /**
     * @param Schema $schema
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, roles VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE user');
    }
}
