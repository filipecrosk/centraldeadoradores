<?php


/**
 * Base class that represents a query for the 'dados' table.
 *
 *
 *
 * @method DadosQuery orderById($order = Criteria::ASC) Order by the id column
 * @method DadosQuery orderByEstaemcelula($order = Criteria::ASC) Order by the estaEmCelula column
 * @method DadosQuery orderByDiacelula($order = Criteria::ASC) Order by the diaCelula column
 * @method DadosQuery orderByHoracelula($order = Criteria::ASC) Order by the horaCelula column
 * @method DadosQuery orderByMinutocelula($order = Criteria::ASC) Order by the minutoCelula column
 * @method DadosQuery orderByPeriodocelula($order = Criteria::ASC) Order by the periodoCelula column
 * @method DadosQuery orderByCoordenador($order = Criteria::ASC) Order by the coordenador column
 * @method DadosQuery orderByDiacoordenador($order = Criteria::ASC) Order by the diaCoordenador column
 * @method DadosQuery orderByFrequenciacoordenador($order = Criteria::ASC) Order by the frequenciaCoordenador column
 * @method DadosQuery orderByHoracoordenador($order = Criteria::ASC) Order by the horaCoordenador column
 * @method DadosQuery orderByMinutocoordenador($order = Criteria::ASC) Order by the minutoCoordenador column
 * @method DadosQuery orderByPeriodocoordenador($order = Criteria::ASC) Order by the periodoCoordenador column
 * @method DadosQuery orderByDiscipulador($order = Criteria::ASC) Order by the discipulador column
 * @method DadosQuery orderByDiadiscipulador($order = Criteria::ASC) Order by the diaDiscipulador column
 * @method DadosQuery orderByFrequenciadiscipulador($order = Criteria::ASC) Order by the frequenciaDiscipulador column
 * @method DadosQuery orderByHoradiscipulador($order = Criteria::ASC) Order by the horaDiscipulador column
 * @method DadosQuery orderByMinutodiscipulador($order = Criteria::ASC) Order by the minutoDiscipulador column
 * @method DadosQuery orderByPeriododiscipulador($order = Criteria::ASC) Order by the periodoDiscipulador column
 * @method DadosQuery orderByLider($order = Criteria::ASC) Order by the lider column
 * @method DadosQuery orderByNomelider($order = Criteria::ASC) Order by the nomeLider column
 * @method DadosQuery orderByLidertreinamento($order = Criteria::ASC) Order by the liderTreinamento column
 * @method DadosQuery orderByDialider($order = Criteria::ASC) Order by the diaLider column
 * @method DadosQuery orderByFrequencialider($order = Criteria::ASC) Order by the frequenciaLider column
 * @method DadosQuery orderByHoralider($order = Criteria::ASC) Order by the horaLider column
 * @method DadosQuery orderByMinutolider($order = Criteria::ASC) Order by the minutoLider column
 * @method DadosQuery orderByPeriodolider($order = Criteria::ASC) Order by the periodoLider column
 * @method DadosQuery orderByCcm($order = Criteria::ASC) Order by the ccm column
 * @method DadosQuery orderByDiaccm($order = Criteria::ASC) Order by the diaCCM column
 * @method DadosQuery orderByHoraccm($order = Criteria::ASC) Order by the horaCCM column
 * @method DadosQuery orderByMinutoccm($order = Criteria::ASC) Order by the minutoCCM column
 * @method DadosQuery orderByPeriodoccm($order = Criteria::ASC) Order by the periodoCCM column
 * @method DadosQuery orderByManhadomingo($order = Criteria::ASC) Order by the manhaDomingo column
 * @method DadosQuery orderByManhasegunda($order = Criteria::ASC) Order by the manhaSegunda column
 * @method DadosQuery orderByManhaterca($order = Criteria::ASC) Order by the manhaTerca column
 * @method DadosQuery orderByManhaquarta($order = Criteria::ASC) Order by the manhaQuarta column
 * @method DadosQuery orderByManhaquinta($order = Criteria::ASC) Order by the manhaQuinta column
 * @method DadosQuery orderByManhasexta($order = Criteria::ASC) Order by the manhaSexta column
 * @method DadosQuery orderByManhasabado($order = Criteria::ASC) Order by the manhaSabado column
 * @method DadosQuery orderByTardedomingo($order = Criteria::ASC) Order by the tardeDomingo column
 * @method DadosQuery orderByTardesegunda($order = Criteria::ASC) Order by the tardeSegunda column
 * @method DadosQuery orderByTardeterca($order = Criteria::ASC) Order by the tardeTerca column
 * @method DadosQuery orderByTardequarta($order = Criteria::ASC) Order by the tardeQuarta column
 * @method DadosQuery orderByTardequinta($order = Criteria::ASC) Order by the tardeQuinta column
 * @method DadosQuery orderByTardesexta($order = Criteria::ASC) Order by the tardeSexta column
 * @method DadosQuery orderByTardesabado($order = Criteria::ASC) Order by the tardeSabado column
 * @method DadosQuery orderByNoitedomingo($order = Criteria::ASC) Order by the noiteDomingo column
 * @method DadosQuery orderByNoitesegunda($order = Criteria::ASC) Order by the noiteSegunda column
 * @method DadosQuery orderByNoiteterca($order = Criteria::ASC) Order by the noiteTerca column
 * @method DadosQuery orderByNoitequarta($order = Criteria::ASC) Order by the noiteQuarta column
 * @method DadosQuery orderByNoitequinta($order = Criteria::ASC) Order by the noiteQuinta column
 * @method DadosQuery orderByNoitesexta($order = Criteria::ASC) Order by the noiteSexta column
 * @method DadosQuery orderByNoitesabado($order = Criteria::ASC) Order by the noiteSabado column
 * @method DadosQuery orderByObservacao($order = Criteria::ASC) Order by the observacao column
 * @method DadosQuery orderByIdUsuario($order = Criteria::ASC) Order by the id_usuario column
 *
 * @method DadosQuery groupById() Group by the id column
 * @method DadosQuery groupByEstaemcelula() Group by the estaEmCelula column
 * @method DadosQuery groupByDiacelula() Group by the diaCelula column
 * @method DadosQuery groupByHoracelula() Group by the horaCelula column
 * @method DadosQuery groupByMinutocelula() Group by the minutoCelula column
 * @method DadosQuery groupByPeriodocelula() Group by the periodoCelula column
 * @method DadosQuery groupByCoordenador() Group by the coordenador column
 * @method DadosQuery groupByDiacoordenador() Group by the diaCoordenador column
 * @method DadosQuery groupByFrequenciacoordenador() Group by the frequenciaCoordenador column
 * @method DadosQuery groupByHoracoordenador() Group by the horaCoordenador column
 * @method DadosQuery groupByMinutocoordenador() Group by the minutoCoordenador column
 * @method DadosQuery groupByPeriodocoordenador() Group by the periodoCoordenador column
 * @method DadosQuery groupByDiscipulador() Group by the discipulador column
 * @method DadosQuery groupByDiadiscipulador() Group by the diaDiscipulador column
 * @method DadosQuery groupByFrequenciadiscipulador() Group by the frequenciaDiscipulador column
 * @method DadosQuery groupByHoradiscipulador() Group by the horaDiscipulador column
 * @method DadosQuery groupByMinutodiscipulador() Group by the minutoDiscipulador column
 * @method DadosQuery groupByPeriododiscipulador() Group by the periodoDiscipulador column
 * @method DadosQuery groupByLider() Group by the lider column
 * @method DadosQuery groupByNomelider() Group by the nomeLider column
 * @method DadosQuery groupByLidertreinamento() Group by the liderTreinamento column
 * @method DadosQuery groupByDialider() Group by the diaLider column
 * @method DadosQuery groupByFrequencialider() Group by the frequenciaLider column
 * @method DadosQuery groupByHoralider() Group by the horaLider column
 * @method DadosQuery groupByMinutolider() Group by the minutoLider column
 * @method DadosQuery groupByPeriodolider() Group by the periodoLider column
 * @method DadosQuery groupByCcm() Group by the ccm column
 * @method DadosQuery groupByDiaccm() Group by the diaCCM column
 * @method DadosQuery groupByHoraccm() Group by the horaCCM column
 * @method DadosQuery groupByMinutoccm() Group by the minutoCCM column
 * @method DadosQuery groupByPeriodoccm() Group by the periodoCCM column
 * @method DadosQuery groupByManhadomingo() Group by the manhaDomingo column
 * @method DadosQuery groupByManhasegunda() Group by the manhaSegunda column
 * @method DadosQuery groupByManhaterca() Group by the manhaTerca column
 * @method DadosQuery groupByManhaquarta() Group by the manhaQuarta column
 * @method DadosQuery groupByManhaquinta() Group by the manhaQuinta column
 * @method DadosQuery groupByManhasexta() Group by the manhaSexta column
 * @method DadosQuery groupByManhasabado() Group by the manhaSabado column
 * @method DadosQuery groupByTardedomingo() Group by the tardeDomingo column
 * @method DadosQuery groupByTardesegunda() Group by the tardeSegunda column
 * @method DadosQuery groupByTardeterca() Group by the tardeTerca column
 * @method DadosQuery groupByTardequarta() Group by the tardeQuarta column
 * @method DadosQuery groupByTardequinta() Group by the tardeQuinta column
 * @method DadosQuery groupByTardesexta() Group by the tardeSexta column
 * @method DadosQuery groupByTardesabado() Group by the tardeSabado column
 * @method DadosQuery groupByNoitedomingo() Group by the noiteDomingo column
 * @method DadosQuery groupByNoitesegunda() Group by the noiteSegunda column
 * @method DadosQuery groupByNoiteterca() Group by the noiteTerca column
 * @method DadosQuery groupByNoitequarta() Group by the noiteQuarta column
 * @method DadosQuery groupByNoitequinta() Group by the noiteQuinta column
 * @method DadosQuery groupByNoitesexta() Group by the noiteSexta column
 * @method DadosQuery groupByNoitesabado() Group by the noiteSabado column
 * @method DadosQuery groupByObservacao() Group by the observacao column
 * @method DadosQuery groupByIdUsuario() Group by the id_usuario column
 *
 * @method DadosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DadosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DadosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DadosQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method DadosQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method DadosQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Dados findOne(PropelPDO $con = null) Return the first Dados matching the query
 * @method Dados findOneOrCreate(PropelPDO $con = null) Return the first Dados matching the query, or a new Dados object populated from the query conditions when no match is found
 *
 * @method Dados findOneById(int $id) Return the first Dados filtered by the id column
 * @method Dados findOneByEstaemcelula(string $estaEmCelula) Return the first Dados filtered by the estaEmCelula column
 * @method Dados findOneByDiacelula(int $diaCelula) Return the first Dados filtered by the diaCelula column
 * @method Dados findOneByHoracelula(int $horaCelula) Return the first Dados filtered by the horaCelula column
 * @method Dados findOneByMinutocelula(int $minutoCelula) Return the first Dados filtered by the minutoCelula column
 * @method Dados findOneByPeriodocelula(int $periodoCelula) Return the first Dados filtered by the periodoCelula column
 * @method Dados findOneByCoordenador(string $coordenador) Return the first Dados filtered by the coordenador column
 * @method Dados findOneByDiacoordenador(int $diaCoordenador) Return the first Dados filtered by the diaCoordenador column
 * @method Dados findOneByFrequenciacoordenador(int $frequenciaCoordenador) Return the first Dados filtered by the frequenciaCoordenador column
 * @method Dados findOneByHoracoordenador(int $horaCoordenador) Return the first Dados filtered by the horaCoordenador column
 * @method Dados findOneByMinutocoordenador(int $minutoCoordenador) Return the first Dados filtered by the minutoCoordenador column
 * @method Dados findOneByPeriodocoordenador(int $periodoCoordenador) Return the first Dados filtered by the periodoCoordenador column
 * @method Dados findOneByDiscipulador(string $discipulador) Return the first Dados filtered by the discipulador column
 * @method Dados findOneByDiadiscipulador(int $diaDiscipulador) Return the first Dados filtered by the diaDiscipulador column
 * @method Dados findOneByFrequenciadiscipulador(int $frequenciaDiscipulador) Return the first Dados filtered by the frequenciaDiscipulador column
 * @method Dados findOneByHoradiscipulador(int $horaDiscipulador) Return the first Dados filtered by the horaDiscipulador column
 * @method Dados findOneByMinutodiscipulador(int $minutoDiscipulador) Return the first Dados filtered by the minutoDiscipulador column
 * @method Dados findOneByPeriododiscipulador(int $periodoDiscipulador) Return the first Dados filtered by the periodoDiscipulador column
 * @method Dados findOneByLider(string $lider) Return the first Dados filtered by the lider column
 * @method Dados findOneByNomelider(string $nomeLider) Return the first Dados filtered by the nomeLider column
 * @method Dados findOneByLidertreinamento(string $liderTreinamento) Return the first Dados filtered by the liderTreinamento column
 * @method Dados findOneByDialider(int $diaLider) Return the first Dados filtered by the diaLider column
 * @method Dados findOneByFrequencialider(int $frequenciaLider) Return the first Dados filtered by the frequenciaLider column
 * @method Dados findOneByHoralider(int $horaLider) Return the first Dados filtered by the horaLider column
 * @method Dados findOneByMinutolider(int $minutoLider) Return the first Dados filtered by the minutoLider column
 * @method Dados findOneByPeriodolider(int $periodoLider) Return the first Dados filtered by the periodoLider column
 * @method Dados findOneByCcm(string $ccm) Return the first Dados filtered by the ccm column
 * @method Dados findOneByDiaccm(int $diaCCM) Return the first Dados filtered by the diaCCM column
 * @method Dados findOneByHoraccm(int $horaCCM) Return the first Dados filtered by the horaCCM column
 * @method Dados findOneByMinutoccm(int $minutoCCM) Return the first Dados filtered by the minutoCCM column
 * @method Dados findOneByPeriodoccm(int $periodoCCM) Return the first Dados filtered by the periodoCCM column
 * @method Dados findOneByManhadomingo(string $manhaDomingo) Return the first Dados filtered by the manhaDomingo column
 * @method Dados findOneByManhasegunda(string $manhaSegunda) Return the first Dados filtered by the manhaSegunda column
 * @method Dados findOneByManhaterca(string $manhaTerca) Return the first Dados filtered by the manhaTerca column
 * @method Dados findOneByManhaquarta(string $manhaQuarta) Return the first Dados filtered by the manhaQuarta column
 * @method Dados findOneByManhaquinta(string $manhaQuinta) Return the first Dados filtered by the manhaQuinta column
 * @method Dados findOneByManhasexta(string $manhaSexta) Return the first Dados filtered by the manhaSexta column
 * @method Dados findOneByManhasabado(string $manhaSabado) Return the first Dados filtered by the manhaSabado column
 * @method Dados findOneByTardedomingo(string $tardeDomingo) Return the first Dados filtered by the tardeDomingo column
 * @method Dados findOneByTardesegunda(string $tardeSegunda) Return the first Dados filtered by the tardeSegunda column
 * @method Dados findOneByTardeterca(string $tardeTerca) Return the first Dados filtered by the tardeTerca column
 * @method Dados findOneByTardequarta(string $tardeQuarta) Return the first Dados filtered by the tardeQuarta column
 * @method Dados findOneByTardequinta(string $tardeQuinta) Return the first Dados filtered by the tardeQuinta column
 * @method Dados findOneByTardesexta(string $tardeSexta) Return the first Dados filtered by the tardeSexta column
 * @method Dados findOneByTardesabado(string $tardeSabado) Return the first Dados filtered by the tardeSabado column
 * @method Dados findOneByNoitedomingo(string $noiteDomingo) Return the first Dados filtered by the noiteDomingo column
 * @method Dados findOneByNoitesegunda(string $noiteSegunda) Return the first Dados filtered by the noiteSegunda column
 * @method Dados findOneByNoiteterca(string $noiteTerca) Return the first Dados filtered by the noiteTerca column
 * @method Dados findOneByNoitequarta(string $noiteQuarta) Return the first Dados filtered by the noiteQuarta column
 * @method Dados findOneByNoitequinta(string $noiteQuinta) Return the first Dados filtered by the noiteQuinta column
 * @method Dados findOneByNoitesexta(string $noiteSexta) Return the first Dados filtered by the noiteSexta column
 * @method Dados findOneByNoitesabado(string $noiteSabado) Return the first Dados filtered by the noiteSabado column
 * @method Dados findOneByObservacao(string $observacao) Return the first Dados filtered by the observacao column
 * @method Dados findOneByIdUsuario(int $id_usuario) Return the first Dados filtered by the id_usuario column
 *
 * @method array findById(int $id) Return Dados objects filtered by the id column
 * @method array findByEstaemcelula(string $estaEmCelula) Return Dados objects filtered by the estaEmCelula column
 * @method array findByDiacelula(int $diaCelula) Return Dados objects filtered by the diaCelula column
 * @method array findByHoracelula(int $horaCelula) Return Dados objects filtered by the horaCelula column
 * @method array findByMinutocelula(int $minutoCelula) Return Dados objects filtered by the minutoCelula column
 * @method array findByPeriodocelula(int $periodoCelula) Return Dados objects filtered by the periodoCelula column
 * @method array findByCoordenador(string $coordenador) Return Dados objects filtered by the coordenador column
 * @method array findByDiacoordenador(int $diaCoordenador) Return Dados objects filtered by the diaCoordenador column
 * @method array findByFrequenciacoordenador(int $frequenciaCoordenador) Return Dados objects filtered by the frequenciaCoordenador column
 * @method array findByHoracoordenador(int $horaCoordenador) Return Dados objects filtered by the horaCoordenador column
 * @method array findByMinutocoordenador(int $minutoCoordenador) Return Dados objects filtered by the minutoCoordenador column
 * @method array findByPeriodocoordenador(int $periodoCoordenador) Return Dados objects filtered by the periodoCoordenador column
 * @method array findByDiscipulador(string $discipulador) Return Dados objects filtered by the discipulador column
 * @method array findByDiadiscipulador(int $diaDiscipulador) Return Dados objects filtered by the diaDiscipulador column
 * @method array findByFrequenciadiscipulador(int $frequenciaDiscipulador) Return Dados objects filtered by the frequenciaDiscipulador column
 * @method array findByHoradiscipulador(int $horaDiscipulador) Return Dados objects filtered by the horaDiscipulador column
 * @method array findByMinutodiscipulador(int $minutoDiscipulador) Return Dados objects filtered by the minutoDiscipulador column
 * @method array findByPeriododiscipulador(int $periodoDiscipulador) Return Dados objects filtered by the periodoDiscipulador column
 * @method array findByLider(string $lider) Return Dados objects filtered by the lider column
 * @method array findByNomelider(string $nomeLider) Return Dados objects filtered by the nomeLider column
 * @method array findByLidertreinamento(string $liderTreinamento) Return Dados objects filtered by the liderTreinamento column
 * @method array findByDialider(int $diaLider) Return Dados objects filtered by the diaLider column
 * @method array findByFrequencialider(int $frequenciaLider) Return Dados objects filtered by the frequenciaLider column
 * @method array findByHoralider(int $horaLider) Return Dados objects filtered by the horaLider column
 * @method array findByMinutolider(int $minutoLider) Return Dados objects filtered by the minutoLider column
 * @method array findByPeriodolider(int $periodoLider) Return Dados objects filtered by the periodoLider column
 * @method array findByCcm(string $ccm) Return Dados objects filtered by the ccm column
 * @method array findByDiaccm(int $diaCCM) Return Dados objects filtered by the diaCCM column
 * @method array findByHoraccm(int $horaCCM) Return Dados objects filtered by the horaCCM column
 * @method array findByMinutoccm(int $minutoCCM) Return Dados objects filtered by the minutoCCM column
 * @method array findByPeriodoccm(int $periodoCCM) Return Dados objects filtered by the periodoCCM column
 * @method array findByManhadomingo(string $manhaDomingo) Return Dados objects filtered by the manhaDomingo column
 * @method array findByManhasegunda(string $manhaSegunda) Return Dados objects filtered by the manhaSegunda column
 * @method array findByManhaterca(string $manhaTerca) Return Dados objects filtered by the manhaTerca column
 * @method array findByManhaquarta(string $manhaQuarta) Return Dados objects filtered by the manhaQuarta column
 * @method array findByManhaquinta(string $manhaQuinta) Return Dados objects filtered by the manhaQuinta column
 * @method array findByManhasexta(string $manhaSexta) Return Dados objects filtered by the manhaSexta column
 * @method array findByManhasabado(string $manhaSabado) Return Dados objects filtered by the manhaSabado column
 * @method array findByTardedomingo(string $tardeDomingo) Return Dados objects filtered by the tardeDomingo column
 * @method array findByTardesegunda(string $tardeSegunda) Return Dados objects filtered by the tardeSegunda column
 * @method array findByTardeterca(string $tardeTerca) Return Dados objects filtered by the tardeTerca column
 * @method array findByTardequarta(string $tardeQuarta) Return Dados objects filtered by the tardeQuarta column
 * @method array findByTardequinta(string $tardeQuinta) Return Dados objects filtered by the tardeQuinta column
 * @method array findByTardesexta(string $tardeSexta) Return Dados objects filtered by the tardeSexta column
 * @method array findByTardesabado(string $tardeSabado) Return Dados objects filtered by the tardeSabado column
 * @method array findByNoitedomingo(string $noiteDomingo) Return Dados objects filtered by the noiteDomingo column
 * @method array findByNoitesegunda(string $noiteSegunda) Return Dados objects filtered by the noiteSegunda column
 * @method array findByNoiteterca(string $noiteTerca) Return Dados objects filtered by the noiteTerca column
 * @method array findByNoitequarta(string $noiteQuarta) Return Dados objects filtered by the noiteQuarta column
 * @method array findByNoitequinta(string $noiteQuinta) Return Dados objects filtered by the noiteQuinta column
 * @method array findByNoitesexta(string $noiteSexta) Return Dados objects filtered by the noiteSexta column
 * @method array findByNoitesabado(string $noiteSabado) Return Dados objects filtered by the noiteSabado column
 * @method array findByObservacao(string $observacao) Return Dados objects filtered by the observacao column
 * @method array findByIdUsuario(int $id_usuario) Return Dados objects filtered by the id_usuario column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseDadosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDadosQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'Dados', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DadosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     DadosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DadosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DadosQuery) {
            return $criteria;
        }
        $query = new DadosQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Dados|Dados[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DadosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Dados A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ESTAEMCELULA`, `DIACELULA`, `HORACELULA`, `MINUTOCELULA`, `PERIODOCELULA`, `COORDENADOR`, `DIACOORDENADOR`, `FREQUENCIACOORDENADOR`, `HORACOORDENADOR`, `MINUTOCOORDENADOR`, `PERIODOCOORDENADOR`, `DISCIPULADOR`, `DIADISCIPULADOR`, `FREQUENCIADISCIPULADOR`, `HORADISCIPULADOR`, `MINUTODISCIPULADOR`, `PERIODODISCIPULADOR`, `LIDER`, `NOMELIDER`, `LIDERTREINAMENTO`, `DIALIDER`, `FREQUENCIALIDER`, `HORALIDER`, `MINUTOLIDER`, `PERIODOLIDER`, `CCM`, `DIACCM`, `HORACCM`, `MINUTOCCM`, `PERIODOCCM`, `MANHADOMINGO`, `MANHASEGUNDA`, `MANHATERCA`, `MANHAQUARTA`, `MANHAQUINTA`, `MANHASEXTA`, `MANHASABADO`, `TARDEDOMINGO`, `TARDESEGUNDA`, `TARDETERCA`, `TARDEQUARTA`, `TARDEQUINTA`, `TARDESEXTA`, `TARDESABADO`, `NOITEDOMINGO`, `NOITESEGUNDA`, `NOITETERCA`, `NOITEQUARTA`, `NOITEQUINTA`, `NOITESEXTA`, `NOITESABADO`, `OBSERVACAO`, `ID_USUARIO` FROM `dados` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Dados();
            $obj->hydrate($row);
            DadosPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Dados|Dados[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Dados[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DadosPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DadosPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(DadosPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the estaEmCelula column
     *
     * Example usage:
     * <code>
     * $query->filterByEstaemcelula('fooValue');   // WHERE estaEmCelula = 'fooValue'
     * $query->filterByEstaemcelula('%fooValue%'); // WHERE estaEmCelula LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estaemcelula The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByEstaemcelula($estaemcelula = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estaemcelula)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estaemcelula)) {
                $estaemcelula = str_replace('*', '%', $estaemcelula);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::ESTAEMCELULA, $estaemcelula, $comparison);
    }

    /**
     * Filter the query on the diaCelula column
     *
     * Example usage:
     * <code>
     * $query->filterByDiacelula(1234); // WHERE diaCelula = 1234
     * $query->filterByDiacelula(array(12, 34)); // WHERE diaCelula IN (12, 34)
     * $query->filterByDiacelula(array('min' => 12)); // WHERE diaCelula > 12
     * </code>
     *
     * @param     mixed $diacelula The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByDiacelula($diacelula = null, $comparison = null)
    {
        if (is_array($diacelula)) {
            $useMinMax = false;
            if (isset($diacelula['min'])) {
                $this->addUsingAlias(DadosPeer::DIACELULA, $diacelula['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diacelula['max'])) {
                $this->addUsingAlias(DadosPeer::DIACELULA, $diacelula['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::DIACELULA, $diacelula, $comparison);
    }

    /**
     * Filter the query on the horaCelula column
     *
     * Example usage:
     * <code>
     * $query->filterByHoracelula(1234); // WHERE horaCelula = 1234
     * $query->filterByHoracelula(array(12, 34)); // WHERE horaCelula IN (12, 34)
     * $query->filterByHoracelula(array('min' => 12)); // WHERE horaCelula > 12
     * </code>
     *
     * @param     mixed $horacelula The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByHoracelula($horacelula = null, $comparison = null)
    {
        if (is_array($horacelula)) {
            $useMinMax = false;
            if (isset($horacelula['min'])) {
                $this->addUsingAlias(DadosPeer::HORACELULA, $horacelula['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($horacelula['max'])) {
                $this->addUsingAlias(DadosPeer::HORACELULA, $horacelula['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::HORACELULA, $horacelula, $comparison);
    }

    /**
     * Filter the query on the minutoCelula column
     *
     * Example usage:
     * <code>
     * $query->filterByMinutocelula(1234); // WHERE minutoCelula = 1234
     * $query->filterByMinutocelula(array(12, 34)); // WHERE minutoCelula IN (12, 34)
     * $query->filterByMinutocelula(array('min' => 12)); // WHERE minutoCelula > 12
     * </code>
     *
     * @param     mixed $minutocelula The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByMinutocelula($minutocelula = null, $comparison = null)
    {
        if (is_array($minutocelula)) {
            $useMinMax = false;
            if (isset($minutocelula['min'])) {
                $this->addUsingAlias(DadosPeer::MINUTOCELULA, $minutocelula['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minutocelula['max'])) {
                $this->addUsingAlias(DadosPeer::MINUTOCELULA, $minutocelula['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::MINUTOCELULA, $minutocelula, $comparison);
    }

    /**
     * Filter the query on the periodoCelula column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodocelula(1234); // WHERE periodoCelula = 1234
     * $query->filterByPeriodocelula(array(12, 34)); // WHERE periodoCelula IN (12, 34)
     * $query->filterByPeriodocelula(array('min' => 12)); // WHERE periodoCelula > 12
     * </code>
     *
     * @param     mixed $periodocelula The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByPeriodocelula($periodocelula = null, $comparison = null)
    {
        if (is_array($periodocelula)) {
            $useMinMax = false;
            if (isset($periodocelula['min'])) {
                $this->addUsingAlias(DadosPeer::PERIODOCELULA, $periodocelula['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periodocelula['max'])) {
                $this->addUsingAlias(DadosPeer::PERIODOCELULA, $periodocelula['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::PERIODOCELULA, $periodocelula, $comparison);
    }

    /**
     * Filter the query on the coordenador column
     *
     * Example usage:
     * <code>
     * $query->filterByCoordenador('fooValue');   // WHERE coordenador = 'fooValue'
     * $query->filterByCoordenador('%fooValue%'); // WHERE coordenador LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coordenador The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByCoordenador($coordenador = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coordenador)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coordenador)) {
                $coordenador = str_replace('*', '%', $coordenador);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::COORDENADOR, $coordenador, $comparison);
    }

    /**
     * Filter the query on the diaCoordenador column
     *
     * Example usage:
     * <code>
     * $query->filterByDiacoordenador(1234); // WHERE diaCoordenador = 1234
     * $query->filterByDiacoordenador(array(12, 34)); // WHERE diaCoordenador IN (12, 34)
     * $query->filterByDiacoordenador(array('min' => 12)); // WHERE diaCoordenador > 12
     * </code>
     *
     * @param     mixed $diacoordenador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByDiacoordenador($diacoordenador = null, $comparison = null)
    {
        if (is_array($diacoordenador)) {
            $useMinMax = false;
            if (isset($diacoordenador['min'])) {
                $this->addUsingAlias(DadosPeer::DIACOORDENADOR, $diacoordenador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diacoordenador['max'])) {
                $this->addUsingAlias(DadosPeer::DIACOORDENADOR, $diacoordenador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::DIACOORDENADOR, $diacoordenador, $comparison);
    }

    /**
     * Filter the query on the frequenciaCoordenador column
     *
     * Example usage:
     * <code>
     * $query->filterByFrequenciacoordenador(1234); // WHERE frequenciaCoordenador = 1234
     * $query->filterByFrequenciacoordenador(array(12, 34)); // WHERE frequenciaCoordenador IN (12, 34)
     * $query->filterByFrequenciacoordenador(array('min' => 12)); // WHERE frequenciaCoordenador > 12
     * </code>
     *
     * @param     mixed $frequenciacoordenador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByFrequenciacoordenador($frequenciacoordenador = null, $comparison = null)
    {
        if (is_array($frequenciacoordenador)) {
            $useMinMax = false;
            if (isset($frequenciacoordenador['min'])) {
                $this->addUsingAlias(DadosPeer::FREQUENCIACOORDENADOR, $frequenciacoordenador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frequenciacoordenador['max'])) {
                $this->addUsingAlias(DadosPeer::FREQUENCIACOORDENADOR, $frequenciacoordenador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::FREQUENCIACOORDENADOR, $frequenciacoordenador, $comparison);
    }

    /**
     * Filter the query on the horaCoordenador column
     *
     * Example usage:
     * <code>
     * $query->filterByHoracoordenador(1234); // WHERE horaCoordenador = 1234
     * $query->filterByHoracoordenador(array(12, 34)); // WHERE horaCoordenador IN (12, 34)
     * $query->filterByHoracoordenador(array('min' => 12)); // WHERE horaCoordenador > 12
     * </code>
     *
     * @param     mixed $horacoordenador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByHoracoordenador($horacoordenador = null, $comparison = null)
    {
        if (is_array($horacoordenador)) {
            $useMinMax = false;
            if (isset($horacoordenador['min'])) {
                $this->addUsingAlias(DadosPeer::HORACOORDENADOR, $horacoordenador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($horacoordenador['max'])) {
                $this->addUsingAlias(DadosPeer::HORACOORDENADOR, $horacoordenador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::HORACOORDENADOR, $horacoordenador, $comparison);
    }

    /**
     * Filter the query on the minutoCoordenador column
     *
     * Example usage:
     * <code>
     * $query->filterByMinutocoordenador(1234); // WHERE minutoCoordenador = 1234
     * $query->filterByMinutocoordenador(array(12, 34)); // WHERE minutoCoordenador IN (12, 34)
     * $query->filterByMinutocoordenador(array('min' => 12)); // WHERE minutoCoordenador > 12
     * </code>
     *
     * @param     mixed $minutocoordenador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByMinutocoordenador($minutocoordenador = null, $comparison = null)
    {
        if (is_array($minutocoordenador)) {
            $useMinMax = false;
            if (isset($minutocoordenador['min'])) {
                $this->addUsingAlias(DadosPeer::MINUTOCOORDENADOR, $minutocoordenador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minutocoordenador['max'])) {
                $this->addUsingAlias(DadosPeer::MINUTOCOORDENADOR, $minutocoordenador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::MINUTOCOORDENADOR, $minutocoordenador, $comparison);
    }

    /**
     * Filter the query on the periodoCoordenador column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodocoordenador(1234); // WHERE periodoCoordenador = 1234
     * $query->filterByPeriodocoordenador(array(12, 34)); // WHERE periodoCoordenador IN (12, 34)
     * $query->filterByPeriodocoordenador(array('min' => 12)); // WHERE periodoCoordenador > 12
     * </code>
     *
     * @param     mixed $periodocoordenador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByPeriodocoordenador($periodocoordenador = null, $comparison = null)
    {
        if (is_array($periodocoordenador)) {
            $useMinMax = false;
            if (isset($periodocoordenador['min'])) {
                $this->addUsingAlias(DadosPeer::PERIODOCOORDENADOR, $periodocoordenador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periodocoordenador['max'])) {
                $this->addUsingAlias(DadosPeer::PERIODOCOORDENADOR, $periodocoordenador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::PERIODOCOORDENADOR, $periodocoordenador, $comparison);
    }

    /**
     * Filter the query on the discipulador column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscipulador('fooValue');   // WHERE discipulador = 'fooValue'
     * $query->filterByDiscipulador('%fooValue%'); // WHERE discipulador LIKE '%fooValue%'
     * </code>
     *
     * @param     string $discipulador The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByDiscipulador($discipulador = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($discipulador)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $discipulador)) {
                $discipulador = str_replace('*', '%', $discipulador);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::DISCIPULADOR, $discipulador, $comparison);
    }

    /**
     * Filter the query on the diaDiscipulador column
     *
     * Example usage:
     * <code>
     * $query->filterByDiadiscipulador(1234); // WHERE diaDiscipulador = 1234
     * $query->filterByDiadiscipulador(array(12, 34)); // WHERE diaDiscipulador IN (12, 34)
     * $query->filterByDiadiscipulador(array('min' => 12)); // WHERE diaDiscipulador > 12
     * </code>
     *
     * @param     mixed $diadiscipulador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByDiadiscipulador($diadiscipulador = null, $comparison = null)
    {
        if (is_array($diadiscipulador)) {
            $useMinMax = false;
            if (isset($diadiscipulador['min'])) {
                $this->addUsingAlias(DadosPeer::DIADISCIPULADOR, $diadiscipulador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diadiscipulador['max'])) {
                $this->addUsingAlias(DadosPeer::DIADISCIPULADOR, $diadiscipulador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::DIADISCIPULADOR, $diadiscipulador, $comparison);
    }

    /**
     * Filter the query on the frequenciaDiscipulador column
     *
     * Example usage:
     * <code>
     * $query->filterByFrequenciadiscipulador(1234); // WHERE frequenciaDiscipulador = 1234
     * $query->filterByFrequenciadiscipulador(array(12, 34)); // WHERE frequenciaDiscipulador IN (12, 34)
     * $query->filterByFrequenciadiscipulador(array('min' => 12)); // WHERE frequenciaDiscipulador > 12
     * </code>
     *
     * @param     mixed $frequenciadiscipulador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByFrequenciadiscipulador($frequenciadiscipulador = null, $comparison = null)
    {
        if (is_array($frequenciadiscipulador)) {
            $useMinMax = false;
            if (isset($frequenciadiscipulador['min'])) {
                $this->addUsingAlias(DadosPeer::FREQUENCIADISCIPULADOR, $frequenciadiscipulador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frequenciadiscipulador['max'])) {
                $this->addUsingAlias(DadosPeer::FREQUENCIADISCIPULADOR, $frequenciadiscipulador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::FREQUENCIADISCIPULADOR, $frequenciadiscipulador, $comparison);
    }

    /**
     * Filter the query on the horaDiscipulador column
     *
     * Example usage:
     * <code>
     * $query->filterByHoradiscipulador(1234); // WHERE horaDiscipulador = 1234
     * $query->filterByHoradiscipulador(array(12, 34)); // WHERE horaDiscipulador IN (12, 34)
     * $query->filterByHoradiscipulador(array('min' => 12)); // WHERE horaDiscipulador > 12
     * </code>
     *
     * @param     mixed $horadiscipulador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByHoradiscipulador($horadiscipulador = null, $comparison = null)
    {
        if (is_array($horadiscipulador)) {
            $useMinMax = false;
            if (isset($horadiscipulador['min'])) {
                $this->addUsingAlias(DadosPeer::HORADISCIPULADOR, $horadiscipulador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($horadiscipulador['max'])) {
                $this->addUsingAlias(DadosPeer::HORADISCIPULADOR, $horadiscipulador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::HORADISCIPULADOR, $horadiscipulador, $comparison);
    }

    /**
     * Filter the query on the minutoDiscipulador column
     *
     * Example usage:
     * <code>
     * $query->filterByMinutodiscipulador(1234); // WHERE minutoDiscipulador = 1234
     * $query->filterByMinutodiscipulador(array(12, 34)); // WHERE minutoDiscipulador IN (12, 34)
     * $query->filterByMinutodiscipulador(array('min' => 12)); // WHERE minutoDiscipulador > 12
     * </code>
     *
     * @param     mixed $minutodiscipulador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByMinutodiscipulador($minutodiscipulador = null, $comparison = null)
    {
        if (is_array($minutodiscipulador)) {
            $useMinMax = false;
            if (isset($minutodiscipulador['min'])) {
                $this->addUsingAlias(DadosPeer::MINUTODISCIPULADOR, $minutodiscipulador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minutodiscipulador['max'])) {
                $this->addUsingAlias(DadosPeer::MINUTODISCIPULADOR, $minutodiscipulador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::MINUTODISCIPULADOR, $minutodiscipulador, $comparison);
    }

    /**
     * Filter the query on the periodoDiscipulador column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriododiscipulador(1234); // WHERE periodoDiscipulador = 1234
     * $query->filterByPeriododiscipulador(array(12, 34)); // WHERE periodoDiscipulador IN (12, 34)
     * $query->filterByPeriododiscipulador(array('min' => 12)); // WHERE periodoDiscipulador > 12
     * </code>
     *
     * @param     mixed $periododiscipulador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByPeriododiscipulador($periododiscipulador = null, $comparison = null)
    {
        if (is_array($periododiscipulador)) {
            $useMinMax = false;
            if (isset($periododiscipulador['min'])) {
                $this->addUsingAlias(DadosPeer::PERIODODISCIPULADOR, $periododiscipulador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periododiscipulador['max'])) {
                $this->addUsingAlias(DadosPeer::PERIODODISCIPULADOR, $periododiscipulador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::PERIODODISCIPULADOR, $periododiscipulador, $comparison);
    }

    /**
     * Filter the query on the lider column
     *
     * Example usage:
     * <code>
     * $query->filterByLider('fooValue');   // WHERE lider = 'fooValue'
     * $query->filterByLider('%fooValue%'); // WHERE lider LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lider The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByLider($lider = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lider)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lider)) {
                $lider = str_replace('*', '%', $lider);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::LIDER, $lider, $comparison);
    }

    /**
     * Filter the query on the nomeLider column
     *
     * Example usage:
     * <code>
     * $query->filterByNomelider('fooValue');   // WHERE nomeLider = 'fooValue'
     * $query->filterByNomelider('%fooValue%'); // WHERE nomeLider LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomelider The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNomelider($nomelider = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomelider)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomelider)) {
                $nomelider = str_replace('*', '%', $nomelider);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOMELIDER, $nomelider, $comparison);
    }

    /**
     * Filter the query on the liderTreinamento column
     *
     * Example usage:
     * <code>
     * $query->filterByLidertreinamento('fooValue');   // WHERE liderTreinamento = 'fooValue'
     * $query->filterByLidertreinamento('%fooValue%'); // WHERE liderTreinamento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lidertreinamento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByLidertreinamento($lidertreinamento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lidertreinamento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lidertreinamento)) {
                $lidertreinamento = str_replace('*', '%', $lidertreinamento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::LIDERTREINAMENTO, $lidertreinamento, $comparison);
    }

    /**
     * Filter the query on the diaLider column
     *
     * Example usage:
     * <code>
     * $query->filterByDialider(1234); // WHERE diaLider = 1234
     * $query->filterByDialider(array(12, 34)); // WHERE diaLider IN (12, 34)
     * $query->filterByDialider(array('min' => 12)); // WHERE diaLider > 12
     * </code>
     *
     * @param     mixed $dialider The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByDialider($dialider = null, $comparison = null)
    {
        if (is_array($dialider)) {
            $useMinMax = false;
            if (isset($dialider['min'])) {
                $this->addUsingAlias(DadosPeer::DIALIDER, $dialider['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dialider['max'])) {
                $this->addUsingAlias(DadosPeer::DIALIDER, $dialider['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::DIALIDER, $dialider, $comparison);
    }

    /**
     * Filter the query on the frequenciaLider column
     *
     * Example usage:
     * <code>
     * $query->filterByFrequencialider(1234); // WHERE frequenciaLider = 1234
     * $query->filterByFrequencialider(array(12, 34)); // WHERE frequenciaLider IN (12, 34)
     * $query->filterByFrequencialider(array('min' => 12)); // WHERE frequenciaLider > 12
     * </code>
     *
     * @param     mixed $frequencialider The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByFrequencialider($frequencialider = null, $comparison = null)
    {
        if (is_array($frequencialider)) {
            $useMinMax = false;
            if (isset($frequencialider['min'])) {
                $this->addUsingAlias(DadosPeer::FREQUENCIALIDER, $frequencialider['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frequencialider['max'])) {
                $this->addUsingAlias(DadosPeer::FREQUENCIALIDER, $frequencialider['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::FREQUENCIALIDER, $frequencialider, $comparison);
    }

    /**
     * Filter the query on the horaLider column
     *
     * Example usage:
     * <code>
     * $query->filterByHoralider(1234); // WHERE horaLider = 1234
     * $query->filterByHoralider(array(12, 34)); // WHERE horaLider IN (12, 34)
     * $query->filterByHoralider(array('min' => 12)); // WHERE horaLider > 12
     * </code>
     *
     * @param     mixed $horalider The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByHoralider($horalider = null, $comparison = null)
    {
        if (is_array($horalider)) {
            $useMinMax = false;
            if (isset($horalider['min'])) {
                $this->addUsingAlias(DadosPeer::HORALIDER, $horalider['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($horalider['max'])) {
                $this->addUsingAlias(DadosPeer::HORALIDER, $horalider['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::HORALIDER, $horalider, $comparison);
    }

    /**
     * Filter the query on the minutoLider column
     *
     * Example usage:
     * <code>
     * $query->filterByMinutolider(1234); // WHERE minutoLider = 1234
     * $query->filterByMinutolider(array(12, 34)); // WHERE minutoLider IN (12, 34)
     * $query->filterByMinutolider(array('min' => 12)); // WHERE minutoLider > 12
     * </code>
     *
     * @param     mixed $minutolider The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByMinutolider($minutolider = null, $comparison = null)
    {
        if (is_array($minutolider)) {
            $useMinMax = false;
            if (isset($minutolider['min'])) {
                $this->addUsingAlias(DadosPeer::MINUTOLIDER, $minutolider['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minutolider['max'])) {
                $this->addUsingAlias(DadosPeer::MINUTOLIDER, $minutolider['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::MINUTOLIDER, $minutolider, $comparison);
    }

    /**
     * Filter the query on the periodoLider column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodolider(1234); // WHERE periodoLider = 1234
     * $query->filterByPeriodolider(array(12, 34)); // WHERE periodoLider IN (12, 34)
     * $query->filterByPeriodolider(array('min' => 12)); // WHERE periodoLider > 12
     * </code>
     *
     * @param     mixed $periodolider The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByPeriodolider($periodolider = null, $comparison = null)
    {
        if (is_array($periodolider)) {
            $useMinMax = false;
            if (isset($periodolider['min'])) {
                $this->addUsingAlias(DadosPeer::PERIODOLIDER, $periodolider['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periodolider['max'])) {
                $this->addUsingAlias(DadosPeer::PERIODOLIDER, $periodolider['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::PERIODOLIDER, $periodolider, $comparison);
    }

    /**
     * Filter the query on the ccm column
     *
     * Example usage:
     * <code>
     * $query->filterByCcm('fooValue');   // WHERE ccm = 'fooValue'
     * $query->filterByCcm('%fooValue%'); // WHERE ccm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ccm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByCcm($ccm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ccm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ccm)) {
                $ccm = str_replace('*', '%', $ccm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::CCM, $ccm, $comparison);
    }

    /**
     * Filter the query on the diaCCM column
     *
     * Example usage:
     * <code>
     * $query->filterByDiaccm(1234); // WHERE diaCCM = 1234
     * $query->filterByDiaccm(array(12, 34)); // WHERE diaCCM IN (12, 34)
     * $query->filterByDiaccm(array('min' => 12)); // WHERE diaCCM > 12
     * </code>
     *
     * @param     mixed $diaccm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByDiaccm($diaccm = null, $comparison = null)
    {
        if (is_array($diaccm)) {
            $useMinMax = false;
            if (isset($diaccm['min'])) {
                $this->addUsingAlias(DadosPeer::DIACCM, $diaccm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diaccm['max'])) {
                $this->addUsingAlias(DadosPeer::DIACCM, $diaccm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::DIACCM, $diaccm, $comparison);
    }

    /**
     * Filter the query on the horaCCM column
     *
     * Example usage:
     * <code>
     * $query->filterByHoraccm(1234); // WHERE horaCCM = 1234
     * $query->filterByHoraccm(array(12, 34)); // WHERE horaCCM IN (12, 34)
     * $query->filterByHoraccm(array('min' => 12)); // WHERE horaCCM > 12
     * </code>
     *
     * @param     mixed $horaccm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByHoraccm($horaccm = null, $comparison = null)
    {
        if (is_array($horaccm)) {
            $useMinMax = false;
            if (isset($horaccm['min'])) {
                $this->addUsingAlias(DadosPeer::HORACCM, $horaccm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($horaccm['max'])) {
                $this->addUsingAlias(DadosPeer::HORACCM, $horaccm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::HORACCM, $horaccm, $comparison);
    }

    /**
     * Filter the query on the minutoCCM column
     *
     * Example usage:
     * <code>
     * $query->filterByMinutoccm(1234); // WHERE minutoCCM = 1234
     * $query->filterByMinutoccm(array(12, 34)); // WHERE minutoCCM IN (12, 34)
     * $query->filterByMinutoccm(array('min' => 12)); // WHERE minutoCCM > 12
     * </code>
     *
     * @param     mixed $minutoccm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByMinutoccm($minutoccm = null, $comparison = null)
    {
        if (is_array($minutoccm)) {
            $useMinMax = false;
            if (isset($minutoccm['min'])) {
                $this->addUsingAlias(DadosPeer::MINUTOCCM, $minutoccm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minutoccm['max'])) {
                $this->addUsingAlias(DadosPeer::MINUTOCCM, $minutoccm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::MINUTOCCM, $minutoccm, $comparison);
    }

    /**
     * Filter the query on the periodoCCM column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodoccm(1234); // WHERE periodoCCM = 1234
     * $query->filterByPeriodoccm(array(12, 34)); // WHERE periodoCCM IN (12, 34)
     * $query->filterByPeriodoccm(array('min' => 12)); // WHERE periodoCCM > 12
     * </code>
     *
     * @param     mixed $periodoccm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByPeriodoccm($periodoccm = null, $comparison = null)
    {
        if (is_array($periodoccm)) {
            $useMinMax = false;
            if (isset($periodoccm['min'])) {
                $this->addUsingAlias(DadosPeer::PERIODOCCM, $periodoccm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periodoccm['max'])) {
                $this->addUsingAlias(DadosPeer::PERIODOCCM, $periodoccm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::PERIODOCCM, $periodoccm, $comparison);
    }

    /**
     * Filter the query on the manhaDomingo column
     *
     * Example usage:
     * <code>
     * $query->filterByManhadomingo('fooValue');   // WHERE manhaDomingo = 'fooValue'
     * $query->filterByManhadomingo('%fooValue%'); // WHERE manhaDomingo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manhadomingo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByManhadomingo($manhadomingo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manhadomingo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manhadomingo)) {
                $manhadomingo = str_replace('*', '%', $manhadomingo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::MANHADOMINGO, $manhadomingo, $comparison);
    }

    /**
     * Filter the query on the manhaSegunda column
     *
     * Example usage:
     * <code>
     * $query->filterByManhasegunda('fooValue');   // WHERE manhaSegunda = 'fooValue'
     * $query->filterByManhasegunda('%fooValue%'); // WHERE manhaSegunda LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manhasegunda The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByManhasegunda($manhasegunda = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manhasegunda)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manhasegunda)) {
                $manhasegunda = str_replace('*', '%', $manhasegunda);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::MANHASEGUNDA, $manhasegunda, $comparison);
    }

    /**
     * Filter the query on the manhaTerca column
     *
     * Example usage:
     * <code>
     * $query->filterByManhaterca('fooValue');   // WHERE manhaTerca = 'fooValue'
     * $query->filterByManhaterca('%fooValue%'); // WHERE manhaTerca LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manhaterca The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByManhaterca($manhaterca = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manhaterca)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manhaterca)) {
                $manhaterca = str_replace('*', '%', $manhaterca);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::MANHATERCA, $manhaterca, $comparison);
    }

    /**
     * Filter the query on the manhaQuarta column
     *
     * Example usage:
     * <code>
     * $query->filterByManhaquarta('fooValue');   // WHERE manhaQuarta = 'fooValue'
     * $query->filterByManhaquarta('%fooValue%'); // WHERE manhaQuarta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manhaquarta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByManhaquarta($manhaquarta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manhaquarta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manhaquarta)) {
                $manhaquarta = str_replace('*', '%', $manhaquarta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::MANHAQUARTA, $manhaquarta, $comparison);
    }

    /**
     * Filter the query on the manhaQuinta column
     *
     * Example usage:
     * <code>
     * $query->filterByManhaquinta('fooValue');   // WHERE manhaQuinta = 'fooValue'
     * $query->filterByManhaquinta('%fooValue%'); // WHERE manhaQuinta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manhaquinta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByManhaquinta($manhaquinta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manhaquinta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manhaquinta)) {
                $manhaquinta = str_replace('*', '%', $manhaquinta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::MANHAQUINTA, $manhaquinta, $comparison);
    }

    /**
     * Filter the query on the manhaSexta column
     *
     * Example usage:
     * <code>
     * $query->filterByManhasexta('fooValue');   // WHERE manhaSexta = 'fooValue'
     * $query->filterByManhasexta('%fooValue%'); // WHERE manhaSexta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manhasexta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByManhasexta($manhasexta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manhasexta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manhasexta)) {
                $manhasexta = str_replace('*', '%', $manhasexta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::MANHASEXTA, $manhasexta, $comparison);
    }

    /**
     * Filter the query on the manhaSabado column
     *
     * Example usage:
     * <code>
     * $query->filterByManhasabado('fooValue');   // WHERE manhaSabado = 'fooValue'
     * $query->filterByManhasabado('%fooValue%'); // WHERE manhaSabado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manhasabado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByManhasabado($manhasabado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manhasabado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manhasabado)) {
                $manhasabado = str_replace('*', '%', $manhasabado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::MANHASABADO, $manhasabado, $comparison);
    }

    /**
     * Filter the query on the tardeDomingo column
     *
     * Example usage:
     * <code>
     * $query->filterByTardedomingo('fooValue');   // WHERE tardeDomingo = 'fooValue'
     * $query->filterByTardedomingo('%fooValue%'); // WHERE tardeDomingo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tardedomingo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByTardedomingo($tardedomingo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tardedomingo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tardedomingo)) {
                $tardedomingo = str_replace('*', '%', $tardedomingo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::TARDEDOMINGO, $tardedomingo, $comparison);
    }

    /**
     * Filter the query on the tardeSegunda column
     *
     * Example usage:
     * <code>
     * $query->filterByTardesegunda('fooValue');   // WHERE tardeSegunda = 'fooValue'
     * $query->filterByTardesegunda('%fooValue%'); // WHERE tardeSegunda LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tardesegunda The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByTardesegunda($tardesegunda = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tardesegunda)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tardesegunda)) {
                $tardesegunda = str_replace('*', '%', $tardesegunda);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::TARDESEGUNDA, $tardesegunda, $comparison);
    }

    /**
     * Filter the query on the tardeTerca column
     *
     * Example usage:
     * <code>
     * $query->filterByTardeterca('fooValue');   // WHERE tardeTerca = 'fooValue'
     * $query->filterByTardeterca('%fooValue%'); // WHERE tardeTerca LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tardeterca The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByTardeterca($tardeterca = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tardeterca)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tardeterca)) {
                $tardeterca = str_replace('*', '%', $tardeterca);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::TARDETERCA, $tardeterca, $comparison);
    }

    /**
     * Filter the query on the tardeQuarta column
     *
     * Example usage:
     * <code>
     * $query->filterByTardequarta('fooValue');   // WHERE tardeQuarta = 'fooValue'
     * $query->filterByTardequarta('%fooValue%'); // WHERE tardeQuarta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tardequarta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByTardequarta($tardequarta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tardequarta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tardequarta)) {
                $tardequarta = str_replace('*', '%', $tardequarta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::TARDEQUARTA, $tardequarta, $comparison);
    }

    /**
     * Filter the query on the tardeQuinta column
     *
     * Example usage:
     * <code>
     * $query->filterByTardequinta('fooValue');   // WHERE tardeQuinta = 'fooValue'
     * $query->filterByTardequinta('%fooValue%'); // WHERE tardeQuinta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tardequinta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByTardequinta($tardequinta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tardequinta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tardequinta)) {
                $tardequinta = str_replace('*', '%', $tardequinta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::TARDEQUINTA, $tardequinta, $comparison);
    }

    /**
     * Filter the query on the tardeSexta column
     *
     * Example usage:
     * <code>
     * $query->filterByTardesexta('fooValue');   // WHERE tardeSexta = 'fooValue'
     * $query->filterByTardesexta('%fooValue%'); // WHERE tardeSexta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tardesexta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByTardesexta($tardesexta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tardesexta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tardesexta)) {
                $tardesexta = str_replace('*', '%', $tardesexta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::TARDESEXTA, $tardesexta, $comparison);
    }

    /**
     * Filter the query on the tardeSabado column
     *
     * Example usage:
     * <code>
     * $query->filterByTardesabado('fooValue');   // WHERE tardeSabado = 'fooValue'
     * $query->filterByTardesabado('%fooValue%'); // WHERE tardeSabado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tardesabado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByTardesabado($tardesabado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tardesabado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tardesabado)) {
                $tardesabado = str_replace('*', '%', $tardesabado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::TARDESABADO, $tardesabado, $comparison);
    }

    /**
     * Filter the query on the noiteDomingo column
     *
     * Example usage:
     * <code>
     * $query->filterByNoitedomingo('fooValue');   // WHERE noiteDomingo = 'fooValue'
     * $query->filterByNoitedomingo('%fooValue%'); // WHERE noiteDomingo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noitedomingo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNoitedomingo($noitedomingo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noitedomingo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noitedomingo)) {
                $noitedomingo = str_replace('*', '%', $noitedomingo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOITEDOMINGO, $noitedomingo, $comparison);
    }

    /**
     * Filter the query on the noiteSegunda column
     *
     * Example usage:
     * <code>
     * $query->filterByNoitesegunda('fooValue');   // WHERE noiteSegunda = 'fooValue'
     * $query->filterByNoitesegunda('%fooValue%'); // WHERE noiteSegunda LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noitesegunda The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNoitesegunda($noitesegunda = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noitesegunda)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noitesegunda)) {
                $noitesegunda = str_replace('*', '%', $noitesegunda);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOITESEGUNDA, $noitesegunda, $comparison);
    }

    /**
     * Filter the query on the noiteTerca column
     *
     * Example usage:
     * <code>
     * $query->filterByNoiteterca('fooValue');   // WHERE noiteTerca = 'fooValue'
     * $query->filterByNoiteterca('%fooValue%'); // WHERE noiteTerca LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noiteterca The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNoiteterca($noiteterca = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noiteterca)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noiteterca)) {
                $noiteterca = str_replace('*', '%', $noiteterca);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOITETERCA, $noiteterca, $comparison);
    }

    /**
     * Filter the query on the noiteQuarta column
     *
     * Example usage:
     * <code>
     * $query->filterByNoitequarta('fooValue');   // WHERE noiteQuarta = 'fooValue'
     * $query->filterByNoitequarta('%fooValue%'); // WHERE noiteQuarta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noitequarta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNoitequarta($noitequarta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noitequarta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noitequarta)) {
                $noitequarta = str_replace('*', '%', $noitequarta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOITEQUARTA, $noitequarta, $comparison);
    }

    /**
     * Filter the query on the noiteQuinta column
     *
     * Example usage:
     * <code>
     * $query->filterByNoitequinta('fooValue');   // WHERE noiteQuinta = 'fooValue'
     * $query->filterByNoitequinta('%fooValue%'); // WHERE noiteQuinta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noitequinta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNoitequinta($noitequinta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noitequinta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noitequinta)) {
                $noitequinta = str_replace('*', '%', $noitequinta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOITEQUINTA, $noitequinta, $comparison);
    }

    /**
     * Filter the query on the noiteSexta column
     *
     * Example usage:
     * <code>
     * $query->filterByNoitesexta('fooValue');   // WHERE noiteSexta = 'fooValue'
     * $query->filterByNoitesexta('%fooValue%'); // WHERE noiteSexta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noitesexta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNoitesexta($noitesexta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noitesexta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noitesexta)) {
                $noitesexta = str_replace('*', '%', $noitesexta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOITESEXTA, $noitesexta, $comparison);
    }

    /**
     * Filter the query on the noiteSabado column
     *
     * Example usage:
     * <code>
     * $query->filterByNoitesabado('fooValue');   // WHERE noiteSabado = 'fooValue'
     * $query->filterByNoitesabado('%fooValue%'); // WHERE noiteSabado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noitesabado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByNoitesabado($noitesabado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noitesabado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noitesabado)) {
                $noitesabado = str_replace('*', '%', $noitesabado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::NOITESABADO, $noitesabado, $comparison);
    }

    /**
     * Filter the query on the observacao column
     *
     * Example usage:
     * <code>
     * $query->filterByObservacao('fooValue');   // WHERE observacao = 'fooValue'
     * $query->filterByObservacao('%fooValue%'); // WHERE observacao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observacao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByObservacao($observacao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observacao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observacao)) {
                $observacao = str_replace('*', '%', $observacao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DadosPeer::OBSERVACAO, $observacao, $comparison);
    }

    /**
     * Filter the query on the id_usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE id_usuario = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE id_usuario IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE id_usuario > 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(DadosPeer::ID_USUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(DadosPeer::ID_USUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DadosPeer::ID_USUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DadosQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(DadosPeer::ID_USUARIO, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DadosPeer::ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Dados $dados Object to remove from the list of results
     *
     * @return DadosQuery The current query, for fluid interface
     */
    public function prune($dados = null)
    {
        if ($dados) {
            $this->addUsingAlias(DadosPeer::ID, $dados->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
