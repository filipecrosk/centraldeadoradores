<?php


/**
 * Base static class for performing query and update operations on the 'dados' table.
 *
 *
 *
 * @package propel.generator.centraldeadoradores.om
 */
abstract class BaseDadosPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'centraldeadoradores';

    /** the table name for this class */
    const TABLE_NAME = 'dados';

    /** the related Propel class for this table */
    const OM_CLASS = 'Dados';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DadosTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 54;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 54;

    /** the column name for the ID field */
    const ID = 'dados.ID';

    /** the column name for the ESTAEMCELULA field */
    const ESTAEMCELULA = 'dados.ESTAEMCELULA';

    /** the column name for the DIACELULA field */
    const DIACELULA = 'dados.DIACELULA';

    /** the column name for the HORACELULA field */
    const HORACELULA = 'dados.HORACELULA';

    /** the column name for the MINUTOCELULA field */
    const MINUTOCELULA = 'dados.MINUTOCELULA';

    /** the column name for the PERIODOCELULA field */
    const PERIODOCELULA = 'dados.PERIODOCELULA';

    /** the column name for the COORDENADOR field */
    const COORDENADOR = 'dados.COORDENADOR';

    /** the column name for the DIACOORDENADOR field */
    const DIACOORDENADOR = 'dados.DIACOORDENADOR';

    /** the column name for the FREQUENCIACOORDENADOR field */
    const FREQUENCIACOORDENADOR = 'dados.FREQUENCIACOORDENADOR';

    /** the column name for the HORACOORDENADOR field */
    const HORACOORDENADOR = 'dados.HORACOORDENADOR';

    /** the column name for the MINUTOCOORDENADOR field */
    const MINUTOCOORDENADOR = 'dados.MINUTOCOORDENADOR';

    /** the column name for the PERIODOCOORDENADOR field */
    const PERIODOCOORDENADOR = 'dados.PERIODOCOORDENADOR';

    /** the column name for the DISCIPULADOR field */
    const DISCIPULADOR = 'dados.DISCIPULADOR';

    /** the column name for the DIADISCIPULADOR field */
    const DIADISCIPULADOR = 'dados.DIADISCIPULADOR';

    /** the column name for the FREQUENCIADISCIPULADOR field */
    const FREQUENCIADISCIPULADOR = 'dados.FREQUENCIADISCIPULADOR';

    /** the column name for the HORADISCIPULADOR field */
    const HORADISCIPULADOR = 'dados.HORADISCIPULADOR';

    /** the column name for the MINUTODISCIPULADOR field */
    const MINUTODISCIPULADOR = 'dados.MINUTODISCIPULADOR';

    /** the column name for the PERIODODISCIPULADOR field */
    const PERIODODISCIPULADOR = 'dados.PERIODODISCIPULADOR';

    /** the column name for the LIDER field */
    const LIDER = 'dados.LIDER';

    /** the column name for the NOMELIDER field */
    const NOMELIDER = 'dados.NOMELIDER';

    /** the column name for the LIDERTREINAMENTO field */
    const LIDERTREINAMENTO = 'dados.LIDERTREINAMENTO';

    /** the column name for the DIALIDER field */
    const DIALIDER = 'dados.DIALIDER';

    /** the column name for the FREQUENCIALIDER field */
    const FREQUENCIALIDER = 'dados.FREQUENCIALIDER';

    /** the column name for the HORALIDER field */
    const HORALIDER = 'dados.HORALIDER';

    /** the column name for the MINUTOLIDER field */
    const MINUTOLIDER = 'dados.MINUTOLIDER';

    /** the column name for the PERIODOLIDER field */
    const PERIODOLIDER = 'dados.PERIODOLIDER';

    /** the column name for the CCM field */
    const CCM = 'dados.CCM';

    /** the column name for the DIACCM field */
    const DIACCM = 'dados.DIACCM';

    /** the column name for the HORACCM field */
    const HORACCM = 'dados.HORACCM';

    /** the column name for the MINUTOCCM field */
    const MINUTOCCM = 'dados.MINUTOCCM';

    /** the column name for the PERIODOCCM field */
    const PERIODOCCM = 'dados.PERIODOCCM';

    /** the column name for the MANHADOMINGO field */
    const MANHADOMINGO = 'dados.MANHADOMINGO';

    /** the column name for the MANHASEGUNDA field */
    const MANHASEGUNDA = 'dados.MANHASEGUNDA';

    /** the column name for the MANHATERCA field */
    const MANHATERCA = 'dados.MANHATERCA';

    /** the column name for the MANHAQUARTA field */
    const MANHAQUARTA = 'dados.MANHAQUARTA';

    /** the column name for the MANHAQUINTA field */
    const MANHAQUINTA = 'dados.MANHAQUINTA';

    /** the column name for the MANHASEXTA field */
    const MANHASEXTA = 'dados.MANHASEXTA';

    /** the column name for the MANHASABADO field */
    const MANHASABADO = 'dados.MANHASABADO';

    /** the column name for the TARDEDOMINGO field */
    const TARDEDOMINGO = 'dados.TARDEDOMINGO';

    /** the column name for the TARDESEGUNDA field */
    const TARDESEGUNDA = 'dados.TARDESEGUNDA';

    /** the column name for the TARDETERCA field */
    const TARDETERCA = 'dados.TARDETERCA';

    /** the column name for the TARDEQUARTA field */
    const TARDEQUARTA = 'dados.TARDEQUARTA';

    /** the column name for the TARDEQUINTA field */
    const TARDEQUINTA = 'dados.TARDEQUINTA';

    /** the column name for the TARDESEXTA field */
    const TARDESEXTA = 'dados.TARDESEXTA';

    /** the column name for the TARDESABADO field */
    const TARDESABADO = 'dados.TARDESABADO';

    /** the column name for the NOITEDOMINGO field */
    const NOITEDOMINGO = 'dados.NOITEDOMINGO';

    /** the column name for the NOITESEGUNDA field */
    const NOITESEGUNDA = 'dados.NOITESEGUNDA';

    /** the column name for the NOITETERCA field */
    const NOITETERCA = 'dados.NOITETERCA';

    /** the column name for the NOITEQUARTA field */
    const NOITEQUARTA = 'dados.NOITEQUARTA';

    /** the column name for the NOITEQUINTA field */
    const NOITEQUINTA = 'dados.NOITEQUINTA';

    /** the column name for the NOITESEXTA field */
    const NOITESEXTA = 'dados.NOITESEXTA';

    /** the column name for the NOITESABADO field */
    const NOITESABADO = 'dados.NOITESABADO';

    /** the column name for the OBSERVACAO field */
    const OBSERVACAO = 'dados.OBSERVACAO';

    /** the column name for the ID_USUARIO field */
    const ID_USUARIO = 'dados.ID_USUARIO';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Dados objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Dados[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DadosPeer::$fieldNames[DadosPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Estaemcelula', 'Diacelula', 'Horacelula', 'Minutocelula', 'Periodocelula', 'Coordenador', 'Diacoordenador', 'Frequenciacoordenador', 'Horacoordenador', 'Minutocoordenador', 'Periodocoordenador', 'Discipulador', 'Diadiscipulador', 'Frequenciadiscipulador', 'Horadiscipulador', 'Minutodiscipulador', 'Periododiscipulador', 'Lider', 'Nomelider', 'Lidertreinamento', 'Dialider', 'Frequencialider', 'Horalider', 'Minutolider', 'Periodolider', 'Ccm', 'Diaccm', 'Horaccm', 'Minutoccm', 'Periodoccm', 'Manhadomingo', 'Manhasegunda', 'Manhaterca', 'Manhaquarta', 'Manhaquinta', 'Manhasexta', 'Manhasabado', 'Tardedomingo', 'Tardesegunda', 'Tardeterca', 'Tardequarta', 'Tardequinta', 'Tardesexta', 'Tardesabado', 'Noitedomingo', 'Noitesegunda', 'Noiteterca', 'Noitequarta', 'Noitequinta', 'Noitesexta', 'Noitesabado', 'Observacao', 'IdUsuario', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'estaemcelula', 'diacelula', 'horacelula', 'minutocelula', 'periodocelula', 'coordenador', 'diacoordenador', 'frequenciacoordenador', 'horacoordenador', 'minutocoordenador', 'periodocoordenador', 'discipulador', 'diadiscipulador', 'frequenciadiscipulador', 'horadiscipulador', 'minutodiscipulador', 'periododiscipulador', 'lider', 'nomelider', 'lidertreinamento', 'dialider', 'frequencialider', 'horalider', 'minutolider', 'periodolider', 'ccm', 'diaccm', 'horaccm', 'minutoccm', 'periodoccm', 'manhadomingo', 'manhasegunda', 'manhaterca', 'manhaquarta', 'manhaquinta', 'manhasexta', 'manhasabado', 'tardedomingo', 'tardesegunda', 'tardeterca', 'tardequarta', 'tardequinta', 'tardesexta', 'tardesabado', 'noitedomingo', 'noitesegunda', 'noiteterca', 'noitequarta', 'noitequinta', 'noitesexta', 'noitesabado', 'observacao', 'idUsuario', ),
        BasePeer::TYPE_COLNAME => array (DadosPeer::ID, DadosPeer::ESTAEMCELULA, DadosPeer::DIACELULA, DadosPeer::HORACELULA, DadosPeer::MINUTOCELULA, DadosPeer::PERIODOCELULA, DadosPeer::COORDENADOR, DadosPeer::DIACOORDENADOR, DadosPeer::FREQUENCIACOORDENADOR, DadosPeer::HORACOORDENADOR, DadosPeer::MINUTOCOORDENADOR, DadosPeer::PERIODOCOORDENADOR, DadosPeer::DISCIPULADOR, DadosPeer::DIADISCIPULADOR, DadosPeer::FREQUENCIADISCIPULADOR, DadosPeer::HORADISCIPULADOR, DadosPeer::MINUTODISCIPULADOR, DadosPeer::PERIODODISCIPULADOR, DadosPeer::LIDER, DadosPeer::NOMELIDER, DadosPeer::LIDERTREINAMENTO, DadosPeer::DIALIDER, DadosPeer::FREQUENCIALIDER, DadosPeer::HORALIDER, DadosPeer::MINUTOLIDER, DadosPeer::PERIODOLIDER, DadosPeer::CCM, DadosPeer::DIACCM, DadosPeer::HORACCM, DadosPeer::MINUTOCCM, DadosPeer::PERIODOCCM, DadosPeer::MANHADOMINGO, DadosPeer::MANHASEGUNDA, DadosPeer::MANHATERCA, DadosPeer::MANHAQUARTA, DadosPeer::MANHAQUINTA, DadosPeer::MANHASEXTA, DadosPeer::MANHASABADO, DadosPeer::TARDEDOMINGO, DadosPeer::TARDESEGUNDA, DadosPeer::TARDETERCA, DadosPeer::TARDEQUARTA, DadosPeer::TARDEQUINTA, DadosPeer::TARDESEXTA, DadosPeer::TARDESABADO, DadosPeer::NOITEDOMINGO, DadosPeer::NOITESEGUNDA, DadosPeer::NOITETERCA, DadosPeer::NOITEQUARTA, DadosPeer::NOITEQUINTA, DadosPeer::NOITESEXTA, DadosPeer::NOITESABADO, DadosPeer::OBSERVACAO, DadosPeer::ID_USUARIO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ESTAEMCELULA', 'DIACELULA', 'HORACELULA', 'MINUTOCELULA', 'PERIODOCELULA', 'COORDENADOR', 'DIACOORDENADOR', 'FREQUENCIACOORDENADOR', 'HORACOORDENADOR', 'MINUTOCOORDENADOR', 'PERIODOCOORDENADOR', 'DISCIPULADOR', 'DIADISCIPULADOR', 'FREQUENCIADISCIPULADOR', 'HORADISCIPULADOR', 'MINUTODISCIPULADOR', 'PERIODODISCIPULADOR', 'LIDER', 'NOMELIDER', 'LIDERTREINAMENTO', 'DIALIDER', 'FREQUENCIALIDER', 'HORALIDER', 'MINUTOLIDER', 'PERIODOLIDER', 'CCM', 'DIACCM', 'HORACCM', 'MINUTOCCM', 'PERIODOCCM', 'MANHADOMINGO', 'MANHASEGUNDA', 'MANHATERCA', 'MANHAQUARTA', 'MANHAQUINTA', 'MANHASEXTA', 'MANHASABADO', 'TARDEDOMINGO', 'TARDESEGUNDA', 'TARDETERCA', 'TARDEQUARTA', 'TARDEQUINTA', 'TARDESEXTA', 'TARDESABADO', 'NOITEDOMINGO', 'NOITESEGUNDA', 'NOITETERCA', 'NOITEQUARTA', 'NOITEQUINTA', 'NOITESEXTA', 'NOITESABADO', 'OBSERVACAO', 'ID_USUARIO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'estaEmCelula', 'diaCelula', 'horaCelula', 'minutoCelula', 'periodoCelula', 'coordenador', 'diaCoordenador', 'frequenciaCoordenador', 'horaCoordenador', 'minutoCoordenador', 'periodoCoordenador', 'discipulador', 'diaDiscipulador', 'frequenciaDiscipulador', 'horaDiscipulador', 'minutoDiscipulador', 'periodoDiscipulador', 'lider', 'nomeLider', 'liderTreinamento', 'diaLider', 'frequenciaLider', 'horaLider', 'minutoLider', 'periodoLider', 'ccm', 'diaCCM', 'horaCCM', 'minutoCCM', 'periodoCCM', 'manhaDomingo', 'manhaSegunda', 'manhaTerca', 'manhaQuarta', 'manhaQuinta', 'manhaSexta', 'manhaSabado', 'tardeDomingo', 'tardeSegunda', 'tardeTerca', 'tardeQuarta', 'tardeQuinta', 'tardeSexta', 'tardeSabado', 'noiteDomingo', 'noiteSegunda', 'noiteTerca', 'noiteQuarta', 'noiteQuinta', 'noiteSexta', 'noiteSabado', 'observacao', 'id_usuario', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DadosPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Estaemcelula' => 1, 'Diacelula' => 2, 'Horacelula' => 3, 'Minutocelula' => 4, 'Periodocelula' => 5, 'Coordenador' => 6, 'Diacoordenador' => 7, 'Frequenciacoordenador' => 8, 'Horacoordenador' => 9, 'Minutocoordenador' => 10, 'Periodocoordenador' => 11, 'Discipulador' => 12, 'Diadiscipulador' => 13, 'Frequenciadiscipulador' => 14, 'Horadiscipulador' => 15, 'Minutodiscipulador' => 16, 'Periododiscipulador' => 17, 'Lider' => 18, 'Nomelider' => 19, 'Lidertreinamento' => 20, 'Dialider' => 21, 'Frequencialider' => 22, 'Horalider' => 23, 'Minutolider' => 24, 'Periodolider' => 25, 'Ccm' => 26, 'Diaccm' => 27, 'Horaccm' => 28, 'Minutoccm' => 29, 'Periodoccm' => 30, 'Manhadomingo' => 31, 'Manhasegunda' => 32, 'Manhaterca' => 33, 'Manhaquarta' => 34, 'Manhaquinta' => 35, 'Manhasexta' => 36, 'Manhasabado' => 37, 'Tardedomingo' => 38, 'Tardesegunda' => 39, 'Tardeterca' => 40, 'Tardequarta' => 41, 'Tardequinta' => 42, 'Tardesexta' => 43, 'Tardesabado' => 44, 'Noitedomingo' => 45, 'Noitesegunda' => 46, 'Noiteterca' => 47, 'Noitequarta' => 48, 'Noitequinta' => 49, 'Noitesexta' => 50, 'Noitesabado' => 51, 'Observacao' => 52, 'IdUsuario' => 53, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'estaemcelula' => 1, 'diacelula' => 2, 'horacelula' => 3, 'minutocelula' => 4, 'periodocelula' => 5, 'coordenador' => 6, 'diacoordenador' => 7, 'frequenciacoordenador' => 8, 'horacoordenador' => 9, 'minutocoordenador' => 10, 'periodocoordenador' => 11, 'discipulador' => 12, 'diadiscipulador' => 13, 'frequenciadiscipulador' => 14, 'horadiscipulador' => 15, 'minutodiscipulador' => 16, 'periododiscipulador' => 17, 'lider' => 18, 'nomelider' => 19, 'lidertreinamento' => 20, 'dialider' => 21, 'frequencialider' => 22, 'horalider' => 23, 'minutolider' => 24, 'periodolider' => 25, 'ccm' => 26, 'diaccm' => 27, 'horaccm' => 28, 'minutoccm' => 29, 'periodoccm' => 30, 'manhadomingo' => 31, 'manhasegunda' => 32, 'manhaterca' => 33, 'manhaquarta' => 34, 'manhaquinta' => 35, 'manhasexta' => 36, 'manhasabado' => 37, 'tardedomingo' => 38, 'tardesegunda' => 39, 'tardeterca' => 40, 'tardequarta' => 41, 'tardequinta' => 42, 'tardesexta' => 43, 'tardesabado' => 44, 'noitedomingo' => 45, 'noitesegunda' => 46, 'noiteterca' => 47, 'noitequarta' => 48, 'noitequinta' => 49, 'noitesexta' => 50, 'noitesabado' => 51, 'observacao' => 52, 'idUsuario' => 53, ),
        BasePeer::TYPE_COLNAME => array (DadosPeer::ID => 0, DadosPeer::ESTAEMCELULA => 1, DadosPeer::DIACELULA => 2, DadosPeer::HORACELULA => 3, DadosPeer::MINUTOCELULA => 4, DadosPeer::PERIODOCELULA => 5, DadosPeer::COORDENADOR => 6, DadosPeer::DIACOORDENADOR => 7, DadosPeer::FREQUENCIACOORDENADOR => 8, DadosPeer::HORACOORDENADOR => 9, DadosPeer::MINUTOCOORDENADOR => 10, DadosPeer::PERIODOCOORDENADOR => 11, DadosPeer::DISCIPULADOR => 12, DadosPeer::DIADISCIPULADOR => 13, DadosPeer::FREQUENCIADISCIPULADOR => 14, DadosPeer::HORADISCIPULADOR => 15, DadosPeer::MINUTODISCIPULADOR => 16, DadosPeer::PERIODODISCIPULADOR => 17, DadosPeer::LIDER => 18, DadosPeer::NOMELIDER => 19, DadosPeer::LIDERTREINAMENTO => 20, DadosPeer::DIALIDER => 21, DadosPeer::FREQUENCIALIDER => 22, DadosPeer::HORALIDER => 23, DadosPeer::MINUTOLIDER => 24, DadosPeer::PERIODOLIDER => 25, DadosPeer::CCM => 26, DadosPeer::DIACCM => 27, DadosPeer::HORACCM => 28, DadosPeer::MINUTOCCM => 29, DadosPeer::PERIODOCCM => 30, DadosPeer::MANHADOMINGO => 31, DadosPeer::MANHASEGUNDA => 32, DadosPeer::MANHATERCA => 33, DadosPeer::MANHAQUARTA => 34, DadosPeer::MANHAQUINTA => 35, DadosPeer::MANHASEXTA => 36, DadosPeer::MANHASABADO => 37, DadosPeer::TARDEDOMINGO => 38, DadosPeer::TARDESEGUNDA => 39, DadosPeer::TARDETERCA => 40, DadosPeer::TARDEQUARTA => 41, DadosPeer::TARDEQUINTA => 42, DadosPeer::TARDESEXTA => 43, DadosPeer::TARDESABADO => 44, DadosPeer::NOITEDOMINGO => 45, DadosPeer::NOITESEGUNDA => 46, DadosPeer::NOITETERCA => 47, DadosPeer::NOITEQUARTA => 48, DadosPeer::NOITEQUINTA => 49, DadosPeer::NOITESEXTA => 50, DadosPeer::NOITESABADO => 51, DadosPeer::OBSERVACAO => 52, DadosPeer::ID_USUARIO => 53, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ESTAEMCELULA' => 1, 'DIACELULA' => 2, 'HORACELULA' => 3, 'MINUTOCELULA' => 4, 'PERIODOCELULA' => 5, 'COORDENADOR' => 6, 'DIACOORDENADOR' => 7, 'FREQUENCIACOORDENADOR' => 8, 'HORACOORDENADOR' => 9, 'MINUTOCOORDENADOR' => 10, 'PERIODOCOORDENADOR' => 11, 'DISCIPULADOR' => 12, 'DIADISCIPULADOR' => 13, 'FREQUENCIADISCIPULADOR' => 14, 'HORADISCIPULADOR' => 15, 'MINUTODISCIPULADOR' => 16, 'PERIODODISCIPULADOR' => 17, 'LIDER' => 18, 'NOMELIDER' => 19, 'LIDERTREINAMENTO' => 20, 'DIALIDER' => 21, 'FREQUENCIALIDER' => 22, 'HORALIDER' => 23, 'MINUTOLIDER' => 24, 'PERIODOLIDER' => 25, 'CCM' => 26, 'DIACCM' => 27, 'HORACCM' => 28, 'MINUTOCCM' => 29, 'PERIODOCCM' => 30, 'MANHADOMINGO' => 31, 'MANHASEGUNDA' => 32, 'MANHATERCA' => 33, 'MANHAQUARTA' => 34, 'MANHAQUINTA' => 35, 'MANHASEXTA' => 36, 'MANHASABADO' => 37, 'TARDEDOMINGO' => 38, 'TARDESEGUNDA' => 39, 'TARDETERCA' => 40, 'TARDEQUARTA' => 41, 'TARDEQUINTA' => 42, 'TARDESEXTA' => 43, 'TARDESABADO' => 44, 'NOITEDOMINGO' => 45, 'NOITESEGUNDA' => 46, 'NOITETERCA' => 47, 'NOITEQUARTA' => 48, 'NOITEQUINTA' => 49, 'NOITESEXTA' => 50, 'NOITESABADO' => 51, 'OBSERVACAO' => 52, 'ID_USUARIO' => 53, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'estaEmCelula' => 1, 'diaCelula' => 2, 'horaCelula' => 3, 'minutoCelula' => 4, 'periodoCelula' => 5, 'coordenador' => 6, 'diaCoordenador' => 7, 'frequenciaCoordenador' => 8, 'horaCoordenador' => 9, 'minutoCoordenador' => 10, 'periodoCoordenador' => 11, 'discipulador' => 12, 'diaDiscipulador' => 13, 'frequenciaDiscipulador' => 14, 'horaDiscipulador' => 15, 'minutoDiscipulador' => 16, 'periodoDiscipulador' => 17, 'lider' => 18, 'nomeLider' => 19, 'liderTreinamento' => 20, 'diaLider' => 21, 'frequenciaLider' => 22, 'horaLider' => 23, 'minutoLider' => 24, 'periodoLider' => 25, 'ccm' => 26, 'diaCCM' => 27, 'horaCCM' => 28, 'minutoCCM' => 29, 'periodoCCM' => 30, 'manhaDomingo' => 31, 'manhaSegunda' => 32, 'manhaTerca' => 33, 'manhaQuarta' => 34, 'manhaQuinta' => 35, 'manhaSexta' => 36, 'manhaSabado' => 37, 'tardeDomingo' => 38, 'tardeSegunda' => 39, 'tardeTerca' => 40, 'tardeQuarta' => 41, 'tardeQuinta' => 42, 'tardeSexta' => 43, 'tardeSabado' => 44, 'noiteDomingo' => 45, 'noiteSegunda' => 46, 'noiteTerca' => 47, 'noiteQuarta' => 48, 'noiteQuinta' => 49, 'noiteSexta' => 50, 'noiteSabado' => 51, 'observacao' => 52, 'id_usuario' => 53, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = DadosPeer::getFieldNames($toType);
        $key = isset(DadosPeer::$fieldKeys[$fromType][$name]) ? DadosPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DadosPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, DadosPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DadosPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. DadosPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DadosPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(DadosPeer::ID);
            $criteria->addSelectColumn(DadosPeer::ESTAEMCELULA);
            $criteria->addSelectColumn(DadosPeer::DIACELULA);
            $criteria->addSelectColumn(DadosPeer::HORACELULA);
            $criteria->addSelectColumn(DadosPeer::MINUTOCELULA);
            $criteria->addSelectColumn(DadosPeer::PERIODOCELULA);
            $criteria->addSelectColumn(DadosPeer::COORDENADOR);
            $criteria->addSelectColumn(DadosPeer::DIACOORDENADOR);
            $criteria->addSelectColumn(DadosPeer::FREQUENCIACOORDENADOR);
            $criteria->addSelectColumn(DadosPeer::HORACOORDENADOR);
            $criteria->addSelectColumn(DadosPeer::MINUTOCOORDENADOR);
            $criteria->addSelectColumn(DadosPeer::PERIODOCOORDENADOR);
            $criteria->addSelectColumn(DadosPeer::DISCIPULADOR);
            $criteria->addSelectColumn(DadosPeer::DIADISCIPULADOR);
            $criteria->addSelectColumn(DadosPeer::FREQUENCIADISCIPULADOR);
            $criteria->addSelectColumn(DadosPeer::HORADISCIPULADOR);
            $criteria->addSelectColumn(DadosPeer::MINUTODISCIPULADOR);
            $criteria->addSelectColumn(DadosPeer::PERIODODISCIPULADOR);
            $criteria->addSelectColumn(DadosPeer::LIDER);
            $criteria->addSelectColumn(DadosPeer::NOMELIDER);
            $criteria->addSelectColumn(DadosPeer::LIDERTREINAMENTO);
            $criteria->addSelectColumn(DadosPeer::DIALIDER);
            $criteria->addSelectColumn(DadosPeer::FREQUENCIALIDER);
            $criteria->addSelectColumn(DadosPeer::HORALIDER);
            $criteria->addSelectColumn(DadosPeer::MINUTOLIDER);
            $criteria->addSelectColumn(DadosPeer::PERIODOLIDER);
            $criteria->addSelectColumn(DadosPeer::CCM);
            $criteria->addSelectColumn(DadosPeer::DIACCM);
            $criteria->addSelectColumn(DadosPeer::HORACCM);
            $criteria->addSelectColumn(DadosPeer::MINUTOCCM);
            $criteria->addSelectColumn(DadosPeer::PERIODOCCM);
            $criteria->addSelectColumn(DadosPeer::MANHADOMINGO);
            $criteria->addSelectColumn(DadosPeer::MANHASEGUNDA);
            $criteria->addSelectColumn(DadosPeer::MANHATERCA);
            $criteria->addSelectColumn(DadosPeer::MANHAQUARTA);
            $criteria->addSelectColumn(DadosPeer::MANHAQUINTA);
            $criteria->addSelectColumn(DadosPeer::MANHASEXTA);
            $criteria->addSelectColumn(DadosPeer::MANHASABADO);
            $criteria->addSelectColumn(DadosPeer::TARDEDOMINGO);
            $criteria->addSelectColumn(DadosPeer::TARDESEGUNDA);
            $criteria->addSelectColumn(DadosPeer::TARDETERCA);
            $criteria->addSelectColumn(DadosPeer::TARDEQUARTA);
            $criteria->addSelectColumn(DadosPeer::TARDEQUINTA);
            $criteria->addSelectColumn(DadosPeer::TARDESEXTA);
            $criteria->addSelectColumn(DadosPeer::TARDESABADO);
            $criteria->addSelectColumn(DadosPeer::NOITEDOMINGO);
            $criteria->addSelectColumn(DadosPeer::NOITESEGUNDA);
            $criteria->addSelectColumn(DadosPeer::NOITETERCA);
            $criteria->addSelectColumn(DadosPeer::NOITEQUARTA);
            $criteria->addSelectColumn(DadosPeer::NOITEQUINTA);
            $criteria->addSelectColumn(DadosPeer::NOITESEXTA);
            $criteria->addSelectColumn(DadosPeer::NOITESABADO);
            $criteria->addSelectColumn(DadosPeer::OBSERVACAO);
            $criteria->addSelectColumn(DadosPeer::ID_USUARIO);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ESTAEMCELULA');
            $criteria->addSelectColumn($alias . '.DIACELULA');
            $criteria->addSelectColumn($alias . '.HORACELULA');
            $criteria->addSelectColumn($alias . '.MINUTOCELULA');
            $criteria->addSelectColumn($alias . '.PERIODOCELULA');
            $criteria->addSelectColumn($alias . '.COORDENADOR');
            $criteria->addSelectColumn($alias . '.DIACOORDENADOR');
            $criteria->addSelectColumn($alias . '.FREQUENCIACOORDENADOR');
            $criteria->addSelectColumn($alias . '.HORACOORDENADOR');
            $criteria->addSelectColumn($alias . '.MINUTOCOORDENADOR');
            $criteria->addSelectColumn($alias . '.PERIODOCOORDENADOR');
            $criteria->addSelectColumn($alias . '.DISCIPULADOR');
            $criteria->addSelectColumn($alias . '.DIADISCIPULADOR');
            $criteria->addSelectColumn($alias . '.FREQUENCIADISCIPULADOR');
            $criteria->addSelectColumn($alias . '.HORADISCIPULADOR');
            $criteria->addSelectColumn($alias . '.MINUTODISCIPULADOR');
            $criteria->addSelectColumn($alias . '.PERIODODISCIPULADOR');
            $criteria->addSelectColumn($alias . '.LIDER');
            $criteria->addSelectColumn($alias . '.NOMELIDER');
            $criteria->addSelectColumn($alias . '.LIDERTREINAMENTO');
            $criteria->addSelectColumn($alias . '.DIALIDER');
            $criteria->addSelectColumn($alias . '.FREQUENCIALIDER');
            $criteria->addSelectColumn($alias . '.HORALIDER');
            $criteria->addSelectColumn($alias . '.MINUTOLIDER');
            $criteria->addSelectColumn($alias . '.PERIODOLIDER');
            $criteria->addSelectColumn($alias . '.CCM');
            $criteria->addSelectColumn($alias . '.DIACCM');
            $criteria->addSelectColumn($alias . '.HORACCM');
            $criteria->addSelectColumn($alias . '.MINUTOCCM');
            $criteria->addSelectColumn($alias . '.PERIODOCCM');
            $criteria->addSelectColumn($alias . '.MANHADOMINGO');
            $criteria->addSelectColumn($alias . '.MANHASEGUNDA');
            $criteria->addSelectColumn($alias . '.MANHATERCA');
            $criteria->addSelectColumn($alias . '.MANHAQUARTA');
            $criteria->addSelectColumn($alias . '.MANHAQUINTA');
            $criteria->addSelectColumn($alias . '.MANHASEXTA');
            $criteria->addSelectColumn($alias . '.MANHASABADO');
            $criteria->addSelectColumn($alias . '.TARDEDOMINGO');
            $criteria->addSelectColumn($alias . '.TARDESEGUNDA');
            $criteria->addSelectColumn($alias . '.TARDETERCA');
            $criteria->addSelectColumn($alias . '.TARDEQUARTA');
            $criteria->addSelectColumn($alias . '.TARDEQUINTA');
            $criteria->addSelectColumn($alias . '.TARDESEXTA');
            $criteria->addSelectColumn($alias . '.TARDESABADO');
            $criteria->addSelectColumn($alias . '.NOITEDOMINGO');
            $criteria->addSelectColumn($alias . '.NOITESEGUNDA');
            $criteria->addSelectColumn($alias . '.NOITETERCA');
            $criteria->addSelectColumn($alias . '.NOITEQUARTA');
            $criteria->addSelectColumn($alias . '.NOITEQUINTA');
            $criteria->addSelectColumn($alias . '.NOITESEXTA');
            $criteria->addSelectColumn($alias . '.NOITESABADO');
            $criteria->addSelectColumn($alias . '.OBSERVACAO');
            $criteria->addSelectColumn($alias . '.ID_USUARIO');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DadosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DadosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DadosPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Dados
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DadosPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return DadosPeer::populateObjects(DadosPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DadosPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DadosPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Dados $obj A Dados object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            DadosPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Dados object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Dados) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Dados object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DadosPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Dados Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DadosPeer::$instances[$key])) {
                return DadosPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        DadosPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to dados
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = DadosPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DadosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DadosPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DadosPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Dados object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DadosPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DadosPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DadosPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DadosPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DadosPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Usuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DadosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DadosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DadosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DadosPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Dados objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Dados objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DadosPeer::DATABASE_NAME);
        }

        DadosPeer::addSelectColumns($criteria);
        $startcol = DadosPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(DadosPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DadosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DadosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DadosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DadosPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Dados) to $obj2 (Usuario)
                $obj2->addDados($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DadosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DadosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DadosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DadosPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Dados objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Dados objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DadosPeer::DATABASE_NAME);
        }

        DadosPeer::addSelectColumns($criteria);
        $startcol2 = DadosPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DadosPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DadosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DadosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DadosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DadosPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Usuario rows

            $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Dados) to the collection in $obj2 (Usuario)
                $obj2->addDados($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(DadosPeer::DATABASE_NAME)->getTable(DadosPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDadosPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDadosPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new DadosTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return DadosPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Dados or Criteria object.
     *
     * @param      mixed $values Criteria or Dados object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Dados object
        }

        if ($criteria->containsKey(DadosPeer::ID) && $criteria->keyContainsValue(DadosPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DadosPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DadosPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Dados or Criteria object.
     *
     * @param      mixed $values Criteria or Dados object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DadosPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DadosPeer::ID);
            $value = $criteria->remove(DadosPeer::ID);
            if ($value) {
                $selectCriteria->add(DadosPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DadosPeer::TABLE_NAME);
            }

        } else { // $values is Dados object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DadosPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the dados table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DadosPeer::TABLE_NAME, $con, DadosPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DadosPeer::clearInstancePool();
            DadosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Dados or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Dados object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DadosPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Dados) { // it's a model object
            // invalidate the cache for this single object
            DadosPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DadosPeer::DATABASE_NAME);
            $criteria->add(DadosPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                DadosPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DadosPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DadosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Dados object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Dados $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DadosPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DadosPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(DadosPeer::DATABASE_NAME, DadosPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Dados
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DadosPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DadosPeer::DATABASE_NAME);
        $criteria->add(DadosPeer::ID, $pk);

        $v = DadosPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Dados[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DadosPeer::DATABASE_NAME);
            $criteria->add(DadosPeer::ID, $pks, Criteria::IN);
            $objs = DadosPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDadosPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDadosPeer::buildTableMap();

