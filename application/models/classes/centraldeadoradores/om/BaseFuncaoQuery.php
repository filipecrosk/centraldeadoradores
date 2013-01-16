<?php


/**
 * Base class that represents a query for the 'funcao' table.
 *
 *
 *
 * @method FuncaoQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method FuncaoQuery orderByNome($order = Criteria::ASC) Order by the Nome column
 *
 * @method FuncaoQuery groupById() Group by the Id column
 * @method FuncaoQuery groupByNome() Group by the Nome column
 *
 * @method FuncaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FuncaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FuncaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FuncaoQuery leftJoinEscalaPessoaFuncao($relationAlias = null) Adds a LEFT JOIN clause to the query using the EscalaPessoaFuncao relation
 * @method FuncaoQuery rightJoinEscalaPessoaFuncao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EscalaPessoaFuncao relation
 * @method FuncaoQuery innerJoinEscalaPessoaFuncao($relationAlias = null) Adds a INNER JOIN clause to the query using the EscalaPessoaFuncao relation
 *
 * @method FuncaoQuery leftJoinKitsEnsaio($relationAlias = null) Adds a LEFT JOIN clause to the query using the KitsEnsaio relation
 * @method FuncaoQuery rightJoinKitsEnsaio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the KitsEnsaio relation
 * @method FuncaoQuery innerJoinKitsEnsaio($relationAlias = null) Adds a INNER JOIN clause to the query using the KitsEnsaio relation
 *
 * @method FuncaoQuery leftJoinUsuarioFuncao($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioFuncao relation
 * @method FuncaoQuery rightJoinUsuarioFuncao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioFuncao relation
 * @method FuncaoQuery innerJoinUsuarioFuncao($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioFuncao relation
 *
 * @method Funcao findOne(PropelPDO $con = null) Return the first Funcao matching the query
 * @method Funcao findOneOrCreate(PropelPDO $con = null) Return the first Funcao matching the query, or a new Funcao object populated from the query conditions when no match is found
 *
 * @method Funcao findOneById(int $Id) Return the first Funcao filtered by the Id column
 * @method Funcao findOneByNome(string $Nome) Return the first Funcao filtered by the Nome column
 *
 * @method array findById(int $Id) Return Funcao objects filtered by the Id column
 * @method array findByNome(string $Nome) Return Funcao objects filtered by the Nome column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseFuncaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFuncaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'Funcao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FuncaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     FuncaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FuncaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FuncaoQuery) {
            return $criteria;
        }
        $query = new FuncaoQuery();
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
     * @return   Funcao|Funcao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FuncaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FuncaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Funcao A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOME` FROM `funcao` WHERE `ID` = :p0';
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
            $obj = new Funcao();
            $obj->hydrate($row);
            FuncaoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Funcao|Funcao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Funcao[]|mixed the list of results, formatted by the current formatter
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
     * @return FuncaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FuncaoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FuncaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FuncaoPeer::ID, $keys, Criteria::IN);
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
     * @return FuncaoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(FuncaoPeer::ID, $id, $comparison);
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
     * @return FuncaoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FuncaoPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query by a related EscalaPessoaFuncao object
     *
     * @param   EscalaPessoaFuncao|PropelObjectCollection $escalaPessoaFuncao  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FuncaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEscalaPessoaFuncao($escalaPessoaFuncao, $comparison = null)
    {
        if ($escalaPessoaFuncao instanceof EscalaPessoaFuncao) {
            return $this
                ->addUsingAlias(FuncaoPeer::ID, $escalaPessoaFuncao->getIdFuncao(), $comparison);
        } elseif ($escalaPessoaFuncao instanceof PropelObjectCollection) {
            return $this
                ->useEscalaPessoaFuncaoQuery()
                ->filterByPrimaryKeys($escalaPessoaFuncao->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEscalaPessoaFuncao() only accepts arguments of type EscalaPessoaFuncao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EscalaPessoaFuncao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FuncaoQuery The current query, for fluid interface
     */
    public function joinEscalaPessoaFuncao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EscalaPessoaFuncao');

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
            $this->addJoinObject($join, 'EscalaPessoaFuncao');
        }

        return $this;
    }

    /**
     * Use the EscalaPessoaFuncao relation EscalaPessoaFuncao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EscalaPessoaFuncaoQuery A secondary query class using the current class as primary query
     */
    public function useEscalaPessoaFuncaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEscalaPessoaFuncao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EscalaPessoaFuncao', 'EscalaPessoaFuncaoQuery');
    }

    /**
     * Filter the query by a related KitsEnsaio object
     *
     * @param   KitsEnsaio|PropelObjectCollection $kitsEnsaio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FuncaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByKitsEnsaio($kitsEnsaio, $comparison = null)
    {
        if ($kitsEnsaio instanceof KitsEnsaio) {
            return $this
                ->addUsingAlias(FuncaoPeer::ID, $kitsEnsaio->getIdFuncao(), $comparison);
        } elseif ($kitsEnsaio instanceof PropelObjectCollection) {
            return $this
                ->useKitsEnsaioQuery()
                ->filterByPrimaryKeys($kitsEnsaio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByKitsEnsaio() only accepts arguments of type KitsEnsaio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the KitsEnsaio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FuncaoQuery The current query, for fluid interface
     */
    public function joinKitsEnsaio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('KitsEnsaio');

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
            $this->addJoinObject($join, 'KitsEnsaio');
        }

        return $this;
    }

    /**
     * Use the KitsEnsaio relation KitsEnsaio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   KitsEnsaioQuery A secondary query class using the current class as primary query
     */
    public function useKitsEnsaioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinKitsEnsaio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'KitsEnsaio', 'KitsEnsaioQuery');
    }

    /**
     * Filter the query by a related UsuarioFuncao object
     *
     * @param   UsuarioFuncao|PropelObjectCollection $usuarioFuncao  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FuncaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioFuncao($usuarioFuncao, $comparison = null)
    {
        if ($usuarioFuncao instanceof UsuarioFuncao) {
            return $this
                ->addUsingAlias(FuncaoPeer::ID, $usuarioFuncao->getIdFuncao(), $comparison);
        } elseif ($usuarioFuncao instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioFuncaoQuery()
                ->filterByPrimaryKeys($usuarioFuncao->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioFuncao() only accepts arguments of type UsuarioFuncao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioFuncao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FuncaoQuery The current query, for fluid interface
     */
    public function joinUsuarioFuncao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioFuncao');

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
            $this->addJoinObject($join, 'UsuarioFuncao');
        }

        return $this;
    }

    /**
     * Use the UsuarioFuncao relation UsuarioFuncao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioFuncaoQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioFuncaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioFuncao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioFuncao', 'UsuarioFuncaoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Funcao $funcao Object to remove from the list of results
     *
     * @return FuncaoQuery The current query, for fluid interface
     */
    public function prune($funcao = null)
    {
        if ($funcao) {
            $this->addUsingAlias(FuncaoPeer::ID, $funcao->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
