<?php



/**
 * This class defines the structure of the 'dados' table.
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
class DadosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.DadosTableMap';

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
        $this->setName('dados');
        $this->setPhpName('Dados');
        $this->setClassname('Dados');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ESTAEMCELULA', 'Estaemcelula', 'VARCHAR', false, 1, null);
        $this->addColumn('DIACELULA', 'Diacelula', 'INTEGER', false, null, -1);
        $this->addColumn('HORACELULA', 'Horacelula', 'INTEGER', false, null, -1);
        $this->addColumn('MINUTOCELULA', 'Minutocelula', 'INTEGER', false, null, -1);
        $this->addColumn('PERIODOCELULA', 'Periodocelula', 'INTEGER', false, null, -1);
        $this->addColumn('COORDENADOR', 'Coordenador', 'VARCHAR', false, 1, null);
        $this->addColumn('DIACOORDENADOR', 'Diacoordenador', 'INTEGER', false, null, -1);
        $this->addColumn('FREQUENCIACOORDENADOR', 'Frequenciacoordenador', 'INTEGER', false, null, -1);
        $this->addColumn('HORACOORDENADOR', 'Horacoordenador', 'INTEGER', false, null, -1);
        $this->addColumn('MINUTOCOORDENADOR', 'Minutocoordenador', 'INTEGER', false, null, -1);
        $this->addColumn('PERIODOCOORDENADOR', 'Periodocoordenador', 'INTEGER', false, null, -1);
        $this->addColumn('DISCIPULADOR', 'Discipulador', 'VARCHAR', false, 1, null);
        $this->addColumn('DIADISCIPULADOR', 'Diadiscipulador', 'INTEGER', false, null, -1);
        $this->addColumn('FREQUENCIADISCIPULADOR', 'Frequenciadiscipulador', 'INTEGER', false, null, -1);
        $this->addColumn('HORADISCIPULADOR', 'Horadiscipulador', 'INTEGER', false, null, -1);
        $this->addColumn('MINUTODISCIPULADOR', 'Minutodiscipulador', 'INTEGER', false, null, -1);
        $this->addColumn('PERIODODISCIPULADOR', 'Periododiscipulador', 'INTEGER', false, null, -1);
        $this->addColumn('LIDER', 'Lider', 'VARCHAR', false, 1, null);
        $this->addColumn('NOMELIDER', 'Nomelider', 'VARCHAR', false, 100, null);
        $this->addColumn('LIDERTREINAMENTO', 'Lidertreinamento', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('DIALIDER', 'Dialider', 'INTEGER', false, null, -1);
        $this->addColumn('FREQUENCIALIDER', 'Frequencialider', 'INTEGER', false, null, -1);
        $this->addColumn('HORALIDER', 'Horalider', 'INTEGER', false, null, -1);
        $this->addColumn('MINUTOLIDER', 'Minutolider', 'INTEGER', false, null, -1);
        $this->addColumn('PERIODOLIDER', 'Periodolider', 'INTEGER', false, null, -1);
        $this->addColumn('CCM', 'Ccm', 'VARCHAR', false, 1, null);
        $this->addColumn('DIACCM', 'Diaccm', 'INTEGER', false, null, -1);
        $this->addColumn('HORACCM', 'Horaccm', 'INTEGER', false, null, -1);
        $this->addColumn('MINUTOCCM', 'Minutoccm', 'INTEGER', false, null, -1);
        $this->addColumn('PERIODOCCM', 'Periodoccm', 'INTEGER', false, null, -1);
        $this->addColumn('MANHADOMINGO', 'Manhadomingo', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('MANHASEGUNDA', 'Manhasegunda', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('MANHATERCA', 'Manhaterca', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('MANHAQUARTA', 'Manhaquarta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('MANHAQUINTA', 'Manhaquinta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('MANHASEXTA', 'Manhasexta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('MANHASABADO', 'Manhasabado', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('TARDEDOMINGO', 'Tardedomingo', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('TARDESEGUNDA', 'Tardesegunda', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('TARDETERCA', 'Tardeterca', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('TARDEQUARTA', 'Tardequarta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('TARDEQUINTA', 'Tardequinta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('TARDESEXTA', 'Tardesexta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('TARDESABADO', 'Tardesabado', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('NOITEDOMINGO', 'Noitedomingo', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('NOITESEGUNDA', 'Noitesegunda', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('NOITETERCA', 'Noiteterca', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('NOITEQUARTA', 'Noitequarta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('NOITEQUINTA', 'Noitequinta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('NOITESEXTA', 'Noitesexta', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('NOITESABADO', 'Noitesabado', 'VARCHAR', false, 1, 'b\'0\'');
        $this->addColumn('OBSERVACAO', 'Observacao', 'CLOB', false, null, null);
        $this->addForeignKey('ID_USUARIO', 'IdUsuario', 'INTEGER', 'usuario', 'ID', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('id_usuario' => 'Id', ), null, null);
    } // buildRelations()

} // DadosTableMap
