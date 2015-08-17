<?php


/**
 * Base class that represents a query for the 'tipo_escala' table.
 *
 *
 *
 * @method TipoEscalaQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method TipoEscalaQuery orderByNome($order = Criteria::ASC) Order by the Nome column
 *
 * @method TipoEscalaQuery groupById() Group by the Id column
 * @method TipoEscalaQuery groupByNome() Group by the Nome column
 *
 * @method TipoEscalaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TipoEscalaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TipoEscalaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TipoEscalaQuery leftJoinEscalaPessoa($relationAlias = null) Adds a LEFT JOIN clause to the query using the EscalaPessoa relation
 * @method TipoEscalaQuery rightJoinEscalaPessoa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EscalaPessoa relation
 * @method TipoEscalaQuery innerJoinEscalaPessoa($relationAlias = null) Adds a INNER JOIN clause to the query using the EscalaPessoa relation
 *
 * @method TipoEscala findOne(PropelPDO $con = null) Return the first TipoEscala matching the query
 * @method TipoEscala findOneOrCreate(PropelPDO $con = null) Return the first TipoEscala matching the query, or a new TipoEscala object populated from the query conditions when no match is found
 *
 * @method TipoEscala findOneById(int $Id) Return the first TipoEscala filtered by the Id column
 * @method TipoEscala findOneByNome(string $Nome) Return the first TipoEscala filtered by the Nome column
 *
 * @method array findById(int $Id) Return TipoEscala objects filtered by the Id column
 * @method array findByNome(string $Nome) Return TipoEscala objects filtered by the Nome column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseTipoEscalaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTipoEscalaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'TipoEscala', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoEscalaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoEscalaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoEscalaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoEscalaQuery) {
            return $criteria;
        }
        $query = new TipoEscalaQuery();
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
     * @return   TipoEscala|TipoEscala[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoEscalaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoEscalaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoEscala A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOME` FROM `tipo_escala` WHERE `ID` = :p0';
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
            $obj = new TipoEscala();
            $obj->hydrate($row);
            TipoEscalaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoEscala|TipoEscala[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoEscala[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoEscalaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoEscalaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoEscalaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoEscalaPeer::ID, $keys, Criteria::IN);
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
     * @return TipoEscalaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoEscalaPeer::ID, $id, $comparison);
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
     * @return TipoEscalaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TipoEscalaPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query by a related EscalaPessoa object
     *
     * @param   EscalaPessoa|PropelObjectCollection $escalaPessoa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoEscalaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEscalaPessoa($escalaPessoa, $comparison = null)
    {
        if ($escalaPessoa instanceof EscalaPessoa) {
            return $this
                ->addUsingAlias(TipoEscalaPeer::ID, $escalaPessoa->getIdTipoEscala(), $comparison);
        } elseif ($escalaPessoa instanceof PropelObjectCollection) {
            return $this
                ->useEscalaPessoaQuery()
                ->filterByPrimaryKeys($escalaPessoa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEscalaPessoa() only accepts arguments of type EscalaPessoa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EscalaPessoa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TipoEscalaQuery The current query, for fluid interface
     */
    public function joinEscalaPessoa($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EscalaPessoa');

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
            $this->addJoinObject($join, 'EscalaPessoa');
        }

        return $this;
    }

    /**
     * Use the EscalaPessoa relation EscalaPessoa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EscalaPessoaQuery A secondary query class using the current class as primary query
     */
    public function useEscalaPessoaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEscalaPessoa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EscalaPessoa', 'EscalaPessoaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TipoEscala $tipoEscala Object to remove from the list of results
     *
     * @return TipoEscalaQuery The current query, for fluid interface
     */
    public function prune($tipoEscala = null)
    {
        if ($tipoEscala) {
            $this->addUsingAlias(TipoEscalaPeer::ID, $tipoEscala->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
