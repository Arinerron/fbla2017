<?php

ini_set('mysql.connect_timeout', 3000);
ini_set('default_socket_timeout', 3000);

    /* define the database class */
    class Database {
        public $host = 'localhost';
        public $name = '';
        public $user = '';
        public $pass = '';

        private $mysqli;

        /* constructor function, inits the database connection */
        function __construct($chost, $cname, $cuser, $cpass) {
            $this->host = $chost;
            $this->name = $cname;
            $this->user = $cuser;
            $this->pass = $cpass;

            $this->mysqli = new mysqli($this->getHost(), $this->getUsername(), $this->getPassword(), $this->getName());
        }

        /* closes the connection to the database */
        function close() {
            return $this->getMySQLi()->close();
        }

        /* returns a query object for the given parameters */
        function query($query, $type='', ...$params) {
            $statement = $this->getMySQLi()->prepare($query);

            if(strlen($type) != 0) {
                // bind parameters to query
                $statement->bind_param($type, ...$params);
            }

            return new Query($statement);
        }

        /* getter functions */

        function getMySQLi() {
            return $this->mysqli;
        }

        function getHost() {
            return $this->host;
        }

        function getName() {
            return $this->name;
        }

        function getUsername() {
            return $this->user;
        }

        function getPassword() {
            return $this->pass;
        }
    }

    /* define the query class */
    class Query {
        private $statement;
        private $result;

        /* constructor, sets variables and stuff */
        function __construct($statement) {
            $this->statement = $statement;
        }

        /* executes the statement */
        function execute() {
            $status = $this->getStatement()->execute();
            $this->result = $this->getStatement()->get_result();

            return $status;
        }

        /* closes the statement */
        function close() {
            return $this->getStatement()->close();
        }

        /* returns the number of results */
        function countResult() {
            return $this->getResult()->num_rows;
        }

        /* getter functions */

        /* returns the statement object */
        function getStatement() {
            return $this->statement;
        }

        /* returns the result object-- DO NOT CONFUSE WITH getRows()! */
        function getResult() {
            return $this->result;
        }

        /* returns the first row only */
        function getRow() {
            // echo 'er: ' . $this->getStatement()->error;
            // mysql timing out
            return $this->getResult()->fetch_assoc();
        }

        /* returns the result in an array */
        function getRows() {
            $rows = array();
            while($row = $this->getRow()) {
                $rows[] = $row;
            }

            return $rows;
        }
    }
?>
