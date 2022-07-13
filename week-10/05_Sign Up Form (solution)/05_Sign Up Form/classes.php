<?php
    class User {
        public function InformationCard() {
            $stringToReturn = "$this->display_name created their profile at $this->creation_time";

            return $stringToReturn;
        }
    }
?>