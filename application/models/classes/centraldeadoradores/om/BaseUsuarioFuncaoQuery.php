<?php


/**
 * Base class that represents a query for the 'usuario_funcao' table.
 *
 *
 *
 * @method UsuarioFuncaoQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method UsuarioFuncaoQuery orderByIdUsuario($order = Criteria::ASC) Order by the Id_Usuario column
 * @method UsuarioFuncaoQuery orderByIdFuncao($order = Criteria::ASC) Order by the Id_Funcao column
 *
 * @method UsuarioFuncaoQuery groupById() Group by the Id column
 * @method UsuarioFuncaoQuery groupByIdUsuario() Group by the Id_Usuario column
 * @method UsuarioFuncaoQuery groupByIdFuncao() Group by the Id_Funcao column
 *
 * @method UsuarioFuncaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuarioFuncaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuarioFuncaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuarioFuncaoQuery leftJoinFuncao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Funcao relation
 * @method UsuarioFuncaoQuery rightJoinFuncao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Funcao relation
 * @method UsuarioFuncaoQuery innerJoinFuncao($relationAlias = null) Adds a INNER JOIN clause to the query using the Funcao relation
 *
 * @method UsuarioFuncaoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method UsuarioFuncaoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method UsuarioFuncaoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method UsuarioFuncao findOne(PropelPDO $con = null) Return the first UsuarioFuncao matching the query
 * @method UsuarioFuncao findOneOrCreate(PropelPDO $con = null) Return the first UsuarioFuncao matching the query, or a new UsuarioFuncao object populated from the query conditions when no match is found
 *
 * @method UsuarioFuncao findOneById(int $Id) Return the first UsuarioFuncao filtered by the Id column
 * @method UsuarioFuncao findOneByIdUsuario(int $Id_Usuario) Return the first UsuarioFuncao filtered by the Id_Usuario column
 * @method UsuarioFuncao findOneByIdFuncao(int $Id_Funcao) Return the first UsuarioFuncao filtered by the Id_Funcao column
 *
 * @method array findById(int $Id) Return UsuarioFuncao objects filtered by the Id column
 * @method array findByIdUsuario(int $Id_Usuario) Return UsuarioFuncao objects filtered by the Id_Usuario column
 * @method array findByIdFuncao(int $Id_Funcao) Return UsuarioFuncao objects filtered by the Id_Funcao column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseUsuarioFuncaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuarioFuncaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'UsuarioFuncao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioFuncaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UsuarioFuncaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioFuncaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioFuncaoQuery) {
            return $criteria;
        }
        $query = new UsuarioFuncaoQuery();
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
     * @return   UsuarioFuncao|UsuarioFuncao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioFuncaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioFuncaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   UsuarioFuncao A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_USUARIO`, `ID_FUNCAO` FROM `usuario_funcao` WHERE `ID` = :p0';
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
            $obj = new UsuarioFuncao();
            $obj->hydrate($row);
            UsuarioFuncaoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return UsuarioFuncao|UsuarioFuncao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|UsuarioFuncao[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioFuncaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioFuncaoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioFuncaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioFuncaoPeer::ID, $keys, Criteria::IN);
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
     * @return UsuarioFuncaoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UsuarioFuncaoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Id_Usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE Id_Usuario = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE Id_Usuario IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE Id_Usuario > 12
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
     * @return UsuarioFuncaoQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(UsuarioFuncaoPeer::ID_USUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(UsuarioFuncaoPeer::ID_USUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioFuncaoPeer::ID_USUARIO, $idUsuario, $comparison);
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
     * @return UsuarioFuncaoQuery The current query, for fluid interface
     */
    public function filterByIdFuncao($idFuncao = null, $comparison = null)
    {
        if (is_array($idFuncao)) {
            $useMinMax = false;
            if (isset($idFuncao['min'])) {
                $this->addUsingAlias(UsuarioFuncaoPeer::ID_FUNCAO, $idFuncao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFuncao['max'])) {
                $this->addUsingAlias(UsuarioFuncaoPeer::ID_FUNCAO, $idFuncao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioFuncaoPeer::ID_FUNCAO, $idFuncao, $comparison);
    }

    /**
     * Filter the query by a related Funcao object
     *
     * @param   Funcao|PropelObjectCollection $funcao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioFuncaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFuncao($funcao, $comparison = null)
    {
        if ($funcao instanceof Funcao) {
            return $this
                ->addUsingAlias(UsuarioFuncaoPeer::ID_FUNCAO, $funcao->getId(), $comparison);
        } elseif ($funcao instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioFuncaoPeer::ID_FUNCAO, $funcao->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return UsuarioFuncaoQuery The current query, for fluid interface
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
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioFuncaoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(UsuarioFuncaoPeer::ID_USUARIO, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioFuncaoPeer::ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return UsuarioFuncaoQuery The current query, for fluid interface
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
     * @param   UsuarioFuncao $usuarioFuncao Object to remove from the list of results
     *
     * @return UsuarioFuncaoQuery The current query, for fluid interface
     */
    public function prune($usuarioFuncao = null)
    {
        if ($usuarioFuncao) {
            $this->addUsingAlias(UsuarioFuncaoPeer::ID, $usuarioFuncao->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
