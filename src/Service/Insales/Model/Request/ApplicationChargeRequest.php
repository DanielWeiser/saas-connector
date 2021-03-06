<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Service\Insales\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Service\Insales\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations\FakeMock as FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField as FakeMockField;
use SaaS\Service\Insales\Model\ApplicationCharge;

/**
 * Class ApplicationChargeRequest
 *
 * @package  SaaS\Service\Insales\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class ApplicationChargeRequest
{
    /**
     * @var ApplicationCharge $applicationCharge
     *
     * @JMS\Type("SaaS\Service\Insales\Model\ApplicationCharge")
     * @JMS\SerializedName("application_charge")
     *
     * @FakeMockField()
     */
    protected $applicationCharge;

    /**
     * ApplicationChargeRequest constructor.
     *
     * @param ApplicationCharge|null $applicationCharge
     */
    public function __construct(?ApplicationCharge $applicationCharge = null)
    {
        if ($applicationCharge === null) {
            $applicationCharge = new ApplicationCharge();
        }

        $this->applicationCharge = $applicationCharge;
    }

    /**
     * @return ApplicationCharge
     */
    public function getApplicationCharge(): ApplicationCharge
    {
        return $this->applicationCharge;
    }

    /**
     * @param ApplicationCharge $applicationCharge
     */
    public function setApplicationCharge(ApplicationCharge $applicationCharge): void
    {
        $this->applicationCharge = $applicationCharge;
    }
}
