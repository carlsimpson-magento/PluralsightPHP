<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 26/03/2020
 * Time: 16:03
 */

    class Author extends Person {

        public static $centuryPopular = "19th";
        private $penName = "Fred";

        public function getPenName()
        {
            return $this->penName;
        }

        public function getCompleteName()
        {
            return $this->getFullName();
        }

        public static function getCenturyAuthorWasPopular(){
            return self::$centuryPopular;
        }
    }