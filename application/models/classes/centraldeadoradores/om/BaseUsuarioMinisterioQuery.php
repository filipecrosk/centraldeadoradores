<?php


/**
 * Base class that represents a query for the 'usuario_ministerio' table.
 *
 *
 *
 * @method UsuarioMinisterioQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method UsuarioMinisterioQuery orderByIdUsuario($order = Criteria::ASC) Order by the Id_Usuario column
 * @method UsuarioMinisterioQuery orderByIdMinisterio($order = Criteria::ASC) Order by the Id_Ministerio column
 *
 * @method UsuarioMinisterioQuery groupById() Group by the Id column
 * @method UsuarioMinisterioQuery groupByIdUsuario() Group by the Id_Usuario column
 * @method UsuarioMinisterioQuery groupByIdMinisterio() Group by the Id_Ministerio column
 *
 * @method UsuarioMinisterioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuarioMinisterioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuarioMinisterioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuarioMinisterioQuery leftJoinMinisterio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ministerio relation
 * @method UsuarioMinisterioQuery rightJoinMinisterio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ministerio relation
 * @method UsuarioMinisterioQuery innerJoinMinisterio($relationAlias = null) Adds a INNER JOIN clause to the query using the Ministerio relation
 *
 * @method UsuarioMinisterioQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method UsuarioMinisterioQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method UsuarioMinisterioQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method UsuarioMinisterio findOne(PropelPDO $con = null) Return the first UsuarioMinisterio matching the query
 * @method UsuarioMinisterio findOneOrCreate(PropelPDO $con = null) Return the first UsuarioMinisterio matching the query, or a new UsuarioMinisterio object populated from the query conditions when no match is found
 *
 * @method UsuarioMinisterio findOneById(int $Id) Return the first UsuarioMinisterio filtered by the Id column
 * @method UsuarioMinisterio findOneByIdUsuario(int $Id_Usuario) Return the first UsuarioMinisterio filtered by the Id_Usuario column
 * @method UsuarioMinisterio findOneByIdMinisterio(int $Id_Ministerio) Return the first UsuarioMinisterio filtered by the Id_Ministerio column
 *
 * @method array findById(int $Id) Return UsuarioMinisterio objects filtered by the Id column
 * @method array findByIdUsuario(int $Id_Usuario) Return UsuarioMinisterio objects filtered by the Id_Usuario column
 * @method array findByIdMinisterio(int $Id_Ministerio) Return UsuarioMinisterio objects filtered by the Id_Ministerio column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseUsuarioMinisterioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuarioMinisterioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'UsuarioMinisterio', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioMinisterioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UsuarioMinisterioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioMinisterioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioMinisterioQuery) {
            return $criteria;
        }
        $query = new UsuarioMinisterioQuery();
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
     * @return   UsuarioMinisterio|UsuarioMinisterio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioMinisterioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioMinisterioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   UsuarioMinisterio A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_USUARIO`, `ID_MINISTERIO` FROM `usuario_ministerio` WHERE `ID` = :p0';
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
            $obj = new UsuarioMinisterio();
            $obj->hydrate($row);
            UsuarioMinisterioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return UsuarioMinisterio|UsuarioMinisterio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|UsuarioMinisterio[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioMinisterioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioMinisterioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioMinisterioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioMinisterioPeer::ID, $keys, Criteria::IN);
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
     * @return UsuarioMinisterioQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UsuarioMinisterioPeer::ID, $id, $comparison);
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
     * @return UsuarioMinisterioQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(UsuarioMinisterioPeer::ID_USUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(UsuarioMinisterioPeer::ID_USUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioMinisterioPeer::ID_USUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the Id_Ministerio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMinisterio(1234); // WHERE Id_Ministerio = 1234
     * $query->filterByIdMinisterio(array(12, 34)); // WHERE Id_Ministerio IN (12, 34)
     * $query->filterByIdMinisterio(array('min' => 12)); // WHERE Id_Ministerio > 12
     * </code>
     *
     * @see       filterByMinisterio()
     *
     * @param     mixed $idMinisterio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioMinisterioQuery The current query, for fluid interface
     */
    public function filterByIdMinisterio($idMinisterio = null, $comparison = null)
    {
        if (is_array($idMinisterio)) {
            $useMinMax = false;
            if (isset($idMinisterio['min'])) {
                $this->addUsingAlias(UsuarioMinisterioPeer::ID_MINISTERIO, $idMinisterio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMinisterio['max'])) {
                $this->addUsingAlias(UsuarioMinisterioPeer::ID_MINISTERIO, $idMinisterio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioMinisterioPeer::ID_MINISTERIO, $idMinisterio, $comparison);
    }

    /**
     * Filter the query by a related Ministerio object
     *
     * @param   Ministerio|PropelObjectCollection $ministerio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioMinisterioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMinisterio($ministerio, $comparison = null)
    {
        if ($ministerio instanceof Ministerio) {
            return $this
                ->addUsingAlias(UsuarioMinisterioPeer::ID_MINISTERIO, $ministerio->getId(), $comparison);
        } elseif ($ministerio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioMinisterioPeer::ID_MINISTERIO, $ministerio->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByMinisterio() only accepts arguments of type Ministerio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ministerio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioMinisterioQuery The current query, for fluid interface
     */
    public function joinMinisterio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ministerio');

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
            $this->addJoinObject($join, 'Ministerio');
        }

        return $this;
    }

    /**
     * Use the Ministerio relation Ministerio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MinisterioQuery A secondary query class using the current class as primary query
     */
    public function useMinisterioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMinisterio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ministerio', 'MinisterioQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioMinisterioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(UsuarioMinisterioPeer::ID_USUARIO, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioMinisterioPeer::ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return UsuarioMinisterioQuery The current query, for fluid interface
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
     * @param   UsuarioMinisterio $usuarioMinisterio Object to remove from the list of results
     *
     * @return UsuarioMinisterioQuery The current query, for fluid interface
     */
    public function prune($usuarioMinisterio = null)
    {
        if ($usuarioMinisterio) {
            $this->addUsingAlias(UsuarioMinisterioPeer::ID, $usuarioMinisterio->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
