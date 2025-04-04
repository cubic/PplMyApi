<?php
/**
 * Copyright (C) 2016 Adam Schubert <adam.schubert@sg1-game.net>.
 */

namespace Salamek\PplMyApi\Model;


use Salamek\PplMyApi\Exception\WrongDataException;

/**
 * Interface IPaymentInfo
 * @package Salamek\PplMyApi\Model
 */
interface IPaymentInfo
{
    /**
     * @param string|null $bankAccount
     */
    public function setBankAccount(?string $bankAccount = null): void;

    /**
     * @param string|null $bankCode
     * @todo add bank code check
     */
    public function setBankCode(?string $bankCode = null): void;

    /**
     * @param string $cashOnDeliveryCurrency
     * @throws WrongDataException
     */
    public function setCashOnDeliveryCurrency(string $cashOnDeliveryCurrency): void;

    /**
     * @param float $cashOnDeliveryPrice
     */
    public function setCashOnDeliveryPrice(float $cashOnDeliveryPrice): void;

    /**
     * @param int $cashOnDeliveryVariableSymbol
     */
    public function setCashOnDeliveryVariableSymbol(int $cashOnDeliveryVariableSymbol): void;

    /**
     * @param string|null $iban
     */
    public function setIban(?string $iban = null);

    /**
     * @param string|null $insuranceCurrency
     * @throws WrongDataException
     */
    public function setInsuranceCurrency(?string $insuranceCurrency = null): void;

    /**
     * @param float|null $insurancePrice
     */
    public function setInsurancePrice(?float $insurancePrice = null): void;

    /**
     * @param string|null $specificSymbol
     */
    public function setSpecificSymbol(?string $specificSymbol = null): void;

    /**
     * @param string|null $swift
     */
    public function setSwift(?string $swift = null): void;

    /**
     * @return null|string
     */
    public function getBankAccount(): ?string;

    /**
     * @return null|string
     */
    public function getBankCode(): ?string;

    /**
     * @return string
     */
    public function getCashOnDeliveryCurrency(): string;

    /**
     * @return float
     */
    public function getCashOnDeliveryPrice(): float;

    /**
     * @return int
     */
    public function getCashOnDeliveryVariableSymbol(): int;

    /**
     * @return null|string
     */
    public function getIban(): ?string;

    /**
     * @return null|string
     */
    public function getInsuranceCurrency(): ?string;

    /**
     * @return float|null
     */
    public function getInsurancePrice(): ?float;

    /**
     * @return null|string
     */
    public function getSpecificSymbol(): ?string;

    /**
     * @return null|string
     */
    public function getSwift(): ?string;
}
