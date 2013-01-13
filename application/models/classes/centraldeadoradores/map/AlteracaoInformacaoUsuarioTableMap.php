<?php



/**
 * This class defines the structure of the 'alteracao_informacao_usuario' table.
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
class AlteracaoInformacaoUsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.AlteracaoInformacaoUsuarioTableMap';

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
        $this->setName('alteracao_informacao_usuario');
        $this->setPhpName('AlteracaoInformacaoUsuario');
        $this->setClassname('AlteracaoInformacaoUsuario');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('DATA', 'Data', 'DATE', true, null, null);
        $this->addColumn('NOVA_INFORMACAO', 'NovaInformacao', 'VARCHAR', true, 100, null);
        $this->addColumn('INFORMACAO_ANTIGA', 'InformacaoAntiga', 'VARCHAR', true, 100, null);
        $this->addForeignKey('ID_USUARIO', 'IdUsuario', 'INTEGER', 'usuario', 'ID', true, null, null);
        $this->addForeignKey('ID_TIPO_INFORMACAO_ID', 'IdTipoInformacaoId', 'INTEGER', 'tipo_informacao', 'ID', true, null, null);
        $this->addForeignKey('ID_TOKEN', 'IdToken', 'INTEGER', 'token', 'ID', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('Id_Usuario' => 'Id', ), null, null);
        $this->addRelation('TipoInformacao', 'TipoInformacao', RelationMap::MANY_TO_ONE, array('Id_Tipo_Informacao_Id' => 'Id', ), null, null);
        $this->addRelation('Token', 'Token', RelationMap::MANY_TO_ONE, array('Id_Token' => 'Id', ), null, null);
    } // buildRelations()

} // AlteracaoInformacaoUsuarioTableMap
