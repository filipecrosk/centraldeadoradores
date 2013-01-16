<?php


/**
 * Base class that represents a query for the 'arquivo_email' table.
 *
 *
 *
 * @method ArquivoEmailQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method ArquivoEmailQuery orderByIdArquivo($order = Criteria::ASC) Order by the Id_Arquivo column
 * @method ArquivoEmailQuery orderByIdEmail($order = Criteria::ASC) Order by the Id_Email column
 *
 * @method ArquivoEmailQuery groupById() Group by the Id column
 * @method ArquivoEmailQuery groupByIdArquivo() Group by the Id_Arquivo column
 * @method ArquivoEmailQuery groupByIdEmail() Group by the Id_Email column
 *
 * @method ArquivoEmailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArquivoEmailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArquivoEmailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArquivoEmailQuery leftJoinArquivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Arquivo relation
 * @method ArquivoEmailQuery rightJoinArquivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Arquivo relation
 * @method ArquivoEmailQuery innerJoinArquivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Arquivo relation
 *
 * @method ArquivoEmailQuery leftJoinEmailHeader($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailHeader relation
 * @method ArquivoEmailQuery rightJoinEmailHeader($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailHeader relation
 * @method ArquivoEmailQuery innerJoinEmailHeader($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailHeader relation
 *
 * @method ArquivoEmail findOne(PropelPDO $con = null) Return the first ArquivoEmail matching the query
 * @method ArquivoEmail findOneOrCreate(PropelPDO $con = null) Return the first ArquivoEmail matching the query, or a new ArquivoEmail object populated from the query conditions when no match is found
 *
 * @method ArquivoEmail findOneById(int $Id) Return the first ArquivoEmail filtered by the Id column
 * @method ArquivoEmail findOneByIdArquivo(int $Id_Arquivo) Return the first ArquivoEmail filtered by the Id_Arquivo column
 * @method ArquivoEmail findOneByIdEmail(int $Id_Email) Return the first ArquivoEmail filtered by the Id_Email column
 *
 * @method array findById(int $Id) Return ArquivoEmail objects filtered by the Id column
 * @method array findByIdArquivo(int $Id_Arquivo) Return ArquivoEmail objects filtered by the Id_Arquivo column
 * @method array findByIdEmail(int $Id_Email) Return ArquivoEmail objects filtered by the Id_Email column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseArquivoEmailQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArquivoEmailQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'ArquivoEmail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArquivoEmailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ArquivoEmailQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArquivoEmailQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArquivoEmailQuery) {
            return $criteria;
        }
        $query = new ArquivoEmailQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$Id, $Id_Arquivo, $Id_Email]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ArquivoEmail|ArquivoEmail[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArquivoEmailPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArquivoEmailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   ArquivoEmail A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_ARQUIVO`, `ID_EMAIL` FROM `arquivo_email` WHERE `ID` = :p0 AND `ID_ARQUIVO` = :p1 AND `ID_EMAIL` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ArquivoEmail();
            $obj->hydrate($row);
            ArquivoEmailPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return ArquivoEmail|ArquivoEmail[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ArquivoEmail[]|mixed the list of results, formatted by the current formatter
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
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ArquivoEmailPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArquivoEmailPeer::ID_ARQUIVO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ArquivoEmailPeer::ID_EMAIL, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ArquivoEmailPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArquivoEmailPeer::ID_ARQUIVO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ArquivoEmailPeer::ID_EMAIL, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ArquivoEmailPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Id_Arquivo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdArquivo(1234); // WHERE Id_Arquivo = 1234
     * $query->filterByIdArquivo(array(12, 34)); // WHERE Id_Arquivo IN (12, 34)
     * $query->filterByIdArquivo(array('min' => 12)); // WHERE Id_Arquivo > 12
     * </code>
     *
     * @see       filterByArquivo()
     *
     * @param     mixed $idArquivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function filterByIdArquivo($idArquivo = null, $comparison = null)
    {
        if (is_array($idArquivo) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ArquivoEmailPeer::ID_ARQUIVO, $idArquivo, $comparison);
    }

    /**
     * Filter the query on the Id_Email column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEmail(1234); // WHERE Id_Email = 1234
     * $query->filterByIdEmail(array(12, 34)); // WHERE Id_Email IN (12, 34)
     * $query->filterByIdEmail(array('min' => 12)); // WHERE Id_Email > 12
     * </code>
     *
     * @see       filterByEmailHeader()
     *
     * @param     mixed $idEmail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function filterByIdEmail($idEmail = null, $comparison = null)
    {
        if (is_array($idEmail) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ArquivoEmailPeer::ID_EMAIL, $idEmail, $comparison);
    }

    /**
     * Filter the query by a related Arquivo object
     *
     * @param   Arquivo|PropelObjectCollection $arquivo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ArquivoEmailQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByArquivo($arquivo, $comparison = null)
    {
        if ($arquivo instanceof Arquivo) {
            return $this
                ->addUsingAlias(ArquivoEmailPeer::ID_ARQUIVO, $arquivo->getId(), $comparison);
        } elseif ($arquivo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArquivoEmailPeer::ID_ARQUIVO, $arquivo->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByArquivo() only accepts arguments of type Arquivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Arquivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function joinArquivo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Arquivo');

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
            $this->addJoinObject($join, 'Arquivo');
        }

        return $this;
    }

    /**
     * Use the Arquivo relation Arquivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArquivoQuery A secondary query class using the current class as primary query
     */
    public function useArquivoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArquivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Arquivo', 'ArquivoQuery');
    }

    /**
     * Filter the query by a related EmailHeader object
     *
     * @param   EmailHeader|PropelObjectCollection $emailHeader The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ArquivoEmailQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEmailHeader($emailHeader, $comparison = null)
    {
        if ($emailHeader instanceof EmailHeader) {
            return $this
                ->addUsingAlias(ArquivoEmailPeer::ID_EMAIL, $emailHeader->getIdEmail(), $comparison);
        } elseif ($emailHeader instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArquivoEmailPeer::ID_EMAIL, $emailHeader->toKeyValue('PrimaryKey', 'IdEmail'), $comparison);
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
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function joinEmailHeader($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useEmailHeaderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmailHeader($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmailHeader', 'EmailHeaderQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ArquivoEmail $arquivoEmail Object to remove from the list of results
     *
     * @return ArquivoEmailQuery The current query, for fluid interface
     */
    public function prune($arquivoEmail = null)
    {
        if ($arquivoEmail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArquivoEmailPeer::ID), $arquivoEmail->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArquivoEmailPeer::ID_ARQUIVO), $arquivoEmail->getIdArquivo(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ArquivoEmailPeer::ID_EMAIL), $arquivoEmail->getIdEmail(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
