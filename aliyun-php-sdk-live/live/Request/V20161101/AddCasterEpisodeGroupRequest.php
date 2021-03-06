<?php

namespace live\Request\V20161101;

/**
 * Request of AddCasterEpisodeGroup
 *
 * @method string getSideOutputUrl()
 * @method array getItems()
 * @method string getClientToken()
 * @method string getDomainName()
 * @method string getStartTime()
 * @method string getRepeatNum()
 * @method string getCallbackUrl()
 * @method string getOwnerId()
 */
class AddCasterEpisodeGroupRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'live',
            '2016-11-01',
            'AddCasterEpisodeGroup',
            'live'
        );
    }

    /**
     * @param string $sideOutputUrl
     *
     * @return $this
     */
    public function setSideOutputUrl($sideOutputUrl)
    {
        $this->requestParameters['SideOutputUrl'] = $sideOutputUrl;
        $this->queryParameters['SideOutputUrl'] = $sideOutputUrl;

        return $this;
    }

    /**
     * @param array $items
     *
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->requestParameters['Items'] = $items;
        foreach ($items as $i => $iValue) {
            $this->queryParameters['Item.' . ($i + 1) . '.VodUrl'] = $items[$i]['VodUrl'];
            $this->queryParameters['Item.' . ($i + 1) . '.ItemName'] = $items[$i]['ItemName'];
        }

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $repeatNum
     *
     * @return $this
     */
    public function setRepeatNum($repeatNum)
    {
        $this->requestParameters['RepeatNum'] = $repeatNum;
        $this->queryParameters['RepeatNum'] = $repeatNum;

        return $this;
    }

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->requestParameters['CallbackUrl'] = $callbackUrl;
        $this->queryParameters['CallbackUrl'] = $callbackUrl;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
