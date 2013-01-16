<?php


/**
 * Base class that represents a query for the 'conta_email' table.
 *
 *
 *
 * @method ContaEmailQuery orderByIdContaEmail($order = Criteria::ASC) Order by the Id_Conta_Email column
 * @method ContaEmailQuery orderByUsername($order = Criteria::ASC) Order by the UserName column
 * @method ContaEmailQuery orderByPassword($order = Criteria::ASC) Order by the Password column
 * @method ContaEmailQuery orderByEmailsEnviados($order = Criteria::ASC) Order by the Emails_Enviados column
 * @method ContaEmailQuery orderByUltimoEnvio($order = Criteria::ASC) Order by the Ultimo_Envio column
 *
 * @method ContaEmailQuery groupByIdContaEmail() Group by the Id_Conta_Email column
 * @method ContaEmailQuery groupByUsername() Group by the UserName column
 * @method ContaEmailQuery groupByPassword() Group by the Password column
 * @method ContaEmailQuery groupByEmailsEnviados() Group by the Emails_Enviados column
 * @method ContaEmailQuery groupByUltimoEnvio() Group by the Ultimo_Envio column
 *
 * @method ContaEmailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ContaEmailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ContaEmailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ContaEmail findOne(PropelPDO $con = null) Return the first ContaEmail matching the query
 * @method ContaEmail findOneOrCreate(PropelPDO $con = null) Return the first ContaEmail matching the query, or a new ContaEmail object populated from the query conditions when no match is found
 *
 * @method ContaEmail findOneByIdContaEmail(int $Id_Conta_Email) Return the first ContaEmail filtered by the Id_Conta_Email column
 * @method ContaEmail findOneByUsername(string $UserName) Return the first ContaEmail filtered by the UserName column
 * @method ContaEmail findOneByPassword(string $Password) Return the first ContaEmail filtered by the Password column
 * @method ContaEmail findOneByEmailsEnviados(int $Emails_Enviados) Return the first ContaEmail filtered by the Emails_Enviados column
 * @method ContaEmail findOneByUltimoEnvio(string $Ultimo_Envio) Return the first ContaEmail filtered by the Ultimo_Envio column
 *
 * @method array findByIdContaEmail(int $Id_Conta_Email) Return ContaEmail objects filtered by the Id_Conta_Email column
 * @method array findByUsername(string $UserName) Return ContaEmail objects filtered by the UserName column
 * @method array findByPassword(string $Password) Return ContaEmail objects filtered by the Password column
 * @method array findByEmailsEnviados(int $Emails_Enviados) Return ContaEmail objects filtered by the Emails_Enviados column
 * @method array findByUltimoEnvio(string $Ultimo_Envio) Return ContaEmail objects filtered by the Ultimo_Envio column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseContaEmailQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseContaEmailQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'ContaEmail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ContaEmailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ContaEmailQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ContaEmailQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ContaEmailQuery) {
            return $criteria;
        }
        $query = new ContaEmailQuery();
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
     * @return   ContaEmail|ContaEmail[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ContaEmailPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ContaEmailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   ContaEmail A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CONTA_EMAIL`, `USERNAME`, `PASSWORD`, `EMAILS_ENVIADOS`, `ULTIMO_ENVIO` FROM `conta_email` WHERE `ID_CONTA_EMAIL` = :p0';
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
            $obj = new ContaEmail();
            $obj->hydrate($row);
            ContaEmailPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ContaEmail|ContaEmail[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ContaEmail[]|mixed the list of results, formatted by the current formatter
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
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ContaEmailPeer::ID_CONTA_EMAIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ContaEmailPeer::ID_CONTA_EMAIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id_Conta_Email column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContaEmail(1234); // WHERE Id_Conta_Email = 1234
     * $query->filterByIdContaEmail(array(12, 34)); // WHERE Id_Conta_Email IN (12, 34)
     * $query->filterByIdContaEmail(array('min' => 12)); // WHERE Id_Conta_Email > 12
     * </code>
     *
     * @param     mixed $idContaEmail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function filterByIdContaEmail($idContaEmail = null, $comparison = null)
    {
        if (is_array($idContaEmail) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ContaEmailPeer::ID_CONTA_EMAIL, $idContaEmail, $comparison);
    }

    /**
     * Filter the query on the UserName column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE UserName = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE UserName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContaEmailPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the Password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE Password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE Password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContaEmailPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the Emails_Enviados column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailsEnviados(1234); // WHERE Emails_Enviados = 1234
     * $query->filterByEmailsEnviados(array(12, 34)); // WHERE Emails_Enviados IN (12, 34)
     * $query->filterByEmailsEnviados(array('min' => 12)); // WHERE Emails_Enviados > 12
     * </code>
     *
     * @param     mixed $emailsEnviados The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function filterByEmailsEnviados($emailsEnviados = null, $comparison = null)
    {
        if (is_array($emailsEnviados)) {
            $useMinMax = false;
            if (isset($emailsEnviados['min'])) {
                $this->addUsingAlias(ContaEmailPeer::EMAILS_ENVIADOS, $emailsEnviados['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emailsEnviados['max'])) {
                $this->addUsingAlias(ContaEmailPeer::EMAILS_ENVIADOS, $emailsEnviados['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContaEmailPeer::EMAILS_ENVIADOS, $emailsEnviados, $comparison);
    }

    /**
     * Filter the query on the Ultimo_Envio column
     *
     * Example usage:
     * <code>
     * $query->filterByUltimoEnvio('2011-03-14'); // WHERE Ultimo_Envio = '2011-03-14'
     * $query->filterByUltimoEnvio('now'); // WHERE Ultimo_Envio = '2011-03-14'
     * $query->filterByUltimoEnvio(array('max' => 'yesterday')); // WHERE Ultimo_Envio > '2011-03-13'
     * </code>
     *
     * @param     mixed $ultimoEnvio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function filterByUltimoEnvio($ultimoEnvio = null, $comparison = null)
    {
        if (is_array($ultimoEnvio)) {
            $useMinMax = false;
            if (isset($ultimoEnvio['min'])) {
                $this->addUsingAlias(ContaEmailPeer::ULTIMO_ENVIO, $ultimoEnvio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ultimoEnvio['max'])) {
                $this->addUsingAlias(ContaEmailPeer::ULTIMO_ENVIO, $ultimoEnvio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContaEmailPeer::ULTIMO_ENVIO, $ultimoEnvio, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ContaEmail $contaEmail Object to remove from the list of results
     *
     * @return ContaEmailQuery The current query, for fluid interface
     */
    public function prune($contaEmail = null)
    {
        if ($contaEmail) {
            $this->addUsingAlias(ContaEmailPeer::ID_CONTA_EMAIL, $contaEmail->getIdContaEmail(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
