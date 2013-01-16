<?php


/**
 * Base class that represents a query for the 'arquivo' table.
 *
 *
 *
 * @method ArquivoQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method ArquivoQuery orderByNome($order = Criteria::ASC) Order by the Nome column
 * @method ArquivoQuery orderByMime($order = Criteria::ASC) Order by the Mime column
 * @method ArquivoQuery orderByTamanho($order = Criteria::ASC) Order by the Tamanho column
 * @method ArquivoQuery orderByConteudo($order = Criteria::ASC) Order by the Conteudo column
 *
 * @method ArquivoQuery groupById() Group by the Id column
 * @method ArquivoQuery groupByNome() Group by the Nome column
 * @method ArquivoQuery groupByMime() Group by the Mime column
 * @method ArquivoQuery groupByTamanho() Group by the Tamanho column
 * @method ArquivoQuery groupByConteudo() Group by the Conteudo column
 *
 * @method ArquivoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArquivoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArquivoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArquivoQuery leftJoinEmailHeader($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailHeader relation
 * @method ArquivoQuery rightJoinEmailHeader($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailHeader relation
 * @method ArquivoQuery innerJoinEmailHeader($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailHeader relation
 *
 * @method Arquivo findOne(PropelPDO $con = null) Return the first Arquivo matching the query
 * @method Arquivo findOneOrCreate(PropelPDO $con = null) Return the first Arquivo matching the query, or a new Arquivo object populated from the query conditions when no match is found
 *
 * @method Arquivo findOneById(int $Id) Return the first Arquivo filtered by the Id column
 * @method Arquivo findOneByNome(string $Nome) Return the first Arquivo filtered by the Nome column
 * @method Arquivo findOneByMime(string $Mime) Return the first Arquivo filtered by the Mime column
 * @method Arquivo findOneByTamanho(int $Tamanho) Return the first Arquivo filtered by the Tamanho column
 * @method Arquivo findOneByConteudo(resource $Conteudo) Return the first Arquivo filtered by the Conteudo column
 *
 * @method array findById(int $Id) Return Arquivo objects filtered by the Id column
 * @method array findByNome(string $Nome) Return Arquivo objects filtered by the Nome column
 * @method array findByMime(string $Mime) Return Arquivo objects filtered by the Mime column
 * @method array findByTamanho(int $Tamanho) Return Arquivo objects filtered by the Tamanho column
 * @method array findByConteudo(resource $Conteudo) Return Arquivo objects filtered by the Conteudo column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseArquivoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArquivoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'Arquivo', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArquivoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ArquivoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArquivoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArquivoQuery) {
            return $criteria;
        }
        $query = new ArquivoQuery();
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
     * @return   Arquivo|Arquivo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArquivoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArquivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Arquivo A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOME`, `MIME`, `TAMANHO`, `CONTEUDO` FROM `arquivo` WHERE `ID` = :p0';
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
            $obj = new Arquivo();
            $obj->hydrate($row);
            ArquivoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Arquivo|Arquivo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Arquivo[]|mixed the list of results, formatted by the current formatter
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
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArquivoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArquivoPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE Id = 1234
     * $query->filterById(array(12, 34)); // WHERE Id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE Id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ArquivoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Nome column
     *
     * Example usage:
     * <code>
     * $query->filterByNome('fooValue');   // WHERE Nome = 'fooValue'
     * $query->filterByNome('%fooValue%'); // WHERE Nome LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nome The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function filterByNome($nome = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nome)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nome)) {
                $nome = str_replace('*', '%', $nome);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArquivoPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query on the Mime column
     *
     * Example usage:
     * <code>
     * $query->filterByMime('fooValue');   // WHERE Mime = 'fooValue'
     * $query->filterByMime('%fooValue%'); // WHERE Mime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function filterByMime($mime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mime)) {
                $mime = str_replace('*', '%', $mime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArquivoPeer::MIME, $mime, $comparison);
    }

    /**
     * Filter the query on the Tamanho column
     *
     * Example usage:
     * <code>
     * $query->filterByTamanho(1234); // WHERE Tamanho = 1234
     * $query->filterByTamanho(array(12, 34)); // WHERE Tamanho IN (12, 34)
     * $query->filterByTamanho(array('min' => 12)); // WHERE Tamanho > 12
     * </code>
     *
     * @param     mixed $tamanho The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function filterByTamanho($tamanho = null, $comparison = null)
    {
        if (is_array($tamanho)) {
            $useMinMax = false;
            if (isset($tamanho['min'])) {
                $this->addUsingAlias(ArquivoPeer::TAMANHO, $tamanho['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tamanho['max'])) {
                $this->addUsingAlias(ArquivoPeer::TAMANHO, $tamanho['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArquivoPeer::TAMANHO, $tamanho, $comparison);
    }

    /**
     * Filter the query on the Conteudo column
     *
     * @param     mixed $conteudo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function filterByConteudo($conteudo = null, $comparison = null)
    {

        return $this->addUsingAlias(ArquivoPeer::CONTEUDO, $conteudo, $comparison);
    }

    /**
     * Filter the query by a related EmailHeader object
     *
     * @param   EmailHeader|PropelObjectCollection $emailHeader  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ArquivoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEmailHeader($emailHeader, $comparison = null)
    {
        if ($emailHeader instanceof EmailHeader) {
            return $this
                ->addUsingAlias(ArquivoPeer::ID, $emailHeader->getIdArquivo(), $comparison);
        } elseif ($emailHeader instanceof PropelObjectCollection) {
            return $this
                ->useEmailHeaderQuery()
                ->filterByPrimaryKeys($emailHeader->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmailHeader() only accepts arguments of type EmailHeader or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmailHeader relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function joinEmailHeader($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmailHeader');

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
            $this->addJoinObject($join, 'EmailHeader');
        }

        return $this;
    }

    /**
     * Use the EmailHeader relation EmailHeader object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmailHeaderQuery A secondary query class using the current class as primary query
     */
    public function useEmailHeaderQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmailHeader($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmailHeader', 'EmailHeaderQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Arquivo $arquivo Object to remove from the list of results
     *
     * @return ArquivoQuery The current query, for fluid interface
     */
    public function prune($arquivo = null)
    {
        if ($arquivo) {
            $this->addUsingAlias(ArquivoPeer::ID, $arquivo->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
