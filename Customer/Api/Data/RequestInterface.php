<?php
/**
 * Task request interface
 *
 * @category  Task
 * @package   Task\Customer
 * @author    Roman Koshyk <romadaaaa@gmail.com>
 */
namespace Task\Customer\Api\Data;

/**
 * Interface RequestRepository
 * @package Task\Customer\Api\Data
 */
interface RequestInterface
{
    /**
     * Table name
     */
    const TABLE_NAME = 'task_customer_request_contact';
    /**#@+
     * Constants defined for keys of data array.
     */
    const ID = 'id';
    const NAME = 'name';
    const EMAIL = 'email';
    const COMMENT = 'comment';
    const STATUS = 'status';
    const CREATED_AT = 'created_at';
    const ANSWER = 'answer';
    const TELEPHONE = 'telephone';
    /**#@-*/

    /**
     * Get id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment();

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus();

    /**
     * Get created date
     *
     * @return string
     */
    public function getCreatedDate();

    /**
     * Get Answer data
     *
     * @return string
     */
    public function getAnswer();

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone();

    /**
     * Set id
     *
     * @param int $id
     *
     * @return RequestInterface
     */
    public function setId($id);

    /**
     * Set name
     *
     * @param string $name
     *
     * @return RequestInterface
     */
    public function setName($name);

    /**
     * Set email
     *
     * @param string $email
     *
     * @return RequestInterface
     */
    public function setEmail($email);

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return RequestInterface
     */
    public function setComment($comment);

    /**
     * Set request status
     *
     * @param string $status
     *
     * @return RequestInterface
     */
    public function setStatus($status);

    /**
     * Set creation date
     *
     * @param string $date
     *
     * @return RequestInterface
     */
    public function setCreatedDate($date);

    /**
     * Set Answer data
     *
     * @param string $answer
     *
     * @return RequestInterface
     */
    public function setAnswer($answer);

    /**
     * Set Telephone
     *
     * @param string $telephone
     *
     * @return RequestInterface
     */
    public function setTelephone($telephone);
}
