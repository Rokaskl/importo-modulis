<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191204150950 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE acquisition_sample (id INT AUTO_INCREMENT NOT NULL, fdc_id_of_sample_food_id INT DEFAULT NULL, fdc_id_of_acquisition_food_id INT DEFAULT NULL, INDEX IDX_2B80716ADE87256 (fdc_id_of_sample_food_id), INDEX IDX_2B80716A550F4AB (fdc_id_of_acquisition_food_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agricultural_acquisition (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, acquisition_date DATETIME DEFAULT NULL, market_class VARCHAR(255) DEFAULT NULL, treatment VARCHAR(255) DEFAULT NULL, state VARCHAR(20) DEFAULT NULL, INDEX IDX_3995D31D6331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE all_downloaded_table_record_counts (id INT AUTO_INCREMENT NOT NULL, tbl VARCHAR(255) DEFAULT NULL, number_of_records INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE branded_food (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, brand_owner VARCHAR(255) DEFAULT NULL, gtin_upc VARCHAR(255) DEFAULT NULL, ingredients VARCHAR(255) DEFAULT NULL, serving_size INT DEFAULT NULL, serving_size_unit VARCHAR(20) DEFAULT NULL, household_serving_fulltext VARCHAR(255) DEFAULT NULL, branded_food_category VARCHAR(255) DEFAULT NULL, data_source VARCHAR(255) DEFAULT NULL, modified_date DATETIME DEFAULT NULL, available_date DATETIME DEFAULT NULL, INDEX IDX_E203C40C6331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food (id INT NOT NULL, food_category_id_id INT DEFAULT NULL, food_class VARCHAR(255) DEFAULT NULL, data_type VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, publication_date DATETIME DEFAULT NULL, scientific_name VARCHAR(255) DEFAULT NULL, food_key VARCHAR(255) DEFAULT NULL, INDEX IDX_D43829F7F9261ED5 (food_category_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_attribute (id INT NOT NULL, fdc_id_id INT DEFAULT NULL, food_attribute_type_id_id INT DEFAULT NULL, seq_num INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, value VARCHAR(255) DEFAULT NULL, INDEX IDX_628082606331C7D1 (fdc_id_id), INDEX IDX_6280826054BC0155 (food_attribute_type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_attribute_type (id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_calorie_conversion_factor (id INT AUTO_INCREMENT NOT NULL, food_nutrient_conversion_factor_id_id INT DEFAULT NULL, protein_value DOUBLE PRECISION DEFAULT NULL, fat_value DOUBLE PRECISION DEFAULT NULL, carbonhydrate_value DOUBLE PRECISION DEFAULT NULL, INDEX IDX_E46AB4161555AADF (food_nutrient_conversion_factor_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_category (id INT NOT NULL, code INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_component (id INT NOT NULL, fdc_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, pct_weight DOUBLE PRECISION DEFAULT NULL, is_refuse TINYINT(1) DEFAULT NULL, gram_weight DOUBLE PRECISION DEFAULT NULL, data_points INT DEFAULT NULL, min_year_acquired VARCHAR(4) DEFAULT NULL, INDEX IDX_D104CCCC6331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_nutrient (id INT NOT NULL, fdc_id_id INT DEFAULT NULL, nutrient_id_id INT DEFAULT NULL, derivation_id_id INT DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, data_points INT DEFAULT NULL, standard_error VARCHAR(255) DEFAULT NULL, min DOUBLE PRECISION DEFAULT NULL, max DOUBLE PRECISION DEFAULT NULL, median DOUBLE PRECISION DEFAULT NULL, footnote VARCHAR(255) DEFAULT NULL, min_year_acquired VARCHAR(4) DEFAULT NULL, nutrient_analysis_details VARCHAR(255) DEFAULT NULL, INDEX IDX_81DB0B186331C7D1 (fdc_id_id), INDEX IDX_81DB0B1812DA43C8 (nutrient_id_id), INDEX IDX_81DB0B1831A6FF55 (derivation_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_nutrient_conversion_factor (id INT NOT NULL, fdc_id_id INT DEFAULT NULL, INDEX IDX_C44682106331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_nutrient_derivation (id INT NOT NULL, source_id_id INT DEFAULT NULL, code VARCHAR(20) NOT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_C969AF9FE64C4568 (source_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_nutrient_source (id INT NOT NULL, code INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_portion (id INT NOT NULL, fdc_id_id INT DEFAULT NULL, measure_unit_id_id INT DEFAULT NULL, seq_num INT DEFAULT NULL, amount INT DEFAULT NULL, portion_description VARCHAR(255) DEFAULT NULL, modifier VARCHAR(255) DEFAULT NULL, gram_weight DOUBLE PRECISION DEFAULT NULL, data_points INT DEFAULT NULL, footnote VARCHAR(255) DEFAULT NULL, min_year_acquired VARCHAR(4) DEFAULT NULL, INDEX IDX_AF1F211E6331C7D1 (fdc_id_id), INDEX IDX_AF1F211E8C177180 (measure_unit_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_protein_conversion_factor (id INT AUTO_INCREMENT NOT NULL, food_nutrient_conversion_factor_id_id INT DEFAULT NULL, value DOUBLE PRECISION DEFAULT NULL, INDEX IDX_7938049A1555AADF (food_nutrient_conversion_factor_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_update_log_entry (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, publication_date DATETIME DEFAULT NULL, INDEX IDX_899F7C5D6331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE foundation_food (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, ndb_number INT DEFAULT NULL, footnote VARCHAR(255) DEFAULT NULL, INDEX IDX_B71A86C26331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE input_food (id INT NOT NULL, fdc_id_id INT DEFAULT NULL, fdc_id_of_input_food_id INT DEFAULT NULL, seq_num INT DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, sr_code VARCHAR(255) DEFAULT NULL, sr_description VARCHAR(255) DEFAULT NULL, unit VARCHAR(20) DEFAULT NULL, portion_code VARCHAR(30) DEFAULT NULL, portion_description VARCHAR(255) DEFAULT NULL, gram_weight DOUBLE PRECISION DEFAULT NULL, retention_code INT DEFAULT NULL, survey_flag VARCHAR(20) DEFAULT NULL, INDEX IDX_975592C06331C7D1 (fdc_id_id), INDEX IDX_975592C0E4867BE0 (fdc_id_of_input_food_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lab_method (id INT NOT NULL, description VARCHAR(255) DEFAULT NULL, technique VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lab_method_code (id INT NOT NULL, lab_method_id_id INT DEFAULT NULL, code VARCHAR(255) DEFAULT NULL, INDEX IDX_E1CCD0D577BF7A9A (lab_method_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lab_method_nutrient (id INT NOT NULL, lab_method_id_id INT DEFAULT NULL, nutrient_id_id INT DEFAULT NULL, INDEX IDX_209C343D77BF7A9A (lab_method_id_id), INDEX IDX_209C343D12DA43C8 (nutrient_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE market_acquisition (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, brand_description VARCHAR(255) DEFAULT NULL, expiration_date DATETIME DEFAULT NULL, label_weight DOUBLE PRECISION DEFAULT NULL, location VARCHAR(255) DEFAULT NULL, acquisition_date DATETIME DEFAULT NULL, sales_type VARCHAR(255) DEFAULT NULL, sales_lot_nbr VARCHAR(255) DEFAULT NULL, sell_by_date DATETIME DEFAULT NULL, store_city VARCHAR(255) DEFAULT NULL, store_name VARCHAR(255) DEFAULT NULL, store_state VARCHAR(20) DEFAULT NULL, upc_code VARCHAR(255) DEFAULT NULL, INDEX IDX_3B8432286331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE measure_unit (id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, abbreviation VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nutrient (id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, unit_name VARCHAR(10) DEFAULT NULL, nutrient_nbr DOUBLE PRECISION DEFAULT NULL, rank INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nutrient_incoming_name (id INT NOT NULL, nutrient_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, INDEX IDX_BD05AAC812DA43C8 (nutrient_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE retention_factor (id INT NOT NULL, food_group_id_id INT DEFAULT NULL, code INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_486DEA888EDE63FE (food_group_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sample_food (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, INDEX IDX_680E0BBA6331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sr_legacy_food (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, ndb_number INT DEFAULT NULL, INDEX IDX_43FDC0E86331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_sample_food (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, fdc_id_of_sample_food_id INT DEFAULT NULL, INDEX IDX_8DF77E246331C7D1 (fdc_id_id), INDEX IDX_8DF77E24DE87256 (fdc_id_of_sample_food_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_sample_result (id INT AUTO_INCREMENT NOT NULL, food_nutrient_id_id INT DEFAULT NULL, lab_method_id_id INT DEFAULT NULL, adjusted_amount DOUBLE PRECISION DEFAULT NULL, nutrient_name VARCHAR(255) DEFAULT NULL, INDEX IDX_4C70CA577C8B8C03 (food_nutrient_id_id), INDEX IDX_4C70CA5777BF7A9A (lab_method_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE survey_fndds_food (id INT AUTO_INCREMENT NOT NULL, fdc_id_id INT DEFAULT NULL, food_code VARCHAR(30) DEFAULT NULL, wweia_category_code VARCHAR(20) DEFAULT NULL, start_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, INDEX IDX_7795B696331C7D1 (fdc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wweia_food_category (id INT AUTO_INCREMENT NOT NULL, wweia_food_category_code INT DEFAULT NULL, wweia_food_category_description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acquisition_sample ADD CONSTRAINT FK_2B80716ADE87256 FOREIGN KEY (fdc_id_of_sample_food_id) REFERENCES sample_food (id)');
        $this->addSql('ALTER TABLE acquisition_sample ADD CONSTRAINT FK_2B80716A550F4AB FOREIGN KEY (fdc_id_of_acquisition_food_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE agricultural_acquisition ADD CONSTRAINT FK_3995D31D6331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE branded_food ADD CONSTRAINT FK_E203C40C6331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE food ADD CONSTRAINT FK_D43829F7F9261ED5 FOREIGN KEY (food_category_id_id) REFERENCES food_category (id)');
        $this->addSql('ALTER TABLE food_attribute ADD CONSTRAINT FK_628082606331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE food_attribute ADD CONSTRAINT FK_6280826054BC0155 FOREIGN KEY (food_attribute_type_id_id) REFERENCES food_attribute_type (id)');
        $this->addSql('ALTER TABLE food_calorie_conversion_factor ADD CONSTRAINT FK_E46AB4161555AADF FOREIGN KEY (food_nutrient_conversion_factor_id_id) REFERENCES food_nutrient_conversion_factor (id)');
        $this->addSql('ALTER TABLE food_component ADD CONSTRAINT FK_D104CCCC6331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE food_nutrient ADD CONSTRAINT FK_81DB0B186331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE food_nutrient ADD CONSTRAINT FK_81DB0B1812DA43C8 FOREIGN KEY (nutrient_id_id) REFERENCES nutrient (id)');
        $this->addSql('ALTER TABLE food_nutrient ADD CONSTRAINT FK_81DB0B1831A6FF55 FOREIGN KEY (derivation_id_id) REFERENCES food_nutrient_derivation (id)');
        $this->addSql('ALTER TABLE food_nutrient_conversion_factor ADD CONSTRAINT FK_C44682106331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE food_nutrient_derivation ADD CONSTRAINT FK_C969AF9FE64C4568 FOREIGN KEY (source_id_id) REFERENCES food_nutrient_source (id)');
        $this->addSql('ALTER TABLE food_portion ADD CONSTRAINT FK_AF1F211E6331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE food_portion ADD CONSTRAINT FK_AF1F211E8C177180 FOREIGN KEY (measure_unit_id_id) REFERENCES measure_unit (id)');
        $this->addSql('ALTER TABLE food_protein_conversion_factor ADD CONSTRAINT FK_7938049A1555AADF FOREIGN KEY (food_nutrient_conversion_factor_id_id) REFERENCES food_nutrient_conversion_factor (id)');
        $this->addSql('ALTER TABLE food_update_log_entry ADD CONSTRAINT FK_899F7C5D6331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE foundation_food ADD CONSTRAINT FK_B71A86C26331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE input_food ADD CONSTRAINT FK_975592C06331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE input_food ADD CONSTRAINT FK_975592C0E4867BE0 FOREIGN KEY (fdc_id_of_input_food_id) REFERENCES input_food (id)');
        $this->addSql('ALTER TABLE lab_method_code ADD CONSTRAINT FK_E1CCD0D577BF7A9A FOREIGN KEY (lab_method_id_id) REFERENCES lab_method (id)');
        $this->addSql('ALTER TABLE lab_method_nutrient ADD CONSTRAINT FK_209C343D77BF7A9A FOREIGN KEY (lab_method_id_id) REFERENCES lab_method (id)');
        $this->addSql('ALTER TABLE lab_method_nutrient ADD CONSTRAINT FK_209C343D12DA43C8 FOREIGN KEY (nutrient_id_id) REFERENCES nutrient (id)');
        $this->addSql('ALTER TABLE market_acquisition ADD CONSTRAINT FK_3B8432286331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE nutrient_incoming_name ADD CONSTRAINT FK_BD05AAC812DA43C8 FOREIGN KEY (nutrient_id_id) REFERENCES nutrient (id)');
        $this->addSql('ALTER TABLE retention_factor ADD CONSTRAINT FK_486DEA888EDE63FE FOREIGN KEY (food_group_id_id) REFERENCES food_category (id)');
        $this->addSql('ALTER TABLE sample_food ADD CONSTRAINT FK_680E0BBA6331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE sr_legacy_food ADD CONSTRAINT FK_43FDC0E86331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE sub_sample_food ADD CONSTRAINT FK_8DF77E246331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE sub_sample_food ADD CONSTRAINT FK_8DF77E24DE87256 FOREIGN KEY (fdc_id_of_sample_food_id) REFERENCES sample_food (id)');
        $this->addSql('ALTER TABLE sub_sample_result ADD CONSTRAINT FK_4C70CA577C8B8C03 FOREIGN KEY (food_nutrient_id_id) REFERENCES food_nutrient (id)');
        $this->addSql('ALTER TABLE sub_sample_result ADD CONSTRAINT FK_4C70CA5777BF7A9A FOREIGN KEY (lab_method_id_id) REFERENCES lab_method (id)');
        $this->addSql('ALTER TABLE survey_fndds_food ADD CONSTRAINT FK_7795B696331C7D1 FOREIGN KEY (fdc_id_id) REFERENCES food (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE acquisition_sample DROP FOREIGN KEY FK_2B80716A550F4AB');
        $this->addSql('ALTER TABLE agricultural_acquisition DROP FOREIGN KEY FK_3995D31D6331C7D1');
        $this->addSql('ALTER TABLE branded_food DROP FOREIGN KEY FK_E203C40C6331C7D1');
        $this->addSql('ALTER TABLE food_attribute DROP FOREIGN KEY FK_628082606331C7D1');
        $this->addSql('ALTER TABLE food_component DROP FOREIGN KEY FK_D104CCCC6331C7D1');
        $this->addSql('ALTER TABLE food_nutrient DROP FOREIGN KEY FK_81DB0B186331C7D1');
        $this->addSql('ALTER TABLE food_nutrient_conversion_factor DROP FOREIGN KEY FK_C44682106331C7D1');
        $this->addSql('ALTER TABLE food_portion DROP FOREIGN KEY FK_AF1F211E6331C7D1');
        $this->addSql('ALTER TABLE food_update_log_entry DROP FOREIGN KEY FK_899F7C5D6331C7D1');
        $this->addSql('ALTER TABLE foundation_food DROP FOREIGN KEY FK_B71A86C26331C7D1');
        $this->addSql('ALTER TABLE input_food DROP FOREIGN KEY FK_975592C06331C7D1');
        $this->addSql('ALTER TABLE market_acquisition DROP FOREIGN KEY FK_3B8432286331C7D1');
        $this->addSql('ALTER TABLE sample_food DROP FOREIGN KEY FK_680E0BBA6331C7D1');
        $this->addSql('ALTER TABLE sr_legacy_food DROP FOREIGN KEY FK_43FDC0E86331C7D1');
        $this->addSql('ALTER TABLE sub_sample_food DROP FOREIGN KEY FK_8DF77E246331C7D1');
        $this->addSql('ALTER TABLE survey_fndds_food DROP FOREIGN KEY FK_7795B696331C7D1');
        $this->addSql('ALTER TABLE food_attribute DROP FOREIGN KEY FK_6280826054BC0155');
        $this->addSql('ALTER TABLE food DROP FOREIGN KEY FK_D43829F7F9261ED5');
        $this->addSql('ALTER TABLE retention_factor DROP FOREIGN KEY FK_486DEA888EDE63FE');
        $this->addSql('ALTER TABLE sub_sample_result DROP FOREIGN KEY FK_4C70CA577C8B8C03');
        $this->addSql('ALTER TABLE food_calorie_conversion_factor DROP FOREIGN KEY FK_E46AB4161555AADF');
        $this->addSql('ALTER TABLE food_protein_conversion_factor DROP FOREIGN KEY FK_7938049A1555AADF');
        $this->addSql('ALTER TABLE food_nutrient DROP FOREIGN KEY FK_81DB0B1831A6FF55');
        $this->addSql('ALTER TABLE food_nutrient_derivation DROP FOREIGN KEY FK_C969AF9FE64C4568');
        $this->addSql('ALTER TABLE input_food DROP FOREIGN KEY FK_975592C0E4867BE0');
        $this->addSql('ALTER TABLE lab_method_code DROP FOREIGN KEY FK_E1CCD0D577BF7A9A');
        $this->addSql('ALTER TABLE lab_method_nutrient DROP FOREIGN KEY FK_209C343D77BF7A9A');
        $this->addSql('ALTER TABLE sub_sample_result DROP FOREIGN KEY FK_4C70CA5777BF7A9A');
        $this->addSql('ALTER TABLE food_portion DROP FOREIGN KEY FK_AF1F211E8C177180');
        $this->addSql('ALTER TABLE food_nutrient DROP FOREIGN KEY FK_81DB0B1812DA43C8');
        $this->addSql('ALTER TABLE lab_method_nutrient DROP FOREIGN KEY FK_209C343D12DA43C8');
        $this->addSql('ALTER TABLE nutrient_incoming_name DROP FOREIGN KEY FK_BD05AAC812DA43C8');
        $this->addSql('ALTER TABLE acquisition_sample DROP FOREIGN KEY FK_2B80716ADE87256');
        $this->addSql('ALTER TABLE sub_sample_food DROP FOREIGN KEY FK_8DF77E24DE87256');
        $this->addSql('DROP TABLE acquisition_sample');
        $this->addSql('DROP TABLE agricultural_acquisition');
        $this->addSql('DROP TABLE all_downloaded_table_record_counts');
        $this->addSql('DROP TABLE branded_food');
        $this->addSql('DROP TABLE food');
        $this->addSql('DROP TABLE food_attribute');
        $this->addSql('DROP TABLE food_attribute_type');
        $this->addSql('DROP TABLE food_calorie_conversion_factor');
        $this->addSql('DROP TABLE food_category');
        $this->addSql('DROP TABLE food_component');
        $this->addSql('DROP TABLE food_nutrient');
        $this->addSql('DROP TABLE food_nutrient_conversion_factor');
        $this->addSql('DROP TABLE food_nutrient_derivation');
        $this->addSql('DROP TABLE food_nutrient_source');
        $this->addSql('DROP TABLE food_portion');
        $this->addSql('DROP TABLE food_protein_conversion_factor');
        $this->addSql('DROP TABLE food_update_log_entry');
        $this->addSql('DROP TABLE foundation_food');
        $this->addSql('DROP TABLE input_food');
        $this->addSql('DROP TABLE lab_method');
        $this->addSql('DROP TABLE lab_method_code');
        $this->addSql('DROP TABLE lab_method_nutrient');
        $this->addSql('DROP TABLE market_acquisition');
        $this->addSql('DROP TABLE measure_unit');
        $this->addSql('DROP TABLE nutrient');
        $this->addSql('DROP TABLE nutrient_incoming_name');
        $this->addSql('DROP TABLE retention_factor');
        $this->addSql('DROP TABLE sample_food');
        $this->addSql('DROP TABLE sr_legacy_food');
        $this->addSql('DROP TABLE sub_sample_food');
        $this->addSql('DROP TABLE sub_sample_result');
        $this->addSql('DROP TABLE survey_fndds_food');
        $this->addSql('DROP TABLE wweia_food_category');
    }
}
