<?php


/**
 * Base class that represents a query for the 'tipo_informacao' table.
 *
 *
 *
 * @method TipoInformacaoQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method TipoInformacaoQuery orderByNome($order = Criteria::ASC) Order by the Nome column
 * @method TipoInformacaoQuery orderByRequerConfirmacao($order = Criteria::ASC) Order by the Requer_Confirmacao column
 *
 * @method TipoInformacaoQuery groupById() Group by the Id column
 * @method TipoInformacaoQuery groupByNome() Group by the Nome column
 * @method TipoInformacaoQuery groupByRequerConfirmacao() Group by the Requer_Confirmacao column
 *
 * @method TipoInformacaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TipoInformacaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TipoInformacaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TipoInformacaoQuery leftJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 * @method TipoInformacaoQuery rightJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 * @method TipoInformacaoQuery innerJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 *
 * @method TipoInformacao findOne(PropelPDO $con = null) Return the first TipoInformacao matching the query
 * @method TipoInformacao findOneOrCreate(PropelPDO $con = null) Return the first TipoInformacao matching the query, or a new TipoInformacao object populated from the query conditions when no match is found
 *
 * @method TipoInformacao findOneById(int $Id) Return the first TipoInformacao filtered by the Id column
 * @method TipoInformacao findOneByNome(string $Nome) Return the first TipoInformacao filtered by the Nome column
 * @method TipoInformacao findOneByRequerConfirmacao(string $Requer_Confirmacao) Return the first TipoInformacao filtered by the Requer_Confirmacao column
 *
 * @method array findById(int $Id) Return TipoInformacao objects filtered by the Id column
 * @method array findByNome(string $Nome) Return TipoInformacao objects filtered by the Nome column
 * @method array findByRequerConfirmacao(string $Requer_Confirmacao) Return TipoInformacao objects filtered by the Requer_Confirmacao column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseTipoInformacaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTipoInformacaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'TipoInformacao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoInformacaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoInformacaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoInformacaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoInformacaoQuery) {
            return $criteria;
        }
        $query = new TipoInformacaoQuery();
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
     * @return   TipoInformacao|TipoInformacao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoInformacaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoInformacaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoInformacao A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOME`, `REQUER_CONFIRMACAO` FROM `tipo_informacao` WHERE `ID` = :p0';
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
            $obj = new TipoInformacao();
            $obj->hydrate($row);
            TipoInformacaoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoInformacao|TipoInformacao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoInformacao[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoInformacaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoInformacaoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoInformacaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoInformacaoPeer::ID, $keys, Criteria::IN);
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
     * @return TipoInformacaoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoInformacaoPeer::ID, $id, $comparison);
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
     * @return TipoInformacaoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TipoInformacaoPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query on the Requer_Confirmacao column
     *
     * Example usage:
     * <code>
     * $query->filterByRequerConfirmacao('fooValue');   // WHERE Requer_Confirmacao = 'fooValue'
     * $query->filterByRequerConfirmacao('%fooValue%'); // WHERE Requer_Confirmacao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requerConfirmacao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoInformacaoQuery The current query, for fluid interface
     */
    public function filterByRequerConfirmacao($requerConfirmacao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requerConfirmacao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requerConfirmacao)) {
                $requerConfirmacao = str_replace('*', '%', $requerConfirmacao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoInformacaoPeer::REQUER_CONFIRMACAO, $requerConfirmacao, $comparison);
    }

    /**
     * Filter the query by a related AlteracaoInformacaoUsuario object
     *
     * @param   AlteracaoInformacaoUsuario|PropelObjectCollection $alteracaoInformacaoUsuario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoInformacaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAlteracaoInformacaoUsuario($alteracaoInformacaoUsuario, $comparison = null)
    {
        if ($alteracaoInformacaoUsuario instanceof AlteracaoInformacaoUsuario) {
            return $this
                ->addUsingAlias(TipoInformacaoPeer::ID, $alteracaoInformacaoUsuario->getIdTipoInformacaoId(), $comparison);
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
     * @return TipoInformacaoQuery The current query, for fluid interface
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
     * @param   TipoInformacao $tipoInformacao Object to remove from the list of results
     *
     * @return TipoInformacaoQuery The current query, for fluid interface
     */
    public function prune($tipoInformacao = null)
    {
        if ($tipoInformacao) {
            $this->addUsingAlias(TipoInformacaoPeer::ID, $tipoInformacao->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
