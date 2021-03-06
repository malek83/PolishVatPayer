<?php

namespace Malek83\PolishVatPayer\Client;

use Malek83\PolishVatPayer\Exception\PolishVatPayerExceptionInterface;
use Malek83\PolishVatPayer\Result\PolishVatNumberVerificationResult;

/**
 * Interface must be implemented by all client classes that provides Polish VAT Number web service
 *
 * Interface ClientInterface
 * @package Malek83\PolishVatPayer\Client
 */
interface ClientInterface
{
    /**
     * Verify at Ministry of Finances API if given VAT Number is registered as VAT Tax Payer in Poland
     *
     * @param string $vatNumber Polish VAT Number without leading country code
     * @return PolishVatNumberVerificationResult result of VAT Number verification
     * @throws PolishVatPayerExceptionInterface exception is thrown if something goes wrong
     */
    public function verify(string $vatNumber);
}
