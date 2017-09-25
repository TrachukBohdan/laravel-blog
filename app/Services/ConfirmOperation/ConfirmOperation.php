<?php

    namespace App\Services\ConfirmOperation;

    class ConfirmOperation
    {
        private $title;
        private $description;
        private $confirmUrl;
        private $cancelUrl;

        public function __construct(
            string $title,
            string $description,
            string $confirmUrl,
            string $cancelUrl
        ) {
            $this->title = $title;
            $this->description = $description;
            $this->cancelUrl = $cancelUrl;
            $this->confirmUrl = $confirmUrl;
        }

        public function getTitle()
        {
            return $this->title;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getConfirmUrl()
        {
            return $this->confirmUrl;
        }

        public function getCancelUrl()
        {
            return $this->cancelUrl;
        }
    }