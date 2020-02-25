<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Service\Dellin\Model\Response\Reference
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Service\Dellin\Model\Response\Reference;

use Er1z\FakeMock\Annotations\FakeMock;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestTerminalsResponse
 *
 * @package  SaaS\Service\Dellin\Model\Response\Reference
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class RequestTerminalsResponse
{
    /**
     * @var array|RequestTerminal[]
     *
     * @Serializer\Type("array<SaaS\Service\Dellin\Model\Response\Reference\RequestTerminal>")
     * @Serializer\SerializedName("terminals")
     */
    public $terminals;
}
