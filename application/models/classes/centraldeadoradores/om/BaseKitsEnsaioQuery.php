<?php


/**
 * Base class that represents a query for the 'kits_ensaio' table.
 *
 *
 *
 * @method KitsEnsaioQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method KitsEnsaioQuery orderByNome($order = Criteria::ASC) Order by the Nome column
 * @method KitsEnsaioQuery orderByCaminho($order = Criteria::ASC) Order by the Caminho column
 * @method KitsEnsaioQuery orderByIdFuncao($order = Criteria::ASC) Order by the Id_Funcao column
 *
 * @method KitsEnsaioQuery groupById() Group by the Id column
 * @method KitsEnsaioQuery groupByNome() Group by the Nome column
 * @method KitsEnsaioQuery groupByCaminho() Group by the Caminho column
 * @method KitsEnsaioQuery groupByIdFuncao() Group by the Id_Funcao column
 *
 * @method KitsEnsaioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method KitsEnsaioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method KitsEnsaioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method KitsEnsaioQuery leftJoinFuncao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Funcao relation
 * @method KitsEnsaioQuery rightJoinFuncao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Funcao relation
 * @method KitsEnsaioQuery innerJoinFuncao($relationAlias = null) Adds a INNER JOIN clause to the query using the Funcao relation
 *
 * @method KitsEnsaio findOne(PropelPDO $con = null) Return the first KitsEnsaio matching the query
 * @method KitsEnsaio findOneOrCreate(PropelPDO $con = null) Return the first KitsEnsaio matching the query, or a new KitsEnsaio object populated from the query conditions when no match is found
 *
 * @method KitsEnsaio findOneById(int $Id) Return the first KitsEnsaio filtered by the Id column
 * @method KitsEnsaio findOneByNome(string $Nome) Return the first KitsEnsaio filtered by the Nome column
 * @method KitsEnsaio findOneByCaminho(string $Caminho) Return the first KitsEnsaio filtered by the Caminho column
 * @method KitsEnsaio findOneByIdFuncao(int $Id_Funcao) Return the first KitsEnsaio filtered by the Id_Funcao column
 *
 * @method array findById(int $Id) Return KitsEnsaio objects filtered by the Id column
 * @method array findByNome(string $Nome) Return KitsEnsaio objects filtered by the Nome column
 * @method array findByCaminho(string $Caminho) Return KitsEnsaio objects filtered by the Caminho column
 * @method array findByIdFuncao(int $Id_Funcao) Return KitsEnsaio objects filtered by the Id_Funcao column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseKitsEnsaioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseKitsEnsaioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'KitsEnsaio', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new KitsEnsaioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     KitsEnsaioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return KitsEnsaioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof KitsEnsaioQuery) {
            return $criteria;
        }
        $query = new KitsEnsaioQuery();
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
     * @return   KitsEnsaio|KitsEnsaio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = KitsEnsaioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(KitsEnsaioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   KitsEnsaio A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOME`, `CAMINHO`, `ID_FUNCAO` FROM `kits_ensaio` WHERE `ID` = :p0';
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
            $obj = new KitsEnsaio();
            $obj->hydrate($row);
            KitsEnsaioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return KitsEnsaio|KitsEnsaio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|KitsEnsaio[]|mixed the list of results, formatted by the current formatter
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
     * @return KitsEnsaioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(KitsEnsaioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return KitsEnsaioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(KitsEnsaioPeer::ID, $keys, Criteria::IN);
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
     * @return KitsEnsaioQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(KitsEnsaioPeer::ID, $id, $comparison);
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
     * @return KitsEnsaioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(KitsEnsaioPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query on the Caminho column
     *
     * Example usage:
     * <code>
     * $query->filterByCaminho('fooValue');   // WHERE Caminho = 'fooValue'
     * $query->filterByCaminho('%fooValue%'); // WHERE Caminho LIKE '%fooValue%'
     * </code>
     *
     * @param     string $caminho The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KitsEnsaioQuery The current query, for fluid interface
     */
    public function filterByCaminho($caminho = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($caminho)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $caminho)) {
                $caminho = str_replace('*', '%', $caminho);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KitsEnsaioPeer::CAMINHO, $caminho, $comparison);
    }

    /**
     * Filter the query on the Id_Funcao column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFuncao(1234); // WHERE Id_Funcao = 1234
     * $query->filterByIdFuncao(array(12, 34)); // WHERE Id_Funcao IN (12, 34)
     * $query->filterByIdFuncao(array('min' => 12)); // WHERE Id_Funcao > 12
     * </code>
     *
     * @see       filterByFuncao()
     *
     * @param     mixed $idFuncao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KitsEnsaioQuery The current query, for fluid interface
     */
    public function filterByIdFuncao($idFuncao = null, $comparison = null)
    {
        if (is_array($idFuncao)) {
            $useMinMax = false;
            if (isset($idFuncao['min'])) {
                $this->addUsingAlias(KitsEnsaioPeer::ID_FUNCAO, $idFuncao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFuncao['max'])) {
                $this->addUsingAlias(KitsEnsaioPeer::ID_FUNCAO, $idFuncao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitsEnsaioPeer::ID_FUNCAO, $idFuncao, $comparison);
    }

    /**
     * Filter the query by a related Funcao object
     *
     * @param   Funcao|PropelObjectCollection $funcao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   KitsEnsaioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFuncao($funcao, $comparison = null)
    {
        if ($funcao instanceof Funcao) {
            return $this
                ->addUsingAlias(KitsEnsaioPeer::ID_FUNCAO, $funcao->getId(), $comparison);
        } elseif ($funcao instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(KitsEnsaioPeer::ID_FUNCAO, $funcao->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByFuncao() only accepts arguments of type Funcao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Funcao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return KitsEnsaioQuery The current query, for fluid interface
     */
    public function joinFuncao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Funcao');

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
            $this->addJoinObject($join, 'Funcao');
        }

        return $this;
    }

    /**
     * Use the Funcao relation Funcao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FuncaoQuery A secondary query class using the current class as primary query
     */
    public function useFuncaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFuncao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Funcao', 'FuncaoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   KitsEnsaio $kitsEnsaio Object to remove from the list of results
     *
     * @return KitsEnsaioQuery The current query, for fluid interface
     */
    public function prune($kitsEnsaio = null)
    {
        if ($kitsEnsaio) {
            $this->addUsingAlias(KitsEnsaioPeer::ID, $kitsEnsaio->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
