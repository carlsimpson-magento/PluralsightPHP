<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 26/03/2020
 * Time: 16:03
 */

    class Person
    {

        // ** Constants
        //-----------------
        const AVG_LIFE_SPAN = 79;

        // public $firstName;
        // public $lastName;
        // public $yearBorn;

        // protected $firstName;
        // protected $lastName;
        // protected $yearBorn;

        private $firstName;
        private $lastName;
        private $yearBorn;

        public function __construct($tempfirstName = '', $templastName = '', $tempyearBorn= '')
        {
            //echo "I am the constructor";
            //echo '<br />';
            echo "ran through Person Constructor";

            $this->firstName = $tempfirstName;
            $this->lastName = $templastName;
            $this->yearBorn = $tempyearBorn;
        }

        public function getFirstName()
        {
            return $this->firstName;
        }

        /**
         * @param string $firstName
         */
        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }
        protected function getFullName()
        {
            return $this->firstName. " " .$this->lastName;
        }
    }

?>