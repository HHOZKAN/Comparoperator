<?php
    class Certificate extends Manager {
        private $expiresAt;
        private $signatory;

        public function __construct($data) {
            
        }

        public function getExpiresAt()
        {
                return $this->expiresAt;
        }

        public function getSignatory()
        {
                return $this->signatory;
        }
    }
    