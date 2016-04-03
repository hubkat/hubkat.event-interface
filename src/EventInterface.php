<?php
// @codingStandardsIgnoreFile

namespace Hubkat\EventInterface;

interface EventInterface
{
    public function isValid($secret);

    public function toArray();

    public function getDelivery();

    public function getName();

    public function getSignature();

    public function getPayload();

    public function getRawBody();
}
