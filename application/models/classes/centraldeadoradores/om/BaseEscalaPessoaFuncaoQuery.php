<?php


/**
 * Base class that represents a query for the 'escala_pessoa_funcao' table.
 *
 *
 *
 * @method EscalaPessoaFuncaoQuery orderByIdEscalaPessoaFuncao($order = Criteria::ASC) Order by the Id_Escala_Pessoa_Funcao column
 * @method EscalaPessoaFuncaoQuery orderByIdEscalaPessoa($order = Criteria::ASC) Order by the Id_Escala_Pessoa column
 * @method EscalaPessoaFuncaoQuery orderByIdFuncao($order = Criteria::ASC) Order by the Id_Funcao column
 *
 * @method EscalaPessoaFuncaoQuery groupByIdEscalaPessoaFuncao() Group by the Id_Escala_Pessoa_Funcao column
 * @method EscalaPessoaFuncaoQuery groupByIdEscalaPessoa() Group by the Id_Escala_Pessoa column
 * @method EscalaPessoaFuncaoQuery groupByIdFuncao() Group by the Id_Funcao column
 *
 * @method EscalaPessoaFuncaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EscalaPessoaFuncaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EscalaPessoaFuncaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EscalaPessoaFuncaoQuery leftJoinEscalaPessoa($relationAlias = null) Adds a LEFT JOIN clause to the query using the EscalaPessoa relation
 * @method EscalaPessoaFuncaoQuery rightJoinEscalaPessoa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EscalaPessoa relation
 * @method EscalaPessoaFuncaoQuery innerJoinEscalaPessoa($relationAlias = null) Adds a INNER JOIN clause to the query using the EscalaPessoa relation
 *
 * @method EscalaPessoaFuncaoQuery leftJoinFuncao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Funcao relation
 * @method EscalaPessoaFuncaoQuery rightJoinFuncao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Funcao relation
 * @method EscalaPessoaFuncaoQuery innerJoinFuncao($relationAlias = null) Adds a INNER JOIN clause to the query using the Funcao relation
 *
 * @method EscalaPessoaFuncao findOne(PropelPDO $con = null) Return the first EscalaPessoaFuncao matching the query
 * @method EscalaPessoaFuncao findOneOrCreate(PropelPDO $con = null) Return the first EscalaPessoaFuncao matching the query, or a new EscalaPessoaFuncao object populated from the query conditions when no match is found
 *
 * @method EscalaPessoaFuncao findOneByIdEscalaPessoaFuncao(int $Id_Escala_Pessoa_Funcao) Return the first EscalaPessoaFuncao filtered by the Id_Escala_Pessoa_Funcao column
 * @method EscalaPessoaFuncao findOneByIdEscalaPessoa(int $Id_Escala_Pessoa) Return the first EscalaPessoaFuncao filtered by the Id_Escala_Pessoa column
 * @method EscalaPessoaFuncao findOneByIdFuncao(int $Id_Funcao) Return the first EscalaPessoaFuncao filtered by the Id_Funcao column
 *
 * @method array findByIdEscalaPessoaFuncao(int $Id_Escala_Pessoa_Funcao) Return EscalaPessoaFuncao objects filtered by the Id_Escala_Pessoa_Funcao column
 * @method array findByIdEscalaPessoa(int $Id_Escala_Pessoa) Return EscalaPessoaFuncao objects filtered by the Id_Escala_Pessoa column
 * @method array findByIdFuncao(int $Id_Funcao) Return EscalaPessoaFuncao objects filtered by the Id_Funcao column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseEscalaPessoaFuncaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEscalaPessoaFuncaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'EscalaPessoaFuncao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EscalaPessoaFuncaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EscalaPessoaFuncaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EscalaPessoaFuncaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EscalaPessoaFuncaoQuery) {
            return $criteria;
        }
        $query = new EscalaPessoaFuncaoQuery();
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
     * @return   EscalaPessoaFuncao|EscalaPessoaFuncao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EscalaPessoaFuncaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaFuncaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EscalaPessoaFuncao A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ESCALA_PESSOA_FUNCAO`, `ID_ESCALA_PESSOA`, `ID_FUNCAO` FROM `escala_pessoa_funcao` WHERE `ID_ESCALA_PESSOA_FUNCAO` = :p0';
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
            $obj = new EscalaPessoaFuncao();
            $obj->hydrate($row);
            EscalaPessoaFuncaoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EscalaPessoaFuncao|EscalaPessoaFuncao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EscalaPessoaFuncao[]|mixed the list of results, formatted by the current formatter
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
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA_FUNCAO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA_FUNCAO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id_Escala_Pessoa_Funcao column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEscalaPessoaFuncao(1234); // WHERE Id_Escala_Pessoa_Funcao = 1234
     * $query->filterByIdEscalaPessoaFuncao(array(12, 34)); // WHERE Id_Escala_Pessoa_Funcao IN (12, 34)
     * $query->filterByIdEscalaPessoaFuncao(array('min' => 12)); // WHERE Id_Escala_Pessoa_Funcao > 12
     * </code>
     *
     * @param     mixed $idEscalaPessoaFuncao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
     */
    public function filterByIdEscalaPessoaFuncao($idEscalaPessoaFuncao = null, $comparison = null)
    {
        if (is_array($idEscalaPessoaFuncao) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA_FUNCAO, $idEscalaPessoaFuncao, $comparison);
    }

    /**
     * Filter the query on the Id_Escala_Pessoa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEscalaPessoa(1234); // WHERE Id_Escala_Pessoa = 1234
     * $query->filterByIdEscalaPessoa(array(12, 34)); // WHERE Id_Escala_Pessoa IN (12, 34)
     * $query->filterByIdEscalaPessoa(array('min' => 12)); // WHERE Id_Escala_Pessoa > 12
     * </code>
     *
     * @see       filterByEscalaPessoa()
     *
     * @param     mixed $idEscalaPessoa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
     */
    public function filterByIdEscalaPessoa($idEscalaPessoa = null, $comparison = null)
    {
        if (is_array($idEscalaPessoa)) {
            $useMinMax = false;
            if (isset($idEscalaPessoa['min'])) {
                $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA, $idEscalaPessoa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEscalaPessoa['max'])) {
                $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA, $idEscalaPessoa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA, $idEscalaPessoa, $comparison);
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
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
     */
    public function filterByIdFuncao($idFuncao = null, $comparison = null)
    {
        if (is_array($idFuncao)) {
            $useMinMax = false;
            if (isset($idFuncao['min'])) {
                $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_FUNCAO, $idFuncao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFuncao['max'])) {
                $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_FUNCAO, $idFuncao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_FUNCAO, $idFuncao, $comparison);
    }

    /**
     * Filter the query by a related EscalaPessoa object
     *
     * @param   EscalaPessoa|PropelObjectCollection $escalaPessoa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaFuncaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEscalaPessoa($escalaPessoa, $comparison = null)
    {
        if ($escalaPessoa instanceof EscalaPessoa) {
            return $this
                ->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA, $escalaPessoa->getId(), $comparison);
        } elseif ($escalaPessoa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA, $escalaPessoa->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
     */
    public function joinEscalaPessoa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useEscalaPessoaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEscalaPessoa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EscalaPessoa', 'EscalaPessoaQuery');
    }

    /**
     * Filter the query by a related Funcao object
     *
     * @param   Funcao|PropelObjectCollection $funcao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaFuncaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFuncao($funcao, $comparison = null)
    {
        if ($funcao instanceof Funcao) {
            return $this
                ->addUsingAlias(EscalaPessoaFuncaoPeer::ID_FUNCAO, $funcao->getId(), $comparison);
        } elseif ($funcao instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EscalaPessoaFuncaoPeer::ID_FUNCAO, $funcao->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
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
     * @param   EscalaPessoaFuncao $escalaPessoaFuncao Object to remove from the list of results
     *
     * @return EscalaPessoaFuncaoQuery The current query, for fluid interface
     */
    public function prune($escalaPessoaFuncao = null)
    {
        if ($escalaPessoaFuncao) {
            $this->addUsingAlias(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA_FUNCAO, $escalaPessoaFuncao->getIdEscalaPessoaFuncao(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
