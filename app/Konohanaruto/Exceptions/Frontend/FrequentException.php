<?php
/**
 * Created by PhpStorm.
 * User: konohanaruto
 * Date: 2017/4/8
 * Time: 17:22
 */

namespace App\Konohanaruto\Exceptions\Frontend;
use Exception;

abstract class FrequentException extends Exception
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $detail;

    /**
     * @param @string $message
     * @return
     */
    public function __construct($message)
    {
        parent::__construct($message);
    }

    /**
     * Get the status
     *
     * @return int
     */
    public function getStatus()
    {
        return (int) $this->status;
    }

    /**
     * Return the Exception as an array
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'id'     => $this->id,
            'status' => $this->status,
            'title'  => $this->title,
            'detail' => $this->detail
        );
    }

    /**
     * Build the Exception
     *
     * @param array $args
     * @return string
     */
    protected function build(array $args)
    {
        $this->id = array_shift($args);

        $error = config(sprintf('errors.%s', $this->id));

        $this->title  = $error['title'];
        $this->detail = vsprintf($error['detail'], $args);

        return $this->detail;
    }
}