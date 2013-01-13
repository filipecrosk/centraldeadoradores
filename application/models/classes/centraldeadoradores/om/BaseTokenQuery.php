<?php


/**
 * Base class that represents a query for the 'token' table.
 *
 *
 *
 * @method TokenQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method TokenQuery orderByChave($order = Criteria::ASC) Order by the chave column
 * @method TokenQuery orderByUtilizada($order = Criteria::ASC) Order by the utilizada column
 * @method TokenQuery orderByData($order = Criteria::ASC) Order by the data column
 *
 * @method TokenQuery groupById() Group by the Id column
 * @method TokenQuery groupByChave() Group by the chave column
 * @method TokenQuery groupByUtilizada() Group by the utilizada column
 * @method TokenQuery groupByData() Group by the data column
 *
 * @method TokenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TokenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TokenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TokenQuery leftJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 * @method TokenQuery rightJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 * @method TokenQuery innerJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 *
 * @method Token findOne(PropelPDO $con = null) Return the first Token matching the query
 * @method Token findOneOrCreate(PropelPDO $con = null) Return the first Token matching the query, or a new Token object populated from the query conditions when no match is found
 *
 * @method Token findOneById(int $Id) Return the first Token filtered by the Id column
 * @method Token findOneByChave(string $chave) Return the first Token filtered by the chave column
 * @method Token findOneByUtilizada(int $utilizada) Return the first Token filtered by the utilizada column
 * @method Token findOneByData(string $data) Return the first Token filtered by the data column
 *
 * @method array findById(int $Id) Return Token objects filtered by the Id column
 * @method array findByChave(string $chave) Return Token objects filtered by the chave column
 * @method array findByUtilizada(int $utilizada) Return Token objects filtered by the utilizada column
 * @method array findByData(string $data) Return Token objects filtered by the data column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseTokenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTokenQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'Token', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TokenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TokenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TokenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TokenQuery) {
            return $criteria;
        }
        $query = new TokenQuery();
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
     * @return   Token|Token[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TokenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TokenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Token A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CHAVE`, `UTILIZADA`, `DATA` FROM `token` WHERE `ID` = :p0';
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
            $obj = new Token();
            $obj->hydrate($row);
            TokenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Token|Token[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Token[]|mixed the list of results, formatted by the current formatter
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
     * @return TokenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TokenPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TokenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TokenPeer::ID, $keys, Criteria::IN);
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
     * @return TokenQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TokenPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the chave column
     *
     * Example usage:
     * <code>
     * $query->filterByChave('fooValue');   // WHERE chave = 'fooValue'
     * $query->filterByChave('%fooValue%'); // WHERE chave LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chave The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TokenQuery The current query, for fluid interface
     */
    public function filterByChave($chave = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chave)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chave)) {
                $chave = str_replace('*', '%', $chave);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TokenPeer::CHAVE, $chave, $comparison);
    }

    /**
     * Filter the query on the utilizada column
     *
     * Example usage:
     * <code>
     * $query->filterByUtilizada(1234); // WHERE utilizada = 1234
     * $query->filterByUtilizada(array(12, 34)); // WHERE utilizada IN (12, 34)
     * $query->filterByUtilizada(array('min' => 12)); // WHERE utilizada > 12
     * </code>
     *
     * @param     mixed $utilizada The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TokenQuery The current query, for fluid interface
     */
    public function filterByUtilizada($utilizada = null, $comparison = null)
    {
        if (is_array($utilizada)) {
            $useMinMax = false;
            if (isset($utilizada['min'])) {
                $this->addUsingAlias(TokenPeer::UTILIZADA, $utilizada['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($utilizada['max'])) {
                $this->addUsingAlias(TokenPeer::UTILIZADA, $utilizada['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TokenPeer::UTILIZADA, $utilizada, $comparison);
    }

    /**
     * Filter the query on the data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('2011-03-14'); // WHERE data = '2011-03-14'
     * $query->filterByData('now'); // WHERE data = '2011-03-14'
     * $query->filterByData(array('max' => 'yesterday')); // WHERE data > '2011-03-13'
     * </code>
     *
     * @param     mixed $data The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TokenQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (is_array($data)) {
            $useMinMax = false;
            if (isset($data['min'])) {
                $this->addUsingAlias(TokenPeer::DATA, $data['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($data['max'])) {
                $this->addUsingAlias(TokenPeer::DATA, $data['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TokenPeer::DATA, $data, $comparison);
    }

    /**
     * Filter the query by a related AlteracaoInformacaoUsuario object
     *
     * @param   AlteracaoInformacaoUsuario|PropelObjectCollection $alteracaoInformacaoUsuario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TokenQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAlteracaoInformacaoUsuario($alteracaoInformacaoUsuario, $comparison = null)
    {
        if ($alteracaoInformacaoUsuario instanceof AlteracaoInformacaoUsuario) {
            return $this
                ->addUsingAlias(TokenPeer::ID, $alteracaoInformacaoUsuario->getIdToken(), $comparison);
        } elseif ($alteracaoInformacaoUsuario instanceof PropelObjectCollection) {
            return $this
                ->useAlteracaoInformacaoUsuarioQuery()
                ->filterByPrimaryKeys($alteracaoInformacaoUsuario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAlteracaoInformacaoUsuario() only accepts arguments of type AlteracaoInformacaoUsuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AlteracaoInformacaoUsuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TokenQuery The current query, for fluid interface
     */
    public function joinAlteracaoInformacaoUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AlteracaoInformacaoUsuario');

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
            $this->addJoinObject($join, 'AlteracaoInformacaoUsuario');
        }

        return $this;
    }

    /**
     * Use the AlteracaoInformacaoUsuario relation AlteracaoInformacaoUsuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlteracaoInformacaoUsuarioQuery A secondary query class using the current class as primary query
     */
    public function useAlteracaoInformacaoUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlteracaoInformacaoUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AlteracaoInformacaoUsuario', 'AlteracaoInformacaoUsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Token $token Object to remove from the list of results
     *
     * @return TokenQuery The current query, for fluid interface
     */
    public function prune($token = null)
    {
        if ($token) {
            $this->addUsingAlias(TokenPeer::ID, $token->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
