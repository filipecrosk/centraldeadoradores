<?php



/**
 * This class defines the structure of the 'usuario' table.
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
class UsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.UsuarioTableMap';

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
        $this->setName('usuario');
        $this->setPhpName('Usuario');
        $this->setClassname('Usuario');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOME', 'Nome', 'VARCHAR', true, 50, null);
        $this->addColumn('APELIDO', 'Apelido', 'VARCHAR', false, 50, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 50, null);
        $this->addColumn('SENHA', 'Senha', 'VARCHAR', true, 50, null);
        $this->addForeignKey('ID_MINISTERIO', 'IdMinisterio', 'INTEGER', 'ministerio', 'ID', false, null, null);
        $this->addForeignKey('ID_BANDA', 'IdBanda', 'INTEGER', 'banda', 'ID', false, null, null);
        $this->addColumn('DESABILITADO', 'Desabilitado', 'BOOLEAN', true, 1, false);
        $this->addColumn('NIVELPERMISSAO', 'Nivelpermissao', 'INTEGER', true, null, 1);
        $this->addColumn('ANIVERSARIO', 'Aniversario', 'VARCHAR', false, 5, null);
        $this->addColumn('ENDERECO', 'Endereco', 'VARCHAR', false, 100, null);
        $this->addColumn('TELEFONE', 'Telefone', 'VARCHAR', false, 13, null);
        $this->addColumn('CELULAR', 'Celular', 'VARCHAR', false, 13, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('BandaRelatedByIdBanda', 'Banda', RelationMap::MANY_TO_ONE, array('Id_Banda' => 'Id', ), null, null);
        $this->addRelation('Ministerio', 'Ministerio', RelationMap::MANY_TO_ONE, array('Id_Ministerio' => 'Id', ), null, null);
        $this->addRelation('AlteracaoInformacaoUsuario', 'AlteracaoInformacaoUsuario', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Usuario', ), null, null, 'AlteracaoInformacaoUsuarios');
        $this->addRelation('BandaRelatedByIdLider', 'Banda', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Lider', ), 'SET NULL', null, 'BandasRelatedByIdLider');
        $this->addRelation('Dados', 'Dados', RelationMap::ONE_TO_MANY, array('Id' => 'id_usuario', ), null, null, 'Dadoss');
        $this->addRelation('EmailDetail', 'EmailDetail', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Destinatario', ), null, null, 'EmailDetails');
        $this->addRelation('EmailHeader', 'EmailHeader', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Usuario', ), null, null, 'EmailHeaders');
        $this->addRelation('EscalaPessoaRelatedByIdResponsavel', 'EscalaPessoa', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Responsavel', ), null, null, 'EscalaPessoasRelatedByIdResponsavel');
        $this->addRelation('EscalaPessoaRelatedByIdUsuario', 'EscalaPessoa', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Usuario', ), null, null, 'EscalaPessoasRelatedByIdUsuario');
        $this->addRelation('UsuarioFuncao', 'UsuarioFuncao', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Usuario', ), 'CASCADE', 'CASCADE', 'UsuarioFuncaos');
        $this->addRelation('UsuarioMinisterio', 'UsuarioMinisterio', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Usuario', ), 'CASCADE', 'CASCADE', 'UsuarioMinisterios');
    } // buildRelations()

} // UsuarioTableMap
