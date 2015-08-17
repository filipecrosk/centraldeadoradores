<?php



/**
 * This class defines the structure of the 'arquivo_email' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.centraldeadoradores.map
 */
class ArquivoEmailTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.ArquivoEmailTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('arquivo_email');
        $this->setPhpName('ArquivoEmail');
        $this->setClassname('ArquivoEmail');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('ID_ARQUIVO', 'IdArquivo', 'INTEGER' , 'arquivo', 'ID', true, null, null);
        $this->addForeignPrimaryKey('ID_EMAIL', 'IdEmail', 'INTEGER' , 'email_header', 'ID_EMAIL', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Arquivo', 'Arquivo', RelationMap::MANY_TO_ONE, array('Id_Arquivo' => 'Id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmailHeader', 'EmailHeader', RelationMap::MANY_TO_ONE, array('Id_Email' => 'Id_Email', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ArquivoEmailTableMap
