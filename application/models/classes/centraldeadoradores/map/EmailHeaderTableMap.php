<?php



/**
 * This class defines the structure of the 'email_header' table.
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
class EmailHeaderTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.EmailHeaderTableMap';

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
        $this->setName('email_header');
        $this->setPhpName('EmailHeader');
        $this->setClassname('EmailHeader');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_EMAIL', 'IdEmail', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_USUARIO', 'IdUsuario', 'INTEGER', 'usuario', 'ID', true, null, null);
        $this->addColumn('DATA_CADASTRO', 'DataCadastro', 'TIMESTAMP', true, null, null);
        $this->addColumn('ASSUNTO', 'Assunto', 'VARCHAR', true, 50, null);
        $this->addColumn('CORPO_MENSAGEM', 'CorpoMensagem', 'CLOB', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('Id_Usuario' => 'Id', ), null, null);
        $this->addRelation('EmailDetail', 'EmailDetail', RelationMap::ONE_TO_MANY, array('Id_Email' => 'Id_Email', ), 'CASCADE', 'CASCADE', 'EmailDetails');
    } // buildRelations()

} // EmailHeaderTableMap
