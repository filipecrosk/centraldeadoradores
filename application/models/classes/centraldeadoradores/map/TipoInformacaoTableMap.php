<?php



/**
 * This class defines the structure of the 'tipo_informacao' table.
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
class TipoInformacaoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.TipoInformacaoTableMap';

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
        $this->setName('tipo_informacao');
        $this->setPhpName('TipoInformacao');
        $this->setClassname('TipoInformacao');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOME', 'Nome', 'VARCHAR', true, 45, null);
        $this->addColumn('REQUER_CONFIRMACAO', 'RequerConfirmacao', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AlteracaoInformacaoUsuario', 'AlteracaoInformacaoUsuario', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Tipo_Informacao_Id', ), null, null, 'AlteracaoInformacaoUsuarios');
    } // buildRelations()

} // TipoInformacaoTableMap
