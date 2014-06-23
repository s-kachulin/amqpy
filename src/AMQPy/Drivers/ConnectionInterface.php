<?php


namespace AMQPy\Drivers;


interface ConnectionInterface
{
    public function __construct(array $credentials, $async);

    /**
     * Return current connection's credential
     *
     * @return array
     */
    public function getCredentials();

    /**
     * Whether driver communicates with server asynchronously.
     *
     * @return bool
     */
    public function isAsync();

    ///**
    // * Whether transaction started
    // *
    // * @return bool
    // */
    //public function isTransactional();

    /**
     * When in asynchronous mode listen for new data from AMQP broker, ignored otherwise.
     *
     * @return mixed
     */
    public function wait();

    // connection-related methods

    /**
     * Connect to AMQP server
     *
     * @return bool Whether connection established
     */
    public function connect();

    /**
     * @return bool Whether connection established
     */
    public function isConnected();

    /**
     * Disconnect to AMQP server
     *
     * @return bool Whether disconnected from server
     */
    public function disconnect();

    /**
     * Reconnect to AMQP server
     *
     * @return bool Whether connection established again
     */
    public function reconnect();
}