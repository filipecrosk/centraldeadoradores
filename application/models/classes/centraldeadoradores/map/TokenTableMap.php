<?php



/**
 * This class defines the structure of the 'token' table.
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
class TokenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.TokenTableMap';

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
        $this->setName('token');
        $this->setPhpName('Token');
        $this->setClassname('Token');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('CHAVE', 'Chave', 'VARCHAR', true, 32, null);
        $this->addColumn('UTILIZADA', 'Utilizada', 'INTEGER', true, null, 0);
        $this->addColumn('DATA', 'Data', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AlteracaoInformacaoUsuario', 'AlteracaoInformacaoUsuario', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Token', ), null, null, 'AlteracaoInformacaoUsuarios');
    } // buildRelations()

} // TokenTableMap
